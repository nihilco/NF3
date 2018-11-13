@extends('layouts.app')

@section('title', 'Skills')

@section('meta', '')

{{ Breadcrumbs::push('Game', url('/game')) }}
{{ Breadcrumbs::push('Skills') }}

@section('content')

<table class="table table-responsive-sm {{ ($skills->count()) ? 'table-hover ' : '' }}table-outline">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Activities</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    @php
      $c = 1;
    @endphp

    @forelse($skills as $skill)
      <tr>
        <th scope="row" class="td-count">{{ $c }}</th>
        <td>{{ $skill->name }}</td>
	<td>{{ $skill->activities->count() }}</td>
        <td class="td-action">
          <a href="{{ url($skill->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
	  <a href="{{ url($skill->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
	  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $skill->id }}"><i class="fas fa-trash-alt"></i></button>
          <form action="{{ $skill->path() }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <div id="deleteModal-{{ $skill->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Skill?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the {{ $skill->name }} Skill?</p>
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
        <td colspan="3">No skills at this time.</td>
      </tr>
    @endforelse

  </tbody>
</table>

@endsection