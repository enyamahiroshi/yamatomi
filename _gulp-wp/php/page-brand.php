<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--brand-kv">
    <div class="inner-medium">
      <div class="brand-kv__content">
        <em class="brand-kv__content__catchcopy">ASSIMILATE with NATURE</em>
        <strong class="brand-kv__content__title">草木を共に育て、その地の優しさを表現する。<br>そこには、自然と同化する美しさがあります。</strong>
        <p class="brand-kv__content__text">人と自然、人と経済、人と他の生物の関係。それら全てが山富産業のテーマです。私たちは、人間社会におけるあらゆる「環境」を考えよりよい環境構築のために必要な機能を持つ製品を開発します。</p>
      </div>
      <figure class="brand-kv__image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/img_brand.png" alt="環境保全機能（生体機能） 景観機能 構造機能" width="834" height="780">
      </figure>
    </div>
  </section>

  <section class="sec sec--brand-sdgs">
    <div class="inner-medium">
      <div class="sdgs-text">
        <h2>SDGsへ貢献する製品へ</h2>
        <p>テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。</p>
      </div>
      <div class="sdgs-image">
        <figure class="img-sdgs">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/img_sdgs.png" alt="SDGsマーク" width="824" height="152">
        </figure>
        <p>山富産業はSDGsに配慮した取り組みを展開しています。</p>
      </div>
    </div>
  </section>

  <section class="sec sec--separate-block sec--separate-block--ecology">
    <div class="inner-wide">
      <div class="separate-block-content">
        <div class="separate-block-content__head">
          <h2 class="separate-block-content__head__title"><span>ECOLOGY</span>環境保全機能（生体機能）</h2>
          <strong class="separate-block-content__head__catchcopy">自然に近づき溶け込む。生物生息の場となるブロック。</strong>
        </div>
        <p class="separate-block-content__text">
          土や水があり、花や昆虫が生きている。十分な機能を果たしつつ、人と自然が共存するための発想、時と共に自然を育み人と他の生物が共に生きるための発想を具現化しました。<br>生態機能製品とは、自然の景観をつくるにとどまらずその地に生息する様々な生物の保全を考え、人と他の生きものが共存することを目的に開発された製品群です。構造、カタチはコンクリートブロックなのですが、生物生息の場となることを意図して設計された特殊構造を持っています。
        </p>
        <nav class="button-wrap">
          <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/environmental-conservation-concrete-block/" class="button button__base">環境保全コンクリートブロック</a>
        </nav>
      </div>
      <div class="separate-block-image"></div>
    </div>
  </section>

  <section class="sec sec--separate-block sec--separate-block--environment">
    <div class="inner-wide">
      <div class="separate-block-content">
        <div class="separate-block-content__head">
          <h2 class="separate-block-content__head__title"><span>ENVIRONMENT</span>景観機能</h2>
          <strong class="separate-block-content__head__catchcopy">その地に根ざす、自然の色と形を表現するブロック。</strong>
        </div>
        <p class="separate-block-content__text">
        コンクリートブロックでありながらその風合いは自然のままに。自然界に存在する色、カタチに習い、違和感なく景観を演出しながら必要な機能を満たします。<br>山富産業の景観機能製品は、色、カタチを自然界から学び、人の目と心に優しい風景を構築します。施工直後から周囲の景観に溶け込み人の感性に訴えるコンクリートブロックです。
        </p>
        <nav class="button-wrap">
          <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/landscape-function-concrete-block/" class="button button__base">景観機能コンクリートブロック</a>
        </nav>
      </div>
      <div class="separate-block-image"></div>
    </div>
  </section>

  <section class="sec sec--separate-block sec--separate-block--structure">
    <div class="inner-wide">
      <div class="separate-block-content">
        <div class="separate-block-content__head">
          <h2 class="separate-block-content__head__title"><span>STRUCTURE</span>構造機能</h2>
          <strong class="separate-block-content__head__catchcopy">安産性、経済性、施工性を実現するブロック。</strong>
        </div>
        <p class="separate-block-content__text">
        確かな基本構造により、安全性と耐久性、そして施工効率を追求しコストダウンを図ります。経済環境と施工環境に対して今何ができるかを考え、開発力と技術力で提案します。<br>山富産業の考える構造機能は、安全性、経済性と施工性と耐久性です。コンクリートブロックは強度と確かな施工が求められ、それは施工後数十年という年月に渡り維持されるものです。山富産業は、コストパフォーマンスは性能であり一つの機能であると考え、施工性、作業性の良さ、生産性の向上にアイデアを注ぎます。
        </p>
        <nav class="button-wrap">
          <a href="<?php echo esc_url( home_url() ); ?>/product/product-category/structural-unction-concrete-block/" class="button button__base">構造機能コンクリートブロック</a>
        </nav>
      </div>
      <div class="separate-block-image"></div>
    </div>
  </section>

<?php get_footer(); ?>