<?php

if ( !defined ( 'ABSPATH' ) ) {
    exit;
}

if ( !class_exists ( 'reduxSocialProfilesDefaults' ) ) {

    class reduxSocialProfilesDefaults {

        public static function get_social_media_defaults () {
            $defaults = array(
                0 => array(
                    'id'    => 'adn',
                    'icon' => 'fa-adn',
                    'enabled' => false,
                    'name' => __ ( 'ADN', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 0,
                ),
                1 => array(
                    'id'    => 'android',
                    'icon' => 'fa-android',
                    'enabled' => false,
                    'name' => __ ( 'Android', 'ekko' ),
                    'background' => '',
                    'color' => '#A4C639',
                    'url' => '',
                    'order' => 1,
                ),
                2 => array(
                    'id'    => 'apple',
                    'icon' => 'fa-apple',
                    'enabled' => false,
                    'name' => __ ( 'Apple', 'ekko' ),
                    'style' => '',
                    'background' => '',
                    'color' => '#e4e4e5',
                    'url' => '',
                    'order' => 2,
                ),
                3 => array(
                    'id'    => 'behance',
                    'icon' => 'fa-behance',
                    'enabled' => false,
                    'name' => __ ( 'behance', 'ekko' ),
                    'background' => '',
                    'color' => '#1769ff',
                    'url' => '',
                    'order' => 3,
                ),
                4 => array(
                    'id'    => 'behance-square',
                    'icon' => 'fa-behance-square',
                    'enabled' => false,
                    'name' => __ ( 'behance square', 'ekko' ),
                    'background' => '',
                    'color' => '#1769ff',
                    'url' => '',
                    'order' => 4,
                ),
                5 => array(
                    'id'    => 'bitcoin',
                    'icon' => 'fa-btc',
                    'enabled' => false,
                    'name' => __ ( 'Bitcoin', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 5,
                ),
                6 => array(
                    'id'    => 'codepen',
                    'icon' => 'fa-codepen',
                    'enabled' => false,
                    'name' => __ ( 'CodePen', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 6,
                ),
                7 => array(
                    'id'    => 'css3',
                    'icon' => 'fa-css3',
                    'enabled' => false,
                    'name' => __ ( 'CSS3', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 7,
                ),
                8 => array(
                    'id'    => 'delicious',
                    'icon' => 'fa-delicious',
                    'enabled' => false,
                    'name' => __ ( 'Delicious', 'ekko' ),
                    'background' => '',
                    'color' => '#3399ff',
                    'url' => '',
                    'order' => 8,
                ),
                9 => array(
                    'id'    => 'deviantart',
                    'icon' => 'fa-deviantart',
                    'enabled' => false,
                    'name' => __ ( 'Deviantart', 'ekko' ),
                    'background' => '',
                    'color' => '#4e6252',
                    'url' => '',
                    'order' => 9,
                ),
                10 => array(
                    'id'    => 'digg',
                    'icon' => 'fa-digg',
                    'enabled' => false,
                    'name' => __ ( 'Digg', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 10,
                ),
                11 => array(
                    'id'    => 'dribbble',
                    'icon' => 'fa-dribbble',
                    'enabled' => false,
                    'name' => __ ( 'Dribbble', 'ekko' ),
                    'background' => '',
                    'color' => '#444444',
                    'url' => '',
                    'order' => 11,
                ),
                12 => array(
                    'id'    => 'dropbox',
                    'icon' => 'fa-dropbox',
                    'enabled' => false,
                    'name' => __ ( 'Dropbox', 'ekko' ),
                    'background' => '',
                    'color' => '#007ee5',
                    'url' => '',
                    'order' => 12,
                ),
                13 => array(
                    'id'    => 'drupal',
                    'icon' => 'fa-drupal',
                    'enabled' => false,
                    'name' => __ ( 'Drupal', 'ekko' ),
                    'background' => '',
                    'color' => '#0077c0',
                    'url' => '',
                    'order' => 13,
                ),
                14 => array(
                    'id'    => 'empire',
                    'icon' => 'fa-empire',
                    'enabled' => false,
                    'name' => __ ( 'Empire', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 14,
                ),
                15 => array(
                    'id'    => 'facebook-f',
                    'icon' => 'fa-facebook-f',
                    'enabled' => false,
                    'name' => __ ( 'Facebook', 'ekko' ),
                    'background' => '',
                    'color' => '#3b5998',
                    'url' => '',
                    'order' => 15,
                ),
                16 => array(
                    'id'    => 'facebook-square',
                    'icon' => 'fa-facebook-square',
                    'enabled' => false,
                    'name' => __ ( 'Facebook square', 'ekko' ),
                    'background' => '',
                    'color' => '#3b5998',
                    'url' => '',
                    'order' => 16,
                ),
                17 => array(
                    'id'    => 'flickr',
                    'icon' => 'fa-flickr',
                    'enabled' => false,
                    'name' => __ ( 'Flickr', 'ekko' ),
                    'background' => '',
                    'color' => '#0063dc',
                    'url' => '',
                    'order' => 17,
                ),
                18 => array(
                    'id'    => 'foursquare',
                    'icon' => 'fa-foursquare',
                    'enabled' => false,
                    'name' => __ ( 'FourSquare', 'ekko' ),
                    'background' => '',
                    'color' => '#0072b1',
                    'url' => '',
                    'order' => 18,
                ),
                19 => array(
                    'id'    => 'git',
                    'icon' => 'fa-git',
                    'enabled' => false,
                    'name' => __ ( 'git', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 19,
                ),
                20 => array(
                    'id'    => 'git-square',
                    'icon' => 'fa-git-square',
                    'enabled' => false,
                    'name' => __ ( 'git square', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 20,
                ),
                21 => array(
                    'id'    => 'github',
                    'icon' => 'fa-github',
                    'enabled' => false,
                    'name' => __ ( 'github', 'ekko' ),
                    'background' => '',
                    'color' => '#4183c4',
                    'url' => '',
                    'order' => 21,
                ),
                22 => array(
                    'id'    => 'github-alt',
                    'icon' => 'fa-github-alt',
                    'enabled' => false,
                    'name' => __ ( 'github alt', 'ekko' ),
                    'background' => '',
                    'color' => '#4183c4',
                    'url' => '',
                    'order' => 22,
                ),
                24 => array(
                    'id'    => 'gratipay',
                    'icon' => 'fa-gratipay',
                    'enabled' => false,
                    'name' => __ ( 'gratipay', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 24,
                ),
                25 => array(
                    'id'    => 'google',
                    'icon' => 'fa-google',
                    'enabled' => false,
                    'name' => __ ( 'Google', 'ekko' ),
                    'background' => '',
                    'color' => '#dd4b39',
                    'url' => '',
                    'order' => 25,
                ),
                26 => array(
                    'id'    => 'google-plus-square',
                    'icon' => 'fa-google-plus-square',
                    'enabled' => false,
                    'name' => __ ( 'Google Plus square', 'ekko' ),
                    'background' => '',
                    'color' => '#dd4b39',
                    'url' => '',
                    'order' => 26,
                ),
                27 => array(
                    'id'    => 'hacker-news',
                    'icon' => 'fa-hacker-news',
                    'enabled' => false,
                    'name' => __ ( 'Hacker News', 'ekko' ),
                    'background' => '',
                    'color' => '#ff6600',
                    'url' => '',
                    'order' => 27,
                ),
                28 => array(
                    'id'    => 'html5',
                    'icon' => 'fa-html5',
                    'enabled' => false,
                    'name' => __ ( 'HTML5', 'ekko' ),
                    'background' => '',
                    'color' => '#e34f26',
                    'url' => '',
                    'order' => 28,
                ),
                29 => array(
                    'id'    => 'instagram',
                    'icon' => 'fa-instagram',
                    'enabled' => false,
                    'name' => __ ( 'Instagram', 'ekko' ),
                    'background' => '',
                    'color' => '#3f729b',
                    'url' => '',
                    'order' => 29,
                ),
                30 => array(
                    'id'    => 'joomla',
                    'icon' => 'fa-joomla',
                    'enabled' => false,
                    'name' => __ ( 'Joomla', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 30,
                ),
                31 => array(
                    'id'    => 'jsfiddle',
                    'icon' => 'fa-jsfiddle',
                    'enabled' => false,
                    'name' => __ ( 'JS Fiddle', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 31,
                ),
                32 => array(
                    'id'    => 'linkedin-in',
                    'icon' => 'fa-linkedin-in',
                    'enabled' => false,
                    'name' => __ ( 'LinkedIn', 'ekko' ),
                    'background' => '',
                    'color' => '#0976b4',
                    'url' => '',
                    'order' => 32,
                ),
                33 => array(
                    'id'    => 'linkedin',
                    'icon' => 'fa-linkedin',
                    'enabled' => false,
                    'name' => __ ( 'LinkedIn square', 'ekko' ),
                    'background' => '',
                    'color' => '#0976b4',
                    'url' => '',
                    'order' => 33,
                ),
                34 => array(
                    'id'    => 'linux',
                    'icon' => 'fa-linux',
                    'enabled' => false,
                    'name' => __ ( 'Linux', 'ekko' ),
                    'background' => '',
                    'color' => '#333333',
                    'url' => '',
                    'order' => 34,
                ),
                35 => array(
                    'id'    => 'maxcdn',
                    'icon' => 'fa-maxcdn',
                    'enabled' => false,
                    'name' => __ ( 'MaxCDN', 'ekko' ),
                    'background' => '',
                    'color' => '#f8711e',
                    'url' => '',
                    'order' => 35,
                ),
                36 => array(
                    'id'    => 'openid',
                    'icon' => 'fa-openid',
                    'enabled' => false,
                    'name' => __ ( 'OpenID', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 36,
                ),
                37 => array(
                    'id'    => 'pagelines',
                    'icon' => 'fa-pagelines',
                    'enabled' => false,
                    'name' => __ ( 'Page Lines', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 37,
                ),
                38 => array(
                    'id'    => 'pied-piper',
                    'icon' => 'fa-pied-piper',
                    'enabled' => false,
                    'name' => __ ( 'Pied Piper', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 38,
                ),
                39 => array(
                    'id'    => 'pied-piper-alt',
                    'icon' => 'fa-pied-piper-alt',
                    'enabled' => false,
                    'name' => __ ( 'Pied Piper alt', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 39,
                ),
                40 => array(
                    'id'    => 'pinterest',
                    'icon' => 'fa-pinterest',
                    'enabled' => false,
                    'name' => __ ( 'Pinterest', 'ekko' ),
                    'background' => '',
                    'color' => '#1769ff',
                    'url' => '',
                    'order' => 40,
                ),
                41 => array(
                    'id'    => 'pinterest-square',
                    'icon' => 'fa-pinterest-square',
                    'enabled' => false,
                    'name' => __ ( 'Pinterest square', 'ekko' ),
                    'background' => '',
                    'color' => '#1769ff',
                    'url' => '',
                    'order' => 41,
                ),
                42 => array(
                    'id'    => 'qq',
                    'icon' => 'fa-qq',
                    'enabled' => false,
                    'name' => __ ( 'QQ', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 42,
                ),
                43 => array(
                    'id'    => 'rebel',
                    'icon' => 'fa-rebel',
                    'enabled' => false,
                    'name' => __ ( 'Rebel', 'ekko' ),
                    'background' => '',
                    'color' => '#517fa4',
                    'url' => '',
                    'order' => 43,
                ),
                44 => array(
                    'id'    => 'reddit',
                    'icon' => 'fa-reddit',
                    'enabled' => false,
                    'name' => __ ( 'Reddit', 'ekko' ),
                    'background' => '',
                    'color' => '#ff4500',
                    'url' => '',
                    'order' => 44,
                ),
                45 => array(
                    'id'    => 'reddit-square',
                    'icon' => 'fa-reddit-square',
                    'enabled' => false,
                    'name' => __ ( 'Reddit square', 'ekko' ),
                    'background' => '',
                    'color' => '#ff4500',
                    'url' => '',
                    'order' => 45,
                ),
                46 => array(
                    'id'    => 'renren',
                    'icon' => 'fa-renren',
                    'enabled' => false,
                    'name' => __ ( 'Ren Ren', 'ekko' ),
                    'background' => '',
                    'color' => '#007bb6',
                    'url' => '',
                    'order' => 46,
                ),
                47 => array(
                    'id'    => 'skype',
                    'icon' => 'fa-skype',
                    'enabled' => false,
                    'name' => __ ( 'Skype', 'ekko' ),
                    'background' => '',
                    'color' => '#00aff0',
                    'url' => '',
                    'order' => 47,
                ),
                48 => array(
                    'id'    => 'slack',
                    'icon' => 'fa-slack',
                    'enabled' => false,
                    'name' => __ ( 'Slack', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 48,
                ),
                49 => array(
                    'id'    => 'soundcloud',
                    'icon' => 'fa-soundcloud',
                    'enabled' => false,
                    'name' => __ ( 'Sound Cloud', 'ekko' ),
                    'background' => '',
                    'color' => '#f80',
                    'url' => '',
                    'order' => 49,
                ),
                50 => array(
                    'id'    => 'spotify',
                    'icon' => 'fa-spotify',
                    'enabled' => false,
                    'name' => __ ( 'Spotify', 'ekko' ),
                    'background' => '',
                    'color' => '#7ab800',
                    'url' => '',
                    'order' => 50,
                ),
                51 => array(
                    'id'    => 'stack-exchange',
                    'icon' => 'fa-stack-exchange',
                    'enabled' => false,
                    'name' => __ ( 'Stack Exchange', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 51,
                ),
                52 => array(
                    'id'    => 'stack-overflow',
                    'icon' => 'fa-stack-overflow',
                    'enabled' => false,
                    'name' => __ ( 'Stack Overflow', 'ekko' ),
                    'background' => '',
                    'color' => '#fe7a15',
                    'url' => '',
                    'order' => 52,
                ),
                53 => array(
                    'id'    => 'steam',
                    'icon' => 'fa-steam',
                    'enabled' => false,
                    'name' => __ ( 'Steam', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 53,
                ),
                54 => array(
                    'id'    => 'steam-square',
                    'icon' => 'fa-steam-square',
                    'enabled' => false,
                    'name' => __ ( 'Steam square', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 54,
                ),
                55 => array(
                    'id'    => 'stumbleupon',
                    'icon' => 'fa-stumbleupon',
                    'enabled' => false,
                    'name' => __ ( 'Stumble Upon', 'ekko' ),
                    'background' => '',
                    'color' => '#eb4924',
                    'url' => '',
                    'order' => 55,
                ),
                56 => array(
                    'id'    => 'stumbleupon-circle',
                    'icon' => 'fa-stumbleupon-circle',
                    'enabled' => false,
                    'name' => __ ( 'Stumble Upon circle', 'ekko' ),
                    'background' => '',
                    'color' => '#eb4924',
                    'url' => '',
                    'order' => 56,
                ),
                57 => array(
                    'id'    => 'tencent-weibo',
                    'icon' => 'fa-tencent-weibo',
                    'enabled' => false,
                    'name' => __ ( 'Tencent Weibo', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 57,
                ),
                58 => array(
                    'id'    => 'trello',
                    'icon' => 'fa-trello',
                    'enabled' => false,
                    'name' => __ ( 'Trello', 'ekko' ),
                    'background' => '',
                    'color' => '#256a92',
                    'url' => '',
                    'order' => 58,
                ),
                59 => array(
                    'id'    => 'twitter',
                    'icon' => 'fa-twitter',
                    'enabled' => false,
                    'name' => __ ( 'Twitter', 'ekko' ),
                    'background' => '',
                    'color' => '#55acee',
                    'url' => '',
                    'order' => 59,
                ),
                60 => array(
                    'id'    => 'twitter-square',
                    'icon' => 'fa-twitter-square',
                    'enabled' => false,
                    'name' => __ ( 'Twitter square', 'ekko' ),
                    'background' => '',
                    'color' => '#55acee',
                    'url' => '',
                    'order' => 60,
                ),
                61 => array(
                    'id'    => 'vimeo-square',
                    'icon' => 'fa-vimeo-square',
                    'enabled' => false,
                    'name' => __ ( 'Vimeo square', 'ekko' ),
                    'background' => '',
                    'color' => '#1ab7ea',
                    'url' => '',
                    'order' => 61,
                ),
                62 => array(
                    'id'    => 'vine',
                    'icon' => 'fa-vine',
                    'enabled' => false,
                    'name' => __ ( 'Vine', 'ekko' ),
                    'background' => '',
                    'color' => '#00b488',
                    'url' => '',
                    'order' => 62,
                ),
                63 => array(
                    'id'    => 'vk',
                    'icon' => 'fa-vk',
                    'enabled' => false,
                    'name' => __ ( 'VK', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 63,
                ),
                64 => array(
                    'id'    => 'weibo',
                    'icon' => 'fa-weibo',
                    'enabled' => false,
                    'name' => __ ( 'Weibo', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 64,
                ),
                65 => array(
                    'id'    => 'weixin',
                    'icon' => 'fa-weixin',
                    'enabled' => false,
                    'name' => __ ( 'Weixin', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 65,
                ),
                66 => array(
                    'id'    => 'windows',
                    'icon' => 'fa-windows',
                    'enabled' => false,
                    'name' => __ ( 'Windows', 'ekko' ),
                    'background' => '',
                    'color' => '#00bcf2',
                    'url' => '',
                    'order' => 66,
                ),
                67 => array(
                    'id'    => 'wordpress',
                    'icon' => 'fa-wordpress',
                    'enabled' => false,
                    'name' => __ ( 'WordPress', 'ekko' ),
                    'background' => '',
                    'color' => '#21759b',
                    'url' => '',
                    'order' => 67,
                ),
                68 => array(
                    'id'    => 'xing',
                    'icon' => 'fa-xing',
                    'enabled' => false,
                    'name' => __ ( 'Xing', 'ekko' ),
                    'background' => '',
                    'color' => '#026466',
                    'url' => '',
                    'order' => 68,
                ),
                69 => array(
                    'id'    => 'xing-square',
                    'icon' => 'fa-xing-square',
                    'enabled' => false,
                    'name' => __ ( 'Xing square', 'ekko' ),
                    'background' => '',
                    'color' => '#026466',
                    'url' => '',
                    'order' => 69,
                ),
                70 => array(
                    'id'    => 'yahoo',
                    'icon' => 'fa-yahoo',
                    'enabled' => false,
                    'name' => __ ( 'Yahoo', 'ekko' ),
                    'background' => '',
                    'color' => '#400191',
                    'url' => '',
                    'order' => 70,
                ),
                71 => array(
                    'id'    => 'yelp',
                    'icon' => 'fa-yelp',
                    'enabled' => false,
                    'name' => __ ( 'Yelp', 'ekko' ),
                    'background' => '',
                    'color' => '#C93C27',
                    'url' => '',
                    'order' => 71,
                ),
                72 => array(
                    'id'    => 'youtube',
                    'icon' => 'fa-youtube',
                    'enabled' => false,
                    'name' => __ ( 'YouTube', 'ekko' ),
                    'background' => '',
                    'color' => '#e52d27',
                    'url' => '',
                    'order' => 72,
                ),
                73 => array(
                    'id'    => 'youtube-square',
                    'icon' => 'fa-youtube-square',
                    'enabled' => false,
                    'name' => __ ( 'YouTube square', 'ekko' ),
                    'background' => '',
                    'color' => '#e52d27',
                    'url' => '',
                    'order' => 73,
                ),
                74 => array(
                    'id'    => 'whatsapp',
                    'icon' => 'fa-whatsapp',
                    'enabled' => false,
                    'name' => __ ( 'WhatsApp', 'ekko' ),
                    'background' => '',
                    'color' => '#25D366',
                    'url' => '',
                    'order' => 74,
                ),
                75 => array(
                    'id'    => 'telegram',
                    'icon' => 'fa-telegram',
                    'enabled' => false,
                    'name' => __ ( 'Telegram', 'ekko' ),
                    'background' => '',
                    'color' => '#0088cc',
                    'url' => '',
                    'order' => 75,
                ),
                76 => array(
                    'id'    => 'tripadvisor',
                    'icon' => 'fa-tripadvisor',
                    'enabled' => false,
                    'name' => __ ( 'TripAdvisor', 'ekko' ),
                    'background' => '',
                    'color' => '#00af87',
                    'url' => '',
                    'order' => 76,
                ),
                77 => array(
                    'id'    => 'medium',
                    'icon' => 'fa-medium',
                    'enabled' => false,
                    'name' => __ ( 'Medium Square', 'ekko' ),
                    'background' => '',
                    'color' => '#00ab6c',
                    'url' => '',
                    'order' => 77,
                ),
                78 => array(
                    'id'    => 'viber',
                    'icon' => 'fa-viber',
                    'enabled' => false,
                    'name' => __ ( 'Viber', 'ekko' ),
                    'background' => '',
                    'color' => '#7360f2',
                    'url' => '',
                    'order' => 78,
                ),
                79 => array(
                    'id'    => 'tumblr',
                    'icon' => 'fa-tumblr',
                    'enabled' => false,
                    'name' => __ ( 'Tumblr', 'ekko' ),
                    'background' => '',
                    'color' => '#35465c',
                    'url' => '',
                    'order' => 79,
                ),
                81 => array(
                    'id'    => 'tiktok',
                    'icon' => 'fa-tiktok',
                    'enabled' => false,
                    'name' => __ ( 'Tiktok', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 81,
                ),
                82 => array(
                    'id'    => 'airbnb',
                    'icon' => 'fa-airbnb',
                    'enabled' => false,
                    'name' => __ ( 'Airbnb', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 82,
                ),
                83 => array(
                    'id'    => 'amazon',
                    'icon' => 'fa-amazon',
                    'enabled' => false,
                    'name' => __ ( 'Amazon', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 83,
                ),
                84 => array(
                    'id'    => 'bandcamp',
                    'icon' => 'fa-bandcamp',
                    'enabled' => false,
                    'name' => __ ( 'Bandcamp', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 84,
                ),
                85 => array(
                    'id'    => 'blogger',
                    'icon' => 'fa-blogger',
                    'enabled' => false,
                    'name' => __ ( 'Blogger', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 85,
                ),
                86 => array(
                    'id'    => 'discord',
                    'icon' => 'fa-discord',
                    'enabled' => false,
                    'name' => __ ( 'Discord', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 86,
                ),
                87 => array(
                    'id'    => 'goodreads',
                    'icon' => 'fa-goodreads',
                    'enabled' => false,
                    'name' => __ ( 'Goodreads', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 87,
                ),
                88 => array(
                    'id'    => 'google-play',
                    'icon' => 'fa-google-play',
                    'enabled' => false,
                    'name' => __ ( 'Google Play', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 88,
                ),
                89 => array(
                    'id'    => 'houzz',
                    'icon' => 'fa-houzz',
                    'enabled' => false,
                    'name' => __ ( 'Houzz', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 89,
                ),
                90 => array(
                    'id'    => 'kickstarter',
                    'icon' => 'fa-kickstarter',
                    'enabled' => false,
                    'name' => __ ( 'Kickstarter', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 90,
                ),
                91 => array(
                    'id'    => 'patreon',
                    'icon' => 'fa-patreon',
                    'enabled' => false,
                    'name' => __ ( 'Patreon', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 91,
                ),
                92 => array(
                    'id'    => 'quora',
                    'icon' => 'fa-quora',
                    'enabled' => false,
                    'name' => __ ( 'Quora', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 92,
                ),
                93 => array(
                    'id'    => 'snapchat',
                    'icon' => 'fa-snapchat',
                    'enabled' => false,
                    'name' => __ ( 'Snapchat', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 93,
                ),
                94 => array(
                    'id'    => 'twitch',
                    'icon' => 'fa-twitch',
                    'enabled' => false,
                    'name' => __ ( 'Twitch', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 94,
                ),
                95 => array(
                    'id'    => 'app-store',
                    'icon' => 'fa-app-store',
                    'enabled' => false,
                    'name' => __ ( 'App Store', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 95,
                ),
                96 => array(
                    'id'    => 'map-marker',
                    'icon' => 'fa-map-marker-alt',
                    'enabled' => false,
                    'name' => __ ( 'Map Marker', 'ekko' ),
                    'background' => '',
                    'color' => '#000000',
                    'url' => '',
                    'order' => 96,
                ),
            );

            return $defaults;
        }
    }
}
