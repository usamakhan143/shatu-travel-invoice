@extends('layouts.main')

{{-- @section('Page-Heading', 'Add New Ticket') --}}

@section('content')
    <div class="container">
        <h2 class="my-4 text-center">All Tickets</h2>
        @if (Session::has('success_msg'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success_msg') }}
            </div>
        @elseif(Session::has('primary_msg'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('primary_msg') }}
            </div>
        @elseif(Session::has('error_msg'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('error_msg') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Serial Number</th>
                        <th>Full Name</th>
                        <th>Date of Birth</th>
                        {{-- <th>Departure Location</th>
                        <th>Destination Location</th>
                        <th>Suri Name</th>
                        <th>Date</th>
                        <th>Departure Time</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->serialNumber }}</td>
                            <td>{{ $ticket->fullName }}</td>
                            <td>{{ $ticket->dOB }}</td>
                            {{-- <td>{{ $ticket->departureLocation }}</td>
                            <td>{{ $ticket->destinationLocation }}</td>
                            <td>{{ $ticket->suriName }}</td>
                            <td>{{ $ticket->date }}</td>
                            <td>{{ $ticket->departureTime }}</td> --}}
                            <td><a href="{{ route('show.ticket', $ticket->id) }}" class="btn btn-danger">VIEW TICKET</a>
                            </td>
                            {{-- <td>{{ $ticket->status ? 'Active' : 'Inactive' }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
