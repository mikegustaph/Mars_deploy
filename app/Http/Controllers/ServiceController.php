<?php

namespace App\Http\Controllers;

use App\Models\Postchecks;
use App\Models\Prechecks;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function services()
    {
        $services = DB::table('services')->orderby('created_at')->get();
        return view('service.services', ['services' => $services]);
    }
    public function view($id)
    {
        $checklistData = DB::table('service_postchecks')
            ->join('service_prechecks', 'service_postchecks.id', '=', 'service_prechecks.id')
            ->where('service_postchecks.service_id', '=', $id)
            ->get();

        $preData = Prechecks::where('service_id', '=', $id)->get();
        $postData = Postchecks::where('service_id', '=', $id)->get();
        $service = Service::find($id);
        return view('service.viewService', ['service' => $service, 'postData' => $postData, 'preData' => $preData]);
    }

    public function store(Request $request)
    {
        $clientservice = new Service();

        $clientservice->service_name               =    $request->service_name;
        $clientservice->description                =    $request->description;
        $clientservice->duedate                    =    $request->duedate;
        $clientservice->role                       =    $request->role;
        $clientservice->repeat                     =    $request->repeat;
        $clientservice->service_kpi                =    $request->service_kpi;
        $clientservice->kpi_receive_target_day     =    $request->kpi_receive_target_day;
        $clientservice->kpi_receive_early_points   =    $request->kpi_receive_early_points;
        $clientservice->kpi_receive_late_points    =    $request->kpi_receive_late_points;
        $clientservice->kpi_complete_target_day    =    $request->kpi_complete_target_day;
        $clientservice->kpi_complete_early_points  =    $request->kpi_complete_early_points;
        $clientservice->kpi_complete_late_points   =    $request->kpi_complete_late_points;

        $clientservice->save();
        //redirect the user
        return redirect()->route('service.services')->with('message', 'Service created successfully!');
    }

    public function createServices()
    {
        return view('service.servicesCreate');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.editService', compact('service'));
    }
    public function storeupdate(Request $request, $id)
    {
        $serviceupdate = Service::find($id);

        $serviceupdate->service_name               =    $request->service_name;
        $serviceupdate->description                =    $request->description;
        $serviceupdate->duedate                    =    $request->duedate;
        $serviceupdate->role                       =    $request->role;
        $serviceupdate->repeat                     =    $request->repeat;
        $serviceupdate->service_kpi                =    $request->service_kpi;
        $serviceupdate->kpi_receive_target_day     =    $request->kpi_receive_target_day;
        $serviceupdate->kpi_receive_early_points   =    $request->kpi_receive_early_points;
        $serviceupdate->kpi_receive_late_points    =    $request->kpi_receive_late_points;
        $serviceupdate->kpi_complete_target_day    =    $request->kpi_complete_target_day;
        $serviceupdate->kpi_complete_early_points  =    $request->kpi_complete_early_points;
        $serviceupdate->kpi_complete_late_points   =    $request->kpi_complete_late_points;

        $serviceupdate->update();
        return redirect()->back()->with('message', 'Changes are added successfully!');
    }

    public function delete($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found!');
        }
        $service->delete();
        return redirect()->back()->with('message', 'Service has been deleted successfully!');
    }

    public function checklistView($id)
    {
        $service = Service::find($id);
        return view('service.checklist', compact('service'));
    }

    public function checkList(Request $request)
    {
        $formData = $request->all();

        foreach ($formData['name'] as $index => $name) {
            if ($name == "PreCheck") {
                Prechecks::create([
                    'service_id' => $formData['service_id'],
                    'name' => $name,
                    'note' => $formData['note'][$index],
                    'multiple_upload' => $formData['multiple_upload'][$index],
                    'mandatory' => $formData['mandatory'][$index],
                    'description' => $formData['description'][$index],
                ]);
            } elseif ($name == "PostCheck") {
                Postchecks::create([
                    'service_id' => $formData['service_id'],
                    'name' => $name,
                    'note' => $formData['note'][$index],
                    'multiple_upload' => $formData['multiple_upload'][$index],
                    'mandatory' => $formData['mandatory'][$index],
                    'description' => $formData['description'][$index],
                ]);
            }
        }
        return redirect()->back()->with('message', 'Checklist are added successfully!');
    }
    public function precheckListDelete($id)
    {
        $checklist = Prechecks::find($id);

        if (!$checklist) {
            return redirect()->back()->with('error', 'Checklist not found!');
        }
        $checklist->delete();
        return redirect()->back()->with('message', 'Checklist has been deleted successfully!');
    }
    public function postcheckListDelete($id)
    {
        $checklist = Postchecks::find($id);

        if (!$checklist) {
            return redirect()->back()->with('error', 'Checklist not found!');
        }
        $checklist->delete();
        return redirect()->back()->with('message', 'Checklist has been deleted successfully!');
    }
}
