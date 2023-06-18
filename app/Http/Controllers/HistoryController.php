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

        // Check if the user has already registered for the event
        if ($user->history()->where('event_id', $eventId)->exists()) {
            // Registration already exists for the event and user
            // Perform your desired actions (e.g., show an error message, prevent registration)
            // session()->flash('registration_status', 'failed');
            // return redirect()->back();
            return redirect()->back()->with('registration_status', 'failed');
        } else {
            // No existing registration found, proceed with the registration
            // Perform your desired actions (e.g., save the registration record)
            $eventDate = Event::find($eventId)->event_date;
            // create a new event history
            $registEvent = new History();
            $registEvent->event_id = $eventId;
            $registEvent->user_student_id = $user->student_id;
            $registEvent->event_date = $eventDate;
            $registEvent->save();

            // Redirect to the history page with the success status
            // session()->flash('registration_status', 'success');
            // return redirect('/history');
            return redirect('/history')->with('registration_status', 'success');
        }
    }

    public function showHistory(){
        $user = Auth::user();

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $totalevent = $user->history()->count();

        $currentDate = Carbon::now();

        $upcomingEvents = $user->history()->get()->filter(function ($event) use ($currentDate) {
            $eventDate = Carbon::createFromFormat('l, d F Y', $event->event->event_date);
            return $eventDate->isFuture();
        })->sortBy('event_date');
        $upcomingCount = $upcomingEvents->count();

        $pastEvents = $user->history()->get()->filter(function ($event) use ($currentDate) {
            $eventDate = Carbon::createFromFormat('l, d F Y', $event->event->event_date);
            return $eventDate->isPast();
        })->sortBy('event_date');
        $pastCount = $pastEvents->count();

        $allData = [
            'totalevent' => $totalevent,
            'upcomingEvents' => $upcomingEvents,
            'upcomingCount' => $upcomingCount,
            'pastEvents' => $pastEvents,
            'pastCount' =>$pastCount,
        ];

        return view('history', $allData);
    }
}
