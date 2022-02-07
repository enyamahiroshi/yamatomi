(function ($) {
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