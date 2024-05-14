
// course section 



$('.unit-item-title-1').click(function(){
    $('.unit-item-1').slideToggle(500)
    $('.unit-name-1').toggleClass('active')
    $('.open-icon-1').toggleClass('close-icon')
})

$('.unit-item-title-2').click(function(){
    $('.unit-item-2').slideToggle(500)
    $('.unit-name-2').toggleClass('active')
    $('.open-icon-2').toggleClass('close-icon')
})
$('.unit-item-title-3').click(function(){
    $('.unit-item-3').slideToggle(500)
    $('.unit-name-3').toggleClass('active')
    $('.open-icon-3').toggleClass('close-icon')
})
$('.unit-item-title-4').click(function(){
    $('.unit-item-4').slideToggle(500)
    $('.unit-name-4').toggleClass('active')
    $('.open-icon-4').toggleClass('close-icon')
})
$('.unit-item-title-5').click(function(){
    $('.unit-item-5').slideToggle(500)
    $('.unit-name-5').toggleClass('active')
    $('.open-icon-5').toggleClass('close-icon')
})
$('.unit-item-title-6').click(function(){
    $('.unit-item-6').slideToggle(500)
    $('.unit-name-6').toggleClass('active')
    $('.open-icon-6').toggleClass('close-icon')
})



// faq section 

$('.faq-item-title-1').click(function(){
    $('.faq-item-1').slideToggle(500)
    $('.question-1').toggleClass('active')
    $('.open-icon-1').toggleClass('close-icon')
})
$('.faq-item-title-2').click(function(){
    $('.faq-item-2').slideToggle(500)
    $('.question-2').toggleClass('active')
    $('.open-icon-2').toggleClass('close-icon')
})
$('.faq-item-title-3').click(function(){
    $('.faq-item-3').slideToggle(500)
    $('.question-3').toggleClass('active')
    $('.open-icon-3').toggleClass('close-icon')
})
$('.faq-item-title-4').click(function(){
    $('.faq-item-4').slideToggle(500)
    $('.question-4').toggleClass('active')
    $('.open-icon-4').toggleClass('close-icon')
    
})

$('.faq-item-title-5').click(function(){
    $('.faq-item-5').slideToggle(500)
    $('.question-5').toggleClass('active')
    $('.open-icon-5').toggleClass('close-icon')
    
})

// slick-slider 

$(document).ready(function(){

    $('.client-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
    
        ]
      });

})

window.addEventListener('scroll',()=>{
    if(window.pageYOffset > 600){
        $('#back-to-top-btn').addClass('active');
    }else{
        $('#back-to-top-btn').removeClass('active');
    }
} );
      


