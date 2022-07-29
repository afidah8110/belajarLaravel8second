@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<a href="{{ route('participant.create')}}" class="btn btn-info">Tambah Participant</a>
<br><br>
<table class="table table-striped table-bordered">
    <tr>
        <th>User</th>
        <th>Event_id</th>
        <th>Attending</th>
        <th>Reasons For Not Attending<th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
@foreach($participant as $row)
    
    <tr>
        <td>{{ $row->user_id}}</td>
        <td>{{ $row->event_id}}</td>
        <td>{{ $row->attending}}</td>
        <td>{{ $row->reasons_for_not_attending}}</td>
        <td>{{ $row->created_at}}</td>
        <td>{{ $row->updated_at}}</td>
        <td><a href="{{ route('participant.edit', $row->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp; Edit</td>
        <td><a href="{{ route('participant.delete', $row->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp; Delete</td>
    </tr>
@endforeach
</table>
@endsection