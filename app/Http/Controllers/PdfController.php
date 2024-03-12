<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
// use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        $pdfOptions = [
            'dpi' => 150,
            'isHtml5ParserEnabled' => true,
            'isPhpEnabled' => true
        ];
        $data = Ticket::where('id', $id)->first();
        $pdf = PDF::loadView('pdf', ['data' => $data])->setPaper('A4', 'potrait')->setOption($pdfOptions);;
        return $pdf->download($data->fullName . '.pdf');
    }


    public function showTickets()
    {
        $getAllTickets = Ticket::get();
        return view('pdf', compact('getAllTickets'));
    }
}
