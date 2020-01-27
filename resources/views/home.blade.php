@extends('layouts.app')

@section('content')
<div class="container">

          <h2> <a href="/">View All Gradients</a></h2>
          <h2>My Gradients ({{ Auth::user()->name }})</h2>
            @if ($flash=session('message'))
            <div id="flash-message" class="alert alert-success">
                {{ $flash }}
            </div>
            @endif
            @if (count($swatches)==0)
            <h6> No Saved Gradient Swatches Yet</h6>
            @else

            <div class="section">
          <div  class="container">
            <div class="row">

            @foreach ($swatches as $swatch)


<div class="col-md-4">
    <div class="card mb-4 shadow-sm"  >
      <div class="card-img-top" style="height:225px;  background-image: {{$swatch->gradient}};" ></div>
        <div class="card-body d-flex flex-column align-items-start">
        <h5><a class="card-title card-link text-dark" href="/gradients/{{$swatch->id }}">
        {{$swatch->title }}</a></h5>
           <div>
            <a href="/gradient/{{$swatch->id}}" class="btn btn-primary" title="view swatch">view</a>
            <a href="/gradient/{{$swatch->id}}/edit" class="btn btn-primary" title="edit swatch">edit</a>
             <form method="POST" action="/gradient/{{$swatch->id}}/delete" class="form-inline"  >
                   @method('DELETE')
                    @csrf
                    <input type="submit" name="Delete" value="Delete" class="btn btn-light btn-sm" title="Delete Swatch">
                </form>
            </div>
        </div>
       </div>
    </div>

    @endforeach
    </div>
   </div>
</div>
    @endif
</div>
@endsection
