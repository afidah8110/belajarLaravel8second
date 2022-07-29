@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<br><br>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        
        <form class="form horizontal" method="post" action="{{route('participant.store')}}">
            @csrf
            <div class="form-group">
                <label for="inputUser" class="col-sm-2 control-label">User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_id" id="inputUser_Id" placeholder="User">
                </div>
            </div>

           <div class="form-group">
                <label for="inputEvent" class="col-sm-2 control-label">Event</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="event_id" id="inputEvent" placeholder="Event">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAttending" class="col-sm-2 control-label">Attending</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="attending" id="inputAttending" placeholder="Attending">
                </div>
            </div>

            <div class="form-group">
                <label for="inputReasons_For_Not_Attending" class="col-sm-2 control-label">Reasons For Not Attending</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="reasons_for_not_attending" id="inputReasons_For_Not_Attending" placeholder="Reasons For Not Attending">
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