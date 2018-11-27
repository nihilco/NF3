@extends('layouts.app')

@section('title', 'Activities')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Activities') }}

@section('content')

<table class="table table-responsive-sm {{ ($activities->count()) ? 'table-hover ' : '' }}table-outline">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Skill</th>
      <th>Skill Rank</th>
      <th>Name</th>      
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @php
      $c = 1;
    @endphp

    @forelse($activities as $activity)
      <tr>
        <th scope="row" class="td-count">{{ $c }}</th>
        <td>{{ $activity->skill->name }}</td>
        <td>{{ $activity->skill_rank }}</td>
        <td>{{ $activity->name }}</td>	
        <td class="td-action">
          <a href="{{ url($activity->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
	  <a href="{{ url($activity->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
	  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $activity->id }}"><i class="fas fa-trash-alt"></i></button>
          <form action="{{ $activity->path() }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <div id="deleteModal-{{ $activity->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Activity?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the {{ $activity->name }} Activity?</p>
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
        <td colspan="5">No activities at this time.</td>
      </tr>
    @endforelse

  </tbody>
</table>

{{ $activities->links() }}

@endsection