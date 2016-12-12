@extends('layouts.master')

@section('head')
<link href='/css/song.css' rel='stylesheet'>
@endsection

@section('title')
Song Finder
@endsection

@section('content')


<div class="container">
  <form action="/songs" method="GET" role="search">
    <div class="input-group">
      <input type="text" class="form-control" name="q"
	     placeholder="Search Songs" value="{{ $query or '' }}">
      <small class="form-text text-muted">examples: <em>november blue, cover, bob dylan, etc</em></small>
      <span class="input-group-btn" style="vertical-align:top;">
	<button type="submit" class="btn btn-default">
	  <span class="glyphicon glyphicon-search"></span>
	</button>
      </span>
    </div>
  </form>
</div>

<div class="container">
  <form action="/songs" method="POST">
    {{ csrf_field() }}
  <table id="songtable" class="table table-striped">
    <thead>
      <tr>
	<th>ID</th>
	<th>
	  <a href="{{ Request::fullUrlWithQuery(['o' => $setlist_item_order]) }}">
	    Play Count
	  </a>
	</th>
	<th>
	  <a href="{{ Request::fullUrlWithQuery(['o' => $title_order]) }}">
	    Title
	  </a>
	</th>
      </tr>
    </thead>
    <tbody>
      @forelse($songs as $song)
      <tr>
	<td>{{ $song->id }}</td>
	<td><a href="/songs/{{ $song->id }}/plays">{{ $song->setlist_items_count }}</a></td>
	<td><a href="/songs/{{ $song->id }}">{{ $song->title }}</a></td>
      </tr>
      @empty
      <tr>
	<td colspan="3">No Matches</td>
      </tr>
      @endforelse

    </tbody>
  </table>
  </form>
  @if($user && $user->admin)
  <ul class="pagination">
    <li>
      <button id="addbutton" type="button" class="pull-left btn btn-default">
	<span class="glyphicon glyphicon-plus"></span>
      </button>
    </li>
  </ul>
  @endif
  {!! $songs->render() !!}
</div>

<script src="/js/indexsongs.js"></script>
@endsection
