@extends('layouts.app')

@section('title', 'List Contact Wessages')

@section('meta', '')

{{ Breadcrumbs::push('Contact Messages', url('/contact/list')) }}
{{ Breadcrumbs::push('List') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($issues->count()) ? 'table-hover ' : ''}}table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">From</th>
			<th scope="col">Subject</th>
			<th scope="col">Date</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($issues as $issue)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $issue->owner->email }}</td>
		        <td>{{ $issue->subject }}</td>
			<td>{{ $issue->created_at }}</td>
		        <td class="td-action">
			  <a href="/contact/{{ $issue->id }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $issue->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $issue->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $issue->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Issue?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $issue->id }} Issue?</p>
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
		        <td colspan="5">No contact messages at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>
		  
@endsection