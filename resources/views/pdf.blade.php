<style>
    .ticket-logo {
        width: 94%;
    }

    .ticket-logo img {
        width: 100px;
        margin-left: 25px;
    }

    .ticket-header {
        background: rgb(36, 54, 115);
        background: linear-gradient(279deg,
                rgba(36, 54, 115, 1) 48%,
                rgba(255, 255, 255, 1) 100%);
        height: 80px;
        display: flex;
        align-items: center;
    }

    .ticket-footer {
        background: rgb(36, 54, 115);
        background: linear-gradient(279deg,
                rgba(36, 54, 115, 1) 48%,
                rgba(255, 255, 255, 1) 100%);
        height: 50px;
    }

    .content-label {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        color: black;
        margin: 0px;
        padding: 7px 0px;
        font-weight: bold;
    }

    .content-value {
        font-size: 14px;
        color: black;
        margin: 0px;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
    }

    .ticket-data-row {
        margin: 14px 0px;
        padding: 0px 30px;
    }

    .ticket-content-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
        align-items: start;
    }

    .combine-date-time {
        display: inline-block;
        width: 25%;
    }

    .ticket-content {
        background-image: url("./images/image.png");
        background-repeat: no-repeat;
        background-size: 900px 250px;
        background-position: center;
    }

    .header-icon {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .header-icon img {
        width: 40px;
        height: 40px;
    }

    .main-ticket-card {
        border: 1px solid gray;
    }
</style>
@extends('layouts.main')

{{-- @section('Page-Heading', 'Add New Ticket') --}}

@section('content')
    @foreach ($getAllTickets as $ticket)
        <div class="container">
            <div class="main-ticket-card">
                <div class="ticket-header">
                    <div class="ticket-logo">
                        <img src="./images/logo.png" alt="Logo" />
                    </div>

                    <div class="header-icon">
                        <img src="./images/airplane.png" alt="Airplane Icon" />
                    </div>
                </div>
                <div class="ticket-content">
                    <div class="ticket-content-row">
                        <div class="ticket-data-col">
                            <div class="ticket-data-row">
                                <p class="content-label">Passenger name</p>
                                <p class="content-value">Dave Green</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">From</p>
                                <p class="content-value">Chartered flight Lagos Nigeria</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">To</p>
                                <p class="content-value">Paramaribo, Suriname</p>
                            </div>
                        </div>
                        <div class="ticket-data-col">
                            <div class="ticket-data-row">
                                <p class="content-label">Date</p>
                                <p class="content-value">25 April</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">Serial Number</p>
                                <p class="content-value">123899</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">Departure Time</p>
                                <p class="content-value">21:00</p>
                            </div>
                        </div>
                        <div class="ticket-data-col">
                            <div class="ticket-data-row">
                                <p class="content-label">Depart Time</p>
                                <p class="content-value">11pm</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">Date Of Birth</p>
                                <p class="content-value">2000-08-06</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">.</p>
                                <p class="content-value">.</p>
                            </div>
                        </div>
                        <div class="ticket-data-col">
                            <div class="ticket-data-row">
                                <p class="content-label">Passenger Name</p>
                                <p class="content-value">Dave deen</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">From</p>
                                <p class="content-value">Chartered flight Lagos Nigeria</p>
                            </div>

                            <div class="ticket-data-row">
                                <p class="content-label">To</p>
                                <p class="content-value">Paramaribo, Suriname</p>
                            </div>
                            <div class="ticket-data-row">
                                <div class="combine-date-time-row">
                                    <div class="combine-date-time">
                                        <p class="content-label">Date</p>
                                        <p class="content-value">25 April</p>
                                    </div>
                                    <div class="combine-date-time">
                                        <p class="content-label">Time</p>
                                        <p class="content-value">10:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ticket-footer"></div>
            </div>
        </div>
        <br />
    @endforeach
@endsection
