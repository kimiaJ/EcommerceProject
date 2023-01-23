<?php
/*
FONT CHANGER HamyarWP.COM THEMES
AUTHOR : Reza Akbari
*/

add_action( 'wp_dashboard_setup', 'hwp_font_changer' );
function hwp_font_changer() {
	add_meta_box( 'hwp_font_changer', 'تغییر دهنده فونت همیار وردپرس', 'hwp_font_changer_function', 'dashboard', 'side', 'high' );
}

function hwp_font_changer_function( $sh ) {
		if ( isset( $_POST['submit'] ) ) {
			$font_name = $_POST['font-name'];
			if ( $font_name == "shabnam" ) {
				update_option('hwp_font', 'shabnam');
			} elseif ( $font_name == "mitra" ) {
				update_option('hwp_font', 'mitra');
			} else {
				echo "یکی از فونت ها را انتخاب کنید.";
			}
		} 
		
		if ( is_admin() ) {
			if ( $font_name = get_option( 'hwp_font' ) ) {
				if ( $font_name == 'shabnam' ) {
					$shf = 'checked="checked"';
				} elseif ( $font_name == 'mitra' ) {
					$mif = 'checked="checked"';
				}
			}
			echo
				'<form method="post">
		<div style="text-align: center;background: #673AB7;padding: 20px 0;border-radius: 3px;color: #fff;">
			<input id="shabnam" name="font-name" type="radio"' . $shf . 'value="shabnam">
			<label for="shabnam">شبنم</label>
			<input id="mitra" name="font-name" type="radio"' . $mif . 'value="mitra" style="margin-right: 30px;">
			<label for="mitra">میترا</label>
		</div>
		<br>
		<input type="submit" name="submit" value="تغییر فونت"
			   style="cursor: pointer;border: none;outline: none;background: #DF3550;padding: 8px 30px;display: inline-block;color: #fff;font-size: 16px;border-radius: 3px;font-family: iransans,tahoma;">
	</form>';
	}
}

if ( is_rtl() && ! is_admin() ) {

	if ( $font_name = get_option( 'hwp_font' ) ) {
		if ( $font_name == 'shabnam' ) {
			function hwp_theme_rtl() {
				wp_enqueue_style( 'shbnam-rtl', get_template_directory_uri() . '/rtl-shabnam.css', array(), false, 'all' );
			}
		} elseif ( $font_name == 'mitra' ) {
			function hwp_theme_rtl() {
				wp_enqueue_style( 'shbnam-rtl', get_template_directory_uri() . '/rtl-mitra.css', array(), false, 'all' );
			}
		}
	} else {
		function hwp_theme_rtl() {
			wp_enqueue_style( 'shbnam-rtl', get_template_directory_uri() . '/rtl-shabnam.css', array(), false, 'all' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'hwp_theme_rtl', 99 );
}