

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

        // Do stuff on change of the gradient
        gp.on('change', complete => {
            document.getElementById("target").style.background = gp.getSafeValue();
            var grad=gp.getValue();
            var colorvals=gp.getColorValue();

            var gradtxt=gp.getValue();
            $("#gradientTxt").val(gradtxt);

            var handlers=JSON.stringify(gp.getHandlers());
            $("#handlers").val(handlers);

            var direction=$("#direction").val;
           // gp.setDirection(direction);

        /*  console.log(gp.getHandlers());
            console.log(handlers); //json
            console.log('color val = '+gp.getColorValue() );
            console.log('safe val = '+gp.getSafeValue() );
            console.log('simple val = '+gp.getValue() );
            console.log('prefixed val = '+gp.getPrefixedValues());
            console.log(gp.getHandlers());
            console.log(hcolors);
            console.log(hpos);
            console.log(colorvals);
            console.log(direction);
            // gp.setDirection('45deg');
        */

         })
