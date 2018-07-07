<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb['url'])
	        <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a></li>
	    @else
	        <li class="breadcrumb-item active">{{ $breadcrumb['label'] }}</li>
	    @endif

        @endforeach
   </ol>
</nav>