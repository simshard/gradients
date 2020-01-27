@extends('layouts.app')
@section('content')
<div class="container">
    @if ($flash=session('message'))
            <div id="flash-message" class="alert alert-success">
                {{ $flash }}
            </div>
            @endif
    <div class="row">

    @foreach($swatches as $swatch)




    <div class="col-md-4">
        <div class="card mb-4 shadow-sm" style="width: 18rem;">
         <div class="card-img-top" style="height:225px;  background-image: {{$swatch->gradient}};" ></div>
         <div class="card-body card-body d-flex flex-column align-items-start">
           <h5>
           <a class="card-title card-link text-dark" href="/gradients/{{$swatch->id }}">{{$swatch->title }}</a>
           </h5>
           <div>
               <a href="/gradient/{{$swatch->id}}" class="btn btn-primary">view</a>
              <span class="ml-4 text-muted">{{$swatch->owner->name}}    <small>( {{$swatch->created_at->toFormattedDateString()}})</small></span>

            </div>
        </div>
       </div>
    </div>
    @endforeach
</div>

<div>{{ $swatches->links() }}</div>

</div>
@endsection
