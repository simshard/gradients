(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/gradientpicker.js":
/*!****************************************!*\
  !*** ./resources/js/gradientpicker.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  $(\"#directionslider\").slider({\n    orientation: \"horizontal\",\n    range: \"max\",\n    min: 0,\n    max: 360,\n    value: 45,\n    slide: function slide(event, ui) {\n      $(\"#direction\").val(ui.value);\n    }\n  });\n});\nvar gp = new Grapick({\n  el: '#gp',\n  colorEl: '<input id=\"colorpicker\"/>'\n});\ngp.setColorPicker(function (handler) {\n  var el = handler.getEl().querySelector('#colorpicker');\n  $(el).spectrum({\n    color: handler.getColor(),\n    //showAlpha: true,\n    change: function change(color) {\n      handler.setColor(color.toRgbString());\n    },\n    move: function move(color) {\n      handler.setColor(color.toRgbString(), 0);\n    }\n  });\n}); // Handlers are color stops\n\ngp.addHandler(0, 'rgb(255, 0, 0)');\ngp.addHandler(100, 'rgb(0, 0, 255)');\ndocument.getElementById(\"target\").style.background = gp.getSafeValue();\ngp.setDirection('90deg');\n$(\"#direction\").val('90'); // Do stuff on change of the gradient\n\ngp.on('change', function (complete) {\n  document.getElementById(\"target\").style.background = gp.getSafeValue();\n  var grad = gp.getValue();\n  var colorvals = gp.getColorValue();\n  var gradtxt = gp.getValue();\n  $(\"#gradientTxt\").val(gradtxt);\n  var handlers = JSON.stringify(gp.getHandlers());\n  $(\"#handlers\").val(handlers);\n  var direction = $(\"#direction\").val; // gp.setDirection(direction);\n\n  /*  console.log(gp.getHandlers());\n      console.log(handlers); //json\n      console.log('color val = '+gp.getColorValue() );\n      console.log('safe val = '+gp.getSafeValue() );\n      console.log('simple val = '+gp.getValue() );\n      console.log('prefixed val = '+gp.getPrefixedValues());\n      console.log(gp.getHandlers());\n      console.log(hcolors);\n      console.log(hpos);\n      console.log(colorvals);\n      console.log(direction);\n      // gp.setDirection('45deg');\n  */\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZ3JhZGllbnRwaWNrZXIuanM/NWE2MSJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInNsaWRlciIsIm9yaWVudGF0aW9uIiwicmFuZ2UiLCJtaW4iLCJtYXgiLCJ2YWx1ZSIsInNsaWRlIiwiZXZlbnQiLCJ1aSIsInZhbCIsImdwIiwiR3JhcGljayIsImVsIiwiY29sb3JFbCIsInNldENvbG9yUGlja2VyIiwiaGFuZGxlciIsImdldEVsIiwicXVlcnlTZWxlY3RvciIsInNwZWN0cnVtIiwiY29sb3IiLCJnZXRDb2xvciIsImNoYW5nZSIsInNldENvbG9yIiwidG9SZ2JTdHJpbmciLCJtb3ZlIiwiYWRkSGFuZGxlciIsImdldEVsZW1lbnRCeUlkIiwic3R5bGUiLCJiYWNrZ3JvdW5kIiwiZ2V0U2FmZVZhbHVlIiwic2V0RGlyZWN0aW9uIiwib24iLCJjb21wbGV0ZSIsImdyYWQiLCJnZXRWYWx1ZSIsImNvbG9ydmFscyIsImdldENvbG9yVmFsdWUiLCJncmFkdHh0IiwiaGFuZGxlcnMiLCJKU09OIiwic3RyaW5naWZ5IiwiZ2V0SGFuZGxlcnMiLCJkaXJlY3Rpb24iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFHdEJGLEdBQUMsQ0FBQyxrQkFBRCxDQUFELENBQXNCRyxNQUF0QixDQUE2QjtBQUM3QkMsZUFBVyxFQUFFLFlBRGdCO0FBRTdCQyxTQUFLLEVBQUUsS0FGc0I7QUFHN0JDLE9BQUcsRUFBRSxDQUh3QjtBQUk3QkMsT0FBRyxFQUFFLEdBSndCO0FBSzdCQyxTQUFLLEVBQUMsRUFMdUI7QUFNN0JDLFNBQUssRUFBRSxlQUFVQyxLQUFWLEVBQWlCQyxFQUFqQixFQUFxQjtBQUN4QlgsT0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQlksR0FBaEIsQ0FBb0JELEVBQUUsQ0FBQ0gsS0FBdkI7QUFFSDtBQVQ0QixHQUE3QjtBQVdILENBZEw7QUFnQkksSUFBTUssRUFBRSxHQUFHLElBQUlDLE9BQUosQ0FBWTtBQUNmQyxJQUFFLEVBQUUsS0FEVztBQUVmQyxTQUFPLEVBQUU7QUFGTSxDQUFaLENBQVg7QUFJRUgsRUFBRSxDQUFDSSxjQUFILENBQWtCLFVBQUFDLE9BQU8sRUFBSTtBQUM3QixNQUFNSCxFQUFFLEdBQUdHLE9BQU8sQ0FBQ0MsS0FBUixHQUFnQkMsYUFBaEIsQ0FBOEIsY0FBOUIsQ0FBWDtBQUVBcEIsR0FBQyxDQUFDZSxFQUFELENBQUQsQ0FBTU0sUUFBTixDQUFlO0FBQ1hDLFNBQUssRUFBRUosT0FBTyxDQUFDSyxRQUFSLEVBREk7QUFFWDtBQUNBQyxVQUhXLGtCQUdKRixLQUhJLEVBR0c7QUFDWkosYUFBTyxDQUFDTyxRQUFSLENBQWlCSCxLQUFLLENBQUNJLFdBQU4sRUFBakI7QUFDRCxLQUxVO0FBTVhDLFFBTlcsZ0JBTU5MLEtBTk0sRUFNQztBQUNWSixhQUFPLENBQUNPLFFBQVIsQ0FBaUJILEtBQUssQ0FBQ0ksV0FBTixFQUFqQixFQUFzQyxDQUF0QztBQUNEO0FBUlUsR0FBZjtBQVVELENBYkMsRSxDQWVFOztBQUNBYixFQUFFLENBQUNlLFVBQUgsQ0FBYyxDQUFkLEVBQWtCLGdCQUFsQjtBQUNBZixFQUFFLENBQUNlLFVBQUgsQ0FBYyxHQUFkLEVBQW1CLGdCQUFuQjtBQUNBM0IsUUFBUSxDQUFDNEIsY0FBVCxDQUF3QixRQUF4QixFQUFrQ0MsS0FBbEMsQ0FBd0NDLFVBQXhDLEdBQXFEbEIsRUFBRSxDQUFDbUIsWUFBSCxFQUFyRDtBQUVBbkIsRUFBRSxDQUFDb0IsWUFBSCxDQUFnQixPQUFoQjtBQUNBakMsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQlksR0FBaEIsQ0FBb0IsSUFBcEIsRSxDQUVBOztBQUNBQyxFQUFFLENBQUNxQixFQUFILENBQU0sUUFBTixFQUFnQixVQUFBQyxRQUFRLEVBQUk7QUFDeEJsQyxVQUFRLENBQUM0QixjQUFULENBQXdCLFFBQXhCLEVBQWtDQyxLQUFsQyxDQUF3Q0MsVUFBeEMsR0FBcURsQixFQUFFLENBQUNtQixZQUFILEVBQXJEO0FBQ0EsTUFBSUksSUFBSSxHQUFDdkIsRUFBRSxDQUFDd0IsUUFBSCxFQUFUO0FBQ0EsTUFBSUMsU0FBUyxHQUFDekIsRUFBRSxDQUFDMEIsYUFBSCxFQUFkO0FBRUEsTUFBSUMsT0FBTyxHQUFDM0IsRUFBRSxDQUFDd0IsUUFBSCxFQUFaO0FBQ0FyQyxHQUFDLENBQUMsY0FBRCxDQUFELENBQWtCWSxHQUFsQixDQUFzQjRCLE9BQXRCO0FBRUEsTUFBSUMsUUFBUSxHQUFDQyxJQUFJLENBQUNDLFNBQUwsQ0FBZTlCLEVBQUUsQ0FBQytCLFdBQUgsRUFBZixDQUFiO0FBQ0E1QyxHQUFDLENBQUMsV0FBRCxDQUFELENBQWVZLEdBQWYsQ0FBbUI2QixRQUFuQjtBQUVBLE1BQUlJLFNBQVMsR0FBQzdDLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JZLEdBQTlCLENBWHdCLENBWXpCOztBQUVIOzs7Ozs7Ozs7Ozs7O0FBY0UsQ0E1QkYiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZ3JhZGllbnRwaWNrZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG5cblxuICAgICAgICAkKFwiI2RpcmVjdGlvbnNsaWRlclwiKS5zbGlkZXIoe1xuICAgICAgICBvcmllbnRhdGlvbjogXCJob3Jpem9udGFsXCIsXG4gICAgICAgIHJhbmdlOiBcIm1heFwiLFxuICAgICAgICBtaW46IDAsXG4gICAgICAgIG1heDogMzYwLFxuICAgICAgICB2YWx1ZTo0NSxcbiAgICAgICAgc2xpZGU6IGZ1bmN0aW9uIChldmVudCwgdWkpIHtcbiAgICAgICAgICAgICQoXCIjZGlyZWN0aW9uXCIpLnZhbCh1aS52YWx1ZSk7XG5cbiAgICAgICAgfSxcbiAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgY29uc3QgZ3AgPSBuZXcgR3JhcGljayh7XG4gICAgICAgICAgICBlbDogJyNncCcsXG4gICAgICAgICAgICBjb2xvckVsOiAnPGlucHV0IGlkPVwiY29sb3JwaWNrZXJcIi8+J1xuICAgICAgICB9KTtcbiAgICAgIGdwLnNldENvbG9yUGlja2VyKGhhbmRsZXIgPT4ge1xuICAgICAgY29uc3QgZWwgPSBoYW5kbGVyLmdldEVsKCkucXVlcnlTZWxlY3RvcignI2NvbG9ycGlja2VyJyk7XG5cbiAgICAgICQoZWwpLnNwZWN0cnVtKHtcbiAgICAgICAgICBjb2xvcjogaGFuZGxlci5nZXRDb2xvcigpLFxuICAgICAgICAgIC8vc2hvd0FscGhhOiB0cnVlLFxuICAgICAgICAgIGNoYW5nZShjb2xvcikge1xuICAgICAgICAgICAgaGFuZGxlci5zZXRDb2xvcihjb2xvci50b1JnYlN0cmluZygpKTtcbiAgICAgICAgICB9LFxuICAgICAgICAgIG1vdmUoY29sb3IpIHtcbiAgICAgICAgICAgIGhhbmRsZXIuc2V0Q29sb3IoY29sb3IudG9SZ2JTdHJpbmcoKSwgMCk7XG4gICAgICAgICAgfVxuICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICAgICAgLy8gSGFuZGxlcnMgYXJlIGNvbG9yIHN0b3BzXG4gICAgICAgIGdwLmFkZEhhbmRsZXIoMCwgICdyZ2IoMjU1LCAwLCAwKScpO1xuICAgICAgICBncC5hZGRIYW5kbGVyKDEwMCwgJ3JnYigwLCAwLCAyNTUpJyk7XG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidGFyZ2V0XCIpLnN0eWxlLmJhY2tncm91bmQgPSBncC5nZXRTYWZlVmFsdWUoKTtcblxuICAgICAgICBncC5zZXREaXJlY3Rpb24oJzkwZGVnJyk7XG4gICAgICAgICQoXCIjZGlyZWN0aW9uXCIpLnZhbCgnOTAnKTtcblxuICAgICAgICAvLyBEbyBzdHVmZiBvbiBjaGFuZ2Ugb2YgdGhlIGdyYWRpZW50XG4gICAgICAgIGdwLm9uKCdjaGFuZ2UnLCBjb21wbGV0ZSA9PiB7XG4gICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRhcmdldFwiKS5zdHlsZS5iYWNrZ3JvdW5kID0gZ3AuZ2V0U2FmZVZhbHVlKCk7XG4gICAgICAgICAgICB2YXIgZ3JhZD1ncC5nZXRWYWx1ZSgpO1xuICAgICAgICAgICAgdmFyIGNvbG9ydmFscz1ncC5nZXRDb2xvclZhbHVlKCk7XG5cbiAgICAgICAgICAgIHZhciBncmFkdHh0PWdwLmdldFZhbHVlKCk7XG4gICAgICAgICAgICAkKFwiI2dyYWRpZW50VHh0XCIpLnZhbChncmFkdHh0KTtcblxuICAgICAgICAgICAgdmFyIGhhbmRsZXJzPUpTT04uc3RyaW5naWZ5KGdwLmdldEhhbmRsZXJzKCkpO1xuICAgICAgICAgICAgJChcIiNoYW5kbGVyc1wiKS52YWwoaGFuZGxlcnMpO1xuXG4gICAgICAgICAgICB2YXIgZGlyZWN0aW9uPSQoXCIjZGlyZWN0aW9uXCIpLnZhbDtcbiAgICAgICAgICAgLy8gZ3Auc2V0RGlyZWN0aW9uKGRpcmVjdGlvbik7XG5cbiAgICAgICAgLyogIGNvbnNvbGUubG9nKGdwLmdldEhhbmRsZXJzKCkpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coaGFuZGxlcnMpOyAvL2pzb25cbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdjb2xvciB2YWwgPSAnK2dwLmdldENvbG9yVmFsdWUoKSApO1xuICAgICAgICAgICAgY29uc29sZS5sb2coJ3NhZmUgdmFsID0gJytncC5nZXRTYWZlVmFsdWUoKSApO1xuICAgICAgICAgICAgY29uc29sZS5sb2coJ3NpbXBsZSB2YWwgPSAnK2dwLmdldFZhbHVlKCkgKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdwcmVmaXhlZCB2YWwgPSAnK2dwLmdldFByZWZpeGVkVmFsdWVzKCkpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coZ3AuZ2V0SGFuZGxlcnMoKSk7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhoY29sb3JzKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGhwb3MpO1xuICAgICAgICAgICAgY29uc29sZS5sb2coY29sb3J2YWxzKTtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGRpcmVjdGlvbik7XG4gICAgICAgICAgICAvLyBncC5zZXREaXJlY3Rpb24oJzQ1ZGVnJyk7XG4gICAgICAgICovXG5cbiAgICAgICAgIH0pXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/gradientpicker.js\n");

/***/ })

}]);