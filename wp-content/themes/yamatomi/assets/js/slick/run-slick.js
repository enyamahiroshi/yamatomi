(function($) {

  const $slide = $(".slider")
    /* スライドカウンター
    .on("init", function (event, slick) {
      $(this).append('<div class="slide_count"><span class="slide_count__now"></span> / <span class="slide_count__total"></span></div>');
      $(".slide_count__now").text(slick.currentSlide + 1); // 現在のスライド番号(+1が無いと0からスタートしてしまう)
      $(".slide_count__total").text(slick.slideCount); // スライドの総数
    })
     */
    .slick({
      speed: 1000,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      // adaptiveHeight: true, //trueの場合、高さ可変。faleseの場合、高さ固定[default:false]
      centerMode: true,
      centerPadding: "17.7%",
      focusOnSelect: true,
      dots: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            centerMode: false,
          },
        },
      ],
    })
    /* スライドカウンター
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      $(".slide_count").text(nextSlide + 1); // 現在のスライド番号の次のスライドになったら番号を+1
    });
     */

})(jQuery);