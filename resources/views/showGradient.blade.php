@extends('layouts.app')
@section('content')
<div class="container">

     <div id="target"></div>
     <div class="container row">
     <a class="btn btn-link" href="/">&laquo; Back</a>
     <div id="gradcss">
    {{$swatch->gradient}}</div>
    <button class=" btn btn-light clickselect">Click to select CSS code !</button>



</div>



<script>
function selectText(node) {
    node = document.getElementById(node);

    if (document.body.createTextRange) {
        const range = document.body.createTextRange();
        range.moveToElementText(node);
        range.select();
    } else if (window.getSelection) {
        const selection = window.getSelection();
        const range = document.createRange();
        range.selectNodeContents(node);
        selection.removeAllRanges();
        selection.addRange(range);
    } else {
        console.warn("Could not select text in node: Unsupported browser.");
    }
}

const clickable = document.querySelector('.clickselect');
clickable.addEventListener('click', () => selectText('gradcss'));
 </script>
<style>
#target{
     margin:1em
     border: 1px;
 width:auto;
      height:480px;
     background-image: {{$swatch->gradient}} ;
 }

 </style>

@endsection
