<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParticipantModel;
use App\Models\EventModel;

class ParticipantController extends Controller
{
    public function index($id_event)
    {
        $eventS = EventModel::with('participant')->where('id', $id_event)
            ->first();
        $participant = ParticipantModel::where('event_id', $id_event)
        ->get();

        return view ('participant.index')
        ->with(compact('eventS', 'participant'));
        //dd($participant);
    }

    public function create()
    {
        // $eventS = EventModel::where('id', $id_event)
        //     ->first();        
        return view('participant.create');
    }

    public function store(Request $request)
    {
        $participantM = new ParticipantModel;
        $participantM->user_id = $request->user_id;
        $participantM->event_id = $request->event_id;
        $participantM->attending = $request->attending;
        $participantM->reasons_for_not_attending = $request->reasons_for_not_attending;
        $participantM->save();

        $event_id = $request->event_id;
        // dd($request);

        return redirect()->route('participant.index', $event_id);

    }
    
    public function edit($id)
    {
        $participantM = ParticipantModel::find( $id );

        return view('participant.edit', compact('participantM'));
    }

    public function update(Request $request)
    {
        $participantM = ParticipantModel::find($request->participant);
        $participantM->user_id = $request->user;
        $participantM->event_id = $request->event;
        $participantM->attending = $request->attending;
        $participantM->reasons_for_not_attending = $request->reasons_for_not_attending;
        $participantM->save();
        // dd($request);

        return redirect()->route('participant.index');
    }

    public function delete($id)
    {
        $participantM = ParticipantModel::find($id);
        $participantM->delete();
        return redirect()->route('participant.index');
    }
}