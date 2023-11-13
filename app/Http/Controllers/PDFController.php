<?php

namespace App\Http\Controllers;

use App\Models\DispatchJob;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generate()
    {
        $data = [
            'title' => 'Mars',
            'content' => 'Sample PDF content goes here.',
        ];

        //return view('pdf.sample', $data);
        //$pdf = DomPDFPDF::loadView('pdf.sample', compact('data'));
        //return $pdf->download('sample.pdf');
        $pdf = app('dompdf.wrapper')->loadView('pdf/sample', $data);
        //return $pdf->stream('document.pdf');
        return $pdf->download('document.pdf');
    }
    public function generatedispatch()
    {
    }
    public function DispatchPDF(Request $request)
    {
        $data = [
            'client'              =>   $request->input('selected_client'),
            'client_address'      =>   $request->input('client_address'),
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

        //DispatchJob::create($data);

        $pdf = app('dompdf.wrapper')->loadView('pdf/dispatchDocs', $data);
        return $pdf->stream('document.pdf');

        //$filename = 'document_' . time() . '_' . uniqid() . '.pdf';
        //$pdf->stream($filename)->save('path/to/save/' . $filename);

    }

    public function generateDispatchPDF(Request $request)
    {
        $Dispat_data = [
            /*'client'              =>   $request->input('clientSelected'),
            'date_of_disp'        =>   $request->input('date_of_disp'),
            'date_doc_receive'    =>   $request->input('date_doc_receive'),
            'disp_doc_desc'       =>   $request->input('disp_doc_desc'),
            'disp_doc_qty'        =>   $request->input('disp_doc_qty'),
            'disp_doc_chckout'    =>   $request->input('disp_doc_chckout'),
            'disp_doc_narration'  =>   $request->input('disp_doc_narration'),
            'cust_disp_desc'      =>   $request->input('cust_disp_desc'),
            'cust_disp_checkout'  =>   $request->input('cust_disp_checkout'),
            'cust_disp_narration' =>   $request->input('cust_disp_narration'),
            'disp_note'           =>   $request->input('disp_note')*/];
        $pdf = app('dompdf.wrapper')->loadView('pdf/dispatchDocs', $Dispat_data)->setPaper('A4');
        //$pdf = PDF::loadView('pdf.dispatchDocs', $Dispat_data)->setPaper('A4');
        return $pdf->download('dispatchDocs.pdf');
        //return $pdf->stream('dispatchDocs.pdf');
    }
}
