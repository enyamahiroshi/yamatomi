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
define( 'DB_NAME', 'haw1027hp9h6_yamatomi' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'haw1027hp9h6' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sHejVEFA' );

/** MySQL のホスト名 */
define( 'DB_HOST', '127.0.0.1' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2Ec_h#>k<QY*e%8_/tv0CUbhz>b}I|WIKDVWH0qn~QRiZlU1/3zx4Xg_R@VVHvZP' );
define( 'SECURE_AUTH_KEY',  'qAsc=_uyFb(`.*&[=:0nV3lKY~FRh7wq>92J<-J%ad{6$8c}*Ec+0w(Kj32oARoE' );
define( 'LOGGED_IN_KEY',    'r}M7HIxXav*5kYzDWZ(6>QcN:EEvgDMC*/!-7pe{1*wzyuo<7?4>_s3Eji(E@WWA' );
define( 'NONCE_KEY',        '_K;)%|9U>Bcd7e<Xy]%dA5C|jbaI;(e0KoFI@#KY[l EV 1klw/X/-O>h&w)x(qx' );
define( 'AUTH_SALT',        'e5W7p7Rcw0}Yyx*E%_O$F~IXy?h8)/`_yhkHVaH6W5t0))+*QIT!=L2D3.OT{y*c' );
define( 'SECURE_AUTH_SALT', 'a3fw9^3U}/Op=)+B+V*n`Zn]d=WsYK^W^D4=#]NUV3m+SdZ9ifN-inUC:vao~?$r' );
define( 'LOGGED_IN_SALT',   'WyPz_C8&k2vH%2qC-(u`OZ@Hi#s<%vZ$G-Yk46DD#a9^o9yZ@(P1KK5*Qv%dvE0G' );
define( 'NONCE_SALT',       ']w}AOMu)D|_8>9^fj@#c2[%x<@_UJ]8<e82FEDx=BX>k?g3#>Tapu*8d|>K.$W5M' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'yamatomi_';

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
