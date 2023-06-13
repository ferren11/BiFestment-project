<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\History;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function regist(Request $request, $eventId){
        $user = Auth::user();

        $eventDate = Event::find($eventId)->event_date;
        // create a new event history
        $registEvent = new History();
        $registEvent->event_id = $eventId;
        $registEvent->user_student_id = $user->student_id;
        $registEvent->event_date = $eventDate;
        $registEvent->save();

        //ini harusnya direct ke
        return redirect('/history')->with('success', 'Event register successful!');
    }

    public function showHistory(){
        $user = Auth::user();

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // $upcomingCount = History::whereMonth('created_at', $currentMonth)
        //     ->whereYear('created_at', $currentYear)->count();
        $upcomingCount = $user->history()
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)->count();

        // $totalevent = History::count();
        $totalevent = $user->history()->count();

        $currentDate = Carbon::now();
        // $upcomingEvents = History::all()->filter(function ($event) {
        //     $currentDate = Carbon::now();

        //     // Parse the event_date and check if it is in the future
        //     $eventDate = Carbon::createFromFormat('l, d F Y', $event->event_date);
        //     return $eventDate->isFuture();
        // })->sortBy('event_date');

        // $pastEvents = History::all()->filter(function ($event) {
        //     $currentDate = Carbon::now();

        //     // Parse the event_date and check if it is in the future
        //     $eventDate = Carbon::createFromFormat('l, d F Y', $event->event_date);
        //     return $eventDate->isPast();
        // })->sortBy('event_date');

        $upcomingEvents = $user->history()->get()->filter(function ($event) use ($currentDate) {
            $eventDate = Carbon::createFromFormat('l, d F Y', $event->event->event_date);
            return $eventDate->isFuture();
        })->sortBy('event_date');

        $pastEvents = $user->history()->get()->filter(function ($event) use ($currentDate) {
            $eventDate = Carbon::createFromFormat('l, d F Y', $event->event->event_date);
            return $eventDate->isPast();
        })->sortBy('event_date');

        $allData = [
            'totalevent' => $totalevent,
            'upcomingEvents' => $upcomingEvents,
            'upcomingCount' => $upcomingCount,
            'pastEvents' => $pastEvents,
        ];

        return view('history', $allData);
    }
}
