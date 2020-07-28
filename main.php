<?php
/*Plugin Name: WP Security Header
Plugin URI: https://bootscore.me/plugins/dark-mode/
Description: This plugin adds security header to WordPress.
Version: 1.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/




function send_security_header ( ) {
        header ( "Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https:; object-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; media-src 'self'; child-src 'self' https:; font-src 'self' data:; connect-src 'self'" );
        header ( "X-Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https:; object-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; media-src 'self'; child-src 'self' https:; font-src 'self' data:; connect-src 'self'" );
        header ( "X-WebKit-CSP: default-src 'self'; script-src 'self' 'unsafe-inline' https:; object-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; media-src 'self'; frame-src 'self' https:; font-src 'self' data:; connect-src 'self'" );
        header ( "X-Content-Type-Options: nosniff" );
        header ( "X-Frame-Options: sameorigin" );
        header ( "X-XSS-Protection: 1; mode=block" );
        header ( "Strict-Transport-Security: max-age=31536000" );
        header ( "X-Permitted-Cross-Domain-Policies: none" );
        header ( "Referrer-Policy: no-referrer-when-downgrade" );       
}
add_action ( 'send_headers', 'send_security_header' );
