<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DispatchJob;
use App\Models\RecieveDoc;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class DispatchJobController extends Controller
{
    public function listdispatch()
    {
        $dispatch = DispatchJob::all();
        // $clients  = Client::with('clientdispatch')->get();
        return view('dispatch.dispatchdoc', compact('dispatch'));
    }
    public function dispCreate()
    {
        $clients = Client::all();
        $DocsReceived = RecieveDoc::with('clientRecieveDoc')->get();
        return view('dispatch.createDispatch', compact('DocsReceived', 'clients'));
    }
    public function storedispatch(Request $request)
    {
        $dispatchdata = new DispatchJob();

        $dispatchdata->clients_id        =  $request->selected_client;
        $dispatchdata->dispatch_date     =  $request->dispatch_date;
        $dispatchdata->checkout          =  $request->checkout;
        $dispatchdata->narration         =  $request->narration;
        $dispatchdata->custom_desc       =  $request->custom_desc;
        $dispatchdata->custom_check      =  $request->custom_check;
        $dispatchdata->custom_narration  =  $request->custom_narration;
        $dispatchdata->dispatch_note     =  $request->dispatch_note;

        $dispatchdata->save();
        return view('dispatch.dispatchdoc');
    }
    public function viewdispatch($id)
    {
        # code...
    }
    public function dispatchPDF(Request $request)
    {
        /*  $disp = new DispatchJob();
        $disp->client_id            =   $request->clientSelected;
        $disp->date_of_disp         =   $request->date_of_disp;
        $disp->date_doc_receive     =   $request->date_doc_receive;
        $disp->disp_doc_desc        =   $request->disp_doc_desc;
        $disp->disp_doc_qty         =   $request->disp_doc_qty;
        $disp->disp_doc_chckout     =   $request->disp_doc_chckout;
        $disp->disp_doc_narration   =   $request->disp_doc_narration;
        $disp->cust_disp_desc       =   $request->cust_disp_desc;
        $disp->cust_disp_checkout   =   $request->cust_disp_checkout;
        $disp->cust_disp_narration  =   $request->cust_disp_narration;
        $disp->disp_note            =   $request->disp_note;

        $data = [
            'client'            =>  'clientSelected',
            'date_of_disp'      =>  'date_of_disp',
            'date_doc_receive'  =>  'date_doc_receive',
            'disp_doc_desc'     =>  'disp_doc_desc',
            'disp_doc_qty'      =>  'disp_doc_qty',
            'disp_doc_chckout'  =>  'disp_doc_chckout',
            'disp_doc_narration' => 'disp_doc_narration',
            'cust_disp_desc'     =>  'cust_disp_desc',
            'cust_disp_checkout' => 'cust_disp_checkout',
            'cust_disp_narration' => 'cust_disp_narration',
            'disp_note'           =>  'disp_note'
        ];
        $pdf = PDF::loadView('');

        return $pdf->download('invoice.pdf');*/
    }

    /*public function generateDispatchPDF(Request $request)
    {
        $Dispat_data = [
            'client'              =>   $request->input('clientSelected'),
            'date_of_disp'        =>   $request->input('date_of_disp'),
            'date_doc_receive'    =>   $request->input('date_doc_receive'),
            'disp_doc_desc'       =>   $request->input('disp_doc_desc'),
            'disp_doc_qty'        =>   $request->input('disp_doc_qty'),
            'disp_doc_chckout'    =>   $request->input('disp_doc_chckout'),
            'disp_doc_narration'  =>   $request->input('disp_doc_narration'),
            'cust_disp_desc'      =>   $request->input('cust_disp_desc'),
            'cust_disp_checkout'  =>   $request->input('cust_disp_checkout'),
            'cust_disp_narration' =>   $request->input('cust_disp_narration'),
            'disp_note'           =>   $request->input('disp_note')
        ];

        $pdf = PDF::loadView('pdf.dispatchDocs', $Dispat_data)->setPaper('A4');
        return $pdf->download('dispatchDocs.pdf');
    }*/
    public function DocsReceive(Request $request)
    {
        $docReceived = RecieveDoc::where('client_id', '=', $request->id)->get();
        if (count($docReceived) > 0) {
            return response()->json($docReceived);
        }
    }
    public function DispatchClient(Request $request)
    {
        $clientAddress = Client::where('id', '=', $request->id)->get();
        if (count($clientAddress) > 0) {
            return response()->json($clientAddress);
        }
    }
}
