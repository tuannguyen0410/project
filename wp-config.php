<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'otento');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'otento');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'p52Szs');

/** MySQL のホスト名 */
define('DB_HOST', 'db4.exasia.net');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'on/1<RB+ei^swC+=s.6Mg%+M7,FjK` lyds-?WX=Bv78/rPez2ninh6<I|tWhi#]');
define('SECURE_AUTH_KEY',  '|,1 TCQk]2e#sybGul+;ZD?S8>KrkI|;,JO[l/>d_ 3*NrRX5f^3-x/3<c)b_hiu');
define('LOGGED_IN_KEY',    'r+Q<M1ckN?{)R0Ze[RE`cH.;_esT;gY-U}&@1<C+-,M:i+E]niu+KK}dY o_H+(p');
define('NONCE_KEY',        ',-1q58iT `7#UVx[V7A2? GD+nZmkNnRoEP&Fi^jlue_qrL-TYXAr}zQo!hUFX*N');
define('AUTH_SALT',        't.0Oor07[{[BqSF|Lx0wLPnV/@b=+%q:@=4.0B9&f4WXECz}1]@ !sd>wvV>|#6c');
define('SECURE_AUTH_SALT', 'K6p2VaJ5p(h]6O&~87:_+A:xf5U7k;SFl=}Qde[WIFGU$#e@jc|eT_JUx@{<[X5:');
define('LOGGED_IN_SALT',   'vSU*R];F|B_iQdyw]%PUB$_xn)cw1-jG[ .Q]=6zu*T,:F[[icwJ$##f|<U%D@y_');
define('NONCE_SALT',       'SX~je<x|U-WC}-E~d+azBQ|zH!aSV# 73VX5)!+xSdxD7e#p3?5:Y{@[0SX0a,2H');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'ot_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'en');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
