<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function regist(Request $request, $eventId){
        // create a new event history
        $registEvent = new History();
        $registEvent->event_id = $eventId;
        $registEvent->save();

        //ini harusnya direct ke
        return redirect('/history')->with('success', 'Event register successful!');
    }

    public function showHistory(){
        $histories = History::all();
        return view('eventhistory', compact('histories'));
    }

}
