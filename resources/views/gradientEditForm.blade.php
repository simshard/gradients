@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="col-md-8">

@include('layouts.errors')

    <form  action="/gradient/{{$swatch->id}}/edit" method="post">
    @csrf
        <h3>Edit Gradient <em>{{$swatch->title}}</em></h3>
        <div id="gp"></div>
        <div id="target"></div>
    <fieldset>
        <div class="form-group">
        <label for="title">Title <span class="small  text-secondary">*(required)</span></label>
        <input required="required" name="title" type="text" id="title"
            class="form-control col-md-6 {{ $errors->has('title')?'is-invalid':'' }}" value="{{$swatch->title}}">
    </div>
       <div class="form-group">
               <label for="">Direction (&deg;)</label>
            <div id="directionslider"> </div>
                <p>
                 <label for="direction">degrees</label>
                 <input type="text" name="direction" id="direction"
                  readonly style="border:0; color:#f6931f; font-weight:bold;">
               </p>
        </div>
     <div class="form-group">
     <input readonly name="gradientTxt" type="text" id="gradientTxt" class="form-control col-md-6" value="{{$swatch->gradient}}" >
        <input readonly name="handlers" type="text" id="handlers" class="form-control col-md-6" value="{{$swatch->handlers}}" >
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class=" btn btn-primary">
            {{ $submitButtonText ?? 'Save Gradient' }}
        </button>
    </div>
</fieldset>

 <!-- ################ https://github.com/artf/grapick/wiki ####################################### -->
  <script src="{{ asset('js/grapick.min.js') }}" ></script>
<script>
//init slider
$(document).ready(function () {
        $("#directionslider").slider({
        orientation: "horizontal",
        range: "max",
        min: 0,
        max: 360,
        value:{{$swatch->direction}},
        slide: function (event, ui) {
            $("#direction").val(ui.value);

        },
      });
    });
//init gp
    const gp = new Grapick({
            el: '#gp',
            colorEl: '<input id="colorpicker"/>'
        });
//color picker
      gp.setColorPicker(handler => {
      const el = handler.getEl().querySelector('#colorpicker');
      $(el).spectrum({
          color: handler.getColor(),
          //showAlpha: true,
          change(color) {
            handler.setColor(color.toRgbString());
          },
          move(color) {
            handler.setColor(color.toRgbString(), 0);
          }
      });
    });

    // Handlers are color stops
    {!!$swatch->hstr!!}
    //no escape be careful!

    $("#direction").val({{$swatch->direction}});

        document.getElementById("target").style.background = gp.getSafeValue();

        // Do stuff on change of the gradient
        gp.on('change', complete => {
            document.getElementById("target").style.background = gp.getSafeValue();
            var grad=gp.getValue();

            var gradtxt=gp.getValue();
            $("#gradientTxt").val(gradtxt);

            var handlers=JSON.stringify(gp.getHandlers());
            $("#handlers").val(handlers);

           //  var direction=$("#direction").val;
           // gp.setDirection(direction);

         })
</script>

  </form>
    </div>
</div>
</div>
@endsection
