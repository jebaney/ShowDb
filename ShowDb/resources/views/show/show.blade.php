@extends('layouts.master')

@section('head')
<link href='/css/show.css' rel='stylesheet'>
@endsection

@section('title')
Show Viewer
@endsection

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form method="GET" action="/shows/{{ $show->id }}/edit">

    <div class="form-group">
      <label for="show_id">Show ID</label>
      <input disabled value="{{ $show->id }}"
	 type="text"
	 class="form-control"
	 id="show_id"
	 placeholder="">
    </div>

    <div class="form-group">
      <label for="show_date">Show Date</label>
      <input disabled value="{{ $show->date }}"
	 type="text"
	 class="form-control"
	 id="show_date"
	 placeholder="YYYY-MM-DD">
    </div>
    <div class="form-group">
      <label for="show_venue">Show Venue</label>
      <input disabled value="{{ $show->venue }}"
	 type="text"
	 class="form-control"
	 id="show_venue"
	 placeholder="Venue - City, State">
    </div>

    <label>Set List</label>
    <table class="table table-striped">
      <tbody>
	@foreach($show->setlistItems->sortBy('order') as $item)
	<tr>
	  <td>{{ $item->order }}. <a href="/songs/{{ $item->song->id }}">{{ $item->song->title }}</a></td>
	</tr>
	@endforeach

	<tr>
	  <td>
	@if($user && $user->admin)
	<span class="input-grp-btn">
	  <button type="submit" class="pull-left btn btn-primary">Edit Show</button>
	</span>
	<span class="input-grp-btn">
	  <button id="deletebtn" type="button" class="pull-right btn btn-primary">Delete Show</button>
	</span>

	@endif
	  </td>
	</tr>
      </tbody>
    </table>
      </form>
    </div>
    <form id="deleteform" method="POST" action="/shows/{{ $show->id }}">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
    <div class="col-md-6">
      <form method="POST" action="/shows/{{ $show->id }}/notes">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="show_id">Show Notes</label>
      <table id="notetable" class="table table-striped">
	<tbody>
	  @foreach($show->notes as $note)
	  <tr>
	<td>
	  {!! $note->note !!}
	  @if(($user && $user->admin) || ($user && $user->id == $note->user_id))
	  <span class="input-grp-btn">
	    <button type="button" class="notedeletebutton pull-right pull-up btn btn-default"
		data-note-id="{{ $note->id }}">
	      <span class="glyphicon glyphicon-trash"></span>
	    </button>
	  </span>
	  @endif
	  <div class="form-group">
	  <small class="form-text text-muted">
	    <em>by {{ $note->creator->username or $note->creator->name }}</em>
	  </small>
	  </div>
	</td>
	  </tr>
	  @endforeach

	  <tr>
	<td>
	  @if($user)
	  <span class="input-grp-btn">
	    <button id="noteaddbutton" type="button" class="pull-left btn btn-default">
	      <span class="glyphicon glyphicon-plus"></span>
	    </button>
	  </span>
	  <span class="input-grp-btn">
	    <!-- right hand button -->
	  </span>
	  @endif
	</td>
	  </tr>

	</tbody>
      </table>
    </div>
      </form>
      <form id="deletenoteform" method="POST" action="/shows/{{ $show->id }}/notes/">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
      </form>
    </div>
  </div>

</div>

<script src="/js/showshow.js"></script>

@endsection
