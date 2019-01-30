// JavaScript Document
// Created by Jake Ward

var $txtElement = $("p"); // Can be extended, ex. $("div, p, span.someClass")

// Storing the original size in a data attribute so size can be reset
$txtElement.each( function(){
  var $fontSize = $(this);
  $fontSize.data("orig-size", $fontSize.css("font-size") );
});

$("#btn-increase").click(function(){ //when the button is press increase the font size by 1
  changeFontSize(1);
})

$("#btn-decrease").click(function(){ //when the button is press decrease the font size by 1
  changeFontSize(-1);
})

$("#btn-orig").click(function(){ //when the button is press set to orginal size
  $txtElement.each( function(){
        var $fontSize = $(this);
        $fontSize.css( "font-size" , $fontSize.data("orig-size") );
   });
})

function changeFontSize(direction){
    $txtElement.each( function(){
        var $fontSize = $(this);
        $fontSize.css( "font-size" , parseInt($fontSize.css("font-size"))+direction );
    });
}