@extends('pages.admin.layout')

@section('title')
    Create Event
@endsection

@section('admin-content')
    <div id="event-create" class="wrapper">
        @include ('errors.errors')

        <h2>Create an Event</h2>
        <br/>

        {!! Form::open(['action' => 'EventsController@store']) !!}

        <label for="title">Title</label>
        {!! Form::text('title') !!}

        <label for="description">Description</label>
        {!! Form::textarea('description', null, array('class'=>'editor')) !!}

        <label for="event_location">Event Location</label>
        {!! Form::text('event_location') !!}

        <label for="meeting_location">Meeting Location</label>
        {!! Form::text('meeting_location') !!}

        <label for="start_time">Event Start</label>
        {!! Form::text('start_time', '', array('class'=>'datetime')) !!}

        <label for="end_time">Event End</label>
        {!! Form::text('end_time', '', array('class'=>'datetime')) !!}

        <label for="open_time">Signup Open</label>
        <p>(optional, defaults to now)</p>
        {!! Form::text('open_time', '', array('class'=>'datetime')) !!}

        <label for="close_time">Signup Close</label>
        <p>(optional, defaults to event start time)</p>
        {!! Form::text('close_time', '', array('class'=>'datetime')) !!}

        <label for="type_id">What kind of event is this?</label>
        <p>(optional)</p>
        <ul>
            <li>{!! Form::radio('type_id', 1) !!} Service</li>
            <li>{!! Form::radio('type_id', 2) !!} Social</li>
            <li>{!! Form::radio('type_id', 3) !!} Committee</li>
            <li>{!! Form::radio('type_id', 4) !!} Kiwanis</li>
            <li>{!! Form::radio('type_id', 5) !!} Fundraising</li>
            <li>{!! Form::radio('type_id', 6) !!} Division/District</li>
        </ul>

        <br/>
        <br/>

        {!! Form::submit('Create', ['class' => 'button']) !!}
        {!! Form::close() !!}
    </div>
@endsection
