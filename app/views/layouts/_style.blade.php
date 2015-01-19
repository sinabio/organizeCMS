<?php
$css = [
    'bootstrap_slate.min.css',
    'organize.css',
];
?>
@foreach($css as $style)
<link rel="stylesheet" href="{{ asset('assets/css/' . $style) }}" />
@endforeach