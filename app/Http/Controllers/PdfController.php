<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
// use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        $data = Ticket::where('id', $id)->first();
        $pdf = PDF::loadView('pdf', ['data' => $data]);
        return $pdf->download($data->fullName . '.pdf');
    }
}
