@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<br><br>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        
        <form class="form horizontal" method="post" action="{{route('events.update')}}">
            @csrf

            <input type="hidden" name="event_id" value="{{ $eventM->id }}">
            
            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title" value="{{ $eventM->title}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputVenue" class="col-sm-2 control-label">Venue</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="venue" id="inputVenue" placeholder="Venue" value="{{ $eventM->venue}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputDate" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="inputDate" placeholder="Date" value="{{ $eventM->date}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputOrganizer" class="col-sm-2 control-label">Organizer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="organizer_id" id="inputOrganizer" placeholder="Organizer" value="{{ $eventM->organizer_id}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="SubmitNewEvent" class="btn btn-primary" value="Update">
                </div>
            </div>
            
        </form>
            <div class="col-md-2">
            </div>
</div>
@endsection