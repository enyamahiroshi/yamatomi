(function ($) {
  /* --------------------------------------------------
    スクロールで処理
  -------------------------------------------------- */
  const $headNav = $('.site_header');
  const $scrollY = $('#concept').offset().top; // scroll量
  const $aadclass = 'is__fixed'; // add css class
  $(window).on('load scroll', function() {
    if ($(this).scrollTop() > $scrollY && $headNav.hasClass($aadclass) == false) {
      $headNav.addClass($aadclass);
    } else if ($(this).scrollTop() < $scrollY && $headNav.hasClass($aadclass) == true) {
      $headNav.removeClass($aadclass);
    }
  });

  /* --------------------------------------------------
    メニュー開閉
  -------------------------------------------------- */
  const body = $('body');
  const menuWrap = $('.global_menu');
  const header = $('.site_header');
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

})(jQuery);