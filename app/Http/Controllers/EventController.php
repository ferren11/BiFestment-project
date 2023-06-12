<?php

namespace App\Http\Controllers;

use App\Models\EventAds;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function EventAdsController() {
        $event_ads = EventAds::all();
        return $event_ads;
    }

    public function EventListController() {
        $events = Event::with('eventCategory')->get();
        return $events;
    }

    public function EventCategoryController() {
        $eventcategories = EventCategory::all();
        return $eventcategories;
    }

    public function upcomingEventController() {
        $upcomingevents = Event::where('event_date', Event::min('event_date'))->first();
        return $upcomingevents;
    }

    public function homepageData() {
        $event_ads = $this->EventAdsController();
        $events = $this->EventListController();
        $eventcategories = $this->EventCategoryController();
        $upcomingevents = $this->upcomingEventController();

        $allData = [
            'event_ads' => $event_ads,
            'events' => $events,
            'eventcategories' => $eventcategories,
            'upcomingevent' => $upcomingevents,
        ];

        return view('homepage', $allData);
    }

    public function displayWelcome() {
        $event_ads = $this->EventAdsController();
        $events = $this->EventListController();
        $eventcategories = $this->EventCategoryController();

        $allData = [
            'event_ads' => $event_ads,
            'events' => $events,
            'eventcategories' => $eventcategories,
        ];

        return view('welcome', $allData);
    }

    public function showDetails($eventId) {
        // Retrieve the event details using the $eventId
        $event = Event::find($eventId);

        // Pass the event details to the details view
        return view('eventdetail', ['event' => $event]);
    }
}
