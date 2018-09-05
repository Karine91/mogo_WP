$(function(){

    function mySlider(container_slider) {
    
    var slider =$(container_slider);
    var image_slide =slider.find('.pic');
    var sliderItems = slider.find('ul>li');
    var total = sliderItems.length;
    var current = 0;
    var prev = slider.find('.slider-prev');
    var next = slider.find('.slider-next');
    var duration = 5000;
    var interval;
    var direction=1;

    var prevSlide = 0;


    sliderItems.eq(current).show();

    next.click(function(){
        current++;
        if(current == total) {
            current = 0;
        }
        changeSlide();
    });
    prev.click(function(){
        current--;
        if(current == -1) {
            current = total-1;
        }
        changeSlide();
    });


    function changeSlide(){
        var slideToHide = sliderItems.eq(prevSlide);
        var slideToShow =sliderItems.eq(current);
        if (image_slide){
            var imgToHide = image_slide.eq(prevSlide);
            var imgToShow =image_slide.eq(current);
            imgToShow.fadeIn(800);
            imgToHide.fadeOut(800);
        }
        var direction=1;

        if(current<prevSlide){
            direction=-1;
        }
        if(current==0 && prevSlide==total-1){
            direction=1;
        }
        if(current==total-1 && prevSlide==0){
        direction=-1;
    }
        slideToShow.css({
            'left': 100*direction + '%',
            'zIndex': 100,
            'display': 'block'
        });
        slideToShow.stop().animate({
            left: 0
        },800);
        slideToHide.stop().animate({
            left: -100*direction + '%'

        },800);
        slideToHide.css({
            'left': 0,
            'zIndex': 0,
            'display': 'none'
        });


        prevSlide = current;

        clearInterval(interval);
        interval = setInterval(autoPlay, duration);
    }

    function autoPlay(){
        next.click();
    }
    interval = setInterval(autoPlay, duration);

}

    mySlider('.section-comment #slider1');
    mySlider('.testimonials #slider2');
});