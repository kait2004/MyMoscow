

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




$('.buyticket').click(function(){ 
    var popup = $('.your-question-popup');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup').fadeOut(500); 
            }
        });
    });

    return false;
});

$('.buyticket').click(function(){ 
    var popup = $('.your-question-popup');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup').fadeOut(500); 
            }
        });
    });

    return false;
});


  

$('.pay').click(function(){ 
    var popup = $('.your-question-popup-buy');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content-buy'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup-buy').fadeOut(500); 
            }
        });
    });

    return false;
});

$('.pay').click(function(){ 
    var popup = $('.your-question-popup-buy');
    popup.fadeIn(500);

    jQuery(function($){
        $(document).mouseup(function (e){ 
            var div = $('.your-question-popup-content-buy'); 
            if (!div.is(e.target) 
                && div.has(e.target).length === 0) { 
                $('.your-question-popup-buy').fadeOut(500); 
            }
        });
    });

    return false;
});

function calcSum() {
    const
      price = $('[name="variant"] option:checked').data('price').replace(',', '.'),
      amount = $('[name="amount"]').val();
  
    $('.total_price').text((price * amount).toFixed(2).replace('.', ','));
  }
  
  
  $('[name="variant"]').on('change', calcSum);
  
  $('[data-change]').click(function() {
    const
      change = +$(this).data('change'),
      $amount = $('[name="amount"]');
  
    $amount.val(Math.max(1, +$amount.val() + change));
    calcSum();
  });