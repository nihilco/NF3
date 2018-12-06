@extends('layouts.app')

@section('title', 'Links')

@section('meta', '')

{{ Breadcrumbs::push('Links') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($links->count()) ? 'table-hover ' : '' }}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Slug</th>
			<th scope="col">URL</th>
		        <th scope="col">Name</th>
			<th scope="col">Clicks</th>
			<th scope="col">Expires</th>
			<th scope="col">Last Click</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($links as $link)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $link->slug }}</td>
			<td>{{ $link->url }}</td>
		        <td>{{ $link->name }}</td>
			<td>{{ $link->clicks_count }}</td>
			<td>
			@if($link->expires_clicks && $links->expires_at)
			{{ $link->expires_clicks }} clicks or in {{ $link->expires_at->diffForHumans() }}
			@elseif($link->expires_clicks)
			{{ $link->expires_clicks }} clicks
			@elseif($link->expires_at)
			in {{ $link->expires_at->diffForHumans() }}
			@else
			Never
			@endif
			</td>
			<td>{{ $link->last_click_at ?: 'N/A' }}</td>
		        <td class="td-action">
			  <a href="{{ url($link->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($link->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $link->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $link->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $link->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Link?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $link->name }} Link?</p>
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
		        <td colspan="8">No links at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection