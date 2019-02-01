@extends('layouts.app')

@section('title', 'Items')

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn')) }}
{{ Breadcrumbs::push('Items') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($items->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Torn ID</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>

		@php
		  if(isset($_GET['page'])) {
		      $p = $_GET['page'];
		      $c = 1 + (25 * ($p-1));
		  }else {
                      $c = 1;
		  }
                @endphp

		@forelse($items as $item)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $item->torn_id }}</td>
		        <td>{{ $item->name }}</td>
		        <td><img src="{{ $item->image }}" alt="{{ $item->name }}"/></td>			
		        <td class="td-action">
			  <a href="https://www.torn.com/profiles.php?XID={{ $item->torn_id }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-globe"></i></a>
			  <a href="{{ url($item->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($item->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $item->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $item->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Item?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $item->id }} Item?</p>
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
		        <td colspan="5">No items at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		  {{ $items->links() }}

@endsection