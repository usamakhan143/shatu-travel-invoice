<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function createTicket()
    {
        return view('createTicket');
    }

    public function storeTicket(Request $request)
    {
        $this->validate($request, [
            'serialNumber' => 'required',
            'fullName' => 'required',
            'dob' => 'required|date',
            'departureLocation' => 'required',
            'destinationLocation' => 'required',
            'suriName' => 'required',
            'departDate' => 'required',
            'departureTime' => 'required'
        ]);

        $ticket = new Ticket();

        $ticket->serialNumber = $request->serialNumber;
        $ticket->fullName = $request->fullName;
        $ticket->dOB = $request->dob;
        $ticket->departureLocation = $request->departureLocation;
        $ticket->destinationLocation = $request->destinationLocation;
        $ticket->suriName = $request->suriName;
        $ticket->date = $request->departDate;
        $ticket->departureTime = $request->departureTime;
        $ticket->status = 1;

        $save = $ticket->save();

        if ($save) {
            return back()->with('success_msg', 'Ticket has been added successfully!');
        }
    }
}
