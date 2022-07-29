@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<br><br>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        
        <form class="form horizontal" method="post" action="{{route('participant.update')}}">
            @csrf

            <input type="hidden" name="participant" value="{{ $participantM->id }}">
            
            <div class="form-group">
                <label for="inputUser" class="col-sm-2 control-label">User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_id" id="inputUser_id" placeholder="User" value="{{ $participantM->user}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputAttending" class="col-sm-2 control-label">Attending</label>
                <div class="col-sm-10">
                    <input type="attending" class="form-control" name="attending" id="inputAttending" placeholder="Attending" value="{{ $participantM->attending}}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputReasons_For_Not_Attending" class="col-sm-2 control-label">Reasons For Not Attending</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="reasons_for_not_attending" id="inputReasons_For_Not_Attending" value="{{ $participantM->reasons_for_not_attending}}">
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