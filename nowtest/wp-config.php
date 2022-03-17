<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'endesign25_yamatomi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'endesign25_yama' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sfo32i09cnpsf83' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql7033.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S#`f$a_gp[Mb)({$$GXhIh!3gKJiq/`|7;y)~EI)~`;QhTZXKV-EZ8!ia$[K_KYH' );
define( 'SECURE_AUTH_KEY',  ',>></XJ1=@QaD8Q&n5 &vc93#{0ROXWsOJsM*%hGfpmU=1*,a9280uj)?$?FDrBj' );
define( 'LOGGED_IN_KEY',    'O>Kt^Yq BpsjM_Ajl0J9-yfg.)/Hn*d2__>4Px>2{FXJ>xSpF{R]|Q]&VJAAKUT*' );
define( 'NONCE_KEY',        '{v7cVTL_xmf2:!-y-/,uiYP-!6<O-tvnghvOVY4=F_@/F<1Ob9Kcpgx7-t/;OGmp' );
define( 'AUTH_SALT',        'zZVHm(*Z&YV^Eo+wt(bts+rENLoLsoN7Y}9|iJ35bW<*43>!fxq83/BnUqL8N+Dr' );
define( 'SECURE_AUTH_SALT', 'FLLO0sW[}L6Ru<FJU};rtlO@c7+c$-IRQka;y<?Ka.iuM7_{Cb  jevCZ=l-te]?' );
define( 'LOGGED_IN_SALT',   '&d?FHLw++OtpW| {2xQxwF~,gO^k2<wZB)VmN23XI}FXY:^*Z,q_%&+PU|UaKzv;' );
define( 'NONCE_SALT',       ' 6d]hCt3ctg.#VTuXn-J}!|Y;i4tIlM_p^kMSk3m~*Y*V7,SN*:|nI9_gZ`2|P3(' );
define( 'WP_CACHE_KEY_SALT','k2ZJ0;&!0UBT[i?@8v)K#Eq13Xg8F7>BTRqI9Vk$,g>4$3`MU4$/=@a]TI=${{r1' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
