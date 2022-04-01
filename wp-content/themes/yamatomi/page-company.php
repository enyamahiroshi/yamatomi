<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--separate-kv sec--separate-kv--company">
    <div class="inner-wide">
      <div class="separate-kv__content">
        <h2 class="separate-kv__content__heading"><span>MESSAGE</span>ごあいさつ</h2>
        <p class="separate-kv__content__text">山富産業は、創業以来コンクリートブロックの製造・販売を主力事業とし、社会の様々な環境に貢献できるものづくりを展開してまいりました。</p>
        <p class="separate-kv__content__text">その中で、私たちが常に大切に想い、描いてきたことは、豊かな環境や風景を未来につなげていくこと。社会環境、自然環境、経済環境など私たち人間を取り巻くあらゆる環境に対して、常に今以上を考え、実現していくことで、たくさんの「幸せな風景」をつくることが私たちの使命だと考えています。</p>
        <p class="separate-kv__content__sign">代表取締役　小山 航</p>
      </div>
      <div class="separate-kv__image"></div>
    </div>
  </section>

  <nav class="anchor-navi">
    <a href="#company-profile" class="button--anchor">会社概要</a>
    <a href="#company-history" class="button--anchor">会社沿革</a>
    <a href="#company-office" class="button--anchor">拠点</a>
  </nav>

  <section id="company-profile" class="sec sec--contents-block">
    <div class="inner-small">
			<h2 class="contents-title--medium">会社概要</h2>
			<table class="table-type1">
				<tr>
					<th>商号</th>
					<td>山富産業株式会社</td>
				</tr>
				<tr>
					<th>所在地</th>
					<td>
            本社／〒390-0831長野県松本市井川城1-2-9<br>
            電話／0263-25-0387（代）<br>
            URL : http://www.yamatomi.co.jp/<br>
            <a href="mailto:" class="icon-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/icon_mail2.svg" alt="E-Mail"></a>
          </td>
				</tr>
				<tr>
					<th>代表者</th>
					<td>代表取締役　小山 航</td>
				</tr>
				<tr>
					<th>設立</th>
					<td>昭和35年3月3日</td>
				</tr>
				<tr>
					<th>資本金</th>
					<td>3,500万円</td>
				</tr>
				<tr>
					<th>従業員数</th>
					<td>50名</td>
				</tr>
				<tr>
					<th>営業品目</th>
					<td>環境保全コンクリートブロック、景観ブロック、舗石ブロック等、製造、販売</td>
				</tr>
			</table>
    </div>
  </section>

  <section id="company-history" class="sec sec--contents-block">
    <div class="inner-small">
			<h2 class="contents-title--medium">会社沿革</h2>
      <?php // 昭和30年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">昭和30年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">昭和35年</td>
            <td class="cell-history-month">3月</td>
            <td class="cell-data">松本市錦町に山富産業有限会社設立<br>資本金30万円<br>代表取締役社長　小山富司就任</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和37年</td>
            <td class="cell-history-month">10月</td>
            <td class="cell-data">東筑摩郡明科町湖沢に明科工場開設</td>
          </tr>
        </tbody>
      </table>
      <?php // 昭和40年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">昭和40年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">昭和40年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">本社を松本市井川城（現在地）に移転</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">昭和41年</td>
            <td class="cell-history-month">6月</td>
            <td class="cell-data">松本市寿に松本工場開設</td>
          </tr>
          <tr>
            <td class="cell-history-month">8月</td>
            <td class="cell-data">明科工場を現在地に移転</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和42年</td>
            <td class="cell-history-month">11月</td>
            <td class="cell-data">山富産業株式会社に組織変更<br>資本金200万円<br>代表取締役社長　小山富司就任</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和43年</td>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">木曽郡日義村に木曽工場開設</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和45年</td>
            <td class="cell-history-month">3月</td>
            <td class="cell-data">明科工場内にスプリットン工場開設</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">昭和47年</td>
            <td class="cell-history-month">8月</td>
            <td class="cell-data">明科骨材工場開設</td>
          </tr>
          <tr>
            <td class="cell-history-month">12月</td>
            <td class="cell-data">上伊那郡宮田村に上伊那工場開設<br>スプリットン製造開始</td>
          <tr>
          <tr>
            <td class="cell-history-year">昭和48年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">生坂第1骨材工場開設</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和49年</td>
            <td class="cell-history-month">10月</td>
            <td class="cell-data">生坂第2骨材工場開設</td>
          </tr>
        </tbody>
      </table>
      <?php // 昭和50年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">昭和50年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">昭和53年</td>
            <td class="cell-history-month">8月</td>
            <td class="cell-data">ヘイベック販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-year">昭和58年</td>
            <td class="cell-history-month">6月</td>
            <td class="cell-data">明科工場　スプリットン工場全面改築</td>
          </tr>
        </tbody>
      </table>
      <?php // 昭和60年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">昭和60年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">昭和62年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">パワーホール製造販売開始</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">昭和63年</td>
            <td class="cell-history-month">1月</td>
            <td class="cell-data">マックストン販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">9月</td>
            <td class="cell-data">松本工場バッチャープラント新設</td>
          </tr>
        </tbody>
      </table>
      <?php // 平成元年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">平成元年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2" class="cell-history-year">平成元年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">山富ビル完成</td>
          </tr>
          <tr>
            <td class="cell-history-month">11月</td>
            <td class="cell-data">松本市笹賀に産廃最終処分場開設</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成2年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">上伊那工場　スプリットン製造工場新設</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成3年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">北佐久郡北御牧村に東信工場開設<br>スプリットンブロック製造開始</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成4年</td>
            <td class="cell-history-month">11月</td>
            <td class="cell-data">代表取締役社長　小山実就任</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">平成5年</td>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">明科工場　パワーホール製造設備増設</td>
          </tr>
          <tr>
            <td class="cell-history-month">10月</td>
            <td class="cell-data">長野市へ長野営業所開設<br>明科工場　スプリットン製造設備改良</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成6年</td>
            <td class="cell-history-month">2月</td>
            <td class="cell-data">上伊那工場にてパワーホール製造開始</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">平成9年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">Newスプリットン”軽井沢”販売開始<br>木曽工場閉鎖</td>
          </tr>
          <tr>
            <td class="cell-history-month">12月</td>
            <td class="cell-data">松本工場　ヘイベック製造ライン完成<br>スプリットン05 大型ブロック販売開始</td>
          </tr>
        </tbody>
      </table>
      <?php // 平成10年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">平成10年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">平成10年</td>
            <td class="cell-history-month">1月</td>
            <td class="cell-data">ポーラススプリットンブロック販売開始</td>
          </tr>
          <tr>
            <td rowspan="3" class="cell-history-year">平成11年</td>
            <td class="cell-history-month">3月</td>
            <td class="cell-data">産廃処分場　埋立満杯につき閉鎖</td>
          </tr>
          <tr>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">植栽コンクリート販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">9月</td>
            <td class="cell-data">ポラカブル販売開始</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">平成12年</td>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">フラワーストーンIL販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">9月</td>
            <td class="cell-data">ポーラススプリットン販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成13年</td>
            <td class="cell-history-month">9月</td>
            <td class="cell-data">グリーンクラスター販売開始</td>
          </tr>
          <tr>
            <td rowspan="3" class="cell-history-year">平成14年</td>
            <td class="cell-history-month">2月</td>
            <td class="cell-data">明科工場第一工場改築</td>
          </tr>
          <tr>
            <td class="cell-history-month">10月</td>
            <td class="cell-data">ビオフィルム販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">11月</td>
            <td class="cell-data">超透水ブロック“マーチ”販売開始</td>
          </tr>
          <tr>
            <td rowspan="4" class="cell-history-year">平成15年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">快適ブロック“ジューン”販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">松本工場閉鎖<br>東信工場閉鎖<br>長野営業所閉鎖</td>
          </tr>
          <tr>
            <td class="cell-history-month">6月</td>
            <td class="cell-data">アニーヴンポーラススプリットン、ア二－ヴンビオポーラススプリットン販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">8月</td>
            <td class="cell-data">明科工場ヘイベック投入ライン完成</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成18年</td>
            <td class="cell-history-month">9月</td>
            <td class="cell-data">生坂第1骨材工場閉鎖<br>生坂第2骨材工場閉鎖<br>上伊那工場　グリーンハーモニーBP（植生大型ポーラス張ブロック）製造マシン設置、販売開始</td>
          </tr>
        </tbody>
      </table>
      <?php // 平成20年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">平成20年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">平成20年</td>
            <td class="cell-history-month">6月</td>
            <td class="cell-data">ウラコンブロック 販売開始</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">平成21年</td>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">That's スプリットン 販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">10月</td>
            <td class="cell-data">スクラムスプリットン 販売開始</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">平成22年</td>
            <td class="cell-history-month">2月</td>
            <td class="cell-data">本社新社屋完成</td>
          </tr>
          <tr>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">上伊那工場 大型即脱製造マシン設置 即脱ヘイベック販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-year">平成26年</td>
            <td class="cell-history-month">5月</td>
            <td class="cell-data">小口止めスプリットンブロック 販売開始</td>
          </tr>
        </tbody>
      <?php // 令和元年代 ?>
			<table class="table-type2 table-type2--history">
        <thead>
          <tr>
            <th colspan="3" class="cell-headline">令和元年代</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cell-history-year">令和2年</td>
            <td class="cell-history-month">7月</td>
            <td class="cell-data">明科工場 ブロック製造設備入替</td>
          </tr>
          <tr>
            <td rowspan="2" class="cell-history-year">令和3年</td>
            <td class="cell-history-month">4月</td>
            <td class="cell-data">ヘイベック間知石DC（即時脱型）販売開始</td>
          </tr>
          <tr>
            <td class="cell-history-month">11月</td>
            <td class="cell-data">代表取締役社長　小山航就任</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="company-office" class="sec sec--contents-block">
    <div class="inner-small">
			<h2 class="contents-title--medium">拠点</h2>
			<div class="company-map">
        <div class="company-map__title">本社</div>
        <div class="company-map__include">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.5697394214253!2d137.9613675152737!3d36.22565158007096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d0ef52f5294a5%3A0x712f872c87c9f345!2z44CSMzkwLTA4MzEg6ZW36YeO55yM5p2-5pys5biC5LqV5bed5Z-O77yR5LiB55uu77yS4oiS77yZIOWxseWvjOeUo-alrQ!5e0!3m2!1sja!2sjp!4v1645644613722!5m2!1sja!2sjp" width="900" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="company-map__info">〒390-0831長野県松本市井川城1-2-9　<br>TEL.0263-25-0387（代）</div>
      </div>
			<div class="company-map">
        <div class="company-map__title">明科工場</div>
        <div class="company-map__include">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.7895971766907!2d137.9283643152777!3d36.365874980040225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d72053d3fe6ad%3A0x75169700a7c9a467!2z5bGx5a-M55Sj5qWtIOaYjuenkeW3peWgtA!5e0!3m2!1sja!2sjp!4v1645644724240!5m2!1sja!2sjp" width="900" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="company-map__info">〒399-7101 長野県安曇野市明科東川手371　<br>TEL.0263-62-2371</div>
      </div>
			<div class="company-map">
        <div class="company-map__title">明科七貴工場</div>
        <div class="company-map__include">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.023243542584!2d137.91956231527774!3d36.36021588004162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d6df7fe6386e3%3A0x9be180e8a5ee67f6!2z44CSMzk5LTcxMDQg6ZW36YeO55yM5a6J5puH6YeO5biC5piO56eR5LiD6LK077yW77yR77yR77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1645644782922!5m2!1sja!2sjp" width="900" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="company-map__info">〒399-7104 安曇野市明科七貴6112-1　<br>TEL.0263-62-6651</div>
      </div>
			<div class="company-map">
        <div class="company-map__title">上伊那工場</div>
        <div class="company-map__include">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.9320289363395!2d137.9507516152608!3d35.75247538017773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601cf2dd1686083b%3A0x389312bdc90eeb85!2z5bGx5a-M55Sj5qWt77yI5qCq77yJIOS4iuS8iumCo-W3peWgtA!5e0!3m2!1sja!2sjp!4v1645644834756!5m2!1sja!2sjp" width="900" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="company-map__info">〒399-4301 長野県上伊那郡宮田村大久保5450-207　<br>TEL.0265-85-2848</div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>