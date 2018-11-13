<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ (!auth()->guest()) ? url()->route('dashboard') : url()->route('home') }}"><i class="fas fa-home"></i></a></li>

        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb['url'])
	        <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
	    @else
	        <li class="breadcrumb-item active">{{ $breadcrumb['label'] }}</li>
	    @endif

        @endforeach

	@guest

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

	@else

<!-- Game Stats Here -->
<li class="breadcrumb-menu">
<div class="btn-group" role="group" aria-label="Button group">
<a class="btn disabled" href="#">
<i class="icon-graph"></i> Health 300
</a>
<a class="btn disabled" href="#">
<i class="icon-settings"></i> Energy 300
</a>
<a class="btn disabled" href="#">
<i class="icon-settings"></i> Skill 150
</a>
</div>
</li>

	@endguest

</ol>