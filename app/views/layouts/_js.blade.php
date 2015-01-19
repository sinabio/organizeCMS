<?php
$scripts = [
    'bootstrap.min.js',
];
?>
@foreach($scripts as $js)
<script src="{{ asset('assets/js/' . $js); }}"></script>
@endforeach