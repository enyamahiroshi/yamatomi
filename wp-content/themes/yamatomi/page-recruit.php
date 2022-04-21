<?php get_header(); ?>

<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
  $strUp = strtoupper($slug);
?>
  <header class="page-header">
    <h1 class="page-header__title"><span><?php echo $strUp; ?></span><?php echo the_title(); ?></h1>
  </header>

  <section class="sec sec--separate-kv sec--separate-kv--recruit">
    <div class="inner-wide">
      <div class="separate-kv__content">
        <strong class="separate-kv__content__title">「たくさんのしあわせな環境をつくる」素敵なお仕事です。</strong>
        <p class="separate-kv__content__text">山富産業では、1960年の創業以来、地域の自然環境やインフラ環境に貢献するコンクリートブロックを開発・設計・製造するメーカーです。いつでも大切に考えてきたのは、人と自然、人と経済、人と他の生物の関係。常に、独創的なアイデア満載の製品を開発したくさんの風景をつくりだしてきました。自分が関わった製品が地域らしい風景の一部となる。そんなやりがいの持てる素敵な仕事です。</p>
      </div>
      <div class="separate-kv__image"></div>
    </div>
  </section>

  <div class="kv-sub">
    <figure class="kv-sub__image">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/img_recruit_mv02.jpg" alt="" width="960" height="400">
    </figure>
    <figure class="kv-sub__image">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/img_recruit_mv03.jpg" alt="" width="960" height="400">
    </figure>
  </div>

  <section id="company-profile" class="sec sec--contents-block">
    <div class="inner-small">
			<h2 class="contents-title--medium">募集要項</h2>
			<table class="table-type1">
				<tr>
					<th>雇用形態</th>
					<td>正社員</td>
				</tr>
				<tr>
					<th>募集職種</th>
					<td></td>
				</tr>
				<tr>
					<th>勤務時間</th>
					<td>8：00～17：00（休憩90分）<br>※原則は定時退社ができます。<br>残業はあっても多くて日に1時間くらいで、月平均10時間以下です。</td>
				</tr>
				<tr>
					<th>勤務地</th>
					<td>
            <p>「上伊那工場」「明科工場」「明科七貴工場」の各工場<br>※いずれも転勤なし！ マイカー通勤OKです。</p>
            <p>【上伊那工場】<br>長野県上伊那郡宮田村大久保5450‐207</p>
            <p>【明科工場】<br>長野県安曇野市明科東川手371</p>
            <p>【明科七貴工場】<br>長野県安曇野市明科七貴6112-2<br>マイナビ転職の勤務地区分では…</p>
            <p>長野県</p>
          </td>
				</tr>
				<tr>
					<th>設立</th>
					<td>月給19万～25万円（一律手当含む） ＋ 各種手当 ＋ 残業代<br>※年齢、経験、能力等を考慮の上、優遇します。<br>試用期間が1～3ヶ月あり、その間は日給8,000円です。<br>初年度の年収 <br>250万円～350万円</td>
				</tr>
				<tr>
					<th>資本金</th>
					<td>
            <ul class="list-dot">
              <li>昇給／年1回</li>
              <li>賞与／年2回</li>
            </ul>
          </td>
				</tr>
				<tr>
					<th>従業員数</th>
					<td>
            <ul class="list-dot">
              <li>通勤手当</li>
              <li>家族手当</li>
              <li>職能手当</li>
              <li>役職手当</li>
            </ul>
          </td>
				</tr>
				<tr>
					<th>休日・休暇</th>
					<td>
            <ul class="list-dot">
              <li>週休2日制（土、日） 当社カレンダーによる<br>※12月～3月は、土曜日出勤がある場合があります。</li>
              <li>祝日</li>
              <li>GW</li>
              <li>夏期休暇</li>
              <li>年末年始休暇</li>
              <li>有給休暇</li>
              <li>特別休暇</li>
              <li>慶弔休暇<br>年間休日120日</li>
            </ul>
          </td>
				</tr>
        <tr>
					<th>福利厚生</th>
					<td>
            <ul class="list-dot">
              <li>健康保険</li>
              <li>厚生年金保険</li>
              <li>雇用保険</li>
              <li>労災保険</li>
              <li>退職金制度（中退共）</li>
              <li>財形貯蓄制度</li>
            </ul>
          </td>
				</tr>
			</table>
    </div>
  </section>

  <section id="company-history" class="sec sec--contents-block">
    <div class="inner-small">
			<h2 class="contents-title--medium">採用プロセス</h2>
      <?php // 昭和30年代 ?>
			<table class="table-type2 table-type2--recruit">
        <tbody>
          <tr>
            <td class="cell-label">STEP<span>1</span></td>
            <td class="cell-data"><em>書類選考</em><br>Webで応募いただいた内容をもとに書類選考を行います。できるだけ多くの方とお会いしたいと思っています。</td>
          </tr>
          <tr>
            <td class="cell-label">STEP<span>2</span></td>
            <td class="cell-data"><em>面接</em><br>書類選考を通過された方に面接（1回を予定）を実施。今後の展望や意欲などを存分にアピールしてください。</td>
          </tr>
          <tr>
            <td class="cell-label">STEP<span>3</span></td>
            <td class="cell-data"><em>内定</em><br>面接から内定まで約1週間を予定しています。</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="sec sec--heading">
    <div class="inner-wide">
      <h2 class="contents-title"><span>MESSAGE</span>先輩からのメッセージ</h2>
    </div>
  </section>

  <article class="staff-message">
    <section class="sec sec--separate-block sec--separate-block--staff">
      <div class="inner-wide">
        <div class="separate-block-content">
          <div class="separate-block-content__head">
            <h2 class="separate-block-content__head__staff-name"><span>製造職</span><em>小松 健一</em></h2>
            <em class="separate-block-content__head__staff-title">出来上がった製品に自分自身の成長を実感できます。</em>
          </div>
          <p class="separate-block-content__text">
            自分が手掛けたコンクリートブロックが、河川や街並みの自然の一部になっていると思うと、とてもやりがいを感じます。<br>入社当時、右も左もわからない自分に先輩の皆さんから一つ一つの工程の意味を教えて頂きました。出来上がった製品を見ると自分自身の成長を実感できます。
          </p>
        </div>
        <div class="separate-block-image" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/img_recruit_message01.jpg);"></div>
      </div>
    </section>

    <section class="sec sec--separate-block sec--separate-block--staff">
      <div class="inner-wide">
        <div class="separate-block-content">
          <div class="separate-block-content__head">
            <h2 class="separate-block-content__head__staff-name"><span>製造職</span><em>花岡 市郎</em></h2>
            <em class="separate-block-content__head__staff-title">地域に貢献できる、やりがいのある仕事です。</em>
          </div>
          <p class="separate-block-content__text">
		私たちは、環境や景観にあわせた多種多様なコンクリートブロックを製造しています。<br>まったく未経験で入社しましたが、機械操作を丁寧に教えていただき、今では、自分でも考えながら日々よりよい製品を作れることにやりがいを感じています。

          </p>
        </div>
        <div class="separate-block-image" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/img_recruit_message02.jpg);"></div>
      </div>
    </section>
  </article>

  <section class="sec sec--navi-block">
    <div class="inner-wide">
      <h2 class="contents-title"><span>ENTRY</span>エントリー</h2>
      <p class="contents-leading">ご応募は下記からお問い合わせいただくか、マイナビよりご応募ください。</p>
      <nav class="button-wrap button-wrap--recruit">
        <a href="https://tenshoku.mynavi.jp/list/kw%E5%B1%B1%E5%AF%8C%E7%94%A3%E6%A5%AD/?jobsearchType=14&searchType=18" target="_blank" rel="noopener noreferrer" class="image_button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/recruit/button_mynavi2023.png" alt="マイナビ2023" width="400" height="140"></a>
      </nav>
      <div class="contact-other">
        <p>採用のお問い合わせはこちらから</p>
        <a href="tel:0263-25-0387">0263-25-0387</a><span>（採用担当：小山）</span>
      </div>
    </div>
  </section>

<?php get_footer(); ?>