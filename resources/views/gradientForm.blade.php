<div id="gp"></div>
<div id="target"></div>

<fieldset>
        <div class="form-group">
        <label for="title">Title <span class="small  text-secondary">*(required)</span></label>
        <input required="required" name="title" type="text" id="title"
            class="form-control col-md-6 {{ $errors->has('title')?'is-invalid':'' }}" value=" ">
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
        <input readonly name="gradientTxt" type="text" id="gradientTxt" class="form-control col-md-6 " value="linear-gradient(90deg, rgb(255, 0, 0) 0%, rgb(0, 0, 249) 100%)" >
        <input readonly name="colorvals" type="text" id="colorvals" class="form-control col-md-6 " value="rgb(255, 0, 0) 0%, rgb(0, 0, 249) 100% " >
        <input readonly name="handlers" type="text" id="handlers" class="form-control col-md-6 " value='[{"position":0,"selected":0,"color":"rgb(255, 0, 0)"},{"position":100,"selected":1,"color":"rgb(0, 0, 255)"}]' >
    </div>



    <div class="form-group">
        <button type="submit" name="submit" class=" btn btn-primary">
            {{ $submitButtonText ?? 'Save Gradient' }}
        </button>
    </div>
</fieldset>




 <script src="{{ asset('js/grapick.min.js') }}" ></script>
 <!-- mix webpack hates this script mixed es6 modules with common js ones???-->
 <script type="text/javascript">
      $(document).ready(function () {


        $("#directionslider").slider({
        orientation: "horizontal",
        range: "max",
        min: 0,
        max: 360,
        value:45,
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

    const gp = new Grapick({
            el: '#gp',
            colorEl: '<input id="colorpicker"/>'
        });
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
        gp.addHandler(0,  'rgb(255, 0, 0)');
        gp.addHandler(100, 'rgb(0, 0, 255)');
        document.getElementById("target").style.background = gp.getSafeValue();

        gp.setDirection('90deg');
        $("#direction").val('90');
      var direction=$("#direction").val;
        // Do stuff on change of the gradient
        gp.on('change', complete => {
            document.getElementById("target").style.background = gp.getSafeValue();
            //var grad=gp.getValue();
            var colorvals=gp.getColorValue();
            $("#colorvals").val(colorvals);

            var gradtxt=gp.getValue();
            $("#gradientTxt").val(gradtxt);

            var handlers=JSON.stringify(gp.getHandlers());
            $("#handlers").val(handlers);


            // gp.setDirection(direction);

          console.log(gp.getHandlers());
            //console.log(handlers); //json
            console.log('color val = '+gp.getColorValue() );
           // console.log('safe val = '+gp.getSafeValue() );
           // console.log('simple val = '+gp.getValue() );
           // console.log('prefixed val = '+gp.getPrefixedValues());

           // console.log(hcolors);
          //  console.log(hpos);
            console.log(colorvals);
            var direction=$("#direction").val();
            console.log('direction='+direction);
            // gp.setDirection('45deg');
        /**/

         })

    </script>
