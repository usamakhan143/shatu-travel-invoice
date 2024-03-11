@extends('layouts.main')

{{-- @section('Page-Heading', 'Add New Ticket') --}}

@section('content')
    <div class="container-fluid">
        <h2 class="my-4 text-center">Tickets Table</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Serial Number</th>
                        <th>Full Name</th>
                        <th>Date of Birth</th>
                        <th>Departure Location</th>
                        <th>Destination Location</th>
                        <th>Suri Name</th>
                        <th>Date</th>
                        <th>Departure Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->serialNumber }}</td>
                            <td>{{ $ticket->fullName }}</td>
                            <td>{{ $ticket->dOB }}</td>
                            <td>{{ $ticket->departureLocation }}</td>
                            <td>{{ $ticket->destinationLocation }}</td>
                            <td>{{ $ticket->suriName }}</td>
                            <td>{{ $ticket->date }}</td>
                            <td>{{ $ticket->departureTime }}</td>
                            <td><a href="{{ route('generate.pdf', $ticket->id) }}" class="btn btn-danger">Get PDF</a></td>
                            {{-- <td>{{ $ticket->status ? 'Active' : 'Inactive' }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
