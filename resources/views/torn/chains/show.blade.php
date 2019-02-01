@extends('layouts.app')

@section('title', 'Chain ' . $chain->torn_id)

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn') ) }}
{{ Breadcrumbs::push('Chains', url('/torn/chains') ) }}
{{ Breadcrumbs::push($chain->torn_id) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Chain {{ $chain->torn_id }}</h5>
		</div>
		<div class="card-body">

		</div>
	      </div>

                  <table class="table table-responsive-sm {{ (count($results)
) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Player</th>
			<th scope="col">Hits</th>
			<th scope="col">Resepect</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                      $c = 1;
                @endphp
		
		@forelse($results as $result)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $result['name'] }}</td>
		        <td>{{ $result['hits'] }}</td>
			<td>{{ $result['respect'] }}</td>
		      </tr>

		      @php
		        $c++;
		      @endphp

		@empty

		      <tr>
		        <td colspan="4">No results at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection