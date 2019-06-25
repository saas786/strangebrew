<?php
/**
 * Font icon functions used in the theme.
 *
 * @package   Strangebrew
 * @author    David Graham <david.graham@strangebrewdesign.com>
 * @copyright 2018 David Graham
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      http://www.strangebrewdesign.com
 */

namespace Strangebrew;

/**
 * Returns the font icon code (e.g., `f001`).
 *
 * @since  0.9.0
 * @access public
 * @param  string  $name
 * @return string
 */
function get_font_icon_code( $name ) {

	$icons = get_font_icons();

	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/**
 * Returns the font icon HTML character (e.g., `&#xf001`).
 *
 * @since  0.9.0
 * @access public
 * @param  string  $name
 * @return string
 */
function get_font_icon_text( $name ) {
	
	$icon = get_font_icon_code( $name );

	return $icon ? "&#x{$icon}" : '';
}

/**
 * Returns the font icon HTML element.
 *
 * @since  0.9.0
 * @access public
 * @param  string  $name
 * @return string
 */
function get_font_icon_html( $name ) {

	return sprintf( '<i class="fa %s" aria-hidden="true"></i>', sanitize_html_class( $name ) );
}

/**
 * Returns the font icon code for use in CSS (e.g., `\f001`).
 *
 * @since  0.9.0
 * @access public
 * @param  string  $name
 * @return string
 */
function get_font_icon_css( $name ) {

	$icon = get_font_icon_code( $name );

	return $icon ? "\\{$icon}" : '';
}

/**
 * Checks if a font icon exists.
 *
 * @since  0.9.0
 * @access public
 * @param  string  $name
 * @return bool
 */
function font_icon_exists( $name ) {

	$icons = get_font_icons();

	return isset( $icons[ $name ] );
}

/**
 * Validation function for font icons.  Checks if the icon exists.  If so,
 * it returns the icon.  Else, it returns the fallback.
 *
 * @since  0.9.0
 * @access public
 * @param  string  $icon
 * @return string
 */
function validate_font_icon( $icon ) {

	return font_icon_exists( $icon ) ? $icon : '';
}

/**
 * Returns an array of font icon class names (key) and codes (value).  By default,
 * this uses Font Awesome.  However, devs can plug in their preferred icon set.
 *
 * @since  0.9.0
 * @access public
 * @return array
 */
function get_font_icons() {

	$icons = [
		'fa-500px'                               => 'f26e',
		'fa-address-book'                        => 'f2b9',
		'fa-address-book-o'                      => 'f2ba',
		'fa-address-card'                        => 'f2bb',
		'fa-address-card-o'                      => 'f2bc',
		'fa-adjust'                              => 'f042',
		'fa-adn'                                 => 'f170',
		'fa-align-center'                        => 'f037',
		'fa-align-justify'                       => 'f039',
		'fa-align-left'                          => 'f036',
		'fa-align-right'                         => 'f038',
		'fa-amazon'                              => 'f270',
		'fa-ambulance'                           => 'f0f9',
		'fa-american-sign-language-interpreting' => 'f2a3',
		'fa-anchor'                              => 'f13d',
		'fa-android'                             => 'f17b',
		'fa-angellist'                           => 'f209',
		'fa-angle-double-down'                   => 'f103',
		'fa-angle-double-left'                   => 'f100',
		'fa-angle-double-right'                  => 'f101',
		'fa-angle-double-up'                     => 'f102',
		'fa-angle-down'                          => 'f107',
		'fa-angle-left'                          => 'f104',
		'fa-angle-right'                         => 'f105',
		'fa-angle-up'                            => 'f106',
		'fa-apple'                               => 'f179',
		'fa-archive'                             => 'f187',
		'fa-area-chart'                          => 'f1fe',
		'fa-arrow-circle-down'                   => 'f0ab',
		'fa-arrow-circle-left'                   => 'f0a8',
		'fa-arrow-circle-o-down'                 => 'f01a',
		'fa-arrow-circle-o-left'                 => 'f190',
		'fa-arrow-circle-o-right'                => 'f18e',
		'fa-arrow-circle-o-up'                   => 'f01b',
		'fa-arrow-circle-right'                  => 'f0a9',
		'fa-arrow-circle-up'                     => 'f0aa',
		'fa-arrow-down'                          => 'f063',
		'fa-arrow-left'                          => 'f060',
		'fa-arrow-right'                         => 'f061',
		'fa-arrow-up'                            => 'f062',
		'fa-arrows'                              => 'f047',
		'fa-arrows-alt'                          => 'f0b2',
		'fa-arrows-h'                            => 'f07e',
		'fa-arrows-v'                            => 'f07d',
		'fa-asl-interpreting'                    => 'f2a3',
		'fa-assistive-listening-systems'         => 'f2a2',
		'fa-asterisk'                            => 'f069',
		'fa-at'                                  => 'f1fa',
		'fa-audio-description'                   => 'f29e',
		'fa-automobile'                          => 'f1b9',
		'fa-backward'                            => 'f04a',
		'fa-balance-scale'                       => 'f24e',
		'fa-ban'                                 => 'f05e',
		'fa-bandcamp'                            => 'f2d5',
		'fa-bank'                                => 'f19c',
		'fa-bar-chart'                           => 'f080',
		'fa-bar-chart-o'                         => 'f080',
		'fa-barcode'                             => 'f02a',
		'fa-bars'                                => 'f0c9',
		'fa-bath'                                => 'f2cd',
		'fa-bathtub'                             => 'f2cd',
		'fa-battery'                             => 'f240',
		'fa-battery-0'                           => 'f244',
		'fa-battery-1'                           => 'f243',
		'fa-battery-2'                           => 'f242',
		'fa-battery-3'                           => 'f241',
		'fa-battery-4'                           => 'f240',
		'fa-battery-empty'                       => 'f244',
		'fa-battery-full'                        => 'f240',
		'fa-battery-half'                        => 'f242',
		'fa-battery-quarter'                     => 'f243',
		'fa-battery-three-quarters'              => 'f241',
		'fa-bed'                                 => 'f236',
		'fa-beer'                                => 'f0fc',
		'fa-behance'                             => 'f1b4',
		'fa-behance-square'                      => 'f1b5',
		'fa-bell'                                => 'f0f3',
		'fa-bell-o'                              => 'f0a2',
		'fa-bell-slash'                          => 'f1f6',
		'fa-bell-slash-o'                        => 'f1f7',
		'fa-bicycle'                             => 'f206',
		'fa-binoculars'                          => 'f1e5',
		'fa-birthday-cake'                       => 'f1fd',
		'fa-bitbucket'                           => 'f171',
		'fa-bitbucket-square'                    => 'f172',
		'fa-bitcoin'                             => 'f15a',
		'fa-black-tie'                           => 'f27e',
		'fa-blind'                               => 'f29d',
		'fa-bluetooth'                           => 'f293',
		'fa-bluetooth-b'                         => 'f294',
		'fa-bold'                                => 'f032',
		'fa-bolt'                                => 'f0e7',
		'fa-bomb'                                => 'f1e2',
		'fa-book'                                => 'f02d',
		'fa-bookmark'                            => 'f02e',
		'fa-bookmark-o'                          => 'f097',
		'fa-braille'                             => 'f2a1',
		'fa-briefcase'                           => 'f0b1',
		'fa-btc'                                 => 'f15a',
		'fa-bug'                                 => 'f188',
		'fa-building'                            => 'f1ad',
		'fa-building-o'                          => 'f0f7',
		'fa-bullhorn'                            => 'f0a1',
		'fa-bullseye'                            => 'f140',
		'fa-bus'                                 => 'f207',
		'fa-buysellads'                          => 'f20d',
		'fa-cab'                                 => 'f1ba',
		'fa-calculator'                          => 'f1ec',
		'fa-calendar'                            => 'f073',
		'fa-calendar-check-o'                    => 'f274',
		'fa-calendar-minus-o'                    => 'f272',
		'fa-calendar-o'                          => 'f133',
		'fa-calendar-plus-o'                     => 'f271',
		'fa-calendar-times-o'                    => 'f273',
		'fa-camera'                              => 'f030',
		'fa-camera-retro'                        => 'f083',
		'fa-car'                                 => 'f1b9',
		'fa-caret-down'                          => 'f0d7',
		'fa-caret-left'                          => 'f0d9',
		'fa-caret-right'                         => 'f0da',
		'fa-caret-square-o-down'                 => 'f150',
		'fa-caret-square-o-left'                 => 'f191',
		'fa-caret-square-o-right'                => 'f152',
		'fa-caret-square-o-up'                   => 'f151',
		'fa-caret-up'                            => 'f0d8',
		'fa-cart-arrow-down'                     => 'f218',
		'fa-cart-plus'                           => 'f217',
		'fa-cc'                                  => 'f20a',
		'fa-cc-amex'                             => 'f1f3',
		'fa-cc-diners-club'                      => 'f24c',
		'fa-cc-discover'                         => 'f1f2',
		'fa-cc-jcb'                              => 'f24b',
		'fa-cc-mastercard'                       => 'f1f1',
		'fa-cc-paypal'                           => 'f1f4',
		'fa-cc-stripe'                           => 'f1f5',
		'fa-cc-visa'                             => 'f1f0',
		'fa-certificate'                         => 'f0a3',
		'fa-chain'                               => 'f0c1',
		'fa-chain-broken'                        => 'f127',
		'fa-check'                               => 'f00c',
		'fa-check-circle'                        => 'f058',
		'fa-check-circle-o'                      => 'f05d',
		'fa-check-square'                        => 'f14a',
		'fa-check-square-o'                      => 'f046',
		'fa-chevron-circle-down'                 => 'f13a',
		'fa-chevron-circle-left'                 => 'f137',
		'fa-chevron-circle-right'                => 'f138',
		'fa-chevron-circle-up'                   => 'f139',
		'fa-chevron-down'                        => 'f078',
		'fa-chevron-left'                        => 'f053',
		'fa-chevron-right'                       => 'f054',
		'fa-chevron-up'                          => 'f077',
		'fa-child'                               => 'f1ae',
		'fa-chrome'                              => 'f268',
		'fa-circle'                              => 'f111',
		'fa-circle-o'                            => 'f10c',
		'fa-circle-o-notch'                      => 'f1ce',
		'fa-circle-thin'                         => 'f1db',
		'fa-clipboard'                           => 'f0ea',
		'fa-clock-o'                             => 'f017',
		'fa-clone'                               => 'f24d',
		'fa-close'                               => 'f00d',
		'fa-cloud'                               => 'f0c2',
		'fa-cloud-download'                      => 'f0ed',
		'fa-cloud-upload'                        => 'f0ee',
		'fa-cny'                                 => 'f157',
		'fa-code'                                => 'f121',
		'fa-code-fork'                           => 'f126',
		'fa-codepen'                             => 'f1cb',
		'fa-codiepie'                            => 'f284',
		'fa-coffee'                              => 'f0f4',
		'fa-cog'                                 => 'f013',
		'fa-cogs'                                => 'f085',
		'fa-columns'                             => 'f0db',
		'fa-comment'                             => 'f075',
		'fa-comment-o'                           => 'f0e5',
		'fa-commenting'                          => 'f27a',
		'fa-commenting-o'                        => 'f27b',
		'fa-comments'                            => 'f086',
		'fa-comments-o'                          => 'f0e6',
		'fa-compass'                             => 'f14e',
		'fa-compress'                            => 'f066',
		'fa-connectdevelop'                      => 'f20e',
		'fa-contao'                              => 'f26d',
		'fa-copy'                                => 'f0c5',
		'fa-copyright'                           => 'f1f9',
		'fa-creative-commons'                    => 'f25e',
		'fa-credit-card'                         => 'f09d',
		'fa-credit-card-alt'                     => 'f283',
		'fa-crop'                                => 'f125',
		'fa-crosshairs'                          => 'f05b',
		'fa-css3'                                => 'f13c',
		'fa-cube'                                => 'f1b2',
		'fa-cubes'                               => 'f1b3',
		'fa-cut'                                 => 'f0c4',
		'fa-cutlery'                             => 'f0f5',
		'fa-dashboard'                           => 'f0e4',
		'fa-dashcube'                            => 'f210',
		'fa-database'                            => 'f1c0',
		'fa-deaf'                                => 'f2a4',
		'fa-deafness'                            => 'f2a4',
		'fa-dedent'                              => 'f03b',
		'fa-delicious'                           => 'f1a5',
		'fa-desktop'                             => 'f108',
		'fa-deviantart'                          => 'f1bd',
		'fa-diamond'                             => 'f219',
		'fa-digg'                                => 'f1a6',
		'fa-dollar'                              => 'f155',
		'fa-dot-circle-o'                        => 'f192',
		'fa-download'                            => 'f019',
		'fa-dribbble'                            => 'f17d',
		'fa-drivers-license'                     => 'f2c2',
		'fa-drivers-license-o'                   => 'f2c3',
		'fa-dropbox'                             => 'f16b',
		'fa-drupal'                              => 'f1a9',
		'fa-edge'                                => 'f282',
		'fa-edit'                                => 'f044',
		'fa-eercast'                             => 'f2da',
		'fa-eject'                               => 'f052',
		'fa-ellipsis-h'                          => 'f141',
		'fa-ellipsis-v'                          => 'f142',
		'fa-empire'                              => 'f1d1',
		'fa-envelope'                            => 'f0e0',
		'fa-envelope-o'                          => 'f003',
		'fa-envelope-open'                       => 'f2b6',
		'fa-envelope-open-o'                     => 'f2b7',
		'fa-envelope-square'                     => 'f199',
		'fa-envira'                              => 'f299',
		'fa-eraser'                              => 'f12d',
		'fa-etsy'                                => 'f2d7',
		'fa-eur'                                 => 'f153',
		'fa-euro'                                => 'f153',
		'fa-exchange'                            => 'f0ec',
		'fa-exclamation'                         => 'f12a',
		'fa-exclamation-circle'                  => 'f06a',
		'fa-exclamation-triangle'                => 'f071',
		'fa-expand'                              => 'f065',
		'fa-expeditedssl'                        => 'f23e',
		'fa-external-link'                       => 'f08e',
		'fa-external-link-square'                => 'f14c',
		'fa-eye'                                 => 'f06e',
		'fa-eye-slash'                           => 'f070',
		'fa-eyedropper'                          => 'f1fb',
		'fa-fa'                                  => 'f2b4',
		'fa-facebook'                            => 'f09a',
		'fa-facebook-f'                          => 'f09a',
		'fa-facebook-official'                   => 'f230',
		'fa-facebook-square'                     => 'f082',
		'fa-fast-backward'                       => 'f049',
		'fa-fast-forward'                        => 'f050',
		'fa-fax'                                 => 'f1ac',
		'fa-feed'                                => 'f09e',
		'fa-female'                              => 'f182',
		'fa-fighter-jet'                         => 'f0fb',
		'fa-file'                                => 'f15b',
		'fa-file-archive-o'                      => 'f1c6',
		'fa-file-audio-o'                        => 'f1c7',
		'fa-file-code-o'                         => 'f1c9',
		'fa-file-excel-o'                        => 'f1c3',
		'fa-file-image-o'                        => 'f1c5',
		'fa-file-movie-o'                        => 'f1c8',
		'fa-file-o'                              => 'f016',
		'fa-file-pdf-o'                          => 'f1c1',
		'fa-file-photo-o'                        => 'f1c5',
		'fa-file-picture-o'                      => 'f1c5',
		'fa-file-powerpoint-o'                   => 'f1c4',
		'fa-file-sound-o'                        => 'f1c7',
		'fa-file-text'                           => 'f15c',
		'fa-file-text-o'                         => 'f0f6',
		'fa-file-video-o'                        => 'f1c8',
		'fa-file-word-o'                         => 'f1c2',
		'fa-file-zip-o'                          => 'f1c6',
		'fa-files-o'                             => 'f0c5',
		'fa-film'                                => 'f008',
		'fa-filter'                              => 'f0b0',
		'fa-fire'                                => 'f06d',
		'fa-fire-extinguisher'                   => 'f134',
		'fa-firefox'                             => 'f269',
		'fa-first-order'                         => 'f2b0',
		'fa-flag'                                => 'f024',
		'fa-flag-checkered'                      => 'f11e',
		'fa-flag-o'                              => 'f11d',
		'fa-flash'                               => 'f0e7',
		'fa-flask'                               => 'f0c3',
		'fa-flickr'                              => 'f16e',
		'fa-floppy-o'                            => 'f0c7',
		'fa-folder'                              => 'f07b',
		'fa-folder-o'                            => 'f114',
		'fa-folder-open'                         => 'f07c',
		'fa-folder-open-o'                       => 'f115',
		'fa-font'                                => 'f031',
		'fa-font-awesome'                        => 'f2b4',
		'fa-fonticons'                           => 'f280',
		'fa-fort-awesome'                        => 'f286',
		'fa-forumbee'                            => 'f211',
		'fa-forward'                             => 'f04e',
		'fa-foursquare'                          => 'f180',
		'fa-free-code-camp'                      => 'f2c5',
		'fa-frown-o'                             => 'f119',
		'fa-futbol-o'                            => 'f1e3',
		'fa-gamepad'                             => 'f11b',
		'fa-gavel'                               => 'f0e3',
		'fa-gbp'                                 => 'f154',
		'fa-ge'                                  => 'f1d1',
		'fa-gear'                                => 'f013',
		'fa-gears'                               => 'f085',
		'fa-genderless'                          => 'f22d',
		'fa-get-pocket'                          => 'f265',
		'fa-gg'                                  => 'f260',
		'fa-gg-circle'                           => 'f261',
		'fa-gift'                                => 'f06b',
		'fa-git'                                 => 'f1d3',
		'fa-git-square'                          => 'f1d2',
		'fa-github'                              => 'f09b',
		'fa-github-alt'                          => 'f113',
		'fa-github-square'                       => 'f092',
		'fa-gitlab'                              => 'f296',
		'fa-gittip'                              => 'f184',
		'fa-glass'                               => 'f000',
		'fa-glide'                               => 'f2a5',
		'fa-glide-g'                             => 'f2a6',
		'fa-globe'                               => 'f0ac',
		'fa-google'                              => 'f1a0',
		'fa-google-plus'                         => 'f0d5',
		'fa-google-plus-circle'                  => 'f2b3',
		'fa-google-plus-official'                => 'f2b3',
		'fa-google-plus-square'                  => 'f0d4',
		'fa-google-wallet'                       => 'f1ee',
		'fa-graduation-cap'                      => 'f19d',
		'fa-gratipay'                            => 'f184',
		'fa-grav'                                => 'f2d6',
		'fa-group'                               => 'f0c0',
		'fa-h-square'                            => 'f0fd',
		'fa-hacker-news'                         => 'f1d4',
		'fa-hand-grab-o'                         => 'f255',
		'fa-hand-lizard-o'                       => 'f258',
		'fa-hand-o-down'                         => 'f0a7',
		'fa-hand-o-left'                         => 'f0a5',
		'fa-hand-o-right'                        => 'f0a4',
		'fa-hand-o-up'                           => 'f0a6',
		'fa-hand-paper-o'                        => 'f256',
		'fa-hand-peace-o'                        => 'f25b',
		'fa-hand-pointer-o'                      => 'f25a',
		'fa-hand-rock-o'                         => 'f255',
		'fa-hand-scissors-o'                     => 'f257',
		'fa-hand-spock-o'                        => 'f259',
		'fa-hand-stop-o'                         => 'f256',
		'fa-handshake-o'                         => 'f2b5',
		'fa-hard-of-hearing'                     => 'f2a4',
		'fa-hashtag'                             => 'f292',
		'fa-hdd-o'                               => 'f0a0',
		'fa-header'                              => 'f1dc',
		'fa-headphones'                          => 'f025',
		'fa-heart'                               => 'f004',
		'fa-heart-o'                             => 'f08a',
		'fa-heartbeat'                           => 'f21e',
		'fa-history'                             => 'f1da',
		'fa-home'                                => 'f015',
		'fa-hospital-o'                          => 'f0f8',
		'fa-hotel'                               => 'f236',
		'fa-hourglass'                           => 'f254',
		'fa-hourglass-1'                         => 'f251',
		'fa-hourglass-2'                         => 'f252',
		'fa-hourglass-3'                         => 'f253',
		'fa-hourglass-end'                       => 'f253',
		'fa-hourglass-half'                      => 'f252',
		'fa-hourglass-o'                         => 'f250',
		'fa-hourglass-start'                     => 'f251',
		'fa-houzz'                               => 'f27c',
		'fa-html5'                               => 'f13b',
		'fa-i-cursor'                            => 'f246',
		'fa-id-badge'                            => 'f2c1',
		'fa-id-card'                             => 'f2c2',
		'fa-id-card-o'                           => 'f2c3',
		'fa-ils'                                 => 'f20b',
		'fa-image'                               => 'f03e',
		'fa-imdb'                                => 'f2d8',
		'fa-inbox'                               => 'f01c',
		'fa-indent'                              => 'f03c',
		'fa-industry'                            => 'f275',
		'fa-info'                                => 'f129',
		'fa-info-circle'                         => 'f05a',
		'fa-inr'                                 => 'f156',
		'fa-instagram'                           => 'f16d',
		'fa-institution'                         => 'f19c',
		'fa-internet-explorer'                   => 'f26b',
		'fa-intersex'                            => 'f224',
		'fa-ioxhost'                             => 'f208',
		'fa-italic'                              => 'f033',
		'fa-joomla'                              => 'f1aa',
		'fa-jpy'                                 => 'f157',
		'fa-jsfiddle'                            => 'f1cc',
		'fa-key'                                 => 'f084',
		'fa-keyboard-o'                          => 'f11c',
		'fa-krw'                                 => 'f159',
		'fa-language'                            => 'f1ab',
		'fa-laptop'                              => 'f109',
		'fa-lastfm'                              => 'f202',
		'fa-lastfm-square'                       => 'f203',
		'fa-leaf'                                => 'f06c',
		'fa-leanpub'                             => 'f212',
		'fa-legal'                               => 'f0e3',
		'fa-lemon-o'                             => 'f094',
		'fa-level-down'                          => 'f149',
		'fa-level-up'                            => 'f148',
		'fa-life-bouy'                           => 'f1cd',
		'fa-life-buoy'                           => 'f1cd',
		'fa-life-ring'                           => 'f1cd',
		'fa-life-saver'                          => 'f1cd',
		'fa-lightbulb-o'                         => 'f0eb',
		'fa-line-chart'                          => 'f201',
		'fa-link'                                => 'f0c1',
		'fa-linkedin'                            => 'f0e1',
		'fa-linkedin-square'                     => 'f08c',
		'fa-linode'                              => 'f2b8',
		'fa-linux'                               => 'f17c',
		'fa-list'                                => 'f03a',
		'fa-list-alt'                            => 'f022',
		'fa-list-ol'                             => 'f0cb',
		'fa-list-ul'                             => 'f0ca',
		'fa-location-arrow'                      => 'f124',
		'fa-lock'                                => 'f023',
		'fa-long-arrow-down'                     => 'f175',
		'fa-long-arrow-left'                     => 'f177',
		'fa-long-arrow-right'                    => 'f178',
		'fa-long-arrow-up'                       => 'f176',
		'fa-low-vision'                          => 'f2a8',
		'fa-magic'                               => 'f0d0',
		'fa-magnet'                              => 'f076',
		'fa-mail-forward'                        => 'f064',
		'fa-mail-reply'                          => 'f112',
		'fa-mail-reply-all'                      => 'f122',
		'fa-male'                                => 'f183',
		'fa-map'                                 => 'f279',
		'fa-map-marker'                          => 'f041',
		'fa-map-o'                               => 'f278',
		'fa-map-pin'                             => 'f276',
		'fa-map-signs'                           => 'f277',
		'fa-mars'                                => 'f222',
		'fa-mars-double'                         => 'f227',
		'fa-mars-stroke'                         => 'f229',
		'fa-mars-stroke-h'                       => 'f22b',
		'fa-mars-stroke-v'                       => 'f22a',
		'fa-maxcdn'                              => 'f136',
		'fa-meanpath'                            => 'f20c',
		'fa-medium'                              => 'f23a',
		'fa-medkit'                              => 'f0fa',
		'fa-meetup'                              => 'f2e0',
		'fa-meh-o'                               => 'f11a',
		'fa-mercury'                             => 'f223',
		'fa-microchip'                           => 'f2db',
		'fa-microphone'                          => 'f130',
		'fa-microphone-slash'                    => 'f131',
		'fa-minus'                               => 'f068',
		'fa-minus-circle'                        => 'f056',
		'fa-minus-square'                        => 'f146',
		'fa-minus-square-o'                      => 'f147',
		'fa-mixcloud'                            => 'f289',
		'fa-mobile'                              => 'f10b',
		'fa-mobile-phone'                        => 'f10b',
		'fa-modx'                                => 'f285',
		'fa-money'                               => 'f0d6',
		'fa-moon-o'                              => 'f186',
		'fa-mortar-board'                        => 'f19d',
		'fa-motorcycle'                          => 'f21c',
		'fa-mouse-pointer'                       => 'f245',
		'fa-music'                               => 'f001',
		'fa-navicon'                             => 'f0c9',
		'fa-neuter'                              => 'f22c',
		'fa-newspaper-o'                         => 'f1ea',
		'fa-object-group'                        => 'f247',
		'fa-object-ungroup'                      => 'f248',
		'fa-odnoklassniki'                       => 'f263',
		'fa-odnoklassniki-square'                => 'f264',
		'fa-opencart'                            => 'f23d',
		'fa-openid'                              => 'f19b',
		'fa-opera'                               => 'f26a',
		'fa-optin-monster'                       => 'f23c',
		'fa-outdent'                             => 'f03b',
		'fa-pagelines'                           => 'f18c',
		'fa-paint-brush'                         => 'f1fc',
		'fa-paper-plane'                         => 'f1d8',
		'fa-paper-plane-o'                       => 'f1d9',
		'fa-paperclip'                           => 'f0c6',
		'fa-paragraph'                           => 'f1dd',
		'fa-paste'                               => 'f0ea',
		'fa-pause'                               => 'f04c',
		'fa-pause-circle'                        => 'f28b',
		'fa-pause-circle-o'                      => 'f28c',
		'fa-paw'                                 => 'f1b0',
		'fa-paypal'                              => 'f1ed',
		'fa-pencil'                              => 'f040',
		'fa-pencil-square'                       => 'f14b',
		'fa-pencil-square-o'                     => 'f044',
		'fa-percent'                             => 'f295',
		'fa-phone'                               => 'f095',
		'fa-phone-square'                        => 'f098',
		'fa-photo'                               => 'f03e',
		'fa-picture-o'                           => 'f03e',
		'fa-pie-chart'                           => 'f200',
		'fa-pied-piper'                          => 'f2ae',
		'fa-pied-piper-alt'                      => 'f1a8',
		'fa-pied-piper-pp'                       => 'f1a7',
		'fa-pinterest'                           => 'f0d2',
		'fa-pinterest-p'                         => 'f231',
		'fa-pinterest-square'                    => 'f0d3',
		'fa-plane'                               => 'f072',
		'fa-play'                                => 'f04b',
		'fa-play-circle'                         => 'f144',
		'fa-play-circle-o'                       => 'f01d',
		'fa-plug'                                => 'f1e6',
		'fa-plus'                                => 'f067',
		'fa-plus-circle'                         => 'f055',
		'fa-plus-square'                         => 'f0fe',
		'fa-plus-square-o'                       => 'f196',
		'fa-podcast'                             => 'f2ce',
		'fa-power-off'                           => 'f011',
		'fa-print'                               => 'f02f',
		'fa-product-hunt'                        => 'f288',
		'fa-puzzle-piece'                        => 'f12e',
		'fa-qq'                                  => 'f1d6',
		'fa-qrcode'                              => 'f029',
		'fa-question'                            => 'f128',
		'fa-question-circle'                     => 'f059',
		'fa-question-circle-o'                   => 'f29c',
		'fa-quora'                               => 'f2c4',
		'fa-quote-left'                          => 'f10d',
		'fa-quote-right'                         => 'f10e',
		'fa-ra'                                  => 'f1d0',
		'fa-random'                              => 'f074',
		'fa-ravelry'                             => 'f2d9',
		'fa-rebel'                               => 'f1d0',
		'fa-recycle'                             => 'f1b8',
		'fa-reddit'                              => 'f1a1',
		'fa-reddit-alien'                        => 'f281',
		'fa-reddit-square'                       => 'f1a2',
		'fa-refresh'                             => 'f021',
		'fa-registered'                          => 'f25d',
		'fa-remove'                              => 'f00d',
		'fa-renren'                              => 'f18b',
		'fa-reorder'                             => 'f0c9',
		'fa-repeat'                              => 'f01e',
		'fa-reply'                               => 'f112',
		'fa-reply-all'                           => 'f122',
		'fa-resistance'                          => 'f1d0',
		'fa-retweet'                             => 'f079',
		'fa-rmb'                                 => 'f157',
		'fa-road'                                => 'f018',
		'fa-rocket'                              => 'f135',
		'fa-rotate-left'                         => 'f0e2',
		'fa-rotate-right'                        => 'f01e',
		'fa-rouble'                              => 'f158',
		'fa-rss'                                 => 'f09e',
		'fa-rss-square'                          => 'f143',
		'fa-rub'                                 => 'f158',
		'fa-ruble'                               => 'f158',
		'fa-rupee'                               => 'f156',
		'fa-s15'                                 => 'f2cd',
		'fa-safari'                              => 'f267',
		'fa-save'                                => 'f0c7',
		'fa-scissors'                            => 'f0c4',
		'fa-scribd'                              => 'f28a',
		'fa-search'                              => 'f002',
		'fa-search-minus'                        => 'f010',
		'fa-search-plus'                         => 'f00e',
		'fa-sellsy'                              => 'f213',
		'fa-send'                                => 'f1d8',
		'fa-send-o'                              => 'f1d9',
		'fa-server'                              => 'f233',
		'fa-share'                               => 'f064',
		'fa-share-alt'                           => 'f1e0',
		'fa-share-alt-square'                    => 'f1e1',
		'fa-share-square'                        => 'f14d',
		'fa-share-square-o'                      => 'f045',
		'fa-shekel'                              => 'f20b',
		'fa-sheqel'                              => 'f20b',
		'fa-shield'                              => 'f132',
		'fa-ship'                                => 'f21a',
		'fa-shirtsinbulk'                        => 'f214',
		'fa-shopping-bag'                        => 'f290',
		'fa-shopping-basket'                     => 'f291',
		'fa-shopping-cart'                       => 'f07a',
		'fa-shower'                              => 'f2cc',
		'fa-sign-in'                             => 'f090',
		'fa-sign-language'                       => 'f2a7',
		'fa-sign-out'                            => 'f08b',
		'fa-signal'                              => 'f012',
		'fa-signing'                             => 'f2a7',
		'fa-simplybuilt'                         => 'f215',
		'fa-sitemap'                             => 'f0e8',
		'fa-skyatlas'                            => 'f216',
		'fa-skype'                               => 'f17e',
		'fa-slack'                               => 'f198',
		'fa-sliders'                             => 'f1de',
		'fa-slideshare'                          => 'f1e7',
		'fa-smile-o'                             => 'f118',
		'fa-snapchat'                            => 'f2ab',
		'fa-snapchat-ghost'                      => 'f2ac',
		'fa-snapchat-square'                     => 'f2ad',
		'fa-snowflake-o'                         => 'f2dc',
		'fa-soccer-ball-o'                       => 'f1e3',
		'fa-sort'                                => 'f0dc',
		'fa-sort-alpha-asc'                      => 'f15d',
		'fa-sort-alpha-desc'                     => 'f15e',
		'fa-sort-amount-asc'                     => 'f160',
		'fa-sort-amount-desc'                    => 'f161',
		'fa-sort-asc'                            => 'f0de',
		'fa-sort-desc'                           => 'f0dd',
		'fa-sort-down'                           => 'f0dd',
		'fa-sort-numeric-asc'                    => 'f162',
		'fa-sort-numeric-desc'                   => 'f163',
		'fa-sort-up'                             => 'f0de',
		'fa-soundcloud'                          => 'f1be',
		'fa-space-shuttle'                       => 'f197',
		'fa-spinner'                             => 'f110',
		'fa-spoon'                               => 'f1b1',
		'fa-spotify'                             => 'f1bc',
		'fa-square'                              => 'f0c8',
		'fa-square-o'                            => 'f096',
		'fa-stack-exchange'                      => 'f18d',
		'fa-stack-overflow'                      => 'f16c',
		'fa-star'                                => 'f005',
		'fa-star-half'                           => 'f089',
		'fa-star-half-empty'                     => 'f123',
		'fa-star-half-full'                      => 'f123',
		'fa-star-half-o'                         => 'f123',
		'fa-star-o'                              => 'f006',
		'fa-steam'                               => 'f1b6',
		'fa-steam-square'                        => 'f1b7',
		'fa-step-backward'                       => 'f048',
		'fa-step-forward'                        => 'f051',
		'fa-stethoscope'                         => 'f0f1',
		'fa-sticky-note'                         => 'f249',
		'fa-sticky-note-o'                       => 'f24a',
		'fa-stop'                                => 'f04d',
		'fa-stop-circle'                         => 'f28d',
		'fa-stop-circle-o'                       => 'f28e',
		'fa-street-view'                         => 'f21d',
		'fa-strikethrough'                       => 'f0cc',
		'fa-stumbleupon'                         => 'f1a4',
		'fa-stumbleupon-circle'                  => 'f1a3',
		'fa-subscript'                           => 'f12c',
		'fa-subway'                              => 'f239',
		'fa-suitcase'                            => 'f0f2',
		'fa-sun-o'                               => 'f185',
		'fa-superpowers'                         => 'f2dd',
		'fa-superscript'                         => 'f12b',
		'fa-support'                             => 'f1cd',
		'fa-table'                               => 'f0ce',
		'fa-tablet'                              => 'f10a',
		'fa-tachometer'                          => 'f0e4',
		'fa-tag'                                 => 'f02b',
		'fa-tags'                                => 'f02c',
		'fa-tasks'                               => 'f0ae',
		'fa-taxi'                                => 'f1ba',
		'fa-telegram'                            => 'f2c6',
		'fa-television'                          => 'f26c',
		'fa-tencent-weibo'                       => 'f1d5',
		'fa-terminal'                            => 'f120',
		'fa-text-height'                         => 'f034',
		'fa-text-width'                          => 'f035',
		'fa-th'                                  => 'f00a',
		'fa-th-large'                            => 'f009',
		'fa-th-list'                             => 'f00b',
		'fa-themeisle'                           => 'f2b2',
		'fa-thermometer'                         => 'f2c7',
		'fa-thermometer-0'                       => 'f2cb',
		'fa-thermometer-1'                       => 'f2ca',
		'fa-thermometer-2'                       => 'f2c9',
		'fa-thermometer-3'                       => 'f2c8',
		'fa-thermometer-4'                       => 'f2c7',
		'fa-thermometer-empty'                   => 'f2cb',
		'fa-thermometer-full'                    => 'f2c7',
		'fa-thermometer-half'                    => 'f2c9',
		'fa-thermometer-quarter'                 => 'f2ca',
		'fa-thermometer-three-quarters'          => 'f2c8',
		'fa-thumb-tack'                          => 'f08d',
		'fa-thumbs-down'                         => 'f165',
		'fa-thumbs-o-down'                       => 'f088',
		'fa-thumbs-o-up'                         => 'f087',
		'fa-thumbs-up'                           => 'f164',
		'fa-ticket'                              => 'f145',
		'fa-times'                               => 'f00d',
		'fa-times-circle'                        => 'f057',
		'fa-times-circle-o'                      => 'f05c',
		'fa-times-rectangle'                     => 'f2d3',
		'fa-times-rectangle-o'                   => 'f2d4',
		'fa-tint'                                => 'f043',
		'fa-toggle-down'                         => 'f150',
		'fa-toggle-left'                         => 'f191',
		'fa-toggle-off'                          => 'f204',
		'fa-toggle-on'                           => 'f205',
		'fa-toggle-right'                        => 'f152',
		'fa-toggle-up'                           => 'f151',
		'fa-trademark'                           => 'f25c',
		'fa-train'                               => 'f238',
		'fa-transgender'                         => 'f224',
		'fa-transgender-alt'                     => 'f225',
		'fa-trash'                               => 'f1f8',
		'fa-trash-o'                             => 'f014',
		'fa-tree'                                => 'f1bb',
		'fa-trello'                              => 'f181',
		'fa-tripadvisor'                         => 'f262',
		'fa-trophy'                              => 'f091',
		'fa-truck'                               => 'f0d1',
		'fa-try'                                 => 'f195',
		'fa-tty'                                 => 'f1e4',
		'fa-tumblr'                              => 'f173',
		'fa-tumblr-square'                       => 'f174',
		'fa-turkish-lira'                        => 'f195',
		'fa-tv'                                  => 'f26c',
		'fa-twitch'                              => 'f1e8',
		'fa-twitter'                             => 'f099',
		'fa-twitter-square'                      => 'f081',
		'fa-umbrella'                            => 'f0e9',
		'fa-underline'                           => 'f0cd',
		'fa-undo'                                => 'f0e2',
		'fa-universal-access'                    => 'f29a',
		'fa-university'                          => 'f19c',
		'fa-unlink'                              => 'f127',
		'fa-unlock'                              => 'f09c',
		'fa-unlock-alt'                          => 'f13e',
		'fa-unsorted'                            => 'f0dc',
		'fa-upload'                              => 'f093',
		'fa-usb'                                 => 'f287',
		'fa-usd'                                 => 'f155',
		'fa-user'                                => 'f007',
		'fa-user-circle'                         => 'f2bd',
		'fa-user-circle-o'                       => 'f2be',
		'fa-user-md'                             => 'f0f0',
		'fa-user-o'                              => 'f2c0',
		'fa-user-plus'                           => 'f234',
		'fa-user-secret'                         => 'f21b',
		'fa-user-times'                          => 'f235',
		'fa-users'                               => 'f0c0',
		'fa-vcard'                               => 'f2bb',
		'fa-vcard-o'                             => 'f2bc',
		'fa-venus'                               => 'f221',
		'fa-venus-double'                        => 'f226',
		'fa-venus-mars'                          => 'f228',
		'fa-viacoin'                             => 'f237',
		'fa-viadeo'                              => 'f2a9',
		'fa-viadeo-square'                       => 'f2aa',
		'fa-video-camera'                        => 'f03d',
		'fa-vimeo'                               => 'f27d',
		'fa-vimeo-square'                        => 'f194',
		'fa-vine'                                => 'f1ca',
		'fa-vk'                                  => 'f189',
		'fa-volume-control-phone'                => 'f2a0',
		'fa-volume-down'                         => 'f027',
		'fa-volume-off'                          => 'f026',
		'fa-volume-up'                           => 'f028',
		'fa-warning'                             => 'f071',
		'fa-wechat'                              => 'f1d7',
		'fa-weibo'                               => 'f18a',
		'fa-weixin'                              => 'f1d7',
		'fa-whatsapp'                            => 'f232',
		'fa-wheelchair'                          => 'f193',
		'fa-wheelchair-alt'                      => 'f29b',
		'fa-wifi'                                => 'f1eb',
		'fa-wikipedia-w'                         => 'f266',
		'fa-window-close'                        => 'f2d3',
		'fa-window-close-o'                      => 'f2d4',
		'fa-window-maximize'                     => 'f2d0',
		'fa-window-minimize'                     => 'f2d1',
		'fa-window-restore'                      => 'f2d2',
		'fa-windows'                             => 'f17a',
		'fa-won'                                 => 'f159',
		'fa-wordpress'                           => 'f19a',
		'fa-wpbeginner'                          => 'f297',
		'fa-wpexplorer'                          => 'f2de',
		'fa-wpforms'                             => 'f298',
		'fa-wrench'                              => 'f0ad',
		'fa-xing'                                => 'f168',
		'fa-xing-square'                         => 'f169',
		'fa-y-combinator'                        => 'f23b',
		'fa-y-combinator-square'                 => 'f1d4',
		'fa-yahoo'                               => 'f19e',
		'fa-yc'                                  => 'f23b',
		'fa-yc-square'                           => 'f1d4',
		'fa-yelp'                                => 'f1e9',
		'fa-yen'                                 => 'f157',
		'fa-yoast'                               => 'f2b1',
		'fa-youtube'                             => 'f167',
		'fa-youtube-play'                        => 'f16a',
		'fa-youtube-square'                      => 'f166'
	];

	return apply_filters( 'strangebrew/font_icons', $icons );
}

/**
 * Returns an array of header icons for use with the 'header_icon' theme option.
 * Returns an array of font icon class names (key) and HTML characters (value).  By default,
 * this uses Font Awesome.  However, devs can plug in their preferred icon set.
 *
 * @since  0.9.0
 * @access public
 * @return array
 */

function get_font_icons_text() {

    $icons = array( '' => '' );
    
	foreach ( get_font_icons() as $class => $code )
		$icons[ $class ] = "&#x{$code};";
    
    return $icons;
}

/**
 * Returns the logo icon.
 *
 * @since  0.9.0
 * @access public
 * @return string
 */

function get_logo_icon() {

	$icon = get_theme_mod( 'header_icon' );

	return isset( $icon ) ? $icon : null;
}

/**
 * Returns the logo icon html.
 *
 * @since  0.9.0
 * @access public
 * @return string
 */

function get_logo_icon_html() {

	$icon = get_logo_icon();

	if ( empty( $icon ) )
		return;
	
	return sprintf( 
		'<a href="%1$s" class="app-header__icon-link" rel="home" itemprop="url">%2$s</a>',
		   esc_url( home_url( '/' ) ),
		   get_font_icon_html( $icon )
	);
}

/**
 * Outputs the logo icon html.
 *
 * @since  0.9.0
 * @access public
 * @return void
 */

function display_logo_icon() {

	echo get_logo_icon_html(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Maps the post format or type to a specific font icon class.
 * 
 * @since  0.9.0
 * @access public
 * @return array
 */
function map_featured_icons() {

	$icons = [

		// Post type.
		'attachment'        => 'fa-picture-o',
		'download'          => 'fa-download',
		'page'              => 'fa-file-text-o',
        'portfolio_project' => 'fa-picture-o',
        
		// Post format.
		'aside'             => 'fa-paperclip',
		'audio'             => 'fa-volume-up',
		'chat'              => 'fa-comments',
		'gallery'           => 'fa-picture-o',
		'image'             => 'fa-camera-retro',
		'link'              => 'fa-link',
		'quote'             => 'fa-quote-right',
		'standard'          => 'fa-pencil',
		'status'            => 'fa-map-marker',
		'video'             => 'fa-play-circle'
	];
    
	// Developers, array key can be `{$type}-{$format}`, `{$format}`, or `{$type}`.
	return apply_filters( 'strangebrew/map_featured_icons', $icons );
}
