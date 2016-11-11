/**
 * Created by Konstantin on 2016-10-23.
 */

//ECMAScript 6 used

$(function () {
    // Constants =============================================================
    const SLIDE_SHIFT_TIME = 700;
    const SLIDE_WIDTH = $(document).width();

    // Variables =============================================================
    var images = [
        {src: 'images/slider/slider-1.png', id: 0},
        {src: 'images/slider/slider-1.png', id: 1},
        {src: 'images/slider/slider-1.png', id: 2}
    ];
    var counter = 0;
    var sliderWidth = SLIDE_WIDTH * images.length;


    // Functions =============================================================
    function appendImage(image) {
        $('.slider')
            .append($("<div class='slide slide-" + image.id + "'></div>")
            .append($("<img />").attr("src", image.src)));
    }
    function appendImageById(id) {
        $('.slide-' + id).remove();
        $('.slider').append("<div class='slide slide-" + id + "'></div>");
        var image = findImageById(id);
        $('.slide-' + id).append("<img id='" + id + "' src='" + image.src + "'/>");
    }
    function setNumerationItems(image) {
        $('.main-slider .slides-numeration')
            .append($("<div class='slides-numeration-item'></div>")
            .addClass("slide-item-" + image.id));
    }
    function makeNumerationItemActive() {
        $('.main-slider .slide-item-' + counter).addClass("active");
    }
    function makeNumerationItemNotActive(counter) {
        $('.main-slider .slide-item-' + counter).removeClass("active");
    }

    // Event listeners =======================================================
    $('.main-slider .button-next').click(function () {
        if(counter == images.length - 1) {
            $('.slider').animate({left: 0},SLIDE_SHIFT_TIME - 400);
            makeNumerationItemNotActive(counter);
            counter = 0;
        } else {
            $('.slider').animate({left: '-=' + SLIDE_WIDTH},SLIDE_SHIFT_TIME);
            makeNumerationItemNotActive(counter);
            counter++;
        }
        makeNumerationItemActive();
    });

    $('.main-slider .button-previous').click(function () {
        if(counter == 0) {
            let shift = SLIDE_WIDTH * (images.length - 1);
            $('.slider').animate({left: -shift}, SLIDE_SHIFT_TIME - 400);
            makeNumerationItemNotActive(counter);
            counter = images.length - 1;
        } else {
            $('.slider').animate({left: '+=' + SLIDE_WIDTH}, SLIDE_SHIFT_TIME);
            makeNumerationItemNotActive(counter);
            counter--;
        }
        makeNumerationItemActive();
    });


    // DOM and CSS manipulation ======================================================
    $('.slider').css('width', sliderWidth);

    for(let image of images) {
        appendImage(image);
        setNumerationItems(image);
    }
    makeNumerationItemActive();

});
