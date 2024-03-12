@extends('layouts.main')

{{-- @section('Page-Heading', 'Add New Ticket') --}}

@section('content')
    <div class="container py-3 px-lg-5">
        <div class="row">
            <div class="col border p-5">
                <h2>Create Ticket</h2><br />
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
                <form method="post" action="{{ route('store.ticket') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="serialNumber">Serial Number</label>
                                <input type="text" class="form-control" id="serialNumber" name="serialNumber">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}

                                @error('serialNumber')
                                    <div class="validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName">

                                @error('fullName')
                                    <div class="validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob">

                                @error('dob')
                                    <div class="validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="departureLocation">Departure Location</label>
                                <input type="text" class="form-control" id="departureLocation" name="departureLocation">

                                @error('departureLocation')
                                    <div class="validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="destinationLocation">Destination Location</label>
                                <input type="text" class="form-control" id="destinationLocation"
                                    name="destinationLocation">

                                @error('destinationLocation')
                                    <div class="validate-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="departDate">Depart Date</label>
                        <input type="date" class="form-control" id="departDate" name="departDate">

                        @error('departDate')
                            <div class="validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="departureTime">Departure Time</label>
                        <input type="time" class="form-control" id="departureTime" name="departureTime">

                        @error('departureTime')
                            <div class="validate-error">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Create Ticket</button>
                </form>
            </div>
        </div>
    </div>
@endsection
