<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientsService;
use App\Models\Tasks;
use App\Models\Employee;
use App\Models\Postcheck_Attachment;
use App\Models\Postchecks;
use App\Models\Precheck_Attachment;
use App\Models\Prechecks;
use App\Models\RecieveDoc;
use App\Models\Service;
use App\Models\Task_Comments;
use App\Models\Task_Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Empty_;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role;

class TasksController extends Controller
{
    public function taskjob(Request $request)
    {
        $role  = Role::find(Auth::user()->role_id);
        $user = Auth::user()->id;
        if (Auth::user()->role_id < 2) {
            $tasks = Tasks::with('client.clientserv.serv', 'userAssign', 'juniorAssign')->get();
            return view('task.tasks', compact('tasks'));
        } else {
            $tasks = Tasks::with('client.clientserv.serv', 'userAssign', 'juniorAssign')
                ->where('user_id', '=', $user)
                ->get();
            return view('task.tasks', compact('tasks'));
        }
    }
    public function notaskjob()
    {
        return view('task.notasks');
    }
    public function addemployee()
    {
    }

    public function create()
    {
        //$employees = Employee::all();
        $client = Client::all();
        $clientservice = ClientsService::all();
        $users = User::with('roleuser')->get();

        $role = Role::find(Auth::user()->role_id);
        if ($role->hasPermissionTo('task-add')) {
            return view('task.createTask', compact(['clientservice', 'client', 'users']));
        } else {
            return redirect()->route('error.403');
        }
    }

    public function store(Request $request)
    {
        $task = new Tasks();

        $task->clients_id                            =    $request->clients_id;
        $task->user_id                               =    $request->employees;
        $task->services_id                           =    $request->service;
        $task->start_date                            =    $request->start_date;
        $task->end_date                              =    $request->end_date;
        $task->job_date_documents_received_precheck  =    $request->job_date_documents_received_precheck;
        $task->job_kpi_enabled                       =    $request->job_kpi_enabled;
        $task->job_kpi_deadline_to_receive_document  =    $request->job_kpi_deadline_to_receive_document;
        $task->job_date_documents_receive            =    $request->job_date_documents_receive;
        $task->job_kpi_points_to_receive_documents   =    $request->job_kpi_points_to_receive_documents;
        $task->job_kpi_deadline_to_complete          =    $request->job_kpi_deadline_to_complete;
        $task->job_kpi_points_to_complete_job        =    $request->job_kpi_points_to_complete_job;
        //$task->job_status                          =    $request->job_status;

        $task->save();
        return redirect()->route('task.createTask')->with('message', 'Task was created successfully');
    }

    public function receiveDoc($id)
    {
        return view('task.receivedoc');
    }

    public function documents($id)
    {
        $task = Tasks::with('client.clientserv.serv', 'employee')->find($id);
        return view('task.receivedoc', compact('task'));
    }
    public function receivedocStore(Request $request)
    {
        /*$validate = $request->validate([
            'dateReceived'   =>  'required',
            'note'           =>  'required',
            'quantity'       =>  'required',
            'fileType'       =>  'required',
            'narration'      =>  '',
        ]);*/

        $receiveDoc = new RecieveDoc();
        $receiveDoc->task_id       =    $request->taskNo;
        $receiveDoc->client_id     =    $request->client;
        $receiveDoc->service_id    =    $request->service;
        $receiveDoc->dateReceived  =    $request->dateReceived;
        $receiveDoc->note          =    $request->note;
        $receiveDoc->quantity      =    $request->quantity;
        $receiveDoc->fileType      =    $request->fileType;
        $receiveDoc->narration     =    $request->narration;

        $receiveDoc->save();
        return redirect()->back()->with('message', 'Your successfully Receive Document!');
    }
    public function documentsstore($id)
    {
        return view('task.receivedoc');
    }
    public function updateview($id)
    {
        $tasks = Tasks::with('client.clientserv.serv', 'employee')->get();
        foreach ($tasks as $row) {
            return view('task.update', compact('row'));
        }
    }

    public function activate(Request $request)
    {
    }

    public function taskuser()
    {
        return view('task.tasksUser');
    }

    public function taskProg($id)
    {

        $taskpost = DB::table('task_post')->where('task_id', $id)->get();
        $comment  = DB::table('task_comments')->where('task_id', $id)->get();
        $approver = User::all();
        $mainPost = Task_Post::all();

        /*  foreach ($comment as $com) {
            $commentCreatedAt = Carbon::parse($com->created_at);
            $currentTime      = Carbon::now();
            $commentTimeDif   = $commentCreatedAt->diffForHumans($currentTime, [
                'syntax' => ['fromNow' => ''],
            ]);
        }
        $commentCount = DB::table('task_comments')->where('task_id', $id)->count();
        foreach ($taskpost as $t) {
            $postCreatedAt   = Carbon::parse($t->created_at);
            $currentTime     = Carbon::now();
            $timeDif         = $postCreatedAt->diffForHumans($currentTime,  [
                'syntax' => ['fromNow' => ''],
            ]);
            compact('postcheckData', 'users', 'taskpost', 'comment', 'timeDif', 'commentTimeDif', 'commentCount', 'precheckData', 'approver', 'mainPost')
        }*/

        $mainTask = Tasks::with('client.clientserv.serv', 'userAssign', 'juniorAssign')->find($id);
        $servId = $mainTask->client->clientserv->serv->id;
        $precheck = Prechecks::where('service_id', '=', $servId)->get();

        /*******----------Retrive the data from Precheck_attactment Table--------************/
        $completePre  = DB::table('precheck_attachment')
            ->join('service_prechecks', 'precheck_attachment.id', '=', 'service_prechecks.id')
            ->select('precheck_attachment.*', 'service_prechecks.*')
            ->where('precheck_attachment.task_id', '=', $id)
            ->first();

        /*******----------Retrive the data from Postcheck_attactment Table--------************/
        $completePost  = DB::table('postcheck_attachment')
            ->join('service_postchecks', 'postcheck_attachment.id', '=', 'service_postchecks.id')
            ->select('postcheck_attachment.*', 'service_postchecks.*')
            ->where('postcheck_attachment.task_id', '=', $id)
            ->first();

        $postcheck = Postchecks::where('service_id', '=', $servId)->get();

        return view('task.taskprogress', compact('mainTask', 'precheck', 'postcheck', 'completePre', 'completePost'));
    }
    public function approveTask(Request $request, $id)
    {
        $approveTask = Tasks::find($id);
        $approveTask->approve_status  =  $request->approve;
        $approveTask->update();
        return redirect()->back();
    }
    public function completeTask(Request $request)
    {
    }
    public function PostProcess(Request $request)
    {
        $data = new Task_Post();
        $data->user_id      =  $request->user_id;
        $data->post         =  $request->taskPost;
        $data->task_id      =  $request->task_id;
        //$data->save();
        return response()->json($data);
    }
    public function Postdata()
    {
        //$mainPost = Task_Post::all();
        // dd($mainPost);
        //if (count($mainPost) > 0) {
        //    return response()->json($mainPost);
        //}
    }
    public function TaskPost(Request $request)
    {
        $taskpost = Task_Post::create([
            'user_id'     =>  Auth::User()->id,
            'post'        =>  $request->taskPost,
            'task_id'     =>  $request->task_id,
        ]);

        return redirect()->back()->with('taskpost', $taskpost);
        // return view('task.taskprogress', compact('taskpost'));
    }
    public function taskpostview()
    {
    }
    public function commentsview()
    {
        return response(['success' => 'comment index!']);
    }
    public function comments(Request $request)
    {
        $comment = $request->validate([
            'user_id' => 'required',
            'comments' => 'required',
            'taskpost_id' => 'required',
            'task_id'  => 'required'
        ]);
        Task_Comments::create($comment);
        return back()->with(['message' => 'Comment successfully']);
    }
    public function Precheck(Request $request, $id)
    {
        $status      = $request->input('status');
        $taskId      = $request->input('task_id');
        $prechecks   = $request->input('precheck_id');
        $attachments = $request->file('precheck_attach');
        if ($attachments) {
            foreach ($attachments as $index => $attachment) {
                $pdfFileName = uniqid() . '.' . $attachment->getClientOriginalExtension();
                $attachment->storeAs('public/precheckAttachment', $pdfFileName);
                Precheck_Attachment::create([
                    'precheck_attach' => $pdfFileName,
                    'task_id'     => $taskId,
                    'status'      => $status[$index],
                    'precheck_id' => $prechecks[$index]
                ]);
            }
        }

        return redirect()->back()->with('message', 'pre checklist was confirmed!');
    }
    public function Postcheck(Request $request, $id)
    {
        $precheckAttach = new Postcheck_Attachment();

        if ($request->hasFile('postcheck_attach')) {
            $pdfFile = $request->file('postcheck_attach');
            $pdfFileName = uniqid() . '.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->storeAs('public/postcheckAttachment', $pdfFileName);
        }
        $precheckAttach = new Postcheck_Attachment();
        $precheckAttach->postcheck_attach = $pdfFile;
        $precheckAttach->task_id          = $request->task_id;
        $precheckAttach->status           = $request->status;
        $precheckAttach->save();

        return redirect()->back()->with('message', 'pre checklist was confirmed!');
    }
    public function AssignJunior($id)
    {
        $junior       = User::with('roleuser')->get();

        $task = Tasks::with('client.clientservice.serv', 'userAssign')
            ->where('id', '=', $id)
            ->first();
        return view('task.assignjunior', compact('task', 'junior'));
    }
    public function AssignJuniorStoreData(Request $request, $id)
    {
        $task = Tasks::find($id);
        if ($task) {
            $task->junior_id   = $request->junior;
            $task->update();
        }
        return redirect()->back()->with('message', 'You assign task successfuly!');
    }
}
