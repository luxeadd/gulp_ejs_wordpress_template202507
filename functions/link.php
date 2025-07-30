<?php 

/**
 * 各ページリンク設定
 */

// 各ページリンク設置
function get_my_urls()
{
	return array(
		'top' => esc_url(home_url("/")),
		'about' => esc_url(home_url("/about/")),
		'solution' => esc_url(home_url("/solution/")),
		'sustainability' => esc_url(home_url("/sustainability/")),
		'news' => esc_url(home_url("/news/")),
		'contact' => esc_url(home_url("/contact/")),
		'privacy' => esc_url(home_url("/privacy/")),
		'recruit' => "https://ownedmaker.com/santel/top/",
		'message' => esc_url(home_url("/about/#message")),
		'logo' => esc_url(home_url("/about/#logo")),
		'officer' => esc_url(home_url("/about/#officer")),
		'company' => esc_url(home_url("/about/#company")),
		'companyInfo' => esc_url(home_url("/about/#companyInfo")),
		'organization' => esc_url(home_url("/about/#organization")),
		'history' => esc_url(home_url("/about/#history")),
	);
}