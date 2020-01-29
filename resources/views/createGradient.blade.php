@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-8">
<h1>Create Gradient Swatch</h1>
@include('layouts.errors')
    <div>
      <form  action="/gradient" method="post">
      @csrf
      @include('gradientForm')
      </form>
    </div>
</div>
</div>

@endsection
