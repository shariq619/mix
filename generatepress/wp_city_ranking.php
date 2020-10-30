<?php
/**
 * Template Name: Wp City Ranking
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- This site is running CAOS for Wordpress -->
    <!-- This site is optimized with the Yoast SEO plugin v14.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>What City Should I Live In? Discover the Best Places to Live in the World</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Catamaran%3A100%2C200%2C300%2C500%2C600%2C700%2C800%2C900%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap"/>
    <meta name="description"
          content="We rank the best places to live in the world. We provide global city rankings on many different measures, helping you discover what city you should live in."/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://www.cityranking.co/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="What City Should I Live In? Discover the Best Places to Live in the World"/>
    <meta property="og:description"
          content="We rank the best places to live in the world. We provide global city rankings on many different measures, helping you discover what city you should live in."/>
    <meta property="og:url" content="https://www.cityranking.co/"/>
    <meta property="og:site_name" content="City Ranking"/>
    <meta property="article:modified_time" content="2020-09-27T11:04:03+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <script type="application/ld+json" class="yoast-schema-graph">{
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "https://www.cityranking.co/#website",
                    "url": "https://www.cityranking.co/",
                    "name": "City Ranking",
                    "description": "",
                    "potentialAction": [
                        {
                            "@type": "SearchAction",
                            "target": "https://www.cityranking.co/?s={search_term_string}",
                            "query-input": "required name=search_term_string"
                        }
                    ],
                    "inLanguage": "en-US"
                },
                {
                    "@type": "WebPage",
                    "@id": "https://www.cityranking.co/#webpage",
                    "url": "https://www.cityranking.co/",
                    "name": "What City Should I Live In? Discover the Best Places to Live in the World",
                    "isPartOf": {
                        "@id": "https://www.cityranking.co/#website"
                    },
                    "datePublished": "2020-04-06T09:40:49+00:00",
                    "dateModified": "2020-09-27T11:04:03+00:00",
                    "description": "We rank the best places to live in the world. We provide global city rankings on many different measures, helping you discover what city you should live in.",
                    "inLanguage": "en-US",
                    "potentialAction": [
                        {
                            "@type": "ReadAction",
                            "target": [
                                "https://www.cityranking.co/"
                            ]
                        }
                    ]
                }
            ]
        }</script>
    <!-- / Yoast SEO plugin. -->
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//static.addtoany.com'/>
    <link rel='dns-prefetch' href='//use.fontawesome.com'/>
    <link rel='preconnect' href='//www.google-analytics.com'/>
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect'/>
    <link rel="alternate" type="application/rss+xml" title="City Ranking &raquo; Feed"
          href="https://www.cityranking.co/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="City Ranking &raquo; Comments Feed"
          href="https://www.cityranking.co/comments/feed/"/>


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/cssx/customstyles.css"/>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/jsx/jquery.js'
            id='jquery-core-js'></script>
    <script type='text/javascript' id='ecs_ajax_load-js-extra'>
        /* <![CDATA[ */
        var ecs_ajax_params = {
            "ajaxurl": "https:\/\/www.cityranking.co\/wp-admin\/admin-ajax.php",
            "posts": "{\"error\":\"\",\"m\":\"\",\"p\":\"54\",\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":\"54\",\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"
        };
        /* ]]> */
    </script>
    <link rel="https://api.w.org/" href="https://www.cityranking.co/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://www.cityranking.co/wp-json/wp/v2/pages/54"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.cityranking.co/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://www.cityranking.co/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.5.1"/>
    <link rel='shortlink' href='https://www.cityranking.co/'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://www.cityranking.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.cityranking.co%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://www.cityranking.co/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.cityranking.co%2F&#038;format=xml"/>
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .bbp-topic-voice-count {
            display: none;
        }

        .bbp-topic-reply-count {
            color: #aaa;
            font-size: 80%;
            margin-right: 20px !important;
            width: inherit !important;
        }

        .bbp-topic-freshness {
            display: block;
            float: none !important;
            font-size: 80% !important;
            text-align: left !important;
            width: 100% !important;
        }

        .bbp-topics .bbp-header,
        .bbp-topic-started-by {
            display: none !important;
        }

        .bbp-topic-meta {
            float: right;
            margin: 0 !important;
        }

        .bbp-topic-title {
            width: 100% !important;
        }

        .bbp-body {
            border: 0 none !important;
        }

        .bbp-topics {
            border: 0 none !important;
        }

        .bbp-topics .type-topic {
            border: 0 none !important;
            margin: 5px 0 !important;
        }

        #bbpress-forums .type-topic.odd {
            border: 1px solid #eee !important;
        }

        .bbp-topic-freshness a,
        .bbp-topic-freshness-author {
            color: #aaa !important;
        }

        .resolved,
        .bbp-footer,
        li.bbp-forum-freshness {
            display: none;
        }

        .resolved + a {
            opacity: 0.7 !important;
            position: relative;
            padding-left: 25px;
        }

        .resolved + a:after {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
            border-radius: 0;
            color: #76b711;
            content: "\f00c";
            display: block;
            font-size: 80%;
            padding: 5px;
            position: absolute;
            left: -8px;
            text-align: center;
            top: -8px;
            z-index: 999;
            font-size: 20px;
        }

        .bbp-topics-front ul.super-sticky,
        .bbp-topics ul.super-sticky,
        .bbp-topics ul.sticky,
        .bbp-forum-content ul.sticky {
            font-size: 1em;
        }

        .bbp-topics-front ul.super-sticky .bbp-topic-permalink,
        .bbp-topics ul.super-sticky .bbp-topic-permalink,
        .bbp-topics ul.sticky .bbp-topic-permalink,
        .bbp-forum-content ul.sticky .bbp-topic-permalink {
            font-weight: bold;
        }

        #bbpress-forums ul {
            border: 0 !important;
            position: relative;
        }

        li.bbp-forum-info, li.bbp-topic-title {
            width: 50%;
        }

        li.bbp-forum-topic-count,
        li.bbp-topic-voice-count,
        li.bbp-forum-reply-count,
        li.bbp-topic-reply-count {
            width: 25%;
        }

        .bbp-replies .bbp-header {
            display: none;
        }

        #bbpress-forums div.bbp-search-form {
            margin-bottom: 10px;
        }

        #wp-bbp_reply_content-editor-container {
            border: 1px solid #DDD;
        }

        div.bbp-submit-wrapper {
            float: none;
        }

        #bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
            font-size: 14px;
            padding: 25px;
        }

        #bbpress-forums,
        div.bbp-breadcrumb,
        div.bbp-topic-tags,
        #bbpress-forums ul.bbp-lead-topic,
        #bbpress-forums ul.bbp-topics,
        #bbpress-forums ul.bbp-forums,
        #bbpress-forums ul.bbp-replies,
        #bbpress-forums ul.bbp-search-results,
        #bbpress-forums li.bbp-body ul.forum,
        #bbpress-forums li.bbp-body ul.topic {
            font-size: 17px;
        }

        div.bbp-template-notice p,
        #bbpress-forums .bbp-forum-info .bbp-forum-content, #bbpress-forums p.bbp-topic-meta {
            font-weight: 400;
            font-size: 13px;
        }

        .bbp-reply-content {
            font-weight: 400;
            font-size: 17px;
        }

        #bbpress-forums div.bbp-forum-content, #bbpress-forums div.bbp-topic-content, #bbpress-forums div.bbp-reply-content,
        .bbp-reply-author,
        .bbp-topic-author,
        .bbp-meta {
            margin-left: 0;
            padding: 20px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        #bbpress-forums div.bbp-forum-author a.bbp-author-name, #bbpress-forums div.bbp-topic-author a.bbp-author-name, #bbpress-forums div.bbp-reply-author a.bbp-author-name {
            margin: 0;
        }

        .bbp-reply-author br,
        .bbp-topic-author br {
            display: none;
        }

        .bbp-reply-author,
        .bbp-topic-author {
            border-bottom: 1px solid #DDD;
        }

        div.bbp-forum-header, div.bbp-topic-header, div.bbp-reply-header, li.bbp-body div.hentry {
            padding: 0;
        }

        .bbp-reply-author:before,
        .bbp-reply-author:after {
            content: "";
            display: table;
        }

        .bbp-reply-author:after {
            clear: both;
        }

        .bbp-reply-author {
            zoom: 1; /* For IE 6/7 (trigger hasLayout) */
        }

        .bbp-header .bbp-reply-author,
        .bbp-footer .bbp-reply-author {
            border-width: 0;
        }

        #bbpress-forums li.bbp-header, #bbpress-forums li.bbp-footer {
            padding: 20px;
        }

        #bbps-post-count,
        .bbp-author-role {
            font-size: 13px !important;
        }

        .bbp-reply-content #subscription-toggle {
            margin: 0;
            clear: none;
        }

        #bbpress-forums .bbp-replies .type-topic,
        #bbpress-forums .bbp-replies .type-reply {
            margin-bottom: 20px !important;
            border: 1px solid #DDD;
        }

        #bbp-search-results .bbp-topic-title,
        #bbp-search-results .bbp-topic-author {
            padding: 20px;
        }

        #bbpress-forums ul.bbp-replies {
            border-width: 0;
        }

        .bbp-reply-header {
            border-left: 1px solid #DDD;
            border-right: 1px solid #DDD;
        }

        #bbpress-forums div.reply {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        #bbps_support_forum_options, #bbps_support_forum_move, .bbps-support-forums-message {
            float: none;
            margin-bottom: 20px;
            width: auto;
        }

        #bbps-topic-status {
            float: none;
        }

        #bbpress-forums div.bbp-topic-tags {
            float: none;
        }

        #bbps-topic-status label {
            display: block;
        }

        #bbps_support_options {
            padding: 10px 15px;
        }

        #bbp_search {
            width: 75%;
        }

        #bbp_search_submit {
            width: 24%;
            min-width: 150px;
        }

        #bbpress-forums div.bbp-breadcrumb p, #bbpress-forums div.bbp-topic-tags p {
            margin-bottom: 20px;
        }

        .bbp-pagination {
            float: none;
        }

        .bbp-pagination:after {
            content: "";
            display: table;
            clear: both;
        }

        .bbp-reply-header .bbp-reply-title {
            padding: 20px;
        }

        #bbpress-forums hr {
            display: none;
        }

        #bbpress-forums .bbp-search-form {
            display: none;
        }

        #bbpress-forums,
        #forums-list-0 {
            margin-bottom: 0;
        }

        #bbpress-forums div.bbp-forum-author img.avatar, #bbpress-forums div.bbp-topic-author img.avatar, #bbpress-forums div.bbp-reply-author img.avatar {
            border-radius: 50%;
            max-width: 50px;
            float: none;
            display: block;
            margin-bottom: 5px;
        }

        .bbp-author-role,
        .bbps-post-count,
        #bbps-post-count {
            display: none;
        }

        #bbpress-forums div.bbp-topic-author a.bbp-author-name,
        #bbpress-forums div.bbp-reply-author a.bbp-author-name,
        .bbp-reply-author,
        .bbp-topic-author {
            clear: none !important;
            margin-top: 0px !important;
            font-weight: bold !important;
            font-size: 16px !important;
            color: #222 !important;
            text-align: center !important;
            display: inline-block !important;
        }

        .bbp-reply-content,
        .bbp-topic-content {
            border-top: 0;
            overflow: hidden;
        }

        .bbp-author-ip {
            font-size: 9px !important;
        }

        .bbp-reply-header .bbp-meta,
        .bbp-topic-header .bbp-meta {
            background: #fff;
            border: 0;
            padding-bottom: 3px;
            padding-left: 0;
            padding-right: 0;
            color: #aaa;
        }

        div.bbp-forum-header, div.bbp-topic-header, div.bbp-reply-header {
            border: 0;
            font-size: 80%;
        }

        .bbp-reply-ip {
            clear: left;
        }

        .bbp-reply-author,
        .bbp-topic-author {
            border: 0;
        }

        #bbps_support_forum_move {
            display: none;
        }

        #bbpress-forums div.bbp-forum-author, #bbpress-forums div.bbp-topic-author, #bbpress-forums div.bbp-reply-author {
            width: 100%;
            float: none;
        }

        #forums-list-0 .bbp-body .bbp-forum-freshness {
            clear: none;
            display: inline-block;
            font-size: 80%;
            text-align: left;
            width: 100%;
        }

        #forums-list-0 .bbp-body .bbp-forum-freshness a {
            color: #aaa !important;
        }

        #forums-list-0 .bbp-body .bbp-topic-freshness-author {
            display: none;
        }

        #forums-list-0 .bbp-forum-info .bbp-forum-content {
            display: none;
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        li.sf-field-sort_order h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f160";
            padding-right: 5px;
        }

        li.sf-field-post-meta-country h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f0ac";
            padding-right: 5px;
        }

        li.sf-field-post-meta-region h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f7a2";
            padding-right: 5px;
        }

        li.sf-field-post-meta-safety h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f505";
            padding-right: 5px;
        }

        li.sf-field-post-meta-healthcare h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f0fe";
            padding-right: 5px;
        }

        li.sf-field-post-meta-education h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f518";
            padding-right: 5px;
        }

        li.sf-field-post-meta-climate h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f743";
            padding-right: 5px;
        }

        li.sf-field-post-meta-culture h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f5a6";
            padding-right: 5px;
        }

        li.sf-field-post-meta-cost_of_living h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f155";
            padding-right: 5px;
        }

        li.sf-field-post-meta-pollution h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f75f";
            padding-right: 5px;
        }

        li.sf-field-post-meta-traffic h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f637";
            padding-right: 5px;
        }

        li.sf-field-post-meta-inclusiveness h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f0c0";
            padding-right: 5px;
        }

        li.sf-field-post-meta-english_speaking h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f1ab";
            padding-right: 5px;
        }

        li.sf-field-post-meta-coworking_spaces h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f109";
            padding-right: 5px;
        }

        li.sf-field-post-meta-internet_speed h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f1eb";
            padding-right: 5px;
        }

        li.sf-field-post-meta-theatres__concerts h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f630";
            padding-right: 5px;
        }

        li.sf-field-post-meta-museums__galleries h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f557";
            padding-right: 5px;
        }

        li.sf-field-post-meta-casinos__gambling h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f3d1";
            padding-right: 5px;
        }

        li.sf-field-post-meta-casinos__gambling h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f3d1";
            padding-right: 5px;
        }

        li.sf-field-post-meta-nature__parks h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f1bb";
            padding-right: 5px;
        }

        li.sf-field-post-meta-sights_and_landmarks h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f66f";
            padding-right: 5px;
        }

        li.sf-field-post-meta-spas__wellness h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f5bb";
            padding-right: 5px;
        }

        li.sf-field-post-meta-population_density h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f500";
            padding-right: 5px;
        }

        li.sf-field-post-meta-average_age h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f77d";
            padding-right: 5px;
        }

        li.sf-field-post-meta-overall_tax_rate h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f662";
            padding-right: 5px;
        }

        li.sf-field-post-meta-corporate_tax_rate h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f662";
            padding-right: 5px;
        }

        li.sf-field-post-meta-income_tax_rate h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f662";
            padding-right: 5px;
        }

        li.sf-field-post-meta-sales_tax h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f662";
            padding-right: 5px;
        }

        li.sf-field-post-meta-average_salary h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f555";
            padding-right: 5px;
        }

        li.sf-field-post-meta-economic_forecast h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f53a";
            padding-right: 5px;
        }

        li.sf-field-post-meta-equality h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f516";
            padding-right: 5px;
        }

        li.sf-field-post-meta-rule_of_law h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f0e3";
            padding-right: 5px;
        }

        li.sf-field-post-meta-freedom_of_movement h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f072";
            padding-right: 5px;
        }

        li.sf-field-post-meta-religious_freedom h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f67f";
            padding-right: 5px;
        }

        li.sf-field-post-meta-freedom_of_association h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f4ce";
            padding-right: 5px;
        }

        li.sf-field-post-meta-freedom_of_expression h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f086";
            padding-right: 5px;
        }

        li.sf-field-post-meta-identity__relationships h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f225";
            padding-right: 5px;
        }

        li.sf-field-post-meta-individual_freedom h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f506";
            padding-right: 5px;
        }

        li.sf-field-post-meta-size_of_government h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f1ad";
            padding-right: 5px;
        }

        li.sf-field-post-meta-legal_system h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f1ad";
            padding-right: 5px;
        }

        li.sf-field-post-meta-sound_money h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f53d";
            padding-right: 5px;
        }

        li.sf-field-post-meta-international_trade h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f57e";
            padding-right: 5px;
        }

        li.sf-field-post-meta-regulation h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f058";
            padding-right: 5px;
        }

        li.sf-field-post-meta-gdp h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f201";
            padding-right: 5px;
        }

        li.sf-field-post-meta-near_beach h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f5ca";
            padding-right: 5px;
        }

        li.sf-field-post-meta-near_mountain h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f6fc";
            padding-right: 5px;
        }

        li.sf-field-post-meta-island h4:before {
            font-family: "Font Awesome 5 Free";
            content: "\f185";
            padding-right: 5px;
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .stickytest {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .inside-navigation {
            background-color: transparant;
            text-align: right;
            z-index: 2;
        }

        .main-navigation {
            padding-top: 10px;
            background-color: #ffffff00;
            text-align: right;
            z-index: 2;
        }

        .main-navigation .main-nav ul li[class*="current-menu-"] > a {
            background-color: #ffffff00;
        }

        .main-navigation .main-nav ul li a,
        .main-navigation .menu-toggle {
            color: black;
            font-weight: 700;
        }

        .main-navigation .main-nav ul li:hover > a,
        .main-navigation .main-nav ul li:focus > a,
        .main-navigation .main-nav ul li.sfHover > a {
            background-color: #ffffff00;
        }

        @media (max-width: 768px) {
            .main-navigation {
                background-color: transparant;
                z-index: 2;
            }

            .main-navigation .main-nav ul li a {
                line-height: 0.5cm;
            }
        }

        @media (max-width: 768px) {
            .inside-header {
                padding: 0 0 0 20px;
            }
        }

        @media (max-width: 768px) {
            .main-navigation .main-nav ul li a,
            .main-navigation .menu-toggle {
                color: black;
                font-size: 12px;
                background: #ffffff00;
                text-align: right;
            }
        }

        .main-navigation .main-nav ul ul li a {
            padding-top: 10px;
            color: black;
            background: #f3f3f3;
        }

        @media (max-width: 768px) {
            .main-navigation .main-nav ul ul li a {
                background-color: tranparent;
            }
        }

        .main-navigation .main-nav ul li[class*="current-menu-"]:hover > a,
        .main-navigation .main-nav ul li[class*="current-menu-"]:focus > a,
        .main-navigation .main-nav ul li[class*="current-menu-"].sfHover > a {
            background-color: transparent;
        }

        .site-header {
            display: none
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .searchandfilter .noUi-connect {
            background: #54595F;
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        @media (max-width: 767px) {
            .elementor-156 .elementor-element.elementor-element-1282ktk {
                margin-top: 0px;
            }
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .site-info {
            display: none;
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css">
        .scroll-box {
            background: #f4f4f4;
            border: 0px solid rgba(0, 0, 0, 0.1);
            height: 750px;
            width: 89%;
            padding-top: 20px;
            overflow-y: scroll;
            top: 0px;
            z-index: 2;
        }

        @media (max-width: 1000px) {
            .scroll-box {
                background: #f4f4f4;
                border: 0px solid rgba(0, 0, 0, 0.1);
                height: 1620px; /* maximum height of the box, feel free to change this! */
                width: 270px;
                padding-top: 0px;
            }
        }
    </style>
    <!-- end Simple Custom CSS and JS -->
    <!-- start Simple Custom CSS and JS -->
    <style type="text/css"></style>
    <!-- end Simple Custom CSS and JS -->


    <link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fontx/Catamaran-Bold.ttf"
          crossorigin>

    <link rel="preload" as="font" href="<?php echo get_stylesheet_directory_uri(); ?>/fontx/fa-solid-900.woff2"
          crossorigin>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://www.cityranking.co/wp-content/uploads/2020/06/cropped-cityranking-2-32x32.png"
          sizes="32x32"/>
    <link rel="icon" href="https://www.cityranking.co/wp-content/uploads/2020/06/cropped-cityranking-2-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="https://www.cityranking.co/wp-content/uploads/2020/06/cropped-cityranking-2-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://www.cityranking.co/wp-content/uploads/2020/06/cropped-cityranking-2-270x270.png"/>
    <style type="text/css" id="wp-custom-css">
        ul.my-list {
            position: relative;
            padding-top: 40px !important;
            margin-top: 1px !important;
        }

        ul.other-list {
            padding-top: 60px !important;
        }

        ul.my-list li.headeing-list {
            position: absolute;
            top: 0px;
            text-align: center;
            width: 100%;
            border-bottom: 0px solid #000;
            border-color: grey;
            padding-top: 10px !important;
        }

        ul.other-list li.headeing-list {
            left: 11px;
        }

        .fa.fa-info {
            font-size: 8px;
            padding-left: 3px
        }

        .my-icon-i {
            font-size: 8px !important;
            position: relative;
            top: -5px;
            left: 0px;
            z-index: 999
        }

        [data-toggle="popover"] {
            position: relative;
            color: #3a3a3a;
        }

        .popover-box {
            position: absolute;
            right: 110px;
            width: 100%;
            bottom: 18px;
            display: none;
            z-index: 9999;
        }

        .popover-box .popover-content {
            background: black;
            color: #fff;
            padding: 5px 20px;
            border-radius: 5px;
            border: 1px solid #000;
            width: 180px;
            text-align: center;
        }

        .popover-box.top::after {
            content: "";
            content: "";
            display: block;
            border-bottom-left-radius: 14px;
            border-bottom-right-radius: 14px;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid black;
            margin: 0px auto;
            position: relative;
            left: 104px;
        }

        .searchandfilter[data-sf-form-id="1039"] li.sf-field-sort_order select {
            max-width: 170px;
            height: 45px;
            width: 100%;
        }

        .scroll-box {
            z-index: -1;
        }

        .popover-content a {
            color: #f0ad4e;
        }

        .searchandfilter[data-sf-form-id="1039"] li .sf-meta-range.sf-meta-range-slider input {
            width: 170px;
            font-size: 12px;
            text-align: center;
            padding-top: 5px;
            padding-right: 0px;
            padding-left: 0px;
            font-family: "catamaran", Sans-serif;
        }

        .searchandfilter[data-sf-form-id="1039"] li .sf-meta-range {
            width: 170px;
            font-size: 12px;
            padding-top: 5px;
            padding-right: 0px;
            padding-left: 0px;
            font-family: "catamaran", Sans-serif;
        }

        .sf-meta-range.
        .searchandfilter[data-sf-form-id="1039"] li.sf-field-sort_order select {
            max-width: 170px;
            height: 45px;
            width: 100%;
        }

        .searchandfilter[data-sf-form-id="1039"] li.sf-meta-range input {
            height: 45px;
            width: 10px;
        }

        /* New CSS Start */
        .inside-right-sidebar .widget, .elementor-widget-sidebar .widget {
            padding: 30px;
            background: #;
        }

        .inside-right-sidebar h2.widget-title, .elementor-widget-sidebar h2.widget-title {
            font-size: 22px;
            color: #fcfcfc !important;
            background: grey;
            padding: 2px 10px;
            border-left: 5px solid #696969;
        }

        .elementor-widget-sidebar button#user-submit {
            color: white;
            background: grey;
            width: 100%;
            border-radius: 6px;
            padding: 8px 15px !important;
        }

        .elementor-widget-sidebar form.search-form {
            color: #000;
            box-shadow: none;
        }

        button#user-submit {
            color: white;
            background: #d62f2f;
            width: 100%;
            border-radius: 6px;
            padding: 8px 15px !important;
        }

        .inside-right-sidebar ul li a, .elementor-widget-sidebar ul li a {
            color: #1a1100;
        }

        .inside-right-sidebar ul li a:hover, .elementor-widget-sidebar ul li a:hover {
            color: #696969;
        }

        fieldset.bbp-form input[type="text"], fieldset.bbp-form input[type="password"], fieldset.bbp-form input[type="email"], input.search-field {
            width: 100%;
            background: #fff;
        }

        .inside-right-sidebar ul li, .elementor-widget-sidebar ul li {
            list-style: none;
            border-bottom: 1px dashed #b0b0b4;
            padding: 10px 0;
            font-weight: 400;
        }

        .inside-right-sidebar ul li:last-child, .elementor-widget-sidebar ul li:last-child {
            border: none;
        }

        /* New CSS End */
        @media (max-width: 480px) {
            .searchandfilter[data-sf-form-id="1039"] {
                max-width: 170px;
                height: 15px;
                padding: 0px;
            }
        }

        @media (max-width: 480px) {
            .searchandfilter[data-sf-form-id="1039"] li.sf-field-post-meta-country select {
                max-width: 170px;
                height: 25px;
            }
        }

        @media (max-width: 480px) {
            .searchandfilter[data-sf-form-id="1039"] li.sf-field-sort_order select {
                max-width: 170px;
                height: 25px;
            }
        }

        @media (max-width: 480px) {
            .searchandfilter[data-sf-form-id="1039"] li.sf-field-search input,
            .searchandfilter[data-sf-form-id="1039"] li.sf-field-search label,
            .searchandfilter[data-sf-form-id="1039"] .select2-container {
                max-width: 170px;
                height: 25px;
                padding: 0;
                font-size: 12px;
            }
        }
    </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
                display: none !important;
            }</style>
    </noscript>
    <?php wp_head(); ?>
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-54 wp-embed-responsive right-sidebar nav-below-header fluid-header separate-containers active-footer-widgets-3 nav-aligned-right header-aligned-left dropdown-hover elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-54 full-width-content"
      itemtype="https://schema.org/WebPage" itemscope>
<a class="screen-reader-text skip-link" href="#content" title="Skip to content">Skip to content</a>
<header id="masthead" class="site-header" itemtype="https://schema.org/WPHeader" itemscope>
    <div class="inside-header grid-container grid-parent">
        <div class="site-branding">
            <p class="main-title" itemprop="headline">
                <a href="https://www.cityranking.co/" rel="home">
                    City Ranking
                </a>
            </p>
        </div>
    </div>
    <!-- .inside-header -->
</header>
<!-- #masthead -->
<nav id="site-navigation" class="main-navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope>
    <div class="inside-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
<span class="gp-icon icon-menu-bars">
<svg viewBox="0 0 512 512" aria-hidden="true" role="img" version="1.1"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em"
     height="1em">
<path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"/>
</svg>
<svg viewBox="0 0 512 512" aria-hidden="true" role="img" version="1.1"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em"
     height="1em">
<path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z"/>
</svg>
</span>
            <span class="mobile-menu">Menu</span>
        </button>
        <div id="primary-menu" class="main-nav">
            <ul id="menu-menu-1" class=" menu sf-menu">
                <li id="menu-item-9523"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-54 current_page_item menu-item-9523">
                    <a href="https://www.cityranking.co/" aria-current="page">Homepage</a></li>
                <li id="menu-item-9666" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9666">
                    <a href="https://www.cityranking.co/compare-cities/">Compare Cities</a></li>
                <li id="menu-item-9543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9543">
                    <a href="https://www.cityranking.co/topical-rankings/">Topical rankings</a></li>
                <li id="menu-item-12641"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12641"><a
                            href="https://www.cityranking.co/forums/">Forums</a></li>
                <li id="menu-item-9655"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9655">
                    <a>
                        Other
                        <span role="presentation" class="dropdown-menu-toggle">
<span class="gp-icon icon-arrow">
<svg viewBox="0 0 330 512" aria-hidden="true" role="img" version="1.1"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     width="1em" height="1em">
<path d="M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z"
      fill-rule="nonzero"/>
</svg>
</span>
</span>
                    </a>
                    <ul class="sub-menu">
                        <li id="menu-item-9532"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9532"><a
                                    href="https://www.cityranking.co/list-of-cities/">List of cities</a></li>
                        <li id="menu-item-9533"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9533"><a
                                    href="https://www.cityranking.co/list-of-countries/">List of countries</a></li>
                        <li id="menu-item-12089"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12089"><a
                                    href="https://www.cityranking.co/recommended-resources/">Recommended resources</a>
                        </li>
                    </ul>
                </li>
                <li id="menu-item-11384"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11384"><a
                            href="https://www.cityranking.co/wp-login.php">Log In</a></li>
                <li id="menu-item-11385"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11385"><a
                            href="https://www.cityranking.co/wp-login.php?action=register">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- .inside-navigation -->
</nav>
<!-- #site-navigation -->
<div id="page" class="hfeed site grid-container container grid-parent">
    <div id="content" class="site-content">
        <div data-elementor-type="wp-page" data-elementor-id="54" class="elementor elementor-54"
             data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9f6b0b4 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="9f6b0b4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0e2897b"
                                     data-id="0e2897b" data-element_type="column">
                                    <div class="elementor-column-wrap">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e1f385a"
                                     data-id="e1f385a" data-element_type="column">
                                    <div class="elementor-column-wrap">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-784507d4 elementor-section-height-min-height elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                            data-id="784507d4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1aad5523"
                                     data-id="1aad5523" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-5b9878c4 elementor-widget elementor-widget-heading"
                                                 data-id="5b9878c4" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">City
                                                        Ranking</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6caded40 elementor-hidden-phone"
                                     data-id="6caded40" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-253f6c77 elementor-widget elementor-widget-heading"
                                                 data-id="253f6c77" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Where
                                                        should I live?</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6603a215 elementor-widget elementor-widget-text-editor"
                                                 data-id="6603a215" data-element_type="widget"
                                                 data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Our goal is to help answer questions that we hear all the
                                                            time: Where should I live? Where should I move to? What city
                                                            should I live in?</p>
                                                        <p>Deciding what city to live in is an arduous process, and
                                                            usually takes a long time shifting through hundreds of
                                                            articles. Here at City Ranking, we aim to simplify that
                                                            process. We have a database of approximately 2,000 cities
                                                            and hundreds of national and city-level data variables to
                                                            help you get a clearer picture of each city.</p>
                                                        <p>While we have a default ranking based on our algorithm, we
                                                            understand that each individual has different requirements
                                                            for where they want to live. Our search, sort and filter
                                                            options below are designed to help you choose your city
                                                            ranking based on YOUR ideal city characteristics. If you are
                                                            still wondering “what city should I live in?”, scroll down
                                                            and find out.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-c4b55d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="c4b55d5" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62786ad"
                                     data-id="62786ad" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6bd3947 elementor-widget elementor-widget-shortcode"
                                                 data-id="6bd3947" data-element_type="widget"
                                                 data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5bdc263 elementor-section-full_width elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
                            data-id="5bdc263" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <!-- FORM -->
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fe7119f"
                                     data-id="fe7119f" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-16dea65 stickytest elementor-widget elementor-widget-html"
                                                 data-id="16dea65" data-element_type="widget"
                                                 data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <div class="scroll-box">

                                                        <form data-sf-form-id='1039' method='get'
                                                              class='searchandfilter'
                                                              action="<?php the_permalink(); ?>"
                                                              id='search-form-1039' autocomplete='off'
                                                              data-instance-count='1'>
                                                            <ul>
                                                                <li class="sf-field-search" data-sf-field-name="search"
                                                                    data-sf-field-type="search"
                                                                    data-sf-field-input-type=""><label><input
                                                                                placeholder="Search …" name="city_name"
                                                                                id="city_name"
                                                                                class="sf-input-text" type="text"
                                                                                value=""
                                                                                title=""></label></li>
                                                                <li class="sf-field-sort_order"
                                                                    data-sf-field-name="_sf_sort_order"
                                                                    data-sf-field-type="sort_order"
                                                                    data-sf-field-input-type="select">
                                                                    <h4>Sort order <a href="javascript:void(0);"
                                                                                      data-toggle="popover"
                                                                                      data-placement="top"
                                                                                      data-content="Sort by DESC or ASC"><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <label>
                                                                        <select id="city_sort" name="city_sort"
                                                                                class="sf-input-select" title="">
                                                                            <option class="sf-level-0 sf-item-0 sf-option-active"
                                                                                    selected="selected"
                                                                                    data-sf-depth="0" value="">Sort
                                                                                Results By
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_country+desc+num">
                                                                                Country (DECS)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_country+asc+num">Country
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_region+desc+num">Region
                                                                                (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_region+asc+num">Region
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_safety+desc+num">Safety
                                                                                (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_safety+asc+num">Safety
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_healthcare+desc+num">
                                                                                Healthcare (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_healthcare+asc+num">
                                                                                Healthcare (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_education+desc+num">
                                                                                Education (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_education+asc+num">
                                                                                Education (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_climate+desc+num">
                                                                                Climate (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_climate+asc+num">Climate
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_culture+desc+num">
                                                                                Culture (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_culture+asc+num">Culture
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_cost_of_living+desc+num">
                                                                                Cost of Living (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_cost_of_living+asc+num">
                                                                                Cost of Living (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_pollution+desc+num">
                                                                                Pollution (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_pollution+asc+num">
                                                                                Pollution (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_traffic+desc+num">
                                                                                Traffic (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_traffic+asc+num">Traffic
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_inclusiveness+desc+num">
                                                                                Inclusiveness (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_inclusiveness+asc+num">
                                                                                Inclusiveness (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_english_speaking+desc+num">
                                                                                English Speaking (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_english_speaking+asc+num">
                                                                                English Speaking (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_coworking_spaces+desc+num">
                                                                                # Coworking Spaces (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_coworking_spaces+asc+num">
                                                                                # Coworking Spaces (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_internet_speed+desc+num">
                                                                                Internet Speed (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_internet_speed+asc+num">
                                                                                Internet Speed (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_theatres_&amp;_concerts+desc+num">
                                                                                Theatres & Concerts (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_theatres_&amp;_concerts+asc+num">
                                                                                Theatres & Concerts (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_museums_&amp;_galleries+desc+num">
                                                                                Museums & Galleries (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_museums_&amp;_galleries+asc+num">
                                                                                Museums & Galleries (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_nature_&amp;_parks+desc+num">
                                                                                Nature & Parks (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_nature_&amp;_parks+asc+num">
                                                                                Nature & Parks (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sights_and_landmarks+desc+num">
                                                                                Sights & Landmarks (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sights_and_landmarks+asc+num">
                                                                                Sights & Landmarks (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_spas_&amp;_wellness+desc+num">
                                                                                Spas & Wellness (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_spas_&amp;_wellness+asc+num">
                                                                                Spas & Wellness (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_population_density+desc+num">
                                                                                Population Density (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_population_density+asc+num">
                                                                                Population Density (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_average_age+desc+num">
                                                                                Average Age (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_average_age+asc+num">
                                                                                Average Age (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_overall_tax_rate+desc+num">
                                                                                Overall Tax Rate (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_overall_tax_rate+asc+num">
                                                                                Overall Tax Rate (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_corporate_tax_rate+desc+num">
                                                                                Corporate Tax Rate (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_corporate_tax_rate+asc+num">
                                                                                Corporate Tax Rate (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_income_tax_rate+desc+num">
                                                                                Income Tax Rate (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_income_tax_rate+asc+num">
                                                                                Income Tax Rate (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sales_tax+desc+num">
                                                                                Sales Tax (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sales_tax+asc+num">Sales
                                                                                Tax (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_average_salary+desc+num">
                                                                                Average Salary (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_average_salary+desc+num">
                                                                                Average Salary (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_economic_forecast+desc+num">
                                                                                Economic Forecast (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_economic_forecast+asc+num">
                                                                                Economic Forecast (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_equality+desc+num">
                                                                                Equality (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_equality+asc+num">
                                                                                Equality (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_rule_of_law+desc+num">
                                                                                Rule of Law (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_rule_of_law+asc+num">
                                                                                Rule of Law (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_movement+desc+num">
                                                                                Freedom of Movement (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_movement+asc+num">
                                                                                Freedom of Movement (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_association+desc+num">
                                                                                Freedom of Association (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_association+asc+num">
                                                                                Freedom of Association (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_expression+desc+num">
                                                                                Freedom of Expression (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_freedom_of_expression+asc+num">
                                                                                Freedom of Expression (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_individual_freedom+desc+num">
                                                                                Personal Freedom (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_individual_freedom+asc+num">
                                                                                Personal Freedom (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_identity_&amp;_relationships+desc+num">
                                                                                Identity & Relationships (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_identity_&amp;_relationships+asc+num">
                                                                                Identity & Relationships (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_size_of_government+desc+num">
                                                                                Size of Government (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_size_of_government+asc+num">
                                                                                Size of Government (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_legal_system+desc+num">
                                                                                Legal System (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_legal_system+asc+num">
                                                                                Legal System (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sound_money+desc+num">
                                                                                Sound Money (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_sound_money+asc+num">
                                                                                Sound Money (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_international_trade+desc+num">
                                                                                International Trade (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_international_trade+asc+num">
                                                                                International Trade (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_regulation+desc+num">
                                                                                Regulation (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_regulation+asc+num">
                                                                                Regulation (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_gdp+desc+num">GDP Growth
                                                                                (DESC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_gdp+desc+num">GDP Growth
                                                                                (ASC)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_near_beach+desc+num">
                                                                                Near Beach
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_near_mountain+desc+num">
                                                                                Near Mountain
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-depth="0"
                                                                                    value="_sfm_island+desc+num">Island
                                                                            </option>
                                                                        </select>
                                                                    </label>
                                                                </li>
                                                                <li class="sf-field-post-meta-country"
                                                                    data-sf-field-name="_sfm_country"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="select"
                                                                    data-sf-meta-type="choice">
                                                                    <h4>Country <a href="javascript:void(0);"
                                                                                   data-toggle="popover"
                                                                                   data-placement="top"
                                                                                   data-content="Choose which country you want to live in."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <label>
                                                                        <select name="city_country"
                                                                                class="sf-input-select"
                                                                                id="city_country" title="">
                                                                            <option class="sf-level-0 sf-item-0 sf-option-active"
                                                                                    selected="selected"
                                                                                    data-sf-depth="0" value="">All Items
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Albania">Albania
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Algeria">Algeria
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Angola">Angola
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Argentina">Argentina
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Armenia">Armenia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Australia">Australia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Austria">Austria
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Azerbaijan">Azerbaijan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Bahrain">Bahrain
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Bangladesh">Bangladesh
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Barbados">Barbados
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Belarus">Belarus
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Belgium">Belgium
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Belize">Belize
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Bosnia">Bosnia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Brazil">Brazil
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Bulgaria">Bulgaria
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Cambodia">Cambodia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Cameroon">Cameroon
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Canada">Canada
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Chile">Chile
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="China">China
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Colombia">Colombia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Costa Rica">Costa Rica
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Croatia">Croatia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Cuba">Cuba
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Cyprus">Cyprus
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Czech Republic">Czech
                                                                                Republic
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Democratic Republic of the Congo (Democratic Republic of the)">
                                                                                Democratic Republic of the Congo
                                                                                (Democratic Republic of the)
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Denmark">Denmark
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Dominican Republic">Dominican
                                                                                Republic
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Ecuador">Ecuador
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Egypt">Egypt
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Estonia">Estonia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Ethiopia">Ethiopia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Fiji">Fiji
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Finland">Finland
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="France">France
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Georgia">Georgia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Germany">Germany
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Ghana">Ghana
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Greece">Greece
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Guinea">Guinea
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Hungary">Hungary
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Iceland">Iceland
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="India">India
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Indonesia">Indonesia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Iran">Iran
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Ireland">Ireland
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Israel">Israel
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Italy">Italy
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Japan">Japan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Jordan">Jordan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Kazakhstan">Kazakhstan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Kenya">Kenya
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Kuwait">Kuwait
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Kyrgystain">Kyrgystain
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Laos">Laos
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Latvia">Latvia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Lebanon">Lebanon
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Libya">Libya
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Lithuania">Lithuania
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Luxembourg">Luxembourg
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Madagascar">Madagascar
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Malaysia">Malaysia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Maldives">Maldives
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Mali">Mali
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Malta">Malta
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Mexico">Mexico
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Moldova">Moldova
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Montenegro">Montenegro
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Morocco">Morocco
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Nepal">Nepal
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Netherlands">Netherlands
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="New Zealand">New Zealand
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Nicaragua">Nicaragua
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Nigeria">Nigeria
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Norway">Norway
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Oman">Oman
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Pakistan">Pakistan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Panama">Panama
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Paraguay">Paraguay
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Peru">Peru
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Philippines">Philippines
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Poland">Poland
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Portugal">Portugal
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Qatar">Qatar
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Romania">Romania
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Russia">Russia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Rwanda">Rwanda
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Saudi Arabia">Saudi Arabia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Senegal">Senegal
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Serbia">Serbia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Seychelles">Seychelles
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Singapore">Singapore
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Slovakia">Slovakia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Slovenia">Slovenia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="South Africa">South Africa
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="South Korea">South Korea
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Spain">Spain
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Sri Lanka">Sri Lanka
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="St. Lucia">St. Lucia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Sudan">Sudan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Sweden">Sweden
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Switzerland">Switzerland
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Syria">Syria
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Taiwan">Taiwan
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Tanzania">Tanzania
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Thailand">Thailand
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Trinidad and Tobago">Trinidad
                                                                                and Tobago
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Tunisia">Tunisia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Turkey">Turkey
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Turks and Caicos">Turks and
                                                                                Caicos
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="U.S. Virgin Islands">U.S.
                                                                                Virgin Islands
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Uganda">Uganda
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Ukraine">Ukraine
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="United Arab Erimated">United
                                                                                Arab Erimated
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="United Arab Erimates">United
                                                                                Arab Erimates
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="United Kingdom">United
                                                                                Kingdom
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="United States">United States
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Uruguay">Uruguay
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Venezuela">Venezuela
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Vietnam">Vietnam
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Zimbabwe">Zimbabwe
                                                                            </option>
                                                                        </select>
                                                                    </label>
                                                                </li>
                                                                <li class="sf-field-post-meta-region"
                                                                    data-sf-field-name="_sfm_region"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="select"
                                                                    data-sf-meta-type="choice">
                                                                    <h4>Region <a href="javascript:void(0);"
                                                                                  data-toggle="popover"
                                                                                  data-placement="top"
                                                                                  data-content="Choose which region you want to live in."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <label>
                                                                        <select name="filter_region" id="filter_region"
                                                                                class="sf-input-select" title="">
                                                                            <option class="sf-level-0 sf-item-0 sf-option-active"
                                                                                    selected="selected"
                                                                                    data-sf-depth="0" value="">All Items
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Africa">Africa
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Asia">Asia
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Europe">Europe
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Middle East">Middle East
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="North America">North America
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="Oceania">Oceania
                                                                            </option>
                                                                            <option class="sf-level-0 "
                                                                                    data-sf-count="-1" data-sf-depth="0"
                                                                                    value="South America">South America
                                                                            </option>
                                                                        </select>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list core-list'>
                                                                <li class='headeing-list'>Core</li>
                                                                <li class="sf-field-post-meta-safety"
                                                                    data-sf-field-name="_sfm_safety"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Safety <a href="javascript:void(0);"
                                                                                  data-toggle="popover"
                                                                                  data-placement="top"
                                                                                  data-content="Based on our index of city-level and national data. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_safety"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_safetymin" id="filter_safetymin" type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_safetymax" id="filter_safetymax" type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-healthcare"
                                                                    data-sf-field-name="_sfm_healthcare"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Healthcare <a href="javascript:void(0);"
                                                                                      data-toggle="popover"
                                                                                      data-placement="top"
                                                                                      data-content="Based on our index of city-level and national data. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_healthcare"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_healthcaremin"
                                                                                    id="filter_healthcaremin"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_healthcaremax"
                                                                                    id="filter_healthcaremax"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-education"
                                                                    data-sf-field-name="_sfm_education"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Education <a href="javascript:void(0);"
                                                                                     data-toggle="popover"
                                                                                     data-placement="top"
                                                                                     data-content="Based on our index of city-level and national data. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_education"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_educationmin" id="filter_educationmin"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_educationmax" id="filter_educationmax"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-climate"
                                                                    data-sf-field-name="_sfm_climate"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Climate <a href="javascript:void(0);"
                                                                                   data-toggle="popover"
                                                                                   data-placement="top"
                                                                                   data-content="Based on our index of city-level and national data. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_climate"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_climate[]" type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_climate[]" type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-culture"
                                                                    data-sf-field-name="_sfm_culture"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Culture <a href="javascript:void(0);"
                                                                                   data-toggle="popover"
                                                                                   data-placement="top"
                                                                                   data-content="Based on our index of city-level and national data. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_culture"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_culturemin" id="filter_culturemin" type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="filter_culturemax" id="filter_culturemax" type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list economy-list'>
                                                                <li class='headeing-list'>Economy</li>
                                                                <li class="sf-field-post-meta-cost_of_living"
                                                                    data-sf-field-name="_sfm_cost_of_living"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Cost of Living <a href="javascript:void(0);"
                                                                                          data-toggle="popover"
                                                                                          data-placement="top"
                                                                                          data-content="Based on city-level data by <a href='https://www.numbeo.com'>Numbeo</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="129"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="129" data-min="0"
                                                                         data-max="129" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_cost_of_living"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="129" step="1"
                                                                                    name="_sfm_cost_of_living[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="129" step="1"
                                                                                    name="_sfm_cost_of_living[]"
                                                                                    type="number" value="129"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-overall_tax_rate"
                                                                    data-sf-field-name="_sfm_overall_tax_rate"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Overall Tax Rate <a href="javascript:void(0);"
                                                                                            data-toggle="popover"
                                                                                            data-placement="top"
                                                                                            data-content="Based on our index which aggregates all the major taxes. For more info, check out our <a href=sources-methodology>Sources & Methodology</a> page."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="88"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="88" data-min="0"
                                                                         data-max="88" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_overall_tax_rate"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="88" step="1"
                                                                                    name="_sfm_overall_tax_rate[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="88" step="1"
                                                                                    name="_sfm_overall_tax_rate[]"
                                                                                    type="number" value="88"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-corporate_tax_rate"
                                                                    data-sf-field-name="_sfm_corporate_tax_rate"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Corporate Tax Rate <a href="javascript:void(0);"
                                                                                              data-toggle="popover"
                                                                                              data-placement="top"
                                                                                              data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="45"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="45" data-min="0"
                                                                         data-max="45" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_corporate_tax_rate"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="45" step="1"
                                                                                    name="_sfm_corporate_tax_rate[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="45" step="1"
                                                                                    name="_sfm_corporate_tax_rate[]"
                                                                                    type="number" value="45"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-income_tax_rate"
                                                                    data-sf-field-name="_sfm_income_tax_rate"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Income Tax Rate <a href="javascript:void(0);"
                                                                                           data-toggle="popover"
                                                                                           data-placement="top"
                                                                                           data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="57"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="57" data-min="0"
                                                                         data-max="57" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_income_tax_rate"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="57" step="1"
                                                                                    name="_sfm_income_tax_rate[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="57" step="1"
                                                                                    name="_sfm_income_tax_rate[]"
                                                                                    type="number" value="57"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-sales_tax"
                                                                    data-sf-field-name="_sfm_sales_tax"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Sales Tax Rate <a href="javascript:void(0);"
                                                                                          data-toggle="popover"
                                                                                          data-placement="top"
                                                                                          data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="21"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="21" data-min="0"
                                                                         data-max="21" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_sales_tax"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="21" step="1"
                                                                                    name="_sfm_sales_tax[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="21" step="1"
                                                                                    name="_sfm_sales_tax[]"
                                                                                    type="number"
                                                                                    value="21" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-average_salary"
                                                                    data-sf-field-name="_sfm_average_salary"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Average Salary <a href="javascript:void(0);"
                                                                                          data-toggle="popover"
                                                                                          data-placement="top"
                                                                                          data-content="Based on city-level data by <a href='https://www.numbeo.com'>Numbeo</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="7961"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="7961" data-min="0"
                                                                         data-max="7961" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_average_salary"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="7961" step="1"
                                                                                    name="_sfm_average_salary[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="7961" step="1"
                                                                                    name="_sfm_average_salary[]"
                                                                                    type="number" value="7961"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-economic_forecast"
                                                                    data-sf-field-name="_sfm_economic_forecast"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Economic Forecast <a href="javascript:void(0);"
                                                                                             data-toggle="popover"
                                                                                             data-placement="top"
                                                                                             data-content="Based on city-level data by <a href='https://www.kearney.com/'>Kearney</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_economic_forecast"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_economic_forecast[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_economic_forecast[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-sound_money"
                                                                    data-sf-field-name="_sfm_sound_money"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Sound Money <a href="javascript:void(0);"
                                                                                       data-toggle="popover"
                                                                                       data-placement="top"
                                                                                       data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_sound_money"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_sound_money[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_sound_money[]"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-international_trade"
                                                                    data-sf-field-name="_sfm_international_trade"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>International Trade <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_international_trade"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_international_trade[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_international_trade[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-regulation"
                                                                    data-sf-field-name="_sfm_regulation"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Regulation <a href="javascript:void(0);"
                                                                                      data-toggle="popover"
                                                                                      data-placement="top"
                                                                                      data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_regulation"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_regulation[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_regulation[]"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-gdp"
                                                                    data-sf-field-name="_sfm_gdp"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>GDP Growth <a href="javascript:void(0);"
                                                                                      data-toggle="popover"
                                                                                      data-placement="top"
                                                                                      data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="-25" data-start-max="83"
                                                                         data-start-min-formatted="-25"
                                                                         data-start-max-formatted="83" data-min="-25"
                                                                         data-max="83" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_gdp"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="-25" max="83" step="1"
                                                                                    name="_sfm_gdp[]" type="number"
                                                                                    value="-25" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="-25" max="83" step="1"
                                                                                    name="_sfm_gdp[]" type="number"
                                                                                    value="83" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list politics-list'>
                                                                <li class='headeing-list'>Politics</li>
                                                                <li class="sf-field-post-meta-equality"
                                                                    data-sf-field-name="_sfm_equality"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Equality <a href="javascript:void(0);"
                                                                                    data-toggle="popover"
                                                                                    data-placement="top"
                                                                                    data-content="Based on national data by <a href='https://www.worldbank.org/'>The World Bank</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_equality"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_equality[]" type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_equality[]" type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-rule_of_law"
                                                                    data-sf-field-name="_sfm_rule_of_law"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Rule of Law <a href="javascript:void(0);"
                                                                                       data-toggle="popover"
                                                                                       data-placement="top"
                                                                                       data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_rule_of_law"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_rule_of_law[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_rule_of_law[]"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-freedom_of_movement"
                                                                    data-sf-field-name="_sfm_freedom_of_movement"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Freedom of Movement <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_freedom_of_movement"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_movement[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_movement[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-freedom_of_expression"
                                                                    data-sf-field-name="_sfm_freedom_of_expression"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Freedom of Expression <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_freedom_of_expression"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_expression[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_expression[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-freedom_of_association"
                                                                    data-sf-field-name="_sfm_freedom_of_association"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Freedom of Association <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_freedom_of_association"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_association[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_freedom_of_association[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-individual_freedom"
                                                                    data-sf-field-name="_sfm_individual_freedom"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Personal Freedom <a href="javascript:void(0);"
                                                                                            data-toggle="popover"
                                                                                            data-placement="top"
                                                                                            data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_individual_freedom"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_individual_freedom[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_individual_freedom[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-identity__relationships"
                                                                    data-sf-field-name="_sfm_identity_&_relationships"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Identity &amp; Relationships <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_identity_&amp;_relationships"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_identity_&amp;_relationships[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_identity_&amp;_relationships[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-size_of_government"
                                                                    data-sf-field-name="_sfm_size_of_government"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Size of Government <a href="javascript:void(0);"
                                                                                              data-toggle="popover"
                                                                                              data-placement="top"
                                                                                              data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_size_of_government"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_size_of_government[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_size_of_government[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-legal_system"
                                                                    data-sf-field-name="_sfm_legal_system"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Legal System <a href="javascript:void(0);"
                                                                                        data-toggle="popover"
                                                                                        data-placement="top"
                                                                                        data-content="Based on national data by <a href='https://www.cato.org/'>The Cato Institute</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_legal_system"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_legal_system[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_legal_system[]"
                                                                                    type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list society-list'>
                                                                <li class='headeing-list'>Society</li>
                                                                <li class="sf-field-post-meta-traffic"
                                                                    data-sf-field-name="_sfm_traffic"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Traffic <a href="javascript:void(0);"
                                                                                   data-toggle="popover"
                                                                                   data-placement="top"
                                                                                   data-content="Based on city-level data by <a href='https://www.numbeo.com'>Numbeo</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_traffic"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_traffic[]" type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_traffic[]" type="number"
                                                                                    value="100" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-inclusiveness"
                                                                    data-sf-field-name="_sfm_inclusiveness"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Inclusiveness <a href="javascript:void(0);"
                                                                                         data-toggle="popover"
                                                                                         data-placement="top"
                                                                                         data-content="Based on national data by <a href='https://www.un.org/'>The United Nations</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="84"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="84" data-min="0"
                                                                         data-max="84" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_inclusiveness"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="84" step="1"
                                                                                    name="_sfm_inclusiveness[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="84" step="1"
                                                                                    name="_sfm_inclusiveness[]"
                                                                                    type="number" value="84"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-english_speaking"
                                                                    data-sf-field-name="_sfm_english_speaking"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>English Speaking <a href="javascript:void(0);"
                                                                                            data-toggle="popover"
                                                                                            data-placement="top"
                                                                                            data-content="Based on national data on English language proficiency."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="3" data-start-max="100"
                                                                         data-start-min-formatted="3"
                                                                         data-start-max-formatted="100" data-min="3"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_english_speaking"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="3" max="100" step="1"
                                                                                    name="_sfm_english_speaking[]"
                                                                                    type="number" value="3"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="3" max="100" step="1"
                                                                                    name="_sfm_english_speaking[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-coworking_spaces"
                                                                    data-sf-field-name="_sfm_coworking_spaces"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4># Coworking Spaces <a href="javascript:void(0);"
                                                                                              data-toggle="popover"
                                                                                              data-placement="top"
                                                                                              data-content="Based on city-level data by <a href='https://coworker.com'>Coworker</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="100"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="100" data-min="0"
                                                                         data-max="100" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_coworking_spaces"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_coworking_spaces[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="100" step="1"
                                                                                    name="_sfm_coworking_spaces[]"
                                                                                    type="number" value="100"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-internet_speed"
                                                                    data-sf-field-name="_sfm_internet_speed"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Wifi Speed <a href="javascript:void(0);"
                                                                                      data-toggle="popover"
                                                                                      data-placement="top"
                                                                                      data-content="Based on national data by <a href='https://www.speedtest.net/'>Speed Test by Ookla</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="99"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="99" data-min="0"
                                                                         data-max="99" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_internet_speed"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="99" step="1"
                                                                                    name="_sfm_internet_speed[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="99" step="1"
                                                                                    name="_sfm_internet_speed[]"
                                                                                    type="number" value="99"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-average_age"
                                                                    data-sf-field-name="_sfm_average_age"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Average Age <a href="javascript:void(0);"
                                                                                       data-toggle="popover"
                                                                                       data-placement="top"
                                                                                       data-content="Based on national data by <a href='https://www.unicef.org/'>Unicef</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="363"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="363" data-min="0"
                                                                         data-max="363" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_average_age"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="363" step="1"
                                                                                    name="_sfm_average_age[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="363" step="1"
                                                                                    name="_sfm_average_age[]"
                                                                                    type="number"
                                                                                    value="363" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list things-to-do-list'>
                                                                <li class='headeing-list'>Things to do</li>
                                                                <li class="sf-field-post-meta-theatres__concerts"
                                                                    data-sf-field-name="_sfm_theatres_&_concerts"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Theatres &amp; Concerts <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on city-level data by <a href='https://tripadvisor.com/'>Trip Advisor</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="474"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="474" data-min="0"
                                                                         data-max="474" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_theatres_&amp;_concerts"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="474" step="1"
                                                                                    name="_sfm_theatres_&amp;_concerts[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="474" step="1"
                                                                                    name="_sfm_theatres_&amp;_concerts[]"
                                                                                    type="number" value="474"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-museums__galleries"
                                                                    data-sf-field-name="_sfm_museums_&_galleries"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Museums &amp; Galleries <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on city-level data by <a href='https://tripadvisor.com/'>Trip Advisor</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="796"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="796" data-min="0"
                                                                         data-max="796" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_museums_&amp;_galleries"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="796" step="1"
                                                                                    name="_sfm_museums_&amp;_galleries[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="796" step="1"
                                                                                    name="_sfm_museums_&amp;_galleries[]"
                                                                                    type="number" value="796"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-nature__parks"
                                                                    data-sf-field-name="_sfm_nature_&_parks"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Nature &amp; Parks <a href="javascript:void(0);"
                                                                                              data-toggle="popover"
                                                                                              data-placement="top"
                                                                                              data-content="Based on city-level data by <a href='https://tripadvisor.com/'>Trip Advisor</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="648"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="648" data-min="0"
                                                                         data-max="648" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_nature_&amp;_parks"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="648" step="1"
                                                                                    name="_sfm_nature_&amp;_parks[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="648" step="1"
                                                                                    name="_sfm_nature_&amp;_parks[]"
                                                                                    type="number" value="648"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-sights_and_landmarks"
                                                                    data-sf-field-name="_sfm_sights_and_landmarks"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Sights &amp; Landmarks <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on city-level data by <a href='https://tripadvisor.com/'>Trip Advisor</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="4536"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="4536" data-min="0"
                                                                         data-max="4536" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_sights_and_landmarks"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="4536" step="1"
                                                                                    name="_sfm_sights_and_landmarks[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="4536" step="1"
                                                                                    name="_sfm_sights_and_landmarks[]"
                                                                                    type="number" value="4536"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-spas__wellness"
                                                                    data-sf-field-name="_sfm_spas_&_wellness"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Spas &amp; Wellness <a
                                                                                href="javascript:void(0);"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-content="Based on city-level data by <a href='https://tripadvisor.com/'>Trip Advisor</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="1168"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="1168" data-min="0"
                                                                         data-max="1168" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_spas_&amp;_wellness"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="1168" step="1"
                                                                                    name="_sfm_spas_&amp;_wellness[]"
                                                                                    type="number" value="0"
                                                                                    title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="1168" step="1"
                                                                                    name="_sfm_spas_&amp;_wellness[]"
                                                                                    type="number" value="1168"
                                                                                    title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul class='my-list other-list'>
                                                                <li class='headeing-list'>Other</li>
                                                                <li class="sf-field-post-meta-pollution"
                                                                    data-sf-field-name="_sfm_pollution"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="range-slider"
                                                                    data-sf-meta-type="number">
                                                                    <h4>Pollution <a href="javascript:void(0);"
                                                                                     data-toggle="popover"
                                                                                     data-placement="top"
                                                                                     data-content="Based on city-level data by <a href='https://waqi.info/'>World Air Quality Index</a>."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <div data-start-min="0" data-start-max="57"
                                                                         data-start-min-formatted="0"
                                                                         data-start-max-formatted="57" data-min="0"
                                                                         data-max="57" data-step="1"
                                                                         data-decimal-places="0"
                                                                         data-thousand-seperator=""
                                                                         data-decimal-seperator="."
                                                                         data-display-values-as="textinput"
                                                                         data-sf-field-name="_sfm_pollution"
                                                                         class="sf-meta-range sf-meta-range-slider">
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-min sf-input-number"
                                                                                    min="0" max="57" step="1"
                                                                                    name="_sfm_pollution[]"
                                                                                    type="number"
                                                                                    value="0" title=""></label> <span
                                                                                class="sf-range-values-seperator"> - </span>
                                                                        <label><input
                                                                                    class="sf-input-range-number sf-range-max sf-input-number"
                                                                                    min="0" max="57" step="1"
                                                                                    name="_sfm_pollution[]"
                                                                                    type="number"
                                                                                    value="57" title=""></label>
                                                                        <div class="meta-slider"></div>
                                                                    </div>
                                                                </li>
                                                                <li class="sf-field-post-meta-near_beach"
                                                                    data-sf-field-name="_sfm_near_beach"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="checkbox"
                                                                    data-sf-meta-type="choice">
                                                                    <h4>Near Beach? <a href="javascript:void(0);"
                                                                                       data-toggle="popover"
                                                                                       data-placement="top"
                                                                                       data-content="Based on city-level of individual research."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <ul data-operator="and" class="">
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="No"
                                                                                    name="_sfm_near_beach[]"
                                                                                    id="sf-input-cd5c6f044428ed7bbfebf6c2ba366f61"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-cd5c6f044428ed7bbfebf6c2ba366f61">No</label>
                                                                        </li>
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="Yes"
                                                                                    name="_sfm_near_beach[]"
                                                                                    id="sf-input-994836d25dfddf5e72ae30600e2f699f"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-994836d25dfddf5e72ae30600e2f699f">Yes</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="sf-field-post-meta-near_mountain"
                                                                    data-sf-field-name="_sfm_near_mountain"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="checkbox"
                                                                    data-sf-meta-type="choice">
                                                                    <h4>Near Mountain? <a href="javascript:void(0);"
                                                                                          data-toggle="popover"
                                                                                          data-placement="top"
                                                                                          data-content="Based on city-level of individual research."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <ul data-operator="and" class="">
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="No"
                                                                                    name="_sfm_near_mountain[]"
                                                                                    id="sf-input-94d2cfba8570b93766930612c3895a00"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-94d2cfba8570b93766930612c3895a00">No</label>
                                                                        </li>
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="Yes"
                                                                                    name="_sfm_near_mountain[]"
                                                                                    id="sf-input-4a295012d2b94f42a5dc94ab5f86c12c"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-4a295012d2b94f42a5dc94ab5f86c12c">Yes</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="sf-field-post-meta-island"
                                                                    data-sf-field-name="_sfm_island"
                                                                    data-sf-field-type="post_meta"
                                                                    data-sf-field-input-type="checkbox"
                                                                    data-sf-meta-type="choice">
                                                                    <h4>Island <a href="javascript:void(0);"
                                                                                  data-toggle="popover"
                                                                                  data-placement="top"
                                                                                  data-content="Based on city-level of individual research."><i
                                                                                    class="fa fa-info my-icon-i"
                                                                                    aria-hidden="false"></i></a></h4>
                                                                    <ul data-operator="and" class="">
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="No"
                                                                                    name="_sfm_island[]"
                                                                                    id="sf-input-8fb1bf8b96a234e63ac0682a160eb9a1"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-8fb1bf8b96a234e63ac0682a160eb9a1">No</label>
                                                                        </li>
                                                                        <li class="sf-level-0 " data-sf-count="-1"
                                                                            data-sf-depth="0"><input
                                                                                    class="sf-input-checkbox"
                                                                                    type="checkbox" value="Yes"
                                                                                    name="_sfm_island[]"
                                                                                    id="sf-input-8c96515a4c7fa14b8c92faa1740237d3"><label
                                                                                    class="sf-label-checkbox"
                                                                                    for="sf-input-8c96515a4c7fa14b8c92faa1740237d3">Yes</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" name="my_action">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Data -->
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3e9211c titlesticky"
                                     data-id="3e9211c" data-element_type="column" id="titlesticky">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="search-filter-results-1039 elementor-element elementor-element-624aae8 elementor-grid-4 elementor-posts--thumbnail-top elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-posts"
                                                 data-id="624aae8" data-element_type="widget"
                                                 data-settings="{&quot;custom_columns&quot;:&quot;4&quot;,&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;1&quot;}"
                                                 data-widget_type="posts.custom">
                                                <div class="elementor-widget-container">

                                                    <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom"
                                                         data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:&quot;5&quot;,&quot;load_method&quot;:&quot;&quot;,&quot;widget_id&quot;:&quot;624aae8&quot;,&quot;post_id&quot;:54,&quot;theme_id&quot;:54}">

                                                        <!-- Loop Here -->
                                                        <?php
                                                        /*
        $args = array(
            'post_type' => 'location',
            'post_per_page' =>  -1,
            'orderby' => array( 'ID' => 'ASC' ),
            'meta_query' => array(
                    array(
                        'key' => 'overall_score',
                        'value' => array(70.8,72.8),
                        'type' => 'FLOAT',
                        'compare' => 'BETWEEN'
                    ),
                    array(
                        'key' => 'education_star',
                        'value' => array(1.2,2.1),
                        'type' => 'FLOAT',
                        'compare' => 'BETWEEN'
                    )
            )
        );*/
                                                        $args = array(
                                                            'post_type' => 'location',
                                                            'numberposts' => '6',
                                                            //'orderby' => array('ID' => 'ASC')
                                                            'meta_key'  => 'country',
                                                            'orderby'   => 'meta_value',
                                                            'order' => 'DESC', //setting order direction
                                                        );
                                                        $query = new WP_Query($args);
                                                        while ($query->have_posts()) : $query->the_post();
                                                            ?>

                                                            <article id="post-1413"
                                                                     class="elementor-post elementor-grid-item ecs-post-loop post-1413 location type-location status-publish has-post-thumbnail hentry">
                                                                <style id="elementor-post-dynamic-9307">.elementor-9307 .elementor-element.elementor-element-6fd3ffc2:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-9307 .elementor-element.elementor-element-6fd3ffc2 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                                                        background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);
                                                                    }</style>
                                                                <div data-elementor-type="page" data-elementor-id="9307"
                                                                     class="elementor elementor-9307"
                                                                     data-elementor-settings="[]">
                                                                    <div class="elementor-inner">
                                                                        <div class="elementor-section-wrap">
                                                                            <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-7abd6915 elementor-section-full_width clickable elementor-section-height-default elementor-section-height-default"
                                                                                    data-id="7abd6915"
                                                                                    data-element_type="section"
                                                                                    id="clickable"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                <div class="elementor-container elementor-column-gap-no">
                                                                                    <div class="elementor-row">
                                                                                        <style>#post-1413 .elementor-9307 .elementor-element.elementor-element-6fd3ffc2:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, #post-1413 .elementor-9307 .elementor-element.elementor-element-6fd3ffc2 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                                                                                background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);
                                                                                            }</style>
                                                                                        <div class="make-column-clickable-elementor elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fd3ffc2"
                                                                                             style="cursor: pointer;"
                                                                                             data-column-clickable="<?php echo get_permalink(get_the_id()); ?>"
                                                                                             data-column-clickable-blank="_blank"
                                                                                             data-id="6fd3ffc2"
                                                                                             data-element_type="column"
                                                                                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class="elementor-background-overlay"></div>
                                                                                                <div class="elementor-widget-wrap">
                                                                                                    <div class="elementor-element elementor-element-d8e2beb elementor-widget elementor-widget-shortcode"
                                                                                                         data-id="d8e2beb"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="shortcode.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-shortcode">
                                                                                                                <?php echo get_the_id(); ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-2ca3f94 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                                                                                                         data-id="2ca3f94"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="theme-post-title.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                                                <?php echo get_the_title(); ?></h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-fd5f71b elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                                                                         data-id="fd5f71b"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="star-rating.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-star-rating__wrapper">
                                                                                                                <div class="elementor-star-rating__title">
                                                                                                                    Overall
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <?php echo get_field('overall_score', get_the_id()); ?>
                                                                                                                </div>
                                                                                                                <!--
                                                                <div class="elementor-star-rating"
                                                                     title="2/5"
                                                                     itemtype="http://schema.org/Rating"
                                                                     itemscope=""
                                                                     itemprop="reviewRating">
                                                                    <i class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-empty">&#9733;</i><i
                                                                        class="elementor-star-empty">&#9733;</i><i
                                                                        class="elementor-star-empty">&#9733;</i>
                                                                    <span itemprop="ratingValue"
                                                                          class="elementor-screen-only">2/5</span>
                                                                </div>-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-ed04e68 elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                                                                         data-id="ed04e68"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="star-rating.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-star-rating__wrapper">
                                                                                                                <div class="elementor-star-rating__title">
                                                                                                                    Education
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <?php echo get_field('education_hdr', get_the_id()); ?>
                                                                                                                </div>
                                                                                                                <!--
                                                                <div class="elementor-star-rating"
                                                                     title="4.9/5"
                                                                     itemtype="http://schema.org/Rating"
                                                                     itemscope=""
                                                                     itemprop="reviewRating">
                                                                    <i class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-9">&#9733;</i>
                                                                    <span itemprop="ratingValue"
                                                                          class="elementor-screen-only">4.9/5</span>
                                                                </div>-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-c762a7f elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                                                                         data-id="c762a7f"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="star-rating.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-star-rating__wrapper">
                                                                                                                <div class="elementor-star-rating__title">
                                                                                                                    Healthcare
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <?php echo get_field('healthcare', get_the_id()); ?>
                                                                                                                </div>
                                                                                                                <!--
                                                                <div class="elementor-star-rating"
                                                                     title="3.5/5"
                                                                     itemtype="http://schema.org/Rating"
                                                                     itemscope=""
                                                                     itemprop="reviewRating">
                                                                    <i class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-5">&#9733;</i><i
                                                                        class="elementor-star-empty">&#9733;</i>
                                                                    <span itemprop="ratingValue"
                                                                          class="elementor-screen-only">3.5/5</span>
                                                                </div>-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-c84b180 elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                                                                         data-id="c84b180"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="star-rating.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-star-rating__wrapper">
                                                                                                                <div class="elementor-star-rating__title">
                                                                                                                    Safety
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <?php echo get_field('safety', get_the_id()); ?>
                                                                                                                </div>
                                                                                                                <!--
                                                                <div class="elementor-star-rating"
                                                                     title="4.8/5"
                                                                     itemtype="http://schema.org/Rating"
                                                                     itemscope=""
                                                                     itemprop="reviewRating">
                                                                    <i class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-8">&#9733;</i>
                                                                    <span itemprop="ratingValue"
                                                                          class="elementor-screen-only">4.8/5</span>
                                                                </div>-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-f99c5eb elementor-star-rating--align-center elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
                                                                                                         data-id="f99c5eb"
                                                                                                         data-element_type="widget"
                                                                                                         data-widget_type="star-rating.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-star-rating__wrapper">
                                                                                                                <div class="elementor-star-rating__title">
                                                                                                                    Culture
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <?php echo get_field('culture', get_the_id()); ?>
                                                                                                                </div>
                                                                                                                <!--
                                                                <div class="elementor-star-rating"
                                                                     title="4.8/5"
                                                                     itemtype="http://schema.org/Rating"
                                                                     itemscope=""
                                                                     itemprop="reviewRating">
                                                                    <i class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-full">&#9733;</i><i
                                                                        class="elementor-star-8">&#9733;</i>
                                                                    <span itemprop="ratingValue"
                                                                          class="elementor-screen-only">4.8/5</span>
                                                                </div>-->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>

                                                        <?php
                                                        endwhile;
                                                        wp_reset_query();
                                                        ?>
                                                        <!-- Loop Here -->
                                                        <div id="city_response"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- #content -->
</div>
<!-- #page -->
<div class="site-footer">
    <footer class="site-info" itemtype="https://schema.org/WPFooter" itemscope>
        <div class="inside-site-info grid-container grid-parent">
            <div class="copyright-bar">
                <div class="creds">
                    <p>Copyright © 2020 · <a href="http://www.cityranking.co/">City Ranking</a> - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- .site-info -->
</div>
<!-- .site-footer -->
<!--[if lte IE 11]>
<script type='text/javascript'
        src='https://www.cityranking.co/wp-content/themes/generatepress/js/classList.min.js?ver=2.4.2'
        id='generate-classlist-js'></script>
<![endif]-->
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/www.cityranking.co\/wp-admin\/admin-ajax.php",
        "nonce": "79ad8b9e9e",
        "i18n": {"toc_no_headings_found": "No headings were found on this page."},
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "google": {"title": "Google+", "has_counter": true},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "delicious": {"title": "Delicious"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"},
            "weixin": {"title": "WeChat"},
            "weibo": {"title": "Weibo"}
        },
        "facebook_sdk": {"lang": "en_US", "app_id": ""},
        "lottie": {"defaultAnimationUrl": "https:\/\/www.cityranking.co\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
</script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "version": "3.0.9",
        "is_static": false,
        "legacyMode": {"elementWrappers": true},
        "urls": {"assets": "https:\/\/www.cityranking.co\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 54,
            "title": "What%20City%20Should%20I%20Live%20In%3F%20Discover%20the%20Best%20Places%20to%20Live%20in%20the%20World",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
    .ui-widget {
        width: 30% !important;
        float: left;
        padding-bottom: 20px;
    }

    .ui-widget:nth-child(1) {
        margin-top: 24px;
    }

    @media (max-width: 768px) {
        .ui-widget {
            width: 100% !important;
            float: none;
        }

        .ui-widget:nth-child(1) {
            margin-top: 0px;
        }

        ul#menu-menu-1 {
            background: #f3f3f3;
            color: black;
        }

        /*  .logged-in ul#menu-menu-1 li a {
padding: 15px 20px;
}*/
        ul#menu-menu-1 li a {
            color: black !important;
            text-align: left !important;
            padding: 9px 20px;
        }

        button.menu-toggle {
            color: black !important;
        }

        li#menu-item-9533, li#menu-item-9532, li#menu-item-9642, li#menu-item-9652, li#menu-item-9636, li#menu-item-9638, li#menu-item-9646 {
            background: #f3f3f3 !important;
        }

        .main-navigation .main-nav ul li[class*="current-menu-"] > a:hover, .main-navigation .main-nav ul li[class*="current-menu-"].sfHover > a {
            color: #fff;
            background-color: #eee !important;
        }
    }
</style>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<!-- end Simple Custom CSS and JS -->
<script>window.lazyLoadOptions = {
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    };
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                    for (i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            return
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            return
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {childList: !0, subtree: !0};
            observer.observe(b, config)
        }
    }, !1)
</script>
<script data-no-minify="1" async src="<?php echo get_stylesheet_directory_uri(); ?>/jsx/lazyload.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/jsx/e281f432d8f1c46d96453217a762fa64.js" data-minify="1"
        defer></script>
</body>
</html>