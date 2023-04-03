$(document).ready(function () {
    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        arrows: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }],
    });
    $('.sliderr').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        dots: true,
        infinite: true,
        arrows: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }],
    });
    $('.slider-prev').click(function () {
        $('.slider').slick('slickPrev');
    });
    $('.slider-next').click(function () {
        $('.slider').slick('slickNext');
    });
    /****************product images preview ******************/
    $(".carousel-wrapper a").click(function (event) {
        event.preventDefault();
        // console.log($(".carousel-wrapper a"));
        $("#main-image-cadre").attr("src", $(this).children("img").attr("src"));
        console.log($(this).children("img").attr("src"));
    });


    /*****************handle dropdown menu and side dropdown menu *******************/
    $(".title").click(function () {
        console.log("clicked");
        $(".dropdown_menu").toggleClass("active");
    });

    $(".dropdown_item").hover(function () {
        var $dropdown = $(this).children('.side_dropdown');
        $(this).children().find('.side_dropdown').removeClass('sideActive');
        $(this).siblings().find('.side_dropdown').removeClass('sideActive');
        $dropdown.toggleClass("sideActive");
    });

    $(".side_dropdown").hover(function (event) {
        event.stopPropagation();
    });
    /*******************subcategory for offcanvas********************* */
    $(".chev").click(function () {
        console.log("clicked");
        var $parent = $(this).parent();
        var $dropdown = $parent.children('.continer').children('.row').children('.cateItems');
        $dropdown.toggleClass("catActive");
        $(this).toggleClass("rotate");
        if (!$(this).hasClass("rotate")) {
            $parent.find(".cateItems.catActive").removeClass("catActive");
            $parent.find(".chev.rotate").removeClass("rotate");
        }
    });



});

function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("mySidenav").style.zIndex = "999";
    // document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";

    document.body.style.backgroundColor = "white";
}
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})

