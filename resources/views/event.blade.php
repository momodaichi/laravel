@extends('master')
<h2>Event Ready and Check out for the date </h2>
<table border = "1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray">
		<th>Event ID</th>
		<th>Event Name</th>
		<th>Event Type</th>
		<th>Event Status</th>
		<th>Artist Type</th>
		<th>Event Date</th>
		<th>Event Location</th>
		<th>Action</th>		
	</tr>
	<tr>
	@if(count($event))
		@foreach($event as $event)
			<td> {{ $event->event_id }} </td>
			<td> {{ $event->event_name }} </td>
			<td> {{ $event->event_type }} </td>
			<td> {{ $event->event_status }} </td>
			<td> {{ $event->artist_type }} </td>
			<td> {{ $event->event_date }} </td>
			<td> {{ $event->event_location }} </td>
			<td>Edit - Delete </td>	
		</tr>
		@endforeach
	@endif
@section('konten')
@stop
</table>