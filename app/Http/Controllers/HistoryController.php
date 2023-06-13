<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\History;
use Illuminate\Support\Carbon;

class HistoryController extends Controller
{
    public function regist(Request $request, $eventId){
        $eventDate = Event::find($eventId)->event_date;

        // dump($eventDate);

        // create a new event history
        $registEvent = new History();
        $registEvent->event_id = $eventId;
        $registEvent->event_date = $eventDate;
        $registEvent->save();

        //ini harusnya direct ke
        return redirect('/history')->with('success', 'Event register successful!');
    }

    public function showHistory(){
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        //ini masih blm bisa soalnya klo eventnya bulan Juni, dia masi diitung 0 event yg held in June
        $thisMonthEvent = History::whereMonth('event_date', $currentMonth)
            ->whereYear('event_date', $currentYear)
            ->count();

        $thisMonthRegistration = History::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->count();

        $totalevent = History::count();
        $histories = History::all();

        $allData = [
            'totalevent' => $totalevent,
            'histories' => $histories,
            'thisMonthEvent' => $thisMonthEvent,
            'thisMonthRegistration' => $thisMonthRegistration,
        ];

        return view('history', $allData);
    }
}
