@extends('layouts.app')

@section('title', 'Players')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Players') }}

@section('content')

<table class="table table-responsive-sm {{ ($players->count()) ? 'table-hover ' : '' }}table-outline">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Level</th>
      <th>Age</th>
      <th>Experience</th>
      <th>Last Activity</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @php
      $c = 1;
    @endphp

    @forelse($players as $player)
      <tr>
        <th scope="row" class="td-count">{{ $c }}</th>
        <td>{{ $player->name }}</td>
	<td>{{ $player->level }}</td>
	<td>{{ number_format($player->age) }}</td>
	<td>{{ number_format($player->experience) }}</td>
        <td>{{ $player->updated_at }}</td>
        <td class="td-action">
          <a href="{{ url($player->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
	  <a href="{{ url($player->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
	  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $player->id }}"><i class="fas fa-trash-alt"></i></button>
          <form action="{{ $player->path() }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <div id="deleteModal-{{ $player->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Player?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the {{ $player->name }} Player?</p>
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
        <td colspan="7">No players at this time.</td>
      </tr>
    @endforelse

  </tbody>
</table>

@endsection