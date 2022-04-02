<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Bootstrap Themes, Templates, Snippets, and Guides - Start Bootstrap</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#dd3d31">
    <meta name="theme-color" content="#dd3d31">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="preload" as="font" href="/assets/fonts/metropolis/Metropolis-SemiBold.otf" type="font/otf" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/metropolis/Metropolis-Medium.otf" type="font/otf" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/metropolis/Metropolis-Regular.otf" type="font/otf" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/metropolis/Metropolis-Bold.otf" type="font/otf" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/metropolis/Metropolis-RegularItalic.otf" type="font/otf" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="https://assets.startbootstrap.com/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://assets.startbootstrap.com/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://assets.startbootstrap.com/img/icons/favicon-16x16.png">
    <link rel="mask-icon" href="https://assets.startbootstrap.com/img/icons/safari-pinned-tab.svg" color="#dd3d31">
    <link rel="manifest" href="manifest.webmanifest">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        !(function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq.disablePushState;
        fbq('init', '470997813790692');
    </script>
    <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=470997813790692&ev=PageView&noscript=1" /></noscript>
    <style>
        @charset "UTF-8";

        :root {
            --bs-gray: #69707a;
            --bs-gray-dark: #363d47;
            --bs-gray-100: #f2f6fc;
            --bs-gray-200: #e0e5ec;
            --bs-gray-300: #d4dae3;
            --bs-gray-400: #c5ccd6;
            --bs-gray-500: #a7aeb8;
            --bs-gray-600: #69707a;
            --bs-gray-700: #4a515b;
            --bs-gray-800: #363d47;
            --bs-gray-900: #212832;
            --bs-primary: #dc392d;
            --bs-secondary: #e0e5ec;
            --bs-success: #00ac69;
            --bs-info: #00cfd5;
            --bs-warning: #f4a100;
            --bs-danger: #e81500;
            --bs-light: #f2f6fc;
            --bs-dark: #212832;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-red: #dc392d;
            --bs-orange: #f76400;
            --bs-yellow: #f4a100;
            --bs-green: #00ac69;
            --bs-teal: #00ba94;
            --bs-cyan: #00cfd5;
            --bs-blue: #0061f2;
            --bs-indigo: #5800e8;
            --bs-purple: #6900c7;
            --bs-pink: #e30059;
            --bs-red-soft: #f0e3e7;
            --bs-orange-soft: #f3e7e3;
            --bs-yellow-soft: #f2eee3;
            --bs-green-soft: #daefed;
            --bs-teal-soft: #daf0f2;
            --bs-cyan-soft: #daf2f8;
            --bs-blue-soft: #dae7fb;
            --bs-indigo-soft: #e3ddfa;
            --bs-purple-soft: #e4ddf7;
            --bs-pink-soft: #f1ddec;
            --bs-primary-soft: #f0e3e7;
            --bs-secondary-soft: #f0f4fa;
            --bs-success-soft: #daefed;
            --bs-info-soft: #daf2f8;
            --bs-warning-soft: #f2eee3;
            --bs-danger-soft: #f1e0e3;
            --bs-primary-rgb: 220, 57, 45;
            --bs-secondary-rgb: 224, 229, 236;
            --bs-success-rgb: 0, 172, 105;
            --bs-info-rgb: 0, 207, 213;
            --bs-warning-rgb: 244, 161, 0;
            --bs-danger-rgb: 232, 21, 0;
            --bs-light-rgb: 242, 246, 252;
            --bs-dark-rgb: 33, 40, 50;
            --bs-red-rgb: 220, 57, 45;
            --bs-orange-rgb: 247, 100, 0;
            --bs-yellow-rgb: 244, 161, 0;
            --bs-green-rgb: 0, 172, 105;
            --bs-teal-rgb: 0, 186, 148;
            --bs-cyan-rgb: 0, 207, 213;
            --bs-blue-rgb: 0, 97, 242;
            --bs-indigo-rgb: 88, 0, 232;
            --bs-purple-rgb: 105, 0, 199;
            --bs-pink-rgb: 227, 0, 89;
            --bs-red-soft-rgb: 240, 227, 231;
            --bs-orange-soft-rgb: 243, 231, 227;
            --bs-yellow-soft-rgb: 242, 238, 227;
            --bs-green-soft-rgb: 218, 239, 237;
            --bs-teal-soft-rgb: 218, 240, 242;
            --bs-cyan-soft-rgb: 218, 242, 248;
            --bs-blue-soft-rgb: 218, 231, 251;
            --bs-indigo-soft-rgb: 227, 221, 250;
            --bs-purple-soft-rgb: 228, 221, 247;
            --bs-pink-soft-rgb: 241, 221, 236;
            --bs-primary-soft-rgb: 240, 227, 231;
            --bs-secondary-soft-rgb: 240, 244, 250;
            --bs-success-soft-rgb: 218, 239, 237;
            --bs-info-soft-rgb: 218, 242, 248;
            --bs-warning-soft-rgb: 242, 238, 227;
            --bs-danger-soft-rgb: 241, 224, 227;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 105, 112, 122;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, hsla(0, 0%, 100%, 0.15), hsla(0, 0%, 100%, 0));
            --bs-body-font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #69707a;
            --bs-body-bg: #fff
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-family: var(--bs-body-font-family);
            font-size: 1rem;
            font-size: var(--bs-body-font-size);
            font-weight: 400;
            font-weight: var(--bs-body-font-weight);
            line-height: 1.5;
            line-height: var(--bs-body-line-height);
            color: #69707a;
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: #fff;
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        body,
        html {
            height: 100%
        }

        body {
            overflow-x: hidden
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Thin.otf);
            font-weight: 100;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ThinItalic.otf);
            font-weight: 100;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraLight.otf);
            font-weight: 200;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraLightItalic.otf);
            font-weight: 200;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Light.otf);
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-LightItalic.otf);
            font-weight: 300;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Regular.otf);
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-RegularItalic.otf);
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Medium.otf);
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-MediumItalic.otf);
            font-weight: 500;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-SemiBold.otf);
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-SemiBoldItalic.otf);
            font-weight: 600;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Bold.otf);
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-BoldItalic.otf);
            font-weight: 700;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraBold.otf);
            font-weight: 800;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraBoldItalic.otf);
            font-weight: 800;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Black.otf);
            font-weight: 800;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-BlackItalic.otf);
            font-weight: 800;
            font-style: italic
        }

        :root {
            --litepicker-month-header-color: #4a515b;
            --litepicker-button-prev-month-color: #69707a;
            --litepicker-button-next-month-color: #69707a;
            --litepicker-button-prev-month-color-hover: #212832;
            --litepicker-button-next-month-color-hover: #212832;
            --litepicker-month-weekday-color: #69707a;
            --litepicker-month-week-number-color: #69707a;
            --litepicker-day-width: 34px;
            --litepicker-day-color: #363d47;
            --litepicker-day-color-hover: #dc392d;
            --litepicker-is-today-color: #69707a;
            --litepicker-is-in-range-color: rgba(220, 57, 45, 0.15);
            --litepicker-is-start-color: #fff;
            --litepicker-is-start-color-bg: #dc392d;
            --litepicker-is-end-color: #fff;
            --litepicker-is-end-color-bg: #dc392d;
            --litepicker-button-apply-color-bg: #dc392d;
            --litepicker-button-reset-color-hover: #dc392d;
            --litepicker-highlighted-day-color: #363d47;
            --litepicker-highlighted-day-color-bg: rgba(220, 57, 45, 0.15)
        }
    </style>
    <style>
        @charset "UTF-8";

        :root {
            --bs-gray: #69707a;
            --bs-gray-dark: #363d47;
            --bs-gray-100: #f2f6fc;
            --bs-gray-200: #e0e5ec;
            --bs-gray-300: #d4dae3;
            --bs-gray-400: #c5ccd6;
            --bs-gray-500: #a7aeb8;
            --bs-gray-600: #69707a;
            --bs-gray-700: #4a515b;
            --bs-gray-800: #363d47;
            --bs-gray-900: #212832;
            --bs-primary: #dc392d;
            --bs-secondary: #e0e5ec;
            --bs-success: #00ac69;
            --bs-info: #00cfd5;
            --bs-warning: #f4a100;
            --bs-danger: #e81500;
            --bs-light: #f2f6fc;
            --bs-dark: #212832;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-red: #dc392d;
            --bs-orange: #f76400;
            --bs-yellow: #f4a100;
            --bs-green: #00ac69;
            --bs-teal: #00ba94;
            --bs-cyan: #00cfd5;
            --bs-blue: #0061f2;
            --bs-indigo: #5800e8;
            --bs-purple: #6900c7;
            --bs-pink: #e30059;
            --bs-red-soft: #f0e3e7;
            --bs-orange-soft: #f3e7e3;
            --bs-yellow-soft: #f2eee3;
            --bs-green-soft: #daefed;
            --bs-teal-soft: #daf0f2;
            --bs-cyan-soft: #daf2f8;
            --bs-blue-soft: #dae7fb;
            --bs-indigo-soft: #e3ddfa;
            --bs-purple-soft: #e4ddf7;
            --bs-pink-soft: #f1ddec;
            --bs-primary-soft: #f0e3e7;
            --bs-secondary-soft: #f0f4fa;
            --bs-success-soft: #daefed;
            --bs-info-soft: #daf2f8;
            --bs-warning-soft: #f2eee3;
            --bs-danger-soft: #f1e0e3;
            --bs-primary-rgb: 220, 57, 45;
            --bs-secondary-rgb: 224, 229, 236;
            --bs-success-rgb: 0, 172, 105;
            --bs-info-rgb: 0, 207, 213;
            --bs-warning-rgb: 244, 161, 0;
            --bs-danger-rgb: 232, 21, 0;
            --bs-light-rgb: 242, 246, 252;
            --bs-dark-rgb: 33, 40, 50;
            --bs-red-rgb: 220, 57, 45;
            --bs-orange-rgb: 247, 100, 0;
            --bs-yellow-rgb: 244, 161, 0;
            --bs-green-rgb: 0, 172, 105;
            --bs-teal-rgb: 0, 186, 148;
            --bs-cyan-rgb: 0, 207, 213;
            --bs-blue-rgb: 0, 97, 242;
            --bs-indigo-rgb: 88, 0, 232;
            --bs-purple-rgb: 105, 0, 199;
            --bs-pink-rgb: 227, 0, 89;
            --bs-red-soft-rgb: 240, 227, 231;
            --bs-orange-soft-rgb: 243, 231, 227;
            --bs-yellow-soft-rgb: 242, 238, 227;
            --bs-green-soft-rgb: 218, 239, 237;
            --bs-teal-soft-rgb: 218, 240, 242;
            --bs-cyan-soft-rgb: 218, 242, 248;
            --bs-blue-soft-rgb: 218, 231, 251;
            --bs-indigo-soft-rgb: 227, 221, 250;
            --bs-purple-soft-rgb: 228, 221, 247;
            --bs-pink-soft-rgb: 241, 221, 236;
            --bs-primary-soft-rgb: 240, 227, 231;
            --bs-secondary-soft-rgb: 240, 244, 250;
            --bs-success-soft-rgb: 218, 239, 237;
            --bs-info-soft-rgb: 218, 242, 248;
            --bs-warning-soft-rgb: 242, 238, 227;
            --bs-danger-soft-rgb: 241, 224, 227;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 105, 112, 122;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, hsla(0, 0%, 100%, 0.15), hsla(0, 0%, 100%, 0));
            --bs-body-font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #69707a;
            --bs-body-bg: #fff
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-family: var(--bs-body-font-family);
            font-size: 1rem;
            font-size: var(--bs-body-font-size);
            font-weight: 400;
            font-weight: var(--bs-body-font-weight);
            line-height: 1.5;
            line-height: var(--bs-body-line-height);
            color: #69707a;
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: #fff;
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: .25
        }

        hr:not([size]) {
            height: 1px
        }

        .h6,
        h1,
        h2 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: #363d47
        }

        h1 {
            font-size: calc(1.275rem + .3vw)
        }

        @media (min-width: 1200px) {
            h1 {
                font-size: 1.5rem
            }
        }

        h2 {
            font-size: calc(1.265rem + .18vw)
        }

        @media (min-width: 1200px) {
            h2 {
                font-size: 1.4rem
            }
        }

        .h6 {
            font-size: 1rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul {
            padding-left: 2rem
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .small {
            font-size: .875em
        }

        a {
            color: #dc392d;
            text-decoration: none
        }

        a:hover {
            color: #b02e24;
            text-decoration: underline
        }

        img,
        svg {
            vertical-align: middle
        }

        label {
            display: inline-block
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        [type=button],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        .lead {
            font-size: 1.1rem;
            font-weight: 400
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .container {
            width: 100%;
            padding-right: .75rem;
            padding-right: var(--bs-gutter-x, .75rem);
            padding-left: .75rem;
            padding-left: var(--bs-gutter-x, .75rem);
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px
            }
        }

        @media (min-width: 1500px) {
            .container {
                max-width: 1440px
            }
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }

        @media (min-width: 768px) {
            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width: 992px) {
            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%
            }
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .875rem 1.125rem;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: .35rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control:focus {
            color: #69707a;
            background-color: #fff;
            border-color: tint-color(#0061f2, 50%);
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 97, 242, .25)
        }

        .form-control::-webkit-date-and-time-value {
            height: 1em
        }

        .form-control::-moz-placeholder {
            color: #a7aeb8;
            opacity: 1
        }

        .form-control::placeholder {
            color: #a7aeb8;
            opacity: 1
        }

        .form-control:disabled {
            background-color: #e0e5ec;
            opacity: 1
        }

        .form-control::file-selector-button {
            padding: .875rem 1.125rem;
            margin: -.875rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem;
            color: #69707a;
            background-color: #fff;
            pointer-events: none;
            border: 0 solid;
            border-color: inherit;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::file-selector-button {
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #f2f2f2
        }

        .form-control::-webkit-file-upload-button {
            padding: .875rem 1.125rem;
            margin: -.875rem -1.125rem;
            -webkit-margin-end: 1.125rem;
            margin-inline-end: 1.125rem;
            color: #69707a;
            background-color: #fff;
            pointer-events: none;
            border: 0 solid;
            border-color: inherit;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #f2f2f2
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }

        .input-group>.form-control {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0
        }

        .input-group>.form-control:focus {
            z-index: 3
        }

        .input-group .btn {
            position: relative;
            z-index: 2
        }

        .input-group .btn:focus {
            z-index: 3
        }

        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #e81500
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .875rem 1.125rem;
            font-size: .875rem;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: #69707a;
            text-decoration: none
        }

        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 57, 45, .25)
        }

        .btn:disabled {
            pointer-events: none;
            opacity: .65
        }

        .btn-primary {
            color: #fff;
            background-color: #dc392d;
            border-color: #dc392d
        }

        .btn-primary:focus,
        .btn-primary:hover {
            color: #fff;
            background-color: #bb3026;
            border-color: #b02e24
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(225, 87, 77, .5)
        }

        .btn-primary:active {
            color: #fff;
            background-color: #b02e24;
            border-color: #a52b22
        }

        .btn-primary:active:focus {
            box-shadow: 0 0 0 .2rem rgba(225, 87, 77, .5)
        }

        .btn-primary:disabled {
            color: #fff;
            background-color: #dc392d;
            border-color: #dc392d
        }

        .btn-white,
        .btn-white:focus,
        .btn-white:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff
        }

        .btn-white:focus {
            box-shadow: 0 0 0 .2rem hsla(0, 0%, 85%, .5)
        }

        .btn-white.active,
        .btn-white:active {
            color: #000;
            background-color: #fff;
            border-color: #fff
        }

        .btn-white.active:focus,
        .btn-white:active:focus {
            box-shadow: 0 0 0 .2rem hsla(0, 0%, 85%, .5)
        }

        .btn-white:disabled {
            color: #000;
            background-color: #fff;
            border-color: #fff
        }

        .btn-lg {
            padding: 1.25rem 1.5rem;
            font-size: 1rem;
            border-radius: .35rem
        }

        .collapse:not(.show) {
            display: none
        }

        .dropdown {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle:after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropdown-menu {
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: 10rem;
            padding: .5rem 0;
            margin: 0;
            font-size: 1rem;
            color: #69707a;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e0e5ec;
            border-radius: .35rem
        }

        .dropdown-menu-end {
            --bs-position: end
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e0e5ec
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212832;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #1e242d;
            text-decoration: none;
            background-color: #e0e5ec
        }

        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #dc392d
        }

        .dropdown-item:disabled {
            color: #a7aeb8;
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1rem;
            margin-bottom: 0;
            font-size: .875rem;
            color: #69707a;
            white-space: nowrap
        }

        .btn-group {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group>.btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem;
            color: #dc392d;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                transition: none
            }
        }

        .nav-link:focus,
        .nav-link:hover {
            color: #b02e24;
            text-decoration: none
        }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar>.container {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .35rem;
            transition: box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                transition: none
            }
        }

        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 .2rem
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .55)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .55);
            border-color: rgba(0, 0, 0, .1)
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(33, 40, 50, .125);
            border-radius: .35rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.35rem
        }

        .badge {
            display: inline-block;
            padding: .35rem .5rem;
            font-size: .75em;
            font-weight: 400;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem
        }

        .badge:empty {
            display: none
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .d-block {
            display: block !important
        }

        .d-flex {
            display: flex !important
        }

        .d-none {
            display: none !important
        }

        .shadow {
            box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15) !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .border-0 {
            border: 0 !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .align-items-center {
            align-items: center !important
        }

        .my-5 {
            margin-top: 2.5rem !important;
            margin-bottom: 2.5rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .me-1 {
            margin-right: .25rem !important
        }

        .me-2 {
            margin-right: .5rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .me-auto {
            margin-right: auto !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 2.5rem !important
        }

        .ms-2 {
            margin-left: .5rem !important
        }

        .mb-n15 {
            margin-bottom: -9rem !important
        }

        .pt-10 {
            padding-top: 6rem !important
        }

        .pt-15 {
            padding-top: 9rem !important
        }

        .pb-5 {
            padding-bottom: 2.5rem !important
        }

        .pb-10 {
            padding-bottom: 6rem !important
        }

        .fst-italic {
            font-style: italic !important
        }

        .text-end {
            text-align: right !important
        }

        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(220, 57, 45, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important
        }

        .text-light {
            --bs-text-opacity: 1;
            color: rgba(242, 246, 252, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important
        }

        .text-black {
            --bs-text-opacity: 1;
            color: rgba(0, 0, 0, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        .text-green {
            --bs-text-opacity: 1;
            color: rgba(0, 172, 105, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-green-rgb), var(--bs-text-opacity)) !important
        }

        .text-blue {
            --bs-text-opacity: 1;
            color: rgba(0, 97, 242, var(--bs-text-opacity)) !important;
            color: rgba(var(--bs-blue-rgb), var(--bs-text-opacity)) !important
        }

        .footer a {
            --bs-text-opacity: 1;
            color: inherit !important
        }

        .bg-light {
            --bs-bg-opacity: 1;
            background-color: rgba(242, 246, 252, var(--bs-bg-opacity)) !important;
            background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--bs-bg-opacity)) !important;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-green-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(218, 239, 237, var(--bs-bg-opacity)) !important;
            background-color: rgba(var(--bs-green-soft-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-blue-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(218, 231, 251, var(--bs-bg-opacity)) !important;
            background-color: rgba(var(--bs-blue-soft-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-primary-soft {
            --bs-bg-opacity: 1;
            background-color: rgba(240, 227, 231, var(--bs-bg-opacity)) !important;
            background-color: rgba(var(--bs-primary-soft-rgb), var(--bs-bg-opacity)) !important
        }

        .rounded-3 {
            border-radius: .5rem !important
        }

        @media (min-width: 576px) {
            .p-sm-4 {
                padding: 1.5rem !important
            }
        }

        @media (min-width: 768px) {
            .d-md-block {
                display: block !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .p-md-5 {
                padding: 2.5rem !important
            }
        }

        @media (min-width: 992px) {
            .d-lg-block {
                display: block !important
            }

            .flex-lg-row {
                flex-direction: row !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }

            .ms-lg-3 {
                margin-left: 1rem !important
            }

            .pb-lg-0 {
                padding-bottom: 0 !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width: 1200px) {
            .flex-xl-row {
                flex-direction: row !important
            }

            .mb-xl-0 {
                margin-bottom: 0 !important
            }
        }

        body,
        html {
            height: 100%
        }

        body {
            overflow-x: hidden
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Thin.otf);
            font-weight: 100;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ThinItalic.otf);
            font-weight: 100;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraLight.otf);
            font-weight: 200;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraLightItalic.otf);
            font-weight: 200;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Light.otf);
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-LightItalic.otf);
            font-weight: 300;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Regular.otf);
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-RegularItalic.otf);
            font-weight: 400;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Medium.otf);
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-MediumItalic.otf);
            font-weight: 500;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-SemiBold.otf);
            font-weight: 600;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-SemiBoldItalic.otf);
            font-weight: 600;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Bold.otf);
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-BoldItalic.otf);
            font-weight: 700;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraBold.otf);
            font-weight: 800;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-ExtraBoldItalic.otf);
            font-weight: 800;
            font-style: italic
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-Black.otf);
            font-weight: 800;
            font-style: normal
        }

        @font-face {
            font-family: Metropolis;
            src: url(/assets/fonts/metropolis/Metropolis-BlackItalic.otf);
            font-weight: 800;
            font-style: italic
        }

        .no-caret .dropdown-toggle:after {
            display: none
        }

        .pointer {
            cursor: pointer !important
        }

        .lift {
            box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15);
            transition: transform .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .lift:hover {
            transform: translateY(-.3333333333rem);
            box-shadow: 0 .5rem 2rem 0 rgba(33, 40, 50, .25)
        }

        .lift:active {
            transform: none;
            box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15)
        }

        .text-gray-500 {
            color: #a7aeb8 !important
        }

        .fw-500 {
            font-weight: 500 !important
        }

        .text-xs {
            font-size: .75rem !important
        }

        .navbar .dropdown-menu .dropdown-header,
        .text-uppercase-expanded {
            font-weight: 700;
            letter-spacing: .125em;
            text-transform: uppercase
        }

        .z-1 {
            z-index: 1 !important
        }

        .z-1 {
            position: relative !important
        }

        .btn {
            display: inline-flex;
            align-items: center
        }

        .btn {
            justify-content: center
        }

        .card {
            box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15)
        }

        .dropdown-menu {
            font-size: .9rem;
            border: none;
            box-shadow: 0 .15rem 1.75rem 0 rgba(33, 40, 50, .15)
        }

        .dropdown-menu .dropdown-header {
            font-size: .75rem;
            font-weight: 700;
            display: flex;
            align-items: center
        }

        .dropdown-menu .dropdown-item {
            display: flex;
            align-items: center
        }

        .dropdown .dropdown-toggle {
            display: inline-flex;
            align-items: center
        }

        .dropdown .dropdown-toggle .dropdown-arrow {
            margin-left: .4rem;
            margin-right: 0;
            transition: transform .1s ease-in-out;
            font-size: .6em
        }

        .icon-list-social {
            display: flex
        }

        .icon-list-social .icon-list-social-link {
            font-size: 1.25rem;
            margin-right: .5rem
        }

        :root {
            --litepicker-month-header-color: #4a515b;
            --litepicker-button-prev-month-color: #69707a;
            --litepicker-button-next-month-color: #69707a;
            --litepicker-button-prev-month-color-hover: #212832;
            --litepicker-button-next-month-color-hover: #212832;
            --litepicker-month-weekday-color: #69707a;
            --litepicker-month-week-number-color: #69707a;
            --litepicker-day-width: 34px;
            --litepicker-day-color: #363d47;
            --litepicker-day-color-hover: #dc392d;
            --litepicker-is-today-color: #69707a;
            --litepicker-is-in-range-color: rgba(220, 57, 45, 0.15);
            --litepicker-is-start-color: #fff;
            --litepicker-is-start-color-bg: #dc392d;
            --litepicker-is-end-color: #fff;
            --litepicker-is-end-color-bg: #dc392d;
            --litepicker-button-apply-color-bg: #dc392d;
            --litepicker-button-reset-color-hover: #dc392d;
            --litepicker-highlighted-day-color: #363d47;
            --litepicker-highlighted-day-color-bg: rgba(220, 57, 45, 0.15)
        }

        #layoutDefault {
            display: flex;
            flex-direction: column;
            min-height: 100vh
        }

        #layoutDefault #layoutDefault_content {
            min-width: 0;
            flex-grow: 1
        }

        #layoutDefault #layoutDefault_footer {
            min-width: 0
        }

        .navbar .dropdown-menu {
            top: calc(100% + .5rem + .5rem) !important;
            font-size: .9rem
        }

        .navbar .dropdown-menu .dropdown-header {
            font-size: .7rem;
            color: #a7aeb8
        }

        .navbar-marketing {
            transition: background-color .15s ease-in-out;
            padding-top: 1.75rem;
            padding-bottom: 1.75rem
        }

        .navbar-marketing .navbar-toggler {
            padding: .5rem;
            border: 0
        }

        .navbar-marketing .navbar-toggler svg {
            vertical-align: middle;
            height: 1.5rem;
            width: 1.5rem
        }

        .navbar-marketing .navbar-brand {
            font-size: 1.2rem;
            font-weight: 700
        }

        .navbar-marketing .navbar-brand img {
            height: 1rem
        }

        .navbar-marketing .navbar-nav {
            padding-top: 1.75rem;
            padding-bottom: 1.75rem
        }

        .navbar-marketing .navbar-nav .nav-item .nav-link {
            font-weight: 500
        }

        .navbar-marketing.fixed-top {
            max-height: 100vh;
            overflow-y: auto
        }

        @media (min-width: 992px) {
            .navbar-marketing {
                padding-top: 0;
                padding-bottom: 0
            }

            .navbar-marketing .navbar-nav {
                padding-top: 1.75rem;
                padding-bottom: 1.75rem
            }

            .navbar-marketing .navbar-nav .nav-item {
                margin-right: 1rem
            }

            .navbar-marketing .navbar-nav .nav-item:last-child {
                margin-right: 0
            }

            .navbar-marketing.fixed-top {
                max-height: none;
                overflow-y: visible
            }
        }

        section {
            position: relative
        }

        .svg-border-angled {
            padding-top: 3rem
        }

        .svg-border-angled svg {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3rem;
            width: 100%
        }

        @media (min-width: 576px) {
            .svg-border-angled {
                padding-top: 3.5rem
            }

            .svg-border-angled svg {
                height: 3.5rem
            }
        }

        @media (min-width: 768px) {
            .svg-border-angled {
                padding-top: 4rem
            }

            .svg-border-angled svg {
                height: 4rem
            }
        }

        @media (min-width: 992px) {
            .svg-border-angled {
                padding-top: 4.5rem
            }

            .svg-border-angled svg {
                height: 4.5rem
            }
        }

        @media (min-width: 1200px) {
            .svg-border-angled {
                padding-top: 5rem
            }

            .svg-border-angled svg {
                height: 5rem
            }
        }

        .footer {
            font-size: .875rem
        }

        .footer .footer-brand {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: .25rem
        }

        .footer.footer-light {
            color: #a7aeb8
        }

        .page-header-ui {
            position: relative;
            padding-top: 8rem;
            padding-bottom: 8rem
        }

        .page-header-ui .page-header-ui-content .page-header-ui-title {
            font-size: 2.5rem
        }

        .page-header-ui .page-header-ui-content .page-header-ui-text {
            font-size: 1.15rem
        }

        .navbar-brand img {
            height: 3.5rem !important
        }

        .pointer {
            cursor: pointer
        }

        .dropdown-toggle {
            -moz-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        .footer.footer-light,
        .navbar-light .navbar-nav .nav-link,
        .page-header-ui-text {
            color: #69707a !important
        }

        .page-header-ui-text a {
            font-weight: 500;
            color: #212832
        }

        .text-angular {
            color: #e23237
        }

        .text-bootstrap {
            color: #563d7c
        }

        fa-icon svg {
            display: inline-block;
            font-size: inherit;
            height: 1em
        }

        [style*="--aspect-ratio"]>:first-child {
            width: 100%
        }

        @supports (--custom: property) {
            [style*="--aspect-ratio"] {
                position: relative
            }

            [style*="--aspect-ratio"]:before {
                content: "";
                display: block;
                padding-bottom: calc(100% / (var(--aspect-ratio)))
            }

            [style*="--aspect-ratio"]>:first-child {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%
            }
        }

        .btn .svg-inline--fa {
            vertical-align: -.1875em
        }

        .dropdown-menu .dropdown-item:active {
            color: #fff
        }

        .dropdown-menu .dropdown-item:active fa-icon {
            color: hsla(0, 0%, 100%, .5) !important
        }

        .navbar-marketing {
            padding-top: .9375rem;
            padding-bottom: .9375rem
        }

        .navbar-marketing .navbar-brand {
            font-weight: 600
        }

        .navbar-marketing .dropdown-item {
            padding: .5rem 1.25rem
        }

        .navbar-marketing .dropdown-header {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            text-transform: none !important;
            letter-spacing: normal !important
        }

        @media (min-width: 992px) {
            .navbar-marketing {
                padding-top: 0;
                padding-bottom: 0
            }
        }

        .navbar-marketing .nav-link {
            font-size: .9rem;
            width: 100%
        }

        .navbar-marketing .nav-right {
            padding-top: 0
        }

        @media (min-width: 992px) {
            .navbar-marketing .nav-right {
                padding-top: 1.75rem
            }
        }

        .page-header-ui {
            padding-top: 93px;
            padding-bottom: 0
        }

        .page-header-ui .page-header-ui-content {
            padding-top: 3rem;
            padding-bottom: 6rem
        }
    </style>
    <link rel="stylesheet" href="styles.cf58507dd785c10c7bc8.css" crossorigin="anonymous" media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="styles.cf58507dd785c10c7bc8.css">
    </noscript>
    <link rel="canonical" href="https://startbootstrap.com/">
    <meta name="description" content="Start Bootstrap develops free to download, open source Bootstrap 5 themes, templates, and snippets and creates guides and tutorials to help you learn more about designing and developing with Bootstrap." data-dynamic="true">
    <meta name="og:description" content="Start Bootstrap develops free to download, open source Bootstrap 5 themes, templates, and snippets and creates guides and tutorials to help you learn more about designing and developing with Bootstrap." data-dynamic="true">
    <meta name="og:image" content="https://assets.startbootstrap.com/img/meta/og-image-start-bootstrap.png" data-dynamic="true">
    <meta name="og:image:alt" content="Start Bootstrap - website themes and templates built using the Bootstrap framework" data-dynamic="true">
    <meta name="og:image:height" content="630" data-dynamic="true">
    <meta name="og:image:secure_url" content="https://assets.startbootstrap.com/img/meta/og-image-start-bootstrap.png" data-dynamic="true">
    <meta name="og:image:width" content="1200" data-dynamic="true">
    <meta name="og:locale" content="en_US" data-dynamic="true">
    <meta name="og:site_name" content="Start Bootstrap" data-dynamic="true">
    <meta name="og:title" content="Free Bootstrap Themes, Templates, Snippets, and Guides" data-dynamic="true">
    <meta name="og:type" content="website" data-dynamic="true">
    <meta name="og:url" content="https://startbootstrap.com" data-dynamic="true">
    <meta name="twitter:card" content="summary_large_image" data-dynamic="true">
    <meta name="twitter:description" content="Start Bootstrap develops free to download, open source Bootstrap 5 themes, templates, and snippets and creates guides and tutorials to help you learn more about designing and developing with Bootstrap." data-dynamic="true">
    <meta name="twitter:image" content="https://assets.startbootstrap.com/img/meta/twitter-image-start-bootstrap.png" data-dynamic="true">
    <meta name="twitter:site" content="@SBootstrap" data-dynamic="true">
    <meta name="twitter:title" content="Free Bootstrap Themes, Templates, Snippets, and Guides" data-dynamic="true">
    <style ng-transition="serverApp"></style>
    <style ng-transition="serverApp">
        [_nghost-sc116] {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: .5em;
            z-index: 1200;
            width: 350px
        }
    </style>
    <style ng-transition="serverApp">
        #overlay[_ngcontent-sc118] {
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100%;
            min-height: 100vh;
            z-index: 1090;
            background-color: #00000080
        }
    </style>
    <style ng-transition="serverApp">
        sbpro-top-nav-docs[_ngcontent-sc162] {
            display: contents
        }

        .badge-new[_ngcontent-sc162] {
            top: -.5rem;
            right: -.65rem;
            padding: .25rem;
            font-size: 60%;
            font-weight: 600
        }
    </style>
    <style ng-transition="serverApp">
        .icon-list-social[_ngcontent-sc164] .icon-list-social-link[_ngcontent-sc164] {
            font-size: 3rem;
            margin-right: 1rem
        }

        .icon-list-social[_ngcontent-sc164] .icon-list-social-link[_ngcontent-sc164]:hover {
            transition: all .1s ease-in-out;
            color: #a7aeb8 !important
        }

        @media (min-width: 768px) {
            .icon-list-social[_ngcontent-sc164] .icon-list-social-link[_ngcontent-sc164] {
                font-size: 2rem
            }
        }
    </style>
    <style ng-transition="serverApp">
        .signup-form[_ngcontent-sc163] {
            margin-top: -9rem;
            margin-bottom: 4rem;
            overflow: hidden
        }

        @media screen and (min-width: 768px) {
            .signup-form[_ngcontent-sc163] .card-body[_ngcontent-sc163] {
                padding-right: 15rem
            }
        }

        .signup-form[_ngcontent-sc163] .signup-form-img[_ngcontent-sc163] {
            position: absolute;
            right: 3rem;
            top: 2rem;
            width: 11rem
        }

        .signup-form[_ngcontent-sc163] .btn-signup[_ngcontent-sc163] {
            border-top-right-radius: .35rem !important;
            border-bottom-right-radius: .35rem !important
        }
    </style>
    <style ng-transition="serverApp">
        [_nghost-sc233] {
            display: contents
        }

        .btn-group-quick-nav[_ngcontent-sc233] {
            box-shadow: 0 .15rem 1.75rem #21283226;
            border-radius: .35rem
        }

        .btn-group-quick-nav[_ngcontent-sc233] .btn-white[_ngcontent-sc233] {
            border-color: #f2f2f2
        }

        .btn-group-quick-nav[_ngcontent-sc233] .btn-white.active[_ngcontent-sc233] {
            color: #212832;
            background-color: #fff;
            border-color: #f2f2f2
        }

        .btn-group-quick-nav[_ngcontent-sc233] .btn-white.active[_ngcontent-sc233]:hover {
            background-color: #f2f2f2
        }

        .btn-group-quick-nav[_ngcontent-sc233] input[_ngcontent-sc233] {
            display: none
        }
    </style>
    <style ng-transition="serverApp">
        .dropdown-item {
            cursor: pointer
        }
    </style>
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
</head>

<body>
    <app-root _nghost-sc119="" ng-version="12.2.12">
        <sbpro-toast-view _ngcontent-sc119="" aria-live="polite" aria-atomic="true" class="ngb-toasts" _nghost-sc116="">
            <!---->
        </sbpro-toast-view>
        <sbw-overlay _ngcontent-sc119="" _nghost-sc118="">
            <!---->
        </sbw-overlay>
        <router-outlet _ngcontent-sc119=""></router-outlet>
        <sbw-site _nghost-sc246="">
            <sbw-layout-site _ngcontent-sc246="" footerclasses="bg-light footer-light" _nghost-sc178="" class="">
                <div _ngcontent-sc178="" id="layoutDefault">
                    <div _ngcontent-sc178="" id="layoutDefault_content">
                        <main _ngcontent-sc178="">
                            <!---->
                            <sb-top-nav _ngcontent-sc246="" topnavclasses="bg-white navbar-light fixed-top" brandclasses="text-black" buttonclasses="btn-teal" _nghost-sc162="">
                                <nav _ngcontent-sc162="" sbproscrollspy="" class="navbar navbar-marketing navbar-expand-lg shadow bg-white navbar-light fixed-top">
                                    <div _ngcontent-sc162="" class="container"><a _ngcontent-sc162="" routerlink="/" class="navbar-brand text-black" href="/"><img _ngcontent-sc162="" src="/assets/img/sb-logo.svg" alt="Start Bootstrap Logo"><span _ngcontent-sc162="" class="ms-2">Start Bootstrap</span></a><button _ngcontent-sc162="" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"></path>
                                                </svg></fa-icon>
                                        </button>
                                        <div _ngcontent-sc162="" id="navbarSupportedContent" class="collapse navbar-collapse">
                                            <ul _ngcontent-sc162="" class="navbar-nav me-auto">
                                                <li _ngcontent-sc162="" ngbdropdown="" class="nav-item no-caret dropdown"><a _ngcontent-sc162="" id="navbarDropdownThemes" ngbdropdowntoggle="" data-cy="themesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="dropdown-toggle nav-link pointer">Themes<fa-icon _ngcontent-sc162="" class="ng-fa-icon dropdown-arrow"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                            </svg></fa-icon></a>
                                                    <div _ngcontent-sc162="" ngbdropdownmenu="" aria-labelledby="navbarDropdownThemes" class="dropdown-menu dropdown-menu-themes" x-placement="bottom"><a _ngcontent-sc162="" data-cy="browseAllThemesDropdownItem" routerlink="/themes" class="dropdown-item" href="/themes">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-primary me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="paint-brush" class="svg-inline--fa fa-paint-brush fa-w-16 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M512 49.55c0 16.14-6.52 31.64-13.9 46C385.06 306.53 349.06 352 287 352a92 92 0 0 1-22.39-3l-63.82-53.18a92.58 92.58 0 0 1-8.73-38.7c0-53.75 21.27-58 225.68-240.64C428.53 6.71 442.74 0 457.9 0 486 0 512 20.64 512 49.55z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M255 382.68a86.64 86.64 0 0 1 1 9.13C256 468.23 203.87 512 128 512 37.94 512 0 439.62 0 357.27c9.79 6.68 44.14 34.35 55.25 34.35a15.26 15.26 0 0 0 14.59-10c20.66-54.44 57.07-69.72 97.19-72.3z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Browse All Themes
                                                        </a><button _ngcontent-sc162="" data-cy="proBootstrapThemesDropdownItem" routerlink="/shop" class="dropdown-item" tabindex="0">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-primary me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="tags" class="svg-inline--fa fa-tags fa-w-20 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M497.94 225.94L286.06 14.06A48 48 0 0 0 252.12 0H48A48 48 0 0 0 0 48v204.12a48 48 0 0 0 14.06 33.94l211.88 211.88a48 48 0 0 0 67.88 0l204.12-204.12a48 48 0 0 0 0-67.88zM112 160a48 48 0 1 1 48-48 48 48 0 0 1-48 48z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M625.94 293.82L421.82 497.94a48 48 0 0 1-67.88 0l-.36-.36 174.06-174.06a90 90 0 0 0 0-127.28L331.4 0h48.72a48 48 0 0 1 33.94 14.06l211.88 211.88a48 48 0 0 1 0 67.88z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Pro Bootstrap Themes
                                                        </button>
                                                        <div _ngcontent-sc162="" class="h6 dropdown-header text-primary">Theme Categories:</div><a _ngcontent-sc162="" data-cy="adminAndDashboardThemeDropdownItem" routerlink="/themes/admin-dashboard" class="dropdown-item" href="/themes/admin-dashboard">Admin &amp; Dashboard</a><a _ngcontent-sc162="" data-cy="landingPagesDropdownItem" routerlink="/themes/landing-pages" class="dropdown-item" href="/themes/landing-pages">Landing Pages</a><a _ngcontent-sc162="" data-cy="businessAndCorporateDropdownItem" routerlink="/themes/business-corporate" class="dropdown-item" href="/themes/business-corporate">Business &amp; Corporate</a><a _ngcontent-sc162="" data-cy="portfolioAndResumeDropdownItem" routerlink="/themes/portfolio-resume" class="dropdown-item" href="/themes/portfolio-resume">Portfolio &amp; Resume</a><a _ngcontent-sc162="" data-cy="blogThemeDropdownItem" routerlink="/themes/blog-news" class="dropdown-item" href="/themes/blog-news">Blog</a>
                                                    </div>
                                                </li>
                                                <li _ngcontent-sc162="" ngbdropdown="" class="nav-item no-caret dropdown"><a _ngcontent-sc162="" id="navbarDropdownTemplates" ngbdropdowntoggle="" data-cy="templatesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="dropdown-toggle nav-link pointer">Templates<fa-icon _ngcontent-sc162="" class="ng-fa-icon dropdown-arrow"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                            </svg></fa-icon></a>
                                                    <div _ngcontent-sc162="" ngbdropdownmenu="" aria-labelledby="navbarDropdownTemplates" class="dropdown-menu dropdown-menu-templates" x-placement="bottom"><a _ngcontent-sc162="" data-cy="browseAllTemplatesDropdownItem" routerlink="/templates" class="dropdown-item" href="/templates">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-blue me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="pencil-ruler" class="svg-inline--fa fa-pencil-ruler fa-w-16 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M138.25 127.05a7.92 7.92 0 0 1-11.2 0l-11.21-11.21a7.92 7.92 0 0 1 0-11.21L177.5 43 143.87 9.3A31.73 31.73 0 0 0 99 9.3L9.29 99a31.74 31.74 0 0 0 0 44.86l100.17 100.19L244 109.49l-44.08-44.12zm364.46 241.1l-33.63-33.64-61.68 61.68a7.92 7.92 0 0 1-11.21 0L385 385a7.92 7.92 0 0 1 0-11.21l61.68-61.68L402.52 268 267.94 402.51l100.21 100.2a31.7 31.7 0 0 0 44.85 0L502.71 413a31.72 31.72 0 0 0 0-44.85z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M497.94 59.32l-45.25-45.25a48.05 48.05 0 0 0-67.95 0l-46 46 113.21 113.2 46-46a48 48 0 0 0-.01-67.95zM19.08 379.68L.33 487.12a21.23 21.23 0 0 0 24.59 24.56l107.45-18.84 296.92-296.93L316.08 82.72z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Browse All Templates
                                                        </a>
                                                        <div _ngcontent-sc162="" class="h6 dropdown-header text-blue">Template Categories:</div><a _ngcontent-sc162="" data-cy="adminAndDashboardTemplateDropdownItem" routerlink="/templates/admin-dashboard" class="dropdown-item" href="/templates/admin-dashboard">Admin &amp; Dashboard</a><a _ngcontent-sc162="" data-cy="landingPagesAndHeadersDropdownItem" routerlink="/templates/landing-pages" class="dropdown-item" href="/templates/landing-pages">Landing Pages &amp; Headers</a><a _ngcontent-sc162="" data-cy="generalPageLayoutsDropdownItem" routerlink="/templates/general" class="dropdown-item" href="/templates/general">General Page Layouts</a><a _ngcontent-sc162="" data-cy="navigationLayoutsDropdownItem" routerlink="/templates/navigation" class="dropdown-item" href="/templates/navigation">Navigation Layouts</a><a _ngcontent-sc162="" data-cy="ecommerceDropdownItem" routerlink="/templates/ecommerce" class="dropdown-item" href="/templates/ecommerce">Ecommerce</a><a _ngcontent-sc162="" data-cy="blogTemplateDropdownItem" routerlink="/templates/blog-news" class="dropdown-item" href="/templates/blog-news">Blog</a>
                                                    </div>
                                                </li>
                                                <li _ngcontent-sc162="" ngbdropdown="" class="nav-item no-caret dropdown"><a _ngcontent-sc162="" id="navbarDropdownBundles" ngbdropdowntoggle="" data-cy="resourcesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="dropdown-toggle nav-link pointer">Bundles<fa-icon _ngcontent-sc162="" class="ng-fa-icon dropdown-arrow"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                            </svg></fa-icon></a>
                                                    <div _ngcontent-sc162="" ngbdropdownmenu="" aria-labelledby="navbarDropdownBundles" class="dropdown-menu" x-placement="bottom"><a _ngcontent-sc162="" data-cy="proHtmlBundleDropdownItem" routerlink="/bundle/pro-html-bundle" class="dropdown-item" href="/bundle/pro-html-bundle">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-bootstrap me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bootstrap" class="svg-inline--fa fa-bootstrap fa-w-18 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                    <path fill="currentColor" d="M333.5,201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4,238.2,333.5,225,333.5,201.4z M517,188.6 c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1,0-55.8,28.1-54.7,58.5c1,29.3-0.3,67.2-9.8,98.1 c-9.6,31-25.7,50.6-52.2,53.1v28.5c26.4,2.5,42.6,22.1,52.2,53.1c9.5,30.9,10.9,68.8,9.8,98.1c-1.1,30.5,22.7,58.5,54.7,58.5h328.7 c32.1,0,55.8-28.1,54.7-58.5c-1-29.3,0.3-67.2,9.8-98.1c9.6-31,25.7-50.6,52.1-53.1v-28.5C542.7,239.2,526.5,219.6,517,188.6z M300.2,375.1h-97.9V136.8h97.4c43.3,0,71.7,23.4,71.7,59.4c0,25.3-19.1,47.9-43.5,51.8v1.3c33.2,3.6,55.5,26.6,55.5,58.3 C383.4,349.7,352.1,375.1,300.2,375.1z M290.2,266.4h-50.1v78.4h52.3c34.2,0,52.3-13.7,52.3-39.5 C344.7,279.6,326.1,266.4,290.2,266.4z"></path>
                                                                </svg></fa-icon>Pro Bootstrap HTML Bundle
                                                        </a><a _ngcontent-sc162="" data-cy="proAngularBundleDropdownItem" routerlink="/bundle/pro-angular-bundle" class="dropdown-item" href="/bundle/pro-angular-bundle">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-angular me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="angular" class="svg-inline--fa fa-angular fa-w-14 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path fill="currentColor" d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path>
                                                                </svg></fa-icon>Pro Angular Bundle
                                                        </a></div>
                                                </li>
                                                <li _ngcontent-sc162="" class="nav-item position-relative"><a _ngcontent-sc162="" data-cy="solutionsNavLink" routerlink="/solution/contact-forms" class="nav-link pointer" href="/solution/contact-forms">Forms</a><span _ngcontent-sc162="" class="badge-new badge bg-primary-soft text-primary position-absolute d-none d-lg-block">New!</span></li>
                                                <li _ngcontent-sc162="" ngbdropdown="" class="nav-item no-caret dropdown"><a _ngcontent-sc162="" id="navbarDropdownResources" ngbdropdowntoggle="" data-cy="resourcesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="dropdown-toggle nav-link pointer">Resources<fa-icon _ngcontent-sc162="" class="ng-fa-icon dropdown-arrow"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                            </svg></fa-icon></a>
                                                    <div _ngcontent-sc162="" ngbdropdownmenu="" aria-labelledby="navbarDropdownResources" class="dropdown-menu" x-placement="bottom">
                                                        <div _ngcontent-sc162="" class="h6 dropdown-header text-primary">Resources</div><a _ngcontent-sc162="" data-cy="snippetsDropdownItem" routerlink="/snippets" class="dropdown-item" href="/snippets">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="code" class="svg-inline--fa fa-code fa-w-20 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M422.12 18.16a12 12 0 0 1 8.2 14.9l-136.5 470.2a12 12 0 0 1-14.89 8.2l-61-17.7a12 12 0 0 1-8.2-14.9l136.5-470.2a12 12 0 0 1 14.89-8.2z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M636.23 247.26l-144.11-135.2a12.11 12.11 0 0 0-17 .5L431.62 159a12 12 0 0 0 .81 17.2L523 256l-90.59 79.7a11.92 11.92 0 0 0-.81 17.2l43.5 46.4a12 12 0 0 0 17 .6l144.11-135.1a11.94 11.94 0 0 0 .02-17.54zm-427.8-88.2l-43.5-46.4a12 12 0 0 0-17-.5l-144.11 135a11.94 11.94 0 0 0 0 17.5l144.11 135.1a11.92 11.92 0 0 0 17-.5l43.5-46.4a12 12 0 0 0-.81-17.2L117 256l90.6-79.7a11.92 11.92 0 0 0 .83-17.24z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Snippets
                                                        </a><a _ngcontent-sc162="" data-cy="knowledgeBaseDropdownItem" routerlink="/knowledge-base" class="dropdown-item" href="/knowledge-base">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M256 8C119 8 8 119.08 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 422a46 46 0 1 1 46-46 46.05 46.05 0 0 1-46 46zm40-131.33V300a12 12 0 0 1-12 12h-56a12 12 0 0 1-12-12v-4c0-41.06 31.13-57.47 54.65-70.66 20.17-11.31 32.54-19 32.54-34 0-19.82-25.27-33-45.7-33-27.19 0-39.44 13.14-57.3 35.79a12 12 0 0 1-16.67 2.13L148.82 170a12 12 0 0 1-2.71-16.26C173.4 113 208.16 90 262.66 90c56.34 0 116.53 44 116.53 102 0 77-83.19 78.21-83.19 106.67z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M256 338a46 46 0 1 0 46 46 46 46 0 0 0-46-46zm6.66-248c-54.5 0-89.26 23-116.55 63.76a12 12 0 0 0 2.71 16.24l34.7 26.31a12 12 0 0 0 16.67-2.13c17.86-22.65 30.11-35.79 57.3-35.79 20.43 0 45.7 13.14 45.7 33 0 15-12.37 22.66-32.54 34C247.13 238.53 216 254.94 216 296v4a12 12 0 0 0 12 12h56a12 12 0 0 0 12-12v-1.33c0-28.46 83.19-29.67 83.19-106.67 0-58-60.19-102-116.53-102z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Knowledge Base
                                                        </a><a _ngcontent-sc162="" data-cy="bootstrapResourcesDropdownItem" routerlink="/bootstrap-resources" class="dropdown-item" href="/bootstrap-resources">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="list-ul" class="svg-inline--fa fa-list-ul fa-w-16 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M496 384H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M48 48a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Bootstrap Resources List
                                                        </a><a _ngcontent-sc162="" data-cy="guidesDropdownItem" routerlink="/guides" class="dropdown-item" href="/guides">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="books" class="svg-inline--fa fa-books fa-w-18 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M96 0H32A32 32 0 0 0 0 32v64h128V32A32 32 0 0 0 96 0zM0 384h128V128H0zm0 96a32 32 0 0 0 32 32h64a32 32 0 0 0 32-32v-64H0zm513.62-17.78L401.08 42.71l-60.26 16.14 112.35 418.8c.11.39.2.79.29 1.18l60.29-16.15c-.04-.15-.09-.3-.13-.46zM160 480a32 32 0 0 0 32 32h64a32 32 0 0 0 32-32v-64H160zM256 0h-64a32 32 0 0 0-32 32v64h124.79l-8-29.65a23.94 23.94 0 0 1 11.17-27V32A32 32 0 0 0 256 0zm-96 384h128V128H160z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M0 416h128v-32H0zm0-288h128V96H0zm575.17 317.65L460.39 17.78a23.89 23.89 0 0 0-29.18-17h-.09L415.73 5a24 24 0 0 0-16.9 29.36l114.79 427.86a23.89 23.89 0 0 0 29.18 17h.09l15.38-4.22a24 24 0 0 0 16.9-29.35zM160 416h128v-32H160zM338.39 49.78a23.89 23.89 0 0 0-29.18-17h-.09L293.73 37a24 24 0 0 0-16.9 29.36l8 29.65H160v32h128V108l103.62 386.22a23.89 23.89 0 0 0 29.18 17h.09l15.38-4.22a24 24 0 0 0 16.9-29.33z"></path>
                                                                    </g>
                                                                </svg></fa-icon>Guides
                                                        </a>
                                                        <div _ngcontent-sc162="" class="h6 dropdown-header text-primary">Tools &amp; Plugins</div><a _ngcontent-sc162="" data-cy="sbAngularInspectorDropdownItem" routerlink="/sb-angular-inspector" class="dropdown-item" href="/sb-angular-inspector">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="angular" class="svg-inline--fa fa-angular fa-w-14 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path fill="currentColor" d="M185.7 268.1h76.2l-38.1-91.6-38.1 91.6zM223.8 32L16 106.4l31.8 275.7 176 97.9 176-97.9 31.8-275.7zM354 373.8h-48.6l-26.2-65.4H168.6l-26.2 65.4H93.7L223.8 81.5z"></path>
                                                                </svg></fa-icon>SB Angular Inspector
                                                        </a><a _ngcontent-sc162="" data-cy="sbFormBuilderDropdownItem" routerlink="/sb-form-builder" class="dropdown-item" href="/sb-form-builder">
                                                            <fa-icon _ngcontent-sc162="" class="ng-fa-icon text-gray-500 me-2"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="wrench" class="svg-inline--fa fa-wrench fa-w-16 fa-fw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <g class="fa-group">
                                                                        <path class="fa-secondary" fill="currentColor" d="M322 280.47l-.26.26a144.62 144.62 0 0 1-90.3-90.64L18.09 403.41a64 64 0 0 0 90.5 90.5L322 280.49zM63.35 472.65a24 24 0 1 1 24-24 24 24 0 0 1-24 24z"></path>
                                                                        <path class="fa-primary" fill="currentColor" d="M469.69 246.2c-40 40-97.48 51-147.72 34.27l-.26.26a144.64 144.64 0 0 1-90.41-90.94l.13-.13c-16.54-50.17-5.6-107.71 34.13-147.4a144.38 144.38 0 0 1 136.91-38 12 12 0 0 1 5.67 20.19l-74.53 74.48 11.33 68L413 178.28l74.53-74.52a12 12 0 0 1 20.17 5.52 144 144 0 0 1-38.01 136.92z"></path>
                                                                    </g>
                                                                </svg></fa-icon>SB Form Builder
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div _ngcontent-sc162="" data-cy="topNavItemsRight" class="navbar-nav align-items-lg-center nav-right">
                                                <div _ngcontent-sc162="" class="nav-item"><a _ngcontent-sc162="" data-cy="guidesNavLink" routerlink="/blog" class="nav-link pointer" href="/blog">Blog</a></div>
                                                <div _ngcontent-sc162="" class="nav-item mb-3 mb-lg-0"><a _ngcontent-sc162="" data-cy="guidesNavLink" routerlink="/auth/login" class="nav-link pointer" href="/auth/login">Log In </a></div>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <!---->
                            </sb-top-nav>
                            <router-outlet _ngcontent-sc246=""></router-outlet>
                            <sbw-home _nghost-sc240="">
                                <sbpro-page-header _ngcontent-sc240="" headerclasses="bg-light page-header-light" bordertype="angled" borderclasses="text-white" _nghost-sc142="">
                                    <header _ngcontent-sc142="" class="page-header-ui bg-light page-header-light" style="background-image:undefined;">
                                        <div _ngcontent-sc240="" class="page-header-ui-content pt-10 pb-5 pb-lg-0 z-1">
                                            <div _ngcontent-sc240="" class="container">
                                                <div _ngcontent-sc240="" class="row">
                                                    <div _ngcontent-sc240="" class="col-lg-7">
                                                        <h1 _ngcontent-sc240="" class="page-header-ui-title">Bootstrap themes, templates, and UI tools to help you <span _ngcontent-sc240="" class="text-primary">start your next project!</span></h1>
                                                        <div _ngcontent-sc240="" class="page-header-ui-text mb-4">Start Bootstrap creates free, open source, MIT license, Bootstrap <a _ngcontent-sc240="" routerlink="/themes" href="/themes">themes</a>, <a _ngcontent-sc240="" routerlink="/templates" href="/templates">templates</a>, and <a _ngcontent-sc240="" routerlink="/snippets" href="/snippets">code snippets</a> for you to use on any project, <a _ngcontent-sc240="" routerlink="/guides" href="/guides">guides</a> to help you learn more about designing and developing with the Bootstrap framework, and <a _ngcontent-sc240="" routerlink="/shop" href="/shop">premium Bootstrap UI products</a>.</div><button _ngcontent-sc240="" role="button" class="btn btn-primary btn-lg shadow fw-500">Browse Templates &amp; Themes</button>
                                                    </div>
                                                    <div _ngcontent-sc240="" class="col-lg-5 d-none d-lg-block mb-n15"><img _ngcontent-sc240="" src="assets/img/freepik/content-pana.svg" alt="" class="img-fluid"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <sbpro-border _ngcontent-sc142="" _nghost-sc126="">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-sc126="" class="svg-border-angled text-white"><svg _ngcontent-sc126="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
                                                    <polygon _ngcontent-sc126="" points="0,100 100,0 100,100"></polygon>
                                                </svg></div>
                                            <!---->
                                        </sbpro-border>
                                    </header>
                                </sbpro-page-header>
                                <sbpro-page-section _ngcontent-sc240="" sectionclasses="pt-15 pb-10 bg-white" bordertype="angled" borderclasses="text-light" _nghost-sc143="">
                                    <section _ngcontent-sc143="" style="background-image:undefined;" class="pt-15 pb-10 bg-white">
                                        <sbw-product-cards _ngcontent-sc240="" category="ALL" _nghost-sc234="">
                                            <div _ngcontent-sc234="" class="container">
                                                <sbw-quick-nav _ngcontent-sc234="" _nghost-sc233="">
                                                    <div _ngcontent-sc233="" class="d-flex justify-content-between flex-column flex-xl-row">
                                                        <div _ngcontent-sc233="" class="mb-3 mb-xl-0">
                                                            <div _ngcontent-sc233="" class="fst-italic text-xs mb-1">Category</div>
                                                            <sbpro-dropdown _ngcontent-sc233="" dropdownstyle="text" background="btn-white shadow" placement="bottom-start" _nghost-sc136="">
                                                                <div _ngcontent-sc136="" ngbdropdown="" display="dynamic" class="me-3 no-caret dropdown"><button _ngcontent-sc136="" ngbdropdowntoggle="" data-cy="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn sb-btn-icon sb-btn-transparent-dark btn-white shadow">
                                                                        <div _ngcontent-sc233="" data-cy="selectedCategory" class="dropdown-trigger">All</div>
                                                                        <div _ngcontent-sc136="" class="dropdown-arrow">
                                                                            <fa-icon _ngcontent-sc136="" class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                                    <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                                                                </svg></fa-icon>
                                                                        </div>
                                                                    </button>
                                                                    <div _ngcontent-sc136="" ngbdropdownmenu="" aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-end border-0 shadow" x-placement="bottom">
                                                                        <div _ngcontent-sc233="" class="dropdown-items"><a _ngcontent-sc233="" data-cy="ALL" class="dropdown-item text-primary">All</a><a _ngcontent-sc233="" data-cy="ADMIN_DASHBOARD" class="dropdown-item">Admin &amp; Dashboard</a><a _ngcontent-sc233="" data-cy="LANDING_PAGES" class="dropdown-item">Landing Pages</a><a _ngcontent-sc233="" data-cy="BUSINESS_CORPORATE" class="dropdown-item">Business &amp; Corporate</a><a _ngcontent-sc233="" data-cy="PORTFOLIO_RESUME" class="dropdown-item">Portfolio &amp; Resume</a><a _ngcontent-sc233="" data-cy="GENERAL_PAGE_LAYOUTS" class="dropdown-item">General Page Layouts</a><a _ngcontent-sc233="" data-cy="NAVIGATION_LAYOUTS" class="dropdown-item">Navigation Layouts</a><a _ngcontent-sc233="" data-cy="ECOMMERCE" class="dropdown-item">Ecommerce</a><a _ngcontent-sc233="" data-cy="BLOG_NEWS" class="dropdown-item">Blog &amp; News</a>
                                                                            <div _ngcontent-sc233="" class="dropdown-divider"></div><a _ngcontent-sc233="" data-cy="BUNDLE" class="dropdown-item">Bundles</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </sbpro-dropdown>
                                                        </div>
                                                        <div _ngcontent-sc233="" class="d-flex flex-column flex-lg-row">
                                                            <div _ngcontent-sc233="" class="mb-3 mb-lg-0">
                                                                <div _ngcontent-sc233="" class="fst-italic text-xs mb-1">Technologies</div>
                                                                <div _ngcontent-sc233="" class="btn-group btn-group-toggle btn-group-quick-nav"><label _ngcontent-sc233="" data-cy="showHTML" class="btn btn-white active" data-cy-value="true"><input _ngcontent-sc233="" type="radio">
                                                                        <fa-icon _ngcontent-sc233="" class="ng-fa-icon me-2 text-primary"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" class="svg-inline--fa fa-check-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                                <path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
                                                                            </svg></fa-icon>
                                                                        <!---->
                                                                        <!---->HTML
                                                                    </label><label _ngcontent-sc233="" data-cy="showAngular" class="btn btn-white active" data-cy-value="true"><input _ngcontent-sc233="" type="radio">
                                                                        <fa-icon _ngcontent-sc233="" class="ng-fa-icon me-2 text-primary"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" class="svg-inline--fa fa-check-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                                <path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
                                                                            </svg></fa-icon>
                                                                        <!---->
                                                                        <!---->Angular
                                                                    </label><label _ngcontent-sc233="" data-cy="showVue" class="btn btn-white active" data-cy-value="true"><input _ngcontent-sc233="" type="radio">
                                                                        <fa-icon _ngcontent-sc233="" class="ng-fa-icon me-2 text-primary"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" class="svg-inline--fa fa-check-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                                <path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
                                                                            </svg></fa-icon>
                                                                        <!---->
                                                                        <!---->Vue
                                                                    </label></div>
                                                            </div>
                                                            <!---->
                                                            <div _ngcontent-sc233="" class="ms-lg-3 mb-3 mb-lg-0">
                                                                <div _ngcontent-sc233="" class="fst-italic text-xs mb-1">Price</div>
                                                                <div _ngcontent-sc233="" class="btn-group btn-group-toggle btn-group-quick-nav"><label _ngcontent-sc233="" data-cy="showPro" class="btn btn-white active" data-cy-value="true"><input _ngcontent-sc233="" type="radio">
                                                                        <fa-icon _ngcontent-sc233="" class="ng-fa-icon me-2 text-primary"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" class="svg-inline--fa fa-check-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                                <path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
                                                                            </svg></fa-icon>
                                                                        <!---->
                                                                        <!---->Pro
                                                                    </label><label _ngcontent-sc233="" data-cy="showFree" class="btn btn-white active" data-cy-value="true"><input _ngcontent-sc233="" type="radio">
                                                                        <fa-icon _ngcontent-sc233="" class="ng-fa-icon me-2 text-primary"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" class="svg-inline--fa fa-check-square fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                                <path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path>
                                                                            </svg></fa-icon>
                                                                        <!---->
                                                                        <!---->Free
                                                                    </label></div>
                                                            </div>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <hr _ngcontent-sc233="" class="mt-3 mb-5">
                                                </sbw-quick-nav>
                                                <div _ngcontent-sc234="" class="row justify-content-center">
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-admin-2" href="/theme/sb-admin-2">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/sb-admin-2.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/sb-admin-2.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/sb-admin-2.jpg" alt="SB Admin 2">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB Admin 2</div>
                                                                <div _ngcontent-sc234="" class="small">A free Bootstrap admin theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-admin-2-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="material-admin-pro" href="/theme/material-admin-pro">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/material-admin-pro.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/material-admin-pro.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/material-admin-pro.jpg" alt="Material Admin Pro">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Material Admin Pro</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Bootstrap admin theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="material-admin-pro-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-admin-pro" href="/theme/sb-admin-pro">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro.jpg" alt="SB Admin Pro">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB Admin Pro</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Bootstrap admin theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-admin-pro-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-ui-kit-pro" href="/theme/sb-ui-kit-pro">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro.jpg" alt="SB UI Kit Pro">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB UI Kit Pro</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Bootstrap UI Kit</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-ui-kit-pro-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-admin" href="/template/sb-admin">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin.jpg" alt="SB Admin">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB Admin</div>
                                                                <div _ngcontent-sc234="" class="small">A free Bootstrap admin template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-admin-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="freelancer" href="/theme/freelancer">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/freelancer.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/freelancer.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/freelancer.jpg" alt="Freelancer">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Freelancer</div>
                                                                <div _ngcontent-sc234="" class="small">A one page freelancer theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="freelancer-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="agency" href="/theme/agency">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/agency.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/agency.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/agency.jpg" alt="Agency">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Agency</div>
                                                                <div _ngcontent-sc234="" class="small">A one page agency theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="agency-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="creative" href="/theme/creative">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/creative.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/creative.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/creative.jpg" alt="Creative">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Creative</div>
                                                                <div _ngcontent-sc234="" class="small">A one page creative theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="creative-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-admin-pro-angular" href="/theme/sb-admin-pro-angular">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro-angular.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro-angular.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/sb-admin-pro-angular.jpg" alt="SB Admin Pro Angular">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB Admin Pro Angular</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Angular 12 admin template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-admin-pro-angular-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-ui-kit-pro-angular" href="/theme/sb-ui-kit-pro-angular">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-angular.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-angular.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-angular.jpg" alt="SB UI Kit Pro Angular">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB UI Kit Pro Angular</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Angular 12 UI Kit</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-ui-kit-pro-angular-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-ui-kit-pro-vue" href="/theme/sb-ui-kit-pro-vue">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-vue.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-vue.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/sb-ui-kit-pro-vue.jpg" alt="SB UI Kit Pro Vue">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB UI Kit Pro Vue</div>
                                                                <div _ngcontent-sc234="" class="small">A premium Vue.js UI Kit</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-ui-kit-pro-vue-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="simple-sidebar" href="/template/simple-sidebar">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/simple-sidebar.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/simple-sidebar.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/simple-sidebar.jpg" alt="Simple Sidebar">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Simple Sidebar</div>
                                                                <div _ngcontent-sc234="" class="small">A Bootstrap sidebar template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="simple-sidebar-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="grayscale" href="/theme/grayscale">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/grayscale.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/grayscale.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/grayscale.jpg" alt="Grayscale">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Grayscale</div>
                                                                <div _ngcontent-sc234="" class="small">A multipurpose one page theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="grayscale-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="clean-blog-angular" href="/theme/clean-blog-angular">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-angular.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-angular.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-angular.jpg" alt="Clean Blog Angular">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Clean Blog Angular</div>
                                                                <div _ngcontent-sc234="" class="small">Blog built with Angular 9 and Node.js</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="clean-blog-angular-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="clean-blog" href="/theme/clean-blog">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog.jpg" alt="Clean Blog">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Clean Blog</div>
                                                                <div _ngcontent-sc234="" class="small">A clean blog theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="clean-blog-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="resume" href="/theme/resume">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/resume.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/resume.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/resume.jpg" alt="Resume">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Resume</div>
                                                                <div _ngcontent-sc234="" class="small">A simple CV/resume theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="resume-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="landing-page" href="/theme/landing-page">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/landing-page.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/landing-page.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/landing-page.jpg" alt="Landing Page">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Landing Page</div>
                                                                <div _ngcontent-sc234="" class="small">A clean, functional landing page theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="landing-page-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="shop-homepage" href="/template/shop-homepage">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/shop-homepage.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/shop-homepage.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/shop-homepage.jpg" alt="Shop Homepage">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Shop Homepage</div>
                                                                <div _ngcontent-sc234="" class="small">An online store homepage template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="shop-homepage-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="stylish-portfolio" href="/theme/stylish-portfolio">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/stylish-portfolio.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/stylish-portfolio.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/stylish-portfolio.jpg" alt="Stylish Portfolio">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Stylish Portfolio</div>
                                                                <div _ngcontent-sc234="" class="small">A stylish Bootstrap portfolio theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="stylish-portfolio-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="coming-soon" href="/theme/coming-soon">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/coming-soon.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/coming-soon.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/coming-soon.jpg" alt="Coming Soon">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Coming Soon</div>
                                                                <div _ngcontent-sc234="" class="small">A coming soon landing page</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="coming-soon-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="modern-business" href="/template/modern-business">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/modern-business.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/modern-business.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/modern-business.jpg" alt="Modern Business">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Modern Business</div>
                                                                <div _ngcontent-sc234="" class="small">A multipurpose website template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="modern-business-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="scrolling-nav" href="/template/scrolling-nav">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/scrolling-nav.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/scrolling-nav.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/scrolling-nav.jpg" alt="Scrolling Nav">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Scrolling Nav</div>
                                                                <div _ngcontent-sc234="" class="small">A scrolling navigation template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="scrolling-nav-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="sb-admin-angular" href="/template/sb-admin-angular">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin-angular.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin-angular.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/sb-admin-angular.jpg" alt="SB Admin Angular">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">SB Admin Angular</div>
                                                                <div _ngcontent-sc234="" class="small">An Angular version of SB Admin</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="sb-admin-angular-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="bare" href="/template/bare">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/bare.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/bare.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/bare.jpg" alt="Bare">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Bare</div>
                                                                <div _ngcontent-sc234="" class="small">A Bootstrap HTML starter template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="bare-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="one-page-wonder" href="/theme/one-page-wonder">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/one-page-wonder.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/one-page-wonder.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/one-page-wonder.jpg" alt="One Page Wonder">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">One Page Wonder</div>
                                                                <div _ngcontent-sc234="" class="small">A simple one page website template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="one-page-wonder-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="blog-home" href="/template/blog-home">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/blog-home.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/blog-home.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/blog-home.jpg" alt="Blog Home">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Blog Home</div>
                                                                <div _ngcontent-sc234="" class="small">A blog home page template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="blog-home-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="business-casual" href="/theme/business-casual">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/business-casual.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/business-casual.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/business-casual.jpg" alt="Business Casual">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Business Casual</div>
                                                                <div _ngcontent-sc234="" class="small">A fully developed business website</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="business-casual-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="blog-post" href="/template/blog-post">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/blog-post.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/blog-post.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/blog-post.jpg" alt="Blog Post">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Blog Post</div>
                                                                <div _ngcontent-sc234="" class="small">A blog post starter template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="blog-post-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="heroic-features" href="/template/heroic-features">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/heroic-features.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/heroic-features.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/heroic-features.jpg" alt="Heroic Features">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Heroic Features</div>
                                                                <div _ngcontent-sc234="" class="small">A basic Bootstrap home page template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="heroic-features-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="new-age" href="/theme/new-age">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/new-age.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/new-age.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/new-age.jpg" alt="New Age">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">New Age</div>
                                                                <div _ngcontent-sc234="" class="small">An app landing page theme</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="new-age-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="business-frontpage" href="/template/business-frontpage">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/business-frontpage.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/business-frontpage.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/business-frontpage.jpg" alt="Business Frontpage">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Business Frontpage</div>
                                                                <div _ngcontent-sc234="" class="small">A business home page template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="business-frontpage-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="small-business" href="/template/small-business">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/small-business.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/small-business.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/small-business.jpg" alt="Small Business">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Small Business</div>
                                                                <div _ngcontent-sc234="" class="small">A simple business Bootstrap template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="small-business-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="shop-item" href="/template/shop-item">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/shop-item.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/shop-item.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/shop-item.jpg" alt="Shop Item">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Shop Item</div>
                                                                <div _ngcontent-sc234="" class="small">An online store item template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="shop-item-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="full-width-pics" href="/template/full-width-pics">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/full-width-pics.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/full-width-pics.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/full-width-pics.jpg" alt="Full Width Pics">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Full Width Pics</div>
                                                                <div _ngcontent-sc234="" class="small">Full width picture backgrounds</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="full-width-pics-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="clean-blog-jekyll" href="/theme/clean-blog-jekyll">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-jekyll.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-jekyll.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/themes/clean-blog-jekyll.jpg" alt="Clean Blog Jekyll">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Clean Blog Jekyll</div>
                                                                <div _ngcontent-sc234="" class="small">Clean Blog for Jekyll</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="clean-blog-jekyll-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="the-big-picture" href="/template/the-big-picture">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/templates/the-big-picture.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/templates/the-big-picture.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/templates/the-big-picture.jpg" alt="The Big Picture">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">The Big Picture</div>
                                                                <div _ngcontent-sc234="" class="small">A starter portfolio template</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <div _ngcontent-sc234="" class="badge bg-green-soft text-green">Free</div>
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="the-big-picture-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="pro-html-bundle" href="/bundle/pro-html-bundle">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/html-bundle.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/html-bundle.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/html-bundle.jpg" alt="Pro HTML Bundle">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Pro HTML Bundle</div>
                                                                <div _ngcontent-sc234="" class="small">Includes SB Admin Pro and SB UI Kit Pro</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="pro-html-bundle-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-sc234="" class="col-lg-4 col-md-6 mb-5"><a _ngcontent-sc234="" tabindex="0" class="d-block rounded-3 lift lift-lg mb-3 pointer" style="--aspect-ratio: 1.5;" data-cy="pro-angular-bundle" href="/bundle/pro-angular-bundle">
                                                            <picture _ngcontent-sc234="">
                                                                <source _ngcontent-sc234="" type="image/webp" srcset="https://assets.startbootstrap.com/img/screenshots/premium/angular-bundle.medium.webp">
                                                                <source _ngcontent-sc234="" type="image/jpeg" srcset="https://assets.startbootstrap.com/img/screenshots/premium/angular-bundle.jpg"><img _ngcontent-sc234="" class="img-fluid rounded-3" src="https://assets.startbootstrap.com/img/screenshots/premium/angular-bundle.jpg" alt="Pro Angular Bundle">
                                                            </picture>
                                                        </a>
                                                        <div _ngcontent-sc234="" class="d-flex justify-content-between align-items-center">
                                                            <div _ngcontent-sc234="" sbwinview="">
                                                                <div _ngcontent-sc234="" class="h6 mb-0">Pro Angular Bundle</div>
                                                                <div _ngcontent-sc234="" class="small">Includes SB Admin Pro Angular and SB UI Kit Pro Angular</div>
                                                            </div>
                                                            <div _ngcontent-sc234="" class="text-end flex-shrink-0">
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="badge bg-blue-soft text-blue">Pro</div>
                                                                <!---->
                                                                <div _ngcontent-sc234="" class="text-xs" data-cy="pro-angular-bundle-downloadCount">
                                                                    <fa-icon _ngcontent-sc234="" class="ng-fa-icon me-1"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" class="svg-inline--fa fa-download fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                            <g class="fa-group">
                                                                                <path class="fa-secondary" fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z"></path>
                                                                                <path class="fa-primary" fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z"></path>
                                                                            </g>
                                                                        </svg></fa-icon>X,XXX
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </sbw-product-cards>
                                        <sbpro-border _ngcontent-sc143="" _nghost-sc126="">
                                            <!---->
                                            <!---->
                                            <div _ngcontent-sc126="" class="svg-border-angled text-light"><svg _ngcontent-sc126="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
                                                    <polygon _ngcontent-sc126="" points="0,100 100,0 100,100"></polygon>
                                                </svg></div>
                                            <!---->
                                        </sbpro-border>
                                    </section>
                                </sbpro-page-section>
                            </sbw-home>
                            <!---->
                        </main>
                    </div>
                    <div _ngcontent-sc178="" id="layoutDefault_footer">
                        <sb-footer _ngcontent-sc178="" _nghost-sc164="">
                            <footer _ngcontent-sc164="" class="footer pt-10 pb-5 mt-auto bg-light footer-light">
                                <div _ngcontent-sc164="" class="container">
                                    <sbw-newsletter-signup _ngcontent-sc164="" _nghost-sc163="">
                                        <div _ngcontent-sc163="" class="card p-sm-4 p-md-5 signup-form">
                                            <div _ngcontent-sc163="" class="card-body">
                                                <h2 _ngcontent-sc163="">Want more Bootstrap themes, templates, and UI tools?</h2>
                                                <p _ngcontent-sc163="" class="lead">Subscribe to get updated when new Bootstrap related products arrive!</p>
                                                <form _ngcontent-sc163="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                                    <div _ngcontent-sc163="" class="input-group"><input _ngcontent-sc163="" data-cy="newsletterSignupEmailButton" type="email" name="EMAIL" placeholder="Email address..." aria-label="Your email address..." formcontrolname="email" class="form-control ng-untouched ng-pristine ng-invalid" value=""><button _ngcontent-sc163="" data-cy="newsletterSignupSubmit" type="submit" class="btn-signup btn btn-primary fw-500" disabled="">Subscribe!</button>
                                                        <div _ngcontent-sc163="" class="invalid-feedback mt-2">Email required.</div>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </form>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <p _ngcontent-sc163="" class="text-xs fst-italic mt-4">This site is protected by reCAPTCHA and the Google <a _ngcontent-sc163="" href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy </a>and <a _ngcontent-sc163="" href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service </a>apply.</p>
                                            </div><img _ngcontent-sc163="" src="/assets/img/freepik/wall-post-pana.svg" alt="Man standing with tablet SVG" class="signup-form-img d-none d-md-block">
                                        </div>
                                    </sbw-newsletter-signup>
                                    <div _ngcontent-sc164="" class="row">
                                        <div _ngcontent-sc164="" class="col-lg-3">
                                            <div _ngcontent-sc164="" class="footer-brand">Start Bootstrap</div>
                                            <div _ngcontent-sc164="" class="mb-3">Free &amp; premium UI tools to help you build better websites</div>
                                            <div _ngcontent-sc164="" class="icon-list-social mb-5"><a _ngcontent-sc164="" href="https://twitter.com/SBootstrap" target="_blank" rel="noopener" title="Twitter" class="icon-list-social-link">
                                                    <fa-icon _ngcontent-sc164="" class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                                        </svg></fa-icon>
                                                </a><a _ngcontent-sc164="" href="https://github.com/StartBootstrap" target="_blank" rel="noopener" title="GitHub" class="icon-list-social-link">
                                                    <fa-icon _ngcontent-sc164="" class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                            <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                                                        </svg></fa-icon>
                                                </a><a _ngcontent-sc164="" href="https://facebook.com/StartBootstrap" target="_blank" rel="noopener" title="Facebook" class="icon-list-social-link">
                                                    <fa-icon _ngcontent-sc164="" class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                                        </svg></fa-icon>
                                                </a></div>
                                        </div>
                                        <div _ngcontent-sc164="" class="col-lg-9">
                                            <div _ngcontent-sc164="" class="row">
                                                <div _ngcontent-sc164="" class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                                    <div _ngcontent-sc164="" class="text-uppercase-expanded text-xs mb-4">Products</div>
                                                    <ul _ngcontent-sc164="" class="list-unstyled mb-0">
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/themes" href="/themes">Themes</a></li>
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/templates" href="/templates">Templates</a></li>
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/snippets" href="/snippets">Snippets</a></li>
                                                        <li _ngcontent-sc164=""><a _ngcontent-sc164="" routerlink="/guides" href="/guides">Guides</a></li>
                                                    </ul>
                                                </div>
                                                <div _ngcontent-sc164="" class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                                    <div _ngcontent-sc164="" class="text-uppercase-expanded text-xs mb-4">Resources</div>
                                                    <ul _ngcontent-sc164="" class="list-unstyled mb-0">
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/blog" href="/blog">Blog</a></li>
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/bootstrap-resources" href="/bootstrap-resources">Bootstrap Resources</a></li>
                                                        <li _ngcontent-sc164=""><a _ngcontent-sc164="" routerlink="/sb-angular-inspector" href="/sb-angular-inspector">SB Angular Inspector</a></li>
                                                    </ul>
                                                </div>
                                                <div _ngcontent-sc164="" class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                                    <div _ngcontent-sc164="" class="text-uppercase-expanded text-xs mb-4">Support</div>
                                                    <ul _ngcontent-sc164="" class="list-unstyled mb-0">
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/knowledge-base" href="/knowledge-base">Knowledge Base</a></li>
                                                        <li _ngcontent-sc164=""><a _ngcontent-sc164="" routerlink="/custom-development" href="/custom-development">Custom Development</a></li>
                                                    </ul>
                                                </div>
                                                <div _ngcontent-sc164="" class="col-lg-3 col-md-6">
                                                    <div _ngcontent-sc164="" class="text-uppercase-expanded text-xs mb-4">Company</div>
                                                    <ul _ngcontent-sc164="" class="list-unstyled mb-0">
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/about-us" href="/about-us">About Us</a></li>
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/privacy-policy" href="/privacy-policy">Privacy Policy</a></li>
                                                        <li _ngcontent-sc164="" class="mb-2"><a _ngcontent-sc164="" routerlink="/terms-and-conditions" href="/terms-and-conditions">Terms and Conditions</a></li>
                                                        <li _ngcontent-sc164=""><a _ngcontent-sc164="" routerlink="/licenses" href="/licenses">Licenses</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr _ngcontent-sc164="" class="my-5">
                                    <div _ngcontent-sc164="" class="text-lg-center">Copyright © Start Bootstrap LLC 2021</div>
                                    <div _ngcontent-sc164="" class="text-lg-center text-xs fst-italic">Website built with <a _ngcontent-sc164="" routerlink="theme/sb-ui-kit-pro" href="/theme/sb-ui-kit-pro">SB UI Kit Pro</a> and <a _ngcontent-sc164="" routerlink="theme/sb-admin-pro" href="/theme/sb-admin-pro">SB Admin Pro</a> with Illustrations by <a _ngcontent-sc164="" href="https://stories.freepik.com/">Stories by Freepik</a>.</div>
                                </div>
                            </footer>
                        </sb-footer>
                    </div>
                </div>
            </sbw-layout-site>
        </sbw-site>
        <!---->
    </app-root>
    <script src="runtime-es2015.c4cb2acd149335d3eee3.js" crossorigin="anonymous" type="module"></script>
    <script src="runtime-es5.c4cb2acd149335d3eee3.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="polyfills-es5.aea832a3683db1052b58.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="polyfills-es2015.1db1c6d807fbf3566de2.js" crossorigin="anonymous" type="module"></script>
    <script src="scripts.7db5a8a1df1d2146c813.js" crossorigin="anonymous" defer=""></script>
    <script src="vendor-es2015.576a3a18d678276c35df.js" crossorigin="anonymous" type="module"></script>
    <script src="vendor-es5.576a3a18d678276c35df.js" crossorigin="anonymous" nomodule="" defer=""></script>
    <script src="main-es2015.6dbaca64f6b747658e78.js" crossorigin="anonymous" type="module"></script>
    <script src="main-es5.6dbaca64f6b747658e78.js" crossorigin="anonymous" nomodule="" defer=""></script>


    <script type="text/javascript">
        (function() {
            window['__CF$cv$params'] = {
                r: '6c3720ffdb738819',
                m: 'rK00rUHuTutDexyNXen_K9HGGDVNDwz5EyNceHuai4I-1640488361-0-Ae+9Q6tT5yPJ+WJdraecLt6zjb9z8nHdDQSVvuDnnXhnjdtUKmg/odQdeKei+ej59RBvwR8rFoYcu78rtrvjXp2fTji+S3Jh65J3Ma+7X3YRg6hk3WVLjU3sZwSJ8sdNqJWlYL99fe3f+anPbAiLnvU=',
                s: [0x5ebbd55ca9, 0x0f2f7b5df0],
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c3720ffdb738819","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body><!-- This page was prerendered with Angular Universal -->

</html>