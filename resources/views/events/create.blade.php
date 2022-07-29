@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<br><br>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        
        <form class="form horizontal" method="post" action="{{route('events.store')}}">
            @csrf
            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="inputVenue" class="col-sm-2 control-label">Venue</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="venue" id="inputVenue" placeholder="Venue">
                </div>
            </div>

            <div class="form-group">
                <label for="inputDate" class="col-sm-2 control-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="inputDate" placeholder="Date">
                </div>
            </div>

            <div class="form-group">
                <label for="inputOrganizer" class="col-sm-2 control-label">Organizer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="organizer_id" id="inputOrganizer" placeholder="Organizer">
                </div>
            </div>

            <div class="form-group">
                <label for="inputParticipant" class="col-sm-2 control-label">Participant</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="participant" id="inputParticipant" placeholder="Participant">
                </div>
            </div>

            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" name="SubmitNewEvent" class="btn btn-primary" value="Submit">
                </div>
            </div>
            
        </form>
            <div class="col-md-2">
            </div>
</div>
@endsection