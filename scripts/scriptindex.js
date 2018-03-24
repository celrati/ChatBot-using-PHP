$('.colmain').hide();
$('.colmain').show(1000);

var rotation = 0;

jQuery.fn.rotate = function(degrees) {
    $(this).css({'transform' : 'rotate('+ degrees +'deg)'});
    return $(this);
};



  	$(".colmain").rotate(15);
  	


$(".col1").mouseover(function(){
	$(".col1").rotate(0);
});
$(".col2").mouseover(function(){
	$(".col2").rotate(0);
});
$(".col1").mouseout(function(){
	$(".col1").rotate(15);
});
$(".col2").mouseout(function(){
	$(".col2").rotate(15);
});
