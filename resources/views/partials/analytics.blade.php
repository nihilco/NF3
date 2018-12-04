@php
    $ac = (config('app.website')) ? config('app.website')->analytics_code : 0;
@endphp
@if($ac != 0 || $ac != '' || $ac != '')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $ac }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{ $ac }}');
</script>
@endif