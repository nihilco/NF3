@extends('layouts.app')

@section('title', 'Events')

@section('meta', '')

{{ Breadcrumbs::push('Events') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($events->count()) ? 'table-hover ' : '' }}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Name</th>
		        <th scope="col">Attendees</th>
			<th scope="col">Start Date</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($events as $event)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $event->name }}</td>
		        <td>{{ $event->spots_filled }}{{ ($event->spots_availible) ? ' / ' . $event->spots_availible : '' }}</td>
			<td>{{ $event->starts_at }}</td>
		        <td class="td-action">
			  <a href="{{ url($event->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($event->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $event->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $event->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $event->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Event?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $event->name }} Event?</p>
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
		        <td colspan="5">No events at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection