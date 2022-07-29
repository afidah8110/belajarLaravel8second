@extends('layouts.mariBelajarLaravel8')

@section('maincontent')
<a href="{{ route('events.create')}}" class="btn btn-info">Tambah Event</a>
<br><br>
<table class="table table-striped table-bordered">
    <tr>
        <th>Title</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Organizer</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Participant</th>
    </tr>
@foreach($events as $row)
    <tr>
        <td>{{ $row->title}}</td>
        <td>{{ $row->venue}}</td>
        <td>{{ $row->date}}</td>
        <td>{{ $row->organizer_id}}</td>
        <td>{{ $row->created_at}}</td>
        <td>{{ $row->updated_at}}</td>
        <td>
            {{ $row->participant}}
            <a href="{{ route('participant.index', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp; Add
        </td>
        <td><a href="{{ route('events.edit', $row->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp; Edit</td>
        <td><a href="{{ route('events.delete', $row->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp; Delete</td>
    </tr>

@endforeach
</table>

{{ $events->links() }}

@endsection

