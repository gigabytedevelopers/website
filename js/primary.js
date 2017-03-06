var res = {
	loader: $('<div />', {class: 'loader'}),
	container: $('.container')
}

$('.load').on('click', function() {
   $.ajax({
   	url:'ajax/delay.php',
   	beforeSend: function() {
   		res.container.append(res.loader);
   	},
   	success: function(data) {
      res.container.html(data);
   	  res.container.find(res.loader).remove();

       }
   });
});


//back to top script 
var amountScrolled = 2134;

$(window).scroll(function() {
   if ( $(window).scrollTop() > amountScrolled ) {
      $('#back-top').slideUp('slow');
   } else {
      $('#back-top').fadeOut('slow');
   }
});

$('#back-top').click(function() {
   $('html, body').animate({
      scrollTop: 0
   }, 700);
   return false;
});