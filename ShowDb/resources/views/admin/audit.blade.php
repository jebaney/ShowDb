@extends('layouts.master')
@section('title')
Admin
@endsection
@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>Audit Log</h3>
    </div>
    <table id="audittable" class="table table-striped">
      <tbody>
	<thead>
	  <th>When</th>
	  <th>User</th>
	  <th>Type</th>
	  <th>Old</th>
	  <th>New</th>
	</thead>
	@forelse($audits as $audit)
	<tr>
	  <td>{{ \Carbon\Carbon::createFromTimeStamp($audit->created_at->timestamp)->diffForHumans() }}</td>
	  <td>
	    @if( $audit->user )
	    {{ $audit->user->name }}</td>
	  @endif
	  <td><a href="{{ $audit->route }}">{{ $audit->auditable_type }} {{ $audit->type }}</a></td>
	  <td><pre>{{ json_encode(json_decode($audit->old), JSON_PRETTY_PRINT) }}</pre></td>
	  <td><pre>{{ json_encode(json_decode($audit->new), JSON_PRETTY_PRINT) }}</pre></td>
	</tr>
	@empty
	<tr>
	  <td colspan="3">No matches</td>
	</tr>
	@endforelse
      </tbody>
    </table>
    {!! $audits->render() !!}
  </div><!--/.panel-->
</div><!--/.container-->
@endsection
