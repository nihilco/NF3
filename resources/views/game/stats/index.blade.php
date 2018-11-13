@extends('layouts.app')

@section('title', 'Stats')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Stats') }}

@section('content')

<table class="table table-responsive-sm {{ ($stats->count() > 0) ? 'table-hover ' : '' }}table-outline">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Min</th>
      <th>Max</th>
      <th>Refresh</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @php
      $c = 1;
    @endphp

    @forelse($stats as $stat)
      <tr>
        <th scope="row" class="td-count">{{ $c }}</th>
        <td>{{ $stat->name }}</td>
        <td>{{ number_format($stat->min) }}</td>
	<td>{{ number_format($stat->max) }}</td>
	<td>{{ $stat->fullRefreshString }}</td>
        <td class="td-action">
          <a href="{{ url($stat->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
	  <a href="{{ url($stat->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
	  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $stat->id }}"><i class="fas fa-trash-alt"></i></button>
          <form action="{{ $stat->path() }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <div id="deleteModal-{{ $stat->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Stat?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the {{ $stat->name }} Stat?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </form>			  
      </td>
    </tr>
    @php
      $c++;
    @endphp

    @empty
      <tr>
        <td colspan="6">No stats at this time.</td>
      </tr>
    @endforelse

  </tbody>
</table>

@endsection