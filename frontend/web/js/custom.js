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
});
const dropdownToggles = document.querySelectorAll('.dropdown > a');

dropdownToggles.forEach(toggle => {
  toggle.addEventListener('click', (event) => {
    event.preventDefault();
    toggle.parentNode.classList.toggle('active');
  });
});
