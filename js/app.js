

$('.nav-toggle').click(function(){
	$(this).toggleClass('active');
	$('.mobile-menu').toggleClass('active');
})

// Slider
function slider(sliderName, velocidade) {
	var sliderClass = '.' + sliderName,
			activeClass = 'active',
			rotate = setInterval(rotateSlide, velocidade);
	
	$(sliderClass + ' > :first').addClass(activeClass);

	$(sliderClass).hover(function(){
		clearInterval(rotate);
	}, function() {
		rotate = setInterval(rotateSlide, velocidade);
	});
	
	function rotateSlide() {
		var activeSlide = $(sliderClass + ' > .' + activeClass),
				nextSlide = activeSlide.next();

		if(nextSlide.length == 0) {
			nextSlide = $(sliderClass + ' > :first');
		}
		activeSlide.removeClass(activeClass);
		nextSlide.addClass(activeClass);
	} 
}

slider('depoimentos', 6000);

// Servicos

var classActive = 'active';

$('.lista-servicos a').first().addClass(classActive);
$('.item').first().addClass(classActive);

$('.lista-servicos a').click (function(e){
	e.preventDefault();
	var itemId = $(this).attr('href');

	$('.lista-servicos a, .item').removeClass(classActive);
	$(this).addClass(classActive);
	$(itemId).addClass(classActive);
});

