@extends('layouts.app')

@section('title', 'Profile')

@section('cssjs')
@endsection

@section('content')
<!-- Body -->
<div class="mt-4 mb-4" style="margin-left: 100px; margin-right: 100px;">
    <h3>Registered Events</h3>
    <hr>
    <div class="col">
        <div class="row">
            <div class="" style="width:65%">
                @if (count($histories) > 0)
                    {{-- display event histories --}}
                    @foreach ($histories as $history)
                        <div class="mb-4 shadow-sm rounded">
                            <div class="mx-3 mb-0 mt-1">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ $history->event->event_image }}" alt="" width="175">
                                    </div>
                                    <div class="col">
                                        <p style="color: #6D6969; font-size: 13px;"><i>{{ $history->event->event_organizer }}</i></p>
                                        <h5 class="mb-1"><b>{{ $history->event->event_name }}</b></h5>
                                        <div class="container px-0 py-2">
                                            <div class="row">
                                                <div class="col-1">
                                                    <img src="https://img.freepik.com/free-icon/maps-flags_318-341720.jpg" alt="" width="20">
                                                </div>
                                                <div class="col">
                                                    <p class="m-0" style="font-size: medium;">{{ $history->event->event_place }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container px-0 py-2">
                                            <div class="row">
                                                <div class="col-1">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/55/55281.png" alt="" width="20">
                                                </div>
                                                <div class="col">
                                                    <p class="m-0" style="font-size: medium;">{{ $history->event->event_date }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container px-0 py-2">
                                            <div class="row">
                                                <div class="col-1">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/61/61227.png" alt="" width="20">
                                                </div>
                                                <div class="col">
                                                    <p class="m-0" style="font-size: medium;">{{ $history->event->event_time }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                {{-- display no registered event --}}
                    <div class="d-flex align-items-center justify-content-center" style="height: 180px;">
                        <p style="color: #6D6969; font-size: 15px;"><i>There is no event registered yet.</i></p>
                    </div>
                @endif

            </div>
            <div class="col">
                <div class="mb-4 shadow-sm rounded" style="width:90%">
                    <h5 class="mb-1 mx-3" style="color:#125582;">Summary</h5>
                    <div class="container px-0 py-2">
                        <div class="row">
                            <div class="col-8 mx-3">
                                <p class="m-0">Event Registered This Month</p>
                            </div>
                            <div class="col text-end mx-3">
                                <p class="m-0 justify-content-end">{{ $thisMonthRegistration }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="container px-0 py-2">
                        <div class="row ">
                            <div class="col-8 mx-3">
                                <p class="m-0">Event Held in This Month</p>
                            </div>
                            <div class="col text-end mx-3">
                                <p class="m-0 justify-content-end">{{ $thisMonthEvent }}</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="container px-0 py-2">
                        <div class="row">
                            <div class="col-8 mx-3">
                                <p class="m-0">Total Registered Events</p>
                            </div>
                            <div class="col text-end mx-3">
                                <p class="m-0 justify-content-end">{{ $totalevent }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

