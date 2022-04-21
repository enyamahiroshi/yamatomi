(function ($) {

/* --------------------------------------------------
  メニュー開閉
-------------------------------------------------- */
const body = $('body');
const menuWrap = $('.global-menu');
const header = $('.site-header');
const BtnOpen = $('.js_tgl_menu');
const classname = 'is__open';
const NaviLink = $('.menu a[href]');
BtnOpen.on('tap click', function () {
  if (window.matchMedia( "(max-width: 1023px)" ).matches) {
    if (body.hasClass(classname)) {
      body.removeClass(classname);
      header.removeClass(classname);
      menuWrap.removeClass(classname);
      BtnOpen.removeClass(classname);
    } else {
      body.addClass(classname);
      header.addClass(classname);
      menuWrap.addClass(classname);
      BtnOpen.addClass(classname);
    }
  }
});
NaviLink.on('tap click', function () {
  if (window.matchMedia( "(max-width: 1023px)" ).matches) {
    if (body.hasClass(classname)) {
      body.removeClass(classname);
      header.removeClass(classname);
      menuWrap.removeClass(classname);
      BtnOpen.removeClass(classname);
    } else {
      body.addClass(classname);
      header.addClass(classname);
      menuWrap.addClass(classname);
      BtnOpen.addClass(classname);
    }
  }
});

/* --------------------------------------------------
  open/close
-------------------------------------------------- */
const $trg = $('.faq_a');
const $tgl = $('.faq_q');
const $_isactive = 'is_active';
$trg.css("display","none");
$tgl.on('tap click', function () {
  $(this).find(".tgl_closs").toggleClass($_isactive);
  $(this).next($trg).slideToggle("fast");
});

/* --------------------------------------------------
  scroll action : object fadein
-------------------------------------------------- */
const fadeInAct = function( entries, observer ) {
  for( let i = 0; i < entries.length; i++ ) {
    if( entries[i].isIntersecting ) {
      entries[i].target.style.cssText = 'visibility: visible; opacity: 1; transform: translateY(0); transition: .6s ease';
    }
  }
}
const options = {
  // root: $('.root'),
  rootMargin: '-25%',
};
const fadeObj = $('.site_main .sec');
const fadeinAct = new IntersectionObserver( fadeInAct, options );

for( let i = 0; i < fadeObj.length; i++ ) {
  fadeObj[i].style.cssText = 'visivility: hidden; opacity: 0; transition: .15s ease; transform: translateY(30px);'
  fadeinAct.observe( fadeObj[i] );
}


/* --------------------------------------------------
  Anchor Link
-------------------------------------------------- */
const $header = $('.site-header');
const $anchor = 'a[href^="#"]:not(".js-not-scroll")';

$(function(){
  const urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      scrollToAnker(urlHash) ;
    }, 200);
  }
  $($anchor).click(function() {
    let href= $(this).attr("href");
    let hash = href == "#" || href == "" ? 'html' : href;
    scrollToAnker(hash);
    return false;
  });
  function scrollToAnker(hash) {
    let target = $(hash);
    let headerHeight = $header.height();
    let position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500, 'swing');
  }
});


/* --------------------------------------------------
  page top
-------------------------------------------------- */
const pagetop = $('.page-top');
const adclass2 = 'is-active';
const scrollY2 = 500;
$(window).scroll(function() {
  if ($(window).scrollTop() > scrollY2) {
    pagetop.addClass(adclass2);
  } else {
    pagetop.removeClass(adclass2);
  }
});

/* --------------------------------------------------
  magnific popup
-------------------------------------------------- */
$('.js-popup').magnificPopup({
  type: 'inline',
  preloader: false,
  alignTop: false,
  fixedContentPos: true,
  closeBtnInside: true,
  closeMarkup: '<button title="閉じる" type="button" class="button-mfp-close mfp-close"><span class="close-button-line"></span></button>',
  autoFocusLast: true,
});

})(jQuery);