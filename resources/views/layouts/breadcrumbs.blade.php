<nav aria-label="breadcrumbs">
  <ol class="breadcrumb" style="background:#FFFFFF">
    <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
    @for($i = 0; $i < count($breadcrumbs); $i++)
    <li class="breadcrumb-item">
      @if(array_key_exists('url', $breadcrumbs[$i]))
        <a href="{{ $breadcrumbs[$i]['url'] }}">
      @endif

      @if(array_key_exists('label', $breadcrumbs[$i]))
        {{ $breadcrumbs[$i]['label'] }}
      @else
        {{ $breadcrumbs[$i] }}
      @endif

      @if(array_key_exists('url', $breadcrumbs[$i]))
      </a>
      @endif
    </li>
    @endfor
  </ol>
</nav>
		      