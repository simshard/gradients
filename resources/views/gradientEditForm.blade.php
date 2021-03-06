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
    <input readonly name="gradientTxt" type="hidden" id="gradientTxt" class="form-control col-md-6" value="linear-gradient({{$swatch->direction}}deg,{{$swatch->colorvals}})" >
    <input readonly name="colorvals" type="hidden" id="colorvals" class="form-control col-md-6" value="{{$swatch->colorvals}}" >
    <input readonly name="handlers" type="hidden" id="handlers" class="form-control col-md-6" value="{{$swatch->handlers}}" >
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


  $( "#directionslider" ).slider({
      change: function( event, ui ) {
      document.getElementById("target").style.background ='linear-gradient('+$("#direction").val()+'deg,'+gp.getColorValue()+')';
      }
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

     document.getElementById("target").style.background =" linear-gradient("+{{$swatch->direction}}+"deg,"+gp.getColorValue()+")";
        // Do stuff on change of the gradient
        gp.on('change', complete => {
            console.log('safevalue='+gp.getSafeValue());

            var myvalue='linear-gradient('+direction+'deg,'+gp.getColorValue()+')';
            console.log('myvalue='+myvalue);
            document.getElementById("target").style.background = myvalue;

            var gradtxt=gp.getValue();
            $("#gradientTxt").val(gradtxt);

            var colorvals=gp.getColorValue();
            $("#colorvals").val(colorvals);

            var handlers=JSON.stringify(gp.getHandlers());
            $("#handlers").val(handlers);
         })



        /*
        console.log('gp color val = '+gp.getColorValue() );
         var colorvals=$("#colorvals").val();
         console.log('colorvalsfield='+colorvals);
         var gradtxt=document.getElementById("target").style.background;
        console.log('GP gradientTxt='+gradtxt );
        console.log('gradient txt field='+$("#gradientTxt").val());
        var direction=$("#direction").val();
        console.log('direction='+$("#direction").val());
        */



</script>

  </form>
    </div>
</div>
</div>
@endsection
