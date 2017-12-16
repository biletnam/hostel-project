// add random color to block div
$(document).ready(function() {
    $(".block").each(function() {
        var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
         $(this).css("background-color", hue);
    });


// hide div until clicked
   $("#show1").click(function(){
       $("#content1").css("display","block");
       $("#content2").css("display","none");
   });

   $("#show2").click(function(){
       $("#content1").css("display","none");
       $("#content2").css("display","block");
   });

// jquery tabs  
 $( function() {                            
    $( "#detail" ).tabs();
  } );
});


 //loader
{
var myvar;
function loader(){
    myvar=setTimeout(showPage, 3000);
    }
function showPage(){
    document.getElementById("loader").style.display="none";
    document.getElementById("cont").style.display="block";
} }

//draggable
  $( function() {
    $( "#draggable" ).draggable();
  } );
$( function() {
    $( "#draggable2" ).draggable();
  } );
$( function() {
    $( "#draggable3" ).draggable();
  } );
$( function() {
    $( "#draggable4" ).draggable();
  } );
$( function() {
    $( "#draggable5" ).draggable();
  } );
$( function() {
    $( "#draggable6" ).draggable();
  } );
$( function() {
    $( "#draggable7" ).draggable();
  } );
$( function() {
    $( "#draggable8" ).draggable();
  } );

$( function() {
    $( "#draggable9" ).draggable();
  } );

