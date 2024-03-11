@extends('layouts.main')

{{-- @section('Page-Heading', 'Add New Ticket') --}}

@section('content')
    <div class="container py-3 px-lg-5">

        <div class="row">
            <div class="col border p-5">
                <h2>Create Ticket</h2><br />
                <form method="post" action="">
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="serialNumber">Serial Number</label>
                                <input type="text" class="form-control" id="serialNumber">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="departureLocation">Departure Location</label>
                                <input type="text" class="form-control" id="departureLocation">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="destinationLocation">Destination Location</label>
                                <input type="text" class="form-control" id="destinationLocation">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="suriname">Suriname</label>
                        <input type="text" class="form-control" id="suriname">
                    </div>
                    <div class="form-group">
                        <label for="departDate">Depart Date</label>
                        <input type="date" class="form-control" id="departDate">
                    </div>
                    <div class="form-group">
                        <label for="departureTime">Departure Time</label>
                        <input type="time" class="form-control" id="departureTime">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Ticket</button>
                </form>
            </div>
        </div>
    </div>
@endsection
