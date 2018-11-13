<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ (!auth()->guest()) ? url()->route('dashboard') : url()->route('home') }}"><i class="fas fa-home"></i></a></li>

        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb['url'])
	        <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
	    @else
	        <li class="breadcrumb-item active">{{ $breadcrumb['label'] }}</li>
	    @endif

        @endforeach

<!-- Breadcrumb Menu-->
<li class="breadcrumb-menu d-md-down-none">
<div class="btn-group" role="group" aria-label="Button group">
<a class="btn" href="#">
<i class="icon-speech"></i>
</a>
<a class="btn" href="/dashboard">
<i class="icon-graph"></i> Dashboard</a>
<a class="btn" href="/settings">
<i class="icon-settings"></i> Settings</a>
</div>
</li>
</ol>