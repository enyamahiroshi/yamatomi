(function($) {

  const $slide = $(".slider1")
    .slick({
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      // adaptiveHeight: true, //trueの場合、高さ可変。faleseの場合、高さ固定[default:false]
      centerMode: true,
      centerPadding: "17.7%",
      focusOnSelect: true,
      dots: false,
      pauseOnFocus: true,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            centerMode: false,
          },
        },
      ],
    })

  const $slide2 = $(".slider2")
    .slick({
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      // adaptiveHeight: true, //trueの場合、高さ可変。faleseの場合、高さ固定[default:false]
      centerMode: false,
      focusOnSelect: false,
      dots: true,
      pauseOnFocus: true,
      pauseOnHover: true,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            centerMode: false,
          },
        },
      ],
    })

})(jQuery);