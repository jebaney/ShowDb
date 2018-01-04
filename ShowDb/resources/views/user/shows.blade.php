@extends('layouts.master')
@section('title')
Shows ({{ $user->username }})
@endsection
@section('content')

<div class="panel panel-default container">
  <div class="panel-heading row">
    <h1>Shows</h1>
    <p><em>A listing of past and future The Avett Brothers shows for user: <b>{{ $user->username }}</b>
	@if($q)
	in <b>{{ $q }}</b>
	@endif
    </em></p>
  </div><!--/.panel-heading -->
  <div class="is-table panel-body">

    <div class="is-table-col col-xs-9">
      <table id="showtable" class="table table-striped">
	<thead>
	  <tr>
	    <th width="1px"></th>
	    <th>
	      Date
	    </th>
	    <th>
	      Songs
	    </th>
	    <th>Venue</th>
	  </tr>
	</thead>
	<tbody>
	  @forelse($shows as $show)
	  <tr>
	    <td>
	      <span style="white-space:nowrap;">
		@if($show->incomplete_setlist)
		<i style="color: orange"
		   class="fa fa-exclamation"
		   data-toggle="tooltip"
		   data-placement="right"
		   title="Partial or incomplete setlist"
		   aria-hidden="true"></i>
		@endif
		@if($show->notes_count > 0)
		<i class="fa fa-files-o"
		   data-toggle="tooltip"
		   data-placement="right"
		   title="{{ $show->notes_count }} notes"
		   aria-hidden="true"></i>
		@endif
	      </span>
	    </td>
	    <td>{{ $show->date }}</td>
	    <td>
	      @if ($show->setlist_items_count === 0)
	      -
	      @else
	      <strong>{{ $show->setlist_items_count }}</strong>
	      @endif
	    </td>
	    <td>
	      <a href="/shows/{{ $show->id }}">
		{{ $show->venue }}
	      </a>
	    </td>
	  </tr>
	  @empty
	  <tr>
	    <td colspan="3">No matches</td>
	  </tr>
	  @endforelse
	</tbody>
      </table>
    </div><!--.is-table-col-->
    <div class="is-table-col col-xs-3 image-col">
      @include('widgets.slider', ['slides' =>
      array_map(function($a){ return "/{$a}"; }, glob('sliderimages/*.jpg'))
      ] )
    </div>
  </div><!--/.is-table-->
  <div class="panel-footer row">
    <div class="pull-right">
      {!! $shows->render() !!}
    </div>
    <div style="clear:both;"></div>
  </div>
</div><!--/.panel-->

@endsection
