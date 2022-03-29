<?php

namespace App\Controllers;

class FontAwaysome extends BaseController
{
    public static function getAllIcons()
    {
        $faicons =
    [
        "fa-align-left" => "&#xf036;",
        "fa-align-right" => "&#xf038;",
        "fa-amazon" => "&#xf270;",
        "fa-ambulance" => "&#xf0f9;",
        "fa-anchor" => "&#xf13d;",
        "fa-android" => "&#xf17b;",
        "fa-angellist" => "&#xf209;",
        "fa-angle-double-down" => "&#xf103;",
        "fa-angle-double-left" => "&#xf100;",
        "fa-angle-double-right" => "&#xf101;",
        "fa-angle-double-up" => "&#xf102;",
        "fa-angle-left" => "&#xf104;",

        "fa-angle-right" => "&#xf105;",
        "fa-angle-up" => "&#xf106;",
        "fa-apple" => "&#xf179;",
        "fa-archive" => "&#xf187;",
        "fa-area-chart" => "&#xf1fe;",
        "fa-arrow-circle-down" => "&#xf0ab;",
        "fa-arrow-circle-left" => "&#xf0a8;",
        "fa-arrow-circle-o-down" => "&#xf01a;",
        "fa-arrow-circle-o-left" => "&#xf190;",
        "fa-arrow-circle-o-right" => "&#xf18e;",
        "fa-arrow-circle-o-up" => "&#xf01b;",
        "fa-arrow-circle-right" => "&#xf0a9;",
        "fa-arrow-circle-up" => "&#xf0aa;",
        "fa-arrow-down" => "&#xf063;",

        "fa-arrow-left" => "&#xf060;",

        "fa-arrow-right" => "&#xf061;",

        "fa-arrow-up" => "&#xf062;",
        "fa-arrows" => "&#xf047;",
        "fa-arrows-alt" => "&#xf0b2;",

        "fa-arrows-h" => "&#xf07e;",
        "fa-arrows-v" => "&#xf07d;",
        "fa-asterisk" => "&#xf069;",
        "fa-at" => "&#xf1fa;",
        "fa-automobile" => "&#xf1b9;",

        "fa-backward" => "&#xf04a;",

        "fa-balance-scale" => "&#xf24e;",

        "fa-ban" => "&#xf05e;",
        "fa-bank" => "&#xf19c;",
        "fa-bar-chart" => "&#xf080;",

        "fa-bar-chart-o" => "&#xf080;",
        "fa-battery-full" => "&#xf240;",
        "fa-beer" => "&#xf0fc;",
        "fa-behance" => "&#xf1b4;",

        "fa-behance-square" => "&#xf1b5;",
        "fa-bell" => "&#xf0f3;",
        "fa-bell-o" => "&#xf0a2;",

        "fa-bell-slash" => "&#xf1f6;",

        "fa-bell-slash-o" => "&#xf1f7;",

        "fa-bicycle" => "&#xf206;",

        "fa-binoculars" => "&#xf1e5;",

        "fa-birthday-cake" => "&#xf1fd;",

        "fa-bitbucket" => "&#xf171;",

        "fa-bitbucket-square" => "&#xf172;",

        "fa-bitcoin" => "&#xf15a;",

        "fa-black-tie" => "&#xf27e;",

        "fa-bold" => "&#xf032;",
        "fa-bolt" => "&#xf0e7;",
        "fa-bomb" => "&#xf1e2;",
        "fa-book" => "&#xf02d;",
        "fa-bookmark" => "&#xf02e;",

        "fa-bookmark-o" => "&#xf097;",

        "fa-briefcase" => "&#xf0b1;",

        "fa-btc" => "&#xf15a;",
        "fa-bug" => "&#xf188;",
        "fa-building" => "&#xf1ad;",

        "fa-building-o" => "&#xf0f7;",

        "fa-bullhorn" => "&#xf0a1;",

        "fa-bullseye" => "&#xf140;",

        "fa-bus" => "&#xf207;",
        "fa-cab" => "&#xf1ba;",
        "fa-calendar" => "&#xf073;",

        "fa-camera" => "&#xf030;",

        "fa-car" => "&#xf1b9;",
        "fa-caret-up" => "&#xf0d8;",

        "fa-cart-plus" => "&#xf217;",

        "fa-cc" => "&#xf20a;",
        "fa-cc-amex" => "&#xf1f3;",

        "fa-cc-jcb" => "&#xf24b;",

        "fa-cc-paypal" => "&#xf1f4;",

        "fa-cc-stripe" => "&#xf1f5;",

        "fa-cc-visa" => "&#xf1f0;",

        "fa-chain" => "&#xf0c1;",
        "fa-check" => "&#xf00c;",
        "fa-chevron-left" => "&#xf053;",

        "fa-chevron-right" => "&#xf054;",

        "fa-chevron-up" => "&#xf077;",

        "fa-child" => "&#xf1ae;",
        "fa-chrome" => "&#xf268;",

        "fa-circle" => "&#xf111;",

        "fa-circle-o" => "&#xf10c;",

        "fa-circle-o-notch" => "&#xf1ce;",

        "fa-circle-thin" => "&#xf1db;",

        "fa-clipboard" => "&#xf0ea;",

        "fa-clock-o" => "&#xf017;",

        "fa-clone" => "&#xf24d;",
        "fa-close" => "&#xf00d;",
        "fa-cloud" => "&#xf0c2;",
        "fa-cloud-download" => "&#xf0ed;",

        "fa-cloud-upload" => "&#xf0ee;",

        "fa-cny" => "&#xf157;",
        "fa-code" => "&#xf121;",
        "fa-code-fork" => "&#xf126;",

        "fa-codepen" => "&#xf1cb;",

        "fa-coffee" => "&#xf0f4;",

        "fa-cog" => "&#xf013;",
        "fa-cogs" => "&#xf085;",
        "fa-columns" => "&#xf0db;",
        "fa-comment" => "&#xf075;",
        "fa-comment-o" => "&#xf0e5;",
        "fa-commenting" => "&#xf27a;",
        "fa-commenting-o" => "&#xf27b;",
        "fa-comments" => "&#xf086;",
        "fa-comments-o" => "&#xf0e6;",
        "fa-compass" => "&#xf14e;",
        "fa-compress" => "&#xf066;",
        "fa-connectdevelop" => "&#xf20e;",
        "fa-contao" => "&#xf26d;",
        "fa-copy" => "&#xf0c5;",
        "fa-copyright" => "&#xf1f9;",
        "fa-creative-commons" => "&#xf25e;",
        "fa-credit-card" => "&#xf09d;",
        "fa-crop" => "&#xf125;",
        "fa-crosshairs" => "&#xf05b;",
        "fa-css3" => "&#xf13c;",
        "fa-cube" => "&#xf1b2;",
        "fa-cubes" => "&#xf1b3;",
        "fa-cut" => "&#xf0c4;",
        "fa-cutlery" => "&#xf0f5;",
        "fa-dashboard" => "&#xf0e4;",
        "fa-dashcube" => "&#xf210;",
        "fa-database" => "&#xf1c0;",
        "fa-dedent" => "&#xf03b;",
        "fa-delicious" => "&#xf1a5;",
        "fa-desktop" => "&#xf108;",
        "fa-deviantart" => "&#xf1bd;",
        "fa-diamond" => "&#xf219;",
        "fa-digg" => "&#xf1a6;",
        "fa-dollar" => "&#xf155;",
        "fa-download" => "&#xf019;",
        "fa-dribbble" => "&#xf17d;",
        "fa-dropbox" => "&#xf16b;",
        "fa-drupal" => "&#xf1a9;",
        "fa-edit" => "&#xf044;",
        "fa-eject" => "&#xf052;",
        "fa-ellipsis-h" => "&#xf141;",
        "fa-ellipsis-v" => "&#xf142;",
        "fa-empire" => "&#xf1d1;",
        "fa-envelope" => "&#xf0e0;",
        "fa-envelope-o" => "&#xf003;",
        "fa-eur" => "&#xf153;",
        "fa-euro" => "&#xf153;",
        "fa-exchange" => "&#xf0ec;",
        "fa-exclamation" => "&#xf12a;",
        "fa-exclamation-circle" => "&#xf06a;",
        "fa-exclamation-triangle" => "&#xf071;",
        "fa-expand" => "&#xf065;",
        "fa-expeditedssl" => "&#xf23e;",
        "fa-external-link" => "&#xf08e;",
        "fa-external-link-square" => "&#xf14c;",
        "fa-eye" => "&#xf06e;",
        "fa-eye-slash" => "&#xf070;",
        "fa-eyedropper" => "&#xf1fb;",
        "fa-facebook" => "&#xf09a;",
        "fa-facebook-f" => "&#xf09a;",
        "fa-facebook-official" => "&#xf230;",
        "fa-facebook-square" => "&#xf082;",
        "fa-fast-backward" => "&#xf049;",
        "fa-fast-forward" => "&#xf050;",

        "fa-fax" => "&#xf1ac;",
        "fa-feed" => "&#xf09e;",
        "fa-female" => "&#xf182;",

        "fa-fighter-jet" => "&#xf0fb;",
        "fa-file" => "&#xf15b;",
        "fa-file-archive-o" => "&#xf1c6;",
        "fa-file-audio-o" => "&#xf1c7;",
        "fa-file-code-o" => "&#xf1c9;",
        "fa-file-excel-o" => "&#xf1c3;",
        "fa-file-image-o" => "&#xf1c5;",
        "fa-file-movie-o" => "&#xf1c8;",
        "fa-file-o" => "&#xf016;",
        "fa-file-pdf-o" => "&#xf1c1;",
        "fa-file-photo-o" => "&#xf1c5;",
        "fa-file-picture-o" => "&#xf1c5;",
        "fa-file-powerpoint-o" => "&#xf1c4;",
        "fa-file-sound-o" => "&#xf1c7;",
        "fa-file-text" => "&#xf15c;",
        "fa-file-text-o" => "&#xf0f6;",
        "fa-file-video-o" => "&#xf1c8;",
        "fa-file-word-o" => "&#xf1c2;",
        "fa-file-zip-o" => "&#xf1c6;",
        "fa-files-o" => "&#xf0c5;",
        "fa-film" => "&#xf008;",
        "fa-filter" => "&#xf0b0;",
        "fa-fire" => "&#xf06d;",
        "fa-fire-extinguisher" => "&#xf134;",
        "fa-firefox" => "&#xf269;",

        "fa-flag" => "&#xf024;",
        "fa-flag-checkered" => "&#xf11e;",
        "fa-flag-o" => "&#xf11d;",

        "fa-flash" => "&#xf0e7;",
        "fa-flask" => "&#xf0c3;",
        "fa-flickr" => "&#xf16e;",

        "fa-floppy-o" => "&#xf0c7;",

        "fa-folder" => "&#xf07b;",

        "fa-folder-o" => "&#xf114;",

        "fa-folder-open" => "&#xf07c;",

        "fa-folder-open-o" => "&#xf115;",

        "fa-font" => "&#xf031;",
        "fa-fonticons" => "&#xf280;",

        "fa-forumbee" => "&#xf211;",

        "fa-forward" => "&#xf04e;",

        "fa-foursquare" => "&#xf180;",

        "fa-frown-o" => "&#xf119;",
        "fa-futbol-o" => "&#xf1e3;",

        "fa-gamepad" => "&#xf11b;",

        "fa-gavel" => "&#xf0e3;",
        "fa-gbp" => "&#xf154;",
        "fa-ge" => "&#xf1d1;",
        "fa-gear" => "&#xf013;",
        "fa-gears" => "&#xf085;",
        "fa-genderless" => "&#xf22d;",

        "fa-get-pocket" => "&#xf265;",

        "fa-gg" => "&#xf260;",
        "fa-gg-circle" => "&#xf261;",

        "fa-gift" => "&#xf06b;",
        "fa-git" => "&#xf1d3;",
        "fa-git-square" => "&#xf1d2;",
        "fa-github" => "&#xf09b;",
        "fa-github-alt" => "&#xf113;",
        "fa-github-square" => "&#xf092;",
        "fa-gittip" => "&#xf184;",
        "fa-glass" => "&#xf000;",
        "fa-globe" => "&#xf0ac;",
        "fa-google" => "&#xf1a0;",

        "fa-google-plus" => "&#xf0d5;",

        "fa-google-plus-square" => "&#xf0d4;",

        "fa-google-wallet" => "&#xf1ee;",

        "fa-graduation-cap" => "&#xf19d;",

        "fa-gratipay" => "&#xf184;",

        "fa-group" => "&#xf0c0;",
        "fa-h-square" => "&#xf0fd;",

        "fa-hacker-news" => "&#xf1d4;",

        "fa-hand-grab-o" => "&#xf255;",

        "fa-hand-lizard-o" => "&#xf258;",

        "fa-hand-o-down" => "&#xf0a7;",

        "fa-hand-o-left" => "&#xf0a5;",

        "fa-hand-o-right" => "&#xf0a4;",

        "fa-hand-o-up" => "&#xf0a6;",

        "fa-hand-paper-o" => "&#xf256;",

        "fa-hand-peace-o" => "&#xf25b;",

        "fa-hand-pointer-o" => "&#xf25a;",

        "fa-hand-rock-o" => "&#xf255;",

        "fa-hand-scissors-o" => "&#xf257;",

        "fa-hand-spock-o" => "&#xf259;",

        "fa-hand-stop-o" => "&#xf256;",

        "fa-hdd-o" => "&#xf0a0;",
        "fa-header" => "&#xf1dc;",

        "fa-headphones" => "&#xf025;",

        "fa-heart" => "&#xf004;",
        "fa-heart-o" => "&#xf08a;",

        "fa-heartbeat" => "&#xf21e;",

        "fa-history" => "&#xf1da;",

        "fa-home" => "&#xf015;",
        "fa-hospital-o" => "&#xf0f8;",

        "fa-hotel" => "&#xf236;",
        "fa-hourglass" => "&#xf254;",

        "fa-hourglass-1" => "&#xf251;",

        "fa-hourglass-2" => "&#xf252;",

        "fa-hourglass-3" => "&#xf253;",

        "fa-hourglass-end" => "&#xf253;",

        "fa-hourglass-half" => "&#xf252;",

        "fa-hourglass-o" => "&#xf250;",

        "fa-hourglass-start" => "&#xf251;",

        "fa-houzz" => "&#xf27c;",
        "fa-html5" => "&#xf13b;",
        "fa-i-cursor" => "&#xf246;",

        "fa-ils" => "&#xf20b;",
        "fa-image" => "&#xf03e;",
        "fa-inbox" => "&#xf01c;",
        "fa-indent" => "&#xf03c;",

        "fa-industry" => "&#xf275;",

        "fa-info" => "&#xf129;",
        "fa-info-circle" => "&#xf05a;",

        "fa-inr" => "&#xf156;",
        "fa-instagram" => "&#xf16d;",
        "fa-institution" => "&#xf19c;",

        "fa-internet-explorer" => "&#xf26b;",
        "fa-intersex" => "&#xf224;",
        "fa-ioxhost" => "&#xf208;",
        "fa-italic" => "&#xf033;",
        "fa-joomla" => "&#xf1aa;",
        "fa-jpy" => "&#xf157;",
        "fa-jsfiddle" => "&#xf1cc;",
        "fa-key" => "&#xf084;",
        "fa-keyboard-o" => "&#xf11c;",

        "fa-krw" => "&#xf159;",
        "fa-language" => "&#xf1ab;",
        "fa-laptop" => "&#xf109;",
        "fa-lastfm" => "&#xf202;",
        "fa-lastfm-square" => "&#xf203;",

        "fa-leaf" => "&#xf06c;",
        "fa-leanpub" => "&#xf212;",
        "fa-legal" => "&#xf0e3;",
        "fa-lemon-o" => "&#xf094;",
        "fa-level-down" => "&#xf149;",

        "fa-level-up" => "&#xf148;",
        "fa-life-bouy" => "&#xf1cd;",
        "fa-life-buoy" => "&#xf1cd;",
        "fa-life-ring" => "&#xf1cd;",
        "fa-life-saver" => "&#xf1cd;",

        "fa-lightbulb-o" => "&#xf0eb;",
        "fa-line-chart" => "&#xf201;",
        "fa-link" => "&#xf0c1;", "fa-linkedin" => "&#xf0e1;",
        "fa-linkedin-square" => "&#xf08c;",

        "fa-linux" => "&#xf17c;", "fa-list" => "&#xf03a;", "fa-list-alt" => "&#xf022;",
        "fa-list-ol" => "&#xf0cb;",
        "fa-list-ul" => "&#xf0ca;",
        "fa-location-arrow" => "&#xf124;",

        "fa-lock" => "&#xf023;", "fa-long-arrow-down" => "&#xf175;",

        "fa-long-arrow-left" => "&#xf177;",

        "fa-long-arrow-right" => "&#xf178;",

        "fa-long-arrow-up" => "&#xf176;",

        "fa-magic" => "&#xf0d0;",
        "fa-magnet" => "&#xf076;",
        "fa-mars-stroke-v" => "&#xf22a;",
        "fa-maxcdn" => "&#xf136;",
        "fa-meanpath" => "&#xf20c;",
        "fa-medium" => "&#xf23a;",
        "fa-medkit" => "&#xf0fa;",
        "fa-meh-o" => "&#xf11a;",
        "fa-mercury" => "&#xf223;",
        "fa-microphone" => "&#xf130;",
        "fa-mobile" => "&#xf10b;",
        "fa-motorcycle" => "&#xf21c;",
        "fa-mouse-pointer" => "&#xf245;",
        "fa-music" => "&#xf001;",
        "fa-navicon" => "&#xf0c9;",
        "fa-neuter" => "&#xf22c;",
        "fa-newspaper-o" => "&#xf1ea;",
        "fa-opencart" => "&#xf23d;",
        "fa-openid" => "&#xf19b;",
        "fa-opera" => "&#xf26a;",
        "fa-outdent" => "&#xf03b;",
        "fa-pagelines" => "&#xf18c;",
        "fa-paper-plane-o" => "&#xf1d9;",
        "fa-paperclip" => "&#xf0c6;",
        "fa-paragraph" => "&#xf1dd;",
        "fa-paste" => "&#xf0ea;",
        "fa-pause" => "&#xf04c;",
        "fa-paw" => "&#xf1b0;",
        "fa-paypal" => "&#xf1ed;",
        "fa-pencil" => "&#xf040;",
        "fa-pencil-square-o" => "&#xf044;",
        "fa-phone" => "&#xf095;",
        "fa-photo" => "&#xf03e;",
        "fa-picture-o" => "&#xf03e;",
        "fa-pie-chart" => "&#xf200;",
        "fa-pied-piper" => "&#xf1a7;",
        "fa-pied-piper-alt" => "&#xf1a8;",
        "fa-pinterest" => "&#xf0d2;",
        "fa-pinterest-p" => "&#xf231;",
        "fa-pinterest-square" => "&#xf0d3;",
        "fa-plane" => "&#xf072;",
        "fa-play" => "&#xf04b;",
        "fa-play-circle" => "&#xf144;",

        "fa-play-circle-o" => "&#xf01d;",

        "fa-plug" => "&#xf1e6;",
        "fa-plus" => "&#xf067;",
        "fa-plus-circle" => "&#xf055;",

        "fa-plus-square" => "&#xf0fe;",

        "fa-plus-square-o" => "&#xf196;",

        "fa-power-off" => "&#xf011;",

        "fa-print" => "&#xf02f;",
        "fa-puzzle-piece" => "&#xf12e;",
        "fa-qq" => "&#xf1d6;",
        "fa-qrcode" => "&#xf029;",
        "fa-question" => "&#xf128;",

        "fa-question-circle" => "&#xf059;",
        "fa-quote-left" => "&#xf10d;",
        "fa-quote-right" => "&#xf10e;",

        "fa-ra" => "&#xf1d0;",
        "fa-random" => "&#xf074;",

        "fa-rebel" => "&#xf1d0;",
        "fa-recycle" => "&#xf1b8;",

        "fa-reddit" => "&#xf1a1;",

        "fa-reddit-square" => "&#xf1a2;",

        "fa-refresh" => "&#xf021;",

        "fa-registered" => "&#xf25d;",
        "fa-remove" => "&#xf00d;",

        "fa-renren" => "&#xf18b;",

        "fa-reorder" => "&#xf0c9;",

        "fa-repeat" => "&#xf01e;",

        "fa-reply" => "&#xf112;",
        "fa-reply-all" => "&#xf122;",

        "fa-retweet" => "&#xf079;",

        "fa-rmb" => "&#xf157;",
        "fa-road" => "&#xf018;",
        "fa-rocket" => "&#xf135;",

        "fa-rotate-left" => "&#xf0e2;",

        "fa-rotate-right" => "&#xf01e;",

        "fa-rouble" => "&#xf158;",

        "fa-rss" => "&#xf09e;",
        "fa-rss-square" => "&#xf143;",

        "fa-rub" => "&#xf158;",
        "fa-ruble" => "&#xf158;",
        "fa-rupee" => "&#xf156;",
        "fa-safari" => "&#xf267;",

        "fa-sliders" => "&#xf1de;",

        "fa-slideshare" => "&#xf1e7;",

        "fa-smile-o" => "&#xf118;",

        "fa-sort-asc" => "&#xf0de;",

        "fa-sort-desc" => "&#xf0dd;",

        "fa-sort-down" => "&#xf0dd;",

        "fa-spinner" => "&#xf110;",

        "fa-spoon" => "&#xf1b1;",
        "fa-spotify" => "&#xf1bc;",

        "fa-square" => "&#xf0c8;",

        "fa-square-o" => "&#xf096;",

        "fa-star" => "&#xf005;",
        "fa-star-half" => "&#xf089;",

        "fa-stop" => "&#xf04d;",
        "fa-subscript" => "&#xf12c;",

        "fa-tablet" => "&#xf10a;",

        "fa-tachometer" => "&#xf0e4;",

        "fa-tag" => "&#xf02b;",
        "fa-tags" => "&#xf02c;",
    ];
    
    return $faicons;
    }
    
    public static function getAllFlaticons()
    {
        $flaticons=[
                "flaticon-html5"=>"&#xf100",
                "flaticon-quote-sign"=>"&#xf101",
                "flaticon-left-quote"=>"&#xf102",
                "flaticon-cup"=>"&#xf103",
                "flaticon-medicine"=>"&#xf104",
                "flaticon-hourglass"=>"&#xf105",
                "flaticon-buildings"=>"&#xf106",
                "flaticon-bus"=>"&#xf107",
                "flaticon-backpack"=>"&#xf108",
                "flaticon-light-bulb"=>"&#xf109",
                "flaticon-graduation-owl"=>"&#xf10a",
                "flaticon-music-player"=>"&#xf10b",
                "flaticon-flasks"=>"&#xf10c",
                "flaticon-ereader"=>"&#xf10d",
                "flaticon-write-board"=>"&#xf10e",
                "flaticon-jquery-sketch-symbol"=>"&#xf10f",
                "flaticon-open-book-top-view"=>"&#xf110",
                "flaticon-fax"=>"&#xf111",
                "flaticon-placeholder-outline"=>"&#xf112",
                "flaticon-drawing"=>"&#xf113",
                "flaticon-jewel"=>"&#xf114",
                "flaticon-joomla-logo"=>"&#xf115",
                "flaticon-tutorial"=>"&#xf116",
                "flaticon-wordpress-logo"=>"&#xf117",
                "flaticon-css-3-logo"=>"&#xf118",
                "flaticon-php"=>"&#xf119",
                "flaticon-squares-1"=>"&#xf11a",
                "flaticon-squares"=>"&#xf11b",
                "flaticon-adobe-photoshop"=>"&#xf11c",
                "flaticon-book"=>"&#xf11d",
                "flaticon-tags-outline"=>"&#xf11e",
                "flaticon-share"=>"&#xf11f",
                "flaticon-pen"=>"&#xf120",
                "flaticon-signs"=>"&#xf121",
                "flaticon-search"=>"&#xf122",
                "flaticon-shopping-cart"=>"&#xf123",
                "flaticon-like-1"=>"&#xf124",
                "flaticon-back"=>"&#xf125",
                "flaticon-message"=>"&#xf126",
                "flaticon-smartphone"=>"&#xf127",
                "flaticon-chat"=>"&#xf128",
                "flaticon-calendar"=>"&#xf129",
                "flaticon-like"=>"&#xf12a",
                "flaticon-expand"=>"&#xf12b",
                "flaticon-people"=>"&#xf12c",
                "flaticon-phone-call"=>"&#xf12d",
                "flaticon-student"=>"&#xf12e",
                "flaticon-symbols"=>"&#xf12f",
                "flaticon-line-chart"=>"&#xf130",
                "flaticon-world"=>"&#xf131"
                ];
        return $flaticons;
    }
    public static function getAllGlyphicons()
    {
        $glyphicons=[
"glyphicon-asterisk" => "&#x2a",
"glyphicon-plus" => "&#x2b",
"glyphicon-euro" => "&#x20ac",
"glyphicon-minus" => "&#x2212",
"glyphicon-cloud" => "&#x2601",
"glyphicon-envelope" => "&#x2709",
"glyphicon-pencil" => "&#x270f",
"glyphicon-glass" => "&#xe001",
"glyphicon-music" => "&#xe002",
"glyphicon-search" => "&#xe003",
"glyphicon-heart" => "&#xe005",
"glyphicon-star" => "&#xe006",
"glyphicon-star-empty" => "&#xe007",
"glyphicon-user" => "&#xe008",
"glyphicon-film" => "&#xe009",
"glyphicon-th-large" => "&#xe010",
"glyphicon-th" => "&#xe011",
"glyphicon-th-list" => "&#xe012",
"glyphicon-ok" => "&#xe013",
"glyphicon-remove" => "&#xe014",
"glyphicon-zoom-in" => "&#xe015",
"glyphicon-zoom-out" => "&#xe016",
"glyphicon-off" => "&#xe017",
"glyphicon-signal" => "&#xe018",
"glyphicon-cog" => "&#xe019",
"glyphicon-trash" => "&#xe020",
"glyphicon-home" => "&#xe021",
"glyphicon-file" => "&#xe022",
"glyphicon-time" => "&#xe023",
"glyphicon-road" => "&#xe024",
"glyphicon-download-alt" => "&#xe025",
"glyphicon-download" => "&#xe026",
"glyphicon-upload" => "&#xe027",
"glyphicon-inbox" => "&#xe028",
"glyphicon-play-circle" => "&#xe029",
"glyphicon-repeat" => "&#xe030",
"glyphicon-refresh" => "&#xe031",
"glyphicon-list-alt" => "&#xe032",
"glyphicon-flag" => "&#xe034",
"glyphicon-headphones" => "&#xe035",
"glyphicon-volume-off" => "&#xe036",
"glyphicon-volume-down" => "&#xe037",
"glyphicon-volume-up" => "&#xe038",
"glyphicon-qrcode" => "&#xe039",
"glyphicon-barcode" => "&#xe040",
"glyphicon-tag" => "&#xe041",
"glyphicon-tags" => "&#xe042",
"glyphicon-book" => "&#xe043",
"glyphicon-print" => "&#xe045",
"glyphicon-font" => "&#xe047",
"glyphicon-bold" => "&#xe048",
"glyphicon-italic" => "&#xe049",
"glyphicon-text-height" => "&#xe050",
"glyphicon-text-width" => "&#xe051",
"glyphicon-align-left" => "&#xe052",
"glyphicon-align-center" => "&#xe053",
"glyphicon-align-right" => "&#xe054",
"glyphicon-align-justify" => "&#xe055",
"glyphicon-list" => "&#xe056",
"glyphicon-indent-left" => "&#xe057",
"glyphicon-indent-right" => "&#xe058",
"glyphicon-facetime-video" => "&#xe059",
"glyphicon-picture" => "&#xe060",
"glyphicon-map-marker" => "&#xe062",
"glyphicon-adjust" => "&#xe063",
"glyphicon-tint" => "&#xe064",
"glyphicon-edit" => "&#xe065",
"glyphicon-share" => "&#xe066",
"glyphicon-check" => "&#xe067",
"glyphicon-move" => "&#xe068",
"glyphicon-step-backward" => "&#xe069",
"glyphicon-fast-backward" => "&#xe070",
"glyphicon-backward" => "&#xe071",
"glyphicon-play" => "&#xe072",
"glyphicon-pause" => "&#xe073",
"glyphicon-stop" => "&#xe074",
"glyphicon-forward" => "&#xe075",
"glyphicon-fast-forward" => "&#xe076",
"glyphicon-step-forward" => "&#xe077",
"glyphicon-eject" => "&#xe078",
"glyphicon-chevron-left" => "&#xe079",
"glyphicon-chevron-right" => "&#xe080",
"glyphicon-plus-sign" => "&#xe081",
"glyphicon-minus-sign" => "&#xe082",
"glyphicon-remove-sign" => "&#xe083",
"glyphicon-ok-sign" => "&#xe084",
"glyphicon-question-sign" => "&#xe085",
"glyphicon-info-sign" => "&#xe086",
"glyphicon-screenshot" => "&#xe087",
"glyphicon-remove-circle" => "&#xe088",
"glyphicon-ok-circle" => "&#xe089",
"glyphicon-ban-circle" => "&#xe090",
"glyphicon-arrow-left" => "&#xe091",
"glyphicon-arrow-right" => "&#xe092",
"glyphicon-arrow-up" => "&#xe093",
"glyphicon-arrow-down" => "&#xe094",
"glyphicon-share-alt" => "&#xe095",
"glyphicon-resize-full" => "&#xe096",
"glyphicon-resize-small" => "&#xe097",
"glyphicon-exclamation-sign" => "&#xe101",
"glyphicon-gift" => "&#xe102",
"glyphicon-leaf" => "&#xe103",
"glyphicon-eye-open" => "&#xe105",
"glyphicon-eye-close" => "&#xe106",
"glyphicon-warning-sign" => "&#xe107",
"glyphicon-plane" => "&#xe108",
"glyphicon-random" => "&#xe110",
"glyphicon-comment" => "&#xe111",
"glyphicon-magnet" => "&#xe112",
"glyphicon-chevron-up" => "&#xe113",
"glyphicon-chevron-down" => "&#xe114",
"glyphicon-retweet" => "&#xe115",
"glyphicon-shopping-cart" => "&#xe116",
"glyphicon-folder-close" => "&#xe117",
"glyphicon-folder-open" => "&#xe118",
"glyphicon-resize-vertical" => "&#xe119",
"glyphicon-resize-horizontal" => "&#xe120",
"glyphicon-hdd" => "&#xe121",
"glyphicon-bullhorn" => "&#xe122",
"glyphicon-certificate" => "&#xe124",
"glyphicon-thumbs-up" => "&#xe125",
"glyphicon-thumbs-down" => "&#xe126",
"glyphicon-hand-right" => "&#xe127",
"glyphicon-hand-left" => "&#xe128",
"glyphicon-hand-up" => "&#xe129",
"glyphicon-hand-down" => "&#xe130",
"glyphicon-circle-arrow-right" => "&#xe131",
"glyphicon-circle-arrow-left" => "&#xe132",
"glyphicon-circle-arrow-up" => "&#xe133",
"glyphicon-circle-arrow-down" => "&#xe134",
"glyphicon-globe" => "&#xe135",
"glyphicon-tasks" => "&#xe137",
"glyphicon-filter" => "&#xe138",
"glyphicon-fullscreen" => "&#xe140",
"glyphicon-dashboard" => "&#xe141",
"glyphicon-heart-empty" => "&#xe143",
"glyphicon-link" => "&#xe144",
"glyphicon-phone" => "&#xe145",
"glyphicon-usd" => "&#xe148",
"glyphicon-gbp" => "&#xe149",
"glyphicon-sort" => "&#xe150",
"glyphicon-sort-by-alphabet" => "&#xe151",
"glyphicon-sort-by-alphabet-alt" => "&#xe152",
"glyphicon-sort-by-order" => "&#xe153",
"glyphicon-sort-by-order-alt" => "&#xe154",
"glyphicon-sort-by-attributes" => "&#xe155",
"glyphicon-sort-by-attributes-alt" => "&#xe156",
"glyphicon-unchecked" => "&#xe157",
"glyphicon-expand" => "&#xe158",
"glyphicon-collapse-down" => "&#xe159",
"glyphicon-collapse-up" => "&#xe160",
"glyphicon-log-in" => "&#xe161",
"glyphicon-flash" => "&#xe162",
"glyphicon-log-out" => "&#xe163",
"glyphicon-new-window" => "&#xe164",
"glyphicon-record" => "&#xe165",
"glyphicon-save" => "&#xe166",
"glyphicon-open" => "&#xe167",
"glyphicon-saved" => "&#xe168",
"glyphicon-import" => "&#xe169",
"glyphicon-export" => "&#xe170",
"glyphicon-send" => "&#xe171",
"glyphicon-floppy-disk" => "&#xe172",
"glyphicon-floppy-saved" => "&#xe173",
"glyphicon-floppy-remove" => "&#xe174",
"glyphicon-floppy-save" => "&#xe175",
"glyphicon-floppy-open" => "&#xe176",
"glyphicon-credit-card" => "&#xe177",
"glyphicon-transfer" => "&#xe178",
"glyphicon-cutlery" => "&#xe179",
"glyphicon-header" => "&#xe180",
"glyphicon-compressed" => "&#xe181",
"glyphicon-earphone" => "&#xe182",
"glyphicon-phone-alt" => "&#xe183",
"glyphicon-tower" => "&#xe184",
"glyphicon-stats" => "&#xe185",
"glyphicon-sd-video" => "&#xe186",
"glyphicon-hd-video" => "&#xe187",
"glyphicon-subtitles" => "&#xe188",
"glyphicon-sound-stereo" => "&#xe189",
"glyphicon-sound-dolby" => "&#xe190",
"glyphicon-sound-5-1" => "&#xe191",
"glyphicon-sound-6-1" => "&#xe192",
"glyphicon-sound-7-1" => "&#xe193",
"glyphicon-copyright-mark" => "&#xe194",
"glyphicon-registration-mark" => "&#xe195",
"glyphicon-cloud-download" => "&#xe197",
"glyphicon-cloud-upload" => "&#xe198",
"glyphicon-tree-conifer" => "&#xe199",
"glyphicon-tree-deciduous" => "&#xe200",
"glyphicon-briefcase" => "&#x1f4bc",
"glyphicon-calendar" => "&#x1f4c5",
"glyphicon-pushpin" => "&#x1f4cc",
"glyphicon-paperclip" => "&#x1f4ce",
"glyphicon-camera" => "&#x1f4f7",
"glyphicon-lock" => "&#x1f512",
"glyphicon-bell" => "&#x1f514",
"glyphicon-bookmark" => "&#x1f516",
"glyphicon-fire" => "&#x1f525",
"glyphicon-wrench" => "&#x1f527",
];
return $glyphicons;
    }
}
