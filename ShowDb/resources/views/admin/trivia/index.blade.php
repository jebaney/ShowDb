@extends('layouts.master')
@section('title')
Trivia Admin
@endsection
@section('content')
<div class="panel panel-default container">
  <div class="panel-heading row">
    <div class="col-lg-6 col-md-6">
      <h1>Trivia Questions</h1>
      <p><em>Trivia Questions ({{ count($questions) }})</em></p>
      <p>
	<form action="/admin/trivia" method="GET" id="group_chooser_form">
	  <select name="groupname" onchange="javascript:document.getElementById('group_chooser_form').submit()">
	    @foreach($groups as $group)
	    <option value="{{ $group }}" @if($currentGroup == $group) SELECTED @endif >{{ $group }}</option>
	    @endforeach
	  </select>
	</form>
      </p>
    </div>
    <div class="col-lg-6 col-md-6" style="margin-top: 20px">
      <form action="{{ url()->current() }}" method="GET" role="search">
	<div class="input-group">
	  <input type="text" class="form-control" name="q"
		 placeholder="Search Questions" value="{{ $query ?? '' }}">
	  <span class="input-group-btn" style="vertical-align:top;">
	    <button type="submit" class="btn btn-default">
	      <span class="glyphicon glyphicon-search"></span>
	    </button>
	  </span>
	<a href="/admin/trivia/create?groupname={{ $currentGroup }}"
           id="timeline_add_button" 
           type="button" 
           class="pull-left btn btn-default">
	  <span class="glyphicon glyphicon-plus"></span>
	</a>	
	</div>
      </form>
    </div>
  </div>
  
  <div class="is-table panel-body">
    <div class="is-table-col col-xs-12">
      <form action="/admin/trivia" method="POST">
	{{ csrf_field() }}
	<table id="triviatable" class="table table-striped" style="table-layout: fixed">
	  <thead>
	    <tr>
	      <th>
		<a href="">
		  Question
		</a>
	      </th>
	      <th>
		<a href="">
		  Submitter
		</a>
	      </th>
	      <th>
		<a href="">
		  Status
		</a>
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    @forelse($questions as $question)
	    <tr>
	      <td>
		<a href="/admin/trivia/{{ $question->id }}">{{ $question->question }}</a>
		@if($question->audioUrl)
		<br/>
		<audio controls>
		  <source src="{{ $question->audioUrl }}" type="audio/mpeg">
		    Your browser doesn't support the audio tag
		</audio>
		@endif
		@if($question->imageUrl)
		<br/>
		<img src="/games/trivia/{{ $question->imageUrl }}" width="100" height="100">
		@endif
	      </td>
	      <td><a href="/stats/{{ $question->creator->username }}">{{ $question->creator->username }}</a></td>
	      <td>{{ $question->published ? 'published' : 'unpublished' }}</td>
	    </tr>
	    @empty
	    <tr>
	      <td colspan="2">No Matches</td>
	    </tr>
	    @endforelse
	  </tbody>
	</table>
      </form>
    </div><!--/.is-table-col-->
  </div><!--/.is-table-->

  <div class="panel-footer row">
    <ul class="pagination">
      <li>
	<a href="/admin/trivia/create?groupname={{ $currentGroup }}"
           id="timeline_add_button" 
           type="button" 
           class="pull-left btn btn-default">
	  <span class="glyphicon glyphicon-plus"></span>
	</a>
      </li>
    </ul>
    <div class="pull-right">
      {!! $questions->render() !!}
    </div>
    <div style="clear:both;"></div>
  </div>
</div><!--/.panel-->
@endsection
