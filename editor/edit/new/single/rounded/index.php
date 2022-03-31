<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <script src="https://script.crazyegg.com/pages/versioned/common-scripts/11.1.385.js" type="text/javascript" async=""></script>
    <script src="https://connect.facebook.net/signals/config/245509430055321?v=2.9.55&amp;r=stable" async=""></script>
    <!-- <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script> -->
    <!-- <script type="text/javascript" async="" src="https://bat.bing.com/bat.js"></script> -->
    <script type="text/javascript" async="" src="https://script.crazyegg.com/pages/scripts/0109/4399.js"></script>
    <!-- <script type="text/javascript" async="" src="https://www.google.com/pagead/conversion_async.js"></script> -->
    <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script> -->
    <!-- <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-7MW30D8XQG&amp;l=dataLayer&amp;cx=c"></script> -->
    <!-- <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-WZXX56"></script> -->
    <script>
        if (location.hash) document.head.innerHTML += '<meta name="robots" content="noindex, follow"/>'
    </script>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Editor Custom stickers - <?php echo get_bloginfo("name"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


    <script src="<?php echo plugins_url(); ?>/skye-sticker-app/script.js"></script>

    <link rel="icon" type="image/x-icon" href="<?php echo get_site_icon_url(); ?>">
    <!-- <link rel="canonical" href="https://stickerapp.com/editor/edit/new/single/rounded/0/200/51/25/glossy_coated"> -->



    <!--[if lte IE 9]>
            <script type="text/javascript">var badIE = true;</script>
            <![endif]-->
    <!-- <script type="text/javascript">function upgrade()
                {
                    window.location = "/upgrade";
                    throw new Error( "To use StickerApp you need to upgrade your browser to a newer version" )
                }
                var svgRoot = null;
                if ( typeof badIE !== "undefined" )
                {
                    upgrade()
                }
                else if ( "createElementNS" in document )
                {
                    svgRoot = document.createElementNS( "http://www.w3.org/2000/svg", "svg" );
                    if ( !(svgRoot && "width" in svgRoot) )
                    {
                        upgrade()
                    }
                }
                else
                {
                    upgrade()
                }</script> -->


    <!-- STYLES -->
    <style type="text/css" media="all">
        .pswp {
            -webkit-text-size-adjust: 100%;
            -webkit-backface-visibility: hidden;
            display: none;
            height: 100%;
            left: 0;
            outline: none;
            overflow: hidden;
            position: absolute;
            top: 0;
            -ms-touch-action: none;
            touch-action: none;
            width: 100%;
            z-index: 1500
        }

        .pswp * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .pswp img {
            max-width: none
        }

        .pswp--animate_opacity {
            opacity: .001;
            -webkit-transition: opacity 333ms cubic-bezier(.4, 0, .22, 1);
            transition: opacity 333ms cubic-bezier(.4, 0, .22, 1);
            will-change: opacity
        }

        .pswp--open {
            display: block
        }

        .pswp--zoom-allowed .pswp__img {
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in
        }

        .pswp--zoomed-in .pswp__img {
            cursor: -webkit-grab;
            cursor: -moz-grab;
            cursor: grab
        }

        .pswp--dragging .pswp__img {
            cursor: -webkit-grabbing;
            cursor: -moz-grabbing;
            cursor: grabbing
        }

        .pswp__bg {
            -webkit-backface-visibility: hidden;
            background: #000;
            opacity: 0
        }

        .pswp__bg,
        .pswp__scroll-wrap {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .pswp__scroll-wrap {
            overflow: hidden
        }

        .pswp__container,
        .pswp__zoom-wrap {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -ms-touch-action: none;
            touch-action: none
        }

        .pswp__container,
        .pswp__img {
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .pswp__zoom-wrap {
            position: absolute;
            -webkit-transform-origin: left top;
            -ms-transform-origin: left top;
            transform-origin: left top;
            -webkit-transition: -webkit-transform 333ms cubic-bezier(.4, 0, .22, 1);
            transition: transform 333ms cubic-bezier(.4, 0, .22, 1);
            width: 100%
        }

        .pswp__bg {
            -webkit-transition: opacity 333ms cubic-bezier(.4, 0, .22, 1);
            transition: opacity 333ms cubic-bezier(.4, 0, .22, 1);
            will-change: opacity
        }

        .pswp--animated-in .pswp__bg,
        .pswp--animated-in .pswp__zoom-wrap {
            -webkit-transition: none;
            transition: none
        }

        .pswp__container,
        .pswp__zoom-wrap {
            -webkit-backface-visibility: hidden
        }

        .pswp__item {
            bottom: 0;
            overflow: hidden;
            right: 0
        }

        .pswp__img,
        .pswp__item {
            left: 0;
            position: absolute;
            top: 0
        }

        .pswp__img {
            height: auto;
            width: auto
        }

        .pswp__img--placeholder {
            -webkit-backface-visibility: hidden
        }

        .pswp__img--placeholder--blank {
            background: #222
        }

        .pswp--ie .pswp__img {
            height: auto !important;
            left: 0;
            top: 0;
            width: 100% !important
        }

        .pswp__error-msg {
            color: #ccc;
            font-size: 14px;
            left: 0;
            line-height: 16px;
            margin-top: -8px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%
        }

        .pswp__error-msg a {
            color: #ccc;
            text-decoration: underline
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        .animated.infinite {
            animation-iteration-count: infinite
        }

        .animated.delay-1s {
            animation-delay: 1s
        }

        .animated.delay-2s {
            animation-delay: 2s
        }

        .animated.delay-3s {
            animation-delay: 3s
        }

        .animated.delay-4s {
            animation-delay: 4s
        }

        .animated.delay-5s {
            animation-delay: 5s
        }

        .animated.fast {
            animation-duration: .8s
        }

        .animated.faster {
            animation-duration: .5s
        }

        .animated.slow {
            animation-duration: 2s
        }

        .animated.slower {
            animation-duration: 3s
        }

        @media (prefers-reduced-motion:reduce),
        (print) {
            .animated {
                animation-duration: 1ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 1ms !important
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .fadeIn {
            animation-name: fadeIn
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translate3d(0, -100%, 0)
            }

            to {
                opacity: 1;
                transform: translateZ(0)
            }
        }

        .fadeInDown {
            animation-name: fadeInDown
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1
            }

            to {
                opacity: 0;
                transform: translate3d(0, 100%, 0)
            }
        }

        .fadeOutDown {
            animation-name: fadeOutDown
        }

        @keyframes slideInDown {
            0% {
                transform: translate3d(0, -100%, 0);
                visibility: visible
            }

            to {
                transform: translateZ(0)
            }
        }

        .slideInDown {
            animation-name: slideInDown
        }

        @keyframes slideOutUp {
            0% {
                transform: translateZ(0)
            }

            to {
                transform: translate3d(0, -100%, 0);
                visibility: hidden
            }
        }

        .slideOutUp {
            animation-name: slideOutUp
        }

        @keyframes flash {

            0%,
            50%,
            to {
                opacity: 1
            }

            25%,
            75% {
                opacity: 0
            }
        }

        .flash {
            animation-name: flash
        }

        @keyframes rubberBand {
            0% {
                transform: scaleX(1)
            }

            30% {
                transform: scale3d(1.25, .75, 1)
            }

            40% {
                transform: scale3d(.75, 1.25, 1)
            }

            50% {
                transform: scale3d(1.15, .85, 1)
            }

            65% {
                transform: scale3d(.95, 1.05, 1)
            }

            75% {
                transform: scale3d(1.05, .95, 1)
            }

            to {
                transform: scaleX(1)
            }
        }

        .rubberBand {
            animation-name: rubberBand
        }

        @keyframes flipInX {
            0% {
                animation-timing-function: ease-in;
                opacity: 0;
                transform: perspective(400px) rotateX(90deg)
            }

            40% {
                animation-timing-function: ease-in;
                transform: perspective(400px) rotateX(-20deg)
            }

            60% {
                opacity: 1;
                transform: perspective(400px) rotateX(10deg)
            }

            80% {
                transform: perspective(400px) rotateX(-5deg)
            }

            to {
                transform: perspective(400px)
            }
        }

        .flipInX {
            animation-name: flipInX;
            backface-visibility: visible !important
        }

        @keyframes bounceIn {

            0%,
            20%,
            40%,
            60%,
            80%,
            to {
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }

            0% {
                opacity: 0;
                transform: scale3d(.3, .3, .3)
            }

            20% {
                transform: scale3d(1.1, 1.1, 1.1)
            }

            40% {
                transform: scale3d(.9, .9, .9)
            }

            60% {
                opacity: 1;
                transform: scale3d(1.03, 1.03, 1.03)
            }

            80% {
                transform: scale3d(.97, .97, .97)
            }

            to {
                opacity: 1;
                transform: scaleX(1)
            }
        }

        .bounceIn {
            animation-duration: .75s;
            animation-name: bounceIn
        }

        @font-face {
            font-display: fallback;
            font-family: FuturaPT;
            font-style: normal;
            font-weight: 600;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.eot);
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.eot?#iefix) format("embedded-opentype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.woff2) format("woff2"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/Futura/FuturaPTHeavy.otf) format("opentype")
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: sans-serif
        }

        body {
            margin: 0
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden],
        template {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 1em 40px
        }

        hr {
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input {
            line-height: normal
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: textfield;
            box-sizing: content-box
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: .35em .625em .75em
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td,
        th {
            padding: 0
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            font-size: 10px
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1.42857143
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #4990e2;
            text-decoration: none
        }

        a:focus,
        a:hover {
            color: #1f69c0;
            text-decoration: underline
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        figure {
            margin: 0
        }

        img {
            vertical-align: middle
        }

        .img-responsive {
            display: block;
            height: auto;
            max-width: 100%
        }

        .img-rounded {
            border-radius: 6px
        }

        .img-thumbnail {
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: inline-block;
            height: auto;
            line-height: 1.42857143;
            max-width: 100%;
            padding: 4px;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out
        }

        .img-circle {
            border-radius: 50%
        }

        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin-bottom: 22px;
            margin-top: 22px
        }

        .sr-only {
            clip: rect(0, 0, 0, 0);
            border: 0;
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        [role=button] {
            cursor: pointer
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .container:after,
        .container:before {
            content: " ";
            display: table
        }

        .container:after {
            clear: both
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1230px
            }
        }

        .container-fluid {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .container-fluid:after,
        .container-fluid:before {
            content: " ";
            display: table
        }

        .container-fluid:after {
            clear: both
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .row:after,
        .row:before {
            content: " ";
            display: table
        }

        .row:after {
            clear: both
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            position: relative
        }

        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            float: left
        }

        .col-xs-1 {
            width: 8.33333333%
        }

        .col-xs-2 {
            width: 16.66666667%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-4 {
            width: 33.33333333%
        }

        .col-xs-5 {
            width: 41.66666667%
        }

        .col-xs-6 {
            width: 50%
        }

        .col-xs-7 {
            width: 58.33333333%
        }

        .col-xs-8 {
            width: 66.66666667%
        }

        .col-xs-9 {
            width: 75%
        }

        .col-xs-10 {
            width: 83.33333333%
        }

        .col-xs-11 {
            width: 91.66666667%
        }

        .col-xs-12 {
            width: 100%
        }

        .col-xs-pull-0 {
            right: auto
        }

        .col-xs-pull-1 {
            right: 8.33333333%
        }

        .col-xs-pull-2 {
            right: 16.66666667%
        }

        .col-xs-pull-3 {
            right: 25%
        }

        .col-xs-pull-4 {
            right: 33.33333333%
        }

        .col-xs-pull-5 {
            right: 41.66666667%
        }

        .col-xs-pull-6 {
            right: 50%
        }

        .col-xs-pull-7 {
            right: 58.33333333%
        }

        .col-xs-pull-8 {
            right: 66.66666667%
        }

        .col-xs-pull-9 {
            right: 75%
        }

        .col-xs-pull-10 {
            right: 83.33333333%
        }

        .col-xs-pull-11 {
            right: 91.66666667%
        }

        .col-xs-pull-12 {
            right: 100%
        }

        .col-xs-push-0 {
            left: auto
        }

        .col-xs-push-1 {
            left: 8.33333333%
        }

        .col-xs-push-2 {
            left: 16.66666667%
        }

        .col-xs-push-3 {
            left: 25%
        }

        .col-xs-push-4 {
            left: 33.33333333%
        }

        .col-xs-push-5 {
            left: 41.66666667%
        }

        .col-xs-push-6 {
            left: 50%
        }

        .col-xs-push-7 {
            left: 58.33333333%
        }

        .col-xs-push-8 {
            left: 66.66666667%
        }

        .col-xs-push-9 {
            left: 75%
        }

        .col-xs-push-10 {
            left: 83.33333333%
        }

        .col-xs-push-11 {
            left: 91.66666667%
        }

        .col-xs-push-12 {
            left: 100%
        }

        .col-xs-offset-0 {
            margin-left: 0
        }

        .col-xs-offset-1 {
            margin-left: 8.33333333%
        }

        .col-xs-offset-2 {
            margin-left: 16.66666667%
        }

        .col-xs-offset-3 {
            margin-left: 25%
        }

        .col-xs-offset-4 {
            margin-left: 33.33333333%
        }

        .col-xs-offset-5 {
            margin-left: 41.66666667%
        }

        .col-xs-offset-6 {
            margin-left: 50%
        }

        .col-xs-offset-7 {
            margin-left: 58.33333333%
        }

        .col-xs-offset-8 {
            margin-left: 66.66666667%
        }

        .col-xs-offset-9 {
            margin-left: 75%
        }

        .col-xs-offset-10 {
            margin-left: 83.33333333%
        }

        .col-xs-offset-11 {
            margin-left: 91.66666667%
        }

        .col-xs-offset-12 {
            margin-left: 100%
        }

        @media (min-width:768px) {

            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9 {
                float: left
            }

            .col-sm-1 {
                width: 8.33333333%
            }

            .col-sm-2 {
                width: 16.66666667%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-4 {
                width: 33.33333333%
            }

            .col-sm-5 {
                width: 41.66666667%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-10 {
                width: 83.33333333%
            }

            .col-sm-11 {
                width: 91.66666667%
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-pull-0 {
                right: auto
            }

            .col-sm-pull-1 {
                right: 8.33333333%
            }

            .col-sm-pull-2 {
                right: 16.66666667%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-4 {
                right: 33.33333333%
            }

            .col-sm-pull-5 {
                right: 41.66666667%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-7 {
                right: 58.33333333%
            }

            .col-sm-pull-8 {
                right: 66.66666667%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-10 {
                right: 83.33333333%
            }

            .col-sm-pull-11 {
                right: 91.66666667%
            }

            .col-sm-pull-12 {
                right: 100%
            }

            .col-sm-push-0 {
                left: auto
            }

            .col-sm-push-1 {
                left: 8.33333333%
            }

            .col-sm-push-2 {
                left: 16.66666667%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-4 {
                left: 33.33333333%
            }

            .col-sm-push-5 {
                left: 41.66666667%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-7 {
                left: 58.33333333%
            }

            .col-sm-push-8 {
                left: 66.66666667%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-10 {
                left: 83.33333333%
            }

            .col-sm-push-11 {
                left: 91.66666667%
            }

            .col-sm-push-12 {
                left: 100%
            }

            .col-sm-offset-0 {
                margin-left: 0
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%
            }

            .col-sm-offset-2 {
                margin-left: 16.66666667%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333%
            }

            .col-sm-offset-5 {
                margin-left: 41.66666667%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-7 {
                margin-left: 58.33333333%
            }

            .col-sm-offset-8 {
                margin-left: 66.66666667%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333%
            }

            .col-sm-offset-11 {
                margin-left: 91.66666667%
            }

            .col-sm-offset-12 {
                margin-left: 100%
            }
        }

        @media (min-width:992px) {

            .col-md-1,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9 {
                float: left
            }

            .col-md-1 {
                width: 8.33333333%
            }

            .col-md-2 {
                width: 16.66666667%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-5 {
                width: 41.66666667%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-10 {
                width: 83.33333333%
            }

            .col-md-11 {
                width: 91.66666667%
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-pull-1 {
                right: 8.33333333%
            }

            .col-md-pull-2 {
                right: 16.66666667%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-4 {
                right: 33.33333333%
            }

            .col-md-pull-5 {
                right: 41.66666667%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-7 {
                right: 58.33333333%
            }

            .col-md-pull-8 {
                right: 66.66666667%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-10 {
                right: 83.33333333%
            }

            .col-md-pull-11 {
                right: 91.66666667%
            }

            .col-md-pull-12 {
                right: 100%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-push-1 {
                left: 8.33333333%
            }

            .col-md-push-2 {
                left: 16.66666667%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-4 {
                left: 33.33333333%
            }

            .col-md-push-5 {
                left: 41.66666667%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-7 {
                left: 58.33333333%
            }

            .col-md-push-8 {
                left: 66.66666667%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-10 {
                left: 83.33333333%
            }

            .col-md-push-11 {
                left: 91.66666667%
            }

            .col-md-push-12 {
                left: 100%
            }

            .col-md-offset-0 {
                margin-left: 0
            }

            .col-md-offset-1 {
                margin-left: 8.33333333%
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%
            }

            .col-md-offset-5 {
                margin-left: 41.66666667%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-7 {
                margin-left: 58.33333333%
            }

            .col-md-offset-8 {
                margin-left: 66.66666667%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-10 {
                margin-left: 83.33333333%
            }

            .col-md-offset-11 {
                margin-left: 91.66666667%
            }

            .col-md-offset-12 {
                margin-left: 100%
            }
        }

        @media (min-width:1200px) {

            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9 {
                float: left
            }

            .col-lg-1 {
                width: 8.33333333%
            }

            .col-lg-2 {
                width: 16.66666667%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-4 {
                width: 33.33333333%
            }

            .col-lg-5 {
                width: 41.66666667%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-7 {
                width: 58.33333333%
            }

            .col-lg-8 {
                width: 66.66666667%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-10 {
                width: 83.33333333%
            }

            .col-lg-11 {
                width: 91.66666667%
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-pull-0 {
                right: auto
            }

            .col-lg-pull-1 {
                right: 8.33333333%
            }

            .col-lg-pull-2 {
                right: 16.66666667%
            }

            .col-lg-pull-3 {
                right: 25%
            }

            .col-lg-pull-4 {
                right: 33.33333333%
            }

            .col-lg-pull-5 {
                right: 41.66666667%
            }

            .col-lg-pull-6 {
                right: 50%
            }

            .col-lg-pull-7 {
                right: 58.33333333%
            }

            .col-lg-pull-8 {
                right: 66.66666667%
            }

            .col-lg-pull-9 {
                right: 75%
            }

            .col-lg-pull-10 {
                right: 83.33333333%
            }

            .col-lg-pull-11 {
                right: 91.66666667%
            }

            .col-lg-pull-12 {
                right: 100%
            }

            .col-lg-push-0 {
                left: auto
            }

            .col-lg-push-1 {
                left: 8.33333333%
            }

            .col-lg-push-2 {
                left: 16.66666667%
            }

            .col-lg-push-3 {
                left: 25%
            }

            .col-lg-push-4 {
                left: 33.33333333%
            }

            .col-lg-push-5 {
                left: 41.66666667%
            }

            .col-lg-push-6 {
                left: 50%
            }

            .col-lg-push-7 {
                left: 58.33333333%
            }

            .col-lg-push-8 {
                left: 66.66666667%
            }

            .col-lg-push-9 {
                left: 75%
            }

            .col-lg-push-10 {
                left: 83.33333333%
            }

            .col-lg-push-11 {
                left: 91.66666667%
            }

            .col-lg-push-12 {
                left: 100%
            }

            .col-lg-offset-0 {
                margin-left: 0
            }

            .col-lg-offset-1 {
                margin-left: 8.33333333%
            }

            .col-lg-offset-2 {
                margin-left: 16.66666667%
            }

            .col-lg-offset-3 {
                margin-left: 25%
            }

            .col-lg-offset-4 {
                margin-left: 33.33333333%
            }

            .col-lg-offset-5 {
                margin-left: 41.66666667%
            }

            .col-lg-offset-6 {
                margin-left: 50%
            }

            .col-lg-offset-7 {
                margin-left: 58.33333333%
            }

            .col-lg-offset-8 {
                margin-left: 66.66666667%
            }

            .col-lg-offset-9 {
                margin-left: 75%
            }

            .col-lg-offset-10 {
                margin-left: 83.33333333%
            }

            .col-lg-offset-11 {
                margin-left: 91.66666667%
            }

            .col-lg-offset-12 {
                margin-left: 100%
            }
        }

        fieldset {
            margin: 0;
            min-width: 0
        }

        fieldset,
        legend {
            border: 0;
            padding: 0
        }

        legend {
            border-bottom: 1px solid #e5e5e5;
            color: #333;
            display: block;
            font-size: 24px;
            line-height: inherit;
            margin-bottom: 22px;
            width: 100%
        }

        label {
            display: inline-block;
            font-weight: 700;
            margin-bottom: 5px;
            max-width: 100%
        }

        input[type=search] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        input[type=checkbox],
        input[type=radio] {
            line-height: normal;
            margin: 4px 0 0;
            margin-top: 1px\9
        }

        input[type=file] {
            display: block
        }

        input[type=range] {
            display: block;
            width: 100%
        }

        select[multiple],
        select[size] {
            height: auto
        }

        input[type=checkbox]:focus,
        input[type=file]:focus,
        input[type=radio]:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        output {
            padding-top: 7px
        }

        .form-control,
        output {
            color: #555;
            display: block;
            font-size: 16px;
            line-height: 1.42857143
        }

        .form-control {
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 36px;
            padding: 6px 12px;
            -webkit-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -o-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 100%
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #999
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eee;
            opacity: 1
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed
        }

        textarea.form-control {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {

            input[type=date].form-control,
            input[type=datetime-local].form-control,
            input[type=month].form-control,
            input[type=time].form-control {
                line-height: 36px
            }

            .input-group-sm input[type=date],
            .input-group-sm input[type=datetime-local],
            .input-group-sm input[type=month],
            .input-group-sm input[type=time],
            .input-group-sm>.input-group-btn>input.btn[type=date],
            .input-group-sm>.input-group-btn>input.btn[type=datetime-local],
            .input-group-sm>.input-group-btn>input.btn[type=month],
            .input-group-sm>.input-group-btn>input.btn[type=time],
            .input-group-sm>input.form-control[type=date],
            .input-group-sm>input.form-control[type=datetime-local],
            .input-group-sm>input.form-control[type=month],
            .input-group-sm>input.form-control[type=time],
            .input-group-sm>input.input-group-addon[type=date],
            .input-group-sm>input.input-group-addon[type=datetime-local],
            .input-group-sm>input.input-group-addon[type=month],
            .input-group-sm>input.input-group-addon[type=time],
            input[type=date].input-sm,
            input[type=datetime-local].input-sm,
            input[type=month].input-sm,
            input[type=time].input-sm {
                line-height: 33px
            }

            .input-group-lg input[type=date],
            .input-group-lg input[type=datetime-local],
            .input-group-lg input[type=month],
            .input-group-lg input[type=time],
            .input-group-lg>.input-group-btn>input.btn[type=date],
            .input-group-lg>.input-group-btn>input.btn[type=datetime-local],
            .input-group-lg>.input-group-btn>input.btn[type=month],
            .input-group-lg>.input-group-btn>input.btn[type=time],
            .input-group-lg>input.form-control[type=date],
            .input-group-lg>input.form-control[type=datetime-local],
            .input-group-lg>input.form-control[type=month],
            .input-group-lg>input.form-control[type=time],
            .input-group-lg>input.input-group-addon[type=date],
            .input-group-lg>input.input-group-addon[type=datetime-local],
            .input-group-lg>input.input-group-addon[type=month],
            .input-group-lg>input.input-group-addon[type=time],
            input[type=date].input-lg,
            input[type=datetime-local].input-lg,
            input[type=month].input-lg,
            input[type=time].input-lg {
                line-height: 49px
            }
        }

        .form-group {
            margin-bottom: 15px
        }

        .checkbox,
        .radio {
            display: block;
            margin-bottom: 10px;
            margin-top: 10px;
            position: relative
        }

        .checkbox label,
        .radio label {
            cursor: pointer;
            font-weight: 400;
            margin-bottom: 0;
            min-height: 22px;
            padding-left: 20px
        }

        .checkbox input[type=checkbox],
        .checkbox-inline input[type=checkbox],
        .radio input[type=radio],
        .radio-inline input[type=radio] {
            margin-left: -20px;
            margin-top: 4px\9;
            position: absolute
        }

        .checkbox+.checkbox,
        .radio+.radio {
            margin-top: -5px
        }

        .checkbox-inline,
        .radio-inline {
            cursor: pointer;
            display: inline-block;
            font-weight: 400;
            margin-bottom: 0;
            padding-left: 20px;
            position: relative;
            vertical-align: middle
        }

        .checkbox-inline+.checkbox-inline,
        .radio-inline+.radio-inline {
            margin-left: 10px;
            margin-top: 0
        }

        .checkbox-inline.disabled,
        .checkbox.disabled label,
        .radio-inline.disabled,
        .radio.disabled label,
        fieldset[disabled] .checkbox label,
        fieldset[disabled] .checkbox-inline,
        fieldset[disabled] .radio label,
        fieldset[disabled] .radio-inline,
        fieldset[disabled] input[type=checkbox],
        fieldset[disabled] input[type=radio],
        input[type=checkbox].disabled,
        input[type=checkbox][disabled],
        input[type=radio].disabled,
        input[type=radio][disabled] {
            cursor: not-allowed
        }

        .form-control-static {
            margin-bottom: 0;
            min-height: 38px;
            padding-bottom: 7px;
            padding-top: 7px
        }

        .form-control-static.input-lg,
        .form-control-static.input-sm,
        .input-group-lg>.form-control-static.form-control,
        .input-group-lg>.form-control-static.input-group-addon,
        .input-group-lg>.input-group-btn>.form-control-static.btn,
        .input-group-sm>.form-control-static.form-control,
        .input-group-sm>.form-control-static.input-group-addon,
        .input-group-sm>.input-group-btn>.form-control-static.btn {
            padding-left: 0;
            padding-right: 0
        }

        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn,
        .input-sm {
            border-radius: 3px;
            font-size: 14px;
            height: 33px;
            line-height: 1.5;
            padding: 5px 10px
        }

        .input-group-sm>.input-group-btn>select.btn,
        .input-group-sm>select.form-control,
        .input-group-sm>select.input-group-addon,
        select.input-sm {
            height: 33px;
            line-height: 33px
        }

        .input-group-sm>.input-group-btn>select.btn[multiple],
        .input-group-sm>.input-group-btn>textarea.btn,
        .input-group-sm>select.form-control[multiple],
        .input-group-sm>select.input-group-addon[multiple],
        .input-group-sm>textarea.form-control,
        .input-group-sm>textarea.input-group-addon,
        select[multiple].input-sm,
        textarea.input-sm {
            height: auto
        }

        .form-group-sm .form-control {
            border-radius: 3px;
            font-size: 14px;
            height: 33px;
            line-height: 1.5;
            padding: 5px 10px
        }

        .form-group-sm select.form-control {
            height: 33px;
            line-height: 33px
        }

        .form-group-sm select[multiple].form-control,
        .form-group-sm textarea.form-control {
            height: auto
        }

        .form-group-sm .form-control-static {
            font-size: 14px;
            height: 33px;
            line-height: 1.5;
            min-height: 36px;
            padding: 6px 10px
        }

        .input-group-lg>.form-control,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.btn,
        .input-lg {
            border-radius: 6px;
            font-size: 20px;
            height: 49px;
            line-height: 1.3333333;
            padding: 10px 16px
        }

        .input-group-lg>.input-group-btn>select.btn,
        .input-group-lg>select.form-control,
        .input-group-lg>select.input-group-addon,
        select.input-lg {
            height: 49px;
            line-height: 49px
        }

        .input-group-lg>.input-group-btn>select.btn[multiple],
        .input-group-lg>.input-group-btn>textarea.btn,
        .input-group-lg>select.form-control[multiple],
        .input-group-lg>select.input-group-addon[multiple],
        .input-group-lg>textarea.form-control,
        .input-group-lg>textarea.input-group-addon,
        select[multiple].input-lg,
        textarea.input-lg {
            height: auto
        }

        .form-group-lg .form-control {
            border-radius: 6px;
            font-size: 20px;
            height: 49px;
            line-height: 1.3333333;
            padding: 10px 16px
        }

        .form-group-lg select.form-control {
            height: 49px;
            line-height: 49px
        }

        .form-group-lg select[multiple].form-control,
        .form-group-lg textarea.form-control {
            height: auto
        }

        .form-group-lg .form-control-static {
            font-size: 20px;
            height: 49px;
            line-height: 1.3333333;
            min-height: 42px;
            padding: 11px 16px
        }

        .has-feedback {
            position: relative
        }

        .has-feedback .form-control {
            padding-right: 45px
        }

        .form-control-feedback {
            display: block;
            height: 36px;
            line-height: 36px;
            pointer-events: none;
            position: absolute;
            right: 0;
            text-align: center;
            top: 0;
            width: 36px;
            z-index: 2
        }

        .form-group-lg .form-control+.form-control-feedback,
        .input-group-lg+.form-control-feedback,
        .input-group-lg>.form-control+.form-control-feedback,
        .input-group-lg>.input-group-addon+.form-control-feedback,
        .input-group-lg>.input-group-btn>.btn+.form-control-feedback,
        .input-lg+.form-control-feedback {
            height: 49px;
            line-height: 49px;
            width: 49px
        }

        .form-group-sm .form-control+.form-control-feedback,
        .input-group-sm+.form-control-feedback,
        .input-group-sm>.form-control+.form-control-feedback,
        .input-group-sm>.input-group-addon+.form-control-feedback,
        .input-group-sm>.input-group-btn>.btn+.form-control-feedback,
        .input-sm+.form-control-feedback {
            height: 33px;
            line-height: 33px;
            width: 33px
        }

        .has-success .checkbox,
        .has-success .checkbox-inline,
        .has-success .control-label,
        .has-success .help-block,
        .has-success .radio,
        .has-success .radio-inline,
        .has-success.checkbox label,
        .has-success.checkbox-inline label,
        .has-success.radio label,
        .has-success.radio-inline label {
            color: #3c763d
        }

        .has-success .form-control {
            border-color: #3c763d;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-success .form-control:focus {
            border-color: #2b542c
        }

        .has-success .input-group-addon {
            background-color: #dff0d8;
            border-color: #3c763d;
            color: #3c763d
        }

        .has-success .form-control-feedback {
            color: #3c763d
        }

        .has-warning .checkbox,
        .has-warning .checkbox-inline,
        .has-warning .control-label,
        .has-warning .help-block,
        .has-warning .radio,
        .has-warning .radio-inline,
        .has-warning.checkbox label,
        .has-warning.checkbox-inline label,
        .has-warning.radio label,
        .has-warning.radio-inline label {
            color: #8a6d3b
        }

        .has-warning .form-control {
            border-color: #8a6d3b;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-warning .form-control:focus {
            border-color: #66512c
        }

        .has-warning .input-group-addon {
            background-color: #fcf8e3;
            border-color: #8a6d3b;
            color: #8a6d3b
        }

        .has-warning .form-control-feedback {
            color: #8a6d3b
        }

        .has-error .checkbox,
        .has-error .checkbox-inline,
        .has-error .control-label,
        .has-error .help-block,
        .has-error .radio,
        .has-error .radio-inline,
        .has-error.checkbox label,
        .has-error.checkbox-inline label,
        .has-error.radio label,
        .has-error.radio-inline label {
            color: #a94442
        }

        .has-error .form-control {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-error .form-control:focus {
            border-color: #843534
        }

        .has-error .input-group-addon {
            background-color: #f2dede;
            border-color: #a94442;
            color: #a94442
        }

        .has-error .form-control-feedback {
            color: #a94442
        }

        .has-feedback label~.form-control-feedback {
            top: 27px
        }

        .has-feedback label.sr-only~.form-control-feedback {
            top: 0
        }

        .help-block {
            color: #737373;
            display: block;
            margin-bottom: 10px;
            margin-top: 5px
        }

        @media (min-width:768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .form-control {
                display: inline-block;
                vertical-align: middle;
                width: auto
            }

            .form-inline .form-control-static {
                display: inline-block
            }

            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .form-inline .input-group .form-control,
            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn {
                width: auto
            }

            .form-inline .input-group>.form-control {
                width: 100%
            }

            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .checkbox,
            .form-inline .radio {
                display: inline-block;
                margin-bottom: 0;
                margin-top: 0;
                vertical-align: middle
            }

            .form-inline .checkbox label,
            .form-inline .radio label {
                padding-left: 0
            }

            .form-inline .checkbox input[type=checkbox],
            .form-inline .radio input[type=radio] {
                margin-left: 0;
                position: relative
            }

            .form-inline .has-feedback .form-control-feedback {
                top: 0
            }
        }

        .form-horizontal .checkbox,
        .form-horizontal .checkbox-inline,
        .form-horizontal .radio,
        .form-horizontal .radio-inline {
            margin-bottom: 0;
            margin-top: 0;
            padding-top: 7px
        }

        .form-horizontal .checkbox,
        .form-horizontal .radio {
            min-height: 29px
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px
        }

        .form-horizontal .form-group:after,
        .form-horizontal .form-group:before {
            content: " ";
            display: table
        }

        .form-horizontal .form-group:after {
            clear: both
        }

        @media (min-width:768px) {
            .form-horizontal .control-label {
                margin-bottom: 0;
                padding-top: 7px;
                text-align: right
            }
        }

        .form-horizontal .has-feedback .form-control-feedback {
            right: 15px
        }

        @media (min-width:768px) {
            .form-horizontal .form-group-lg .control-label {
                font-size: 20px;
                padding-top: 11px
            }

            .form-horizontal .form-group-sm .control-label {
                font-size: 14px;
                padding-top: 6px
            }
        }

        .control-label,
        .title {
            font-size: 12px;
            font-weight: 400;
            margin-bottom: 0
        }

        .title {
            display: block;
            margin: 0;
            text-transform: none
        }

        .btn {
            background-image: none;
            border: 1px solid transparent;
            border-radius: 32px;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            line-height: 1.42857143;
            margin-bottom: 0;
            padding: 6px 12px;
            text-align: center;
            touch-action: manipulation;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            white-space: nowrap
        }

        .btn.active.focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn:active:focus,
        .btn:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        .btn.focus,
        .btn:focus,
        .btn:hover {
            color: #69BD45;
            text-decoration: none
        }

        .btn.active,
        .btn:active {
            background-image: none;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            outline: 0
        }

        .btn.disabled,
        .btn[disabled],
        .cta.disabled,
        fieldset[disabled] .btn {
            -webkit-box-shadow: none;
            box-shadow: none;
            cursor: not-allowed;
            filter: alpha(opacity=65);
            opacity: .65
        }

        a.btn.disabled,
        a.cta.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none
        }

        .btn-default {
            background-color: #2d2d2d;
            border-color: #d9dde0;
            color: #69BD45
        }

        .btn-default.focus,
        .btn-default:focus {
            background-color: #141313;
            border-color: #939ea7;
            color: #69BD45;
            outline: none
        }

        .btn-default.active,
        .btn-default:active,
        .btn-default:hover,
        .open>.btn-default.dropdown-toggle {
            background-color: #141313;
            border-color: #b7bfc5;
            color: #69BD45
        }

        .btn-default.active.focus,
        .btn-default.active:focus,
        .btn-default.active:hover,
        .btn-default:active.focus,
        .btn-default:active:focus,
        .btn-default:active:hover,
        .open>.btn-default.dropdown-toggle.focus,
        .open>.btn-default.dropdown-toggle:focus,
        .open>.btn-default.dropdown-toggle:hover {
            background-color: #020202;
            border-color: #939ea7;
            color: #69BD45;
            outline: none
        }

        .btn-default.active,
        .btn-default:active,
        .open>.btn-default.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-default.disabled.focus,
        .btn-default.disabled:focus,
        .btn-default.disabled:hover,
        .btn-default[disabled].focus,
        .btn-default[disabled]:focus,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default.focus,
        fieldset[disabled] .btn-default:focus,
        fieldset[disabled] .btn-default:hover {
            background-color: #2d2d2d;
            border-color: #d9dde0
        }

        .btn-default .badge {
            background-color: #69BD45;
            color: #2d2d2d
        }

        .btn-primary {
            background-color: #69BD45;
            border-color: #69BD45;
            color: #040404
        }

        .btn-primary.focus,
        .btn-primary:focus {
            background-color: #ccaf00;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .btn-primary.active,
        .btn-primary:active,
        .btn-primary:hover,
        .open>.btn-primary.dropdown-toggle {
            background-color: #ccaf00;
            border-color: #c2a600;
            color: #040404
        }

        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary:active.focus,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .open>.btn-primary.dropdown-toggle.focus,
        .open>.btn-primary.dropdown-toggle:focus,
        .open>.btn-primary.dropdown-toggle:hover {
            background-color: #a89100;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .btn-primary.active,
        .btn-primary:active,
        .open>.btn-primary.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-primary.disabled.focus,
        .btn-primary.disabled:focus,
        .btn-primary.disabled:hover,
        .btn-primary[disabled].focus,
        .btn-primary[disabled]:focus,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary.focus,
        fieldset[disabled] .btn-primary:focus,
        fieldset[disabled] .btn-primary:hover {
            background-color: #69BD45;
            border-color: #69BD45
        }

        .btn-primary .badge {
            background-color: #040404;
            color: #69BD45
        }

        .btn-success {
            background-color: #72c41d;
            border-color: #65ae1a;
            color: #fff
        }

        .btn-success.focus,
        .btn-success:focus {
            background-color: #589816;
            border-color: #243f09;
            color: #fff;
            outline: none
        }

        .btn-success.active,
        .btn-success:active,
        .btn-success:hover,
        .open>.btn-success.dropdown-toggle {
            background-color: #589816;
            border-color: #467812;
            color: #fff
        }

        .btn-success.active.focus,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .btn-success:active.focus,
        .btn-success:active:focus,
        .btn-success:active:hover,
        .open>.btn-success.dropdown-toggle.focus,
        .open>.btn-success.dropdown-toggle:focus,
        .open>.btn-success.dropdown-toggle:hover {
            background-color: #467812;
            border-color: #243f09;
            color: #fff;
            outline: none
        }

        .btn-success.active,
        .btn-success:active,
        .open>.btn-success.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-success.disabled.focus,
        .btn-success.disabled:focus,
        .btn-success.disabled:hover,
        .btn-success[disabled].focus,
        .btn-success[disabled]:focus,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success.focus,
        fieldset[disabled] .btn-success:focus,
        fieldset[disabled] .btn-success:hover {
            background-color: #72c41d;
            border-color: #65ae1a
        }

        .btn-success .badge {
            background-color: #fff;
            color: #72c41d
        }

        .btn-info {
            background-color: #5bc0de;
            border-color: #46b8da;
            color: #fff
        }

        .btn-info.focus,
        .btn-info:focus {
            background-color: #31b0d5;
            border-color: #1b6d85;
            color: #fff;
            outline: none
        }

        .btn-info.active,
        .btn-info:active,
        .btn-info:hover,
        .open>.btn-info.dropdown-toggle {
            background-color: #31b0d5;
            border-color: #269abc;
            color: #fff
        }

        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info:active.focus,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .open>.btn-info.dropdown-toggle.focus,
        .open>.btn-info.dropdown-toggle:focus,
        .open>.btn-info.dropdown-toggle:hover {
            background-color: #269abc;
            border-color: #1b6d85;
            color: #fff;
            outline: none
        }

        .btn-info.active,
        .btn-info:active,
        .open>.btn-info.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-info.disabled.focus,
        .btn-info.disabled:focus,
        .btn-info.disabled:hover,
        .btn-info[disabled].focus,
        .btn-info[disabled]:focus,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info.focus,
        fieldset[disabled] .btn-info:focus,
        fieldset[disabled] .btn-info:hover {
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-info .badge {
            background-color: #fff;
            color: #5bc0de
        }

        .btn-inverted {
            background-color: #363636;
            border-color: #363636;
            color: #fff
        }

        .btn-inverted.focus,
        .btn-inverted:focus {
            background-color: #1d1c1c;
            border-color: #000;
            color: #fff;
            outline: none
        }

        .btn-inverted.active,
        .btn-inverted:active,
        .btn-inverted:hover,
        .open>.btn-inverted.dropdown-toggle {
            background-color: #1d1c1c;
            border-color: #171717;
            color: #fff
        }

        .btn-inverted.active.focus,
        .btn-inverted.active:focus,
        .btn-inverted.active:hover,
        .btn-inverted:active.focus,
        .btn-inverted:active:focus,
        .btn-inverted:active:hover,
        .open>.btn-inverted.dropdown-toggle.focus,
        .open>.btn-inverted.dropdown-toggle:focus,
        .open>.btn-inverted.dropdown-toggle:hover {
            background-color: #0b0b0b;
            border-color: #000;
            color: #fff;
            outline: none
        }

        .btn-inverted.active,
        .btn-inverted:active,
        .open>.btn-inverted.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-inverted.disabled.focus,
        .btn-inverted.disabled:focus,
        .btn-inverted.disabled:hover,
        .btn-inverted[disabled].focus,
        .btn-inverted[disabled]:focus,
        .btn-inverted[disabled]:hover,
        fieldset[disabled] .btn-inverted.focus,
        fieldset[disabled] .btn-inverted:focus,
        fieldset[disabled] .btn-inverted:hover {
            background-color: #363636;
            border-color: #363636
        }

        .btn-inverted .badge {
            background-color: #fff;
            color: #363636
        }

        .btn-warning {
            background-color: #f0ad4e;
            border-color: #eea236;
            color: #fff
        }

        .btn-warning.focus,
        .btn-warning:focus {
            background-color: #ec971f;
            border-color: #985f0d;
            color: #fff;
            outline: none
        }

        .btn-warning.active,
        .btn-warning:active,
        .btn-warning:hover,
        .open>.btn-warning.dropdown-toggle {
            background-color: #ec971f;
            border-color: #d58512;
            color: #fff
        }

        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning:active.focus,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .open>.btn-warning.dropdown-toggle.focus,
        .open>.btn-warning.dropdown-toggle:focus,
        .open>.btn-warning.dropdown-toggle:hover {
            background-color: #d58512;
            border-color: #985f0d;
            color: #fff;
            outline: none
        }

        .btn-warning.active,
        .btn-warning:active,
        .open>.btn-warning.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-warning.disabled.focus,
        .btn-warning.disabled:focus,
        .btn-warning.disabled:hover,
        .btn-warning[disabled].focus,
        .btn-warning[disabled]:focus,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning.focus,
        fieldset[disabled] .btn-warning:focus,
        fieldset[disabled] .btn-warning:hover {
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-warning .badge {
            background-color: #fff;
            color: #f0ad4e
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff
        }

        .btn-danger.focus,
        .btn-danger:focus {
            background-color: #c9302c;
            border-color: #761c19;
            color: #fff;
            outline: none
        }

        .btn-danger.active,
        .btn-danger:active,
        .btn-danger:hover,
        .open>.btn-danger.dropdown-toggle {
            background-color: #c9302c;
            border-color: #ac2925;
            color: #fff
        }

        .btn-danger.active.focus,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .btn-danger:active.focus,
        .btn-danger:active:focus,
        .btn-danger:active:hover,
        .open>.btn-danger.dropdown-toggle.focus,
        .open>.btn-danger.dropdown-toggle:focus,
        .open>.btn-danger.dropdown-toggle:hover {
            background-color: #ac2925;
            border-color: #761c19;
            color: #fff;
            outline: none
        }

        .btn-danger.active,
        .btn-danger:active,
        .open>.btn-danger.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-danger.disabled.focus,
        .btn-danger.disabled:focus,
        .btn-danger.disabled:hover,
        .btn-danger[disabled].focus,
        .btn-danger[disabled]:focus,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger.focus,
        fieldset[disabled] .btn-danger:focus,
        fieldset[disabled] .btn-danger:hover {
            background-color: #d9534f;
            border-color: #d43f3a
        }

        .btn-danger .badge {
            background-color: #fff;
            color: #d9534f
        }

        .btn-link {
            border-radius: 0;
            color: #4990e2;
            font-weight: 400
        }

        .btn-link,
        .btn-link.active,
        .btn-link:active,
        .btn-link[disabled],
        fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-link,
        .btn-link:active,
        .btn-link:focus,
        .btn-link:hover {
            border-color: transparent
        }

        .btn-link:focus,
        .btn-link:hover {
            background-color: transparent;
            color: #2276d6;
            text-decoration: none
        }

        .btn-link[disabled]:focus,
        .btn-link[disabled]:hover,
        fieldset[disabled] .btn-link:focus,
        fieldset[disabled] .btn-link:hover {
            color: #777;
            text-decoration: none
        }

        .btn-group-lg>.btn,
        .btn-lg,
        div.editor-orientation-landscape .tool-pane .footer .btn {
            border-radius: 32px;
            font-size: 20px;
            line-height: 1.3333333;
            padding: 10px 16px
        }

        .btn-group-sm>.btn,
        .btn-sm {
            border-radius: 32px;
            font-size: 14px;
            line-height: 1.5;
            padding: 5px 10px
        }

        .btn-group-xs>.btn,
        .btn-xs {
            border-radius: 32px;
            font-size: 14px;
            line-height: 1.5;
            padding: 1px 5px
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: 5px
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        .btn.btn-buy {
            font-weight: 300
        }

        .btn-group-lg>.btn.btn-buy,
        .btn.btn-buy.btn-lg,
        div.editor-orientation-landscape .tool-pane .footer .btn.btn-buy {
            padding: 16px
        }

        .btn.btn-buy .border-left {
            border-left: 1px solid hsla(0, 0%, 100%, .1)
        }

        .btn.btn-buy .animated {
            -webkit-animation-duration: .5s;
            animation-duration: .5s
        }

        .btn.btn-buy:focus {
            outline: none
        }

        .row-btn-group-buy>div {
            margin-top: 5px
        }

        .navbar-collapse .btn-checkout,
        ul.nav-mobile .btn-checkout {
            background-color: #333
        }

        .navbar-collapse .btn-checkout.affix:hover {
            background-color: #333;
            color: #fff
        }

        .btn-checkout.animated {
            -webkit-animation-duration: .5s;
            animation-duration: .5s
        }

        .btn-checkout.affix {
            position: fixed;
            top: 0
        }

        .btn-checkout .inner {
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            display: block
        }

        .btn.dropdown-toggle.text-ellipsis {
            text-align: left
        }

        .btn.dropdown-toggle.text-ellipsis .caret {
            position: absolute;
            right: 4px;
            top: 15px
        }

        .f-btn {
            align-items: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex
        }

        .f-btn [class*=" icon-"]:before,
        .f-btn>[class^=icon-]:before {
            margin-left: 0
        }

        .btn-grey {
            background: rgba(0, 0, 0, .1);
            color: #333
        }

        .btn-grey:hover {
            background: rgba(0, 0, 0, .2)
        }

        .btn-xl {
            font-size: 20px;
            padding: 15px 30px
        }

        .btn-xl.btn-block {
            padding: 15px 0
        }

        .cta:not(.disabled) {
            cursor: pointer
        }

        .cta:not(.disabled):hover {
            color: #000
        }

        .cta:not(.disabled) label {
            cursor: pointer
        }

        .cta.disabled small {
            line-height: 2em;
            margin-left: auto
        }

        .cta.active {
            color: #000
        }

        .f-row-as-li.cta:hover {
            background-color: #f5f5f5
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear
        }

        .fade.in {
            opacity: 1
        }

        .collapse {
            display: none
        }

        .collapse.in {
            display: block
        }

        tr.collapse.in {
            display: table-row
        }

        tbody.collapse.in {
            display: table-row-group
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            position: relative;
            -webkit-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-property: height, visibility;
            transition-property: height, visibility;
            -webkit-transition-timing-function: ease;
            transition-timing-function: ease
        }

        .caret {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px dashed;
            border-top: 4px solid\9;
            display: inline-block;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            width: 0
        }

        .dropdown,
        .dropup {
            position: relative
        }

        .dropdown.caret-left .btn-dropdown,
        .dropup.caret-left .btn-dropdown {
            text-align: right
        }

        .dropdown.caret-left .btn-dropdown:active,
        .dropdown.caret-left .btn-dropdown:focus,
        .dropup.caret-left .btn-dropdown:active,
        .dropup.caret-left .btn-dropdown:focus {
            outline: 0
        }

        .dropdown.caret-left .btn-dropdown .caret,
        .dropup.caret-left .btn-dropdown .caret {
            left: 15px;
            position: absolute;
            top: 18px
        }

        .dropdown.caret-right .btn-dropdown,
        .dropup.caret-right .btn-dropdown {
            text-align: left
        }

        .dropdown.caret-right .btn-dropdown:active,
        .dropdown.caret-right .btn-dropdown:focus,
        .dropup.caret-right .btn-dropdown:active,
        .dropup.caret-right .btn-dropdown:focus {
            outline: 0
        }

        .dropdown.caret-right .btn-dropdown .caret,
        .dropup.caret-right .btn-dropdown .caret {
            position: absolute;
            right: 15px;
            top: 18px
        }

        .dropdown-toggle:focus {
            outline: 0
        }

        .dropdown-menu {
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: none;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            display: none;
            float: left;
            font-size: 16px;
            left: 0;
            list-style: none;
            margin: 0 0 0 -1px;
            min-width: 160px;
            padding: 0;
            position: absolute;
            text-align: left;
            top: 100%;
            z-index: 1000
        }

        .dropdown-menu.pull-right {
            left: auto;
            right: 0
        }

        .dropdown-menu .divider {
            background-color: #e5e5e5;
            height: 1px;
            margin: 10px 0;
            overflow: hidden
        }

        .dropdown-menu>li>a {
            clear: both;
            color: #333;
            display: block;
            font-weight: 400;
            line-height: 1.42857143;
            padding: 3px 20px;
            white-space: nowrap
        }

        .dropdown-menu>li>.btn,
        .dropdown-menu>li>a {
            background: transparent;
            padding: 5px 12px;
            transition: none
        }

        .dropdown-menu>li>.btn:focus,
        .dropdown-menu>li>.btn:hover,
        .dropdown-menu>li>a:focus,
        .dropdown-menu>li>a:hover {
            background-color: #f5f5f5;
            color: #262626;
            text-decoration: none
        }

        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:focus,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>li>.btn.active,
        .dropdown-menu>li>.btn.active:focus,
        .dropdown-menu>li>.btn.active:hover {
            background-color: #e8e8e8;
            color: #333;
            font-weight: 700;
            outline: 0;
            text-decoration: none
        }

        .dropdown-menu>.disabled>a,
        .dropdown-menu>.disabled>a:focus,
        .dropdown-menu>.disabled>a:hover {
            color: #777
        }

        .dropdown-menu>.disabled>a:focus,
        .dropdown-menu>.disabled>a:hover {
            background-color: transparent;
            background-image: none;
            cursor: not-allowed;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            text-decoration: none
        }

        .open>.dropdown-menu {
            display: block
        }

        .open>a {
            outline: 0
        }

        .dropdown-menu-right {
            left: auto;
            right: 0
        }

        .dropdown-menu-left {
            left: 0;
            right: auto
        }

        .dropdown-header {
            color: #777;
            display: block;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.42857143;
            margin-bottom: 0;
            padding: 3px 12px;
            white-space: nowrap
        }

        .dropdown-backdrop {
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 990
        }

        .pull-right>.dropdown-menu {
            left: auto;
            right: 0
        }

        .dropup .caret,
        .navbar-fixed-bottom .dropdown .caret {
            border-bottom: 4px dashed;
            border-bottom: 4px solid\9;
            border-top: 0;
            content: ""
        }

        .dropup .dropdown-menu,
        .navbar-fixed-bottom .dropdown .dropdown-menu {
            bottom: 100%;
            margin-bottom: 2px;
            top: auto
        }

        @media (min-width:992px) {
            .navbar-right .dropdown-menu {
                left: auto;
                right: 0
            }

            .navbar-right .dropdown-menu-left {
                left: 0;
                right: auto
            }
        }

        .btn-group,
        .btn-group-vertical {
            display: inline-block;
            position: relative;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            float: left;
            position: relative
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 2
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-toolbar {
            margin-left: -5px
        }

        .btn-toolbar:after,
        .btn-toolbar:before {
            content: " ";
            display: table
        }

        .btn-toolbar:after {
            clear: both
        }

        .btn-toolbar .btn,
        .btn-toolbar .btn-group,
        .btn-toolbar .input-group {
            float: left
        }

        .btn-toolbar>.btn,
        .btn-toolbar>.btn-group,
        .btn-toolbar>.input-group {
            margin-left: 5px
        }

        .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
        }

        .btn-group>.btn:first-child {
            margin-left: 0
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group>.btn:last-child:not(:first-child),
        .btn-group>.dropdown-toggle:not(:first-child) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group>.btn-group {
            float: left
        }

        .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .btn-group .dropdown-toggle:active,
        .btn-group.open .dropdown-toggle {
            outline: 0
        }

        .btn-group>.btn+.dropdown-toggle {
            padding-left: 8px;
            padding-right: 8px
        }

        .btn-group-lg.btn-group>.btn+.dropdown-toggle,
        .btn-group>.btn-lg+.dropdown-toggle,
        div.editor-orientation-landscape .tool-pane .footer .btn-group>.btn+.dropdown-toggle {
            padding-left: 12px;
            padding-right: 12px
        }

        .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }

        .btn-group.open .dropdown-toggle.btn-link {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn .caret {
            margin-left: 0
        }

        .btn-group-lg>.btn .caret,
        .btn-lg .caret,
        div.editor-orientation-landscape .tool-pane .footer .btn .caret {
            border-width: 5px 5px 0
        }

        .dropup .btn-group-lg>.btn .caret,
        .dropup .btn-lg .caret,
        .dropup div.editor-orientation-landscape .tool-pane .footer .btn .caret,
        div.editor-orientation-landscape .tool-pane .footer .dropup .btn .caret {
            border-width: 0 5px 5px
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group,
        .btn-group-vertical>.btn-group>.btn {
            display: block;
            float: none;
            max-width: 100%;
            width: 100%
        }

        .btn-group-vertical>.btn-group:after,
        .btn-group-vertical>.btn-group:before {
            content: " ";
            display: table
        }

        .btn-group-vertical>.btn-group:after {
            clear: both
        }

        .btn-group-vertical>.btn-group>.btn {
            float: none
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-left: 0;
            margin-top: -1px
        }

        .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 32px;
            border-top-right-radius: 32px
        }

        .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-bottom-left-radius: 32px;
            border-bottom-right-radius: 32px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-justified {
            border-collapse: separate;
            display: table;
            table-layout: fixed;
            width: 100%
        }

        .btn-group-justified>.btn,
        .btn-group-justified>.btn-group {
            display: table-cell;
            float: none;
            width: 1%
        }

        .btn-group-justified>.btn-group .btn {
            width: 100%
        }

        .btn-group-justified>.btn-group .dropdown-menu {
            left: auto
        }

        [data-toggle=buttons]>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn input[type=radio],
        [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
            position: absolute
        }

        .input-group {
            border-collapse: separate;
            display: table;
            position: relative
        }

        .input-group[class*=col-] {
            float: none;
            padding-left: 0;
            padding-right: 0
        }

        .input-group .form-control {
            float: left;
            margin-bottom: 0;
            position: relative;
            width: 100%;
            z-index: 2
        }

        .input-group .form-control:focus {
            z-index: 3
        }

        .input-group .form-control,
        .input-group-addon,
        .input-group-btn {
            display: table-cell
        }

        .input-group .form-control:not(:first-child):not(:last-child),
        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .input-group-addon,
        .input-group-btn {
            vertical-align: middle;
            white-space: nowrap;
            width: 1%
        }

        .input-group-addon {
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #555;
            font-size: 16px;
            font-weight: 400;
            line-height: 1;
            padding: 6px 12px;
            text-align: center
        }

        .input-group-addon.input-sm,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.input-group-addon.btn {
            border-radius: 3px;
            font-size: 14px;
            padding: 5px 10px
        }

        .input-group-addon.input-lg,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.input-group-addon.btn {
            border-radius: 6px;
            font-size: 20px;
            padding: 10px 16px
        }

        .input-group-addon input[type=checkbox],
        .input-group-addon input[type=radio] {
            margin-top: 0
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group>.btn,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .input-group-addon:first-child {
            border-right: 0
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
        .input-group-btn:first-child>.btn:not(:first-child),
        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group>.btn,
        .input-group-btn:last-child>.dropdown-toggle {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .input-group-addon:last-child {
            border-left: 0
        }

        .input-group-btn {
            font-size: 0;
            white-space: nowrap
        }

        .input-group-btn,
        .input-group-btn>.btn {
            position: relative
        }

        .input-group-btn>.btn+.btn {
            margin-left: -1px
        }

        .input-group-btn>.btn:active,
        .input-group-btn>.btn:focus,
        .input-group-btn>.btn:hover {
            z-index: 2
        }

        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group {
            margin-right: -1px
        }

        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group {
            margin-left: -1px;
            z-index: 2
        }

        .nav {
            list-style: none;
            margin-bottom: 0;
            padding-left: 0
        }

        .nav:after,
        .nav:before {
            content: " ";
            display: table
        }

        .nav:after {
            clear: both
        }

        .nav>li,
        .nav>li>a {
            display: block;
            position: relative
        }

        .nav>li>a {
            padding: 10px 15px
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            background-color: #eee;
            text-decoration: none
        }

        .nav>li.disabled>a {
            color: #777
        }

        .nav>li.disabled>a:focus,
        .nav>li.disabled>a:hover {
            background-color: transparent;
            color: #777;
            cursor: not-allowed;
            text-decoration: none
        }

        .nav .open>a,
        .nav .open>a:focus,
        .nav .open>a:hover {
            background-color: #eee;
            border-color: #4990e2
        }

        .nav .nav-divider {
            background-color: #e5e5e5;
            height: 1px;
            margin: 10px 0;
            overflow: hidden
        }

        .nav>li>a>img {
            max-width: none
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0;
            line-height: 1.42857143;
            margin-right: 2px
        }

        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            background-color: #f5f5f5;
            border: 1px solid;
            border-color: #ddd #ddd transparent;
            color: #555;
            cursor: default
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            border-radius: 4px
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            background-color: #69BD45;
            color: #fff
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-left: 0;
            margin-top: 2px
        }

        .nav-justified,
        .nav-tabs.nav-justified {
            width: 100%
        }

        .nav-justified>li,
        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-justified>li>a,
        .nav-tabs.nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-justified>.dropdown .dropdown-menu {
            left: auto;
            top: auto
        }

        @media (min-width:768px) {

            .nav-justified>li,
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-justified>li>a,
            .nav-tabs.nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs-justified,
        .nav-tabs.nav-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a,
        .nav-tabs.nav-justified>li>a {
            border-radius: 4px;
            margin-right: 0
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover,
        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width:768px) {

            .nav-tabs-justified>li>a,
            .nav-tabs.nav-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs-justified>.active>a:hover,
            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:hover {
                border-bottom-color: #f5f5f5
            }
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .nav-tabs .dropdown-menu {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top: -1px
        }

        .navbar {
            border: 1px solid transparent;
            margin-bottom: none;
            min-height: 60px;
            position: relative
        }

        .navbar:after,
        .navbar:before {
            content: " ";
            display: table
        }

        .navbar:after {
            clear: both
        }

        @media (min-width:992px) {
            .navbar {
                border-radius: 4px
            }
        }

        .navbar-header:not(.stickerapp-nav-mobile):after,
        .navbar-header:not(.stickerapp-nav-mobile):before {
            content: " ";
            display: table
        }

        .navbar-header:not(.stickerapp-nav-mobile):after {
            clear: both
        }

        @media (min-width:992px) {
            .navbar-header:not(.stickerapp-nav-mobile) {
                float: left
            }
        }

        .navbar-collapse {
            -webkit-overflow-scrolling: touch;
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .1);
            overflow-x: visible;
            padding-left: 15px;
            padding-right: 15px
        }

        .navbar-collapse:after,
        .navbar-collapse:before {
            content: " ";
            display: table
        }

        .navbar-collapse:after {
            clear: both
        }

        .navbar-collapse.in {
            overflow-y: auto
        }

        @media (min-width:992px) {
            .navbar-collapse {
                border-top: 0;
                box-shadow: none;
                width: auto
            }

            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                overflow: visible !important;
                padding-bottom: 0
            }

            .navbar-collapse.in {
                overflow-y: visible
            }

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse,
            .navbar-static-top .navbar-collapse {
                padding-left: 0;
                padding-right: 0
            }
        }

        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 340px
        }

        @media (max-device-width:480px) and (orientation:landscape) {

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse {
                max-height: 200px
            }
        }

        .container-fluid>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-left: -15px;
            margin-right: -15px
        }

        @media (min-width:992px) {

            .container-fluid>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container>.navbar-collapse,
            .container>.navbar-header {
                margin-left: 0;
                margin-right: 0
            }
        }

        .navbar-static-top {
            border-width: 0 0 1px;
            z-index: 1000
        }

        @media (min-width:992px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-fixed-bottom,
        .navbar-fixed-top {
            left: 0;
            position: fixed;
            right: 0;
            z-index: 1030
        }

        @media (min-width:992px) {

            .navbar-fixed-bottom,
            .navbar-fixed-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            border-width: 0 0 1px;
            top: 0
        }

        .navbar-fixed-bottom {
            border-width: 1px 0 0;
            bottom: 0;
            margin-bottom: 0
        }

        .navbar-brand {
            float: left;
            font-size: 20px;
            height: 60px;
            line-height: 22px;
            padding: 19px 15px
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-brand>img {
            display: block
        }

        @media (min-width:992px) {

            .navbar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            float: right;
            margin-bottom: 13px;
            margin-right: 15px;
            margin-top: 13px;
            padding: 9px 10px;
            position: relative
        }

        .navbar-toggle:focus {
            outline: 0
        }

        .navbar-toggle .icon-bar {
            border-radius: 1px;
            display: block;
            height: 2px;
            width: 22px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media (min-width:992px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: -5.5px
        }

        .navbar-nav>li>a {
            line-height: 22px;
            padding-bottom: 10px;
            padding-top: 10px
        }

        @media (max-width:991px) {
            .navbar-nav .open .dropdown-menu {
                background-color: transparent;
                border: 0;
                box-shadow: none;
                float: none;
                margin-top: 0;
                position: static;
                width: auto
            }

            .navbar-nav .open .dropdown-menu .dropdown-header,
            .navbar-nav .open .dropdown-menu>li>a {
                padding: 5px 15px 5px 25px
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 22px
            }

            .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-nav .open .dropdown-menu>li>a:hover {
                background-image: none
            }
        }

        @media (min-width:992px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-bottom: 19px;
                padding-top: 19px
            }
        }

        .navbar-form {
            border-bottom: 1px solid transparent;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .1), 0 1px 0 hsla(0, 0%, 100%, .1);
            box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .1), 0 1px 0 hsla(0, 0%, 100%, .1);
            margin: 12px -15px;
            padding: 10px 15px
        }

        @media (min-width:768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .form-control {
                display: inline-block;
                vertical-align: middle;
                width: auto
            }

            .navbar-form .form-control-static {
                display: inline-block
            }

            .navbar-form .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .navbar-form .input-group .form-control,
            .navbar-form .input-group .input-group-addon,
            .navbar-form .input-group .input-group-btn {
                width: auto
            }

            .navbar-form .input-group>.form-control {
                width: 100%
            }

            .navbar-form .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox,
            .navbar-form .radio {
                display: inline-block;
                margin-bottom: 0;
                margin-top: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox label,
            .navbar-form .radio label {
                padding-left: 0
            }

            .navbar-form .checkbox input[type=checkbox],
            .navbar-form .radio input[type=radio] {
                margin-left: 0;
                position: relative
            }

            .navbar-form .has-feedback .form-control-feedback {
                top: 0
            }
        }

        @media (max-width:991px) {
            .navbar-form .form-group {
                margin-bottom: 5px
            }

            .navbar-form .form-group:last-child {
                margin-bottom: 0
            }
        }

        @media (min-width:992px) {
            .navbar-form {
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                margin-left: 0;
                margin-right: 0;
                padding-bottom: 0;
                padding-top: 0;
                width: auto
            }
        }

        .navbar-nav>li>.dropdown-menu {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top: 0
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            margin-bottom: 0
        }

        .navbar-btn {
            margin-bottom: 12px;
            margin-top: 12px
        }

        .btn-group-sm>.navbar-btn.btn,
        .navbar-btn.btn-sm {
            margin-bottom: 13.5px;
            margin-top: 13.5px
        }

        .btn-group-xs>.navbar-btn.btn,
        .navbar-btn.btn-xs,
        .navbar-text {
            margin-bottom: 19px;
            margin-top: 19px
        }

        @media (min-width:992px) {
            .navbar-text {
                float: left;
                margin-left: 15px;
                margin-right: 15px
            }

            .navbar-left {
                float: left !important
            }

            .navbar-right {
                float: right !important;
                margin-right: -15px
            }

            .navbar-right~.navbar-right {
                margin-right: 0
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:focus,
        .navbar-default .navbar-brand:hover {
            background-color: transparent;
            color: #5e5d5d
        }

        .navbar-default .navbar-nav>li>a,
        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:focus,
        .navbar-default .navbar-nav>li>a:hover {
            background-color: transparent;
            color: #333
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            background-color: #e7e7e7;
            color: #555
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:focus,
        .navbar-default .navbar-nav>.disabled>a:hover {
            background-color: transparent;
            color: #ccc
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            background-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:focus,
        .navbar-default .navbar-nav>.open>a:hover {
            background-color: #e7e7e7;
            color: #555
        }

        @media (max-width:991px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                background-color: transparent;
                color: #333
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
                background-color: #e7e7e7;
                color: #555
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                background-color: transparent;
                color: #ccc
            }
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-default .btn-link {
            color: #777
        }

        .navbar-default .btn-link:focus,
        .navbar-default .btn-link:hover {
            color: #333
        }

        .navbar-default .btn-link[disabled]:focus,
        .navbar-default .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-default .btn-link:focus,
        fieldset[disabled] .navbar-default .btn-link:hover {
            color: #ccc
        }

        .navbar-inverse {
            background-color: #333;
            border-color: #1a1919
        }

        .navbar-inverse .navbar-brand {
            color: #fff
        }

        .navbar-inverse .navbar-brand:focus,
        .navbar-inverse .navbar-brand:hover {
            background-color: transparent;
            color: #fff
        }

        .navbar-inverse .navbar-text {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #fff
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            background-color: transparent;
            color: #ddd
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            background-color: #222;
            color: #ddd
        }

        .navbar-inverse .navbar-nav>.disabled>a,
        .navbar-inverse .navbar-nav>.disabled>a:focus,
        .navbar-inverse .navbar-nav>.disabled>a:hover {
            background-color: transparent;
            color: #444
        }

        .navbar-inverse .navbar-toggle {
            border-color: #333
        }

        .navbar-inverse .navbar-toggle:focus,
        .navbar-inverse .navbar-toggle:hover {
            background-color: #333
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #212121
        }

        .navbar-inverse .navbar-nav>.open>a,
        .navbar-inverse .navbar-nav>.open>a:focus,
        .navbar-inverse .navbar-nav>.open>a:hover {
            background-color: #222;
            color: #ddd
        }

        @media (max-width:991px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                border-color: #1a1919
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                background-color: #1a1919
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #fff
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
                background-color: transparent;
                color: #ddd
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
                background-color: #222;
                color: #ddd
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                background-color: transparent;
                color: #444
            }
        }

        .navbar-inverse .navbar-link {
            color: #fff
        }

        .navbar-inverse .navbar-link:hover {
            color: #ddd
        }

        .navbar-inverse .btn-link {
            color: #fff
        }

        .navbar-inverse .btn-link:focus,
        .navbar-inverse .btn-link:hover {
            color: #ddd
        }

        .navbar-inverse .btn-link[disabled]:focus,
        .navbar-inverse .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-inverse .btn-link:focus,
        fieldset[disabled] .navbar-inverse .btn-link:hover {
            color: #444
        }

        .label {
            border-radius: .25em;
            color: #fff;
            display: inline;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            padding: 3px 5px;
            text-align: center;
            vertical-align: baseline;
            white-space: nowrap
        }

        @supports (-moz-appearance:none) {
            .label {
                padding: 5px 5px 3px
            }
        }

        .label:empty {
            display: none
        }

        .btn .label {
            position: relative;
            top: -1px
        }

        a.label:focus,
        a.label:hover {
            color: #fff;
            cursor: pointer;
            text-decoration: none
        }

        .label-default {
            background-color: #777
        }

        .label-default[href]:focus,
        .label-default[href]:hover {
            background-color: #5e5e5e
        }

        .label-primary {
            background-color: #69BD45
        }

        .label-primary[href]:focus,
        .label-primary[href]:hover {
            background-color: #ccaf00
        }

        .label-success {
            background-color: #6cb676
        }

        .label-success[href]:focus,
        .label-success[href]:hover {
            background-color: #4fa05a
        }

        .label-info {
            background-color: #5bc0de
        }

        .label-info[href]:focus,
        .label-info[href]:hover {
            background-color: #31b0d5
        }

        .label-warning {
            background-color: #f0ad4e
        }

        .label-warning[href]:focus,
        .label-warning[href]:hover {
            background-color: #ec971f
        }

        .label-danger {
            background-color: #d9534f
        }

        .label-danger[href]:focus,
        .label-danger[href]:hover {
            background-color: #c9302c
        }

        .alert {
            border: 1px solid transparent;
            border-radius: 4px;
            margin-bottom: 22px;
            padding: 15px
        }

        .alert h4 {
            color: inherit;
            margin-top: 0
        }

        .alert .alert-link {
            font-weight: 700
        }

        .alert>p,
        .alert>ul {
            margin-bottom: 0
        }

        .alert>p+p {
            margin-top: 5px
        }

        .alert-dismissable,
        .alert-dismissible {
            padding-right: 35px
        }

        .alert-dismissable .close,
        .alert-dismissible .close {
            color: inherit;
            position: relative;
            right: -21px;
            top: -2px
        }

        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d
        }

        .alert-success hr {
            border-top-color: #c9e2b3
        }

        .alert-success .alert-link {
            color: #2b542c
        }

        .alert-info {
            background-color: #d9edf7;
            border-color: #bce8f1;
            color: #31708f
        }

        .alert-info hr {
            border-top-color: #a6e1ec
        }

        .alert-info .alert-link {
            color: #245269
        }

        .alert-warning {
            background-color: #fcf8e3;
            border-color: #faebcc;
            color: #8a6d3b
        }

        .alert-warning hr {
            border-top-color: #f7e1b5
        }

        .alert-warning .alert-link {
            color: #66512c
        }

        .alert-danger {
            background-color: #f2dede;
            border-color: #ebccd1;
            color: #a94442
        }

        .alert-danger hr {
            border-top-color: #e4b9c0
        }

        .alert-danger .alert-link {
            color: #843534
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position: 40px 0
            }

            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position: 40px 0
            }

            to {
                background-position: 0 0
            }
        }

        .progress {
            background-color: #f5f5f5;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            height: 22px;
            margin-bottom: 22px;
            overflow: hidden
        }

        .progress-bar {
            background-color: #69BD45;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            color: #fff;
            float: left;
            font-size: 14px;
            height: 100%;
            line-height: 22px;
            text-align: center;
            -webkit-transition: width .6s ease;
            -o-transition: width .6s ease;
            transition: width .6s ease;
            width: 0
        }

        .progress-bar-striped,
        .progress-striped .progress-bar {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, .15) 50%, hsla(0, 0%, 100%, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-size: 40px 40px
        }

        .progress-bar.active,
        .progress.active .progress-bar {
            -webkit-animation: progress-bar-stripes 2s linear infinite;
            -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite
        }

        .progress-bar-success {
            background-color: #72c41d
        }

        .progress-striped .progress-bar-success {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, .15) 50%, hsla(0, 0%, 100%, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent)
        }

        .progress-bar-info {
            background-color: #5bc0de
        }

        .progress-striped .progress-bar-info {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, .15) 50%, hsla(0, 0%, 100%, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent)
        }

        .progress-bar-warning {
            background-color: #f0ad4e
        }

        .progress-striped .progress-bar-warning {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, .15) 50%, hsla(0, 0%, 100%, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent)
        }

        .progress-bar-danger {
            background-color: #d9534f
        }

        .progress-striped .progress-bar-danger {
            background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, .15) 50%, hsla(0, 0%, 100%, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent)
        }

        .close {
            color: #000;
            filter: alpha(opacity=20);
            float: right;
            font-size: 24px;
            font-weight: 700;
            line-height: 1;
            opacity: .2;
            text-shadow: 0 1px 0 #fff
        }

        .close:focus,
        .close:hover {
            color: #000;
            cursor: pointer;
            filter: alpha(opacity=50);
            opacity: .5;
            text-decoration: none
        }

        button.close {
            -webkit-appearance: none;
            background: transparent;
            border: 0;
            cursor: pointer;
            padding: 0
        }

        .modal,
        .modal-open {
            overflow: hidden
        }

        .modal {
            -webkit-overflow-scrolling: touch;
            bottom: 0;
            display: none;
            left: 0;
            outline: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1050
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translateY(-25%);
            -ms-transform: translateY(-25%);
            -o-transform: translateY(-25%);
            transform: translateY(-25%);
            -webkit-transition: -webkit-transform .3s ease-out;
            -moz-transition: -moz-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out
        }

        .modal.in .modal-dialog {
            -webkit-transform: translate(0);
            -ms-transform: translate(0);
            -o-transform: translate(0);
            transform: translate(0)
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal-dialog {
            margin: 10px;
            position: relative;
            width: auto
        }

        .modal-content {
            background-clip: padding-box;
            background-color: #fff;
            outline: 0;
            position: relative
        }

        .modal-backdrop {
            background-color: #000;
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1040
        }

        .modal-backdrop.fade {
            filter: alpha(opacity=0);
            opacity: 0
        }

        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: .5
        }

        .modal-header {
            border-bottom: 1px solid #d9d9d9;
            padding: 15px
        }

        .modal-header:after,
        .modal-header:before {
            content: " ";
            display: table
        }

        .modal-header:after {
            clear: both
        }

        .modal-header .close {
            margin-top: -2px
        }

        .modal-title {
            line-height: 1.42857143;
            margin: 0
        }

        .modal-body {
            padding: 15px;
            position: relative
        }

        .modal-footer {
            border-top: 1px solid #d9d9d9;
            padding: 15px;
            text-align: right
        }

        .modal-footer:after,
        .modal-footer:before {
            content: " ";
            display: table
        }

        .modal-footer:after {
            clear: both
        }

        .modal-footer .btn+.btn {
            margin-bottom: 0;
            margin-left: 5px
        }

        .modal-footer .btn-group .btn+.btn {
            margin-left: -1px
        }

        .modal-footer .btn-block+.btn-block {
            margin-left: 0
        }

        .modal-scrollbar-measure {
            height: 50px;
            overflow: scroll;
            position: absolute;
            top: -9999px;
            width: 50px
        }

        @media (min-width:768px) {
            .modal-dialog {
                margin: 30px auto;
                width: 600px
            }

            .modal-sm {
                width: 300px
            }
        }

        @media (min-width:992px) {
            .modal-lg {
                width: 900px
            }
        }

        .modal hr {
            margin-left: -15px;
            margin-right: -15px
        }

        .editor-modal-content>button.close,
        .modal .close {
            color: #333;
            float: right;
            height: 45px;
            margin: -15px -15px 0 0;
            opacity: 1;
            text-shadow: none;
            width: 45px
        }

        .editor-modal-content>button.close:active,
        .editor-modal-content>button.close:focus,
        .modal .close:active,
        .modal .close:focus {
            outline: none
        }

        .modal-header {
            padding-bottom: 0
        }

        @media (min-width:992px) {
            .modal-lg {
                width: 900px
            }

            .editor-modal-content>button.close,
            .modal .close {
                height: 55px;
                width: 55px
            }
        }

        .tooltip {
            word-wrap: normal;
            display: block;
            filter: alpha(opacity=0);
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-style: normal;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.42857143;
            opacity: 0;
            position: absolute;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            z-index: 1070
        }

        .tooltip.in {
            filter: alpha(opacity=100);
            opacity: 1
        }

        .tooltip.top {
            margin-top: -3px;
            padding: 10px 0
        }

        .tooltip.right {
            margin-left: 3px;
            padding: 0 10px
        }

        .tooltip.bottom {
            margin-top: 3px;
            padding: 10px 0
        }

        .tooltip.left {
            margin-left: -3px;
            padding: 0 10px
        }

        .tooltip-inner {
            background-color: #4a4a4a;
            border-radius: 4px;
            color: #fff;
            max-width: 250px;
            padding: 9px 14px;
            text-align: center
        }

        .tooltip-arrow {
            border-color: transparent;
            border-style: solid;
            height: 0;
            position: absolute;
            width: 0
        }

        .tooltip.top .tooltip-arrow {
            border-top-color: #4a4a4a;
            border-width: 10px 10px 0;
            bottom: 0;
            left: 50%;
            margin-left: -10px
        }

        .tooltip.top-left .tooltip-arrow {
            right: 10px
        }

        .tooltip.top-left .tooltip-arrow,
        .tooltip.top-right .tooltip-arrow {
            border-top-color: #4a4a4a;
            border-width: 10px 10px 0;
            bottom: 0;
            margin-bottom: -10px
        }

        .tooltip.top-right .tooltip-arrow {
            left: 10px
        }

        .tooltip.right .tooltip-arrow {
            border-right-color: #4a4a4a;
            border-width: 10px 10px 10px 0;
            left: 0;
            margin-top: -10px;
            top: 50%
        }

        .tooltip.left .tooltip-arrow {
            border-left-color: #4a4a4a;
            border-width: 10px 0 10px 10px;
            margin-top: -10px;
            right: 0;
            top: 50%
        }

        .tooltip.bottom .tooltip-arrow {
            border-bottom-color: #4a4a4a;
            border-width: 0 10px 10px;
            left: 50%;
            margin-left: -10px;
            top: 0
        }

        .tooltip.bottom-left .tooltip-arrow {
            right: 10px
        }

        .tooltip.bottom-left .tooltip-arrow,
        .tooltip.bottom-right .tooltip-arrow {
            border-bottom-color: #4a4a4a;
            border-width: 0 10px 10px;
            margin-top: -10px;
            top: 0
        }

        .tooltip.bottom-right .tooltip-arrow {
            left: 10px
        }

        .popover {
            word-wrap: normal;
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid #ccc;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            display: none;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            left: 0;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.42857143;
            max-width: 276px;
            position: absolute;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            top: 0;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            z-index: 1060
        }

        .popover.top {
            margin-top: -10px
        }

        .popover.right {
            margin-left: 10px
        }

        .popover.bottom {
            margin-top: 10px
        }

        .popover.left {
            margin-left: -10px
        }

        .popover-title {
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            font-size: 16px;
            margin: 0;
            padding: 8px 14px
        }

        .popover-content {
            padding: 9px 14px
        }

        .popover>.arrow,
        .popover>.arrow:after {
            border-color: transparent;
            border-style: solid;
            display: block;
            height: 0;
            position: absolute;
            width: 0
        }

        .popover>.arrow {
            border-width: 11px
        }

        .popover>.arrow:after {
            border-width: 10px;
            content: ""
        }

        .popover.top>.arrow {
            border-bottom-width: 0;
            border-top-color: #ccc;
            bottom: -11px;
            left: 50%;
            margin-left: -11px
        }

        .popover.top>.arrow:after {
            border-bottom-width: 0;
            border-top-color: #fff;
            bottom: 1px;
            content: " ";
            margin-left: -10px
        }

        .popover.right>.arrow {
            border-left-width: 0;
            border-right-color: #ccc;
            left: -11px;
            margin-top: -11px;
            top: 50%
        }

        .popover.right>.arrow:after {
            border-left-width: 0;
            border-right-color: #fff;
            bottom: -10px;
            content: " ";
            left: 1px
        }

        .popover.bottom>.arrow {
            border-bottom-color: #ccc;
            border-top-width: 0;
            left: 50%;
            margin-left: -11px;
            top: -11px
        }

        .popover.bottom>.arrow:after {
            border-bottom-color: #fff;
            border-top-width: 0;
            content: " ";
            margin-left: -10px;
            top: 1px
        }

        .popover.left>.arrow {
            border-left-color: #ccc;
            border-right-width: 0;
            margin-top: -11px;
            right: -11px;
            top: 50%
        }

        .popover.left>.arrow:after {
            border-left-color: #fff;
            border-right-width: 0;
            bottom: -10px;
            content: " ";
            right: 1px
        }

        .clearfix:after,
        .clearfix:before {
            content: " ";
            display: table
        }

        .clearfix:after {
            clear: both
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .hide {
            display: none !important
        }

        .show {
            display: block !important
        }

        .invisible {
            visibility: hidden
        }

        .text-hide {
            background-color: transparent;
            border: 0;
            color: transparent;
            font: 0/0 a;
            text-shadow: none
        }

        .hidden {
            display: none !important
        }

        .affix {
            position: fixed
        }

        @-ms-viewport {
            width: device-width
        }

        .visible-lg,
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block,
        .visible-md,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-sm,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-xs,
        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-xs {
                display: block !important
            }

            table.visible-xs {
                display: table !important
            }

            tr.visible-xs {
                display: table-row !important
            }

            td.visible-xs,
            th.visible-xs {
                display: table-cell !important
            }

            .visible-xs-block {
                display: block !important
            }

            .visible-xs-inline {
                display: inline !important
            }

            .visible-xs-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm {
                display: block !important
            }

            table.visible-sm {
                display: table !important
            }

            tr.visible-sm {
                display: table-row !important
            }

            td.visible-sm,
            th.visible-sm {
                display: table-cell !important
            }

            .visible-sm-block {
                display: block !important
            }

            .visible-sm-inline {
                display: inline !important
            }

            .visible-sm-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md {
                display: block !important
            }

            table.visible-md {
                display: table !important
            }

            tr.visible-md {
                display: table-row !important
            }

            td.visible-md,
            th.visible-md {
                display: table-cell !important
            }

            .visible-md-block {
                display: block !important
            }

            .visible-md-inline {
                display: inline !important
            }

            .visible-md-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg {
                display: block !important
            }

            table.visible-lg {
                display: table !important
            }

            tr.visible-lg {
                display: table-row !important
            }

            td.visible-lg,
            th.visible-lg {
                display: table-cell !important
            }

            .visible-lg-block {
                display: block !important
            }

            .visible-lg-inline {
                display: inline !important
            }

            .visible-lg-inline-block {
                display: inline-block !important
            }
        }

        @media (max-width:767px) {
            .hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-lg {
                display: none !important
            }
        }

        .visible-print {
            display: none !important
        }

        @media print {
            .visible-print {
                display: block !important
            }

            table.visible-print {
                display: table !important
            }

            tr.visible-print {
                display: table-row !important
            }

            td.visible-print,
            th.visible-print {
                display: table-cell !important
            }
        }

        .visible-print-block {
            display: none !important
        }

        @media print {
            .visible-print-block {
                display: block !important
            }
        }

        .visible-print-inline {
            display: none !important
        }

        @media print {
            .visible-print-inline {
                display: inline !important
            }
        }

        .visible-print-inline-block {
            display: none !important
        }

        @media print {
            .visible-print-inline-block {
                display: inline-block !important
            }

            .hidden-print {
                display: none !important
            }
        }

        .icon {
            background-repeat: no-repeat;
            background-size: 150px;
            display: inline-block;
            height: 32px;
            line-height: 32px;
            vertical-align: text-top;
            width: 32px
        }

        .icon.logo {
            background-position: 0 0
        }

        .icon.visa {
            background-position: 0 -50px;
            height: 32px;
            width: 105px
        }

        .icon.paypal {
            background-position: 0 -146px;
            height: 32px;
            width: 105px
        }

        .icon.klarna {
            background-position: 0 -100px;
            height: 32px;
            width: 105px
        }

        .icon.facebook {
            background-position: 0 -200px
        }

        .icon.google {
            background-position: -50px -200px
        }

        .icon.instagram {
            background-position: 0 -250px
        }

        .icon.twitter {
            background-position: -100px -200px
        }

        a.social {
            float: left;
            height: 50px;
            text-align: center;
            width: 50px
        }

        a.social i {
            margin: 9px
        }

        a.facebook {
            background: #3c599a
        }

        a.instagram {
            background: #cbbbae
        }

        a.google {
            background: #dd4b39
        }

        a.twitter {
            background: #5ea9dd
        }

        .box {
            background: #fff;
            padding: 15px
        }

        .box h1 {
            margin-top: 10px
        }

        .box hr {
            border-color: #ecedeb;
            margin: 15px -15px
        }

        .title.box-title {
            margin-bottom: 10px
        }

        .price-tag {
            background: #6cb676;
            border-radius: 2px;
            color: #fff;
            display: inline-block;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0;
            line-height: 30px;
            margin-left: 18px;
            margin-top: -2px;
            padding: 0 12px 0 5px;
            position: relative;
            text-transform: none;
            vertical-align: middle
        }

        .price-tag>div:before,
        .price-tag>span:before {
            border-color: transparent #6cb676 transparent transparent;
            border-radius: 2px;
            border-style: solid;
            border-width: 15px 15px 15px 0;
            content: "";
            float: left;
            height: 0;
            left: -14px;
            position: absolute;
            top: 0;
            width: 0
        }

        .price-tag.sm {
            font-size: 75%;
            font-weight: 700;
            height: 16px;
            line-height: 16px;
            margin-left: 10px;
            padding: 0 5px 0 2px
        }

        .price-tag.sm>div:before,
        .price-tag.sm>span:before {
            border-width: 8px 8px 8px 0;
            height: 0;
            left: -7px;
            top: 0;
            width: 0
        }

        .stapp-nav {
            background: #fff;
            margin-top: 15px;
            width: 100%
        }

        .stapp-nav .sub {
            display: none
        }

        .stickers .stapp-nav .sub {
            display: block
        }

        .stapp-nav ul.nav {
            margin-top: 0;
            padding: 5px 20px
        }

        .stapp-nav ul.nav>li>a {
            color: #666;
            font-size: 14px;
            font-weight: 700;
            padding: 5px 0
        }

        .stapp-nav ul.nav>li.active>a {
            color: #333;
            font-weight: 700
        }

        .stapp-nav .nav-toggle {
            color: #555;
            font-weight: 700;
            height: 48px;
            line-height: 48px;
            padding: 0;
            text-align: center
        }

        .stapp-nav h4 {
            margin: 20px
        }

        .stapp-nav hr {
            border-color: #ecedeb;
            margin: 0
        }

        .stapp-nav.top ul.nav>li>a.btn-primary {
            color: #fff;
            height: 34px;
            line-height: 34px;
            margin: 8px 15px 0 0;
            padding: 0 15px
        }

        .stapp-nav ul.nav>li>a.btn-primary:hover {
            background: #3276b1
        }

        .stapp-nav ul li ul {
            list-style: none;
            padding: 0 0 10px
        }

        .stapp-nav ul li ul li a {
            color: #666;
            display: block;
            font-size: 13px;
            padding: 3px 0 3px 20px
        }

        .stapp-nav ul li a:active,
        .stapp-nav ul li a:hover,
        .stapp-nav ul.nav>li>a:focus {
            background: none;
            color: #000;
            text-decoration: none
        }

        .stapp-nav .sub li.active a {
            color: #333;
            font-weight: 700
        }

        .stapp-nav.top {
            background: #fff;
            margin-top: 0;
            padding: 0
        }

        .stapp-nav.top ul.nav {
            margin-left: -20px
        }

        .stapp-nav.top ul.nav li {
            float: left;
            padding-bottom: 4px;
            padding-top: 4px
        }

        .stapp-nav.top ul.nav>li>a {
            border: none;
            line-height: 30px;
            margin-right: 40px;
            padding: 0
        }

        .stapp-nav .dropdown-toggle-with-link {
            background: #edebec;
            border-radius: 4px;
            color: #8b8183;
            margin-right: -20px
        }

        .stapp-nav .dropdown-toggle-with-link:hover {
            background: #d4d1d1
        }

        @media (max-width:767px) {

            .stapp-nav,
            .stapp-nav.top {
                margin-top: 2px
            }

            .stickers .stapp-nav .sub {
                display: none
            }

            .stapp-nav .container,
            .stapp-nav-wrapper {
                padding: 0
            }

            .stapp-nav .nav-content {
                border-top: 1px solid #ecedeb;
                display: none
            }

            .stapp-nav ul.nav li {
                padding-bottom: 4px;
                padding-top: 4px
            }

            .stapp-nav ul.nav>li>a {
                line-height: 40px;
                padding: 0
            }

            .stapp-nav.top ul.nav>li>a.btn-primary {
                margin-right: 0
            }

            .stapp-nav.top ul.nav {
                margin: 0
            }

            .stapp-nav.top ul.nav li {
                border-left: none;
                border-right: none;
                width: 100%
            }

            .stapp-nav.top ul.nav>li>a {
                line-height: 40px
            }
        }

        #push,
        footer {
            min-height: 265px
        }

        footer {
            background: #040404;
            color: #f1f1f1;
            width: 100%
        }

        footer .footer-content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 265px
        }

        footer li {
            list-style: none
        }

        footer .top-nav-footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 0
        }

        footer .top-nav-footer li {
            padding: 0
        }

        footer .top-nav-footer li a {
            color: #fff;
            font-family: FuturaPt, serif;
            font-size: 16px;
            font-weight: 900;
            letter-spacing: 1.5px;
            margin: 0 15px;
            padding: 10px 0;
            position: relative;
            text-decoration: none;
            text-transform: uppercase
        }

        html[lang=pl] footer .top-nav-footer li a {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px
        }

        footer .bottom-nav-footer {
            background-color: #111;
            padding-bottom: 15px;
            text-align: center
        }

        footer .bottom-nav-footer ul {
            display: flex;
            flex-wrap: wrap;
            font-size: 13px;
            justify-content: center;
            margin: 0;
            padding: 20px 0
        }

        footer .bottom-nav-footer ul li {
            margin: 5px 10px
        }

        footer .bottom-nav-footer ul li a {
            color: #cfb400;
            letter-spacing: .5px;
            text-decoration: none;
            transition: color, background-color, box-shadow, .1s ease-in
        }

        footer .bottom-nav-footer ul li a:after {
            content: " \BB"
        }

        footer .bottom-nav-footer ul li a:hover {
            color: #453e11
        }

        footer .bottom-nav-footer small {
            text-align: center;
            width: 100%
        }

        footer .social-media-icons {
            display: flex;
            justify-content: center
        }

        footer .social-media-icons a {
            background-color: transparent
        }

        footer .social-media-icons a .icon {
            background-size: 222px;
            height: 40px;
            margin: 5px;
            width: 40px
        }

        footer .social-media-icons a .icon.instagram {
            background-position: -39px -1841px
        }

        footer .social-media-icons a .icon.facebook {
            background-position: 0 -1841px
        }

        footer .social-media-icons a .icon.twitter {
            background-position: -78px -1841px
        }

        footer .payment-icons {
            display: flex;
            flex-flow: wrap;
            justify-content: center
        }

        footer .payment-icons .icon {
            background-size: 90px;
            height: 18px;
            margin: 10px
        }

        footer .payment-icons .icon.visa {
            background-position: 0 -781px;
            width: 50px
        }

        footer .payment-icons .icon.paypal {
            background-position: -22px -763px;
            width: 63px
        }

        footer .payment-icons .icon.jcb {
            background-position: 0 -763px;
            width: 21px
        }

        footer .payment-icons .icon.master-card {
            background-position: 0 -799px;
            width: 88px
        }

        footer .payment-icons .icon.klarna {
            background-position: 0;
            background-repeat: no-repeat;
            background-size: contain;
            width: 36px
        }

        footer .top-nav-footer>li {
            position: relative
        }

        footer .top-nav-footer>li a:active,
        footer .top-nav-footer>li a:focus,
        footer .top-nav-footer>li a:hover {
            background: transparent;
            color: #fff;
            transition: color .2s ease-out
        }

        footer .top-nav-footer>li a:active:after,
        footer .top-nav-footer>li a:focus:after,
        footer .top-nav-footer>li a:hover:after {
            background-color: #d5cd20;
            border-radius: 4px;
            bottom: 5px;
            content: "";
            display: inline-block;
            height: 2px;
            left: 0;
            position: absolute;
            width: 100%
        }

        @media (max-width:1599px) and (min-width:992px) {
            footer .top-nav-footer li a {
                font-size: 12px
            }
        }

        @media (max-width:991px) {
            footer .top-nav-footer li {
                padding: 12px;
                text-align: center;
                width: 100%
            }
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: left
        }

        .products .item-wrapper .item-title {
            white-space: nowrap
        }

        .products .item-title {
            color: #333;
            font-family: FuturaPT, sans-serif;
            font-size: 22px;
            font-weight: 900;
            letter-spacing: .5px;
            line-height: normal;
            margin-top: 1.5em;
            overflow: hidden;
            text-overflow: ellipsis
        }

        html[lang=pl] .products .item-title {
            font-family: Helvetica, Arial, sans-serif
        }

        .products a,
        .products a:hover {
            text-decoration: none
        }

        .products.products-authors {
            background-color: #fff;
            margin: 10px 0;
            padding: 15px 0
        }

        .products.products-authors .products-title {
            color: #333;
            font-family: FuturaPT, serif;
            letter-spacing: .5px;
            line-height: normal;
            text-align: center
        }

        html[lang=pl] .products.products-authors .products-title {
            font-family: Helvetica, Arial, sans-serif
        }

        .products.products-authors .authors-box {
            padding: 10px
        }

        .cases .products,
        .skins .products {
            display: block
        }

        .cases .products img,
        .skins .products img {
            height: auto;
            margin: 0 auto;
            max-width: 100%;
            width: 100%
        }

        .cases .products a,
        .skins .products a {
            padding: 15px;
            position: relative;
            text-align: center
        }

        .cases .products a h4.products-title,
        .skins .products a h4.products-title {
            font-size: 15px;
            text-align: center
        }

        #authors-index .products.products-box .products-title,
        .figure.category .products-title {
            color: #333;
            font-family: FuturaPT, serif;
            font-size: 20px;
            font-weight: 900;
            letter-spacing: .5px;
            line-height: normal;
            overflow: hidden;
            text-align: center;
            text-overflow: ellipsis
        }

        html[lang=pl] #authors-index .products.products-box .products-title,
        html[lang=pl] .figure.category .products-title {
            font-family: Helvetica, Arial, sans-serif
        }

        #authors-index .author-link {
            padding: 15px
        }

        .products.products-justified {
            justify-content: center
        }

        .products .figure {
            display: flex;
            padding: 10px;
            width: 100%
        }

        .products .figure .item-wrapper {
            background: #fff;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            padding: 27px 35px;
            width: 100%
        }

        .products .figure .item-wrapper img {
            margin: 0 auto
        }

        .products .figure .item-wrapper .item-link-wrapper {
            flex: 1 0 auto
        }

        .products .figure .item-wrapper .author-link {
            color: #000;
            font-size: 17px;
            letter-spacing: .5px
        }

        .products .figure .item-wrapper .item-footer {
            margin-top: 1.5em
        }

        .start .products .material {
            width: 50%
        }

        @media (min-width:480px) {
            .products .figure {
                width: 49%
            }
        }

        @media (max-width:767px) {
            .products .figure {
                padding: 5px;
                width: 49%
            }

            .products .figure .item-wrapper {
                padding: 10px
            }

            .products .figure .item-wrapper .btn {
                font-size: 12px
            }

            .products .figure .item-wrapper .item-title {
                font-size: 17px;
                margin-top: .5em
            }

            .cases .products a h4.products-title,
            .skins .products a h4.products-title {
                font-size: 13px
            }

            .products.products-authors {
                margin: 5px -6px
            }
        }

        @media (min-width:992px) {
            .start .products .material {
                width: 25%
            }

            .products .material .item-title {
                font-size: 28px
            }

            html[lang=pl] .products .material .item-title {
                font-size: 22px
            }
        }

        .products.products-horizontal {
            justify-content: unset;
            margin: 0 auto;
            max-width: 1200px
        }

        .products.products-horizontal .figure {
            width: 25%
        }

        @media (max-width:1200px) {
            .products.products-horizontal {
                -webkit-overflow-scrolling: touch;
                flex-wrap: nowrap;
                overflow-x: auto;
                padding: 7px 20px 7px 7px
            }

            .products.products-horizontal .figure {
                width: auto
            }

            .products.products-horizontal .figure .item-wrapper {
                box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
                width: 300px
            }
        }

        @media (max-width:320px) {
            .products.products-horizontal .figure .item-wrapper {
                width: 260px
            }

            .products.products-horizontal .figure .item-wrapper .item-title {
                font-size: 20px
            }
        }

        .navbar {
            border: none
        }

        .navbar .navbar-brand,
        .navbar .navbar-nav {
            padding: 0
        }

        .navbar.stickerapp-nav {
            background-color: #040404;
            border-radius: 0;
            position: fixed;
            top: 0;
            transition: .4s;
            width: 100%;
            z-index: 1000
        }

        .navbar.stickerapp-nav .nav-row {
            position: relative;
            transition: .2s
        }

        @media (min-width:1600px) {
            .navbar.stickerapp-nav .nav-row {
                height: 125px
            }

            .navbar.stickerapp-nav .nav-row .navbar-nav>li {
                font-size: 18px
            }

            html[lang=pl] .navbar.stickerapp-nav .nav-row .navbar-nav>li {
                font-size: 16px
            }

            .editor .navbar.stickerapp-nav .nav-row {
                height: 73px
            }
        }

        @media (max-width:1599px) and (min-width:992px) {
            .navbar.stickerapp-nav .nav-row {
                height: 100px
            }

            .navbar.stickerapp-nav .nav-row .navbar-nav>li {
                font-size: 13px
            }

            .editor .navbar.stickerapp-nav .nav-row {
                height: 73px
            }
        }

        .navbar.stickerapp-nav #logo {
            margin: 0
        }

        .start .navbar.stickerapp-nav {
            background-color: transparent
        }

        .start .navbar.stickerapp-nav.nav-deflated {
            background-color: #040404;
            transition: .2s
        }

        .navbar.stickerapp-nav.nav-deflated .stickerapp-nav-mobile {
            transition: .2s;
            -webkit-transition: all .2s
        }

        @media (max-width:992px) {
            .navbar.stickerapp-nav.nav-deflated .stickerapp-nav-mobile {
                height: 80px
            }
        }

        @media (min-width:1600px) {
            .navbar.stickerapp-nav.nav-deflated .nav-row {
                height: 100px
            }
        }

        @media (max-width:1599px) and (min-width:992px) {
            .navbar.stickerapp-nav.nav-deflated .nav-row {
                height: 80px
            }
        }

        .navbar.stickerapp-nav .stickerapp-nav-mobile {
            align-items: center;
            display: flex;
            height: 100px;
            justify-content: space-between;
            padding: 0 10px;
            position: relative;
            transition: .2s
        }

        .editor .navbar.stickerapp-nav .stickerapp-nav-mobile {
            height: 60px
        }

        .navbar.stickerapp-nav .stickerapp-brand {
            width: 155.5px
        }

        .navbar.stickerapp-nav .nav-tools {
            align-items: center;
            display: flex;
            margin: 0 15px
        }

        .navbar .f-row,
        .navbar .sp-top-inner {
            display: flex;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            flex-wrap: inherit;
            margin: 0;
            width: 100%
        }

        .navbar .f-row.f-space-around,
        .navbar .f-space-around.sp-top-inner {
            justify-content: space-around
        }

        .navbar .f-justify-center.sp-top-inner,
        .navbar .f-row.f-justify-center {
            justify-content: center
        }

        .navbar .f-align-items-center.sp-top-inner,
        .navbar .f-row.f-align-items-center {
            align-items: center
        }

        .navbar .navbar-right {
            padding-left: 20px
        }

        .navbar .navbar-left {
            padding-right: 20px
        }

        .navbar-nav .nav-tools>div,
        .navbar-nav>li {
            align-items: center;
            display: flex;
            font-family: FuturaPt, serif;
            justify-content: center;
            text-align: center;
            text-transform: uppercase
        }

        html[lang=pl] .navbar-nav .nav-tools>div,
        html[lang=pl] .navbar-nav>li {
            font-family: Helvetica, Arial, sans-serif
        }

        .navbar-nav .nav-tools>div.active a:after,
        .navbar-nav>li.active a:after {
            background-color: #d5cd20;
            border-radius: 4px;
            bottom: 5px;
            content: "";
            display: inline-block;
            height: 2px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .navbar-nav .nav-tools>div.active.account a:after,
        .navbar-nav .nav-tools>div.active.cart a:after,
        .navbar-nav>li.active.account a:after,
        .navbar-nav>li.active.cart a:after {
            height: 0
        }

        .navbar-nav .nav-tools>div a,
        .navbar-nav>li a {
            color: #fff;
            font-weight: 900;
            letter-spacing: 1.5px;
            transition: color .2s ease-in
        }

        .navbar-nav .nav-tools>div a:active,
        .navbar-nav .nav-tools>div a:focus,
        .navbar-nav .nav-tools>div a:hover,
        .navbar-nav>li a:active,
        .navbar-nav>li a:focus,
        .navbar-nav>li a:hover {
            background: transparent;
            color: #fff;
            transition: color .2s ease-out
        }

        .navbar-nav .nav-tools>div a:active:after,
        .navbar-nav .nav-tools>div a:focus:after,
        .navbar-nav .nav-tools>div a:hover:after,
        .navbar-nav>li a:active:after,
        .navbar-nav>li a:focus:after,
        .navbar-nav>li a:hover:after {
            background-color: #d5cd20;
            border-radius: 4px;
            bottom: 5px;
            content: "";
            display: inline-block;
            height: 2px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .navbar-nav .nav-tools>div.account,
        .navbar-nav .nav-tools>div.cart,
        .navbar-nav>li.account,
        .navbar-nav>li.cart {
            background: none;
            border-radius: 100%;
            height: 40px;
            position: relative;
            width: 40px
        }

        .navbar-nav .nav-tools>div.account:active,
        .navbar-nav .nav-tools>div.account:focus,
        .navbar-nav .nav-tools>div.account:hover,
        .navbar-nav .nav-tools>div.cart:active,
        .navbar-nav .nav-tools>div.cart:focus,
        .navbar-nav .nav-tools>div.cart:hover,
        .navbar-nav>li.account:active,
        .navbar-nav>li.account:focus,
        .navbar-nav>li.account:hover,
        .navbar-nav>li.cart:active,
        .navbar-nav>li.cart:focus,
        .navbar-nav>li.cart:hover {
            background: none
        }

        .navbar-nav .nav-tools>div.account a,
        .navbar-nav .nav-tools>div.cart a,
        .navbar-nav>li.account a,
        .navbar-nav>li.cart a {
            color: #fff;
            font-size: 33px;
            margin: 0;
            padding: 2px
        }

        .navbar-nav .nav-tools>div.account a:active,
        .navbar-nav .nav-tools>div.account a:focus,
        .navbar-nav .nav-tools>div.account a:hover,
        .navbar-nav .nav-tools>div.cart a:active,
        .navbar-nav .nav-tools>div.cart a:focus,
        .navbar-nav .nav-tools>div.cart a:hover,
        .navbar-nav>li.account a:active,
        .navbar-nav>li.account a:focus,
        .navbar-nav>li.account a:hover,
        .navbar-nav>li.cart a:active,
        .navbar-nav>li.cart a:focus,
        .navbar-nav>li.cart a:hover {
            color: #69BD45
        }

        .navbar-nav .nav-tools>div.account a:active:after,
        .navbar-nav .nav-tools>div.account a:focus:after,
        .navbar-nav .nav-tools>div.account a:hover:after,
        .navbar-nav .nav-tools>div.cart a:active:after,
        .navbar-nav .nav-tools>div.cart a:focus:after,
        .navbar-nav .nav-tools>div.cart a:hover:after,
        .navbar-nav>li.account a:active:after,
        .navbar-nav>li.account a:focus:after,
        .navbar-nav>li.account a:hover:after,
        .navbar-nav>li.cart a:active:after,
        .navbar-nav>li.cart a:focus:after,
        .navbar-nav>li.cart a:hover:after {
            height: 0
        }

        .navbar-nav .nav-tools>div.account .cart-counter,
        .navbar-nav .nav-tools>div.cart .cart-counter,
        .navbar-nav>li.account .cart-counter,
        .navbar-nav>li.cart .cart-counter {
            background: #da5246;
            border-radius: 100%;
            box-shadow: 1px 2px 5px #333;
            color: #fff;
            display: block;
            font-size: 10px;
            font-weight: 600;
            height: 20px;
            left: 26px;
            line-height: 20px;
            position: absolute;
            text-align: center;
            top: -3px;
            width: 20px
        }

        .navbar-nav .nav-tools>div.account,
        .navbar-nav>li.account {
            border: 2px solid #fff;
            border-radius: 100%;
            height: 35px;
            margin: 0 15px 0 0;
            width: 35px
        }

        .stickerapp-nav .navbar-nav .nav-tools>div.account,
        .stickerapp-nav .navbar-nav>li.account {
            border: none
        }

        .navbar-nav .nav-tools>div.account a,
        .navbar-nav>li.account a {
            display: inline-block;
            font-size: 22px;
            margin: 0;
            padding: 5px 3px
        }

        .navbar-nav .nav-tools>div.account a:active:after,
        .navbar-nav .nav-tools>div.account a:focus:after,
        .navbar-nav .nav-tools>div.account a:hover:after,
        .navbar-nav>li.account a:active:after,
        .navbar-nav>li.account a:focus:after,
        .navbar-nav>li.account a:hover:after {
            height: 0
        }

        .nav>li>a {
            margin: 0 15px;
            padding: 10px 0
        }

        @media (max-width:991px) {
            .navbar .navbar-nav {
                padding: 0;
                right: 0
            }

            .navbar-nav>li {
                justify-content: left;
                padding-bottom: 4px;
                padding-top: 4px;
                text-align: left
            }

            .navbar-nav>li a:hover {
                background: transparent;
                color: inherit;
                transition: none
            }

            .navbar-nav>li a:hover:after {
                display: none
            }

            .navbar-nav {
                margin-bottom: 0
            }

            .navbar-right {
                margin-bottom: 11.5px;
                margin-top: 0
            }

            .navbar-header a.navbar-cart {
                color: #fff;
                float: right;
                margin: 3px;
                padding: 8px 15px;
                position: relative
            }

            .navbar-header a.navbar-cart i {
                font-size: 26px
            }

            .navbar-header a.navbar-cart .cart-counter {
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 100%;
                color: #69BD45;
                display: block;
                font-size: 10px;
                font-weight: 700;
                height: 20px;
                padding: 2px;
                position: absolute;
                right: 7px;
                text-align: center;
                top: 7px;
                width: 20px
            }

            .stickerapp-nav .navbar-header a.navbar-cart .cart-counter {
                background: #da5246;
                border: none;
                color: #fff
            }

            .navbar-header .navbar-toggle {
                padding: 8px 15px
            }

            .navbar-header .navbar-toggle .icon-bar {
                background: #fff
            }
        }

        @font-face {
            font-display: fallback;
            font-family: Glyphicons Halflings;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.eot);
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.woff2) format("woff2"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
        }

        .glyphicon {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font-family: Glyphicons Halflings;
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            position: relative;
            top: 1px
        }

        .glyphicon-plus:before {
            content: "+"
        }

        .glyphicon-pencil:before {
            content: "\270F"
        }

        .glyphicon-search:before {
            content: "\E003"
        }

        .glyphicon-heart:before {
            content: "\E005"
        }

        .glyphicon-user:before {
            content: "\E008"
        }

        .glyphicon-th:before {
            content: "\E011"
        }

        .glyphicon-ok:before {
            content: "\E013"
        }

        .glyphicon-remove:before {
            content: "\E014"
        }

        .glyphicon-time:before {
            content: "\E023"
        }

        .glyphicon-download:before {
            content: "\E026"
        }

        .glyphicon-upload:before {
            content: "\E027"
        }

        .glyphicon-print:before {
            content: "\E045"
        }

        .glyphicon-font:before {
            content: "\E047"
        }

        .glyphicon-align-left:before {
            content: "\E052"
        }

        .glyphicon-align-center:before {
            content: "\E053"
        }

        .glyphicon-align-right:before {
            content: "\E054"
        }

        .glyphicon-map-marker:before {
            content: "\E062"
        }

        .glyphicon-share:before {
            content: "\E066"
        }

        .glyphicon-chevron-left:before {
            content: "\E079"
        }

        .glyphicon-chevron-right:before {
            content: "\E080"
        }

        .glyphicon-plus-sign:before {
            content: "\E081"
        }

        .glyphicon-info-sign:before {
            content: "\E086"
        }

        .glyphicon-arrow-left:before {
            content: "\E091"
        }

        .glyphicon-exclamation-sign:before {
            content: "\E101"
        }

        .glyphicon-comment:before {
            content: "\E111"
        }

        .glyphicon-shopping-cart:before {
            content: "\E116"
        }

        .glyphicon-filter:before {
            content: "\E138"
        }

        .glyphicon-hourglass:before {
            content: "\231B"
        }

        .glyphicon-scissors:before {
            content: "\E226"
        }

        .glyphicon-menu-left:before {
            content: "\E257"
        }

        .glyphicon-menu-right:before {
            content: "\E258"
        }

        .glyphicon-menu-down:before {
            content: "\E259"
        }

        .glyphicon-menu-up:before {
            content: "\E260"
        }

        .glyphicon-menu-hamburger:before {
            content: "\E236"
        }

        body {
            -webkit-font-smoothing: antialiased
        }

        .h1,
        .h2,
        .h3,
        .h4,
        h1,
        h2,
        h3,
        h4 {
            display: block;
            font-weight: 700
        }

        .h1,
        h1 {
            font-size: 41px
        }

        .h2,
        h2 {
            font-size: 34px
        }

        .h3,
        h3 {
            font-size: 28px
        }

        .h4,
        h4 {
            font-size: 20px
        }

        .h5,
        h5 {
            font-size: 16px
        }

        .h6,
        h6 {
            font-size: 14px
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #444;
            font-weight: lighter
        }

        .lead {
            clear: both;
            line-height: 1.42857143
        }

        .lead,
        .list-lead ul li {
            font-size: 20px;
            font-weight: 300
        }

        .list-lead ul li {
            line-height: 1.5
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-shadow {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, .5)
        }

        .text-ellipsis {
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .ui-sortable-handle:hover {
            background-color: #eee;
            cursor: pointer
        }

        .ui-sortable-placeholder {
            background-color: #98fb98
        }

        .page-header {
            padding-bottom: 22px;
            padding-top: 22px
        }

        .page-header .h1,
        .page-header h1 {
            display: inline-block;
            margin: 0
        }

        .page-header .lead {
            margin: 7.5px 0 0
        }

        .page-header .btn-right {
            float: right;
            margin: 8.5px 0 0 11px
        }

        .header-image {
            display: table;
            vertical-align: bottom
        }

        .header-image img {
            border: 0;
            display: table-cell;
            vertical-align: bottom
        }

        @media (max-width:991px) {
            .page-header .lead {
                margin: 20px 0 0
            }

            .btn-xl {
                font-size: 16px
            }
        }

        .container-xs-height {
            display: table;
            padding-left: 0;
            padding-right: 0
        }

        .row-xs-height {
            display: table-row
        }

        .col-xs-height {
            display: table-cell;
            float: none
        }

        @media (min-width:768px) {
            .container-sm-height {
                display: table;
                padding-left: 0;
                padding-right: 0
            }

            .row-sm-height {
                display: table-row
            }

            .col-sm-height {
                display: table-cell;
                float: none
            }
        }

        @media (min-width:992px) {
            .container-md-height {
                display: table;
                padding-left: 0;
                padding-right: 0
            }

            .row-md-height {
                display: table-row
            }

            .col-md-height {
                display: table-cell;
                float: none
            }
        }

        @media (min-width:1200px) {
            .container-lg-height {
                display: table;
                padding-left: 0;
                padding-right: 0
            }

            .row-lg-height {
                display: table-row
            }

            .col-lg-height {
                display: table-cell;
                float: none
            }
        }

        .col-top {
            vertical-align: top
        }

        .col-middle {
            vertical-align: middle
        }

        .col-bottom {
            vertical-align: bottom
        }

        .btn-dark {
            background-color: #3c3738;
            border-color: #3c3738;
            color: #fff
        }

        .btn-dark.focus,
        .btn-dark:focus {
            background-color: #211f1f;
            border-color: #000;
            color: #fff;
            outline: none
        }

        .btn-dark.active,
        .btn-dark:active,
        .btn-dark:hover,
        .open>.btn-dark.dropdown-toggle {
            background-color: #211f1f;
            border-color: #1c1a1a;
            color: #fff
        }

        .btn-dark.active.focus,
        .btn-dark.active:focus,
        .btn-dark.active:hover,
        .btn-dark:active.focus,
        .btn-dark:active:focus,
        .btn-dark:active:hover,
        .open>.btn-dark.dropdown-toggle.focus,
        .open>.btn-dark.dropdown-toggle:focus,
        .open>.btn-dark.dropdown-toggle:hover {
            background-color: #0f0e0e;
            border-color: #000;
            color: #fff;
            outline: none
        }

        .btn-dark.active,
        .btn-dark:active,
        .open>.btn-dark.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-dark.disabled.focus,
        .btn-dark.disabled:focus,
        .btn-dark.disabled:hover,
        .btn-dark[disabled].focus,
        .btn-dark[disabled]:focus,
        .btn-dark[disabled]:hover,
        fieldset[disabled] .btn-dark.focus,
        fieldset[disabled] .btn-dark:focus,
        fieldset[disabled] .btn-dark:hover {
            background-color: #3c3738;
            border-color: #3c3738
        }

        .btn-dark .badge {
            background-color: #fff;
            color: #3c3738
        }

        .btn-outline {
            border-width: 2px;
            color: #69BD45
        }

        .btn-outline,
        .btn-outline.focus,
        .btn-outline:focus {
            background-color: transparent;
            border-color: transparent
        }

        .btn-outline.focus,
        .btn-outline:focus {
            color: #b39900;
            outline: none
        }

        .btn-outline:hover {
            background-color: transparent;
            border-color: transparent;
            color: #69BD45
        }

        .btn-outline.active,
        .btn-outline:active,
        .open>.btn-outline.dropdown-toggle {
            background-color: transparent;
            border-color: transparent;
            color: #b39900
        }

        .btn-outline.active.focus,
        .btn-outline.active:focus,
        .btn-outline.active:hover,
        .btn-outline:active.focus,
        .btn-outline:active:focus,
        .btn-outline:active:hover,
        .open>.btn-outline.dropdown-toggle.focus,
        .open>.btn-outline.dropdown-toggle:focus,
        .open>.btn-outline.dropdown-toggle:hover {
            background-color: transparent;
            border-color: transparent;
            color: #b39900;
            outline: none
        }

        .btn-outline.active,
        .btn-outline:active,
        .open>.btn-outline.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-outline.disabled.focus,
        .btn-outline.disabled:focus,
        .btn-outline.disabled:hover,
        .btn-outline[disabled].focus,
        .btn-outline[disabled]:focus,
        .btn-outline[disabled]:hover,
        fieldset[disabled] .btn-outline.focus,
        fieldset[disabled] .btn-outline:focus,
        fieldset[disabled] .btn-outline:hover {
            background-color: transparent;
            border-color: transparent
        }

        .btn-outline .badge {
            background-color: #69BD45;
            color: transparent
        }

        .btn-buy,
        .btn-save,
        .save-mobile {
            background-color: #69BD45;
            border-color: #69BD45;
            color: #040404
        }

        .btn-buy.focus,
        .btn-buy:focus,
        .btn-save.focus,
        .save-mobile.focus,
        .btn-save:focus,
        .save-mobile:focus {
            background-color: #ccaf00;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .btn-buy.active,
        .btn-buy:active,
        .btn-buy:hover,
        .btn-save.active,
        .save-mobile.active,
        .btn-save:active,
        .save-mobile:active,
        .btn-save:hover,
        .save-mobile:hover,
        .open>.btn-buy.dropdown-toggle,
        .open>.btn-save.dropdown-toggle,
        .open>.save-mobile.dropdown-toggle {
            background-color: #ccaf00;
            border-color: #c2a600;
            color: #040404
        }

        .btn-buy.active.focus,
        .btn-buy.active:focus,
        .btn-buy.active:hover,
        .btn-buy:active.focus,
        .btn-buy:active:focus,
        .btn-buy:active:hover,
        .btn-save.active.focus,
        .save-mobile.active.focus,
        .btn-save.active:focus,
        .save-mobile.active:focus,
        .btn-save.active:hover,
        .save-mobile.active:hover,
        .btn-save:active.focus,
        .save-mobile:active.focus,
        .btn-save:active:focus,
        .save-mobile:active:focus,
        .btn-save:active:hover,
        .save-mobile:active:hover,
        .open>.btn-buy.dropdown-toggle.focus,
        .open>.btn-buy.dropdown-toggle:focus,
        .open>.btn-buy.dropdown-toggle:hover,
        .open>.btn-save.dropdown-toggle.focus,
        .open>.save-mobile.dropdown-toggle.focus,
        .open>.btn-save.dropdown-toggle:focus,
        .open>.save-mobile.dropdown-toggle:focus,
        .open>.btn-save.dropdown-toggle:hover,
        .open>.save-mobile.dropdown-toggle:hover {
            background-color: #a89100;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .btn-buy.active,
        .btn-buy:active,
        .btn-save.active,
        .save-mobile.active,
        .btn-save:active,
        .save-mobile:active,
        .open>.btn-buy.dropdown-toggle,
        .open>.btn-save.dropdown-toggle,
        .open>.save-mobile.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-buy.disabled.focus,
        .btn-buy.disabled:focus,
        .btn-buy.disabled:hover,
        .btn-buy[disabled].focus,
        .btn-buy[disabled]:focus,
        .btn-buy[disabled]:hover,
        .btn-save.disabled.focus,
        .save-mobile.disabled.focus,
        .btn-save.disabled:focus,
        .save-mobile.disabled:focus,
        .btn-save.disabled:hover,
        .save-mobile.disabled:hover,
        .btn-save[disabled].focus,
        .save-mobile[disabled].focus,
        .btn-save[disabled]:focus,
        .save-mobile[disabled]:focus,
        .btn-save[disabled]:hover,
        .save-mobile[disabled]:hover,
        fieldset[disabled] .btn-buy.focus,
        fieldset[disabled] .btn-buy:focus,
        fieldset[disabled] .btn-buy:hover,
        fieldset[disabled] .btn-save.focus,
        fieldset[disabled] .save-mobile.focus,
        fieldset[disabled] .btn-save:focus,
        fieldset[disabled] .save-mobile:focus,
        fieldset[disabled] .btn-save:hover,
        fieldset[disabled] .save-mobile:hover {
            background-color: #69BD45;
            border-color: #69BD45
        }

        .btn-buy .badge,
        .btn-save .badge,
        .save-mobile .badge {
            background-color: #040404;
            color: #69BD45
        }

        .btn-done {
            background-color: #4990e2;
            border-color: #4990e2;
            color: #fff
        }

        .btn-done.focus,
        .btn-done:focus {
            background-color: #2276d6;
            border-color: #185194;
            color: #fff;
            outline: none
        }

        .btn-done.active,
        .btn-done:active,
        .btn-done:hover,
        .open>.btn-done.dropdown-toggle {
            background-color: #2276d6;
            border-color: #2171cd;
            color: #fff
        }

        .btn-done.active.focus,
        .btn-done.active:focus,
        .btn-done.active:hover,
        .btn-done:active.focus,
        .btn-done:active:focus,
        .btn-done:active:hover,
        .open>.btn-done.dropdown-toggle.focus,
        .open>.btn-done.dropdown-toggle:focus,
        .open>.btn-done.dropdown-toggle:hover {
            background-color: #1d65b7;
            border-color: #185194;
            color: #fff;
            outline: none
        }

        .btn-done.active,
        .btn-done:active,
        .open>.btn-done.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-done.disabled.focus,
        .btn-done.disabled:focus,
        .btn-done.disabled:hover,
        .btn-done[disabled].focus,
        .btn-done[disabled]:focus,
        .btn-done[disabled]:hover,
        fieldset[disabled] .btn-done.focus,
        fieldset[disabled] .btn-done:focus,
        fieldset[disabled] .btn-done:hover {
            background-color: #4990e2;
            border-color: #4990e2
        }

        .btn-done .badge {
            background-color: #fff;
            color: #4990e2
        }

        .btn-gray,
        .btn-grey {
            background-color: #2d2d2d;
            border-color: #d9dde0;
            color: #69BD45
        }

        .btn-gray.focus,
        .btn-gray:focus,
        .btn-grey.focus,
        .btn-grey:focus {
            background-color: #141313;
            border-color: #939ea7;
            color: #69BD45;
            outline: none
        }

        .btn-gray.active,
        .btn-gray:active,
        .btn-gray:hover,
        .btn-grey.active,
        .btn-grey:active,
        .btn-grey:hover,
        .open>.btn-gray.dropdown-toggle,
        .open>.btn-grey.dropdown-toggle {
            background-color: #141313;
            border-color: #b7bfc5;
            color: #69BD45
        }

        .btn-gray.active.focus,
        .btn-gray.active:focus,
        .btn-gray.active:hover,
        .btn-gray:active.focus,
        .btn-gray:active:focus,
        .btn-gray:active:hover,
        .btn-grey.active.focus,
        .btn-grey.active:focus,
        .btn-grey.active:hover,
        .btn-grey:active.focus,
        .btn-grey:active:focus,
        .btn-grey:active:hover,
        .open>.btn-gray.dropdown-toggle.focus,
        .open>.btn-gray.dropdown-toggle:focus,
        .open>.btn-gray.dropdown-toggle:hover,
        .open>.btn-grey.dropdown-toggle.focus,
        .open>.btn-grey.dropdown-toggle:focus,
        .open>.btn-grey.dropdown-toggle:hover {
            background-color: #020202;
            border-color: #939ea7;
            color: #69BD45;
            outline: none
        }

        .btn-gray.active,
        .btn-gray:active,
        .btn-grey.active,
        .btn-grey:active,
        .open>.btn-gray.dropdown-toggle,
        .open>.btn-grey.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-gray.disabled.focus,
        .btn-gray.disabled:focus,
        .btn-gray.disabled:hover,
        .btn-gray[disabled].focus,
        .btn-gray[disabled]:focus,
        .btn-gray[disabled]:hover,
        .btn-grey.disabled.focus,
        .btn-grey.disabled:focus,
        .btn-grey.disabled:hover,
        .btn-grey[disabled].focus,
        .btn-grey[disabled]:focus,
        .btn-grey[disabled]:hover,
        fieldset[disabled] .btn-gray.focus,
        fieldset[disabled] .btn-gray:focus,
        fieldset[disabled] .btn-gray:hover,
        fieldset[disabled] .btn-grey.focus,
        fieldset[disabled] .btn-grey:focus,
        fieldset[disabled] .btn-grey:hover {
            background-color: #2d2d2d;
            border-color: #d9dde0
        }

        .btn-gray .badge,
        .btn-grey .badge {
            background-color: #69BD45;
            color: #2d2d2d
        }

        .btn-fb {
            background-color: #337ab7;
            border-color: #337ab7;
            color: #fff
        }

        .btn-fb.focus,
        .btn-fb:focus {
            background-color: #285f8f;
            border-color: #173853;
            color: #fff;
            outline: none
        }

        .btn-fb.active,
        .btn-fb:active,
        .btn-fb:hover,
        .open>.btn-fb.dropdown-toggle {
            background-color: #285f8f;
            border-color: #265a87;
            color: #fff
        }

        .btn-fb.active.focus,
        .btn-fb.active:focus,
        .btn-fb.active:hover,
        .btn-fb:active.focus,
        .btn-fb:active:focus,
        .btn-fb:active:hover,
        .open>.btn-fb.dropdown-toggle.focus,
        .open>.btn-fb.dropdown-toggle:focus,
        .open>.btn-fb.dropdown-toggle:hover {
            background-color: #204d73;
            border-color: #173853;
            color: #fff;
            outline: none
        }

        .btn-fb.active,
        .btn-fb:active,
        .open>.btn-fb.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-fb.disabled.focus,
        .btn-fb.disabled:focus,
        .btn-fb.disabled:hover,
        .btn-fb[disabled].focus,
        .btn-fb[disabled]:focus,
        .btn-fb[disabled]:hover,
        fieldset[disabled] .btn-fb.focus,
        fieldset[disabled] .btn-fb:focus,
        fieldset[disabled] .btn-fb:hover {
            background-color: #337ab7;
            border-color: #337ab7
        }

        .btn-fb .badge {
            background-color: #fff;
            color: #337ab7
        }

        html[lang=fi] .btn-fb,
        html[lang=fi] .btn-google,
        html[lang=pl] .btn-fb,
        html[lang=pl] .btn-google {
            font-size: 11px
        }

        .dropdown-toggle {
            border-radius: 4px
        }

        .btn-dropdown {
            background-color: #fff;
            border: 1px solid #d9dde0;
            box-shadow: none;
            color: #69BD45
        }

        .btn-dropdown:active,
        .btn-dropdown:focus,
        .btn-dropdown:hover {
            border-color: #b9bec1;
            box-shadow: 0 0 9px rgba(96, 87, 84, .2);
            color: #69BD45
        }

        .btn {
            font-family: FuturaPt, serif;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 20px 9px;
            text-transform: uppercase;
            transition: color, background-color, box-shadow, .1s ease-in
        }

        .btn.btn-xl {
            padding: 12px 28px 11px
        }

        .btn-group-sm>.btn,
        .btn.btn-sm {
            font-size: 12px;
            padding: 8px 15px
        }

        .btn-group-xs>.btn,
        .btn.btn-xs {
            font-size: 12px;
            padding: 2px 10px 1px
        }

        html[lang=pl] .btn {
            font-family: Helvetica, Arial, sans-serif
        }

        .btn-group.open .dropdown-toggle {
            box-shadow: 0 0 9px rgba(96, 87, 84, .2)
        }

        @media (max-width:767px) {
            .btn.btn-xl {
                font-size: 14px
            }
        }

        @media (max-width:359px) {

            .modal-login .btn-group-lg>.btn,
            .modal-login .btn-lg,
            .modal-login div.editor-orientation-landscape .tool-pane .footer .btn,
            div.editor-orientation-landscape .tool-pane .footer .modal-login .btn {
                font-size: 12px
            }
        }

        .btn-square {
            border-radius: 5px;
            padding: 10px
        }

        .btn.btn-hero {
            font-size: 20px;
            margin: 15px 0;
            padding: 15px 30px;
            position: relative
        }

        .materials .btn.btn-hero {
            margin: 15px 30px
        }

        .btn.btn-hero.material-btn-gray {
            background-color: #d3d3d3;
            color: #040404
        }

        .btn.btn-hero:before {
            border: 1.5px solid #69BD45;
            border-radius: 36px;
            bottom: -8px;
            content: "";
            left: -8px;
            position: absolute;
            right: -8px;
            top: -8px
        }

        .btn.btn-hero.material-btn-gray:before {
            border: 1.5px solid #d3d3d3
        }

        .btn.btn-hero.material-btn-gray:hover {
            background-color: gray
        }

        .materials .container .btn-gray,
        .materials .container .btn-primary {
            margin: 15px 30px
        }

        @media (max-width:767px) {
            .btn.btn-xl.btn-hero {
                font-size: 15px
            }

            html[lang=es] .btn.btn-xl.btn-hero {
                font-size: 14px
            }

            html[lang=it] .btn.btn-xl.btn-hero,
            html[lang=pt] .btn.btn-xl.btn-hero {
                font-size: 11px
            }

            html[lang=pt] .start .btn-start-section {
                font-size: 15px
            }
        }

        .btn-cta.btn-default {
            background-color: #2d2d2d;
            border: none;
            color: #69BD45;
            position: relative
        }

        .btn-cta.btn-default:before {
            border: 1px solid #2d2d2d;
            border-radius: 32px;
            bottom: -5px;
            content: "";
            left: -5px;
            position: absolute;
            right: -5px;
            top: -5px
        }

        .btn-cta.btn-default.focus,
        .btn-cta.btn-default:focus {
            background-color: #141313;
            border-color: #070707;
            color: #b39900;
            outline: none
        }

        .btn-cta.btn-default:hover {
            background-color: #141313;
            border-color: #2d2d2d;
            color: #69BD45
        }

        .btn-cta.btn-default.active,
        .btn-cta.btn-default:active,
        .open>.btn-cta.btn-default.dropdown-toggle {
            background-color: #141313;
            border-color: #070707;
            color: #b39900
        }

        .btn-cta.btn-default.active.focus,
        .btn-cta.btn-default.active:focus,
        .btn-cta.btn-default.active:hover,
        .btn-cta.btn-default:active.focus,
        .btn-cta.btn-default:active:focus,
        .btn-cta.btn-default:active:hover,
        .open>.btn-cta.btn-default.dropdown-toggle.focus,
        .open>.btn-cta.btn-default.dropdown-toggle:focus,
        .open>.btn-cta.btn-default.dropdown-toggle:hover {
            background-color: #020202;
            border-color: #070707;
            color: #b39900;
            outline: none
        }

        .btn-cta.btn-default.active,
        .btn-cta.btn-default:active,
        .open>.btn-cta.btn-default.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-cta.btn-default.disabled.focus,
        .btn-cta.btn-default.disabled:focus,
        .btn-cta.btn-default.disabled:hover,
        .btn-cta.btn-default[disabled].focus,
        .btn-cta.btn-default[disabled]:focus,
        .btn-cta.btn-default[disabled]:hover,
        fieldset[disabled] .btn-cta.btn-default.focus,
        fieldset[disabled] .btn-cta.btn-default:focus,
        fieldset[disabled] .btn-cta.btn-default:hover {
            background-color: #2d2d2d;
            border-color: #2d2d2d
        }

        .btn-cta.btn-default .badge {
            background-color: #69BD45;
            color: #2d2d2d
        }

        .btn-cta.btn-primary {
            background-color: #69BD45;
            border: none;
            color: #040404;
            position: relative
        }

        .btn-cta.btn-primary:before {
            border: 1px solid #69BD45;
            border-radius: 32px;
            bottom: -5px;
            content: "";
            left: -5px;
            position: absolute;
            right: -5px;
            top: -5px
        }

        .btn-cta.btn-primary.focus,
        .btn-cta.btn-primary:focus {
            background-color: #ccaf00;
            border-color: #b39900;
            color: #000;
            outline: none
        }

        .btn-cta.btn-primary:hover {
            background-color: #ccaf00;
            border-color: #69BD45;
            color: #040404
        }

        .btn-cta.btn-primary.active,
        .btn-cta.btn-primary:active,
        .open>.btn-cta.btn-primary.dropdown-toggle {
            background-color: #ccaf00;
            border-color: #b39900;
            color: #000
        }

        .btn-cta.btn-primary.active.focus,
        .btn-cta.btn-primary.active:focus,
        .btn-cta.btn-primary.active:hover,
        .btn-cta.btn-primary:active.focus,
        .btn-cta.btn-primary:active:focus,
        .btn-cta.btn-primary:active:hover,
        .open>.btn-cta.btn-primary.dropdown-toggle.focus,
        .open>.btn-cta.btn-primary.dropdown-toggle:focus,
        .open>.btn-cta.btn-primary.dropdown-toggle:hover {
            background-color: #a89100;
            border-color: #b39900;
            color: #000;
            outline: none
        }

        .btn-cta.btn-primary.active,
        .btn-cta.btn-primary:active,
        .open>.btn-cta.btn-primary.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-cta.btn-primary.disabled.focus,
        .btn-cta.btn-primary.disabled:focus,
        .btn-cta.btn-primary.disabled:hover,
        .btn-cta.btn-primary[disabled].focus,
        .btn-cta.btn-primary[disabled]:focus,
        .btn-cta.btn-primary[disabled]:hover,
        fieldset[disabled] .btn-cta.btn-primary.focus,
        fieldset[disabled] .btn-cta.btn-primary:focus,
        fieldset[disabled] .btn-cta.btn-primary:hover {
            background-color: #69BD45;
            border-color: #69BD45
        }

        .btn-cta.btn-primary .badge {
            background-color: #040404;
            color: #69BD45
        }

        .btn-cta.btn-alert {
            background-color: #da5246;
            border: none;
            color: #fff;
            position: relative
        }

        .btn-cta.btn-alert:before {
            border: 1px solid #da5246;
            border-radius: 32px;
            bottom: -5px;
            content: "";
            left: -5px;
            position: absolute;
            right: -5px;
            top: -5px
        }

        .btn-cta.btn-alert.focus,
        .btn-cta.btn-alert:focus {
            background-color: #c63428;
            border-color: #b02f23;
            color: #d9d9d9;
            outline: none
        }

        .btn-cta.btn-alert:hover {
            background-color: #c63428;
            border-color: #da5246;
            color: #fff
        }

        .btn-cta.btn-alert.active,
        .btn-cta.btn-alert:active,
        .open>.btn-cta.btn-alert.dropdown-toggle {
            background-color: #c63428;
            border-color: #b02f23;
            color: #d9d9d9
        }

        .btn-cta.btn-alert.active.focus,
        .btn-cta.btn-alert.active:focus,
        .btn-cta.btn-alert.active:hover,
        .btn-cta.btn-alert:active.focus,
        .btn-cta.btn-alert:active:focus,
        .btn-cta.btn-alert:active:hover,
        .open>.btn-cta.btn-alert.dropdown-toggle.focus,
        .open>.btn-cta.btn-alert.dropdown-toggle:focus,
        .open>.btn-cta.btn-alert.dropdown-toggle:hover {
            background-color: #a82c22;
            border-color: #b02f23;
            color: #d9d9d9;
            outline: none
        }

        .btn-cta.btn-alert.active,
        .btn-cta.btn-alert:active,
        .open>.btn-cta.btn-alert.dropdown-toggle {
            background-image: none;
            outline: none
        }

        .btn-cta.btn-alert.disabled.focus,
        .btn-cta.btn-alert.disabled:focus,
        .btn-cta.btn-alert.disabled:hover,
        .btn-cta.btn-alert[disabled].focus,
        .btn-cta.btn-alert[disabled]:focus,
        .btn-cta.btn-alert[disabled]:hover,
        fieldset[disabled] .btn-cta.btn-alert.focus,
        fieldset[disabled] .btn-cta.btn-alert:focus,
        fieldset[disabled] .btn-cta.btn-alert:hover {
            background-color: #da5246;
            border-color: #da5246
        }

        .btn-cta.btn-alert .badge {
            background-color: #fff;
            color: #da5246
        }

        @media (min-width:768px) {
            .btn-cta {
                font-size: 20px;
                padding: 12px 36px
            }
        }

        .pagination {
            border-radius: 4px;
            display: inline-block;
            margin: 22px 0;
            padding-left: 0
        }

        .pagination>li {
            display: inline
        }

        .pagination>li>a,
        .pagination>li>span {
            background-color: #2d2d2d;
            color: #69BD45;
            float: left;
            font-weight: 500;
            line-height: 1.42857143;
            margin-left: -1px;
            padding: 6px 12px;
            position: relative;
            text-decoration: none
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            margin-left: 0
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            background-color: #141313;
            border-color: #141313;
            color: #69BD45;
            z-index: 2
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #69BD45;
            border-color: #69BD45;
            color: #040404;
            cursor: default;
            font-weight: 900;
            z-index: 3
        }

        .pagination>.disabled>a,
        .pagination>.disabled>a:focus,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>span,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>span:hover {
            background-color: #fff;
            border-color: #ddd;
            color: #777;
            cursor: not-allowed
        }

        .pagination-lg>li>a,
        .pagination-lg>li>span {
            font-size: 12px;
            line-height: 1.3333333;
            padding: 10px 16px
        }

        .pagination-lg>li:first-child>a,
        .pagination-lg>li:first-child>span {
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px
        }

        .pagination-lg>li:last-child>a,
        .pagination-lg>li:last-child>span {
            border-bottom-right-radius: 6px;
            border-top-right-radius: 6px
        }

        .pagination-sm>li>a,
        .pagination-sm>li>span {
            font-size: 12px;
            line-height: 1.5;
            padding: 5px 10px
        }

        .pagination-sm>li:first-child>a,
        .pagination-sm>li:first-child>span {
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px
        }

        .pagination-sm>li:last-child>a,
        .pagination-sm>li:last-child>span {
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px
        }

        .pagination>li>a,
        .pagination>li>span {
            font-family: FuturaPT, sans-serif
        }

        @media (max-width:992px) {
            .order-actions {
                display: table;
                width: 100%
            }
        }

        @media (max-width:480px) {
            .order-actions {
                display: block;
                text-align: center
            }

            .order-actions .order-navigation-container-outlined {
                display: table;
                width: 100%
            }
        }

        .tooltip {
            font-weight: 400
        }

        .margin-bottom {
            margin-bottom: 30px !important
        }

        .margin-top {
            margin-top: 30px !important
        }

        .margin-top-sm {
            margin-top: 15px !important
        }

        .margin-bottom-sm {
            margin-bottom: 15px !important
        }

        .margin-bottom-xs {
            margin-bottom: 7.5px !important
        }

        .margin-top-xs {
            margin-top: 7.5px !important
        }

        .margin-top-lg {
            margin-top: 60px !important
        }

        .margin-bottom-lg {
            margin-bottom: 60px !important
        }

        .nodisplay {
            display: none
        }

        .nowrap {
            white-space: nowrap
        }

        hr {
            border-color: #dadbd6
        }

        .dark-bg {
            background-color: #e8e8e8
        }

        .center-vertical {
            display: table-cell;
            vertical-align: middle
        }

        .svg-responsive {
            max-height: 100px;
            max-width: 100%
        }

        .btn .glyphicon-menu-left,
        .btn .glyphicon-menu-right {
            font-size: 80%
        }

        .col-centered {
            display: inline-block;
            float: none;
            margin-right: -4px;
            text-align: left;
            vertical-align: top
        }

        .bg-box {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 30px 0;
            position: relative;
            width: 100%
        }

        .bg-box h1,
        .bg-box h2 {
            margin: 0
        }

        .bg-box ul {
            margin: 15px 0
        }

        .bg-box .btn {
            text-shadow: none
        }

        .bg-box-dark,
        .bg-box-dark .btn-grey,
        .bg-box-dark h1,
        .bg-box-dark h2 {
            color: #fff
        }

        label.valid {
            display: none !important
        }

        label.error {
            color: #b94a48;
            font-size: 11px;
            margin: -5px 0 5px;
            padding: 0
        }

        .fileinput-button {
            overflow: hidden;
            position: relative
        }

        .fileinput-button input {
            cursor: pointer;
            direction: ltr;
            font-size: 23px;
            height: 70px;
            margin: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform: translate(-300px) scale(4)
        }

        .invisible-text {
            font-size: 0;
            position: absolute
        }

        .materials .inner-page {
            background-color: transparent
        }

        .materials .f-row,
        .materials .sp-top-inner {
            margin: 0
        }

        .materials body {
            background-image: linear-gradient(0deg, #fff, #f2f2f2, #fff);
            max-height: 100%
        }

        .materials .bg-white {
            background-color: #fff
        }

        .materials h1 {
            font-size: 53px;
            letter-spacing: normal
        }

        .materials .materials-slogan {
            font-size: 22px;
            letter-spacing: .55px;
            margin: 0
        }

        .materials .materials-desc {
            font-size: 18px;
            letter-spacing: .5px;
            margin-bottom: 0;
            margin-top: 0
        }

        .materials-desc ul {
            margin: 0;
            padding-left: 15px
        }

        .materials .material .img-responsive {
            object-fit: contain
        }

        .materials .materials-single-image {
            margin: auto
        }

        .products .material {
            display: flex;
            flex-direction: column;
            padding: 12.5px;
            text-align: center;
            width: 25%
        }

        html[lang=jp] .products .material .products-title {
            font-size: 17px
        }

        .products .material .material-image {
            background-size: 1800%;
            border-radius: 50%;
            display: block;
            height: 185px;
            margin: 0 auto;
            max-width: 185px;
            width: 185px
        }

        .materials .products .material .material-image {
            box-shadow: none
        }

        .materials .products .material .material-image.glossy_coated {
            background-position: 0 0
        }

        .materials .products .material .material-image.transparent {
            background-position: -185px 0
        }

        .materials .products .material .material-image.borstad_alu {
            background-position: -370px 0
        }

        .materials .products .material .material-image.mirror {
            background-position: -555px 0
        }

        .materials .products .material .material-image.wall_sticker {
            background-position: -740px 0
        }

        .materials .products .material .material-image.kraft_paper {
            background-position: -925px 0
        }

        .materials .products .material .material-image.holographic {
            background-position: -1110px 0
        }

        .materials .products .material .material-image.prismatic {
            background-position: -1295px 0
        }

        .materials .products .material .material-image.heavy_duty {
            background-position: -1480px 0
        }

        .materials .products .material .material-image.satin_matte_laser {
            background-position: -1665px 0
        }

        .materials .products .material .material-image.epoxy_hi_tack {
            background-position: -1850px 0
        }

        .materials .products .material .material-image.removable_laser {
            background-position: -2035px 0
        }

        .materials .products .material .material-image.glitter {
            background-position: -2220px 0
        }

        .materials .products .material .material-image.white_custom_labels {
            background-position: -2405px 0;
            border-radius: 0
        }

        .materials .products .material .material-image.clear_custom_labels {
            background-position: -2590px 0;
            border-radius: 0
        }

        .materials .products .material .material-image.floor_sticker {
            background-position: -2775px 0
        }

        .materials .products .material .material-image.glow_in_the_dark {
            background-position: -2960px 0
        }

        .products .material .material-image.sample-pack {
            background-size: cover
        }

        .products .material .item-title {
            color: #2d2d2d;
            font-size: 18px;
            margin-top: 23px
        }

        @media (max-width:1199px) {
            .products .material .products-title {
                font-size: 14px
            }

            .products .material .material-image {
                background-size: 1800%;
                border-radius: 50%;
                height: 120px;
                margin: 0 auto;
                max-width: 120px;
                width: 120px
            }

            .materials .products .material .material-image {
                box-shadow: none
            }

            .materials .products .material .material-image.glossy_coated {
                background-position: 0 0
            }

            .materials .products .material .material-image.transparent {
                background-position: -120px 0
            }

            .materials .products .material .material-image.borstad_alu {
                background-position: -240px 0
            }

            .materials .products .material .material-image.mirror {
                background-position: -360px 0
            }

            .materials .products .material .material-image.wall_sticker {
                background-position: -480px 0
            }

            .materials .products .material .material-image.kraft_paper {
                background-position: -600px 0
            }

            .materials .products .material .material-image.holographic {
                background-position: -720px 0
            }

            .materials .products .material .material-image.prismatic {
                background-position: -840px 0
            }

            .materials .products .material .material-image.heavy_duty {
                background-position: -960px 0
            }

            .materials .products .material .material-image.satin_matte_laser {
                background-position: -1080px 0
            }

            .materials .products .material .material-image.epoxy_hi_tack {
                background-position: -1200px 0
            }

            .materials .products .material .material-image.removable_laser {
                background-position: -1320px 0
            }

            .materials .products .material .material-image.glitter {
                background-position: -1440px 0
            }

            .materials .products .material .material-image.white_custom_labels {
                background-position: -1560px 0;
                border-radius: 0
            }

            .materials .products .material .material-image.clear_custom_labels {
                background-position: -1680px 0;
                border-radius: 0
            }

            .materials .products .material .material-image.floor_sticker {
                background-position: -1800px 0
            }

            .materials .products .material .material-image.glow_in_the_dark {
                background-position: -1920px 0
            }

            .materials .products .material .material-image.sample-pack {
                background-size: cover
            }
        }

        @media (max-width:767px) {
            .products .material {
                width: 50%
            }

            .products .material .products-title,
            html[lang=jp] .products .material .products-title {
                font-size: 12px
            }

            .materials .materials-desc {
                font-size: 14px;
                text-align: left
            }

            .materials h1 {
                font-size: 28px
            }

            .materials .materials-slogan {
                font-size: 16px
            }
        }

        #password_meter {
            background-color: #f7f7f7;
            border-radius: .5em;
            font-weight: 700;
            margin-bottom: 1em;
            padding: .75em
        }

        #password_meter h6 {
            font-size: 13px;
            margin-bottom: 10px;
            margin-top: 6px
        }

        #password_meter h6:first-child {
            margin-top: 0
        }

        #password_meter #password_meter_holder {
            box-shadow: inset 0 0 5px rgba(0, 0, 0, .25);
            margin-bottom: 12px
        }

        #password_meter #password_meter_holder #password_score {
            color: #fff;
            font-size: 12px;
            font-weight: 700
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=none] {
            background-color: #979797;
            width: 1%
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=none] #password_score {
            color: #2d2d2d;
            display: inline;
            margin-left: 10px;
            position: absolute
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=weak] {
            background-color: #da5246
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=fair] {
            background-color: #69BD45
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=fair] #password_score {
            color: #2d2d2d
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=good] {
            background-color: #9acd32
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=good] #password_score {
            color: #2d2d2d
        }

        #password_meter #password_meter_holder #password_score_bar[data-password_strength=great] {
            background-color: #6cb676
        }

        #password_meter #invalid-chars:not(.hidden) {
            border-radius: 4px;
            font-size: 12px;
            padding: .8em
        }

        #password_meter #invalid-chars:not(.hidden) span {
            letter-spacing: 1px
        }

        #password_meter #password_suggestion_group {
            margin-bottom: 5px;
            margin-top: 5px;
            padding: 0
        }

        #password_meter #password_suggestion_group li {
            border-radius: 2px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            list-style-type: none;
            margin-bottom: 2px;
            padding: .33em .5em;
            white-space: pre-wrap;
            word-break: break-word
        }

        #password_meter #password_suggestion_group li:before {
            float: left;
            font-family: Glyphicons Halflings;
            font-size: 10px;
            margin-right: 5px;
            margin-top: 1px
        }

        #password_meter #password_suggestion_group li.list-group-item-danger {
            background-color: #d9534f
        }

        #password_meter #password_suggestion_group li.list-group-item-danger:before {
            content: "\E014"
        }

        #password_meter #password_suggestion_group li.list-group-item-success {
            background-color: #72c41d
        }

        #password_meter #password_suggestion_group li.list-group-item-success:before {
            content: "\E013"
        }

        #password_meter #password_suggestion_group li:last-child {
            border: 0
        }

        #password_meter.mini h5,
        #password_meter.mini h6 {
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 6px;
            margin-top: 4px
        }

        #password_meter.mini #password_meter_holder {
            height: 16px !important
        }

        #password_meter.mini #password_meter_holder #password_score {
            color: #000;
            font-size: 10px;
            font-weight: 700
        }

        #password_meter.mini #password_meter_holder .progress-bar {
            line-height: 12px
        }

        #password_meter.mini #password_suggestion_group {
            margin-bottom: 3px !important;
            margin-top: 3px
        }

        #password_meter.mini #password_suggestion_group li {
            font-size: 11px;
            margin-bottom: 2px;
            padding: .2em .33em
        }

        #password_meter.mini #password_suggestion_group li:before {
            font-size: 10px;
            margin-right: 8px
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .shadow {
            box-shadow: 0 7px 15px 0 rgba(0, 0, 0, .2)
        }

        @media (max-width:767px) {
            .text-xs-center {
                text-align: center
            }
        }

        html {
            height: 100%
        }

        @media (min-width:1600px) {
            html {
                height: calc(100% - 125px)
            }
        }

        @media (max-width:1599px) {
            html {
                height: calc(100% - 100px)
            }
        }

        .main-wrapper,
        body {
            background: #f5f5f5;
            height: 100%
        }

        #wrapper {
            margin: 0 auto -265px;
            min-height: 100%
        }

        #connection-problem {
            left: 5%;
            position: absolute;
            top: 20px;
            width: 90%;
            z-index: 10000
        }

        #overlay {
            background: rgba(0, 0, 0, .8);
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999
        }

        #overlay div {
            color: #fff;
            line-height: 16px;
            margin-top: -8px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%
        }

        #overlay img {
            margin: -2px 5px 0 0
        }

        body.cases h3,
        body.skins h3 {
            margin-bottom: 15px !important;
            margin-top: 30px !important
        }

        body.cases .row.products,
        body.skins .row.products {
            margin-bottom: 30px !important
        }

        @media (max-width:767px) {
            body:after {
                content: "phone";
                display: none
            }

            .bg-box {
                background-position: 0 0
            }

            .bg-box .content-box {
                border-radius: 0;
                margin-left: -15px;
                margin-right: -15px;
                padding: 15px
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            body:after {
                content: "tablet";
                display: none
            }

            #macbook a:nth-child(5) {
                clear: both
            }
        }

        @media (min-width:992px) {
            body:after {
                content: "desktop";
                display: none
            }

            .products .figure {
                width: 33%
            }

            body.author .products .figure {
                width: 25%
            }
        }

        .figure.status-pending_review {
            opacity: .5
        }

        div.editor .amount,
        div.editor .panel-tools-overview .control-label {
            font-family: FuturaPT, sans-serif;
            letter-spacing: .5px
        }

        html[lang=pl] div.editor .amount,
        html[lang=pl] div.editor .panel-tools-overview .control-label {
            font-family: Helvetica, Arial, sans-serif
        }

        .breadcrumb,
        .editor-popover-quantity-selector .list-item.active,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        .modal-login .panel-title,
        .page-header .h1,
        .page-header h1,
        .panel .panel-title,
        .stapp-nav .sub li.active a,
        .stapp-nav ul.nav>li>a,
        body.checkout .summary-total .summary-price,
        body.checkout .summary-total .summary-title,
        body.checkout label[for=have-discount],
        body.checkout label[for=have-giftcard],
        body.checkout label[for=have-note],
        body.checkout label[for=other-shipping-address],
        body.stickers .custom-quantity-wrapper .price,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: FuturaPT, sans-serif;
            letter-spacing: .5px
        }

        html[lang=pl] .breadcrumb,
        html[lang=pl] .editor-popover-quantity-selector .list-item.active,
        html[lang=pl] .h1,
        html[lang=pl] .h2,
        html[lang=pl] .h3,
        html[lang=pl] .h4,
        html[lang=pl] .h5,
        html[lang=pl] .h6,
        html[lang=pl] .modal-login .panel-title,
        html[lang=pl] .page-header .h1,
        html[lang=pl] .page-header h1,
        html[lang=pl] .panel .panel-title,
        html[lang=pl] .stapp-nav .sub li.active a,
        html[lang=pl] .stapp-nav ul.nav>li>a,
        html[lang=pl] body.checkout .summary-total .summary-price,
        html[lang=pl] body.checkout .summary-total .summary-title,
        html[lang=pl] body.checkout label[for=have-discount],
        html[lang=pl] body.checkout label[for=have-giftcard],
        html[lang=pl] body.checkout label[for=have-note],
        html[lang=pl] body.checkout label[for=other-shipping-address],
        html[lang=pl] body.stickers .custom-quantity-wrapper .price,
        html[lang=pl] h1,
        html[lang=pl] h2,
        html[lang=pl] h3,
        html[lang=pl] h4,
        html[lang=pl] h5,
        html[lang=pl] h6 {
            font-family: Helvetica, Arial, sans-serif
        }

        body.checkout label[for=have-discount],
        body.checkout label[for=have-giftcard],
        body.checkout label[for=have-note],
        body.checkout label[for=other-shipping-address] {
            display: flex
        }

        body.checkout label[for=have-discount] input[type=checkbox],
        body.checkout label[for=have-giftcard] input[type=checkbox],
        body.checkout label[for=have-note] input[type=checkbox],
        body.checkout label[for=other-shipping-address] input[type=checkbox] {
            margin: 0 4px 4px 0
        }

        .lead {
            font-family: Helvetica, Arial, sans-serif
        }

        .editor-popover-quantity-selector .list-item,
        .f-row-as-li,
        .stapp-nav ul li ul li a,
        .sticker-wizard .box .item,
        div.editor .shapes .cta {
            font-weight: 400;
            letter-spacing: .5px
        }

        .stapp-nav ul li ul li a {
            font-size: 14px
        }

        .options>label,
        .title,
        [class*=f-col] .content .no-preview,
        [class*=f-col] .content .preview,
        [class*=f-col] .content .value,
        [class*=f-col] .content input,
        body.checkout .summary-item,
        footer .bottom-nav-footer li a,
        label.control-label {
            letter-spacing: .5px
        }

        @media screen and (max-width:991px) {

            body.editor .custom_fc_frame,
            body.editor-modal-open .custom_fc_frame {
                display: none
            }
        }

        .author-dark-bg {
            min-height: 90px
        }

        section.author {
            position: relative
        }

        section.author header {
            margin-bottom: 30px;
            padding-top: 64px
        }

        section.author section.bio {
            margin: 0 auto;
            max-width: 700px
        }

        .avatar {
            background: #ecedeb;
            border: 4px solid #fff;
            -webkit-box-shadow: 4px 4px 28px -12px rgba(0, 0, 0, .75);
            -moz-box-shadow: 4px 4px 28px -12px rgba(0, 0, 0, .75);
            box-shadow: 4px 4px 28px -12px rgba(0, 0, 0, .75);
            height: 128px;
            overflow: hidden;
            width: 128px
        }

        section.author header .avatar {
            left: 50%;
            margin-left: -64px;
            position: absolute;
            top: -64px
        }

        .avatar>.glyphicon {
            color: #ecedeb;
            font-size: 100px;
            line-height: 130px
        }

        a.instagram-link {
            display: inline-block;
            padding: 0
        }

        a.instagram-link>.caption {
            background-color: rgba(0, 0, 0, .5);
            bottom: 0;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        a.instagram-link>.caption>p {
            font-size: 90%;
            margin-top: -15px;
            padding-top: 50%;
            text-align: center;
            width: 100%
        }

        a.instagram-link .instagram-img {
            background-position: 50%;
            background-size: cover;
            padding-bottom: 100%;
            width: 100%
        }

        .instagram-profile-picture {
            -ms-flex-negative: 0;
            background-color: #fbfbfb;
            border: 1px solid #cccfd0;
            border-radius: 50%;
            box-sizing: border-box;
            display: inline-block;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            margin-right: 10px
        }

        a.instagram-link:hover>.caption {
            opacity: 1
        }

        .instagram-gallery {
            margin-bottom: 1em;
            margin-top: 1em
        }

        .pswp__bg {
            background-color: #000
        }

        .pswp__button {
            -webkit-appearance: none;
            background: none;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #4b4f54;
            cursor: pointer;
            display: block;
            float: right;
            font-size: 24px;
            height: 60px;
            line-height: 60px;
            margin: 0;
            opacity: .7;
            overflow: visible;
            padding: 0;
            position: relative;
            -webkit-transition: opacity .2s;
            transition: opacity .2s;
            width: 60px
        }

        .pswp__button:focus,
        .pswp__button:hover,
        .pswp__ui--over-close .pswp__button--close {
            opacity: 1
        }

        .pswp__button:active {
            opacity: .9;
            outline: none
        }

        .pswp__button::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        .pswp__button .glyphicon {
            pointer-events: none
        }

        .pswp__button--close {
            line-height: 65px
        }

        .pswp--touch .pswp__button--arrow--left,
        .pswp--touch .pswp__button--arrow--right {
            visibility: hidden
        }

        .pswp__button--arrow--left,
        .pswp__button--arrow--right {
            background: none;
            color: #fff;
            height: 100px;
            margin-top: -50px;
            position: absolute;
            top: 50%;
            width: 32px
        }

        .pswp__button--arrow--left {
            left: 0
        }

        .pswp__button--arrow--right {
            right: 0
        }

        .pswp__button--arrow--left:before,
        .pswp__button--arrow--right:before {
            content: "";
            height: 30px;
            position: absolute;
            top: 35px;
            width: 32px
        }

        .pswp__button--arrow--left:before {
            left: 6px
        }

        .pswp__button--arrow--right:before {
            right: 6px
        }

        .pswp__caption {
            background: #fff;
            bottom: 0;
            left: 0;
            position: absolute;
            width: 100%
        }

        .pswp__caption--fake {
            visibility: hidden
        }

        .pswp__ui {
            -webkit-font-smoothing: auto;
            opacity: 1;
            visibility: visible;
            z-index: 1550
        }

        .pswp__top-bar {
            background-color: #fff;
            height: 60px;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .pswp--has_mouse .pswp__button--arrow--left,
        .pswp--has_mouse .pswp__button--arrow--right {
            visibility: visible
        }

        .pswp__ui--hidden .pswp__button--arrow--left,
        .pswp__ui--hidden .pswp__button--arrow--right,
        .pswp__ui--hidden .pswp__caption,
        .pswp__ui--hidden .pswp__top-bar {
            opacity: .001
        }

        .pswp__ui--one-slide .pswp__button--arrow--left,
        .pswp__ui--one-slide .pswp__button--arrow--right,
        .pswp__ui--one-slide .pswp__counter {
            display: none
        }

        .pswp__element--disabled {
            display: none !important
        }

        .pswp.closing .pswp__ui {
            display: none
        }

        .pswp--animated-in .pswp__ui {
            opacity: 1
        }

        .pswp__ui,
        .pswp__ui.pswp__ui--idle {
            opacity: 0
        }

        .pswp__caption {
            height: 60px
        }

        .pswp__caption__center {
            text-align: center
        }

        .pswp header,
        .pswp__caption__center {
            color: #333;
            font-size: 16px;
            font-weight: 700;
            line-height: 60px
        }

        .pswp header {
            padding-left: 15px;
            position: absolute;
            top: 0
        }

        .sticker-wizard .box.box-shape .icon {
            margin-top: 5px
        }

        .sticker-wizard .box {
            overflow: hidden;
            padding: 0
        }

        .sticker-wizard .box .item {
            width: 100%
        }

        .sticker-wizard a.item:active,
        .sticker-wizard a.item:focus,
        .sticker-wizard a.item:hover {
            text-decoration: none
        }

        .sticker-wizard table {
            margin: 0;
            padding: 0;
            width: 100%
        }

        .sticker-wizard a.item {
            color: #555;
            float: left;
            padding: 5px 10px
        }

        .sticker-wizard a.item .label {
            float: right;
            margin-top: 2px
        }

        .sticker-wizard .square-back-info {
            padding: 15px
        }

        .square-back-info a.btn {
            margin: 10px 0 0
        }

        .sticker-wizard a.item.active {
            background: #e8e8e8;
            color: #333;
            font-weight: 700
        }

        .sticker-wizard .input-group-sm>.form-control,
        .sticker-wizard .input-group-sm>.input-group-addon,
        .sticker-wizard .input-group-sm>.input-group-btn>.btn,
        .sticker-wizard .input-sm {
            font-weight: 400
        }

        .sticker-wizard .box.box-shape {
            line-height: 60px
        }

        .sticker-wizard .box.box-shape .item {
            padding: 0 0 0 10px;
            text-align: left;
            width: 100%
        }

        .sticker-wizard .box.box-shape span {
            float: left;
            margin-right: 10px
        }

        .sticker-wizard .box.box-materials .item.disabled,
        .sticker-wizard .box.box-shape .item.disabled {
            cursor: not-allowed;
            opacity: .5
        }

        #custom-size-wrapper,
        .custom-quantity-wrapper {
            background: #e8e8e8;
            float: left;
            margin: 0;
            padding: 0 5px 5px;
            width: 100%
        }

        #custom-size-wrapper input {
            float: left;
            padding: 5px 8px;
            text-align: center;
            width: 45%
        }

        #custom-size-wrapper span {
            float: left;
            line-height: 30px;
            text-align: center;
            width: 10%
        }

        .box-container-quantity-and-prices img.loader,
        .box-size img.loader {
            display: none
        }

        .box-container-quantity-and-prices.loading img.loader,
        .box-size.loading img.loader {
            display: inline
        }

        .box-container-quantity-and-prices .price-tag {
            float: right;
            margin-top: 2px
        }

        .box-container-quantity-and-prices .item>div:first-child {
            float: left;
            width: 38%
        }

        .box-container-quantity-and-prices-info {
            border-bottom: 1px solid #eee;
            color: #999;
            font-size: 85%;
            padding: 10px;
            text-align: left
        }

        .custom-quantity-wrapper {
            line-height: 30px
        }

        .custom-quantity-wrapper input {
            float: left;
            margin-right: 6%;
            padding: 5px 8px;
            width: 33%
        }

        .custom-quantity-wrapper .save {
            float: right;
            margin-right: 5px;
            margin-top: 8px
        }

        .selected-template img {
            display: block;
            height: auto;
            max-width: 100%
        }

        .selected-template {
            font-size: 85%;
            font-weight: 400;
            text-align: center
        }

        .sticker-wizard #upload-progress {
            margin-top: 5px
        }

        .sticker-wizard .add small {
            display: block;
            margin-top: 3px;
            text-align: center
        }

        .sticker-wizard .square-back-select {
            margin: 15px 0;
            padding: 15px 15px 0
        }

        .sticker-wizard .square-back-select .title {
            background-color: #5cb85c;
            color: #fff;
            margin: -15px -15px 0;
            padding: 10px 15px
        }

        .square-back-select .title a {
            color: #fff;
            font-size: 12px;
            line-height: 20px
        }

        .square-back-select .checkbox label {
            width: 100%
        }

        .inc-vat-wrapper {
            float: right;
            font-size: 11.2px;
            font-weight: 400;
            margin-top: 4px
        }

        #giftcards-info {
            background-color: #fff
        }

        .single-giftcard-tile .item-title {
            margin-bottom: 15px;
            margin-top: 15px
        }

        @media (min-width:992px) {
            .single-giftcard-tile {
                width: 25% !important
            }
        }

        .single-giftcard-tile .item-link {
            position: relative
        }

        .single-giftcard-tile span.giftcard-price-tag {
            background-color: #69BD45;
            color: #000;
            display: inline-block;
            font-family: FuturaPT, sans-serif;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .5px;
            margin-top: 15px;
            padding: 5px 6px 5px 8px;
            position: absolute;
            right: 0
        }

        .single-giftcard-tile span.giftcard-discount {
            border-radius: 4px;
            clear: both;
            color: #db584c;
            display: block;
            font-family: FuturaPT, sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .66px;
            margin-bottom: 10px;
            text-transform: uppercase
        }

        .single-giftcard-tile .btn {
            margin-top: 40px
        }

        .single-giftcard-tile span.giftcard-discount+.btn {
            margin-top: 0 !important
        }

        @media screen and (max-width:767px) {
            .single-giftcard-tile span.giftcard-price-tag {
                font-size: 11px;
                padding: 3px 4px 3px 5px
            }

            .single-giftcard-tile span.giftcard-discount {
                margin-bottom: 5px
            }

            .single-giftcard-tile .btn {
                margin-top: 35px;
                padding-left: 10px;
                padding-right: 10px
            }

            .single-giftcard-tile span.giftcard-discount+.btn {
                margin-top: 0 !important
            }
        }

        .price-span {
            color: #333;
            font-weight: 700
        }

        .modal-login .modal-header {
            border: 0;
            margin: 0;
            padding: 0 0 15px
        }

        .modal-login .modal-header button.close {
            border: 0;
            margin: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .modal-login .modal-body {
            padding-top: 0
        }

        .modal-login .modal-content {
            background-color: #ecedea
        }

        .modal-login .panel-title {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mO4dfvafwAIqQOL7zQtmAAAAABJRU5ErkJggg==);
            background-position: 0;
            background-repeat: repeat-x;
            text-align: center
        }

        .modal-login .panel-title a {
            background-color: #ecedea;
            display: inline-block;
            margin: 0 auto;
            padding: 0 15px;
            text-decoration: none
        }

        .modal-login .panel {
            margin: 30px 0
        }

        .modal-login .panel .panel-body {
            padding: 15px 30px 0
        }

        .modal-login .panel .panel-body hr {
            margin-left: 0;
            margin-right: 0
        }

        .modal-login a[aria-expanded=true] {
            color: #0a0a0a
        }

        @media (min-width:768px) {
            .modal-login .modal-dialog {
                width: 350px
            }
        }

        section.shortcode-replacement {
            border-left: 2px dashed #333;
            cursor: pointer;
            margin-left: -15px;
            padding-left: 15px
        }

        .panel-group-settings-accordion {
            background: #e8e8e8;
            padding: 0
        }

        .panel-group-settings-accordion .panel {
            margin-bottom: 0;
            padding: 1em
        }

        .panel-group-settings-accordion .panel.active {
            background: #fff
        }

        .panel-group-settings-accordion .panel:last-child {
            margin-bottom: 0
        }

        .panel-group-settings-accordion .panel .panel-title {
            color: #555;
            font-size: 14px;
            line-height: 20px;
            margin: 0;
            text-decoration: none
        }

        .panel-group-settings-accordion .panel.active .panel-title {
            color: #333;
            font-weight: 700
        }

        .panel-group-settings-accordion .panel.active .panel-title:hover {
            text-decoration: none
        }

        .panel-group-settings-accordion .panel .panel-title:hover {
            color: #333
        }

        .panel-group-settings-accordion .panel .panel-collapse.collapse {
            height: 0 !important
        }

        .panel-group-settings-accordion .panel.active .panel-collapse {
            height: auto !important;
            margin-top: 1em
        }

        .panel-group-settings-accordion .collapsing {
            -webkit-transition: none;
            transition: none
        }

        .sheet-preview svg,
        body.figure .sheet-preview svg,
        body.figure table .sheet-preview svg {
            width: 100%
        }

        .sheet-preview.animated {
            -webkit-animation-duration: .3s;
            animation-duration: .3s
        }

        .sheet-preview .loader-wrapper {
            position: relative
        }

        .sheet-preview .loader-wrapper>.loader-gif {
            left: 50%;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .dropdown-submenu {
            position: relative
        }

        .dropdown-submenu>.dropdown-menu {
            border-top-left-radius: 0;
            left: 100%;
            margin-left: -1px;
            margin-top: -6px;
            top: 0
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block
        }

        .dropup .dropdown-submenu>.dropdown-menu {
            border-bottom-left-radius: 0;
            bottom: 0;
            margin-bottom: -2px;
            margin-top: 0;
            top: auto
        }

        .dropdown-submenu>a:after {
            border-color: transparent transparent transparent #333;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            content: " ";
            display: block;
            float: right;
            height: 0;
            margin-right: -10px;
            margin-top: 5px;
            width: 0
        }

        .dropdown-submenu.active:hover>a:after,
        .dropdown-submenu.active>a:after {
            border-left-color: #fff
        }

        .dropdown-submenu.pull-left {
            float: none
        }

        .dropdown-submenu.pull-left>.dropdown-menu {
            border-top-right-radius: 0;
            left: -100%;
            margin-left: 10px
        }

        .dropdown-menu.dropdown-menu-inline {
            border: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            display: block;
            margin: 0;
            position: relative;
            z-index: inherit
        }

        .modal-content {
            border-radius: 3px
        }

        img.lazy:not([src]) {
            content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=)
        }

        .icon {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/stickerapp3sprite.png)
        }

        .icon.shape {
            height: 50px;
            line-height: 50px;
            width: 50px
        }

        .icon.rect {
            background-position: 0 -300px
        }

        .icon.circle {
            background-position: -50px -300px
        }

        .icon.rounded {
            background-position: -100px -300px
        }

        .icon.path {
            background-position: 1px -350px
        }

        .icon.sheet {
            background-position: -50px -350px
        }

        .icon.cut {
            background-position: -100px -350px
        }

        .icon.path-s {
            background-position: 0 -400px
        }

        .icon.path-m {
            background-position: -50px -400px
        }

        .icon.path-l {
            background-position: -100px -400px
        }

        .icon.jcb {
            background-position: 0 -503px;
            width: 42px
        }

        .icon.stickerapp-logo {
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            transition: top .2s ease-in-out, height .2s ease, background-position .2s ease, background-size .2s ease;
            -webkit-transition: top .2s ease, height .2s ease, background-position .2s ease, background-size .2s ease;
            width: 170px
        }

        .icon.stickerapp-logo.halloween {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/stickerapp/blood2.gif)
        }

        @media (min-width:1600px) {
            .icon.stickerapp-logo {
                background-position: center -537px;
                height: 90px;
                top: 67px
            }

            .nav-deflated .icon.stickerapp-logo {
                top: 54px
            }

            .editor .icon.stickerapp-logo {
                background-position: center -376px;
                background-size: 62%;
                height: 70px;
                top: 42px
            }

            .icon.stickerapp-logo.halloween,
            .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 90%;
                height: 104px;
                top: 71px
            }

            .nav-deflated .icon.stickerapp-logo.halloween,
            .nav-deflated .icon.stickerapp-logo.xmas {
                height: 96px;
                top: 53px
            }

            .editor .icon.stickerapp-logo.halloween,
            .editor .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 62%;
                height: 65px;
                top: 40px
            }
        }

        @media (max-width:1599px) and (min-width:992px) {
            .icon.stickerapp-logo {
                background-position: center -424px;
                background-size: 70%;
                height: 70px;
                top: 50px
            }

            .nav-deflated .icon.stickerapp-logo {
                top: 40px
            }

            .editor .icon.stickerapp-logo {
                background-position: center -376px;
                background-size: 62%;
                top: 42px
            }

            .icon.stickerapp-logo.halloween,
            .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 71%;
                height: 83px;
                top: 58px
            }

            .nav-deflated .icon.stickerapp-logo.halloween,
            .nav-deflated .icon.stickerapp-logo.xmas {
                height: 74px;
                top: 41px
            }

            .editor .icon.stickerapp-logo.halloween,
            .editor .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 62%;
                height: 65px;
                top: 40px
            }
        }

        @media (max-width:991px) {
            .icon.stickerapp-logo {
                background-position: center -362px;
                background-size: 60%;
                height: 65px;
                top: 50px
            }

            .nav-deflated .icon.stickerapp-logo {
                top: 42px
            }

            .editor .icon.stickerapp-logo {
                background-position: center -328px;
                background-size: 54%;
                top: 35px
            }

            .icon.stickerapp-logo.halloween,
            .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 60%;
                height: 70px;
                top: 59px
            }

            .nav-deflated .icon.stickerapp-logo.halloween,
            .nav-deflated .icon.stickerapp-logo.xmas {
                top: 45px
            }

            .editor .icon.stickerapp-logo.halloween,
            .editor .icon.stickerapp-logo.xmas {
                background-position: center 0;
                background-size: 54%;
                height: 57px;
                top: 29px
            }
        }

        #modal-language .modal-body {
            padding: 0
        }

        #modal-language .modal-body ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        #modal-language .modal-body ul a li {
            color: #444;
            font-size: 19px;
            overflow: hidden;
            width: 100%
        }

        #modal-language .modal-body ul li {
            align-items: center;
            display: flex;
            padding: 10px 15px
        }

        #modal-language .modal-body ul a:hover {
            color: #0a0a0a;
            text-decoration: underline
        }

        #modal-language .modal-body ul a li:hover {
            background-color: #e8e8e8
        }

        #modal-language .modal-body img {
            margin-right: 5px
        }

        #modal-language .modal-header h5 {
            display: inline;
            font-size: 19px;
            font-weight: 700;
            margin: 0 !important
        }

        #modal-language .modal-body a:last-of-type li {
            border-radius: 0 0 3px 3px
        }

        .modify__rotate {
            transform: rotate(90deg)
        }

        .modify__no-pointers {
            pointer-events: none
        }

        table {
            background-color: transparent
        }

        caption {
            color: #777;
            padding-bottom: 8px;
            padding-top: 8px
        }

        caption,
        th {
            text-align: left
        }

        .table {
            margin-bottom: 22px;
            max-width: 100%;
            width: 100%
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            border-top: 1px solid #ddd;
            line-height: 1.42857143;
            padding: 8px;
            vertical-align: top
        }

        .table>thead>tr>th {
            border-bottom: 2px solid #ddd;
            vertical-align: bottom
        }

        .table>caption+thead>tr:first-child>td,
        .table>caption+thead>tr:first-child>th,
        .table>colgroup+thead>tr:first-child>td,
        .table>colgroup+thead>tr:first-child>th,
        .table>thead:first-child>tr:first-child>td,
        .table>thead:first-child>tr:first-child>th {
            border-top: 0
        }

        .table>tbody+tbody {
            border-top: 2px solid #ddd
        }

        .table .table {
            background-color: #f5f5f5
        }

        .table-condensed>tbody>tr>td,
        .table-condensed>tbody>tr>th,
        .table-condensed>tfoot>tr>td,
        .table-condensed>tfoot>tr>th,
        .table-condensed>thead>tr>td,
        .table-condensed>thead>tr>th {
            padding: 5px
        }

        .table-bordered,
        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border: 1px solid #ddd
        }

        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border-bottom-width: 2px
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f9f9f9
        }

        .table-hover>tbody>tr:hover {
            background-color: #f5f5f5
        }

        table col[class*=col-] {
            display: table-column;
            float: none;
            position: static
        }

        table td[class*=col-],
        table th[class*=col-] {
            display: table-cell;
            float: none;
            position: static
        }

        .table>tbody>tr.active>td,
        .table>tbody>tr.active>th,
        .table>tbody>tr>td.active,
        .table>tbody>tr>th.active,
        .table>tfoot>tr.active>td,
        .table>tfoot>tr.active>th,
        .table>tfoot>tr>td.active,
        .table>tfoot>tr>th.active,
        .table>thead>tr.active>td,
        .table>thead>tr.active>th,
        .table>thead>tr>td.active,
        .table>thead>tr>th.active {
            background-color: #f5f5f5
        }

        .table-hover>tbody>tr.active:hover>td,
        .table-hover>tbody>tr.active:hover>th,
        .table-hover>tbody>tr:hover>.active,
        .table-hover>tbody>tr>td.active:hover,
        .table-hover>tbody>tr>th.active:hover {
            background-color: #e8e8e8
        }

        .table>tbody>tr.success>td,
        .table>tbody>tr.success>th,
        .table>tbody>tr>td.success,
        .table>tbody>tr>th.success,
        .table>tfoot>tr.success>td,
        .table>tfoot>tr.success>th,
        .table>tfoot>tr>td.success,
        .table>tfoot>tr>th.success,
        .table>thead>tr.success>td,
        .table>thead>tr.success>th,
        .table>thead>tr>td.success,
        .table>thead>tr>th.success {
            background-color: #dff0d8
        }

        .table-hover>tbody>tr.success:hover>td,
        .table-hover>tbody>tr.success:hover>th,
        .table-hover>tbody>tr:hover>.success,
        .table-hover>tbody>tr>td.success:hover,
        .table-hover>tbody>tr>th.success:hover {
            background-color: #d0e9c6
        }

        .table>tbody>tr.info>td,
        .table>tbody>tr.info>th,
        .table>tbody>tr>td.info,
        .table>tbody>tr>th.info,
        .table>tfoot>tr.info>td,
        .table>tfoot>tr.info>th,
        .table>tfoot>tr>td.info,
        .table>tfoot>tr>th.info,
        .table>thead>tr.info>td,
        .table>thead>tr.info>th,
        .table>thead>tr>td.info,
        .table>thead>tr>th.info {
            background-color: #d9edf7
        }

        .table-hover>tbody>tr.info:hover>td,
        .table-hover>tbody>tr.info:hover>th,
        .table-hover>tbody>tr:hover>.info,
        .table-hover>tbody>tr>td.info:hover,
        .table-hover>tbody>tr>th.info:hover {
            background-color: #c4e3f3
        }

        .table>tbody>tr.warning>td,
        .table>tbody>tr.warning>th,
        .table>tbody>tr>td.warning,
        .table>tbody>tr>th.warning,
        .table>tfoot>tr.warning>td,
        .table>tfoot>tr.warning>th,
        .table>tfoot>tr>td.warning,
        .table>tfoot>tr>th.warning,
        .table>thead>tr.warning>td,
        .table>thead>tr.warning>th,
        .table>thead>tr>td.warning,
        .table>thead>tr>th.warning {
            background-color: #fcf8e3
        }

        .table-hover>tbody>tr.warning:hover>td,
        .table-hover>tbody>tr.warning:hover>th,
        .table-hover>tbody>tr:hover>.warning,
        .table-hover>tbody>tr>td.warning:hover,
        .table-hover>tbody>tr>th.warning:hover {
            background-color: #faf2cc
        }

        .table>tbody>tr.danger>td,
        .table>tbody>tr.danger>th,
        .table>tbody>tr>td.danger,
        .table>tbody>tr>th.danger,
        .table>tfoot>tr.danger>td,
        .table>tfoot>tr.danger>th,
        .table>tfoot>tr>td.danger,
        .table>tfoot>tr>th.danger,
        .table>thead>tr.danger>td,
        .table>thead>tr.danger>th,
        .table>thead>tr>td.danger,
        .table>thead>tr>th.danger {
            background-color: #f2dede
        }

        .table-hover>tbody>tr.danger:hover>td,
        .table-hover>tbody>tr.danger:hover>th,
        .table-hover>tbody>tr:hover>.danger,
        .table-hover>tbody>tr>td.danger:hover,
        .table-hover>tbody>tr>th.danger:hover {
            background-color: #ebcccc
        }

        .table-responsive {
            min-height: .01%;
            overflow-x: auto
        }

        @media screen and (max-width:767px) {
            .table-responsive {
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #ddd;
                margin-bottom: 16.5px;
                overflow-y: hidden;
                width: 100%
            }

            .table-responsive>.table {
                margin-bottom: 0
            }

            .table-responsive>.table>tbody>tr>td,
            .table-responsive>.table>tbody>tr>th,
            .table-responsive>.table>tfoot>tr>td,
            .table-responsive>.table>tfoot>tr>th,
            .table-responsive>.table>thead>tr>td,
            .table-responsive>.table>thead>tr>th {
                white-space: nowrap
            }

            .table-responsive>.table-bordered {
                border: 0
            }

            .table-responsive>.table-bordered>tbody>tr>td:first-child,
            .table-responsive>.table-bordered>tbody>tr>th:first-child,
            .table-responsive>.table-bordered>tfoot>tr>td:first-child,
            .table-responsive>.table-bordered>tfoot>tr>th:first-child,
            .table-responsive>.table-bordered>thead>tr>td:first-child,
            .table-responsive>.table-bordered>thead>tr>th:first-child {
                border-left: 0
            }

            .table-responsive>.table-bordered>tbody>tr>td:last-child,
            .table-responsive>.table-bordered>tbody>tr>th:last-child,
            .table-responsive>.table-bordered>tfoot>tr>td:last-child,
            .table-responsive>.table-bordered>tfoot>tr>th:last-child,
            .table-responsive>.table-bordered>thead>tr>td:last-child,
            .table-responsive>.table-bordered>thead>tr>th:last-child {
                border-right: 0
            }

            .table-responsive>.table-bordered>tbody>tr:last-child>td,
            .table-responsive>.table-bordered>tbody>tr:last-child>th,
            .table-responsive>.table-bordered>tfoot>tr:last-child>td,
            .table-responsive>.table-bordered>tfoot>tr:last-child>th {
                border-bottom: 0
            }
        }

        .breadcrumb {
            background-color: transparent;
            border-radius: 4px;
            font-family: Helvetica, Arial, sans-serif;
            list-style: none;
            margin-bottom: 22px;
            padding-left: 0;
            padding-top: 10px
        }

        .breadcrumb>li {
            display: inline-block
        }

        .breadcrumb>li+li:before {
            color: #7f7f7f;
            content: "/\A0";
            padding: 0 5px
        }

        .breadcrumb>.active {
            color: #2d2d2d
        }

        .breadcrumb-item {
            color: #7f7f7f
        }

        .breadcrumb-item:focus,
        .breadcrumb-item:hover {
            color: #2d2d2d;
            text-decoration: none
        }

        .breadcrumb-item+.breadcrumb-item:before {
            content: "/";
            display: inline-block;
            padding-left: .5rem;
            padding-right: .5rem
        }

        .text-danger {
            color: #d9534f
        }

        .no-text-select,
        .sp-alpha,
        .sp-alpha-handle,
        .sp-clear,
        .sp-container,
        .sp-container button,
        .sp-container.sp-dragging .sp-input,
        .sp-dragger,
        .sp-preview,
        .sp-replacer,
        .sp-slider {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .truncate._90 {
            display: inline-block;
            width: 90%
        }

        .truncate._80 {
            display: inline-block;
            width: 80%
        }

        .truncate._70 {
            display: inline-block;
            width: 70%
        }

        .truncate._60 {
            display: inline-block;
            width: 60%
        }

        .link {
            color: #4990e2
        }

        .link:hover {
            text-decoration: underline
        }

        @font-face {
            font-display: fallback;
            font-family: icon;
            font-style: normal;
            font-weight: 400;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.eot?43771309);
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.eot?43771309#iefix) format("embedded-opentype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.woff2?43771309) format("woff2"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.woff?43771309) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.ttf?43771309) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fontello/font/icon.svg?43771309#icon) format("svg")
        }

        [class*=" icon-"]:before,
        [class^=icon-]:before {
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            font-family: icon;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 1em;
            margin-left: .2em;
            margin-right: .2em;
            text-align: center;
            text-decoration: inherit;
            text-transform: none;
            width: 1em
        }

        .icon-cross:before {
            content: "\E800"
        }

        .icon-arrow-left:before {
            content: "\E801"
        }

        .icon-arrow-right:before {
            content: "\E802"
        }

        .icon-backward:before {
            content: "\E803"
        }

        .icon-forward:before {
            content: "\E804"
        }

        .icon-cart:before {
            content: "\E805"
        }

        .icon-info:before {
            content: "\E806"
        }

        .icon-talk-bubble:before {
            content: "\E807"
        }

        .icon-check:before {
            content: "\E80C"
        }

        .icon-align-left:before {
            content: "\E80D"
        }

        .icon-align-center:before {
            content: "\E80E"
        }

        .icon-align-right:before {
            content: "\E80F"
        }

        .icon-drop-down:before {
            content: "\E810"
        }

        .icon-drop-up:before {
            content: "\E811"
        }

        .icon-user:before {
            content: "\E81C"
        }

        .icon-car:before {
            content: "\E81D"
        }

        .icon-settings:before {
            content: "\E81E"
        }

        .icon-heart:before {
            content: "\E823"
        }

        .icon-pen:before {
            content: "\E824"
        }

        .mw-3 {
            max-width: 25%
        }

        .mw-12 {
            max-width: 100%
        }

        .mh-12 {
            max-height: 100%
        }

        .f-col-1,
        .w-1 {
            width: 8.333333%
        }

        .f-col-2,
        .w-2 {
            width: 16.6%
        }

        .f-col-3,
        .w-3 {
            width: 25%
        }

        .f-col-4,
        .w-4 {
            width: 33.33%
        }

        .f-col-5,
        .w-5 {
            width: 41.6%
        }

        .f-col-6,
        .w-6,
        div.editor-orientation-landscape.sheet .tool-pane section.tool-pane-quantity,
        div.editor-orientation-landscape.sheet .tool-pane section.tool-pane-size,
        div.editor-orientation-portrait.sheet .tool-pane .tool-material-preset,
        div.editor-orientation-portrait.sheet .tool-pane .tool-note,
        div.editor-orientation-portrait.single .tool-pane .tool-material-preset,
        div.editor-orientation-portrait.single .tool-pane .tool-note {
            width: 50%
        }

        .f-col-7,
        .w-7 {
            width: 58.3%
        }

        .f-col-8,
        .w-8 {
            width: 66.6%
        }

        .f-col-9,
        .w-9 {
            width: 75%
        }

        .f-col-10,
        .w-10 {
            width: 83.3%
        }

        .f-col-11,
        .w-11 {
            width: 91.6%
        }

        .f-col-12,
        .w-12,
        div.editor-orientation-landscape.sheet .tool-pane section.tool-pane-confirm,
        div.editor-orientation-landscape.sheet .tool-pane section.tool-pane-price,
        div.editor-orientation-portrait.has-no-material-selector.has-note-enabled .tool-pane .tool-note,
        div.editor-orientation-portrait.single.has-material-selector.has-note-disabled .tool-pane .tool-material-preset {
            width: 100%
        }

        .editor .tool-pane .tool-content .tool-content-body,
        .editor-popover .popover-content,
        .editor-popover .popover-header .dropdown-menu,
        .scroll-y,
        div.editor .dropdown-menu {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto
        }

        @media (min-width:992px) {
            .w-md-1 {
                width: 8.333333% !important
            }

            .w-md-2 {
                width: 16.6% !important
            }

            .w-md-3 {
                width: 25% !important
            }

            .w-md-4 {
                width: 33.33% !important
            }

            .w-md-5 {
                width: 41.6% !important
            }

            .w-md-6 {
                width: 50% !important
            }

            .w-md-7 {
                width: 58.3% !important
            }

            .w-md-8 {
                width: 66.6% !important
            }

            .w-md-9 {
                width: 75% !important
            }

            .w-md-10 {
                width: 83.3% !important
            }

            .w-md-11 {
                width: 91.6% !important
            }

            .w-md-12 {
                width: 100% !important
            }
        }

        @media (min-width:1200px) {
            .w-lg-1 {
                width: 8.333333% !important
            }

            .w-lg-2 {
                width: 16.6% !important
            }

            .w-lg-3 {
                width: 25% !important
            }

            .w-lg-4 {
                width: 33.33% !important
            }

            .w-lg-5 {
                width: 41.6% !important
            }

            .w-lg-6 {
                width: 50% !important
            }

            .w-lg-7 {
                width: 58.3% !important
            }

            .w-lg-8 {
                width: 66.6% !important
            }

            .w-lg-9 {
                width: 75% !important
            }

            .w-lg-10 {
                width: 83.3% !important
            }

            .w-lg-11 {
                width: 91.6% !important
            }

            .w-lg-12 {
                width: 100% !important
            }
        }

        .f-row,
        .sp-top-inner {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%
        }

        .active.sp-top-inner,
        .f-row.active {
            background: #efefef;
            color: #000;
            font-weight: 700
        }

        .f-row-as-li,
        .f-row:not(.f-row-as-li)>[class*=f-col],
        .sp-top-inner:not(.f-row-as-li)>[class*=f-col] {
            align-items: center;
            padding: 5px 12px
        }

        .f-grid>.f-row,
        .f-grid>.sp-top-inner,
        .f-grid>[class*=f-col] {
            border-bottom: 1px solid #d9d9d9
        }

        .f-grid>[class*=f-col] {
            border-right: 1px solid #d9d9d9
        }

        .f-grid>[class*=f-col]:last-child {
            border-right: 0
        }

        .f-grid.sp-top-inner>.f-grid.sp-top-inner,
        .f-grid.sp-top-inner>.f-row.f-grid,
        .f-row.f-grid>.f-grid.sp-top-inner,
        .f-row.f-grid>.f-row.f-grid {
            border-bottom: none
        }

        .f-striped>.f-row:nth-of-type(odd),
        .f-striped>.sp-top-inner:nth-of-type(odd) {
            background: #f5f5f5
        }

        .f-col,
        .f-col-1,
        .f-col-10,
        .f-col-11,
        .f-col-12,
        .f-col-2,
        .f-col-2-9,
        .f-col-3,
        .f-col-4,
        .f-col-5,
        .f-col-6,
        .f-col-7,
        .f-col-8,
        .f-col-9,
        .sp-hue {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex: 1
        }

        [class*=f-col].focus {
            box-shadow: inset 0 -2px 0 #09f;
            transition: box-shadow .1s ease-in-out
        }

        .f-col-2 {
            width: 16.6%
        }

        .f-col-2-9 {
            width: 29%
        }

        [class*=f-col] .content {
            width: -webkit-calc(100% - 30px);
            width: -moz-calc(100% - 30px);
            width: calc(100% - 30px)
        }

        [class*=f-col].dropdown .content {
            width: -webkit-calc(100% - 10px);
            width: -moz-calc(100% - 10px);
            width: calc(100% - 10px)
        }

        [class*=f-col] .content label {
            display: block;
            font-weight: 700;
            margin-bottom: 3px
        }

        [class*=f-col] .content .value,
        [class*=f-col] .content.input input {
            font-size: 12px;
            font-weight: 300
        }

        [class*=f-col] .content.input {
            width: 100%
        }

        [class*=f-col].has-error .form-control {
            border: none;
            box-shadow: none
        }

        [class*=f-col] .content.input input {
            border: 0;
            color: #333;
            padding: 0;
            width: 100%
        }

        [class*=f-col] .content input:focus {
            outline: 0
        }

        [class*=f-col] .action {
            text-align: right;
            width: 30px
        }

        [class*=f-col].dropdown .action {
            width: 10px
        }

        .f-col-1,
        .f-col-10,
        .f-col-11,
        .f-col-12,
        .f-col-2,
        .f-col-2-9,
        .f-col-3,
        .f-col-4,
        .f-col-5,
        .f-col-6,
        .f-col-7,
        .f-col-8,
        .f-col-9,
        .f-none,
        .sp-hue {
            flex: none
        }

        .f-justify-center {
            justify-content: center
        }

        .f-justify-end {
            justify-content: flex-end
        }

        .f-wrap-no {
            flex-wrap: nowrap
        }

        .f-direction-column {
            flex-direction: column
        }

        .f-direction-row {
            flex-direction: row
        }

        .f-align-end {
            align-self: flex-end
        }

        .f-align-start {
            align-self: flex-start
        }

        .f-align-items-center {
            align-items: center
        }

        .f-align-items-baseline {
            align-items: baseline
        }

        .border-top {
            border-top: 1px solid #d9d9d9
        }

        .bg-active {
            background-color: #efefef
        }

        .p-right {
            padding-right: 12px
        }

        .p-0 {
            padding: 0 !important
        }

        .p-l-0 {
            padding-left: 0 !important
        }

        .p-r-0 {
            padding-right: 0 !important
        }

        .p-t-0 {
            padding-top: 0 !important
        }

        .p-b-0 {
            padding-bottom: 0 !important
        }

        .d-block {
            display: block
        }

        .container.content-wrapper {
            width: 100%
        }

        .container-header {
            padding: 20px;
            position: relative
        }

        .spaced-container {
            padding-left: 0;
            padding-right: 0
        }

        .spaced-container.full-width-container .container-header {
            margin: 0 auto;
            max-width: 1170px;
            padding-left: 7px;
            padding-right: 7px
        }

        .inner-page {
            background: #fff;
            margin: 10px auto;
            padding: 20px
        }

        @media (min-width:480px) {

            .f-row-as-li,
            .f-row:not(.f-row-as-li):not(.f-row-compact)>[class*=f-col],
            .sp-top-inner:not(.f-row-as-li):not(.f-row-compact)>[class*=f-col] {
                padding: 15px
            }

            .p-right {
                padding-right: 15px
            }

            [class*=f-col] .content .value,
            [class*=f-col] .content.input input {
                font-size: 14px
            }
        }

        @media (min-width:320px) {
            .header-wrapper h1 {
                font-size: 22px
            }

            .spaced-container {
                padding-bottom: 40px;
                padding-top: 20px
            }
        }

        @media (max-width:991px) {
            .hero-btn-group .btn-xl {
                font-size: 12px;
                padding: 10px 15px 9px
            }
        }

        @media (min-width:768px) {
            .f-col-sm-4 {
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                flex: none;
                width: 33.33%
            }

            .header-wrapper h1 {
                font-size: 24px
            }

            .container-header {
                padding: 7px
            }

            .inner-page {
                padding: 40px
            }
        }

        @media (min-width:1200px) {
            .inner-page {
                padding: 60px
            }

            .spaced-container {
                padding-bottom: 70px;
                padding-top: 40px
            }
        }

        @font-face {
            font-family: WW Digital;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/digital.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/digital.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/digital.svg) format("svg")
        }

        @font-face {
            font-family: Blazed;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/blazed.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/blazed.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/blazed.svg) format("svg")
        }

        @font-face {
            font-family: FV Almelo;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/fv_almelo.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fv_almelo.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/fv_almelo.svg) format("svg")
        }

        @font-face {
            font-family: CAC Champagne;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/cac_champagne-webfont.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/cac_champagne-webfont.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/cac_champagne-webfont.svg) format("svg")
        }

        @font-face {
            font-family: Little days;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/little_days-webfont.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/little_days-webfont.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/little_days-webfont.svg) format("svg")
        }

        @font-face {
            font-family: Quicksand Bold;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/quicksand_bold-webfont.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/quicksand_bold-webfont.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/quicksand_bold-webfont.svg) format("svg")
        }

        @font-face {
            font-family: Special elite;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/specialelite-webfont.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/specialelite-webfont.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/specialelite-webfont.svg) format("svg")
        }

        @font-face {
            font-family: Mossy;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/mossy-webfont.ttf) format("truetype"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/mossy-webfont.woff) format("woff"), url(https://d6ce0no7ktiq.cloudfront.net/fonts/mossy-webfont.svg) format("svg")
        }

        @font-face {
            font-family: Abel;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Abel-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Atomic Age;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/AtomicAge-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Black Ops One;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/BlackOpsOne-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: "Bree Serif";
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/BreeSerif-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Clear Sans;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/ClearSans-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Comic Neue;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/ComicNeue-Bold.ttf) format("truetype")
        }

        @font-face {
            font-family: Homemade Apple;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/HomemadeApple-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Italiana;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Italiana-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Libre Baskerville;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/LibreBaskerville-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Lobster Two;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/LobsterTwo-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Nixie One;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/NixieOne-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Ostrich Sans Inline;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/ostrich-sans-inline-regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Palitoon;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Palitoon-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Permanent Marker;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/PermanentMarker-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Selima;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Selima-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: UnifrakturMaguntia;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/UnifrakturMaguntia-Book.ttf) format("truetype")
        }

        @font-face {
            font-family: Vibur;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Vibur-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Zilla Slab;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/ZillaSlab-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Rochester;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Rochester-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Oleo Script;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/OleoScript-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Pacifico;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Pacifico-Regular.ttf) format("truetype")
        }

        @font-face {
            font-family: Monofett;
            src: url(https://d6ce0no7ktiq.cloudfront.net/fonts/Monofett-Regular.ttf) format("truetype")
        }

        body.editor-modal-open {
            overflow: hidden;
            position: fixed;
            width: 100%
        }

        #editor-modal {
            background: rgba(0, 0, 0, .8);
            display: none;
            height: 100%;
            left: 0;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050
        }

        #editor-modal .editor-modal-inner {
            height: 100%;
            left: 50%;
            padding: 0;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%
        }

        #editor-modal .editor-modal-content {
            height: 100% !important;
            overflow: hidden;
            position: relative;
            width: 100%
        }

        #editor-modal button.close,
        button.btn-editor-modal-close {
            background: #fff;
            border: 1px solid #d9d9d9;
            border-radius: 100%;
            -webkit-box-shadow: 0 0 10px -2px rgba(0, 0, 0, .8);
            -moz-box-shadow: 0 0 10px -2px rgba(0, 0, 0, .8);
            box-shadow: 0 0 10px -2px rgba(0, 0, 0, .8);
            margin: 0;
            position: fixed;
            right: 3px;
            top: 3px;
            z-index: 3
        }

        #editor-modal button.close>span,
        button.btn-editor-modal-close>span {
            display: block;
            font-size: 10px;
            text-transform: uppercase
        }

        #editor-modal button.close:hover,
        button.btn-editor-modal-close:hover {
            -webkit-box-shadow: 0 0 35px -3px rgba(0, 0, 0, .9);
            -moz-box-shadow: 0 0 35px -3px rgba(0, 0, 0, .9);
            box-shadow: 0 0 35px -3px rgba(0, 0, 0, .9);
            color: red;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease
        }

        #editor-modal.in {
            display: block;
            opacity: 1
        }

        body.instagram-in-app #editor-modal .editor-modal-content {
            height: calc(100% - 108px);
            padding-bottom: 60px
        }

        body.instagram-in-app #editor-modal .editor-modal-content>.editor {
            position: relative
        }

        #editor-modal[data-is-orientation-landscape=false] .editor-modal-content>button.close {
            display: none
        }

        #editor-modal[data-is-orientation-landscape=false][data-is-large-mode=false] h1.modal-title {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/stickerapp.png);
            background-position: 0 0;
            background-size: 90px;
            height: 28px;
            overflow: hidden;
            text-indent: -999em;
            width: 49px
        }

        .editor-modal-orientation-landscape .editor-modal-content>button.close {
            background: #fff;
            border-bottom: 1px solid #d9d9d9;
            border-left: 1px solid #d9d9d9
        }

        .editor-modal-size-lg .editor-modal-inner {
            padding: 15px
        }

        .editor .popover {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            color: #444;
            font-weight: lighter
        }

        .editor-popover {
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            border: none;
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, .12);
            font-family: Helvetica, Arial, sans-serif;
            margin: 0;
            max-width: none;
            padding: 0;
            width: 400px
        }

        .editor-popover.editor-popover-sm {
            width: 210px
        }

        .editor-popover.editor-popover-md {
            width: 310px
        }

        .editor-popover.editor-popover-lg {
            width: 50%
        }

        .editor-popover .popover-header {
            background: none;
            border-bottom: 1px solid #e5e5e5;
            display: block !important;
            height: 55px
        }

        .editor-popover .popover-title {
            background: none;
            border: none;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            height: 55px;
            line-height: 35px
        }

        .editor-popover.left .arrow,
        .editor-popover.right .arrow {
            border-left-color: #e5e5e5 !important
        }

        .editor-popover.right .arrow {
            left: -10px
        }

        .editor-popover button.close {
            border-left: 1px solid #e5e5e5;
            color: #333;
            height: 55px;
            opacity: 1;
            position: absolute;
            right: 0;
            text-shadow: none;
            top: 0;
            width: 55px
        }

        .editor-popover button.close:hover {
            background: #ebebeb
        }

        .editor-popover .popover-content {
            width: 100%
        }

        .editor-popover .popover-content .note-wrapper {
            font-weight: 400
        }

        .editor-popover .popover-content.stretch {
            padding: 0
        }

        .editor-popover .popover-content a:focus,
        .editor-popover .popover-content a:hover {
            text-decoration: none
        }

        .editor-popover .popover-content .dropdown-menu {
            max-height: 150px;
            overflow: scroll;
            width: 100%
        }

        .editor-popover .popover-content .dropdown-menu.dropdown-menu-inline {
            max-height: none
        }

        .editor-popover.editor-popover-quantity-selector {
            max-width: 250px !important
        }

        .editor-popover-quantity-selector .f-row-as-li {
            padding: 5px 12px
        }

        .drop-zone {
            align-items: center;
            background-color: #fcfcfc;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 20px;
            padding-top: 15px;
            -webkit-transition: all .1s linear;
            -o-transition: all .1s linear;
            transition: all .1s linear
        }

        .drop-zone i.svg-upload-cloud {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/upload-cloud.svg) no-repeat;
            height: 0;
            padding-bottom: 100%;
            width: 100%
        }

        .drop-zone:hover {
            border-color: #4990e2;
            -webkit-transition: all .1s linear;
            -o-transition: all .1s linear;
            transition: all .1s linear
        }

        .drop-zone:hover .browse-link {
            color: #1f69c0
        }

        .drop-zone .browse-link {
            font-size: 14px
        }

        .drop-zone .browse-link .description {
            color: #555;
            font-family: FuturaPT, serif
        }

        .drop-zone .file-type {
            font-size: 10px
        }

        .editor .tool-pane {
            background-color: #f7f7f7;
            overflow: hidden;
            position: absolute;
            z-index: 2
        }

        .editor .tool-pane[data-swiping=false] {
            margin-bottom: 0 !important;
            transition: margin-bottom .2s ease
        }

        .editor .tool-pane .panel {
            margin-bottom: 0;
            position: absolute;
            width: 100%
        }

        .editor .tool-pane .panel.panel-tools-overview {
            background-color: #fff;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .editor .tool-pane .tool-content {
            background-color: #fff
        }

        .editor .tool-pane .panel.panel-sticky-tools {
            bottom: 49px
        }

        .editor .tool-pane .tool-bar {
            border-bottom: 1px solid #d9d9d9;
            border-top: 1px solid #d9d9d9;
            order: 0
        }

        .editor .tool-pane .tool-content .tool-content-body {
            border-radius: 4px;
            width: 100%
        }

        .editor .tool-pane .tool-size .f-col,
        .editor .tool-pane .tool-size .f-col-1,
        .editor .tool-pane .tool-size .f-col-10,
        .editor .tool-pane .tool-size .f-col-11,
        .editor .tool-pane .tool-size .f-col-12,
        .editor .tool-pane .tool-size .f-col-2,
        .editor .tool-pane .tool-size .f-col-2-9,
        .editor .tool-pane .tool-size .f-col-3,
        .editor .tool-pane .tool-size .f-col-4,
        .editor .tool-pane .tool-size .f-col-5,
        .editor .tool-pane .tool-size .f-col-6,
        .editor .tool-pane .tool-size .f-col-7,
        .editor .tool-pane .tool-size .f-col-8,
        .editor .tool-pane .tool-size .f-col-9,
        .editor .tool-pane .tool-size .sp-hue {
            padding: 6px 12px
        }

        .editor .tool-pane .tool-note {
            padding: 6px 12px !important
        }

        .editor .tool-pane .tool-note .content {
            flex: none;
            font-size: 10px
        }

        .editor .tool-pane .tool-note .action {
            position: relative
        }

        .editor .tool-pane .tool-note .preview,
        .editor .tool-pane .tool-note.has-note .no-preview {
            display: none
        }

        .editor .tool-pane .tool-note.has-note .preview {
            display: inline-block
        }

        .editor .tool-pane .tool-note .no-preview,
        .editor .tool-pane .tool-note .preview {
            font-weight: 300
        }

        .editor .tool-pane h6.tool-content-title {
            margin: 0
        }

        .editor .tool-pane .tool-content-quantity .tool-content-body .section.active,
        .editor .tool-pane .tool-content-quantity .tool-content-body .section:hover {
            background: #efefef;
            color: #000;
            cursor: pointer
        }

        .editor .tool-pane .tool-content-upload .tool-content-body {
            display: flex;
            flex-direction: column;
            padding: 15px
        }

        .editor .tool-pane .tool-content-upload .progress {
            margin: 15px 0 0
        }

        .editor .tool-pane .tool-content-quantity .tool-content-body .tile {
            border-right: none
        }

        .editor .tool-pane .tool-content-quantity .tool-content-body .tile:hover {
            color: #000
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image {
            background-size: 1800%;
            border-radius: 50%;
            display: block;
            height: 70px;
            margin: 0 auto;
            max-width: 70px;
            width: 70px
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.glossy_coated {
            background-position: 0 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.transparent {
            background-position: -70px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.borstad_alu {
            background-position: -140px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.mirror {
            background-position: -210px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.wall_sticker {
            background-position: -280px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.kraft_paper {
            background-position: -350px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.holographic {
            background-position: -420px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.prismatic {
            background-position: -490px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.heavy_duty {
            background-position: -560px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.satin_matte_laser {
            background-position: -630px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.epoxy_hi_tack {
            background-position: -700px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.removable_laser {
            background-position: -770px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.glitter {
            background-position: -840px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.white_custom_labels {
            background-position: -910px 0;
            border-radius: 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.clear_custom_labels {
            background-position: -980px 0;
            border-radius: 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.floor_sticker {
            background-position: -1050px 0
        }

        .editor .tool-pane .tool-content-material-preset .tool-content-body .list-item .material-image.glow_in_the_dark {
            background-position: -1120px 0
        }

        .editor .tool-pane .tool-content-cliparts .tool-content-body .products {
            padding: 5px
        }

        .editor .tool-pane .tool-content-cliparts .tool-content-body .products img {
            max-height: 70px;
            object-fit: contain
        }

        .editor .tool-pane .tool-content-cliparts .tool-content-body .f-col-4 {
            padding: 5px
        }

        .editor .tool-pane .tool-content-cliparts .tool-content-body .product-card {
            background: #d5d5d5;
            border-radius: 4px;
            display: flex;
            height: 100%;
            justify-content: center;
            min-height: 73px;
            padding: 10px;
            position: relative;
            width: 100%
        }

        .editor .tool-pane .tool-content .dropdown-menu li .btn {
            border: none !important;
            border-radius: 0 !important
        }

        .editor .tool-pane .tool-content .dropdown-menu li .btn.active {
            box-shadow: none
        }

        .editor .tool-pane .tool-content .dropdown-menu.f-col-12,
        .editor .tool-pane .tool-content .dropdown-menu.w-12,
        .editor div.editor-orientation-landscape.sheet .tool-pane .tool-content section.dropdown-menu.tool-pane-confirm,
        .editor div.editor-orientation-landscape.sheet .tool-pane .tool-content section.dropdown-menu.tool-pane-price,
        .editor div.editor-orientation-portrait.has-no-material-selector.has-note-enabled .tool-pane .tool-content .dropdown-menu.tool-note,
        .editor div.editor-orientation-portrait.single.has-material-selector.has-note-disabled .tool-pane .tool-content .dropdown-menu.tool-material-preset,
        div.editor-orientation-landscape.sheet .editor .tool-pane .tool-content section.dropdown-menu.tool-pane-confirm,
        div.editor-orientation-landscape.sheet .editor .tool-pane .tool-content section.dropdown-menu.tool-pane-price,
        div.editor-orientation-portrait.has-no-material-selector.has-note-enabled .editor .tool-pane .tool-content .dropdown-menu.tool-note,
        div.editor-orientation-portrait.single.has-material-selector.has-note-disabled .editor .tool-pane .tool-content .dropdown-menu.tool-material-preset {
            width: -webkit-calc(100% + 2px);
            width: -moz-calc(100% + 2px);
            width: calc(100% + 2px)
        }

        .editor .tool-pane .tool-content-background .tool-content-body,
        .editor .tool-pane .tool-content-cutline .tool-content-body,
        .editor .tool-pane .tool-content-text .tool-content-body {
            padding: 10px
        }

        .editor .tool-pane .tool-content-upload .tool-content-body {
            padding: 0
        }

        .editor .tool-pane .total .amount {
            font-size: 18px;
            font-weight: 300;
            line-height: 1em
        }

        .editor .tool-pane .footer {
            background: #fff;
            bottom: 0;
            display: flex;
            height: 46px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .editor .tool-pane .total {
            align-self: center;
            flex: 1;
            font-family: FuturaPT, serif;
            text-align: center
        }

        .editor .tool-pane .total.total-incl-vat {
            display: flex;
            flex-direction: column
        }

        .editor .tool-pane .total.total-incl-vat .amount {
            align-items: flex-end;
            align-self: center;
            display: flex;
            min-height: 41px
        }

        .editor .tool-pane .footer .action {
            align-self: center;
            display: flex;
            flex: 1;
            justify-content: center
        }

        .editor .tool-pane .footer .panel {
            background: #fff;
            height: 100%;
            left: 0;
            top: 100%
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-pane .tool-content-background .tool-content-body,
        .editor.editor-orientation-landscape.editor-size-lg .tool-pane .tool-content-text .tool-content-body {
            padding: 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image {
            background-size: 1800%;
            border-radius: 50%;
            display: block;
            height: 45px;
            margin: 0 auto;
            max-width: 45px;
            width: 45px
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.glossy_coated {
            background-position: 0 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.transparent {
            background-position: -45px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.borstad_alu {
            background-position: -90px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.mirror {
            background-position: -135px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.wall_sticker {
            background-position: -180px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.kraft_paper {
            background-position: -225px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.holographic {
            background-position: -270px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.prismatic {
            background-position: -315px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.heavy_duty {
            background-position: -360px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.satin_matte_laser {
            background-position: -405px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.epoxy_hi_tack {
            background-position: -450px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.removable_laser {
            background-position: -495px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.glitter {
            background-position: -540px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.white_custom_labels {
            background-position: -585px 0;
            border-radius: 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.clear_custom_labels {
            background-position: -630px 0;
            border-radius: 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.floor_sticker {
            background-position: -675px 0
        }

        .editor.editor-orientation-landscape.editor-size-lg .tool-content-material-preset .tool-content-body .list-item .material-image.glow_in_the_dark {
            background-position: -720px 0
        }

        .editor.editor-orientation-landscape .tool-backside-print-deal {
            padding-bottom: 10px
        }

        .editor.editor-orientation-landscape .action {
            bottom: 25px;
            display: flex;
            justify-content: center;
            width: 100%
        }

        .editor.editor-orientation-landscape .action.btn-container {
            position: absolute
        }

        .editor-size-lg .tool-content-background .tool-content-body,
        .editor-size-lg .tool-content-cutline .tool-content-body,
        .editor-size-lg .tool-content-text .tool-content-body,
        .editor-size-lg .tool-content-upload .tool-content-body {
            padding: 30px
        }

        .tool-content-cutline i.svg-cutline {
            background-size: 90%;
            display: flex;
            height: 30px;
            width: 100%
        }

        .tool-content-cutline i.svg-cutline.icon-small {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/small_outline_icon.svg) no-repeat
        }

        .tool-content-cutline i.svg-cutline.icon-medium {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/medium_outline_icon.svg) no-repeat
        }

        .tool-content-cutline i.svg-cutline.icon-large {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/large_outline_icon.svg) no-repeat
        }

        .tool-content-cutline i.svg-cutline.icon-square {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/square_icon.svg) no-repeat
        }

        .tool-content-cutline i.svg-cutline.icon-circle {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/circle_icon.svg) no-repeat
        }

        .tool-content-cutline i.svg-cutline.icon-rect-round {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/rounded_icon.svg) no-repeat
        }

        .tool-content-cutline .cutline .f-col-2 {
            flex-direction: column
        }

        .tool-content-cutline .cta:hover small {
            text-decoration: underline
        }

        .tool-content-cutline .preset-item {
            display: flex;
            width: 100%
        }

        .tool-content-cutline .preset-item label {
            padding: 5px 0
        }

        .tool-content-cutline .preset-item input {
            border: 1px solid #ccc;
            border-radius: 2px;
            text-align: center;
            width: 40px
        }

        .tool-content-cutline .preset-item input:active,
        .tool-content-cutline .preset-item input:focus {
            border-color: #4990e2;
            outline: none
        }

        .tool-content-cutline .preset-item input[type=checkbox] {
            margin-left: 25px;
            width: 20px
        }

        .tool-content-cutline .preset-item .content {
            width: 75%
        }

        .tool-content-cutline .preset-item .action {
            width: 40px
        }

        .tool-content-cutline .preset-item hr {
            border-color: #d9d9d9;
            margin: .5em 0;
            width: 100%
        }

        .tool-content-cutline .btn-extra-new-outline {
            background-color: #87878c;
            border: 0;
            color: #fff;
            padding: 6px 12px
        }

        @media screen and (min-width:690px) {

            .editor-orientation-landscape .tool-template,
            .editor-orientation-landscape .tool-template-type {
                width: 50%
            }

            .editor-orientation-landscape .tool-template-type {
                border-left: 1px solid #d9d9d9
            }
        }

        .tool-backside-print-deal .tool-content-body {
            align-items: center;
            background-color: #fff;
            display: flex;
            padding: 8px 16px
        }

        .tool-backside-print-deal .tool-content-body .h6 {
            margin: 9px 0
        }

        .tool-backside-print-deal .tool-content-body input[type=checkbox] {
            margin-right: 7px;
            margin-top: 0;
            transform: scale(1.4)
        }

        .editor-orientation-landscape .tool-backside-print-deal .tool-content-body {
            border: 2px solid #e8e8e8;
            border-radius: 5px;
            margin: 0 20px;
            padding: 0 10px
        }

        .tool-backside-print-deal.checked {
            padding-bottom: 0
        }

        .tool-backside-print-deal.checked .tool-content-body {
            border-bottom: 0;
            border-radius: 5px 5px 0 0
        }

        .tool-pane .panel.panel-tool-content .tool-content.tool-content-backside-print-deal-text .deal-pattern-example {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/editor/stickerapp_pattern.png);
            background-size: cover;
            height: 100px;
            width: 100%
        }

        .editor-orientation-landscape .tool-pane .panel.panel-tool-content .tool-content.tool-content-backside-print-deal-text {
            border: 2px solid #e8e8e8;
            border-radius: 0 0 5px 5px;
            border-top: none
        }

        .tool-pane .panel.panel-tool-content .tool-content.tool-content-backside-print-deal-text .tool-content-body {
            border-radius: 0
        }

        .tool-pane .panel.panel-tool-content .tool-content.tool-content-backside-print-deal-text label[for=deal-input] {
            font-family: FuturaPT, serif;
            font-size: 12px
        }

        .footer-landscape .total {
            align-items: center;
            padding: 7px 16px
        }

        .price_details.back_print {
            align-items: center;
            box-shadow: 0 17px 0 -16px rgba(0, 0, 0, .2);
            padding: 0 16px
        }

        .price_details.back_print .f-row span,
        .price_details.back_print .sp-top-inner span {
            color: #2d2d2d;
            letter-spacing: .54px;
            line-height: 1.85
        }

        .editor .tool-bar {
            background: #fff;
            justify-content: space-around
        }

        .editor .tool-bar[data-swiping=false] {
            margin-bottom: 0 !important;
            transition: margin-bottom .2s ease
        }

        .editor .tool-bar .tool {
            padding: 5px;
            text-align: center
        }

        .editor .tool-bar .tool.disabled {
            opacity: .5
        }

        .editor .tool-bar .tool>i {
            color: #fff;
            display: block;
            height: 24px;
            margin: 0 auto;
            width: 24px
        }

        .editor .tool-bar .tool>label {
            display: block;
            font-size: 7px;
            margin-bottom: 3px;
            text-transform: uppercase
        }

        .editor .tool-bar .tool-upload>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-upload-cloud.svg) no-repeat
        }

        .editor .tool-bar .tool-upload.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-upload.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/upload-cloud.svg) no-repeat
        }

        .editor .tool-bar .tool-cutline>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-scalpel.svg) no-repeat
        }

        .editor .tool-bar .tool-cutline.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-cutline.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/scalpel.svg) no-repeat
        }

        .editor .tool-bar .tool-backside-print-deal-text>i,
        .editor .tool-bar .tool-text>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-text.svg) no-repeat
        }

        .editor .tool-bar .tool-backside-print-deal-text.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-backside-print-deal-text.active>i,
        .editor .tool-bar .tool-text.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-text.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/text.svg) no-repeat
        }

        .editor .tool-bar .tool-cliparts>i,
        .editor .tool-bar .tool-stickers>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-heart.svg) no-repeat
        }

        .editor .tool-bar .tool-cliparts.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-cliparts.active>i,
        .editor .tool-bar .tool-stickers.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-stickers.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/heart.svg) no-repeat
        }

        .editor .tool-bar .tool-stickers>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-star.svg) no-repeat
        }

        .editor .tool-bar .tool-stickers.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-stickers.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/star.svg) no-repeat
        }

        .editor .tool-bar .tool-collage>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-collage.svg) no-repeat
        }

        .editor .tool-bar .tool-collage.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-collage.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/collage.svg) no-repeat
        }

        .editor .tool-bar .tool-fill-sheet>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-fill-sheet.svg) no-repeat
        }

        .editor .tool-bar .tool-fill-sheet.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-fill-sheet.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/fill-sheet.svg) no-repeat
        }

        .editor .tool-bar .tool-empty-sheet>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-trash-bin.svg) no-repeat
        }

        .editor .tool-bar .tool-empty-sheet.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-empty-sheet.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/trash-bin.svg) no-repeat
        }

        .editor .tool-bar .tool-material-preset>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/inverted-material.svg) no-repeat
        }

        .editor .tool-bar .tool-material-preset.active:hover:not(.disabled)>i,
        .editor .tool-bar .tool-material-preset.active>i {
            background: 50% url(https://d6ce0no7ktiq.cloudfront.net/images/svg/material.svg) no-repeat
        }

        .editor .tool-bar .tool-background>i svg .st0,
        .editor .tool-bar .tool-background>i svg .st1,
        .editor .tool-bar .tool-background>i svg .st2 {
            fill: transparent
        }

        .editor .tool-bar .tool-background>i svg .st3 {
            fill: #fff
        }

        .editor .tool-bar .tool-background>i svg .st4 {
            fill: #5d5f62
        }

        .editor .tool-bar .tool-background>i svg .st5 {
            fill: transparent
        }

        .editor .tool-bar .tool-background.active>i svg .st1 {
            fill: #c9c9c9
        }

        .editor .tool-bar .tool-background.active>i svg .st2 {
            fill: #cca65c
        }

        .editor .tool-bar .tool-background.active>i svg .st3 {
            fill: #4a4a4a
        }

        .editor .tool-bar .tool-background.active>i svg .st5 {
            fill: #c99035
        }

        .editor.editor-orientation-landscape .tool-bar .tool:hover,
        .editor.editor-orientation-portrait .tool-bar .tool:hover {
            box-shadow: inset 0 0 40px -8px rgba(0, 0, 0, .41)
        }

        .editor.editor-orientation-landscape .tool-bar .tool:hover.active,
        .editor.editor-orientation-portrait .tool-bar .tool:hover.active {
            box-shadow: none
        }

        .tool-bar-orientation-tall,
        div.editor>.tool-bar {
            border-left: 1px solid #d9d9d9;
            flex-direction: column;
            flex-wrap: nowrap
        }

        .editor .tool-pane .tool-bar,
        .tool-bar-orientation-wide {
            flex-wrap: nowrap;
            width: 100%
        }

        .confirm-modal {
            background: rgba(0, 0, 0, .8);
            display: none;
            height: 100%;
            left: 0;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050
        }

        .confirm-modal.in {
            display: block;
            opacity: 1;
            transform: translateZ(0)
        }

        .confirm-modal .confirm-modal-inner {
            height: auto;
            left: 50%;
            max-width: 500px;
            padding: 10px;
            position: absolute;
            top: 40%;
            transform: translate(-50%, -50%);
            width: 100%
        }

        .confirm-modal .confirm-modal-inner .confirm-modal-content {
            background: #fff;
            height: 100%;
            overflow: hidden;
            padding: 10px;
            position: relative;
            transform: translateZ(0);
            width: 100%
        }

        .confirm-modal .confirm-modal-inner .confirm-modal-content .content {
            font-weight: 700
        }

        .confirm-modal.title-design .confirm-modal-inner {
            max-width: 600px
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content {
            padding-bottom: 25px
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .content {
            font-weight: 400
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .title {
            padding-bottom: 0
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .actions {
            flex-direction: column
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .actions .p-l-0 {
            justify-content: center;
            padding-bottom: 0
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .actions .p-l-0:first-child .btn-confirm {
            width: 150px
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .actions .p-l-0 .btn-warning {
            background: none;
            border: none;
            color: red
        }

        .confirm-modal.title-design .confirm-modal-inner .confirm-modal-content .actions .p-l-0 .btn-warning:hover {
            background: none;
            color: #000
        }

        .sp-container {
            display: block
        }

        .sp-container.sp-flat {
            position: relative;
            width: 100%
        }

        .sp-container,
        .sp-container * {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        .sp-top {
            display: inline-block;
            position: relative;
            width: 100%
        }

        .sp-top-inner {
            height: 200px
        }

        .sp-color {
            flex: 1
        }

        .sp-color,
        .sp-hue {
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            position: relative
        }

        .sp-hue {
            margin-left: 10px;
            width: 30px
        }

        .sp-hue .sp-slider {
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            left: -2px;
            width: 30px
        }

        .sp-dragger,
        .sp-slider {
            border: 2px solid #fff;
            -moz-border-radius: 8px;
            -o-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: 0 0 5px -1px #000;
            -moz-box-shadow: 0 0 5px -1px #000;
            box-shadow: 0 0 5px -1px #000;
            -moz-box-sizing: content-box;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            cursor: pointer;
            height: 8px;
            left: 0;
            position: absolute;
            top: 0;
            width: 8px
        }

        .sp-dragger {
            border-radius: 10px;
            height: 16px;
            margin-left: 6px;
            margin-top: 8px;
            width: 16px
        }

        .sp-sat,
        .sp-val {
            -moz-border-radius: 4px;
            -o-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            bottom: -1px;
            left: -1px;
            position: absolute;
            right: -1px;
            top: -1px
        }

        .sp-container.sp-buttons-disabled .sp-button-container,
        .sp-container.sp-input-disabled .sp-input-container,
        .sp-container.sp-palette-buttons-disabled .sp-palette-button-container,
        .sp-initial-disabled .sp-initial,
        .sp-palette-disabled .sp-palette-container,
        .sp-palette-only .sp-picker-container {
            display: none
        }

        .sp-sat {
            background-image: -webkit-gradient(linear, 0 0, 100% 0, from(#fff), to(hsla(20, 42%, 65%, 0)));
            background-image: -webkit-linear-gradient(left, #fff, hsla(20, 42%, 65%, 0));
            background-image: -moz-linear-gradient(left, #fff, hsla(20, 42%, 65%, 0));
            background-image: -o-linear-gradient(left, #fff, hsla(20, 42%, 65%, 0));
            background-image: -ms-linear-gradient(left, #fff, hsla(20, 42%, 65%, 0));
            background-image: linear-gradient(90deg, #fff, hsla(20, 42%, 65%, 0));
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(GradientType = 1, startColorstr=#FFFFFFFF, endColorstr=#00CC9A81)";
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=1, startColorstr="#FFFFFFFF", endColorstr="#00CC9A81")
        }

        .sp-val {
            background-image: -webkit-gradient(linear, 0 100%, 0 0, from(#000), to(hsla(20, 42%, 65%, 0)));
            background-image: -webkit-linear-gradient(bottom, #000, hsla(20, 42%, 65%, 0));
            background-image: -moz-linear-gradient(bottom, #000, hsla(20, 42%, 65%, 0));
            background-image: -o-linear-gradient(bottom, #000, hsla(20, 42%, 65%, 0));
            background-image: -ms-linear-gradient(bottom, #000, hsla(20, 42%, 65%, 0));
            background-image: linear-gradient(0deg, #000, hsla(20, 42%, 65%, 0));
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00CC9A81, endColorstr=#FF000000)";
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00CC9A81", endColorstr="#FF000000")
        }

        .sp-hue {
            background: -moz-linear-gradient(top, red 0, #ff0 17%, lime 33%, cyan 50%, blue 67%, #f0f 83%, red 100%);
            background: -ms-linear-gradient(top, red 0, #ff0 17%, lime 33%, cyan 50%, blue 67%, #f0f 83%, red 100%);
            background: -o-linear-gradient(top, red 0, #ff0 17%, lime 33%, cyan 50%, blue 67%, #f0f 83%, red 100%);
            background: -webkit-gradient(linear, left top, left bottom, from(red), color-stop(.17, #ff0), color-stop(.33, lime), color-stop(.5, cyan), color-stop(.67, blue), color-stop(.83, #f0f), to(red));
            background: -webkit-linear-gradient(top, red, #ff0 17%, lime 33%, cyan 50%, blue 67%, #f0f 83%, red);
            background: linear-gradient(180deg, red 0, #ff0 17%, lime 33%, cyan 50%, blue 67%, #f0f 83%, red)
        }

        .sp-1 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff0000", endColorstr="#ffff00");
            height: 17%
        }

        .sp-2 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffff00", endColorstr="#00ff00");
            height: 16%
        }

        .sp-3 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00ff00", endColorstr="#00ffff");
            height: 17%
        }

        .sp-4 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00ffff", endColorstr="#0000ff");
            height: 17%
        }

        .sp-5 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0000ff", endColorstr="#ff00ff");
            height: 16%
        }

        .sp-6 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff00ff", endColorstr="#ff0000");
            height: 17%
        }

        .sp-hidden {
            display: none !important
        }

        .sp-cf:after,
        .sp-cf:before {
            content: "";
            display: table
        }

        .sp-cf:after {
            clear: both
        }

        .sp-cf {
            *zoom: 1
        }

        .tool-effect-layer {
            overflow-x: hidden;
            text-align: center
        }

        .tool-effect-layer .effect-layer-wrapper {
            margin-top: 10px
        }

        .tool-effect-layer .effect-layer-wrapper .f-col-12,
        .tool-effect-layer .effect-layer-wrapper .f-justify-center {
            padding: 0 !important
        }

        .tool-effect-layer .effect-layer-wrapper .effect-layer-popover {
            color: #1d1d1d;
            font-size: 16px !important;
            position: absolute;
            right: 15px;
            top: 15px
        }

        .tool-effect-layer .effect-layer-wrapper .effect-layer-box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px 15px;
            position: relative;
            width: 100%;
            z-index: 1
        }

        .tool-effect-layer .effect-layer-wrapper .effect-layer-box span {
            font-size: 12px
        }

        .tool-effect-layer .show-modal-btn {
            background-color: #1d1d1d;
            color: #fff
        }

        #effect-layer-modal .modal-body h4 {
            margin: 0 0 15px
        }

        #effect-layer-modal .modal-body textarea {
            min-height: 200px;
            resize: none
        }

        #effect-layer-modal .modal-footer {
            border: none;
            padding-top: 0
        }

        #effect-layer-modal .modal-footer .cancel-btn {
            background-color: #fff;
            color: #000
        }

        #effect-layer-modal .modal-footer .cancel-btn:hover {
            color: #000
        }

        #effect-layer-modal .modal-footer .cancel-btn:focus {
            box-shadow: none;
            outline: none
        }

        .file,
        .file-error {
            border-radius: 5px;
            padding: 4px 8px !important;
            width: 100%
        }

        .file .file-title,
        .file-error .file-title {
            word-wrap: break-word;
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            max-width: 210px
        }

        .file span,
        .file-error span {
            border-radius: 4px
        }

        .file span:not(.file-title):not(.effect-layer-popover),
        .file-error span:not(.file-title):not(.effect-layer-popover) {
            max-width: 100%;
            padding: 8px 10px;
            text-align: left
        }

        .file .remove-btn,
        .file-error .remove-btn {
            background-color: transparent;
            border: none;
            font-size: 25px;
            font-weight: 700
        }

        .effect-layer-wrapper .file,
        .effect-layer-wrapper .file-error {
            margin-bottom: 8px
        }

        .upload .file,
        .upload .file-error {
            margin: -7px 0 15px
        }

        .file {
            background-color: #fff;
            border: 1px solid #ccc;
            justify-content: space-between
        }

        .file:not(.editor-file) span {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .file .remove-file-btn {
            color: #da5246
        }

        .file-error {
            background-color: #fcf8e3
        }

        .editor-file {
            padding-top: 8px !important;
            position: relative
        }

        .editor-file .effect-layer-popover {
            right: 6px !important;
            top: 6px !important
        }

        .upload-wrapper {
            overflow: auto
        }

        .tool-notification {
            color: #da5246;
            font-size: 16px;
            position: absolute;
            right: 8px;
            top: 8px
        }

        .pre-checkout-modal {
            background-color: rgba(0, 0, 0, .75);
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1100
        }

        .pre-checkout-modal .modal-dialog {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            height: 100vh;
            justify-content: center;
            margin: 0;
            z-index: 1110
        }

        .pre-checkout-modal .modal-dialog .modal-content {
            border-radius: 0;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 0 3rem 3rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-header {
            border: none;
            display: flex;
            flex-direction: column;
            gap: 1rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-header .modal-title {
            font-size: 3rem;
            text-align: center
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-header .cart-confirm {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/ic_cartadded.svg);
            background-position: 50%;
            background-size: 100% 100%;
            height: 4rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 0
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .info-section {
            margin-bottom: 1rem;
            text-align: center
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .secondary-line {
            border-top: 1px solid #d3d3d3;
            width: 100%
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section {
            display: flex;
            flex-direction: column
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button {
            align-items: center;
            display: flex;
            gap: 1rem;
            justify-content: center;
            min-width: 15em;
            outline: none;
            padding: 1rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button .spinner {
            height: 2rem;
            position: relative;
            width: 2rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button .spinner .spinner-icon {
            animation: spin 1s ease 0s infinite forwards;
            animation-fill-mode: both;
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/loaders/yellow.png);
            background-size: 100% 100%;
            height: 100%;
            opacity: 0;
            position: absolute;
            transform: translate(50%, 50%);
            transition: opacity .4s ease;
            width: 100%
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button .spinner .check-mark {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/check-yellow.svg);
            background-size: 100% 100%;
            height: 100%;
            left: 50%;
            opacity: 0;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: opacity .4s ease;
            width: 100%
        }

        @keyframes spin {
            30% {
                transform: rotate(1turn)
            }

            to {
                transform: rotate(2turn)
            }

            0% {
                transform: rotate(0)
            }
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button:not(.done):not(.loading) .spinner-icon {
            animation: none
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button.done,
        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button.done .check-mark,
        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button.loading,
        .pre-checkout-modal .modal-dialog .modal-content .modal-body .action-section button.loading .spinner-icon {
            opacity: 1
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .group-section {
            display: flex;
            flex-direction: column;
            gap: 1rem
        }

        .pre-checkout-modal .modal-dialog .modal-content .modal-body .group-section .action-section {
            gap: 1rem;
            margin-bottom: 0
        }

        .pre-checkout-modal.loading .cart-confirm {
            animation: loading-animation .5s ease 0s 1 forwards
        }

        .pre-checkout-modal.loading.waiting .cart-confirm {
            animation: waiting-animation 1s ease 0s 1 alternate
        }

        @keyframes loading-animation {
            0% {
                transform: scale(0)
            }

            50% {
                transform: scale(1.5)
            }

            to {
                transform: scale(1)
            }
        }

        @keyframes waiting-animation {
            0% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.2)
            }

            to {
                transform: scale(1)
            }
        }

        @media (min-width:1200px) and (min-height:800px) {
            .pre-checkout-modal .modal-content {
                transform: scale(1.5)
            }
        }

        @media (min-width:3000px) and (min-height:1200px) {
            .pre-checkout-modal .modal-content {
                transform: scale(2)
            }
        }

        @media (min-width:768px) {
            .pre-checkout-modal .modal-dialog {
                margin: auto;
                max-width: 350px
            }
        }

        @media (max-width:480px) {
            .pre-checkout-modal .modal-dialog {
                align-items: stretch;
                bottom: 0;
                justify-content: flex-end;
                left: 0;
                margin: 0;
                position: absolute;
                right: 0
            }
        }

        .pre-checkout-modal.hidden {
            display: none
        }

        .pre-checkout-modal-hide-overlay {
            opacity: 0
        }

        body.editor {
            overflow: hidden
        }

        body.editor .navbar {
            background: #040404;
            border-bottom: 1px solid #000
        }

        body.editor .navbar .stickerapp-brand {
            height: 60px;
            padding: 5px 0
        }

        body.editor .navbar .stickerapp-brand .logo {
            margin: 0
        }

        body.editor .navbar .navbar-nav {
            padding: 15px 0;
            position: relative;
            right: 0
        }

        body.editor .navbar-brand {
            height: inherit;
            padding: 6px 15px
        }

        body.editor .navbar-brand #logo .icon {
            background-size: 90px;
            height: 27px;
            width: 60px
        }

        body.editor .btn {
            transition: none
        }

        body.editor .navbar-header a.navbar-cart {
            padding: 7px 10px
        }

        body.editor .navbar-header a.navbar-cart .cart-counter {
            top: 2px
        }

        body.editor .navbar-header .navbar-toggle {
            padding: 9px 10px
        }

        div.editor {
            background: #e8e8e8;
            font-size: 12px;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        div.editor .editor-popover-save-btn {
            display: none
        }

        div.editor .dropdown-menu {
            max-height: 200px
        }

        div.editor .type-popover {
            color: #69BD45;
            cursor: pointer;
            font-size: 20px;
            margin-left: 2px;
            top: 4px
        }

        div.editor .type-popover:hover {
            color: #e6c500
        }

        div.editor .editor-popover {
            background-color: #fff;
            max-width: none;
            width: calc(100% - 20px);
            z-index: 1060
        }

        div.editor .note-wrapper .about {
            font-size: 12px
        }

        div.editor .note-wrapper .icon-info {
            font-size: 20px
        }

        div.editor .editor-header {
            background: transparent;
            border: none;
            border-bottom: 1px solid #d9d9d9;
            height: 75px;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 2
        }

        div.editor .editor-header .btn {
            transition: none
        }

        div.editor .editor-header h1 {
            line-height: 55px;
            margin: 0;
            padding: 0
        }

        div.editor .editor-header .price {
            font-size: 18px;
            font-weight: 300;
            line-height: 1em
        }

        div.editor .editor-container {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        div.editor .shapes .cta {
            flex-direction: column
        }

        div.editor>.tool-bar {
            bottom: 0;
            position: absolute;
            right: 200px;
            width: 50px;
            z-index: 2
        }

        div.editor section.editor-notifications {
            left: 0;
            opacity: .9;
            position: absolute;
            text-align: center;
            top: 0;
            z-index: 2
        }

        div.editor section.editor-notifications .alert {
            border-radius: 0;
            margin-bottom: 5px
        }

        div.editor .tip {
            color: #666;
            float: left;
            font-size: 11px;
            line-height: 13px
        }

        div.editor .tip span {
            display: inline-block;
            height: 6px;
            margin-right: 3px;
            width: 17px
        }

        div.editor .tip .title {
            padding-bottom: 4px
        }

        div.editor .we-check-text,
        div.editor section.editor-notifications {
            font-size: 10px
        }

        div.editor .editor.preview-off .visible-preview {
            opacity: 0;
            visibility: hidden
        }

        div.editor .editor.preview-on .visible-preview {
            opacity: 1
        }

        div.editor>.btn-save-sticker {
            bottom: 15px;
            display: none;
            position: absolute;
            right: 265px;
            z-index: 2
        }

        div.editor .editor-spinner {
            background: #fff;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, .12);
            margin: 0 10px 10px 0;
            padding: 10px;
            position: absolute;
            right: 0;
            text-align: center;
            width: 130px;
            z-index: 1
        }

        div.editor .editor-spinner .f-col,
        div.editor .editor-spinner .f-col-1,
        div.editor .editor-spinner .f-col-10,
        div.editor .editor-spinner .f-col-11,
        div.editor .editor-spinner .f-col-12,
        div.editor .editor-spinner .f-col-2,
        div.editor .editor-spinner .f-col-2-9,
        div.editor .editor-spinner .f-col-3,
        div.editor .editor-spinner .f-col-4,
        div.editor .editor-spinner .f-col-5,
        div.editor .editor-spinner .f-col-6,
        div.editor .editor-spinner .f-col-7,
        div.editor .editor-spinner .f-col-8,
        div.editor .editor-spinner .f-col-9,
        div.editor .editor-spinner .sp-hue {
            flex: none;
            width: 50%
        }

        div.editor .editor-spinner .progress {
            display: block;
            height: 8px;
            margin: 0;
            width: 100%
        }

        div.editor .editor-spinner span.msg {
            font-size: 10px;
            margin-bottom: 10px;
            text-transform: uppercase
        }

        div.editor.cross .hidden-sheet,
        div.editor.cross.zoomed .hidden-sheet.hidden,
        div.editor.cross.zoomed .visible-sheet,
        div.editor.nail .hidden-sheet,
        div.editor.nail.zoomed .hidden-sheet.hidden,
        div.editor.nail.zoomed .visible-sheet,
        div.editor.sheet .hidden-sheet,
        div.editor.sheet.zoomed .hidden-sheet.hidden,
        div.editor.sheet.zoomed .visible-sheet {
            display: none !important
        }

        div.editor.cross.zoomed .hidden-sheet,
        div.editor.nail.zoomed .hidden-sheet,
        div.editor.sheet.zoomed .hidden-sheet {
            display: block !important
        }

        div.editor.editor-no-tool-pane .editor-container {
            bottom: 0;
            left: 0;
            right: 0;
            top: 0
        }

        div.editor-orientation-portrait .editor-container,
        div.editor-orientation-portrait .editor-header {
            transition: margin-top .2s ease
        }

        div.editor-orientation-portrait .editor-header {
            background: #1d1d1d;
            height: 65px;
            position: absolute;
            top: 0
        }

        div.editor-orientation-portrait .editor-header .btn-home {
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            opacity: 1;
            pointer-events: auto;
            text-transform: uppercase;
            visibility: visible
        }

        div.editor-orientation-portrait .editor-header .btn-save,
        div.editor-orientation-portrait .editor-header .save-mobile {
            background: transparent
        }

        div.editor-orientation-portrait .editor-header .btn-save .btn-success,
        div.editor-orientation-portrait .editor-header .save-mobile .btn-success {
            background: transparent;
            border: 0;
            color: #69BD45;
            font-size: 12px;
            font-weight: 700;
            padding: 0;
            text-transform: uppercase
        }

        div.editor-orientation-portrait .editor-header .btn-save .btn-success .icon-cart,
        div.editor-orientation-portrait .editor-header .save-mobile .btn-success .icon-cart,
        div.editor-orientation-portrait .editor-header .btn-save-case,
        div.editor-orientation-portrait .editor-header .btn-save-skin,
        div.editor-orientation-portrait .editor-header .btn-save-sticker {
            display: none
        }

        div.editor-orientation-portrait .editor-header .price {
            color: #fff
        }

        div.editor-orientation-portrait .editor-header .price.f-col,
        div.editor-orientation-portrait .editor-header .price.f-col-1,
        div.editor-orientation-portrait .editor-header .price.f-col-10,
        div.editor-orientation-portrait .editor-header .price.f-col-11,
        div.editor-orientation-portrait .editor-header .price.f-col-12,
        div.editor-orientation-portrait .editor-header .price.f-col-2,
        div.editor-orientation-portrait .editor-header .price.f-col-2-9,
        div.editor-orientation-portrait .editor-header .price.f-col-3,
        div.editor-orientation-portrait .editor-header .price.f-col-4,
        div.editor-orientation-portrait .editor-header .price.f-col-5,
        div.editor-orientation-portrait .editor-header .price.f-col-6,
        div.editor-orientation-portrait .editor-header .price.f-col-7,
        div.editor-orientation-portrait .editor-header .price.f-col-8,
        div.editor-orientation-portrait .editor-header .price.f-col-9,
        div.editor-orientation-portrait .editor-header .price.sp-hue {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        div.editor-orientation-portrait .editor-header .control-label.backprint_price_portrait {
            font-size: 9px
        }

        div.editor-orientation-portrait.sheet.zoomed .btn-home,
        div.editor-orientation-portrait.sheet.zoomed .btn-save,
        div.editor-orientation-portrait.sheet.zoomed .save-mobile,
        div.editor-orientation-portrait.sheet.zoomed .btn-save-case,
        div.editor-orientation-portrait.sheet.zoomed .f-col.price,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-1,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-10,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-11,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-12,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-2,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-2-9,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-3,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-4,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-5,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-6,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-7,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-8,
        div.editor-orientation-portrait.sheet.zoomed .price.f-col-9,
        div.editor-orientation-portrait.sheet.zoomed .price.sp-hue {
            display: none
        }

        div.editor-orientation-portrait.sheet.zoomed .btn-save-sticker {
            display: flex
        }

        div.editor-orientation-portrait.sheet.zoomed .btn-save-sticker.hidden-portrait {
            display: none
        }

        div.editor-orientation-portrait.sheet.zoomed .btn-save-sticker .btn {
            background: transparent;
            border: 0;
            color: #4990e2;
            font-weight: 700;
            padding: 0;
            text-transform: uppercase
        }

        div.editor-orientation-portrait.state-tool-open .tool-backside-print,
        div.editor-orientation-portrait.state-tool-open .tool-backside-print-remove.hidden-landscape {
            display: none
        }

        div.editor-orientation-portrait.state-tool-open .editor-container,
        div.editor-orientation-portrait.state-tool-open .editor-header {
            margin-top: -65px
        }

        div.editor-orientation-portrait.sheet.zoomed .tool-pane .panel-tools-overview>:not(.tool-bar) {
            display: none;
            height: 0;
            opacity: 0
        }

        div.editor-orientation-portrait.sheet.zoomed .tool-pane .footer .panel-back {
            top: 0
        }

        div.editor-orientation-portrait .hidden-portrait,
        div.editor-orientation-portrait .note-wrapper .row-done {
            display: none
        }

        div.editor-orientation-portrait .note-wrapper .about {
            padding: 20px 30px 5px
        }

        div.editor-orientation-portrait .note-wrapper .message {
            padding: 5px 30px 20px
        }

        div.editor-orientation-portrait>.tool-bar {
            background: #000;
            border-left: 0;
            bottom: 0;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-around;
            right: 0;
            width: 100%
        }

        div.editor-orientation-portrait .tool-bar .tool {
            border-bottom: 0;
            flex: 1;
            padding-top: 10px
        }

        div.editor-orientation-portrait .tool-bar .tool>label {
            color: #fff;
            margin-bottom: 0;
            margin-top: 5px
        }

        div.editor-orientation-portrait .tool-pane {
            border-top: 1px solid #d9d9d9;
            bottom: 54px;
            display: flex;
            flex-wrap: wrap;
            font-size: 12px;
            height: auto;
            justify-content: space-between;
            left: 0;
            padding: 0;
            right: 0;
            top: auto;
            transition: bottom .2s ease;
            width: 100%
        }

        div.editor-orientation-portrait .tool-pane .panel {
            transition: bottom .2s ease
        }

        div.editor-orientation-portrait .tool-pane .footer {
            bottom: -100%
        }

        div.editor-orientation-portrait .tool-pane.state-tools-overview .panel-tools-overview {
            bottom: 0
        }

        div.editor-orientation-portrait .tool-pane.state-tools-overview .panel-tool-content {
            bottom: 100%;
            opacity: 0;
            transition: bottom, opacity .2s linear
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .panel-tools-overview {
            bottom: -100%
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .panel-tool-content {
            bottom: 0;
            left: 0;
            opacity: 1;
            transition: bottom, opacity .2s linear
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer {
            bottom: 0;
            transition: bottom .2s ease
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm {
            top: 0
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue {
            padding: 0 20%
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done {
            background-color: #69BD45;
            border-color: #69BD45;
            color: #040404
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:focus {
            background-color: #ccaf00;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.dropdown-toggle,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:hover {
            background-color: #ccaf00;
            border-color: #c2a600;
            color: #040404
        }

        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.dropdown-toggle:hover,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.dropdown-toggle.focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.dropdown-toggle:focus,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.dropdown-toggle:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.active:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:active.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:active:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:active:hover {
            background-color: #a89100;
            border-color: #806e00;
            color: #040404;
            outline: none
        }

        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.dropdown-toggle,
        .open>div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.dropdown-toggle,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.active,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:active {
            background-image: none;
            outline: none
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done[disabled]:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.disabled.focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.disabled:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.disabled:hover,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done[disabled].focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done[disabled]:focus,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done[disabled]:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done:hover,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done.focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:focus,
        fieldset[disabled] div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done:hover {
            background-color: #69BD45;
            border-color: #69BD45
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-1 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-10 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-11 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-12 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-2-9 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-3 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-4 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-5 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-6 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-7 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-8 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .f-col-9 .btn-done .badge,
        div.editor-orientation-portrait .tool-pane.state-tool-open .footer .panel.panel-confirm .sp-hue .btn-done .badge {
            background-color: #040404;
            color: #69BD45
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open {
            border-top: 1px solid #d9d9d9;
            bottom: 0;
            height: 61%;
            min-height: 281px;
            z-index: 3
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=cutline] {
            height: 38%;
            min-height: 253px
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=cliparts] {
            height: 60%;
            min-height: 322px
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=upload] {
            height: 35%;
            min-height: 215px
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=upload] .footer .panel.panel-confirm .btn {
            display: none
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=text] {
            height: 297px;
            min-height: auto
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=text_deal] {
            height: 117px;
            min-height: auto
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=note] {
            height: 217px;
            min-height: auto
        }

        div.editor-orientation-portrait .tool-pane.state-tool-open[data-tool=background] {
            height: 242px;
            min-height: auto
        }

        div.editor-orientation-portrait .tool-pane .panel.panel-tool-content {
            margin-bottom: 46px
        }

        div.editor-orientation-portrait .tool-pane .panel.panel-tools-overview {
            position: relative
        }

        div.editor-orientation-portrait .tool-pane .panel.panel-tools-overview .editor-toolpane-parts {
            align-self: center;
            border: 0;
            flex-direction: column
        }

        div.editor-orientation-portrait .tool-pane .panel.panel-tool-content .tool-content-header .cta.back {
            min-height: 50px
        }

        div.editor-orientation-portrait .tool-pane .panel.panel-tool-content .sp-container.sp-flat .sp-top-inner {
            height: 100px
        }

        div.editor-orientation-portrait .tool-pane .tool-material-preset .icon-drop-up {
            display: none
        }

        div.editor-orientation-portrait .tool-pane .tool-material-preset {
            margin-bottom: 0
        }

        div.editor-orientation-portrait .tool-pane .tool-material-preset label {
            font-weight: 700;
            margin-bottom: 5px
        }

        div.editor-orientation-portrait .tool-pane .tool-material-preset .btn-group-justified button {
            border-radius: 20px;
            font-size: 11px;
            width: 100%
        }

        div.editor-orientation-portrait .tool-pane .tool-note {
            justify-content: flex-start
        }

        div.editor-orientation-portrait .tool-pane .tool-note .content {
            font-size: 12px
        }

        div.editor-orientation-portrait .tool-pane .tool-note i {
            font-size: 20px;
            left: -10px;
            position: relative;
            top: 3px
        }

        div.editor-orientation-portrait .tool-pane .tool-bar {
            display: none;
            flex-wrap: nowrap;
            justify-content: space-around;
            width: 100%
        }

        div.editor-orientation-portrait .tool-pane .footer {
            margin: 0;
            width: 100%
        }

        div.editor-orientation-portrait .editor-popover {
            max-width: 100%
        }

        div.editor-orientation-portrait .editor-container {
            left: 0;
            right: 0;
            top: 65px
        }

        div.editor-orientation-portrait section.editor-notifications {
            left: 0;
            right: 0;
            top: auto
        }

        div.editor-orientation-portrait.single section.editor-notifications {
            bottom: 147px
        }

        div.editor-orientation-portrait.sheet.preview-off section.editor-notifications {
            bottom: 54px
        }

        div.editor-orientation-portrait.editor-size-lg.single section.editor-notifications {
            bottom: 193px
        }

        div.editor-orientation-portrait section.editor-notifications .alert {
            margin-bottom: 0
        }

        div.editor-orientation-portrait.editor-body-page .editor-header {
            top: -2px;
        }

        div.editor-orientation-portrait.editor-body-page .editor-container {
            top: 125px
        }

        div.editor-orientation-portrait.sheet .editor-container,
        div.editor-orientation-portrait.sheet .editor-spinner,
        div.editor-orientation-portrait.single .editor-container,
        div.editor-orientation-portrait.single .editor-spinner {
            bottom: 190px
        }

        div.editor-orientation-portrait.has-no-toolbar .tool-pane {
            bottom: -1px
        }

        div.editor-orientation-portrait.has-no-toolbar .tool-pane .footer .action,
        div.editor-orientation-portrait.has-no-toolbar .tool-pane .footer .total {
            display: none
        }

        div.editor-orientation-portrait .tool-backside-print {
            z-index: 2
        }

        div.editor-orientation-portrait .tool-backside-print.appended {
            justify-content: center;
            position: absolute;
            top: 150px
        }

        #editor-modal div.editor-orientation-portrait .tool-backside-print.appended {
            top: 90px
        }

        div.editor-orientation-portrait .tool-backside-print.appended .btn-group {
            width: 80vw
        }

        div.editor-orientation-portrait .tool-backside-print-remove {
            margin: 7px;
            min-height: 50px
        }

        div.editor-orientation-portrait .tool-backside-print-remove.hidden-landscape {
            align-items: center;
            display: flex;
            float: left;
            justify-content: space-between;
            width: 100%
        }

        div.editor-orientation-portrait .tool-backside-print-remove .btn.btn-remove {
            border-radius: 32px;
            font-size: 12px;
            outline: none;
            padding: 10px 20px
        }

        div.editor-orientation-portrait .tool-backside-print-remove h6 {
            margin-left: 20px
        }

        div.editor-orientation-portrait .tool-backside-print-deal {
            width: 70%
        }

        div.editor-orientation-portrait .tool-content.tool-content-backside-print-deal-text .text-area-container {
            margin-top: 10px
        }

        div.editor-orientation-portrait.editor-size-lg .tool-pane .footer {
            border: 0;
            border-top: 1px solid #d9d9d9
        }

        div.editor-orientation-portrait.editor-size-lg .tool-pane.state-tool-open[data-tool=note] {
            height: 280px;
            min-height: auto
        }

        div.editor-orientation-portrait.editor-size-lg .tool-pane.state-tool-open[data-tool=text] {
            height: 332px;
            min-height: auto
        }

        div.editor-orientation-portrait.editor-size-lg .tool-pane.state-tool-open[data-tool=background] {
            height: 272px;
            min-height: auto
        }

        div.editor-orientation-landscape .panel.panel-tools-overview .editor-toolpane-parts {
            border-bottom: 0;
            border-right: 0
        }

        div.editor-orientation-landscape .panel.panel-tools-overview .tool-material-preset {
            border-bottom: 0
        }

        div.editor-orientation-landscape .panel.panel-tools-overview .editor-toolpane-parts {
            align-self: center;
            border: 0;
            flex-direction: column
        }

        div.editor-orientation-landscape>.tool-bar {
            background: #1d1d1d;
            justify-content: flex-start
        }

        div.editor-orientation-landscape .tool>label {
            color: #fff
        }

        div.editor-orientation-landscape.has-no-toolbar .tool-pane {
            right: 0
        }

        div.editor-orientation-landscape.has-no-toolbar .tool-pane .panel.panel-tools-overview {
            border-bottom: 0;
            width: 370px
        }

        div.editor-orientation-landscape.has-no-toolbar .footer,
        div.editor-orientation-landscape.has-no-toolbar .tool-pane .footer {
            width: 370px
        }

        div.editor-orientation-landscape .hidden-landscape {
            display: none
        }

        div.editor-orientation-landscape .editor-popover.editor-popover-save-btn {
            display: block
        }

        div.editor-orientation-landscape .editor-header {
            background-color: #f7f7f7;
            border-bottom: 1px solid #d9d9d9;
            border-left: 1px solid #d9d9d9;
            opacity: 1 !important;
            pointer-events: auto;
            visibility: visible !important;
            width: 250px
        }

        div.editor-orientation-landscape .editor-header .cta.home {
            width: 49px
        }

        div.editor-orientation-landscape .editor-popover {
            width: 180px
        }

        div.editor-orientation-landscape .editor .tool-bar .tool {
            border-bottom: 1px solid #ccc
        }

        div.editor-orientation-landscape.has-no-toolbar>.tool-bar {
            display: none
        }

        div.editor-orientation-landscape>.tool-bar {
            top: 55px;
            width: 90px
        }

        div.editor-orientation-landscape.has-no-toolbar .tool-pane {
            width: 249px
        }

        div.editor-orientation-landscape .tool-pane {
            bottom: 0;
            right: 50px;
            width: 200px
        }

        div.editor-orientation-landscape .tool-pane .panel.panel-tools-overview {
            border-top: 1px solid #d9d9d9;
            bottom: 49px
        }

        div.editor-orientation-landscape .tool-pane .tool-material-preset .action {
            display: none
        }

        div.editor-orientation-landscape .tool-pane .tool-note {
            border: 0;
            justify-content: flex-start;
            order: 10
        }

        div.editor-orientation-landscape .tool-pane .tool-note .content {
            font-size: 13px
        }

        div.editor-orientation-landscape .tool-pane .tool-note i {
            font-size: 20px;
            left: -4px;
            position: relative;
            top: 3px
        }

        div.editor-orientation-landscape .tool-pane .tool-bar {
            display: none;
            flex-wrap: wrap
        }

        div.editor-orientation-landscape .tool-pane .tool-bar .tool {
            width: 106px
        }

        div.editor-orientation-landscape .editor-container {
            bottom: 0;
            right: 250px;
            top: 0
        }

        div.editor-orientation-landscape.editor-body-page {
            bottom: 0;
            height: auto;
            top: 60px
        }

        div.editor-orientation-landscape.editor-body-page .editor-header {
            width: 250px
        }

        div.editor-orientation-landscape section.editor-notifications {
            right: 250px
        }

        div.editor-orientation-landscape.sheet.zoomed>.btn-save-sticker {
            display: block
        }

        div.editor-orientation-landscape .tool-pane .footer {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            bottom: 75px;
            margin: 0 20px;
            width: 280px
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .tool-pane {
            width: 420px
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .tool-pane .panel {
            box-shadow: none
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .tool-pane .panel.panel-tool-content {
            padding-bottom: 0
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .tool-pane .panel.panel-tools-overview {
            border-bottom: 0;
            width: 380px
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .tool-pane .footer {
            width: 380px
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .editor-header {
            width: 510px
        }

        div.editor-orientation-landscape.editor-size-lg.is-admin .editor-container,
        div.editor-orientation-landscape.editor-size-lg.is-admin .editor-spinner,
        div.editor-orientation-landscape.editor-size-lg.is-admin section.editor-notifications {
            right: 510px
        }

        div.editor-orientation-landscape .tool-backside-print.appended {
            bottom: 83px
        }

        div.editor-size-lg {
            font-size: 14px
        }

        div.editor-size-lg .editor-header {
            border-bottom: 0
        }

        div.editor-size-lg .editor-header .cta.home {
            flex: none;
            width: 89px
        }

        div.editor-size-lg .dropdown-menu {
            max-height: 330px
        }

        div.editor-size-lg .tool-pane .total .amount {
            font-size: 28px
        }

        div.editor-size-lg .we-check-text,
        div.editor-size-lg section.editor-notifications {
            font-size: 14px
        }

        div.editor-orientation-landscape .tool-note {
            border: 0
        }

        div.editor-orientation-landscape .editor-popover {
            width: 300px
        }

        div.editor-orientation-landscape .editor-popover.editor-popover-save-btn {
            width: 245px
        }

        div.editor-orientation-landscape>.tool-bar {
            border: 0;
            right: 0;
            top: 0
        }

        div.editor-orientation-landscape .tool-bar .tool {
            align-items: center;
            border-bottom: .1px solid #2d2d2d;
            display: flex;
            flex-direction: column;
            height: 90px;
            justify-content: center;
            text-align: center
        }

        div.editor-orientation-landscape .tool-bar .tool.active {
            background: #f7f7f7;
            border-left: 0;
            position: relative
        }

        div.editor-orientation-landscape .tool-bar .tool.active>label {
            color: #444
        }

        div.editor-orientation-landscape .tool-bar .tool>i {
            height: 30px;
            width: 30px
        }

        div.editor-orientation-landscape .tool-bar .tool>label {
            font-size: 11px;
            margin-top: 5px;
            text-transform: none
        }

        div.editor-orientation-landscape .editor-header .tool-close,
        div.editor-orientation-landscape .tool-bar .tool-close {
            background-color: #2d2d2d;
            cursor: pointer;
            font-family: FuturaPT, serif;
            height: 62px
        }

        div.editor-orientation-landscape .editor-header .tool-close label,
        div.editor-orientation-landscape .tool-bar .tool-close label {
            cursor: pointer
        }

        div.editor-orientation-landscape .editor-header .tool-close .glyphicon,
        div.editor-orientation-landscape .tool-bar .tool-close .glyphicon {
            color: #69BD45;
            margin-left: 5px
        }

        div.editor-orientation-landscape.editor-body-page .editor-header {
            right: 0;
            width: 410px
        }

        div.editor-orientation-landscape .editor-container,
        div.editor-orientation-landscape .editor-spinner,
        div.editor-orientation-landscape section.editor-notifications {
            right: 410px
        }

        div.editor-orientation-landscape>.btn-save-sticker {
            right: 425px
        }

        div.editor-orientation-landscape .editor-header {
            padding-left: 10px;
            right: 0;
            width: 410px
        }

        div.editor-orientation-landscape.has-no-toolbar .tool-pane {
            width: 410px
        }

        div.editor-orientation-landscape .tool-pane {
            border-left: 1px solid #d9d9d9;
            right: 90px;
            top: 75px;
            width: 320px
        }

        div.editor-orientation-landscape .tool-pane .panel.panel-tools-overview {
            border: 1px solid #d9d9d9;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            bottom: 190px;
            margin: 0 20px;
            top: auto;
            width: 280px
        }

        div.editor-orientation-landscape .tool-pane .panel.panel-tool-content {
            padding: 0 20px 20px
        }

        div.editor-orientation-landscape .tool-pane .panel.panel-tool-content .tool-content {
            border: 1px solid #d9d9d9;
            border-radius: 4px
        }

        div.editor-orientation-landscape .tool-pane .panel.panel-tool-content .tool-content.tool-content-upload {
            border: 0
        }

        div.editor-orientation-landscape .tool-pane .tool-bar .tool {
            width: 100%
        }

        div.editor-orientation-landscape .tool-pane .footer {
            border: 1px solid #d9d9d9;
            height: 116px
        }

        div.editor-orientation-landscape .tool-pane .footer .btn {
            font-size: 16px;
            padding: 5px 22px 2px 16px
        }

        div.editor-orientation-landscape .tool-pane .footer .btn-save .icon-cart,
        div.editor-orientation-landscape .tool-pane .footer .save-mobile .icon-cart {
            font-size: 24px;
            position: relative;
            top: -2px
        }

        div.editor-orientation-landscape .tool-pane .footer .panel {
            background: #fff;
            margin-top: 1px
        }

        .tool-backside-print {
            z-index: 2
        }

        .tool-backside-print.appended {
            justify-content: center;
            position: absolute
        }

        .tool-backside-print.appended .btn-group {
            border-radius: 32px;
            box-shadow: 0 3px 7px 0 #b9b9b9;
            height: 45px;
            max-width: 373px;
            min-width: 270px;
            width: 50%
        }

        .tool-backside-print.appended .btn-group .btn-primary {
            background-color: #fff;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .tool-backside-print .btn-group {
            display: flex;
            width: 100%
        }

        .tool-backside-print .btn-group .btn {
            z-index: 99
        }

        .tool-backside-print .btn-group .btn-primary {
            background-color: #e8e8e8;
            border: none;
            flex: 1
        }

        .tool-backside-print .btn-group .btn-primary.active {
            background-color: #69BD45
        }

        @media (min-width:992px) {
            div.editor-orientation-landscape.editor-body-page {
                top: 74px
            }

            body.editor {
                overflow: hidden
            }

            body.editor .navbar .stickerapp-brand {
                height: 72px;
                padding: 5px 15px
            }
        }

        .justify-content-between {
            justify-content: space-between
        }

        .tool-backside-print-remove #backside-print-remove-button.btn.btn-remove {
            border-radius: 32px;
            font-size: 12px;
            outline: none;
            padding: 10px 20px
        }

        .tool-backside-print-remove.disabled .btn.btn-remove {
            background-color: #ccc
        }

        .btn.btn-remove {
            background-color: #da5246;
            border-radius: 0;
            color: #fff;
            font-size: 11px;
            margin: 0;
            padding: 7px 13px
        }

        .hidden-portrait .btn.btn-remove {
            font-size: 13px;
            line-height: 13px
        }

        .btn.btn-remove .desc {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 9px;
            font-weight: 400;
            text-transform: capitalize
        }

        svg[id*=svgroot] {
            overflow: overlay
        }

        .svgPartSizeText {
            font-family: FuturaPT, serif !important
        }

        #confirm-modal-backside-print {
            z-index: 1070
        }

        #confirm-modal-backside-print .confirm-modal-content .yt-container {
            align-items: center;
            background-position: 50%;
            background-size: 420px 240px;
            display: flex;
            flex-direction: column;
            width: 100%
        }

        #confirm-modal-backside-print .confirm-modal-content .yt-container .label-success {
            align-items: center;
            border-radius: 0;
            display: flex;
            height: 32px;
            justify-content: center;
            left: 0;
            position: absolute;
            top: 0;
            width: 73px
        }

        #confirm-modal-backside-print h6 {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px
        }

        #confirm-modal-backside-print b {
            margin-left: 20px
        }

        #confirm-modal-backside-print b,
        #confirm-modal-backside-print ul {
            font-size: 13px
        }

        #confirm-modal-backside-print ul li {
            margin: 3px 0
        }

        #confirm-modal-backside-print label[for=show_again_paperback_info] {
            font-size: 14px;
            font-weight: 400
        }

        @media (min-width:480px) {
            #confirm-modal-backside-print .confirm-modal-inner {
                padding: 40px
            }

            #confirm-modal-backside-print .confirm-modal-content .yt-container {
                background-color: #e8e8e8;
                height: 240px
            }
        }

        @media (max-width:767px) {
            #confirm-modal-backside-print .confirm-modal-inner {
                top: 50%
            }

            #confirm-modal-backside-print .confirm-modal-content .yt-container {
                height: 200px
            }
        }

        .oembed {
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .3);
            height: 0;
            margin-bottom: 1em;
            overflow: hidden;
            position: relative
        }

        .oembed iframe:first-child,
        .oembed>* {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .oembed-16-by-9 {
            padding-bottom: 56%
        }

        @media (min-width:1200px) {
            .oembed-16-by-9.oembed-max-1280 {
                height: 720px;
                margin: 0 auto;
                max-width: 1280px;
                padding: 0
            }
        }

        svg.radial-loader {
            background: rgba(0, 0, 0, .8);
            border-radius: 10%;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .5);
            z-index: 10
        }

        svg.radial-loader .radial-loader__circle {
            stroke-dasharray: 10 5.5;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
            transition: stroke-dashoffset .35s
        }

        svg.radial-loader[data-mode=buffer] .radial-loader__circle {
            -webkit-animation: rotate 2.5s linear infinite;
            animation: rotate 2.5s linear infinite;
            transform: rotate(0deg)
        }

        @-webkit-keyframes rotate {
            to {
                -webkit-transform: rotate(1turn)
            }
        }

        @keyframes rotate {
            to {
                transform: rotate(1turn)
            }
        }

        .frame-by-frame {
            background-color: #000;
            user-select: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .frame-by-frame>svg.radial-loader {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .frame-by-frame>.controls {
            bottom: 0;
            left: 50%;
            pointer-events: none;
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 10
        }

        .frame-by-frame>.controls .touch-n-move-icon {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/ic_swipe.svg);
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: contain;
            display: none;
            height: 60px;
            width: 60px
        }

        .frame-by-frame>.frames {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .frame-by-frame .frames img,
        .frame-by-frame img.placeholder {
            height: auto;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
            visibility: hidden;
            width: 100%
        }

        .frame-by-frame img.placeholder {
            visibility: visible
        }

        .frame-by-frame.ready img.placeholder {
            display: none
        }

        .frame-by-frame.ready>.frames img.active {
            display: block;
            visibility: visible;
            z-index: 2
        }

        .frame-by-frame.ready>.controls .touch-n-move-icon {
            display: block
        }

        #cookie-consent-v2-modal {
            font-size: 12px;
            padding: 0 !important
        }

        #cookie-consent-v2-modal h3 {
            color: #2d2d2d;
            font-size: 24px;
            font-weight: bolder;
            letter-spacing: -.6px;
            text-transform: uppercase
        }

        .cookie-consent-v2-stickerapp #cookie-consent-v2-modal h3:not(.p1) {
            font-family: FuturaPT, Lato, sans-serif, serif
        }

        .cookie-consent-v2-stickerapp #cookie-consent-v2-modal h3:not(.p1):not(.modal-title) {
            margin: 5px 0 24px;
            transform: rotate(-1.3deg)
        }

        #cookie-consent-v2-modal #cc-v2-read-our-cookie-policy,
        #cookie-consent-v2-modal a {
            background-color: transparent;
            cursor: pointer
        }

        #cookie-consent-v2-modal #cc-v2-read-our-cookie-policy:hover,
        #cookie-consent-v2-modal a:hover {
            text-decoration: none
        }

        #cookie-consent-v2-modal #cc-v2-read-our-cookie-policy#cc-v2-read-our-cookie-policy:hover,
        #cookie-consent-v2-modal a#cc-v2-read-our-cookie-policy:hover {
            color: #d65c84 !important
        }

        #cookie-consent-v2-modal .modal-dialog {
            align-items: center;
            color: #000;
            display: flex;
            justify-content: center;
            margin: 0;
            min-height: 100vh;
            padding: 0;
            width: 100%
        }

        #cookie-consent-v2-modal .modal-dialog button {
            border: none
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-accept-btn {
            min-width: 160px
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .cc-v2-accept-btn {
            background-color: #cfa3d5;
            border-color: #cfa3d5
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .cc-v2-accept-btn:hover {
            background-color: #ead8ed;
            border-color: #ead8ed
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .cc-v2-save-btn {
            background-color: #fff;
            border: 1px solid #cfa3d5;
            color: #cfa3d5
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .cc-v2-save-btn:hover {
            border-color: #ead8ed;
            color: #ead8ed
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-btn {
            font-size: 12px
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 24px 0
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body h3 {
            margin: 0;
            padding: 0
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options {
            display: flex;
            flex-direction: column;
            font-size: 12px;
            gap: 9px;
            margin: 0 12px;
            max-width: 604px
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option .checkbox {
            background-color: #fff;
            border: .12px solid rgba(0, 0, 0, .3);
            border-radius: 2.4px;
            box-sizing: border-box;
            height: 24px;
            margin: 0;
            position: absolute;
            width: 24px
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option:hover .checkbox {
            border-color: rgba(0, 0, 0, .6)
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option .checkmark {
            height: 100%;
            width: 100%
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option input[type=checkbox]:checked~.checkbox>.checkmark {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/check.svg)
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option input[type=checkbox]:disabled~.checkbox {
            border-color: rgba(0, 0, 0, .3)
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option input[type=checkbox]:disabled~.checkbox>.checkmark {
            opacity: .3
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option input[type=checkbox] {
            cursor: pointer;
            height: 0;
            opacity: 0;
            position: absolute;
            width: 0
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option .cc-v2-option-row {
            align-items: center;
            display: flex;
            gap: 12px;
            justify-content: flex-start
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option .cc-v2-option-row .cc-v2-option-title {
            font-weight: 700;
            margin-left: 36px
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-settings-body .cc-v2-options .cc-v2-option .cc-v2-option-row .cc-v2-option-text {
            font-weight: 400;
            margin-left: 36px
        }

        #cookie-consent-v2-modal .modal-dialog .cc-v2-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-top: 15px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-body #cc-v2-options {
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-body .p1,
        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-body .p2 {
            color: #2d2d2d
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content {
            border-radius: 0;
            display: flex;
            flex-direction: column
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header {
            border: none;
            font-size: 14px;
            height: 55px;
            margin: 0;
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .modal-title {
            font-size: 18px
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .modal-title {
            color: #fff
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .cc-v2-modal-titlebar {
            align-items: center;
            background-color: #69BD45;
            display: flex;
            height: 100%;
            justify-content: center;
            position: relative;
            width: 100%
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .cc-v2-modal-titlebar {
            background-color: #333;
            color: #fff
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .cc-v2-modal-titlebar .close {
            align-items: center;
            background-color: #69BD45;
            color: #2d2d2d;
            display: flex;
            font-weight: 700;
            height: 55px;
            justify-content: center;
            margin: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 55px;
            z-index: 1
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .cc-v2-modal-titlebar .close {
            background-color: #333;
            color: #fff
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-header .cc-v2-modal-titlebar .close span {
            font-size: 22px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-body {
            padding: 0
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content .modal-footer {
            border: none;
            font-size: 14px;
            text-align: center
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] {
            max-width: 380px
        }

        .cookie-consent-v2-stickerapp #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] {
            background-color: #69BD45
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] button {
            color: #fff
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] button {
            height: 43px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] .modal-body {
            align-items: center;
            color: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 24px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] .modal-body img {
            width: 84px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] .modal-body span {
            font-size: 16px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] .modal-footer {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 0;
            padding: 0 15px 15px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] .modal-footer a {
            color: #000
        }

        @media (max-width:482px) {
            #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=main] {
                bottom: 0;
                position: absolute
            }
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content:not([data-page=main]) {
            min-height: 100vh;
            width: 100%
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] {
            background-color: #f5f5f5
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] .cc-v2-settings-top {
            align-items: center;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            font-size: 18px;
            gap: 12px;
            justify-content: center;
            padding: 18px 15px
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] .cc-v2-settings-top .cc-v2-settings-top-text {
            max-width: 604px;
            text-align: center
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] .modal-footer {
            margin-top: auto
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] #cc-v2-read-our-cookie-policy,
        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=settings] a {
            color: #db7093
        }

        .cookie-consent-v2-caseapp #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] a:hover {
            color: #219187
        }

        #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] .modal-body {
            color: #000;
            font-size: 18px;
            margin: 0 12px;
            overflow-x: auto
        }

        @media (min-width:768px) {
            #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] .modal-body {
                margin: 0 60px
            }

            #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] .modal-body p,
            #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] .modal-body table {
                max-width: 688px
            }

            #cookie-consent-v2-modal .modal-dialog .modal-content[data-page=policy] .modal-body .cc-v2-policy-content {
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center
            }
        }

        #cookie-consent-v2-modal.narrow .modal-dialog {
            align-items: flex-end
        }

        #cookie-consent-v2-modal.narrow .modal-dialog .modal-content {
            max-width: unset;
            width: 100%
        }

        #cookie-consent-v2-modal.narrow .modal-dialog .modal-content .cc-v2-actions {
            align-items: stretch;
            flex-direction: column;
            justify-content: center
        }

        #cookie-consent-v2-modal.narrow .modal-dialog .modal-content[data-page=policy] .modal-body {
            margin: 0 12px;
            width: auto
        }

        .country-site-selector-wrapper .country-site-selector-btn {
            background-color: transparent;
            border: none;
            padding: 8px 0 !important
        }

        .country-site-selector-wrapper .country-site-selector-btn .caret {
            color: #fff
        }

        .country-site-selector-wrapper .country-site-selector-btn:active,
        .country-site-selector-wrapper .country-site-selector-btn:focus,
        .country-site-selector-wrapper .country-site-selector-btn:focus:active,
        .country-site-selector-wrapper .country-site-selector-btn:hover {
            background-color: transparent !important;
            background-image: none;
            box-shadow: none;
            outline: 0
        }

        .country-site-selector-wrapper .country-site-selector-dropdown {
            display: inline-block;
            left: 0;
            position: absolute;
            right: 0;
            text-align: left
        }

        .country-site-selector-wrapper .country-site-selector-dropdown .country-site-selector-dropdown-content {
            background-color: #fff;
            height: 0;
            margin-left: auto;
            margin-right: auto;
            overflow-x: hidden;
            width: 220px
        }

        .country-site-selector-wrapper .country-site-selector-dropdown .country-site-selector-dropdown-content a {
            color: #000;
            display: block;
            padding: 12px 16px;
            text-decoration: none
        }

        .country-site-selector-wrapper .country-site-selector-dropdown .country-site-selector-dropdown-content a:hover {
            background-color: #ddd
        }

        .content-wrapper {
            padding: 1em 0
        }

        .content-wrapper.pb-0 {
            padding-bottom: 0
        }

        .content-wrapper.pt-0 {
            padding-top: 0
        }

        .content-wrapper.p-0 {
            padding: 0
        }

        .content-wrapper.theme-dark {
            background: #242424;
            color: #fff
        }

        .content-wrapper.theme-dark h1,
        .content-wrapper.theme-dark h2,
        .content-wrapper.theme-dark h3,
        .content-wrapper.theme-dark h4,
        .content-wrapper.theme-dark h5,
        .content-wrapper.theme-dark h6 {
            color: #69BD45
        }

        .content-wrapper .container.narrow {
            max-width: 670px
        }

        .content-wrapper .container.semi-narrow {
            max-width: 992px
        }

        .content-wrapper ul {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .content-wrapper ul li {
            padding-left: 2em;
            position: relative
        }

        .content-wrapper ul li:before {
            background: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/dot-triangle.svg) no-repeat 0 0;
            background-size: 1em;
            content: "";
            height: 1em;
            left: 0;
            position: absolute;
            top: 0;
            width: 1em
        }

        .content-wrapper ul li:nth-child(odd):before {
            transform: rotate(-20deg)
        }

        .content-wrapper ul li:nth-child(2n+2):before {
            transform: rotate(5deg)
        }

        .break-after:after {
            content: "";
            display: block
        }

        @media (min-width:1200px) {
            .content-wrapper {
                padding: 2em 0
            }
        }

        .c-pyellow {
            color: #69BD45 !important
        }

        .c-pblack {
            color: #040404 !important
        }

        .c-pwhite {
            color: #fff !important
        }

        .c-sblack {
            color: #2d2d2d !important
        }

        .c-sgreen {
            color: #6cb676 !important
        }

        .c-scoral {
            color: #da5246 !important
        }

        .c-smagenta {
            color: #f0f !important
        }

        .c-cblack {
            color: #1d1d1d !important
        }

        .c-cdarkgrey {
            color: #979797 !important
        }

        .c-cgrey {
            color: #ccc !important
        }

        .c-clightgrey {
            color: #f7f7f7 !important
        }

        .bg-white {
            background: #fff
        }

        .bg-grey {
            background: #e8e8e8
        }

        .bg-lightgrey {
            background: #f3f3f3
        }

        .bg-dark {
            background: #242424
        }

        .alert-danger {
            background-color: inherit;
            border-color: transparent;
            color: inherit
        }

        .alert {
            border: unset;
            border-radius: unset;
            margin-bottom: unset;
            padding: unset
        }

        .contact-form {
            align-items: stretch;
            display: flex;
            flex-direction: column
        }

        .contact-form .sa-selector {
            color: #555;
            font-size: 20px;
            position: relative
        }

        .contact-form .sa-selector select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent;
            border-radius: 6px;
            height: 100%;
            padding: 0 0 0 16px;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .contact-form .sa-selector .sa-toggle {
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            padding: 9px 10px 9px 16px;
            position: relative
        }

        .contact-form .sa-selector .sa-toggle .sa-title {
            background: none;
            border: none;
            flex-grow: 0;
            inline-size: calc(100% - 3rem - 10px);
            margin-right: 10px;
            overflow-wrap: break-word
        }

        .contact-form .sa-selector .sa-toggle .sa-caret {
            align-items: center;
            background-color: #d3d3d3;
            border-radius: 3px;
            display: flex;
            flex-shrink: 0;
            justify-content: center;
            padding: 13px 12px 12px 10px
        }

        .contact-form .sa-selector .sa-toggle.focus {
            border: 1px solid #66afe9;
            outline: 0
        }

        .contact-form .sa-selector .sa-items {
            display: none
        }

        .contact-form .sa-selector.open .sa-caret {
            transform: rotate(180deg)
        }

        .contact-form .sa-selector.open .sa-toggle {
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-sizing: content-box
        }

        .contact-form .sa-selector.open .sa-items {
            background-color: #fff;
            border: 1px solid #d3d3d3;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            border-top: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin: 0;
            padding: 1rem;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .contact-form .sa-selector.open .sa-items .sa-item {
            border: 1px solid transparent;
            cursor: pointer;
            list-style-type: none;
            margin: 0;
            min-width: 100%;
            overflow-wrap: break-word;
            padding: 5px
        }

        .contact-form .sa-selector.open .sa-items .sa-item:focus {
            border: 1px solid #66afe9;
            border-radius: 6px;
            outline: 0
        }

        .contact-form .sa-selector:not([data-value]) .sa-title {
            color: #a0a0a0
        }

        .contact-form .sa-selector:not([data-value]) .sa-title.sa-title-mobile {
            color: transparent
        }

        .contact-form [name=orderid]:disabled {
            display: none
        }

        .contact-form .error-message {
            text-align: right
        }

        .contact-form .success-message {
            align-items: center;
            background-color: #d9edd3;
            border: 1px solid #b7c9b1;
            border-radius: 4px;
            color: #6b7a66;
            display: flex;
            padding: .5rem;
            position: relative
        }

        .contact-form .success-message .text {
            flex-grow: 1;
            text-align: center;
            width: calc(100% - 3rem)
        }

        .contact-form .success-message .close {
            background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/svg/close.svg);
            height: 2rem;
            margin: .5rem;
            width: 2rem
        }

        .contact-form [type=submit].sent {
            background-color: #d8d8d8;
            border-color: #c8c8c8
        }

        .ca-block .contact-form {
            font-weight: 400;
            gap: 0
        }

        .ca-block .contact-form .sa-selector {
            color: #4b4b4b;
            font-size: 18px;
            font-style: italic;
            min-height: 49px
        }

        .ca-block .contact-form .sa-selector.open .sa-items {
            border-top: none
        }

        .ca-block .contact-form .sa-selector.open .sa-items .sa-item:focus {
            border: 1px solid #229c8f
        }

        .ca-block .contact-form .sa-toggle {
            background-color: #fff
        }

        .ca-block .contact-form .sa-toggle.focus {
            border: 1px solid #229c8f;
            outline: 0
        }

        .ca-block .contact-form .sa-selector:not([data-value])>.sa-toggle>.sa-title {
            color: #8e8e8e
        }

        .ca-block .contact-form .sa-selector:not([data-value])>.sa-toggle>.sa-title.sa-title-mobile {
            color: transparent
        }

        .sticker-packs-start-wrapper {
            display: flex;
            justify-content: center
        }

        .sticker-packs-start-wrapper .sticker-packs-start {
            align-items: center;
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            margin: 0 25px;
            max-width: 1110px;
            overflow: hidden;
            padding: 0;
            text-align: center
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-packs-title {
            font-family: FuturaPT, serif;
            font-size: 40px;
            font-weight: 900;
            margin-top: 20px;
            text-align: center;
            text-overflow: clip
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-packs-text {
            font-size: 25px;
            font-weight: 400;
            margin-bottom: 20px;
            text-align: center;
            text-overflow: clip
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card {
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            margin: 0 0 30px;
            overflow: hidden;
            padding: 0;
            position: relative
        }

        @media (max-width:767px) {
            .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card {
                border-radius: 40px
            }
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-banner img {
            width: 100%
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details {
            align-items: center;
            background-color: #333;
            color: #fff;
            display: flex;
            gap: 15px;
            justify-content: space-between;
            padding: 15px 20px 15px 40px
        }

        @media (max-width:767px) {
            .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details {
                padding: 30px 35px
            }
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-name {
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons .btn {
            width: 100%
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons .sticker-pack-view {
            display: flex;
            flex: 1 0
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons .sticker-pack-view .btn {
            background-color: transparent;
            border-color: transparent;
            color: #69BD45
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons .sticker-pack-add-to-cart {
            display: flex;
            flex: 1 0
        }

        .sticker-packs-start-wrapper .sticker-packs-start .sticker-pack-card .sticker-pack-details .sticker-pack-buttons .sticker-pack-add-to-cart .btn {
            text-transform: lowercase
        }

        @media (min-width:1600px) {
            .main-wrapper {
                margin-top: 125px
            }
        }

        @media (max-width:1599px) and (min-width:992px) {
            .main-wrapper {
                margin-top: 100px
            }
        }

        @media (max-width:991px) {
            .main-wrapper {
                margin-top: 100px
            }
        }

        @media (min-width:1600px) {
            .main-wrapper-christmas-banner {
                margin-top: 175px
            }
        }

        @media (max-width:1599px) and (min-width:992px) {
            .main-wrapper-christmas-banner {
                margin-top: 150px
            }
        }

        @media (max-width:991px) {
            .main-wrapper-christmas-banner {
                margin-top: 150px
            }
        }

        h1 .btn {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif
        }

        body.stickers.view h1 {
            margin: 5px 0 0
        }

        body.stickers.view h2 {
            font-size: 22px;
            margin: 0
        }

        body.stickers.view .box p {
            margin: 10px 0 0
        }

        body.stickers .thumb {
            text-align: center
        }

        body.stickers .thumb img {
            margin: 15px auto 45px
        }

        body.info .help h1 {
            margin-bottom: 0
        }

        body.info .help h2 {
            margin-top: 0
        }

        body.info .help h3 {
            font-size: 18px;
            margin: 40px 0 5px
        }

        .container.no-padding {
            padding: 0
        }

        .single-figure-img {
            display: block;
            margin: auto
        }

        @media (max-width:767px) {
            body.start .bg-box .btn {
                width: 100%
            }

            body.start .bg-box,
            body.stickers .bg-box {
                padding: 15px 0
            }

            #start-bg {
                background-size: 585px
            }

            #start-bg .container {
                margin: 0 auto
            }

            .container {
                padding: 0 15px
            }

            .container.page-header {
                padding: 15px
            }

            .editor #logo .icon {
                margin-top: 3px
            }

            .single-figure-img {
                height: auto;
                width: 150px
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            #shape .item {
                height: 90px;
                line-height: 30px;
                padding: 0;
                text-align: center;
                width: 20%
            }

            #shape .item span {
                float: none;
                margin: 0
            }

            .editor #logo .icon {
                margin-top: 3px
            }

            .single-figure-img {
                height: auto;
                width: 200px
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .single-figure-img {
                height: auto;
                width: 200px
            }
        }

        @media (min-width:992px) {
            body.stickers a.item:hover {
                color: #000
            }
        }
    </style>


    <!-- end STYLES -->
    <script>
        window.dataLayer = window.dataLayer || [];
    </script>

    <script type="text/javascript">
        LANG = "us";
        SITE = "StickerApp";
        CHAT_IS_ON = 0;
        CHAT_LOGO = "https://d6ce0no7ktiq.cloudfront.net/images/web/logos/fc_stickerapp.png";
        IS_ROBOT = false;
        GTM_MODE = 1;
        BUILD_VERSION = "5.7.89";
        USER_ID = "";
        IS_FRONTEND = 0;
        EDITOR_JS_SRC = "https://d6ce0no7ktiq.cloudfront.net/build/5.7.89/editor.js";
        TOOLS_URL = "https://tools.stickerapp.com/stickitTools";
    </script>
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-K8DXW8V"></script>
    <style type="text/css" title="svg" media="all">
        /* Copyright 2017 Sticker App AB */

        .svgContainer {
            background-color: #f5f5f5;
        }

        .svgSheet {
            fill: none;
            stroke: none;
        }

        .svgSheet.sheet {
            fill: white;
        }

        .svgSheet.skin {}

        .svgSheet.case {}

        .svgSheet.single {}

        .svgSheetPath {
            fill: none;
            stroke: none;
            stroke-width: 2;
        }

        .svgSheetPath.sheet {
            fill: none;
            stroke: rgb(0, 0, 0);
            stroke-width: 0.5;
        }

        .svgSheetPath.skin {}

        .svgSheetPath.case {}

        .svgSheetPath.single {}

        .svgPartPath {
            fill: none;
            stroke: #ff00ff;
            stroke-width: 1;
        }

        .svgPartPathHover {
            stroke: #000;
            stroke-width: 1.1;
        }

        .svgPartPath.partImage {
            fill: none;
            stroke: none;
            stroke-width: 1;
        }

        .svgPartPathHover.partImage {
            stroke: #000;
            stroke-width: 1.1;
        }

        .svgPartBleedPath {
            fill: none;
            stroke: #0096ff;
            stroke-width: 1;
        }

        /*
body.case .svgPartPath,
body.skin .svgPartPath {
  fill: none;
	stroke: rgb(0, 150, 255);
}
body.case .svgPartBleedPath,
body.skin .svgPartBleedPath {
  fill: none;
	stroke: rgb(255,0,255);
}
*/

        .svgShadowSheet {
            display: none;
            fill: none;
            stroke: black;
            stroke-opacity: 0.5;
            stroke-width: 1;
        }

        .svgShadowPath {
            fill: none;
            stroke: black;
            stroke-opacity: 0.5;
            stroke-width: 0;
        }

        .svgShadowOverlay {
            fill: #e8e8e8;
            stroke: none;
            fill-opacity: 0.5;
        }

        .svgCollageShadowOverlay {
            fill: black;
            stroke: none;
            fill-opacity: 0.4;
        }

        .svgHover {
            stroke-width: 1px;
            fill: none;
            stroke: #000;
            cursor: pointer;
        }

        .svgHover.move {
            cursor: move;
        }

        .svgSelect {
            fill: none;
            stroke: black;
            stroke-width: 1;
            cursor: move;
        }

        .svgSelectCorner {
            fill: white;
            stroke: green;
            stroke-width: 2;
        }

        .svgSelectNW {
            cursor: nw-resize;
        }

        .svgSelectNE {
            cursor: ne-resize;
        }

        .svgSelectSE {
            cursor: se-resize;
        }

        .svgSelectSW {
            cursor: sw-resize;
        }

        .svgSelectN {
            cursor: n-resize;
        }

        .svgSelectE {
            cursor: e-resize;
        }

        .svgSelectS {
            cursor: s-resize;
        }

        .svgSelectW {
            cursor: w-resize;
        }

        .svgSelectRotate {
            /*  fill : none;*/
            /*  stroke : none; */
            cursor: e-resize;
        }

        .svgSelectRotateLine {
            stroke: #000;
            stroke-width: 1;
        }

        .svgSelectIcon {
            cursor: pointer;
        }

        .svgPartSizeText {
            fill: #000;
            font-family: sans-serif;
            pointer-events: none;
        }

        .editor.preview-on .svgPartSizeText {
            fill: #666;
        }

        .svgSheetSizeText {
            fill: #000;
            font-size: 20px;
            font-family: sans-serif;
            pointer-events: none;
        }

        .svgIcon {
            stroke: none;
            stroke-width: 2px;
            fill: #363636;
        }

        .svgIcon:hover {
            fill: #000;
        }

        .svgIconRound {
            padding: 12.5px;
        }

        .svgIconRect {
            padding: 25px;
            border-radius: 25px;
        }

        .svgIconMenu {
            stroke: none;
            stroke-width: 2px;
            fill: #363636;
            padding: 35px;
            border-radius: 25px;
            margin-left: 35px;
            margin-top: 30px;
        }

        .svgIconMenu:hover {
            fill: #000;
        }

        .svgIconMenuTouch {
            stroke: none;
            fill: #363636;
            padding: 35px;
            border-radius: 25px;
            margin-left: 40px;
            margin-top: 32px;
        }

        .svgCollagePath {
            fill: none;
            stroke: grey;
            stroke-width: 0.5px;
        }

        .svgCollagePath.drag {
            fill: none;
            stroke: black;
            stroke-width: 1px;
        }

        .svgCollagePath.drop {
            fill: none;
            stroke: black;
            stroke-width: 1px;
        }
    </style>
    <script src="https://bat.bing.com/p/action/26345997.js" type="text/javascript" async="" data-ueto="ueto_0dad94fc46"></script>
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/939789830/?random=1647249447490&amp;cv=9&amp;fst=1647249447490&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=17&amp;u_tz=60&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2wg370&amp;sendb=1&amp;ig=0&amp;frm=0&amp;url=https%3A%2F%2Fstickerapp.com%2Feditor%2Fedit%2Fnew%2Fsingle%2Frounded%2F0%2F200%2F51%2F25%2Fglossy_coated&amp;tiba=Custom%20stickers%20-%20StickerApp&amp;hn=www.google.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script>
    <?php wp_head(); ?>
</head>


<body class="editor single">

<textarea id="sk-content"><?php
                                $cart_key = $_GET['cart_key'] ?? '';
                                $order_id = $_GET['order_id'] ?? '0';
                                $cart_item = WC()->cart->get_cart_item($cart_key);
                                $order = wc_get_order($order_id);
                                if (isset($cart_item['content'])) {
                                    echo stripslashes($cart_item['content']);
                                } elseif ($order) {
                                    $item = new WC_Order_Item_Product($_GET['order_item_id']);
                                    if ($item) {
                                        echo $item->get_meta('content',true);
                                    }
                                }
                                ?></textarea>

    <div class="main-wrapper">

        <div id="wrapper">
            <!-- <div id="connection-error" class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Connection error</h4>
				</div>
				<div class="modal-body">
					<p>Please check your internet connection, try again or reload the page.</p>
					<p>If you got this message while uploading a image, try again or try another image.</p>
					<p>If this doesnt help, please try again later or <a href="https://stickerapp.com/contact-us">contact us</a> and we will help you. Thank you.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->
            <div id="overlay" style="display:none">
                <div>
                    <svg class="radial-loader" data-mode="buffer" width="80" height="80">
                        <circle class="radial-loader__circle" stroke="#fff" stroke-width="3" fill="transparent" r="20" cx="40" cy="40" style="stroke-dasharray: 6 6.5;"></circle>
                        <circle class="radial-loader__circle-path" stroke="rgba(255,255,255,.2)" stroke-width="3" fill="transparent" r="20" cx="40" cy="40"></circle>
                    </svg>
                </div>
            </div>


            <!-- <div class="navbar stickerapp-nav hidden" style="display:none;" role="navigation">

                <div class="f-row nav-row f-align-items-center hidden-xs hidden-sm">
                    <ul class="nav navbar-nav navbar-left primary-nav f-row f-space-around ">
                        <li>
                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Custom stickers</a>
                        </li>

                        <li>
                            <a href="https://stickerapp.com/materials">Materials</a>
                        </li>
                        <li>
                            <a href="https://stickerapp.com/reorder">Reorder</a>
                        </li>
                    </ul>

                    <!-- <a href="https://stickerapp.com/" class="navbar-brand stickerapp-brand">
                        <span class="icon logo stickerapp-logo"></span>
                        <span class="invisible-text">Home</span>
                    </a> -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://stickerapp.com/checkout" class="navbar-cart hidden-md hidden-lg">
                        <i class="icon-cart"></i>
                        <span class="cart-counter">0</span>
                    </a>
                    <ul class="nav navbar-nav navbar-right  f-row f-space-around">
                        <li>
                            <a href="https://stickerapp.com/custom-stickers/popular">Sticker library</a>
                        </li>
                        <li>
                            <a href="https://stickerapp.com/support">
                                Support </a>
                        </li>
                        <li class="nav-tools">
                            <div class="account ">
                                <a href="#modal-login" data-target="#modal-login" data-toggle="modal">
                                    <i class="icon-user"></i>
                                    <span class="invisible-text">Account</span>
                                </a>
                            </div>

                            <div class="cart ">
                                <a href="https://stickerapp.com/checkout">
                                    <i class="icon-cart"></i>
                                    <span class="invisible-text">Checkout </span>
                                    <span class="cart-counter">0</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!--KEEP FOR MOBILE-->
                <div class="container hidden-md hidden-lg nav-mobile-container" style="display:none">
                    <div class="navbar-header stickerapp-nav-mobile">

                        <button id="nav-mobile-menu-btn" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false" aria-label="Dropdown navigation menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="https://stickerapp.com/" class="navbar-brand stickerapp-brand">
                            <span class="icon logo stickerapp-logo"></span>

                            <span class="invisible-text">Home</span>
                        </a>

                        <a href="https://stickerapp.com/checkout" class="navbar-cart hidden-md hidden-lg">
                            <i class="icon-cart"></i>
                            <span class="cart-counter">0</span>
                        </a>

                    </div>
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <!--NAVBAR LINKS START (Keep for mobile)-->
                        <ul class="nav navbar-nav primary-nav">
                            <li>
                                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Custom stickers</a>
                            </li>
                            <li>
                                <a href="https://stickerapp.com/custom-stickers/popular">Sticker library</a>
                            </li>
                            <li>
                                <a href="https://stickerapp.com/materials">Materials</a>
                            </li>
                            <li>
                                <a href="https://stickerapp.com/reorder">Reorder</a>
                            </li>
                            <li class="hidden-md hidden-lg ">
                                <a href="https://stickerapp.com/support">
                                    Support </a>
                            </li>
                            <li class=" hidden-md hidden-lg">
                                <a href="#modal-login" data-target="#modal-login" data-toggle="modal">
                                    Account </a>
                            </li>
                        </ul>
                        <!--NAVBAR LINKS END-->


                        <!--SUPPROT/CART START-->
                        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm secondary-nav">
                            <li>
                                <a href="https://stickerapp.com/support">
                                    Support </a>
                            </li>
                            <li class="account ">
                                <a href="#modal-login" data-target="#modal-login" data-toggle="modal">
                                    <i class="icon-user"></i>
                                </a>
                            </li>
                            <li class="cart ">
                                <a href="https://stickerapp.com/checkout">
                                    <i class="icon-cart"></i>
                                    <span class="cart-counter">0</span>
                                </a>
                            </li>
                        </ul>
                        <!--SUPPRT/CART END-->
                    </div>

                </div>
            </div> -->



            <div class="editor preview-on editor-body-page single editor-ask-before-exit has-size-selector has-quantity-selector-enabled has-price-shown has-no-parts-selector has-material-selector has-title has-note-enabled editor-orientation-landscape editor-size-lg zoomed state-tool-open" data-size="auto" id="editor-1" style="top:1px;">
                <textarea class="nodisplay">{
    "editor": {
        "container": "editor",
        "preserveAspectRatio": "xMidYMid meet",
        "px2mm": 2.83465,
        "manualMargin": "8 8 8 8 8 8 8 8",
        "noZoom": false,
        "zoomDelay": 2,
        "zoomSteps": 10,
        "imperial": true,
        "extraCopy": false,
        "min_size": 25,
        "max_size": 1219.1999999999998,
        "mode": "part",
        "lang": "us",
        "title": "Custom stickers",
        "materialPresets": [
            {
                "materialPresetName": "glossy_coated",
                "materialName": "arlon",
                "laminateName": "glossy",
                "minSize": "30",
                "maxSize": "1250",
                "inStock": true,
                "title": "Stickers",
                "label": "Bestseller",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "holographic",
                "materialName": "holographic_pp_laser",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Holographic stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "glow_in_the_dark",
                "materialName": "glow_in_the_dark",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": false,
                "title": "Glow in the dark stickers",
                "label": "Out of stock",
                "labelType": "warning",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "glitter",
                "materialName": "glitter",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Glitter stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "transparent",
                "materialName": "t_pp_thick",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Clear stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "mirror",
                "materialName": "mirror_thick_laser",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Mirror stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "prismatic",
                "materialName": "prismatic_pp_laser",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Prismatic stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "satin_matte_laser",
                "materialName": "w_pp_thick",
                "laminateName": "soft_touch",
                "minSize": "20",
                "maxSize": "289",
                "inStock": true,
                "title": "Matte stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "borstad_alu",
                "materialName": "borstad_alu_laser",
                "laminateName": "uv_gloss_pet",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Brushed aluminum",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "heavy_duty",
                "materialName": "hi_tack_digi",
                "laminateName": "12_mil_heavy_duty",
                "minSize": "30",
                "maxSize": "1250",
                "inStock": true,
                "title": "Heavy duty stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "kraft_paper",
                "materialName": "kraft_paper",
                "laminateName": "",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Kraft paper stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "removable_laser",
                "materialName": "removable",
                "laminateName": "uv_gloss_pet",
                "minSize": "20",
                "maxSize": "289",
                "inStock": true,
                "title": "Removable stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "wall_sticker",
                "materialName": "wall_sticker_geckotex",
                "laminateName": "",
                "minSize": "150",
                "maxSize": "1250",
                "inStock": true,
                "title": "Wall stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "floor_sticker",
                "materialName": "floor_sticker",
                "laminateName": "sandy",
                "minSize": "150",
                "maxSize": "1250",
                "inStock": true,
                "title": "Floor stickers",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "white_custom_labels",
                "materialName": "white_label",
                "laminateName": "gloss",
                "minSize": "20",
                "maxSize": "289",
                "inStock": true,
                "title": "White custom labels (on sheets)",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            },
            {
                "materialPresetName": "clear_custom_labels",
                "materialName": "clear_label",
                "laminateName": "gloss",
                "minSize": "30",
                "maxSize": "289",
                "inStock": true,
                "title": "Clear custom labels (on sheets)",
                "labelType": "success",
                "iconThumbURL": "https:\/\/d6ce0no7ktiq.cloudfront.net\/images\/web\/sprites\/material-sprite.png?ver=2"
            }
        ],
        "materialPresetsSelectorEnabled": true,
        "clipartSelectorEnabled": true,
        "uploadEnabled": true,
        "textSelectorEnabled": true,
        "backgroundSelectorEnabled": true,
        "cuttinglineSelectorEnabled": true,
        "stickersSelectorEnabled": false,
        "collageSelectorEnabled": false,
        "noteButtonEnabled": true,
        "templatesToolEnabled": false,
        "templateTypesToolEnabled": false,
        "backPrintToolEnabled": true,
        "backPrintDealToolEnabled": false,
        "helpers": [],
        "postURL": "\/editor\/save",
        "incVAT": true,
        "askBeforeExit": true,
        "collages": [],
        "toolbar": true,
        "isAdmin": false,
        "site": "stickerapp",
        "isCartFull": false,
        "sizeOptions": [
            [
                51,
                25
            ],
            [
                51,
                51
            ],
            [
                76,
                51
            ],
            [
                76,
                76
            ],
            [
                102,
                76
            ],
            [
                102,
                102
            ],
            [
                127,
                51
            ],
            [
                127,
                76
            ],
            [
                203,
                102
            ]
        ],
        "quantityAndPriceOptions": [
            {
                "price": "$26",
                "quantity": 111,
                "quantityFormatted": "111 pcs",
                "save": 0,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$46",
                "quantity": 200,
                "quantityFormatted": "200 pcs",
                "save": 0,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$70",
                "quantity": 300,
                "quantityFormatted": "300 pcs",
                "save": 0,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$78",
                "quantity": 500,
                "quantityFormatted": "500 pcs",
                "save": 33,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$94",
                "quantity": 600,
                "quantityFormatted": "600 pcs",
                "save": 33,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$100",
                "quantity": 900,
                "quantityFormatted": "900 pcs",
                "save": 53,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$134",
                "quantity": 1200,
                "quantityFormatted": "1,200 pcs",
                "save": 52,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$167",
                "quantity": 1500,
                "quantityFormatted": "1,500 pcs",
                "save": 52,
                "laser_save": "",
                "laser_price": ""
            },
            {
                "price": "$191",
                "quantity": 2000,
                "quantityFormatted": "2,000 pcs",
                "save": 59,
                "laser_save": "",
                "laser_price": ""
            }
        ],
        "backgroundMaterials": [
            "t_pp_thick",
            "borstad_alu_laser",
            "mirror_thick_laser",
            "transparent",
            "kraft_paper",
            "holographic_pp_laser",
            "glitter",
            "prismatic",
            "glow_in_the_dark"
        ],
        "backPrintMaterialPresets": [
            {
                "id": "8",
                "preset_name": "glossy_white_uv",
                "lang": "us",
                "price_percentage": "25",
                "price_minimum": "11",
                "allow_backprint": "1",
                "allow_admin_only": "0"
            },
            {
                "id": "43",
                "preset_name": "transparent",
                "lang": "us",
                "price_percentage": "25",
                "price_minimum": "11",
                "allow_backprint": "1",
                "allow_admin_only": "0"
            },
            {
                "id": "64",
                "preset_name": "holographic",
                "lang": "us",
                "price_percentage": "20",
                "price_minimum": "11",
                "allow_backprint": "1",
                "allow_admin_only": "0"
            },
            {
                "id": "85",
                "preset_name": "mirror",
                "lang": "us",
                "price_percentage": "20",
                "price_minimum": "11",
                "allow_backprint": "1",
                "allow_admin_only": "0"
            }
        ],
        "useDimensionTypeSVG": false,
        "effectLayerToolEnabled": true,
        "effectLayerToolMaterialPresets": [
            "holographic",
            "mirror",
            "glitter",
            "prismatic",
            "borstad_alu"
        ],
        "preCheckoutModalActive": true,
        "fileAppEnabled": false
    },
    "sheet": {
        "design_id": 0,
        "width": <?php echo get_sticker_board_width($_GET['width']); ?>,
        "height": <?php echo get_sticker_board_height($_GET['height']); ?>,
        "sheet_type": "single",
        "pricePaperbackPrint": "$0",
        "priceFrontPrint": "$<?php echo $_GET['price']; ?>",
        "materialPresetName": "glossy_coated",
        "sheet_name": "rounded",
        "quantity": "<?php echo $_GET["quantity"];  ?>",
        "min_quantity": 111,
        "price": "23\u00a2",
        "total": "$<?php echo $_GET['price']; ?>",
        "material": "arlon",
        "laminate": "glossy",
        "lock_parts": false,
        "totalUnformatted": <?php echo $_GET['price']; ?>,
        "meta": {
            "BACKPRINT_MODIFIED": false,
            "BACKPRINT_DEAL_ENABLED": false
        }
    },
    "language": {
        "unload_warning": "Your changes were not saved, are you sure you want to continue?",
        "dpi_ok": "The image resolution is average. Printing result may not be satisfying.",
        "dpi_bad": "The image's resolution is bad, please make it smaller or use a bigger image.",
        "too_many_images": "The pictures that did not fit were removed",
        "too_many_images_for_collage": "The pictures that did not fit were removed",
        "select_image": "Select image",
        "cm": "\"",
        "editor_image_error": "Unable to upload your picture.  Please try again.",
        "mime_type_error": "Problems uploading, try again or use another file type. We support PDF, PNG, JPG, AI, PSD, SVG,  BMP, TIF and even GIF.",
        "file_size_error": "File too big, maximum size is 1gb.",
        "empty_sheet": "Clear this sheet?",
        "saveButtonText": "Save",
        "no_collage": "No collage",
        "sticker_empty": "Your sticker is blank.  Add an image or text and try again.",
        "change_template_collage_warning": "Warning! Your collage will be deleted if you change model.",
        "we_check_all_orders": "Note: Our team checks every order before production to ensure quality prints. Please let us know if you have any questions or concerns.",
        "done": "Done",
        "paper_backprint": "Back Paper print",
        "addToCartText": "Add to cart",
        "incl_paperback_print": "Incl. Back Paper design",
        "incl_paperback_print_deal": "Incl. Back Paper deal",
        "custom_sticker": "Custom_sticker",
        "paper_backprint_deal": "Back Paper deal",
        "sticker_is_too_big_for_backprint_warning_text": "You took it a little too far. Change the size back to 10.6\u201d or less to keep your Back Paper design.",
        "sticker_is_too_big_for_backprint_warning_title": "Whoa. Too big\u2026",
        "backprint_material_warning_title": "Bad news\u2026",
        "backprint_material_warning_text": "This material isn\u2019t compatible with Back Paper print. Change it back to White Vinyl to keep your Back Paper design.",
        "are_you_sure_you_want_to_continue": "Hold up. You\u2019re about to discard all your hard work. Are you sure you want to continue?",
        "remove_paper_back_print": "Remove Back Paper design",
        "nothing_to_remove_backprint_text": "There\u2019s no back paper design to remove",
        "nothing_to_remove": "Nothing here\u2026",
        "effect_layer_too_many_images": "Please select only one file",
        "effect_layer_not_supported_for_material": "Effect layer not supported for selected material",
        "effect_layer_added": "Effect layer added"
    },
    "parts": [
        {
            "part_id": "svg_1647249440",
            "cuttingline": "<?php
                $cart_key = $_GET['cart_key'] ?? '';
                $order_id = $_GET['order_id'] ?? '0';
                $cart_item = WC()->cart->get_cart_item($cart_key);
                $order = wc_get_order($order_id);
                if (isset($cart_item['cutting_line'])) {
                    echo stripslashes($cart_item['cutting_line']);
                } elseif ($order) {
                    $item = new WC_Order_Item_Product($_GET['order_item_id']);
                    if ($item) {
                        echo stripslashes($item->get_meta('cutting_line',true));
                    }
                }
                ?>",
            "background": "#FFFFFF",
            "part_type": "<?php if ($_GET['shape'] == "circle") echo "round"; elseif ($_GET['shape'] == "rounded") echo 'rect'; else echo $_GET['shape']; ?>",
            "cornersRadius": <?php echo ($_GET['shape'] == "rounded") ? "30" : "0"; ?>,
            "width": "<?php echo get_sticker_board_width($_GET['width']); ?>",
            "height": "<?php echo get_sticker_board_height($_GET['height']); ?>",
            "svg": "<?php
                                $cart_key = $_GET['cart_key'] ?? '';
                                $order_id = $_GET['order_id'] ?? '0';
                                $cart_item = WC()->cart->get_cart_item($cart_key);
                                $order = wc_get_order($order_id);
                                if (isset($cart_item['st_svg'])) {
                                    echo stripslashes($cart_item['st_svg']);
                                } elseif ($order) {
                                    $item = new WC_Order_Item_Product($_GET['order_item_id']);
                                    if ($item) {
                                        echo stripslashes($item->get_meta('st_svg',true));
                                    }
                                }
                                ?>",
            "meta": {
                "SIDE": "front"
            },
            "side": "front"
        },
        {
            "part_id": "svg_1647249440_backprint",
            "part_type": "back_print",
            "resizeable": false,
            "aspectchangable": false,
            "meta": {
                "SIDE": "back"
            },
            "side": "back"
        }
    ],
    "ui": []
}</textarea>
                <section class="editor-notifications no-text-select"></section>


                <div class="editor-header f-row f-wrap-no">

                    <a class="f-col btn btn-home cta hidden-landscape" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                        cancel </a>

                    <div class="f-col-9 hidden-portrait justify-content-between">
                        <h4 class="text-ellipsis modal-title h4">Custom stickers</h4>
                        <div class="tool tool-backside-print-remove hidden">
                            <button id="backside-print-remove-button" class="btn btn-remove">Remove</button>
                        </div>
                    </div>

                    <div class="f-col-6 price text-center hidden-landscape">
                        <div class="amount summary-total price animated fadeIn">$<?php echo $_GET['price']; ?></div>
                        <label class="control-label backprint_price_portrait hidden"> <span class="paperback_description"></span> <span class="paper_back_amount"></span></label>
                    </div>
                    <div class="f-col cta save-mobile text-right f-justify-end hidden-landscape" disabled="disabled">
                        <?php if (($_GET['edit_type'] ?? 'new') != 'admin_show') { ?>
                                <span class="btn btn-success"><i class="icon-cart"></i>Save</span>
                        <?php } ?>
                    </div>
                    <div class="f-col cta text-right f-justify-end hidden-landscape btn-save-sticker">
                        <span class="btn">Done</span>
                    </div>
                    <div class="f-col cta text-right f-justify-end hidden-landscape btn-save-case">
                        <span class="btn">Done</span>
                    </div>
                    <div class="f-col cta text-right f-justify-end hidden-landscape btn-save-skin">
                        <span class="btn">Done</span>
                    </div>
                </div>
                <div class="tool-pane state-tool-open" data-tool="upload">
                    <!-- .panel-tools -->
                    <div class="panel panel-tools-overview f-row f-grid">
                        <div class="tool-bar f-row">
                            <div class="tool tool-close f-row f-align-items-center f-justify-center hidden-portrait" data-backhref="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                                <label class="control-label">CLOSE <i class="glyphicon glyphicon-remove" aria-hidden="true"></i></label>
                            </div>


                            <div class="tool tool-upload cta active" style="position: relative;" data-title="Click here to upload an image" data-tool-content=".tool-content-upload">
                                <span class="glyphicon glyphicon-info-sign tool-notification hidden"></span>
                                <i></i>
                                <label class="control-label">Upload file</label>

                                <div class="progress hidden" style="margin:0;height:15px;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                </div>
                            </div>
                            <div class="tool tool-stickers cta hidden" data-tool-content=".tool-content-stickers">
                                <i></i>
                                <label class="control-label">Stickers</label>
                            </div>
                            <div class="tool tool-collage cta hidden" data-tool-content=".tool-content-collage">
                                <i></i>
                                <label class="control-label">Collage</label>
                            </div>
                            <div class="tool tool-cutline hidden-sheet cta" data-tool-content=".tool-content-cutline" data-has-tooltip="false">
                                <i class=""></i>
                                <label class="control-label">Cutline</label>
                            </div>
                            <!-- <div class="tool tool-material-preset hidden-portrait hidden-sheet cta" data-tool-content=".tool-content-material-preset" data-original-title="" title="">
                                <i class=""></i>
                                <label class="control-label">Material</label>
                            </div> -->
                            <div class="tool tool-text cta" data-tool-content=".tool-content-text">
                                <i class="glyphicon"></i>
                                <label class="control-label">Insert text</label>
                            </div>
                            <div class="tool tool-background cta hidden-sheet" data-tool-content=".tool-content-background">
                                <i>
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
                                        <g>
                                            <path class="st0" d="M68.1,23.7h-50c-0.9,0-1.7-0.8-1.7-1.7v-0.2c0-0.9,0.8-1.7,1.7-1.7h50c0.9,0,1.7,0.8,1.7,1.7V22
		C69.8,22.9,69,23.7,68.1,23.7z"></path>
                                            <path class="st1" d="M12.2,18.9H12c-1.1,0-1.9-0.9-1.9-1.9v-6.9c0-1.1,0.9-1.9,1.9-1.9h0.2c1.1,0,1.9,0.9,1.9,1.9V17
		C14.1,18.1,13.3,18.9,12.2,18.9z"></path>
                                            <path class="st1" d="M73.9,18.9h-0.2c-1.1,0-1.9-0.9-1.9-1.9v-6.9c0-1.1,0.9-1.9,1.9-1.9h0.2c1.1,0,1.9,0.9,1.9,1.9V17
		C75.8,18.1,74.9,18.9,73.9,18.9z"></path>
                                            <path class="st1" d="M37.9,44.4v-0.2c0-1.1,0.9-1.9,1.9-1.9h6.9c1.1,0,1.9,0.9,1.9,1.9v0.2c0,1.1-0.9,1.9-1.9,1.9h-6.9
		C38.8,46.3,37.9,45.5,37.9,44.4z"></path>
                                            <path class="st2" d="M43.5,78.3L43.5,78.3c-3,0-5.5-2.5-5.5-5.5V49.2c0-3,2.5-2.6,5.5-2.6h0c3,0,5.5-0.4,5.5,2.6v23.5
		C49,75.8,46.5,78.3,43.5,78.3z"></path>
                                            <path class="st3" d="M73.5,6.9l-0.2-1.4c0-3-2.4-5.4-5.4-5.4H18.2c-3,0-5.4,2.4-5.4,5.4v1.4h-0.2c-2.2,0-4,1.9-4,4.2v1.4
		c-3,0-5.4,2.4-5.4,5.4v11c0,3,2.4,5.4,5.4,5.4H39c1.6,0,2.9,1.3,2.9,2.9v2.9h-1.4c-2.2,0-4,1.8-4,4v29c0,3.8,3,6.9,6.9,6.9
		s6.9-3,6.9-6.9v-29c0-2.2-1.8-4-4-4h-1.4v-2.9c0-3-2.4-5.4-5.4-5.4H8.9C7.3,31.9,6,30.6,6,29v-11c0-1.6,1.3-2.9,2.9-2.9H9v1.4
		c0,2.2,1.8,4,4,4h0.2v1.4c0,3,2.4,5.4,5.4,5.4h49.3c3,0,5.4-2.4,5.4-5.4v-1.4h0.2c2.2,0,4-1.8,4-4v-5.4C77.5,8.8,75.7,6.9,73.5,6.9
		z M47.4,73.1c-0.2,2.4-2.1,4.3-4.3,4.3c-2.4,0-4.2-1.9-4.2-4.2V48.2h8.5V73.1z M45.8,42.7c0.8,0,1.4,0.6,1.4,1.4v1.4h-8.5v-1.4
		c0-0.8,0.6-1.4,1.4-1.4H45.8z M12.6,17.9c-0.8,0-1.4-0.6-1.4-1.4v-5.4c0-0.8,0.6-1.4,1.4-1.4h0.2L12.6,17.9z M70.8,22.1
		c0,1.6-1.3,2.9-2.9,2.9H18.2c-1.6,0-2.9-1.3-2.9-2.9V5.5c0-1.6,1.3-2.9,2.9-2.9h49.7c1.6,0,2.9,1.3,2.9,2.9V22.1z M74.9,16.5
		c0,0.8-0.6,1.4-1.4,1.4h-0.2V9.5h0.2c0.8,0,1.4,0.6,1.4,1.4V16.5z"></path>
                                            <g>
                                                <g>
                                                    <path class="st4 color-preview" d="M60.3,47.1c-0.7,0-1.3-0.3-1.9-0.9c-1-1.1-1.6-3-1.5-5.1c0.1-0.9,0.1-1.6,0.2-2.3c0.2-1.9,0.4-3.8,0.1-8.8
				c-0.2-2.2-0.6-4.1-0.9-4.9c-0.9-2.7-3.6-7.7-5.1-7.7c-0.4,0-0.7,0.4-1,1.1c-1.3,3.1-2.3,4.3-3.5,4.3c-1.5,0-2.9-2.1-4.8-5.6
				c-0.3-0.6-0.5-0.9-0.6-1c-0.1,0.2-0.2,0.6-0.2,0.9c-0.2,1.1-0.6,2.6-1.7,2.6c-0.5,0-1.1-0.3-1.7-1c-2.2-2.2-4.3-3.3-6.4-3.3
				c-2.1,0-3.4,1.2-3.5,1.2l-0.1,0.1l-0.1,0c-0.6,0.3-0.8,1.4-1,2.4c-0.2,1.3-0.5,2.8-1.9,2.8c-0.6,0-1.3-0.3-2.3-1
				c-3.2-2.4-5.9-2.8-7.2-2.8l-0.5,0V5.5c0-1.9,1.5-3.4,3.4-3.4h49.7c1.9,0,3.4,1.5,3.4,3.4v16.6c0,0,0,2.9-0.5,6.3
				c-0.4,2.9-2.5,8.4-5,8.4l0,0c-0.2,0-0.4,0-0.6-0.1c-3.5-1.5-2.6-6.4-2.1-9.4l0.4-2.4c0.2-1.4,0.4-2.9,0.1-3.6
				c-0.3-0.6-0.5-0.8-0.7-0.8c-0.5,0-1.4,1.6-1.5,3.2c-0.4,4.9,1.3,16,1.3,16.1c0.3,2.9-0.1,5.5-1.1,6.6
				C61.3,46.9,60.8,47.1,60.3,47.1z"></path>
                                                    <path class="st3" d="M67.9,2.6c1.6,0,2.9,1.3,2.9,2.9v16.6c0,0,0,2.8-0.5,6.2c-0.5,3.2-2.6,8-4.5,8c-0.1,0-0.3,0-0.4-0.1
				c-2.9-1.3-2.4-5.3-1.8-8.9L64,25c0.3-1.7,0.4-3.1,0.1-3.9c-0.4-0.8-0.8-1.1-1.1-1.1c-1,0-1.9,2-2,3.7c-0.4,5,1.3,16.2,1.3,16.2
				c0.4,3.5-0.3,6.7-1.9,6.7c-1.5,0-3-2.2-2.8-5.4c0.2-3.3,0.7-4.2,0.3-11.2c-0.1-2.1-0.6-4.1-0.9-5c-0.8-2.4-3.6-8-5.6-8
				c-0.6,0-1.1,0.4-1.5,1.4c-1.1,2.7-2,4-3,4c-1.2,0-2.5-1.9-4.4-5.4c-0.5-1-0.9-1.4-1.2-1.4c-0.8,0-0.5,3.6-1.9,3.6
				c-0.3,0-0.8-0.2-1.3-0.8c-2.7-2.7-5-3.4-6.8-3.4c-2.4,0-3.8,1.3-3.8,1.3c-1.8,0.8-0.8,5.2-2.6,5.2c-0.5,0-1.1-0.3-2-0.9
				c-3.3-2.4-6-2.9-7.5-2.9V5.5c0-1.6,1.3-2.9,2.9-2.9H67.9 M67.9,1.6H18.2c-2.1,0-3.9,1.7-3.9,3.9v12.2v1l1,0
				c1.3,0,3.8,0.5,6.9,2.7c1,0.8,1.8,1.1,2.6,1.1c1.8,0,2.1-1.9,2.4-3.2c0.1-0.8,0.3-1.9,0.7-2.1l0.1-0.1L28,17c0,0,1.2-1.1,3.1-1.1
				c2,0,4,1.1,6.1,3.1c0.8,0.8,1.4,1.1,2.1,1.1c1.5,0,1.9-1.5,2.2-2.7c2,3.8,3.5,5.9,5.3,5.9c1.7,0,2.8-1.9,4-4.6
				c0.2-0.6,0.5-0.8,0.5-0.8c1,0,3.5,4,4.7,7.3c0.3,0.8,0.7,2.6,0.9,4.7c0.3,5,0.2,6.8-0.1,8.8c-0.1,0.7-0.2,1.4-0.2,2.3
				c-0.1,2.2,0.4,4.2,1.6,5.4c0.7,0.7,1.5,1.1,2.3,1.1c0.4,0,1.1-0.1,1.7-0.8c1.3-1.4,1.5-4.6,1.2-7c0-0.1-0.4-2.5-0.7-5.5
				c0.4,1.2,1.2,2.3,2.5,2.9c0.3,0.1,0.5,0.2,0.8,0.2c3,0,5.1-6.3,5.4-8.9c0.5-3.4,0.5-6.2,0.5-6.3l0-16.6C71.8,3.3,70,1.6,67.9,1.6
				L67.9,1.6z M62.1,30.9c-0.2-2.7-0.4-5.3-0.2-7.2c0.1-1.2,0.7-2.4,1-2.7c0.1,0.1,0.2,0.2,0.3,0.4c0.3,0.6,0,2.5-0.1,3.3l-0.4,2.4
				C62.4,28.3,62.2,29.6,62.1,30.9L62.1,30.9z"></path>
                                                </g>
                                            </g>
                                            <path class="st5" d="M44.5,73.8L44.5,73.8c-0.6,0-1.1-0.4-1.1-1V51.6c0-0.5,0.4-1,1-1h0.1c0.5,0,1,0.4,1,1v21.3
		C45.5,73.4,45.1,73.8,44.5,73.8z"></path>
                                        </g>
                                    </svg>

                                </i>
                                <label class="control-label">Background</label>
                            </div>
                            <div class="tool tool-cliparts cta hidden-sheet" data-tool-content=".tool-content-cliparts">
                                <i></i>
                                <label class="control-label">Cliparts</label>
                            </div>
                            <div class="tool tool-fill-sheet cta visible-sheet disabled hidden ">
                                <i></i>
                                <label class="control-label">Fill sheet</label>
                            </div>
                            <div class="tool tool-empty-sheet cta visible-sheet hidden" data-confirm-text="Clear this sheet">
                                <i></i>
                                <label class="control-label">Clear this sheet</label>
                            </div>
                        </div>

                        <div style="width: 100%;" class="f-col-12 cta tool tool-note f-justify-end" data-tool-content=".tool-content-note" data-original-title="" title="">
                            <div class="f-col-11">
                                <div class="content text-ellipsis">
                                    <label class="control-label" style="margin-bottom:0;">Message</label>
                                    <span class="no-preview">Add a comment</span>
                                    <span class="preview"></span>
                                </div>
                            </div>
                            <div class="f-col-1">
                                <i class="icon-talk-bubble"></i>
                            </div>
                        </div>

                        <div class="f-col-12 cta tool tool-template hidden" data-tool-content=".tool-content-template" style="border-right:0;" data-original-title="" title="">
                            <div class="content">
                                <label class="control-label">Die cut stickers</label>
                                <div class="value text-ellipsis template-title">
                                </div>
                            </div>
                            <div class="action">
                                <i class="icon-forward"></i>
                            </div>
                        </div>

                        <div class="f-col-12 cta tool tool-template-type hidden" data-tool-content=".tool-content-template-type" style="border-bottom:0" data-original-title="" title="">
                            <div class="content">
                                <label class="control-label">Type</label>
                                <div class="value text-ellipsis template-type-title">
                                    Slim <i class="icon-drop-up hidden-xs"></i>
                                </div>
                            </div>
                            <div class="action">
                                <i class="icon-forward visible-xs"></i>
                            </div>
                        </div>

                        <div class="f-col-12 cta tool hidden-landscape tool-material-preset" data-tool-content=".tool-content-material-preset" data-placement="auto top" style="border-right:0; display: none;" data-original-title="" title="">
                            <div class="content">
                                <label class="control-label">Material</label>
                                <div class="value text-ellipsis">
                                    Stickers <i class="icon-drop-up"></i>
                                </div>
                            </div>
                            <div class="action">
                                <i class="icon-forward"></i>
                            </div>
                        </div>

                        <div class="f-col-12 tool tool-parts editor-toolpane-parts hidden">
                            <div class="btn-group">
                                <a href="#!" data-id="front" class="btn btn-default btn-sm">Front</a>
                                <a href="#!" data-id="back" class="btn btn-default btn-sm active">Back</a>
                            </div>
                        </div>

                        <div class="f-row f-grid tool tool-size">
                            <div class="f-col">
                                <div class="content input">
                                    <label class="control-label" for="23622287354101422">
                                        Width <small>"</small>
                                    </label>
                                    <input type="number" class="summary-width" step="1" min="1" max="48" data-title="Enter value between $1 and $2" data-toggle="tooltip" data-placement="left" data-trigger="manual" data-container="#editor-1" data-original-title="" value="<?php echo $_GET["width"];  ?>" title="" id="23622287354101422" old="<?php echo $_GET["width"];  ?>">
                                </div>
                            </div>

                            <div class="f-col">
                                <div class="content input">
                                    <label class="control-label" for="34879856609131843">
                                        Height <small>"</small>
                                    </label>
                                    <input type="number" class="summary-height" step="1" min="1" max="48" data-title="Enter value between $1 and $2" data-toggle="tooltip" data-placement="left" data-trigger="manual" data-container="#editor-1" value="<?php echo $_GET["height"];  ?>" data-original-title="" title="" id="34879856609131843" old="<?php echo $_GET["height"];  ?>">
                                </div>
                            </div>

                            <div class="f-col cta tool tool-quantity " data-tool-content=".tool-content-quantity">
                                <div class="content input">
                                    <label class="control-label" for="4398860117280051">Quantity</label>
                                    <input value="<?php echo $_GET["quantity"];  ?>" type="number" class="summary-quantity hidden" min="111" step="1" data-title="Lowest value is $1" data-toggle="tooltip" data-placement="left" data-trigger="manual" data-original-title="" title="" old="<?php echo $_GET["quantity"];  ?>" id="4398860117280051">
                                    <input value="<?php echo $_GET["quantity"];  ?>" type="text" class="" min="111" step="1" data-title="Lowest value is $1" data-toggle="tooltip" data-placement="left" data-trigger="manual" data-original-title="" title="" old="<?php echo $_GET["quantity"];  ?>" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .panel-tools -->

                    <!-- .panel-tool-content -->

                    <!--Mobile remove backsideprint-->
                    <div class="tool tool-backside-print-remove hidden hidden-landscape">
                        <h6 class="margin-top-sm margin-bottom-sm">Back Paper print</h6>
                        <button class="btn btn-remove">Remove</button>
                    </div>

                    <div class="panel panel-tool-content" style="height: 0px;">
                        <div class="tool-content tool-content-material-preset hidden">
                            <div class="tool-content-header hidden-landscape">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <h6 class="text-ellipsis tool-content-title">Materials</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body f-row">
                                <div class="w-12">
                                    <div class="f-row f-row-as-li cta list-item active" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle glossy_coated"></div>
                                        </div>
                                        <div class="material-preset-title f-col-6">
                                            Stickers
                                        </div>
                                        <div class="f-col-3 f-justify-end"><span class="label label-success">Bestseller</span></div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle holographic"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Holographic stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item disabled" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle glow_in_the_dark"></div>
                                        </div>
                                        <div class="material-preset-title f-col-6">
                                            Glow in the dark stickers
                                        </div>
                                        <div class="f-col-3 f-justify-end"><span class="label label-warning">Out of stock</span></div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle glitter"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Glitter stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle transparent"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Clear stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle mirror"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Mirror stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle prismatic"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Prismatic stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle satin_matte_laser"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Matte stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle borstad_alu"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Brushed aluminum
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle heavy_duty"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Heavy duty stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle kraft_paper"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Kraft paper stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle removable_laser"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Removable stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle wall_sticker"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Wall stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle floor_sticker"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Floor stickers
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle white_custom_labels"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            White custom labels (on sheets)
                                        </div>
                                    </div>
                                    <div class="f-row f-row-as-li cta list-item" data-quantity="50">
                                        <div class="w-3 p-right">
                                            <div style="background-image:url(https://d6ce0no7ktiq.cloudfront.net/images/web/sprites/material-sprite.png?ver=2)" class="material-image img-circle clear_custom_labels"></div>
                                        </div>
                                        <div class="f-col material-preset-title">
                                            Clear custom labels (on sheets)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tool-content tool-content-note hidden">
                            <div class="tool-content-header">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <h6 class="text-ellipsis tool-content-title">Add a comment</h6>
                                    </div>
                                </div>
                                <div class="tool-content-body">
                                        <textarea id="comment" class="input input-text form-control" placeholder="Add comment" style="width: 100%;"><?php
                                                $cart_key = $_GET['cart_key'] ?? '';
                                                $cart_item = WC()->cart->get_cart_item($cart_key);
                                                echo $cart_item['st_message'] ?? '';
                                        ?></textarea>
                                        </div>
                            </div>

                        </div>
                        <div class="tool-content tool-content-quantity hidden">
                            <div class="tool-content-header">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <div class="content input">
                                            <label class="text-ellipsis tool-content-title control-label" for="3520674385359606">Custom quantity</label>
                                            <input value="200" type="number" class="summary-quantity" min="1" step="1" data-title="Lowest value is $1" data-toggle="tooltip" data-placement="left" data-trigger="manual" data-original-title="" title="" id="3520674385359606">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="f-row f-row-as-li cta list-item" data-quantity="111">
                                    <div class="f-col">
                                        <div class="quantity-formatted">111 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$26</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="200">
                                    <div class="f-col">
                                        <div class="quantity-formatted">200 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$46</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="300">
                                    <div class="f-col">
                                        <div class="quantity-formatted">300 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$70</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="500">
                                    <div class="f-col">
                                        <div class="quantity-formatted">500 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$78</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="600">
                                    <div class="f-col">
                                        <div class="quantity-formatted">600 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$94</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="900">
                                    <div class="f-col">
                                        <div class="quantity-formatted">900 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$100</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="1200">
                                    <div class="f-col">
                                        <div class="quantity-formatted">1,200 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$134</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="1500">
                                    <div class="f-col">
                                        <div class="quantity-formatted">1,500 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$167</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-row f-row-as-li cta list-item" data-quantity="2000">
                                    <div class="f-col">
                                        <div class="quantity-formatted">2,000 pcs</div>
                                    </div>
                                    <div class="f-col-2-9">
                                        <div class="price-formatted">$191</div>
                                    </div>
                                    <div class="f-col">
                                        <div class="save hidden">
                                            <div class="price-tag sm">
                                                <div class="price">- 0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tool-content tool-content-template hidden">


                        </div>
                        <div class="tool-content tool-content-text hidden">
                            <div class="tool-content-header">
                                <div class="f-row f-grid">
                                    <div class="f-col cta dropdown font-wrapper" data-toggle="dropdown">
                                        <div class="content text-ellipsis">
                                            <label class="control-label tool-content-title">Font</label>
                                            <span class="font-preview" style="font-family:WW Digital;">Digital</span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-left w-12">
                                            <li>
                                                <a href="#" style="font-family:Arial,sans-serif" data-font-name="Arial" data-title="Arial">Arial</a>
                                            </li>

                                            <li>
                                                <a href="#" style="font-family:WW Digital" data-font-name="WW Digital" data-title="Digital">
                                                    Digital </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Blazed" data-font-name="Blazed" data-title="Flames">
                                                    Flames </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:FV Almelo" data-font-name="FV Almelo" data-title="Rounded">
                                                    Rounded </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:CAC Champagne" data-font-name="CAC Champagne" data-title="Champagne">
                                                    Champagne </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Little days" data-font-name="Little days" data-title="Little days">
                                                    Little days </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Quicksand Bold" data-font-name="Quicksand Bold" data-title="Quicksand">
                                                    Quicksand </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Special elite" data-font-name="Special elite" data-title="Special elite">
                                                    Special elite </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Mossy" data-font-name="Mossy" data-title="Mossy">
                                                    Mossy </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Abel" data-font-name="Abel" data-title="Abel">
                                                    Abel </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Atomic Age" data-font-name="Atomic Age" data-title="Atomic Age">
                                                    Atomic Age </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Black Ops One" data-font-name="Black Ops One" data-title="Black Ops One">
                                                    Black Ops One </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Bree Serif" data-font-name="Bree Serif" data-title="Bree Serif">
                                                    Bree Serif </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Comic Neue" data-font-name="Comic Neue" data-title="Comic Neue">
                                                    Comic Neue </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Homemade Apple" data-font-name="Homemade Apple" data-title="Homemade Apple">
                                                    Homemade Apple </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Italiana" data-font-name="Italiana" data-title="Italiana">
                                                    Italiana </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Libre Baskerville" data-font-name="Libre Baskerville" data-title="Libre Baskerville">
                                                    Libre Baskerville </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Lobster Two" data-font-name="Lobster Two" data-title="Lobster Two">
                                                    Lobster Two </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Nixie One" data-font-name="Nixie One" data-title="Nixie One">
                                                    Nixie One </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Palitoon" data-font-name="Palitoon" data-title="Palitoon">
                                                    Palitoon </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Permanent Marker" data-font-name="Permanent Marker" data-title="Permanent Marker">
                                                    Permanent Marker </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Selima" data-font-name="Selima" data-title="Selima">
                                                    Selima </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:UnifrakturMaguntia" data-font-name="UnifrakturMaguntia" data-title="Unifraktur Maguntia">
                                                    Unifraktur Maguntia </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Vibur" data-font-name="Vibur" data-title="Vibur">
                                                    Vibur </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Zilla Slab" data-font-name="Zilla Slab" data-title="Zilla Slab">
                                                    Zilla Slab </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Rochester" data-font-name="Rochester" data-title="Rochester">
                                                    Rochester </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Oleo Script" data-font-name="Oleo Script" data-title="Oleo">
                                                    Oleo </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Monofett" data-font-name="Monofett" data-title="Mono">
                                                    Mono </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="f-col-4 cta dropdown" data-toggle="dropdown">
                                        <div class="content">
                                            <label class="control-label">Align</label>
                                            <span class="align-preview">
                                                <i class="icon-align-left"></i>
                                            </span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu w-12" style="min-width: auto;">
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="start" class="hidden" checked="">
                                                    <i class="icon-align-left"></i>
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="middle" class="hidden">
                                                    <i class="icon-align-center"></i>
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="end" class="hidden">
                                                    <i class="icon-align-right"></i>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="f-row">
                                    <div class="f-col-12 p-b-0">
                                        <textarea rows="1" class="form-control" placeholder="Insert text" maxlength="255"></textarea>
                                    </div>
                                    <div class="f-col-12">
                                        <input class="colorpicker" style="display: none;">
                                        <!-- <div class="sp-container sp-light sp-flat sp-input-disabled sp-buttons-disabled sp-palette-buttons-disabled sp-palette-disabled sp-initial-disabled">
                                            <div class="sp-palette-container">
                                                <div class="sp-palette sp-thumb sp-cf"></div>
                                                <div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div>
                                            </div>
                                            <div class="sp-picker-container">
                                                <div class="sp-top sp-cf">
                                                    <div class="sp-fill"></div>
                                                    <div class="sp-top-inner">
                                                        <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                                                            <div class="sp-sat">
                                                                <div class="sp-val">
                                                                    <div class="sp-dragger" style="top: -16px; left: -16px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sp-clear sp-clear-display" style="display: none;" title="Clear Color Selection"></div>
                                                        <div class="sp-hue">
                                                            <div class="sp-slider" style="top: -8px;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="sp-alpha">
                                                        <div class="sp-alpha-inner">
                                                            <div class="sp-alpha-handle" style="left: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div>
                                                <div class="sp-initial sp-thumb sp-cf"></div>
                                                <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">cancel</a><button type="button" class="sp-choose">choose</button></div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tool-content tool-content-cutline hidden">
                            <div class="tool-content-header hidden-landscape">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <h6 class="text-ellipsis tool-content-title">Cutline</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="tool-content-body" style="">
                                <div class="shapes">
                                    <div class="f-row">
                                        <div class="f-col-12 alert alert-warning">Your sticker is blank. Add an image or text and try again.</div>
                                        <div class="f-col-4 cta" data-type="path-s">
                                            <div class="text-center">
                                                <i class="icon shape path-s"></i>
                                                <div>Small</div>
                                            </div>
                                        </div>
                                        <div class="f-col-4 cta" data-type="path-m">
                                            <div class="text-center">
                                                <i class="icon shape path-m"></i>
                                                <div>Medium</div>
                                            </div>
                                        </div>
                                        <div class="f-col-4 cta" data-type="path-l">
                                            <div class="text-center">
                                                <i class="icon shape path-l"></i>
                                                <div>Large</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="f-row">
                                        <div class="f-col-4 cta" data-type="rect">
                                            <div class="text-center">
                                                <i class="icon shape rect"></i>
                                                <div>Square</div>
                                            </div>
                                        </div>
                                        <div class="f-col-4 cta" data-type="round">
                                            <div class="text-center">
                                                <i class="icon shape circle"></i>
                                                <div>Circle</div>
                                            </div>
                                        </div>
                                        <div class="f-col-4 cta" data-type="rounded">
                                            <div class="text-center">
                                                <i class="icon shape rounded"></i>
                                                <div>Round corners</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tool-content tool-content-cliparts hidden">
                            <div class="tool-content-header">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col cta category-dropdown dropdown" data-toggle="dropdown">
                                        <div class="content text-ellipsis">
                                            <label class="control-label tool-content-title">
                                                Cliparts </label>
                                            <span class="dropdown-title">Trending</span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-left w-12">
                                            <li class="active">
                                                <a href="#trending" data-id="8">Trending</a>
                                            </li>
                                            <li>
                                                <a href="#" data-id="popular">
                                                    Popular </a>
                                            </li>
                                            <li class="">
                                                <a href="#love" data-id="1">Love</a>
                                            </li>
                                            <li class="">
                                                <a href="#handwritten" data-id="9">Handwritten</a>
                                            </li>
                                            <li class="">
                                                <a href="#holiday" data-id="11">Holiday</a>
                                            </li>
                                            <li class="">
                                                <a href="#nature" data-id="12">Nature</a>
                                            </li>
                                            <li class="">
                                                <a href="#watercolor" data-id="15">Watercolor</a>
                                            </li>
                                            <li class="">
                                                <a href="#graphics" data-id="16">Graphics</a>
                                            </li>
                                            <li class="">
                                                <a href="#flags" data-id="2">Flags</a>
                                            </li>
                                            <li class="">
                                                <a href="#quotes" data-id="5">Quotes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="f-row products">
                                    <div class="f-col-12 loader">
                                        <div class="progress w-12">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tool-content tool-content-stickers hidden">

                            <div class="tool-content-header">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col cta category-dropdown dropdown" data-toggle="dropdown">
                                        <div class="content text-ellipsis">
                                            <label class="control-label tool-content-title">
                                                Stickers </label>
                                            <span class="dropdown-title">
                                                Popular </span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-left w-12">
                                            <li class="active">
                                                <a href="#" data-id="popular">
                                                    Popular </a>
                                            </li>
                                            <li>
                                                <a href="#animals" data-id="131">
                                                    Animals </a>
                                            </li>
                                            <li>
                                                <a href="#cars-racing" data-id="525">
                                                    Cars and Racing </a>
                                            </li>
                                            <li>
                                                <a href="#don-calamari" data-id="154">
                                                    Don Calamari </a>
                                            </li>
                                            <li>
                                                <a href="#flags" data-id="534">
                                                    Flags </a>
                                            </li>
                                            <li>
                                                <a href="#floor stickers" data-id="743">
                                                    Floor Stickers </a>
                                            </li>
                                            <li>
                                                <a href="#nature" data-id="546">
                                                    Flowers </a>
                                            </li>
                                            <li>
                                                <a href="#flowers-and-foliage" data-id="374">
                                                    Flowers and foliage </a>
                                            </li>
                                            <li>
                                                <a href="#funny" data-id="550">
                                                    Funny </a>
                                            </li>
                                            <li>
                                                <a href="#graffiti-tags" data-id="565">
                                                    Graffiti &amp; Tags </a>
                                            </li>
                                            <li>
                                                <a href="#cartoons" data-id="274">
                                                    Graphic Art &amp; Cartoons </a>
                                            </li>
                                            <li>
                                                <a href="#holidays" data-id="542">
                                                    Holidays </a>
                                            </li>
                                            <li>
                                                <a href="#instagrafite" data-id="156">
                                                    Instagrafite </a>
                                            </li>
                                            <li>
                                                <a href="#kids" data-id="202">
                                                    Kids </a>
                                            </li>
                                            <li>
                                                <a href="#labels" data-id="529">
                                                    Labels </a>
                                            </li>
                                            <li>
                                                <a href="#laptop" data-id="740">
                                                    Laptop </a>
                                            </li>
                                            <li>
                                                <a href="#love--hearts" data-id="127">
                                                    Love &amp; Illustrations </a>
                                            </li>
                                            <li>
                                                <a href="#mashups" data-id="278">
                                                    Mashups </a>
                                            </li>
                                            <li>
                                                <a href="#monograms" data-id="128">
                                                    Monograms </a>
                                            </li>
                                            <li>
                                                <a href="#nautical" data-id="554">
                                                    Nautical </a>
                                            </li>
                                            <li>
                                                <a href="#food-and-beverages" data-id="359">
                                                    Oatly </a>
                                            </li>
                                            <li>
                                                <a href="#patriotic-state-pride" data-id="566">
                                                    Patriotic &amp; State Pride </a>
                                            </li>
                                            <li>
                                                <a href="#photography" data-id="130">
                                                    Photography </a>
                                            </li>
                                            <li>
                                                <a href="#rastafari" data-id="120">
                                                    Rastafari </a>
                                            </li>
                                            <li>
                                                <a href="#religious" data-id="129">
                                                    Religious </a>
                                            </li>
                                            <li>
                                                <a href="#satire" data-id="358">
                                                    Satire </a>
                                            </li>
                                            <li>
                                                <a href="#schakalwal-design" data-id="147">
                                                    Schakalwal design </a>
                                            </li>
                                            <li>
                                                <a href="#signs-and-symbolism" data-id="113">
                                                    Signs and Symbolism </a>
                                            </li>
                                            <li>
                                                <a href="#skateboarding" data-id="136">
                                                    Skateboarding </a>
                                            </li>
                                            <li>
                                                <a href="#tattoos" data-id="697">
                                                    Tattoos </a>
                                            </li>
                                            <li>
                                                <a href="#text-and-speech" data-id="549">
                                                    Text and Speech </a>
                                            </li>
                                            <li>
                                                <a href="#thepirateghost" data-id="158">
                                                    ThePirateGhost </a>
                                            </li>
                                            <li>
                                                <a href="#trendy" data-id="555">
                                                    Trendy </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="f-row products">
                                    <div class="f-col-12 loader">
                                        <div class="progress w-12">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upload-wrapper" style="max-height: 189.133px;">
                            <div class="tool-content tool-content-upload">
                                <div class="tool-content-header hidden-landscape">
                                    <div class="tool-content-title f-row f-grid">
                                        <div class="f-col">
                                            <h6 class="text-ellipsis tool-content-title">Upload</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tool-content-body" style="height: auto;">
                                    <div class="f-row f-justify-center drop-zone cta" style="">
                                        <div class="f-col-3" style="padding: 0; width: 20%;">
                                            <i class="svg-upload-cloud"></i>
                                        </div>

                                        <div class="f-col-12 f-justify-center" style="padding: 8px 0 8px 0;">
                                            <span class="file-type">PDF, PNG, JPG, SVG, TIF, GIF, BMP, AI, PSD</span>
                                        </div>

                                        <div class="f-col-12 f-justify-center" style="padding: 0;">
                                            <span class="btn btn-sm btn-primary">Browse files</span>
                                        </div>
                                    </div>
                                    <div class="f-row progression-zone hidden">
                                        <div class="f-col-12">
                                            <div class="progress w-12">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div class="f-col-12 f-justify-center">
                                            <button class="btn btn-danger cancel">
                                                Cancel </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tool tool-effect-layer">
                                <!-- <div class="effect-layer-wrapper">
                                    <div class="f-row">
                                        <div class="f-col-12 f-justify-center">
                                            <div class="effect-layer-box">
                                                <div class="f-row f-justify-center">
                                                    <span><strong>Optional</strong></span>
                                                </div>

                                                <span class="effect-layer-popover glyphicon glyphicon-info-sign" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-html="true" data-title="Optional" data-content="Only applicable on certain materials." data-original-title="" title=""></span>

                                                <div class="f-row f-justify-center margin-top-xs margin-bottom-sm">
                                                    <span>Upload your effect mask layer or add instructions for special material effects.</span>
                                                </div>

                                                <button type="button" class="btn btn-sm show-modal-btn" disabled="disabled">Add effect mask or instructions</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="file editor-file hidden">
                                        <span class="file-title ">Effect layer added</span>
                                        <span class="effect-layer-popover glyphicon glyphicon-info-sign" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-html="true" data-title="Optional" data-content="Only applicable on certain materials." data-original-title="" title=""></span>

                                        <div class="f-col-12 justify-content-between">
                                            <span class="pull-left truncate"></span>
                                            <button class="remove-btn remove-file-btn pull-right" type="button">×</button>
                                        </div>
                                    </div>
                                </div> -->



                                <input id="file2" type="file" name="files[]" class="effect-layer-fileupload hidden" multiple="" accept="image/jpeg, image/png, image/gif, application/pdf, application/postscript, image/svg+xml, image/bmp, image/x-windows-bmp, application/psd, application/x-photoshop, image/photoshop, image/psd, image/x-photoshop, image/x-psd, .psd, image/tiff">
                            </div>
                        </div>
                        <div class="tool-content tool-content-collage hidden">
                            <div class="tool-content-header hidden-landscape">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <h6 class="text-ellipsis tool-content-title">Collage</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body f-row"></div>
                        </div>
                        <div class="tool-content tool-content-background hidden">
                            <div class="tool-content-header hidden-landscape">
                                <div class="tool-content-title f-row f-grid">
                                    <div class="f-col">
                                        <h6 class="text-ellipsis tool-content-title">Background</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="rgb_cmyk_class">

                                    <div class="f-row">
                                        <div class="f-col">
                                            <input class="colorpicker" style="display: none;">
                                            <!-- <div class="sp-container sp-light sp-flat sp-input-disabled sp-buttons-disabled sp-palette-buttons-disabled sp-palette-disabled sp-initial-disabled">
                                                <div class="sp-palette-container">
                                                    <div class="sp-palette sp-thumb sp-cf"></div>
                                                    <div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div>
                                                </div>
                                                <div class="sp-picker-container">
                                                    <div class="sp-top sp-cf">
                                                        <div class="sp-fill"></div>
                                                        <div class="sp-top-inner">
                                                            <div class="sp-color" style="background-color: rgb(255, 0, 0);">
                                                                <div class="sp-sat">
                                                                    <div class="sp-val">
                                                                        <div class="sp-dragger" style="top: -16px; left: -16px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sp-clear sp-clear-display" style="display: none;" title="Clear Color Selection"></div>
                                                            <div class="sp-hue">
                                                                <div class="sp-slider" style="top: -8px;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sp-alpha">
                                                            <div class="sp-alpha-inner">
                                                                <div class="sp-alpha-handle" style="left: 0px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div>
                                                    <div class="sp-initial sp-thumb sp-cf"></div>
                                                    <div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">cancel</a><button type="button" class="sp-choose">choose</button></div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>
                                <div class="rgb_cmyk_class cmyk_div" style="display: none">


                                </div>

                                <button type="button" class="btn btn-warning btn-cmyk_rgb_warning" style="display:none; white-space: normal;">Warn_switch_bg_rgb</button>
                            </div>
                        </div>
                        <div class="tool-content tool-content-backside-print-deal-text hidden">
                            <div class="tool-content-header">
                                <div class="f-row f-grid hidden ">
                                    <div class="f-col cta dropdown font-wrapper" data-toggle="dropdown">
                                        <div class="content text-ellipsis">
                                            <label class="control-label tool-content-title">Font</label>
                                            <span class="font-preview" style="font-family:WW Digital;">Digital</span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-left w-12">
                                            <li>
                                                <a href="#" style="font-family:Arial,sans-serif" data-font-name="Arial" data-title="Arial">Arial</a>
                                            </li>

                                            <li>
                                                <a href="#" style="font-family:WW Digital" data-font-name="WW Digital" data-title="Digital">
                                                    Digital </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Blazed" data-font-name="Blazed" data-title="Flames">
                                                    Flames </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:FV Almelo" data-font-name="FV Almelo" data-title="Rounded">
                                                    Rounded </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:CAC Champagne" data-font-name="CAC Champagne" data-title="Champagne">
                                                    Champagne </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Little days" data-font-name="Little days" data-title="Little days">
                                                    Little days </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Quicksand Bold" data-font-name="Quicksand Bold" data-title="Quicksand">
                                                    Quicksand </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Special elite" data-font-name="Special elite" data-title="Special elite">
                                                    Special elite </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Mossy" data-font-name="Mossy" data-title="Mossy">
                                                    Mossy </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Abel" data-font-name="Abel" data-title="Abel">
                                                    Abel </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Atomic Age" data-font-name="Atomic Age" data-title="Atomic Age">
                                                    Atomic Age </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Black Ops One" data-font-name="Black Ops One" data-title="Black Ops One">
                                                    Black Ops One </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Bree Serif" data-font-name="Bree Serif" data-title="Bree Serif">
                                                    Bree Serif </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Comic Neue" data-font-name="Comic Neue" data-title="Comic Neue">
                                                    Comic Neue </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Homemade Apple" data-font-name="Homemade Apple" data-title="Homemade Apple">
                                                    Homemade Apple </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Italiana" data-font-name="Italiana" data-title="Italiana">
                                                    Italiana </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Libre Baskerville" data-font-name="Libre Baskerville" data-title="Libre Baskerville">
                                                    Libre Baskerville </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Lobster Two" data-font-name="Lobster Two" data-title="Lobster Two">
                                                    Lobster Two </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Nixie One" data-font-name="Nixie One" data-title="Nixie One">
                                                    Nixie One </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Palitoon" data-font-name="Palitoon" data-title="Palitoon">
                                                    Palitoon </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Permanent Marker" data-font-name="Permanent Marker" data-title="Permanent Marker">
                                                    Permanent Marker </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Selima" data-font-name="Selima" data-title="Selima">
                                                    Selima </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:UnifrakturMaguntia" data-font-name="UnifrakturMaguntia" data-title="Unifraktur Maguntia">
                                                    Unifraktur Maguntia </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Vibur" data-font-name="Vibur" data-title="Vibur">
                                                    Vibur </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Zilla Slab" data-font-name="Zilla Slab" data-title="Zilla Slab">
                                                    Zilla Slab </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Rochester" data-font-name="Rochester" data-title="Rochester">
                                                    Rochester </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Oleo Script" data-font-name="Oleo Script" data-title="Oleo">
                                                    Oleo </a>
                                            </li>
                                            <li>
                                                <a href="#" style="font-family:Monofett" data-font-name="Monofett" data-title="Mono">
                                                    Mono </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="f-col-4 cta dropdown" data-toggle="dropdown">
                                        <div class="content">
                                            <label class="control-label">Align</label>
                                            <span class="align-preview">
                                                <i class="icon-align-left"></i>
                                            </span>
                                            <i class="icon-drop-down"></i>
                                        </div>
                                        <ul class="dropdown-menu w-12" style="min-width: auto;">
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="start" class="hidden" checked="">
                                                    <i class="icon-align-left"></i>
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="middle" class="hidden">
                                                    <i class="icon-align-center"></i>
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="btn btn-default btn-block btn-sm btn-alignment">
                                                    <input type="radio" name="text-align" value="end" class="hidden">
                                                    <i class="icon-align-right"></i>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tool-content-body">
                                <div class="f-row">

                                    <div class="deal-pattern-example hidden-portrait"></div>
                                    <div class="f-col-12 p-b-0 p-t-0 hidden-portrait">
                                        <p class="small">On social media? Add your nickname for some recognition. </p>
                                    </div>
                                    <label class="f-col-12 p-b-0 p-t-0 hidden-portrait" for="deal-input">
                                        Nickname </label>
                                    <div class="f-col-12 p-b-0 p-t-0 text-area-container">
                                        <textarea id="deal-input" rows="1" class="form-control" placeholder="Nickname" maxlength="32"></textarea>
                                    </div>
                                    <small class="f-col-12 p-t-0 margin-top-xs" style="color:#979797;">Max 32 characters</small>

                                    <div class="f-col-12 hidden">
                                        <input class="colorpicker">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end .panel-tool-content -->

                    <!-- .footer -->
                    <div class="footer detailed">
                        <div class="f-row footer-landscape">
                            <div class="f-row price_details back_print">
                                <div class="f-row justify-content-between"><span class="price_front_material">Custom Stickers</span><span class="sticker_amount">$<?php echo $_GET["price"];  ?></span></div>
                                <div class="f-row justify-content-between paperback_price_container hidden"><span class="paperback_description"></span> <span class="paperback_amount">$0</span></div>
                            </div>


                            <div class="total f-row justify-content-between align-content-center ">
                                <div>
                                    Total amount </div>
                            
                            <div class="" style="font-size: 28px;font-weight: 300;line-height: 1em;font-family: FuturaPT,sans-serif;letter-spacing: .5px;box-sizing: border-box;">$<?php echo $_GET["price"];  ?></div>
                        </div>
                        </div>
                        <div class="panel panel-back f-row hidden-landscape">
                            <div class="f-col">
                                <button class="btn btn-default btn-save-sticker">Back</button>
                            </div>
                        </div>
                        <div class="panel panel-confirm f-row hidden-landscape">
                            <div class="f-col f-justify-end">
                                <button class="btn btn-done btn-block">Done</button>
                            </div>
                        </div>
                    </div>

                    <div class="action btn-container hidden-portrait">
                        <!-- <button class="btn f-btn btn-save" data-loading-text="Saving..." data-trigger="manual" data-toggle="tooltip" data-placement="top" data-title="You have isolated a sticker. Click <b>Done</b>." data-html="true" data-original-title="" title="">
       Add to cart    </button> -->
                        <?php if (($_GET['edit_type'] ?? 'new') != 'admin_show') { ?>
                            <button class="btn f-btn btn-primary btn-xl" id="btnSave"><?php if ($_GET['edit_type'] ?? "new" == 'edit') echo "Save"; else echo "Add to cart"; ?></button>
                        <?php } ?>
                    </div> <!-- end .footer -->
                </div>
                <div class="tool-bar f-row">
                    <div class="tool tool-close f-row f-align-items-center f-justify-center hidden-portrait" data-backhref="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                        <label class="control-label">CLOSE <i class="glyphicon glyphicon-remove" aria-hidden="true"></i></label>
                    </div>


                    <div class="tool tool-upload cta active" style="position: relative;" data-title="Click here to upload an image" data-tool-content=".tool-content-upload" data-original-title="" title="">
                        <span class="glyphicon glyphicon-info-sign tool-notification hidden"></span>
                        <i></i>
                        <label class="control-label">Upload file</label>

                        <div class="progress hidden" style="margin:0;height:15px;">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="tool tool-stickers cta hidden" data-tool-content=".tool-content-stickers">
                        <i></i>
                        <label class="control-label">Stickers</label>
                    </div>
                    <div class="tool tool-collage cta hidden" data-tool-content=".tool-content-collage">
                        <i></i>
                        <label class="control-label">Collage</label>
                    </div>
                    <div class="tool tool-cutline hidden-sheet cta" data-tool-content=".tool-content-cutline" data-has-tooltip="false">
                        <i class=""></i>
                        <label class="control-label">Cutline</label>
                    </div>
                    <!-- <div class="tool tool-material-preset hidden-portrait hidden-sheet cta" data-tool-content=".tool-content-material-preset" data-original-title="" title="">
                        <i class=""></i>
                        <label class="control-label">Material</label>
                    </div> -->
                    <div class="tool tool-text cta" data-tool-content=".tool-content-text">
                        <i class="glyphicon"></i>
                        <label class="control-label">Insert text</label>
                    </div>
                    <div class="tool tool-background cta hidden-sheet" data-tool-content=".tool-content-background">
                        <i>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M68.1,23.7h-50c-0.9,0-1.7-0.8-1.7-1.7v-0.2c0-0.9,0.8-1.7,1.7-1.7h50c0.9,0,1.7,0.8,1.7,1.7V22
		C69.8,22.9,69,23.7,68.1,23.7z"></path>
                                    <path class="st1" d="M12.2,18.9H12c-1.1,0-1.9-0.9-1.9-1.9v-6.9c0-1.1,0.9-1.9,1.9-1.9h0.2c1.1,0,1.9,0.9,1.9,1.9V17
		C14.1,18.1,13.3,18.9,12.2,18.9z"></path>
                                    <path class="st1" d="M73.9,18.9h-0.2c-1.1,0-1.9-0.9-1.9-1.9v-6.9c0-1.1,0.9-1.9,1.9-1.9h0.2c1.1,0,1.9,0.9,1.9,1.9V17
		C75.8,18.1,74.9,18.9,73.9,18.9z"></path>
                                    <path class="st1" d="M37.9,44.4v-0.2c0-1.1,0.9-1.9,1.9-1.9h6.9c1.1,0,1.9,0.9,1.9,1.9v0.2c0,1.1-0.9,1.9-1.9,1.9h-6.9
		C38.8,46.3,37.9,45.5,37.9,44.4z"></path>
                                    <path class="st2" d="M43.5,78.3L43.5,78.3c-3,0-5.5-2.5-5.5-5.5V49.2c0-3,2.5-2.6,5.5-2.6h0c3,0,5.5-0.4,5.5,2.6v23.5
		C49,75.8,46.5,78.3,43.5,78.3z"></path>
                                    <path class="st3" d="M73.5,6.9l-0.2-1.4c0-3-2.4-5.4-5.4-5.4H18.2c-3,0-5.4,2.4-5.4,5.4v1.4h-0.2c-2.2,0-4,1.9-4,4.2v1.4
		c-3,0-5.4,2.4-5.4,5.4v11c0,3,2.4,5.4,5.4,5.4H39c1.6,0,2.9,1.3,2.9,2.9v2.9h-1.4c-2.2,0-4,1.8-4,4v29c0,3.8,3,6.9,6.9,6.9
		s6.9-3,6.9-6.9v-29c0-2.2-1.8-4-4-4h-1.4v-2.9c0-3-2.4-5.4-5.4-5.4H8.9C7.3,31.9,6,30.6,6,29v-11c0-1.6,1.3-2.9,2.9-2.9H9v1.4
		c0,2.2,1.8,4,4,4h0.2v1.4c0,3,2.4,5.4,5.4,5.4h49.3c3,0,5.4-2.4,5.4-5.4v-1.4h0.2c2.2,0,4-1.8,4-4v-5.4C77.5,8.8,75.7,6.9,73.5,6.9
		z M47.4,73.1c-0.2,2.4-2.1,4.3-4.3,4.3c-2.4,0-4.2-1.9-4.2-4.2V48.2h8.5V73.1z M45.8,42.7c0.8,0,1.4,0.6,1.4,1.4v1.4h-8.5v-1.4
		c0-0.8,0.6-1.4,1.4-1.4H45.8z M12.6,17.9c-0.8,0-1.4-0.6-1.4-1.4v-5.4c0-0.8,0.6-1.4,1.4-1.4h0.2L12.6,17.9z M70.8,22.1
		c0,1.6-1.3,2.9-2.9,2.9H18.2c-1.6,0-2.9-1.3-2.9-2.9V5.5c0-1.6,1.3-2.9,2.9-2.9h49.7c1.6,0,2.9,1.3,2.9,2.9V22.1z M74.9,16.5
		c0,0.8-0.6,1.4-1.4,1.4h-0.2V9.5h0.2c0.8,0,1.4,0.6,1.4,1.4V16.5z"></path>
                                    <g>
                                        <g>
                                            <path class="st4 color-preview" d="M60.3,47.1c-0.7,0-1.3-0.3-1.9-0.9c-1-1.1-1.6-3-1.5-5.1c0.1-0.9,0.1-1.6,0.2-2.3c0.2-1.9,0.4-3.8,0.1-8.8
				c-0.2-2.2-0.6-4.1-0.9-4.9c-0.9-2.7-3.6-7.7-5.1-7.7c-0.4,0-0.7,0.4-1,1.1c-1.3,3.1-2.3,4.3-3.5,4.3c-1.5,0-2.9-2.1-4.8-5.6
				c-0.3-0.6-0.5-0.9-0.6-1c-0.1,0.2-0.2,0.6-0.2,0.9c-0.2,1.1-0.6,2.6-1.7,2.6c-0.5,0-1.1-0.3-1.7-1c-2.2-2.2-4.3-3.3-6.4-3.3
				c-2.1,0-3.4,1.2-3.5,1.2l-0.1,0.1l-0.1,0c-0.6,0.3-0.8,1.4-1,2.4c-0.2,1.3-0.5,2.8-1.9,2.8c-0.6,0-1.3-0.3-2.3-1
				c-3.2-2.4-5.9-2.8-7.2-2.8l-0.5,0V5.5c0-1.9,1.5-3.4,3.4-3.4h49.7c1.9,0,3.4,1.5,3.4,3.4v16.6c0,0,0,2.9-0.5,6.3
				c-0.4,2.9-2.5,8.4-5,8.4l0,0c-0.2,0-0.4,0-0.6-0.1c-3.5-1.5-2.6-6.4-2.1-9.4l0.4-2.4c0.2-1.4,0.4-2.9,0.1-3.6
				c-0.3-0.6-0.5-0.8-0.7-0.8c-0.5,0-1.4,1.6-1.5,3.2c-0.4,4.9,1.3,16,1.3,16.1c0.3,2.9-0.1,5.5-1.1,6.6
				C61.3,46.9,60.8,47.1,60.3,47.1z"></path>
                                            <path class="st3" d="M67.9,2.6c1.6,0,2.9,1.3,2.9,2.9v16.6c0,0,0,2.8-0.5,6.2c-0.5,3.2-2.6,8-4.5,8c-0.1,0-0.3,0-0.4-0.1
				c-2.9-1.3-2.4-5.3-1.8-8.9L64,25c0.3-1.7,0.4-3.1,0.1-3.9c-0.4-0.8-0.8-1.1-1.1-1.1c-1,0-1.9,2-2,3.7c-0.4,5,1.3,16.2,1.3,16.2
				c0.4,3.5-0.3,6.7-1.9,6.7c-1.5,0-3-2.2-2.8-5.4c0.2-3.3,0.7-4.2,0.3-11.2c-0.1-2.1-0.6-4.1-0.9-5c-0.8-2.4-3.6-8-5.6-8
				c-0.6,0-1.1,0.4-1.5,1.4c-1.1,2.7-2,4-3,4c-1.2,0-2.5-1.9-4.4-5.4c-0.5-1-0.9-1.4-1.2-1.4c-0.8,0-0.5,3.6-1.9,3.6
				c-0.3,0-0.8-0.2-1.3-0.8c-2.7-2.7-5-3.4-6.8-3.4c-2.4,0-3.8,1.3-3.8,1.3c-1.8,0.8-0.8,5.2-2.6,5.2c-0.5,0-1.1-0.3-2-0.9
				c-3.3-2.4-6-2.9-7.5-2.9V5.5c0-1.6,1.3-2.9,2.9-2.9H67.9 M67.9,1.6H18.2c-2.1,0-3.9,1.7-3.9,3.9v12.2v1l1,0
				c1.3,0,3.8,0.5,6.9,2.7c1,0.8,1.8,1.1,2.6,1.1c1.8,0,2.1-1.9,2.4-3.2c0.1-0.8,0.3-1.9,0.7-2.1l0.1-0.1L28,17c0,0,1.2-1.1,3.1-1.1
				c2,0,4,1.1,6.1,3.1c0.8,0.8,1.4,1.1,2.1,1.1c1.5,0,1.9-1.5,2.2-2.7c2,3.8,3.5,5.9,5.3,5.9c1.7,0,2.8-1.9,4-4.6
				c0.2-0.6,0.5-0.8,0.5-0.8c1,0,3.5,4,4.7,7.3c0.3,0.8,0.7,2.6,0.9,4.7c0.3,5,0.2,6.8-0.1,8.8c-0.1,0.7-0.2,1.4-0.2,2.3
				c-0.1,2.2,0.4,4.2,1.6,5.4c0.7,0.7,1.5,1.1,2.3,1.1c0.4,0,1.1-0.1,1.7-0.8c1.3-1.4,1.5-4.6,1.2-7c0-0.1-0.4-2.5-0.7-5.5
				c0.4,1.2,1.2,2.3,2.5,2.9c0.3,0.1,0.5,0.2,0.8,0.2c3,0,5.1-6.3,5.4-8.9c0.5-3.4,0.5-6.2,0.5-6.3l0-16.6C71.8,3.3,70,1.6,67.9,1.6
				L67.9,1.6z M62.1,30.9c-0.2-2.7-0.4-5.3-0.2-7.2c0.1-1.2,0.7-2.4,1-2.7c0.1,0.1,0.2,0.2,0.3,0.4c0.3,0.6,0,2.5-0.1,3.3l-0.4,2.4
				C62.4,28.3,62.2,29.6,62.1,30.9L62.1,30.9z"></path>
                                        </g>
                                    </g>
                                    <path class="st5" d="M44.5,73.8L44.5,73.8c-0.6,0-1.1-0.4-1.1-1V51.6c0-0.5,0.4-1,1-1h0.1c0.5,0,1,0.4,1,1v21.3
		C45.5,73.4,45.1,73.8,44.5,73.8z"></path>
                                </g>
                            </svg>

                        </i>
                        <label class="control-label">Background</label>
                    </div>
                    <!-- <div class="tool tool-cliparts cta hidden-sheet" data-tool-content=".tool-content-cliparts">
                        <i></i>
                        <label class="control-label">Cliparts</label>
                    </div> -->
                    <div class="tool tool-fill-sheet cta visible-sheet disabled hidden ">
                        <i></i>
                        <label class="control-label">Fill sheet</label>
                    </div>
                    <div class="tool tool-empty-sheet cta visible-sheet hidden" data-confirm-text="Clear this sheet">
                        <i></i>
                        <label class="control-label">Clear this sheet</label>
                    </div>
                </div>
                <div class="editor-container" style="padding-bottom: 0px; bottom: 0px;" id="editor-1-container"><svg id="editor-1-svgroot" viewBox="-14.614424705505371 -8.718352317810059 173.79600429534912 88.30295467376709" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stickit="http://www.stickerapp.se" class="no-text-select" height="100%" width="100%">
                        <defs id="defsLayer" transform="matrix(1, 0, 0, 1, 0, 0)">
                            <filter id="drop_shadow" x="-50%" y="-50%" width="200%" height="200%" filterRes="866" style="display : inline">
                                <feOffset result="offOut" in="SourceAlpha" dx="0" dy="0"></feOffset>
                                <feGaussianBlur result="blurOut" in="offOut" stdDeviation="0"></feGaussianBlur>
                                <feColorMatrix result="matrixOut" in="blurOut" type="matrix" values="1 0 0 0 0.2, 0 1 0 0 0.2, 0 0 1 0 0.2, 0 0 0 0.5 0"></feColorMatrix>
                                <feBlend in="SourceGraphic" in2="matrixOut" mode="normal"></feBlend>
                            </filter>
                            <clipPath id="01870316339606669" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <path d="M0,10.6299375C-7.189598102064186e-16,4.759185127095531,4.759185127095532,1.0784397153096278e-15,10.6299375,0C10.6299375,0,133.9372125,0,133.9372125,0C139.80796487290445,3.594799051032093e-16,144.56715,4.759185127095532,144.56715,10.6299375C144.56715,10.6299375,144.56715,60.2363125,144.56715,60.2363125C144.56715,66.10706487290446,139.80796487290445,70.86625,133.9372125,70.86625C133.9372125,70.86625,10.6299375,70.86625,10.6299375,70.86625C4.759185127095531,70.86625,7.189598102064186e-16,66.10706487290446,0,60.2363125C0,60.2363125,0,10.6299375,0,10.6299375" id="01870316339606669_path" transform="matrix(1, 0, 0, 1, 0, 0)"></path>
                            </clipPath>
                            <clipPath id="editorClip_svg_1647249440" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <path d="M0,10.6299375C-7.189598102064186e-16,4.759185127095531,4.759185127095532,1.0784397153096278e-15,10.6299375,0C10.6299375,0,133.9372125,0,133.9372125,0C139.80796487290445,3.594799051032093e-16,144.56715,4.759185127095532,144.56715,10.6299375C144.56715,10.6299375,144.56715,60.2363125,144.56715,60.2363125C144.56715,66.10706487290446,139.80796487290445,70.86625,133.9372125,70.86625C133.9372125,70.86625,10.6299375,70.86625,10.6299375,70.86625C4.759185127095531,70.86625,7.189598102064186e-16,66.10706487290446,0,60.2363125C0,60.2363125,0,10.6299375,0,10.6299375" id="editorClip_svg_1647249440_path" transform="matrix(1, 0, 0, 1, 0, 0)"></path>
                            </clipPath>
                            <clipPath id="06366595041534884" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <path d="" id="06366595041534884_path" transform="matrix(1, 0, 0, 1, 0, 0)"></path>
                            </clipPath>
                            <clipPath id="editorClip_svg_1647249440_backprint" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <path d="" id="editorClip_svg_1647249440_backprint_path" transform="matrix(1, 0, 0, 1, 0, 0)"></path>
                            </clipPath>
                        </defs>
                        <g id="preBottomLayer"></g>
                        <path class="svgSheet single" d="M 0 0 L 0 70.86624908447266 L 144.56715393066406 70.86624908447266 L 144.56715393066406 0 z"></path>
                        <g id="svg_1647249440" style="visibility: visible;" clip-path="none" transform="matrix(1, 0, 0, 1, 0, 0)">
                            <path d="M0,10.6299375C-7.189598102064186e-16,4.759185127095531,4.759185127095532,1.0784397153096278e-15,10.6299375,0C10.6299375,0,133.9372125,0,133.9372125,0C139.80796487290445,3.594799051032093e-16,144.56715,4.759185127095532,144.56715,10.6299375C144.56715,10.6299375,144.56715,60.2363125,144.56715,60.2363125C144.56715,66.10706487290446,139.80796487290445,70.86625,133.9372125,70.86625C133.9372125,70.86625,10.6299375,70.86625,10.6299375,70.86625C4.759185127095531,70.86625,7.189598102064186e-16,66.10706487290446,0,60.2363125C0,60.2363125,0,10.6299375,0,10.6299375" fill="#FFFFFF" stroke="#A0A0A0" id="svg_1647249440PartBackground" transform="matrix(1, 0, 0, 1, 0, 0)" stroke-width="0.38113159045838474" filter="url(#drop_shadow)"></path>
                            <g id="svg_1647249440_partGroup" transform="matrix(1, 0, 0, 1, 0, 0)" clip-path="url(#01870316339606669)"></g>
                        </g>
                        <g id="svg_1647249440_backprint" style="visibility: visible; display: none;" clip-path="url(#editorClip_svg_1647249440_backprint)" transform="matrix(1, 0, 0, 1, 0, 0)">
                            <path d="" fill="#FFFFFF" stroke="none" id="svg_1647249440_backprintPartBackground" transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#drop_shadow)"></path>
                            <g id="svg_1647249440_backprint_partGroup" transform="matrix(1, 0, 0, 1, 0, 0)"></g>
                        </g>
                        <g id="shadowLayer" transform="matrix(1, 0, 0, 1, 0, 0)">
                            <path d="M -24.614425659179688 -85.6667251586914 L -24.614425659179688 156.53298950195312 L 169.18157958984375 156.53298950195312 L 169.18157958984375 -85.6667251586914 z M0,10.6299375C-7.189598102064186e-16,4.759185127095531,4.759185127095532,1.0784397153096278e-15,10.6299375,0C10.6299375,0,133.9372125,0,133.9372125,0C139.80796487290445,3.594799051032093e-16,144.56715,4.759185127095532,144.56715,10.6299375C144.56715,10.6299375,144.56715,60.2363125,144.56715,60.2363125C144.56715,66.10706487290446,139.80796487290445,70.86625,133.9372125,70.86625C133.9372125,70.86625,10.6299375,70.86625,10.6299375,70.86625C4.759185127095531,70.86625,7.189598102064186e-16,66.10706487290446,0,60.2363125C0,60.2363125,0,10.6299375,0,10.6299375" id="003661077418252967" fill-rule="evenodd" class="svgShadowOverlay" transform="matrix(1, 0, 0, 1, 0, 0)" style="display: none;"></path>
                        </g>
                        <g id="partPathLayer" transform="matrix(1, 0, 0, 1, 0, 0)">
                            <path d="M 0 0 L 0 70.86624908447266 L 144.56715393066406 70.86624908447266 L 144.56715393066406 0 z" id="02792454926051684" class="svgSheetPath single" transform="matrix(1, 0, 0, 1, 0, 0)"></path>
                            <path d="M0,10.6299375C-7.189598102064186e-16,4.759185127095531,4.759185127095532,1.0784397153096278e-15,10.6299375,0C10.6299375,0,133.9372125,0,133.9372125,0C139.80796487290445,3.594799051032093e-16,144.56715,4.759185127095532,144.56715,10.6299375C144.56715,10.6299375,144.56715,60.2363125,144.56715,60.2363125C144.56715,66.10706487290446,139.80796487290445,70.86625,133.9372125,70.86625C133.9372125,70.86625,10.6299375,70.86625,10.6299375,70.86625C4.759185127095531,70.86625,7.189598102064186e-16,66.10706487290446,0,60.2363125C0,60.2363125,0,10.6299375,0,10.6299375" id="033643976300193945" class="svgPartPath dropShadow" transform="matrix(1, 0, 0, 1, 0, 0) matrix(1, 0, 0, 1, 0, 0)" style="visibility: hidden; stroke-width: 0.381132px;"></path>
                            <path d="" id="09105961569098966" class="svgPartPath dropShadow" transform="matrix(1, 0, 0, 1, 0, 0) matrix(1, 0, 0, 1, 0, 0)" style="visibility: visible; stroke-width: 0.381132px; display: none;"></path>
                        </g>
                        <g id="preTopLayer"></g>
                        <g id="infoLayer" transform="matrix(1, 0, 0, 1, 0, 0)"><text x="72.78357696533203" y="80.39453884593227" fill="function fill() {
    [native code]
}" class="svgPartSizeText" id="003260252372603445" space="preserve" font-size="5.7169738568757715" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <tspan x="72.78357696533203" y="80.39453884593227">2"</tspan>
                            </text><text x="150.28412778753983" y="35.93312454223633" fill="function fill() {
    [native code]
}" class="svgPartSizeText" id="003260252372603445" transform="matrix(0, 1, -1, 0, 186.217, -114.351)" space="preserve" font-size="5.7169738568757715" text-anchor="middle">
                                <tspan x="150.28412778753983" y="35.93312454223633">1"</tspan>
                            </text></g>
                        <g id="selectLayer"></g>
                    </svg></div>
                <input id="file1" type="file" name="files[]" class="fileupload hidden" multiple="" accept="image/jpeg, image/png, image/gif, application/pdf, application/postscript, image/svg+xml, image/bmp, image/x-windows-bmp, application/psd, application/x-photoshop, image/photoshop, image/psd, image/x-photoshop, image/x-psd, .psd, image/tiff">
                <button class="btn btn-lg btn-inverted btn-save-sticker hidden-portrait">
                    <i class="icon-backward"></i> Done</button>


                <div class="f-col-12 tool tool-backside-print appended hidden" style="width: 456px;">
                    <div class="btn-group">
                        <button data-id="front" class="btn btn-primary active btn-sm disabled">Sticker</button>
                        <button data-id="back" class="btn btn-primary btn-sm disabled">Back Paper
                            <span class="label label-success">New</span>
                        </button>
                    </div>
                </div>
                <div class="editor-spinner hidden" style="bottom: 0px;">
                    <div class="f-row">
                        <div class="f-col-12 f-justify-center p-0">
                            <span class="msg">Updating image quality </span>
                        </div>
                        <div class="f-col-12 p-0">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="confirm-modal appended" id="effect-layer-modal" data-backdrop="false">
                    <div class="confirm-modal-inner">
                        <div class="confirm-modal-content">
                            <div class="modal-body">
                                <h4 class="text-center">Add an effect mask layer and/or instructions for your sticker's effect</h4>
                                <textarea class="form-control" name="note" placeholder="Example: All of the yellows to be gold, everything else flat colors and white border"></textarea>
                            </div>

                            <div class="modal-footer">
                                <div class="upload">
                                    <div class="f-row">
                                        <div class="file f-col-12 hidden">
                                            <span class="pull-left truncate"></span>
                                            <button class="remove-btn remove-file-btn pull-right" type="button">×</button>
                                        </div>

                                        <div class="file-error f-col-12 justify-content-between hidden">
                                            <span class="pull-left"></span>
                                            <button class="remove-btn remove-file-error-btn" type="button">×</button>
                                        </div>
                                    </div>

                                    <div class="progression-zone f-row hidden">
                                        <div class="progress w-12 margin-bottom-xs">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                        </div>

                                        <div class="f-col-12 f-justify-center">
                                            <button class="btn btn-danger cancel">
                                                Cancel </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-buttons">
                                    <button type="button" class="btn cancel-btn pull-left" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary browse-btn">Browse file</button>
                                    <button type="button" class="btn btn-gray done-btn btn-confirm pull-right">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Styles is for desktop-->
            <div class="confirm-modal" id="confirm-modal-backside-print" data-lang-ok="OK" data-lang-cancel="Cancel" data-lang-yes="Yes" data-lang-no="No">
                <div class="confirm-modal-inner">
                    <div class="confirm-modal-content p-0">
                        <div class="f-row">
                            <div class="f-justify-center yt-container" style="background-image: url(https://d6ce0no7ktiq.cloudfront.net/images/web/editor/backprint_modal_image.png);">
                                <span class="label label-success">
                                    New </span>
                            </div>
                            <div class="f-col-12 f-justify-center contents f-direction-column">
                                <h6 class="text-center margin-top-sm margin-bottom-sm">Introducing back paper printing!</h6>
                                <div>
                                    <b>Please note:</b>
                                    <ul>
                                        <li>Because of the difference in material, colors may
                                            differ from sticker</li>
                                        <li>Large dark areas are not recommended, (can appear
                                            grainy/sparkly)</li>
                                        <li>No tight margins for alignment purposes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="f-row f-justify-center f-align-items-center f-direction-column actions confirm-modal-content margin-bottom-sm">
                            <div>
                                <input style="transform: scale(1.5); margin-right:5px;" id="show_again_paperback_info" type="checkbox">
                                <label for="show_again_paperback_info">Don't show again</label>
                            </div>
                            <button class="btn btn-primary btn-confirm margin-top-sm" style="width:150px">Ok</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pre-checkout-modal hidden" id="pre-checkout-modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="cart-confirm"></div>
                            <h4 class="modal-title">Nice work.</h4>
                        </div>
                        <div class="modal-body">
                            <div class="info-section">
                                Your sticker has been added to your cart. </div>
                            <div class="action-section">
                                <button class="btn btn-primary" id="goToCheckout">
                                    <div class="spinner"></div>
                                    Go to checkout <div class="spinner">
                                        <div class="spinner-icon"></div>
                                        <div class="check-mark"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="secondary-line"></div>
                            <div class="group-section">
                                <div class="action-section">
                                    <button class="btn btn-grey" id="makeNewSticker">
                                        <div class="spinner"></div>
                                        Make a new sticker <div class="spinner">
                                            <div class="spinner-icon"></div>
                                            <div class="check-mark"></div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="editor-modal" class="editor-modal">
        <div class="editor-modal-inner container">
            <div class="editor-modal-content">
            </div>
        </div>
    </div>
    <div class="confirm-modal" id="confirm-modal" data-lang-ok="OK" data-lang-cancel="Cancel" data-lang-yes="Yes" data-lang-no="No">
        <div class="confirm-modal-inner">
            <div class="confirm-modal-content">
                <div class="f-row">
                    <div class="f-col-12 f-justify-center text-center content">
                    </div>
                </div>
                <div class="f-row f-justify-center actions">
                </div>
            </div>
        </div>
    </div>
    <div id="modal-full-cart-warning" class="modal ">
        <div class="modal-dialog alert alert-danger">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Your shopping cart is full. </h4>
                </div>
                <div class="modal-body">Unfortunately our shopping cart can only handle 100 different items / rows.
                    Please make a new order or contact our customer service if you wish to add more items.</div>
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>



    <input type="hidden" id="getWidth" value="<?php echo $_GET["width"]; ?>" />
    <input type="hidden" id="getHeight" value="<?php echo $_GET["height"]; ?>" />
    <input type="hidden" id="getQty" value="<?php echo $_GET["quantity"]; ?>" />
    <input type="hidden" id="shape-type" value="<?php echo $_GET["shape"]; ?>" />





    <!--End .main-wrapper -->

    <!-- SCRIPTS -->
    <!-- <script src="https://d6ce0no7ktiq.cloudfront.net/build/5.7.89/stickerapp.js"></script>
<script src="https://d6ce0no7ktiq.cloudfront.net/build/5.7.89/editor.js"></script> -->
<script src="<?php echo plugins_url( 'stickerapp.js', __FILE__ ); ?>"></script>
    <script src="<?php echo plugins_url( 'editor.js', __FILE__ ); ?>"></script>
    <script src="<?php echo plugins_url( 'rounded.js?name', __FILE__ ); ?>"></script>



    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WZXX56" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WZXX56');
    </script>
    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "245509430055321");
        fbq("track", "PageView");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=245509430055321&amp;ev=PageView&amp;noscript=1">
    </noscript>
    <div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon711883587724"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon979686901989" alt="" src="https://bat.bing.com/action/0?ti=26345997&amp;tm=gtm002&amp;Ver=2&amp;mid=7cbba71d-5bc5-46e6-88c2-363c9a325ac7&amp;sid=ea3935a0a24111ec9e39c32694612fed&amp;vid=dfe613e0a0af11ec8488b53d42d23a65&amp;vids=0&amp;pi=0&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Custom%20stickers%20-%20StickerApp&amp;p=https%3A%2F%2Fstickerapp.com%2Feditor%2Fedit%2Fnew%2Fsingle%2Frounded%2F0%2F200%2F51%2F25%2Fglossy_coated&amp;r=&amp;lt=6531&amp;evt=pageLoad&amp;msclkid=N&amp;sv=1&amp;rn=620711" width="0" height="0"></div>
</body>

</html>