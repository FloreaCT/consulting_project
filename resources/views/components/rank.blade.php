@php
    $subscription = isset($cs) ? 'rank' . $cs : 'rank' . substr(Auth::user()->controlstring, 1, 2);
@endphp

@include("components.$subscription")
