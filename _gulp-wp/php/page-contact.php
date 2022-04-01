<?php 
// mailform setting
ini_set('display_errors', 1);
define('LIB_PATH', __DIR__. "/mailform-lib/");
define('CONFIG_PATH', LIB_PATH);
define('TEMPLATE_PATH', CONFIG_PATH.  "/template/");
define('ERROR_FRAME', '<span class="error">ERROR_MESSAGE</span>');

define('MAIL_FROM_LABEL', '');
//送信元アドレス
define('MAIL_FROM_ADDRESS', 'info@yamatomi.co.jp');
//通知先アドレス
define('MAIL_NOTICE_ADDRESS', 'info@yamatomi.co.jp');

require_once(LIB_PATH. "toi-mail-form.php");

session_start();

//表示のコンバート
function contact_header($buffer)
{
  $head_text = '<style>.mw_wp_form_input .form-button--back, .mw_wp_form_input .form-button--submit{ display: block; }</style>';
  $head_text.= "<link rel='stylesheet' id='style-css'  href='". esc_url( home_url() ). "/wp-content/plugins/mw-wp-form/css/style.css' type='text/css' media='all' />";

  $buffer = str_replace('</head>', $head_text. "</head>", $buffer);
  if(CONTACT_TEMPLATE=="confirm"){
    $buffer = str_replace('お問い合わせ・資料請求<', 'お問い合わせ・資料請求（確認）<', $buffer);
    $buffer = str_replace('CONTACT', 'CONTACT-CONFIRM', $buffer);

  }elseif(CONTACT_TEMPLATE=="complete"){
    $buffer = str_replace('お問い合わせ・資料請求<', 'お問い合わせ・資料請求（完了）<', $buffer);
    $buffer = str_replace('CONTACT', 'CONTACT-THANKS', $buffer);

  }

  return $buffer;
}


$page = get_post( get_the_ID() );
$slug = $page->post_name;
$strUp = strtoupper($slug);

//バッファ
ob_start("contact_header");

get_header();
$class = new toi_mail_form("contact");
get_footer();

define('CONTACT_TEMPLATE', $class->template);

ob_end_flush();


?>

