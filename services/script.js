

$('#contact').click(function() { 

	$('html, body').animate({

	  scrollTop:$('.footer').offset().top
	  
	}, 500);

  });

  let pElements = $('p.item');
pElements.eq(0).css('color','red')
pElements.eq(pElements.lenght-1).css('color','red')
pElements.each(function(index){
    $(this).html('<span>' + $(this).html + '</span>'); 
});

let sliderEl = $('.slider');
let sliderItems = sliderEl.find('.slider-item');
let indexShowSlide = 0;
sliderEl.click(function(){
    if( indexShowSlide < sliderItems.length - 1 ){
        sliderItems.eq(indexShowSlide).css('display', 'none');
        indexShowSlide = indexShowSlide + 1;
        sliderItems.eq(indexShowSlide).css('display', 'flex');
    }else{
        sliderItems.eq(indexShowSlide).css('display', 'none');
        indexShowSlide = 0;
        sliderItems.eq(indexShowSlide).css('display', 'flex');
    }
});
setInterval(function(){
    sliderEl.click();
},3000);






