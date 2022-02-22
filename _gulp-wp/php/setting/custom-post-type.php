<?php
/********************************************************************************
 デフォルトの「投稿」ポストの編集
*********************************************************************************/
global $mylabel; // 投稿 default
$mylabel = 'ニュース';
function custom_post_labels( $labels ) {
	$labels->name = $GLOBALS['mylabel']; // 投稿
	$labels->singular_name = $GLOBALS['mylabel']; // 投稿
	$labels->add_new = '新規追加'; // 新規追加
	$labels->add_new_item =  $GLOBALS['mylabel'].'を追加'; // 新規投稿を追加
	$labels->edit_item = '投稿の編集'; // 投稿の編集
	$labels->new_item = '新規'.$GLOBALS['mylabel']; // 新規投稿
	$labels->view_item = $GLOBALS['mylabel'].'を表示'; // 投稿を表示
	$labels->search_items = $GLOBALS['mylabel'].'を検索'; // 投稿を検索
	$labels->not_found = $GLOBALS['mylabel'].'が見つかりませんでした。'; // 投稿が見つかりませんでした。
	$labels->not_found_in_trash = 'ゴミ箱内に'.$GLOBALS['mylabel'].'が見つかりませんでした。'; // ゴミ箱内に投稿が見つかりませんでした。
	$labels->parent_item_colon = ''; // (なし)
	$labels->all_items = $GLOBALS['mylabel'].'一覧'; // 投稿一覧
	$labels->archives = $GLOBALS['mylabel'].'アーカイブ'; // 投稿アーカイブ
	$labels->insert_into_item = $GLOBALS['mylabel'].'に挿入'; // 投稿に挿入
	$labels->uploaded_to_this_item = 'この'.$GLOBALS['mylabel'].'へのアップロード'; // この投稿へのアップロード
	$labels->featured_image = 'アイキャッチ画像'; // アイキャッチ画像
	$labels->set_featured_image = 'アイキャッチ画像を設定'; // アイキャッチ画像を設定
	$labels->remove_featured_image = 'アイキャッチ画像を削除'; // アイキャッチ画像を削除
	$labels->use_featured_image = 'アイキャッチ画像として使用'; // アイキャッチ画像として使用
	$labels->filter_items_list = $GLOBALS['mylabel'].'リストの絞り込み'; // 投稿リストの絞り込み
	$labels->items_list_navigation = $GLOBALS['mylabel'].'リストナビゲーション'; // 投稿リストナビゲーション
	$labels->items_list = $GLOBALS['mylabel'].'リスト'; // 投稿リスト
	$labels->menu_name = $GLOBALS['mylabel']; // 投稿
	$labels->name_admin_bar = $GLOBALS['mylabel']; // 投稿
	return $labels;
}
add_filter( 'post_type_labels_post', 'custom_post_labels' );


/********************************************************************************
 カスタム投稿タイプの設定
*********************************************************************************/

// ▼▼▼▼▼▼▼▼▼▼ ------- ここからカスタム投稿タイプ設定のセット ------- ▼▼▼▼▼▼▼▼▼▼
global
$cpSlug,      // カスタム投稿のスラッグ名 10
$cpName,      // カスタム投稿の表示名 5
$cpTaxSlug,   // カスタム投稿のタクソノミーのスラッグ名（ -category or -tag ） 7
$cpTaxName,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ） 3
$rewriteslug; // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合 5

$cpSlug       = 'product';
$cpName       = '製品案内';
$cpTaxSlug    = $GLOBALS['cpSlug'].'-category';
$cpTaxName    = $GLOBALS['cpName'].'カテゴリー';
$rewriteslug  = 'category';

add_action( 'init', function() {
	/* カスタム投稿タイプを作成 */
	$labels = array(
		'name'               => $GLOBALS['cpName'], //管理画面などで表示する名前（単数形）
		'add_new_item'       => '新規'.$GLOBALS['cpName'].'追加', //新規作成ページのタイトルに表示される名前
		'edit_item'          => '編集', //編集ページのタイトルに表示される名前
		'view_item'          => '表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => '検索', //一覧ページの検索ボタンのラベル
	);
	$args = array(
    'label'               => $GLOBALS['cpSlug'],
		'labels'              => $labels,
		'public'              => true, // ユーザーが内容を投稿する場合true(通常はtrue)
		'show_in_rest'        => true, // Gutenberg 有効化
		'has_archive'         => true, // アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical'        => true, // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, // WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position'       => 5,
		'supports'            => array( // 管理画面から投稿できる項目を設定
		'title', // タイトル表示を有効に
		'editor', // 本文の表示を有効に
		// 'custom-fields', カスタムフィールド
		'thumbnail', // アイキャッチ画像
		'author', // 作成者
		)
	);
	register_post_type( $GLOBALS['cpSlug'], $args );
	/* ▼カスタムタクソノミーを作成 */
	$args = array(
		'label'        => $GLOBALS['cpTaxName'],
		'public'       => true,
		'show_ui'      => true,
		'show_in_rest' => true, // Gutenberg 有効化
		'query_var'    => true,
		'rewrite'      => array( 'slug' => $GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( $GLOBALS['cpTaxSlug'], $GLOBALS['cpSlug'], $args );
	/* ▲カスタムタクソノミーを作成 */
});

/* リライトルールを変更（カスタムタクソノミー） */
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug'].'=$matches[1]&paged=$matches[2]', 'top');
// 投稿画面にてタクソノミー検索を可能にする
add_action('restrict_manage_posts', function() {
global $post_type;
if ( $GLOBALS['cpSlug'] == $post_type ) {
	?>
	<select name="<?php echo $GLOBALS['cpTaxSlug']; ?>">
		<option value="">カテゴリー指定なし</option>
		<?php
		$terms = get_terms($GLOBALS['cpTaxSlug']);
		foreach ($terms as $term) { ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php } ?>
	</select>
	<?php
}
});
// ▲▲▲▲▲▲▲▲▲▲ ------- ここまでカスタム投稿タイプ設定のセット ------- ▲▲▲▲▲▲▲▲▲▲


// ▼▼▼▼▼▼▼▼▼▼ ------- ここからカスタム投稿タイプ設定のセット ------- ▼▼▼▼▼▼▼▼▼▼
global
$cpSlug2,      // カスタム投稿のスラッグ名 10
$cpName2,      // カスタム投稿の表示名 5
$cpTaxSlug2,   // カスタム投稿のタクソノミーのスラッグ名（ -category or -tag ） 7
$cpTaxName2,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ） 3
$rewriteslug2; // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合 5

$cpSlug2       = 'case-study';
$cpName2       = '施工事例';
$cpTaxSlug2    = $GLOBALS['cpSlug2'].'-category';
$cpTaxName2    = $GLOBALS['cpName2'].'カテゴリー';
$rewriteslug2  = 'category';

add_action( 'init', function() {
	/* カスタム投稿タイプを作成 */
	$labels = array(
		'name'               => $GLOBALS['cpName2'], //管理画面などで表示する名前（単数形）
		'add_new_item'       => '新規'.$GLOBALS['cpName2'].'追加', //新規作成ページのタイトルに表示される名前
		'edit_item'          => '編集', //編集ページのタイトルに表示される名前
		'view_item'          => '表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => '検索', //一覧ページの検索ボタンのラベル
	);
	$args = array(
    'label'               => $GLOBALS['cpSlug2'],
		'labels'              => $labels,
		'public'              => true, // ユーザーが内容を投稿する場合true(通常はtrue)
		'show_in_rest'        => true, // Gutenberg 有効化
		'has_archive'         => true, // アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical'        => true, // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, // WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position'       => 5,
		'supports'            => array( // 管理画面から投稿できる項目を設定
		'title', // タイトル表示を有効に
		'editor', // 本文の表示を有効に
		// 'custom-fields', カスタムフィールド
		'thumbnail', // アイキャッチ画像
		'author', // 作成者
		)
	);
	register_post_type( $GLOBALS['cpSlug2'], $args );
	/* ▼カスタムタクソノミーを作成 */
	$args = array(
		'label'        => $GLOBALS['cpTaxName2'],
		'public'       => true,
		'show_ui'      => true,
		'show_in_rest' => true, // Gutenberg 有効化
		'query_var'    => true,
		'rewrite'      => array( 'slug' => $GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
		'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	);
	register_taxonomy( $GLOBALS['cpTaxSlug2'], $GLOBALS['cpSlug2'], $args );
	/* ▲カスタムタクソノミーを作成 */
});

/* リライトルールを変更（カスタムタクソノミー） */
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]&paged=$matches[2]', 'top');
// 投稿画面にてタクソノミー検索を可能にする
add_action('restrict_manage_posts', function() {
global $post_type;
if ( $GLOBALS['cpSlug2'] == $post_type ) {
	?>
	<select name="<?php echo $GLOBALS['cpTaxSlug2']; ?>">
		<option value="">カテゴリー指定なし</option>
		<?php
		$terms = get_terms($GLOBALS['cpTaxSlug2']);
		foreach ($terms as $term) { ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php } ?>
	</select>
	<?php
}
});
// ▲▲▲▲▲▲▲▲▲▲ ------- ここまでカスタム投稿タイプ設定のセット ------- ▲▲▲▲▲▲▲▲▲▲


// カスタム投稿に編集者属性を与える
// ▼▼▼▼▼▼▼▼▼▼ ------- ここからカスタム投稿タイプ設定のセット ------- ▼▼▼▼▼▼▼▼▼▼
global
$cpSlug3,      // カスタム投稿のスラッグ名 10
$cpName3,      // カスタム投稿の表示名 5
$cpTaxSlug3,   // カスタム投稿のタクソノミーのスラッグ名（ -category or -tag ） 7
$cpTaxName3,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ） 3
$rewriteslug3; // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合 5

$cpSlug3       = 'download';
$cpName3       = 'ダウンロード';
$cpTaxSlug3    = $GLOBALS['cpSlug3'].'-category';
$cpTaxName3    = $GLOBALS['cpName3'].'カテゴリー';
$rewriteslug3  = 'category';

add_action( 'init', function() {
	/* カスタム投稿タイプを作成 */
	$labels = array(
		'name'               => $GLOBALS['cpName3'], //管理画面などで表示する名前（単数形）
		'add_new_item'       => '新規'.$GLOBALS['cpName3'].'追加', //新規作成ページのタイトルに表示される名前
		'edit_item'          => '編集', //編集ページのタイトルに表示される名前
		'view_item'          => '表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => '検索', //一覧ページの検索ボタンのラベル
	);
	$args = array(
    'label'               => $GLOBALS['cpSlug3'],
		'labels'              => $labels,
		'public'              => true, // ユーザーが内容を投稿する場合true(通常はtrue)
		'show_in_rest'        => true, // Gutenberg 有効化
		'has_archive'         => true, // アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical'        => true, // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, // WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position'       => 5,
		'supports'            => array( // 管理画面から投稿できる項目を設定
		'title', // タイトル表示を有効に
		// 'editor', // 本文の表示を有効に
		// 'custom-fields', カスタムフィールド
		'thumbnail', // アイキャッチ画像
		'author', // 作成者
		)
	);
	register_post_type( $GLOBALS['cpSlug3'], $args );
	/* ▼カスタムタクソノミーを作成 */
	// $args = array(
	// 	'label'        => $GLOBALS['cpTaxName3'],
	// 	'public'       => true,
	// 	'show_ui'      => true,
	// 	'show_in_rest' => true, // Gutenberg 有効化
	// 	'query_var'    => true,
	// 	'rewrite'      => array( 'slug' => $GLOBALS['cpSlug3'].'/'.$GLOBALS['rewriteslug3'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
	// 	'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	// );
	// register_taxonomy( $GLOBALS['cpTaxSlug3'], $GLOBALS['cpSlug3'], $args );
	/* ▲カスタムタクソノミーを作成 */
});

/* リライトルールを変更（カスタムタクソノミー） */
add_rewrite_rule($GLOBALS['cpSlug3'].'/'.$GLOBALS['rewriteslug3'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug3'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug3'].'/'.$GLOBALS['rewriteslug3'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug3'].'=$matches[1]&paged=$matches[2]', 'top');
// 投稿画面にてタクソノミー検索を可能にする
add_action('restrict_manage_posts', function() {
global $post_type;
if ( $GLOBALS['cpSlug3'] == $post_type ) {
	?>
	<select name="<?php echo $GLOBALS['cpTaxSlug3']; ?>">
		<option value="">カテゴリー指定なし</option>
		<?php
		$terms = get_terms($GLOBALS['cpTaxSlug3']);
		foreach ($terms as $term) { ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php } ?>
	</select>
	<?php
}
});
// ▲▲▲▲▲▲▲▲▲▲ ------- ここまでカスタム投稿タイプ設定のセット ------- ▲▲▲▲▲▲▲▲▲▲


// カスタム投稿に編集者属性を与える
function allowAuthorEditing() {
  add_post_type_support( $GLOBALS['$cpSlug, $cpSlug2, $cpSlug3'], 'author' );
}
add_action('init','allowAuthorEditing');


?>