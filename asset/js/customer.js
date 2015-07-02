// JavaScript Document


// smooth scroll
$(function(){
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});


//smart rollover
$(function() {
	var nav = $('.overimg');
	nav.hover(
		function(){
			$(this).fadeTo(200,0.5);
		},
		function () {
			$(this).fadeTo(200,1);
		}
	);
});



   	$(document).ready(function () {
       $('.incountry').click(function () {
           $('.incountry-list').toggleClass('hidden-xs');
           $('.incountry b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
           });
           $('.outcountry').click(function () {
           $('.outcountry-list').toggleClass('hidden-xs');
           $('.outcountry b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
           });
    //home slide 
	$('.flexslider').flexslider({
    	animation: "fade",
  			});
		});
   	//Tour details menu tab
   	$('#tourist_detail a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
});
