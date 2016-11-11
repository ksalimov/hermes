/**
 * Created by Konstantin on 2016-10-26.
 */
//Variables =============================================================
var menuItemIndex;
var pickedMenuItem;

//Functions =============================================================

//Ads label (for ex.: "new", "sale") to product.
function addLabelClassToProductContainer(product) {
    let label = product.find('.product-image-label');
    let productStatus = label.html().toLowerCase();
    if(productStatus) {
        product.addClass(productStatus);
    } else {
        label.css('opacity', '0');
    }
}

//Toggles authorized and not authorized views
function changeHeaderSigningView(authorized, nonAuthorized) {
    $('.header-signing.authorized').css('display', authorized);
    $('.header-signing.not-authorized').css('display', nonAuthorized);
}

// Event listeners =======================================================
// Event on log out link click
/*$('.header-signing.authorized').on('click', 'a', function () {
    $.post('http://localhost/components/requestHandling.php', {'controller': 'user', 'action': 'logout'}, function (response) {
        if(response) {
            changeHeaderSigningView('none', 'inline');
        }
    });
});*/


//On mouse hover on any product shows "quick view" label and "ADD TO CART" link.
//On mouse live hides these elements.
$('.product-container .product-image').each(function () {
    var productContainerElement = $(this).parents('.product-container');
    var quickViewElement = productContainerElement.find('.product-quick-view');
    var hrElement = productContainerElement.find('hr');
    var cartWrapperElement = productContainerElement.find('.product-add-to-cart-wrapper');
    var cartElement = cartWrapperElement.find('.product-add-to-cart');

    $(this).hover(
        function () {
            quickViewElement.stop().animate({'opacity': 1}, 500);
            hrElement.stop().animate({'opacity': 1}, 500);
            cartWrapperElement.css('display', 'block');
            cartElement.stop().animate({'opacity': 1}, 500);
        }
    ).unbind('mouseleave');
    $(productContainerElement).hover(
        function () {
            quickViewElement.stop().animate({'opacity': 0}, 500);
            hrElement.stop().animate({'opacity': 0}, 500);
            cartElement.stop().animate({'opacity': 0}, 500, function () {
                cartWrapperElement.css('display', 'none');
            });
        }
    ).unbind('mouseenter');
});

//On click changes color of main-content-menu item and makes it not active.
$('.main-content-menu').on('click', 'a', function () {
    if(pickedMenuItem) {
        let index = menuItemIndex + 1;
        let element = $('.main-content-menu li:nth-child(' + index + ')').find('span');
        element.replaceWith(pickedMenuItem);
    }
    pickedMenuItem = $(this);
    menuItemIndex = pickedMenuItem.parents('li').index();
    $(this).parents('li').addClass('active').siblings().removeClass('active');
    $(this).replaceWith('<span>' + $(this).html() + '</span>');
});

//DOM and CSS manipulation ==============================================
// changeHeaderSigningView('none', 'none');
/*$.post('http://localhost/components/requestHandling.php', {'controller': 'user', 'action': 'checkLogged'}, function (response) {
    if(response) {
        changeHeaderSigningView('inline', 'none');
    } else {
        changeHeaderSigningView('none', 'inline');
    }
});*/

$(document).ready(function () {
    var numberOfProducts = $('.main-content-products .product-container').length;

    for(let i = 0; i < numberOfProducts; i++) {
        let product = $('.product-container.product-' + i);
        addLabelClassToProductContainer(product);
    }
});
