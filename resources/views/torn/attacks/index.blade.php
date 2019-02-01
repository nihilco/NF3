@extends('layouts.app')

@section('title', 'Attacks')

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn')) }}
{{ Breadcrumbs::push('Attacks') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($attacks->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Torn ID</th>
			<th scope="col">Attacker</th>
			<th scope="col">Defender</th>
			<th scope="col">Result</th>
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
		
		@forelse($attacks as $attack)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $attack->torn_id }}</td>
		        <td>{{ ($attack->attacker) ? $attack->attacker->name : 'N/A' }}</td>
			<td>{{ ($attack->defender) ? $attack->defender->name : 'N/A' }}</td>
			<td>{{ $attack->result }}</td>
		        <td class="td-action">
			  <a href="https://www.torn.com/attacks.php?XID={{ $attack->torn_id }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-globe"></i></a>
			  <a href="{{ url($attack->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($attack->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $attack->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $attack->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $attack->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Attack?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $attack->id }} Attack?</p>
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
		        <td colspan="6">No attacks at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		  {{ $attacks->links() }}
		  
@endsection