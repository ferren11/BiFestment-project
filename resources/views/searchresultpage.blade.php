@extends('layouts.app')

@section('title', 'Search Result')

@section('cssjs')
@endsection

@section('content')
<div class="mt-4" style="margin-left: 50px;">
    <h2 class="mb-4">Showing Events for "{{ $searchTerm }}"</h2>

    <div class="container">
        @if ($events->count() > 0)
                @foreach ($events as $event)
                    <div class="col mb-2 mt-0 mx-0" style="width: 75%;">
                        <a id="eventCard" style="all:unset;" href="{{ route('details', ['eventId' => $event->id]) }}">
                            <div class="mb-4 shadow-sm rounded row">
                                <div class="col-2 mt-3 text-center">
                                    <img src="{{ URL::asset($event->event_image) }}" class="card-img-top mb-1" style="width: 110%;" alt="{{ $event -> event_name }}">
                                </div>
                                <div class="col mx-2 mb-0 mt-3">
                                    <div class="text-wrap justify-content-center m-0 pt-1" style="width:fit-content">
                                        <p class="px-2 rounded-pill m-0" style="background-color: #D9D9D9; font-size: smaller;">{{ $event->eventCategory->category_name }}</p>
                                    </div>

                                    <h5 class="mb-1 pt-2">
                                        {{ $event->event_name }}
                                    </h5>
                                    <p class="mt-1 pt-1 mb-0 mx-0" style="font-size: medium;">{{ $event->event_date }}</p>
                                    <p class="mt-0 pt-1 mb-0 mx-0" style="font-size: small;">{{ $event->event_time }}</p>
                                    <p class="mt-0 pt-1 pb-1 mx-0" style="font-size: small;">
                                        {{ Str::limit($event->event_desc, $limit = 200, $end = ' ...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        @else
            <p>No events found for "{{ $searchTerm }}"</p>
        @endif
    </div>
</div>

@endsection
