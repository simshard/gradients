@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Gradient {{$swatch->title}}</h3>
    <div>{{$swatch->gradient}}</div>
    <div>{{$swatch->direction}}</div>
    <div>{{$swatch->colorvals}}</div>


</div>

<!--
    /^(?:to\s)\w+|(?:deg)/g
/(to\s)\w+|([0-9]+deg)/g   match deg preceded by one or more digits AND  to followed by a space and some word chars
-->
@endsection
