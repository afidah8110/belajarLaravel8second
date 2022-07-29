<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;
use App\Http\Request\PostNewEvent;

class EventsController extends Controller
{
    public function index()
    {
        $events = EventModel::paginate(3);

        return view ('events.index', compact('events'));
        //dd($events);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(PostNewEvent $request)
    {
        $eventM = new EventModel;
        $eventM->title = $request->title;
        $eventM->venue = $request->venue;
        $eventM->date = $request->date;
        $eventM->organizer_id = $request->organizer_id;
        $participantM->participant = $request->participant;
        $eventM->save();
        // dd($request);

        \Toastr::success('Event stored babe', 'Status', ["positionClass" => "toast-top-center"]);
        
        return redirect()->route('events.index');

    }
    
    public function edit($id)
    {
        $eventM = EventModel::find( $id );

        return view('events.edit', compact('eventM'));
    }

    public function update(Request $request)
    {
        $eventM = EventModel::find($request->event_id);
        $eventM->title = $request->title;
        $eventM->venue = $request->venue;
        $eventM->date = $request->date;
        $eventM->organizer_id = $request->organizer_id;
        $eventM->save();
        // dd($request);

        return redirect()->route('events.index');
    }

    public function delete($id)
    {
        $eventM = EventModel::find($id);
        $eventM->delete();
        return redirect()->route('events.index');
    }
}
