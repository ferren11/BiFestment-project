<?php

namespace App\Http\Controllers;

use App\Models\EventAds;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function EventAdsController() {
        $event_ads = EventAds::all();
        return $event_ads;
    }

    public function EventCategoryController() {
        $eventcategories = EventCategory::all();
        return $eventcategories;
    }

    public function EventListController() {
        $currentDate = Carbon::now();
        $events = Event::all()
            ->filter(function ($event) use ($currentDate) {
                return Carbon::createFromFormat('l, d F Y', $event->event_date)->isFuture();
            });
        return $events;
    }

    public function upcomingEventController() {
            $currentDate = Carbon::now();
            $events = History::all()->filter(function ($event) {
                    // Get the current date
                    $currentDate = Carbon::now();

                    // Parse the event_date and check if it is in the future
                    $eventDate = Carbon::createFromFormat('l, d F Y', $event->event_date);
                    return $eventDate->isFuture();
                })->sortBy('event_date');

            $upcomingevents = $events->first();
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
        return view('eventDetail', ['event' => $event]);
    }

    public function search(Request $request) {
        $searchTerm = $request->input('search');
        $currentDate = Carbon::now();

        $events = Event::where('event_name', 'like', '%' . $searchTerm . '%')
            ->orWhereHas('eventCategory', function ($query) use ($searchTerm) {
                $query->where('category_name', 'like', '%' . $searchTerm . '%');
            })
            ->orderBy('event_date')
            ->get()
            ->filter(function ($event) use ($currentDate) {
                return Carbon::createFromFormat('l, d F Y', $event->event_date)->isFuture();
            });

        return view('searchResultPage', ['events' => $events, 'searchTerm' => $searchTerm]);
    }
}
