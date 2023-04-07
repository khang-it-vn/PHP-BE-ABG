<html lang="en" class="mdl-js">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <meta charset="utf-8">
    <title>Solo Wallet</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="next-head-count" content="5">
    <style data-href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZs.woff) format('woff')
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/inter/v8/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }
    </style>
    <style data-emotion="css-global 0" data-s=""></style>
    <style data-emotion="css-global" data-s="">
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            box-sizing: border-box;
            -webkit-text-size-adjust: 100%;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        strong,
        b {
            font-weight: 700;
        }

        body {
            margin: 0;
            color: rgba(58, 53, 65, 0.87);
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            background-color: #F4F5FA;
        }

        @media print {
            body {
                background-color: #FFF;
            }
        }

        body::backdrop {
            background-color: #F4F5FA;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        .ps__rail-y {
            z-index: 1;
            right: 0 !important;
            left: auto !important;
        }

        .ps__rail-y:hover,
        .ps__rail-y:focus,
        .ps__rail-y.ps--clicking {
            background-color: #E4E5EB !important;
        }

        .ps__rail-y .ps__thumb-y {
            right: 3px !important;
            left: auto !important;
            background-color: #C2C4D1 !important;
        }

        .layout-vertical-nav .ps__rail-y .ps__thumb-y {
            width: 4px;
            background-color: #C2C4D1 !important;
        }

        .layout-vertical-nav .ps__rail-y:hover,
        .layout-vertical-nav .ps__rail-y:focus,
        .layout-vertical-nav .ps__rail-y.ps--clicking {
            background-color: transparent !important;
        }

        .layout-vertical-nav .ps__rail-y:hover .ps__thumb-y,
        .layout-vertical-nav .ps__rail-y:focus .ps__thumb-y,
        .layout-vertical-nav .ps__rail-y.ps--clicking .ps__thumb-y {
            width: 6px;
        }

        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            left: 0;
            top: 0;
            height: 3px;
            width: 100%;
            z-index: 2000;
            position: fixed;
            background-color: #9155FD;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @-webkit-keyframes mui-auto-fill {
            from {
                display: block;
            }
        }

        @keyframes mui-auto-fill {
            from {
                display: block;
            }
        }

        @-webkit-keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }

        @keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css uinsfl agsicw 14dfcda 1ae0pmy 5k1n1y trc3hh ku0lyd esnmos zf9gw9 102l5x0 12ph425 76jj4r f4apo4 vubbuv v86rxk 1vq8avp 1jj11xz rykvey 1mjhz9d 1e88jm1 a9n7s9 34b9xr 1omfavb 6h6gtn 12d2mry 10kuq41 7wnaot 1jqhuxz 1a77nnv 1k33q06 1i2rfnm igs3ac hdw1oc 70qvj9 rewnd3 s8crcf 1w651zy 11rb4o0 1hy9t21 1vc7qij q9emij zyg32b zo3z3e h2qpui 19egsyp 19gxiau 12evlce 14t9e1w gbbljn t9prvq 6mtojy 1vzedo3 1vkc77z efwuvd 1k3q5ab 891gu0 11qjisw bvhvzn 4yvesp 1t7bsaz pka4ak 3ycic7 1x99bdk 18xujn2 f9p5hp 19b22uo rk9byu j7qwjs hy29ye 6jvswj 1t2yp54 xzgb8m 170ukis 1209hp9 1bt8uxn 17ijxrj l1f2yp in6sf 1i87h0o eeajc9 18608l8 4shjzb 5r5t7z 1mopk95 op3lsh 1rxdmk2 typ1b0 1wtyrfp s5qcc8 1rvrufc 1die9i7 ow9wzb 1a5x3n4 1ruvqhr skb75e 18p8qwp 7gmtci 17ov7fz 1ie5753 1s50f5r kazhwn ufzrdr 13sdyls 7565lz 1ypg9u5 se7ihh 11sbmvn fcc0ko h1t4we 19f4epz zatnkh 1v7a4r5 1ja2hlt 9797sx k008qs 1sr91w5 3jt3oc mm4yn7 m0t65p 10k7jbd sv419h 1dojw36 wd52k3 18qgexk bv8q59 gmt489 11d57x6 1a0fmzr 8atqhb 14vw9l0 1a0vr06 zjgggv psdy0a c3lqyp 1ezh3vz ksn7bw 18hl8n5 1mcub4m 1wgqzgn 50le7h 15j76c0 939q39 10y3fr9 ucz4w7 1a1fzdj 18drrcl ceeiht lfnorv 2x20pz 1muldh 11u1jp0 lvr0df 14vsv3w rzoen8 ccsiwf k6n1sd 2z10nj 1j2q1g7 gjvgh5 up7irv 1sdlr0r 19jjok8 eemp71 1ix9su3 1lnlq3l 1s71n78 1107r86 1c8ux76 1eapbpu i6sm3l 1mer54f pcgvof jv5v1s sdi5m0 pue6qa" data-s="">
        .css-uinsfl {
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .css-agsicw {
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            overflow-x: hidden;
            -webkit-transition: width .25s ease-in-out;
            transition: width .25s ease-in-out;
            width: 260px;
        }

        .css-agsicw ul {
            list-style: none;
        }

        .css-agsicw .MuiListItem-gutters {
            padding-left: 4px;
            padding-right: 4px;
        }

        .css-agsicw .MuiDrawer-paper {
            left: unset;
            right: unset;
            overflow-x: hidden;
            -webkit-transition: width .25s ease-in-out, box-shadow .25s ease-in-out;
            transition: width .25s ease-in-out, box-shadow .25s ease-in-out;
        }

        .css-agsicw .MuiDrawer-paper {
            border-right: 0px solid;
            background-color: #F4F5FA;
        }

        .css-14dfcda {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            box-shadow: none;
            background-image: none;
            overflow-y: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            z-index: 1200;
            -webkit-overflow-scrolling: touch;
            position: fixed;
            top: 0;
            outline: 0;
            left: 0;
            border-right: 1px solid rgba(58, 53, 65, 0.12);
            width: 260px;
        }

        .css-1ae0pmy {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding-right: 1.125rem;
            -webkit-transition: padding .25s ease-in-out;
            transition: padding .25s ease-in-out;
            min-height: 64px;
            padding-left: 1.5rem;
        }

        .css-5k1n1y {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-trc3hh {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.125rem;
            line-height: 1.6;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            font-weight: 600;
            line-height: normal;
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: opacity .25s ease-in-out, margin .25s ease-in-out;
            transition: opacity .25s ease-in-out, margin .25s ease-in-out;
            margin-left: 0.75rem;
        }

        @media (min-width:600px) {
            .css-trc3hh {
                font-size: 1.25rem;
            }
        }

        @media (min-width:900px) {
            .css-trc3hh {
                font-size: 1.25rem;
            }
        }

        @media (min-width:1200px) {
            .css-trc3hh {
                font-size: 1.25rem;
            }
        }

        .css-ku0lyd {
            top: 50px;
            left: -8px;
            z-index: 2;
            height: 75px;
            display: none;
            position: absolute;
            pointer-events: none;
            width: calc(100% + 15px);
            background: linear-gradient(#F4F5FA 40%, rgba(244, 245, 250, 0.1) 95%, rgba(244, 245, 250, 0.05));
        }

        .css-ku0lyd.d-block {
            display: block;
        }

        .css-esnmos {
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .css-zf9gw9 {
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-102l5x0 {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
            padding-top: 8px;
            padding-bottom: 8px;
            -webkit-transition: padding .25s ease;
            transition: padding .25s ease;
            padding-right: 1.125rem;
        }

        .css-12ph425 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            -webkit-text-decoration: none;
            text-decoration: none;
            width: 100%;
            box-sizing: border-box;
            text-align: left;
            margin-top: 0.375rem;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .css-12ph425.Mui-focusVisible {
            background-color: rgba(58, 53, 65, 0.12);
        }

        .css-12ph425.Mui-selected {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-12ph425.Mui-selected.Mui-focusVisible {
            background-color: rgba(145, 85, 253, 0.2);
        }

        .css-12ph425.Mui-disabled {
            opacity: 0.38;
        }

        .css-76jj4r {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            -webkit-text-decoration: none;
            text-decoration: none;
            box-sizing: border-box;
            text-align: left;
            padding-top: 8px;
            padding-bottom: 8px;
            -webkit-transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            padding-left: 16px;
            padding-right: 16px;
            width: 100%;
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
            color: rgba(58, 53, 65, 0.87);
            padding: 0.5625rem 0.875rem;
            -webkit-transition: opacity .25s ease-in-out;
            transition: opacity .25s ease-in-out;
            padding-left: 1.375rem;
            cursor: pointer;
        }

        .css-76jj4r::-moz-focus-inner {
            border-style: none;
        }

        .css-76jj4r.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-76jj4r {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-76jj4r:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(58, 53, 65, 0.04);
        }

        @media (hover: none) {
            .css-76jj4r:hover {
                background-color: transparent;
            }
        }

        .css-76jj4r.Mui-selected {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-76jj4r.Mui-selected.Mui-focusVisible {
            background-color: rgba(145, 85, 253, 0.2);
        }

        .css-76jj4r.Mui-selected:hover {
            background-color: rgba(145, 85, 253, 0.12);
        }

        @media (hover: none) {
            .css-76jj4r.Mui-selected:hover {
                background-color: rgba(145, 85, 253, 0.08);
            }
        }

        .css-76jj4r.Mui-focusVisible {
            background-color: rgba(58, 53, 65, 0.12);
        }

        .css-76jj4r.Mui-disabled {
            opacity: 0.38;
        }

        .css-76jj4r.active,
        .css-76jj4r.active:hover {
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            background-image: linear-gradient(98deg, #C6A7FE, #9155FD 94%);
        }

        .css-76jj4r.active .MuiTypography-root,
        .css-76jj4r.active .MuiSvgIcon-root {
            color: #FFF !important;
        }

        .css-f4apo4 {
            min-width: 56px;
            color: rgba(58, 53, 65, 0.54);
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            min-width: 0;
            margin-right: 0.5625rem;
            color: rgba(58, 53, 65, 0.68);
            margin-right: 0.625rem;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: margin .25s ease-in-out;
            transition: margin .25s ease-in-out;
        }

        .css-vubbuv {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
        }

        .css-v86rxk {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-transition: opacity .25s ease-in-out;
            transition: opacity .25s ease-in-out;
            overflow: hidden;
        }

        .css-1vq8avp {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .css-1jj11xz {
            box-sizing: border-box;
            line-height: 48px;
            list-style: none;
            color: rgba(58, 53, 65, 0.68);
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            padding-left: 16px;
            padding-right: 16px;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #FFF;
            font-weight: 600;
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.87);
            line-height: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            margin-top: 1.75rem;
            margin-bottom: 0.5rem;
            background-color: transparent;
            -webkit-transition: padding-left .25s ease-in-out;
            transition: padding-left .25s ease-in-out;
            padding-left: 0rem;
            padding-right: 0rem;
            padding-top: 0.4375rem;
            padding-bottom: 0.4375rem;
            color: rgba(58, 53, 65, 0.38);
        }

        .css-1jj11xz .MuiDivider-root:before,
        .css-1jj11xz .MuiDivider-root:after,
        .css-1jj11xz hr {
            border-color: rgba(58, 53, 65, 0.12);
        }

        .css-rykvey {
            margin: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            border-width: 0;
            border-style: solid;
            border-color: rgba(58, 53, 65, 0.12);
            border-bottom-width: thin;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            white-space: nowrap;
            text-align: center;
            border: 0;
            margin: 0.5rem 0;
            margin: 0rem;
            width: 100%;
            line-height: normal;
            text-transform: uppercase;
        }

        .css-rykvey::before,
        .css-rykvey::after {
            position: relative;
            width: 100%;
            border-top: thin solid rgba(58, 53, 65, 0.12);
            top: 50%;
            content: "";
            -webkit-transform: translateY(50%);
            -moz-transform: translateY(50%);
            -ms-transform: translateY(50%);
            transform: translateY(50%);
        }

        .css-rykvey::before {
            width: 10%;
        }

        .css-rykvey::after {
            width: 90%;
        }

        .css-rykvey:before,
        .css-rykvey:after {
            top: 7px;
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .css-rykvey .MuiDivider-wrapper {
            padding-left: 0.625rem;
            padding-right: 0.625rem;
            font-size: 0.75rem;
            letter-spacing: 0.21px;
        }

        .css-1mjhz9d {
            display: inline-block;
            padding-left: calc(0.25rem * 1.2);
            padding-right: calc(0.25rem * 1.2);
        }

        .css-1e88jm1 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 0.75rem;
            line-height: normal;
            letter-spacing: 0.21px;
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.38);
            font-weight: 500;
        }

        .css-a9n7s9 {
            margin-left: auto;
            margin-right: auto;
        }

        .css-34b9xr {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 100vh;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-1omfavb {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            box-shadow: none;
            background-image: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            box-sizing: border-box;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            position: static;
            background-color: #F5F5F5;
            color: rgba(0, 0, 0, 0.87);
            -webkit-transition: none;
            transition: none;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            padding: 0rem 1.5rem;
            background-color: transparent;
            color: rgba(58, 53, 65, 0.87);
            min-height: 64px;
        }

        @media (max-width:599.95px) {
            .css-1omfavb {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        .css-6h6gtn {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            min-height: 64px;
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 0rem !important;
            min-height: 64px !important;
            -webkit-transition: padding .25s ease-in-out, box-shadow .25s ease-in-out, backdrop-filter .25s ease-in-out, background-color .25s ease-in-out;
            transition: padding .25s ease-in-out, box-shadow .25s ease-in-out, backdrop-filter .25s ease-in-out, background-color .25s ease-in-out;
        }

        @media (min-width:600px) {
            .css-6h6gtn {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
        }

        @media (min-width:1440px) {
            .css-6h6gtn {
                max-width: calc(1440px - 1.5rem * 2);
            }
        }

        .css-12d2mry {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-10kuq41 {
            margin-right: 0.5rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-7wnaot {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
            vertical-align: top;
        }

        .css-7wnaot .MuiOutlinedInput-root {
            border-radius: 24px;
        }

        .css-1jqhuxz {
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.4375em;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            box-sizing: border-box;
            position: relative;
            cursor: text;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            border-radius: 6px;
            padding-left: 14px;
        }

        .css-1jqhuxz.Mui-disabled {
            color: rgba(58, 53, 65, 0.38);
            cursor: default;
        }

        .css-1jqhuxz:hover .MuiOutlinedInput-notchedOutline {
            border-color: rgba(58, 53, 65, 0.87);
        }

        @media (hover: none) {
            .css-1jqhuxz:hover .MuiOutlinedInput-notchedOutline {
                border-color: rgba(0, 0, 0, 0.23);
            }
        }

        .css-1jqhuxz.Mui-focused .MuiOutlinedInput-notchedOutline {
            border-color: #9155FD;
            border-width: 2px;
        }

        .css-1jqhuxz.Mui-error .MuiOutlinedInput-notchedOutline {
            border-color: #FF4C51;
        }

        .css-1jqhuxz.Mui-disabled .MuiOutlinedInput-notchedOutline {
            border-color: rgba(58, 53, 65, 0.3);
        }

        .css-1jqhuxz:hover:not(.Mui-focused) .MuiOutlinedInput-notchedOutline {
            border-color: rgba(58, 53, 65, 0.32);
        }

        .css-1jqhuxz:hover.Mui-error .MuiOutlinedInput-notchedOutline {
            border-color: #FF4C51;
        }

        .css-1jqhuxz .MuiOutlinedInput-notchedOutline {
            border-color: rgba(58, 53, 65, 0.22);
        }

        .css-1jqhuxz.Mui-disabled .MuiOutlinedInput-notchedOutline {
            border-color: rgba(58, 53, 65, 0.38);
        }

        .css-1a77nnv {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 0.01em;
            max-height: 2em;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            white-space: nowrap;
            color: rgba(58, 53, 65, 0.54);
            margin-right: 8px;
        }

        .css-1k33q06 {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.25rem;
        }

        .css-1i2rfnm {
            font: inherit;
            letter-spacing: inherit;
            color: currentColor;
            padding: 4px 0 5px;
            border: 0;
            box-sizing: content-box;
            background: none;
            height: 1.4375em;
            margin: 0;
            -webkit-tap-highlight-color: transparent;
            display: block;
            min-width: 0;
            width: 100%;
            -webkit-animation-name: mui-auto-fill-cancel;
            animation-name: mui-auto-fill-cancel;
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
            padding-top: 1px;
            padding: 8.5px 14px;
            padding-left: 0;
        }

        .css-1i2rfnm::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-1i2rfnm::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-1i2rfnm:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-1i2rfnm::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .css-1i2rfnm:focus {
            outline: 0;
        }

        .css-1i2rfnm:invalid {
            box-shadow: none;
        }

        .css-1i2rfnm::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm::-webkit-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm::-moz-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm:-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm::-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm:focus::-moz-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm:focus:-ms-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .css-1i2rfnm:focus::-ms-input-placeholder {
            opacity: 0.42;
        }

        .css-1i2rfnm.Mui-disabled {
            opacity: 1;
            -webkit-text-fill-color: rgba(58, 53, 65, 0.38);
        }

        .css-1i2rfnm:-webkit-autofill {
            -webkit-animation-duration: 5000s;
            animation-duration: 5000s;
            -webkit-animation-name: mui-auto-fill;
            animation-name: mui-auto-fill;
        }

        .css-1i2rfnm:-webkit-autofill {
            border-radius: inherit;
        }

        .css-igs3ac {
            text-align: left;
            position: absolute;
            bottom: 0;
            right: 0;
            top: -5px;
            left: 0;
            margin: 0;
            padding: 0 8px;
            pointer-events: none;
            border-radius: inherit;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            min-width: 0%;
            border-color: rgba(0, 0, 0, 0.23);
        }

        .css-hdw1oc {
            float: unset;
            overflow: hidden;
            padding: 0;
            line-height: 11px;
            -webkit-transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .css-70qvj9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-rewnd3 {
            margin-right: 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .css-s8crcf {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            text-align: center;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            font-size: 1.5rem;
            padding: 8px;
            border-radius: 50%;
            overflow: visible;
            color: rgba(58, 53, 65, 0.54);
            -webkit-transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: inherit;
        }

        .css-s8crcf::-moz-focus-inner {
            border-style: none;
        }

        .css-s8crcf.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-s8crcf {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-s8crcf:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        @media (hover: none) {
            .css-s8crcf:hover {
                background-color: transparent;
            }
        }

        .css-s8crcf.Mui-disabled {
            background-color: transparent;
            color: rgba(58, 53, 65, 0.3);
        }

        .css-1w651zy {
            position: relative;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-left: 0.5rem;
            cursor: pointer;
        }

        .css-11rb4o0 {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 40px;
            height: 40px;
        }

        .css-1hy9t21 {
            width: 100%;
            height: 100%;
            text-align: center;
            object-fit: cover;
            color: transparent;
            text-indent: 10000px;
        }

        .css-1vc7qij {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            box-sizing: border-box;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.75rem;
            min-width: 20px;
            line-height: 1;
            padding: 0 6px;
            height: 20px;
            border-radius: 10px;
            z-index: 1;
            -webkit-transition: -webkit-transform 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: transform 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            bottom: 14%;
            right: 14%;
            -webkit-transform: scale(1) translate(50%, 50%);
            -moz-transform: scale(1) translate(50%, 50%);
            -ms-transform: scale(1) translate(50%, 50%);
            transform: scale(1) translate(50%, 50%);
            transform-origin: 100% 100%;
        }

        .css-1vc7qij.MuiBadge-invisible {
            -webkit-transform: scale(0) translate(50%, 50%);
            -moz-transform: scale(0) translate(50%, 50%);
            -ms-transform: scale(0) translate(50%, 50%);
            transform: scale(0) translate(50%, 50%);
        }

        .css-q9emij {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #56CA00;
            box-shadow: 0 0 0 2px #FFF;
        }

        .css-zyg32b {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 100%;
            padding: 1.5rem;
            -webkit-transition: padding .25s ease-in-out;
            transition: padding .25s ease-in-out;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width:599.95px) {
            .css-zyg32b {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        @media (min-width:1200px) {
            .css-zyg32b {
                max-width: 100%;
            }
        }

        @media (min-width:1440px) {
            .css-zyg32b {
                max-width: 1440px;
            }
        }

        .css-zo3z3e .apexcharts-canvas line[stroke='transparent'] {
            display: none;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxis>line,
        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxis>line {
            stroke: rgba(58, 53, 65, 0.12);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxis-tick,
        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxis-tick {
            stroke: rgba(58, 53, 65, 0.12);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip {
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            border-color: rgba(58, 53, 65, 0.12);
            background: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip .apexcharts-tooltip-title {
            font-weight: 600;
            border-color: rgba(58, 53, 65, 0.12);
            background: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-text-label,
        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-text-value {
            color: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip .bar-chart {
            padding: 0.5rem 0.625rem;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxistooltip {
            border-color: rgba(58, 53, 65, 0.12);
            background: #FAFAFA;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxistooltip .apexcharts-xaxistooltip-text {
            color: rgba(58, 53, 65, 0.87);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxistooltip:after {
            border-bottom-color: #FAFAFA;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xaxistooltip:before {
            border-bottom-color: rgba(58, 53, 65, 0.12);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxistooltip {
            border-color: rgba(58, 53, 65, 0.12);
            background: #FAFAFA;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxistooltip .apexcharts-yaxistooltip-text {
            color: rgba(58, 53, 65, 0.87);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxistooltip:after {
            border-left-color: #FAFAFA;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-yaxistooltip:before {
            border-left-color: rgba(58, 53, 65, 0.12);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-text,
        .css-zo3z3e .apexcharts-canvas .apexcharts-tooltip-text,
        .css-zo3z3e .apexcharts-canvas .apexcharts-datalabel-label,
        .css-zo3z3e .apexcharts-canvas .apexcharts-datalabel {
            -webkit-filter: none;
            filter: none;
            font-weight: 400;
            fill: rgba(58, 53, 65, 0.87);
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-pie-label {
            -webkit-filter: none;
            filter: none;
            fill: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-pie .apexcharts-datalabel-label,
        .css-zo3z3e .apexcharts-canvas .apexcharts-pie .apexcharts-datalabel-value {
            font-size: 1.5rem;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-marker {
            box-shadow: none;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-legend-series {
            margin: 0.1875rem 0.5rem !important;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-legend-series .apexcharts-legend-text {
            margin-left: 0.1875rem;
            color: rgba(58, 53, 65, 0.87) !important;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-xcrosshairs,
        .css-zo3z3e .apexcharts-canvas .apexcharts-ycrosshairs,
        .css-zo3z3e .apexcharts-canvas .apexcharts-gridline {
            stroke: rgba(58, 53, 65, 0.12);
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-heatmap-rect {
            stroke: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-radialbar>g>g:first-of-type .apexcharts-radialbar-area {
            stroke: #F4F5FA;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-radar-series polygon {
            stroke: rgba(58, 53, 65, 0.12);
            fill: #FFF;
        }

        .css-zo3z3e .apexcharts-canvas .apexcharts-radar-series line {
            stroke: rgba(58, 53, 65, 0.12);
        }

        .css-h2qpui {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-top: -1.5rem;
            width: calc(100% + 1.5rem);
            margin-left: -1.5rem;
        }

        .css-h2qpui>.MuiGrid-item {
            padding-top: 1.5rem;
        }

        .css-h2qpui>.MuiGrid-item {
            padding-left: 1.5rem;
        }

        .css-19egsyp {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-19egsyp {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-19egsyp {
                -webkit-flex-basis: 33.333333%;
                -ms-flex-preferred-size: 33.333333%;
                flex-basis: 33.333333%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 33.333333%;
            }
        }

        @media (min-width:1200px) {
            .css-19egsyp {
                -webkit-flex-basis: 33.333333%;
                -ms-flex-preferred-size: 33.333333%;
                flex-basis: 33.333333%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 33.333333%;
            }
        }

        @media (min-width:1536px) {
            .css-19egsyp {
                -webkit-flex-basis: 33.333333%;
                -ms-flex-preferred-size: 33.333333%;
                flex-basis: 33.333333%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 33.333333%;
            }
        }

        .css-19gxiau {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 6px;
            box-shadow: 0px 2px 1px -1px rgba(58, 53, 65, 0.2), 0px 1px 1px 0px rgba(58, 53, 65, 0.14), 0px 1px 3px 0px rgba(58, 53, 65, 0.12);
            background-image: none;
            overflow: hidden;
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
            position: relative;
        }

        .css-19gxiau .card-more-options {
            margin-top: -0.25rem;
            margin-right: -0.75rem;
        }

        .css-12evlce {
            padding: 16px;
            padding: 1.25rem;
        }

        .css-12evlce:last-child {
            padding-bottom: 24px;
        }

        .css-12evlce+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-12evlce:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-12evlce+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-14t9e1w {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.125rem;
            line-height: 1.6;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
        }

        @media (min-width:600px) {
            .css-14t9e1w {
                font-size: 1.25rem;
            }
        }

        @media (min-width:900px) {
            .css-14t9e1w {
                font-size: 1.25rem;
            }
        }

        @media (min-width:1200px) {
            .css-14t9e1w {
                font-size: 1.25rem;
            }
        }

        .css-gbbljn {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            letter-spacing: 0.25px;
        }

        .css-t9prvq {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            color: #9155FD;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        @media (min-width:600px) {
            .css-t9prvq {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-t9prvq {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-t9prvq {
                font-size: 1.4993rem;
            }
        }

        .css-6mtojy {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.8125rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #FFF;
            min-width: 64px;
            padding: 4px 10px;
            border-radius: 6px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            background-color: #9155FD;
            box-shadow: 0px 3px 1px -2px rgba(58, 53, 65, 0.2), 0px 2px 2px 0px rgba(58, 53, 65, 0.14), 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
            font-weight: 500;
            border-radius: 5px;
            line-height: 1.71;
            letter-spacing: 0.3px;
            padding: 0.46875rem 0.75rem;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            padding: 0.46875rem 1.375rem;
            padding: 0.25rem 0.5625rem;
        }

        .css-6mtojy::-moz-focus-inner {
            border-style: none;
        }

        .css-6mtojy.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-6mtojy {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-6mtojy:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #804BDF;
            box-shadow: 0px 6px 18px -8px rgba(58, 53, 65, 0.56);
        }

        @media (hover: none) {
            .css-6mtojy:hover {
                background-color: #9155FD;
            }
        }

        .css-6mtojy:active {
            box-shadow: 0px 5px 5px -3px rgba(58, 53, 65, 0.2), 0px 8px 10px 1px rgba(58, 53, 65, 0.14), 0px 3px 14px 2px rgba(58, 53, 65, 0.12);
        }

        .css-6mtojy.Mui-focusVisible {
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-6mtojy.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            box-shadow: none;
            background-color: rgba(58, 53, 65, 0.18);
        }

        .css-6mtojy.MuiButton-contained {
            padding: 0.25rem 0.875rem;
        }

        .css-6mtojy.MuiButton-outlined {
            padding: 0.1875rem 0.8125rem;
        }

        .css-1vzedo3 {
            right: 0;
            bottom: 0;
            height: 170px;
            position: absolute;
        }

        .css-1vkc77z {
            right: 36px;
            bottom: 20px;
            height: 98px;
            position: absolute;
        }

        .css-efwuvd {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-efwuvd {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-efwuvd {
                -webkit-flex-basis: 66.666667%;
                -ms-flex-preferred-size: 66.666667%;
                flex-basis: 66.666667%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 66.666667%;
            }
        }

        @media (min-width:1200px) {
            .css-efwuvd {
                -webkit-flex-basis: 66.666667%;
                -ms-flex-preferred-size: 66.666667%;
                flex-basis: 66.666667%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 66.666667%;
            }
        }

        @media (min-width:1536px) {
            .css-efwuvd {
                -webkit-flex-basis: 66.666667%;
                -ms-flex-preferred-size: 66.666667%;
                flex-basis: 66.666667%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 66.666667%;
            }
        }

        .css-1k3q5ab {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 6px;
            box-shadow: 0px 2px 1px -1px rgba(58, 53, 65, 0.2), 0px 1px 1px 0px rgba(58, 53, 65, 0.14), 0px 1px 3px 0px rgba(58, 53, 65, 0.12);
            background-image: none;
            overflow: hidden;
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-1k3q5ab .card-more-options {
            margin-top: -0.25rem;
            margin-right: -0.75rem;
        }

        .css-891gu0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 16px;
            padding: 1.25rem;
        }

        .css-891gu0 .MuiCardHeader-title {
            line-height: 1;
            font-weight: 500;
            font-size: 1.25rem;
            letter-spacing: 0.0125em;
        }

        .css-891gu0 .MuiCardHeader-subheader {
            font-size: 0.875rem;
        }

        .css-891gu0+.MuiCardContent-root,
        .css-891gu0+.MuiCollapse-root .MuiCardContent-root {
            padding-top: 0;
        }

        .css-11qjisw {
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .css-bvhvzn {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            display: block;
            margin-bottom: 0.625rem;
            line-height: 2rem !important;
            letter-spacing: 0.15px !important;
        }

        @media (min-width:600px) {
            .css-bvhvzn {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-bvhvzn {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-bvhvzn {
                font-size: 1.4993rem;
            }
        }

        .css-4yvesp {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-1t7bsaz {
            font-weight: 600;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-pka4ak {
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: flex-start;
            align-self: flex-start;
            margin-top: -4px;
            margin-right: -8px;
            margin-bottom: -4px;
            margin-top: 0;
            margin-right: 0;
        }

        .css-3ycic7 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            text-align: center;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            font-size: 1.5rem;
            padding: 8px;
            border-radius: 50%;
            overflow: visible;
            color: rgba(58, 53, 65, 0.54);
            -webkit-transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            padding: 5px;
            font-size: 1.125rem;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-3ycic7::-moz-focus-inner {
            border-style: none;
        }

        .css-3ycic7.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-3ycic7 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-3ycic7:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        @media (hover: none) {
            .css-3ycic7:hover {
                background-color: transparent;
            }
        }

        .css-3ycic7.Mui-disabled {
            background-color: transparent;
            color: rgba(58, 53, 65, 0.3);
        }

        .css-1x99bdk {
            padding: 16px;
            padding: 1.25rem;
            padding-top: 0.75rem !important;
        }

        .css-1x99bdk:last-child {
            padding-bottom: 24px;
        }

        .css-1x99bdk+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-1x99bdk:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-1x99bdk+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-18xujn2 {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        @media (min-width:0px) {
            .css-18xujn2 {
                margin-top: -1.25rem;
            }

            .css-18xujn2>.MuiGrid-item {
                padding-top: 1.25rem;
            }
        }

        @media (min-width:600px) {
            .css-18xujn2 {
                margin-top: -0rem;
            }

            .css-18xujn2>.MuiGrid-item {
                padding-top: 0rem;
            }
        }

        @media (min-width:0px) {
            .css-18xujn2 {
                width: calc(100% + 1.25rem);
                margin-left: -1.25rem;
            }

            .css-18xujn2>.MuiGrid-item {
                padding-left: 1.25rem;
            }
        }

        @media (min-width:600px) {
            .css-18xujn2 {
                width: calc(100% + 0rem);
                margin-left: -0rem;
            }

            .css-18xujn2>.MuiGrid-item {
                padding-left: 0rem;
            }
        }

        .css-f9p5hp {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-f9p5hp {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:900px) {
            .css-f9p5hp {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1200px) {
            .css-f9p5hp {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        @media (min-width:1536px) {
            .css-f9p5hp {
                -webkit-flex-basis: 25%;
                -ms-flex-preferred-size: 25%;
                flex-basis: 25%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 25%;
            }
        }

        .css-19b22uo {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 6px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            border-radius: 5px;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            margin-right: 0.75rem;
            width: 44px;
            height: 44px;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            color: #FFF;
            background-color: #9155FD;
        }

        .css-rk9byu {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
            font-size: 1.75rem;
        }

        .css-j7qwjs {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-hy29ye {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-6jvswj {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 6px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            border-radius: 5px;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            margin-right: 0.75rem;
            width: 44px;
            height: 44px;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            color: #FFF;
            background-color: #56CA00;
        }

        .css-1t2yp54 {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 6px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            border-radius: 5px;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            margin-right: 0.75rem;
            width: 44px;
            height: 44px;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            color: #FFF;
            background-color: #FFB400;
        }

        .css-xzgb8m {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 6px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            border-radius: 5px;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            margin-right: 0.75rem;
            width: 44px;
            height: 44px;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            color: #FFF;
            background-color: #16B1FF;
        }

        .css-170ukis {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-170ukis {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-170ukis {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:1200px) {
            .css-170ukis {
                -webkit-flex-basis: 33.333333%;
                -ms-flex-preferred-size: 33.333333%;
                flex-basis: 33.333333%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 33.333333%;
            }
        }

        @media (min-width:1536px) {
            .css-170ukis {
                -webkit-flex-basis: 33.333333%;
                -ms-flex-preferred-size: 33.333333%;
                flex-basis: 33.333333%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 33.333333%;
            }
        }

        .css-1209hp9 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            display: block;
            line-height: 2rem !important;
            letter-spacing: 0.15px !important;
        }

        @media (min-width:600px) {
            .css-1209hp9 {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-1209hp9 {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-1209hp9 {
                font-size: 1.4993rem;
            }
        }

        .css-1bt8uxn {
            padding: 16px;
            padding: 1.25rem;
        }

        .css-1bt8uxn:last-child {
            padding-bottom: 24px;
        }

        .css-1bt8uxn+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-1bt8uxn:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-1bt8uxn+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-1bt8uxn .apexcharts-xcrosshairs.apexcharts-active {
            opacity: 0;
        }

        .css-17ijxrj {
            margin-bottom: 1.75rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-l1f2yp {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            margin-right: 1rem;
        }

        @media (min-width:600px) {
            .css-l1f2yp {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-l1f2yp {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-l1f2yp {
                font-size: 1.4993rem;
            }
        }

        .css-in6sf {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #FFF;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 6px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            background-color: #9155FD;
            box-shadow: 0px 3px 1px -2px rgba(58, 53, 65, 0.2), 0px 2px 2px 0px rgba(58, 53, 65, 0.14), 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
            width: 100%;
            font-weight: 500;
            border-radius: 5px;
            line-height: 1.71;
            letter-spacing: 0.3px;
            padding: 0.46875rem 0.75rem;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            padding: 0.46875rem 1.375rem;
        }

        .css-in6sf::-moz-focus-inner {
            border-style: none;
        }

        .css-in6sf.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-in6sf {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-in6sf:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #804BDF;
            box-shadow: 0px 6px 18px -8px rgba(58, 53, 65, 0.56);
        }

        @media (hover: none) {
            .css-in6sf:hover {
                background-color: #9155FD;
            }
        }

        .css-in6sf:active {
            box-shadow: 0px 5px 5px -3px rgba(58, 53, 65, 0.2), 0px 8px 10px 1px rgba(58, 53, 65, 0.14), 0px 3px 14px 2px rgba(58, 53, 65, 0.12);
        }

        .css-in6sf.Mui-focusVisible {
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-in6sf.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            box-shadow: none;
            background-color: rgba(58, 53, 65, 0.18);
        }

        .css-1i87h0o {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            display: block;
            line-height: 1.6 !important;
            letter-spacing: 0.15px !important;
        }

        @media (min-width:600px) {
            .css-1i87h0o {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-1i87h0o {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-1i87h0o {
                font-size: 1.4993rem;
            }
        }

        .css-eeajc9 {
            padding: 16px;
            padding: 1.25rem;
            padding-top: 0.5625rem !important;
        }

        .css-eeajc9:last-child {
            padding-bottom: 24px;
        }

        .css-eeajc9+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-eeajc9:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-eeajc9+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-18608l8 {
            margin-bottom: 0.375rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-4shjzb {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.5625rem;
            line-height: 1.235;
            letter-spacing: 0.25px;
            color: rgba(58, 53, 65, 0.87);
            font-weight: 600;
            font-size: 2.125rem !important;
        }

        @media (min-width:600px) {
            .css-4shjzb {
                font-size: 1.8219rem;
            }
        }

        @media (min-width:900px) {
            .css-4shjzb {
                font-size: 2.0243rem;
            }
        }

        @media (min-width:1200px) {
            .css-4shjzb {
                font-size: 2.0243rem;
            }
        }

        .css-5r5t7z {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #56CA00;
        }

        .css-1mopk95 {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
            font-size: 1.875rem;
            vertical-align: middle;
        }

        .css-op3lsh {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            color: #56CA00;
            font-weight: 600;
        }

        .css-1rxdmk2 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            margin-bottom: 2.5rem;
        }

        .css-typ1b0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 2.125rem;
        }

        .css-1wtyrfp {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 6px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            border-radius: 5px;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            margin-right: 0.75rem;
            width: 40px;
            height: 40px;
            background-color: rgba(58, 53, 65, 0.04);
        }

        .css-s5qcc8 {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-1rvrufc {
            margin-right: 0.5rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-1die9i7 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            color: rgba(58, 53, 65, 0.87);
            margin-bottom: 0.125rem;
            font-weight: 600;
        }

        .css-ow9wzb {
            min-width: 85px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-1a5x3n4 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            color: rgba(58, 53, 65, 0.87);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .css-1ruvqhr {
            position: relative;
            overflow: hidden;
            display: block;
            height: 4px;
            z-index: 0;
            background-color: rgb(213, 190, 254);
        }

        @media print {
            .css-1ruvqhr {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-skb75e {
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            top: 0;
            -webkit-transition: -webkit-transform .4s linear;
            transition: transform .4s linear;
            transform-origin: left;
            background-color: #9155FD;
        }

        .css-18p8qwp {
            position: relative;
            overflow: hidden;
            display: block;
            height: 4px;
            z-index: 0;
            background-color: rgb(166, 225, 255);
        }

        @media print {
            .css-18p8qwp {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-7gmtci {
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            top: 0;
            -webkit-transition: -webkit-transform .4s linear;
            transition: transform .4s linear;
            transform-origin: left;
            background-color: #16B1FF;
        }

        .css-17ov7fz {
            position: relative;
            overflow: hidden;
            display: block;
            height: 4px;
            z-index: 0;
            background-color: rgb(210, 211, 213);
        }

        @media print {
            .css-17ov7fz {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1ie5753 {
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            top: 0;
            -webkit-transition: -webkit-transform .4s linear;
            transition: transform .4s linear;
            transform-origin: left;
            background-color: #8A8D93;
        }

        .css-1s50f5r {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 50%;
        }

        @media (min-width:600px) {
            .css-1s50f5r {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:900px) {
            .css-1s50f5r {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:1200px) {
            .css-1s50f5r {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        @media (min-width:1536px) {
            .css-1s50f5r {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 50%;
            }
        }

        .css-kazhwn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 1.375rem;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-ufzrdr {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            margin-right: 1rem;
            color: #FFF;
            background-color: #56CA00;
        }

        .css-13sdyls {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            font-weight: 600;
            font-size: 0.875rem;
        }

        .css-7565lz {
            margin-top: 0.375rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-bottom: 0.375rem;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }

        .css-1ypg9u5 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.125rem;
            line-height: 1.6;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            margin-right: 0.5rem;
        }

        @media (min-width:600px) {
            .css-1ypg9u5 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:900px) {
            .css-1ypg9u5 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:1200px) {
            .css-1ypg9u5 {
                font-size: 1.25rem;
            }
        }

        .css-se7ihh {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            color: #56CA00;
        }

        .css-11sbmvn {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            margin-right: 1rem;
            color: #FFF;
            background-color: #8A8D93;
        }

        .css-fcc0ko {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            color: #FF4C51;
        }

        .css-h1t4we {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            margin-right: 1rem;
            color: #FFF;
            background-color: #9155FD;
        }

        .css-19f4epz {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            margin-right: 1rem;
            color: #FFF;
            background-color: #FFB400;
        }

        .css-zatnkh {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.25rem;
            line-height: 1.334;
            letter-spacing: 0;
            color: rgba(58, 53, 65, 0.87);
            display: block;
            line-height: 1.2 !important;
            letter-spacing: 0.31px !important;
        }

        @media (min-width:600px) {
            .css-zatnkh {
                font-size: 1.3118rem;
            }
        }

        @media (min-width:900px) {
            .css-zatnkh {
                font-size: 1.4993rem;
            }
        }

        @media (min-width:1200px) {
            .css-zatnkh {
                font-size: 1.4993rem;
            }
        }

        .css-1v7a4r5 {
            padding: 16px;
            padding: 1.25rem;
            padding-top: 0.5rem !important;
        }

        .css-1v7a4r5:last-child {
            padding-bottom: 24px;
        }

        .css-1v7a4r5+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-1v7a4r5:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-1v7a4r5+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-1ja2hlt {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 1.46875rem;
        }

        .css-9797sx {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            width: 38px;
            height: 38px;
            margin-right: 0.75rem;
            font-size: 1rem;
            color: #FFF;
            background-color: #56CA00;
        }

        .css-k008qs {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .css-1sr91w5 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            margin-right: 0.125rem;
            font-weight: 600;
            letter-spacing: 0.25px;
        }

        .css-3jt3oc {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
            color: #56CA00;
            font-weight: 600;
        }

        .css-mm4yn7 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            color: #56CA00;
            font-weight: 600;
            line-height: 1.5;
        }

        .css-m0t65p {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            line-height: 1.5;
        }

        .css-10k7jbd {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            text-align: end;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-sv419h {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            font-weight: 600;
            font-size: 0.875rem;
            line-height: 1.72;
            letter-spacing: 0.22px;
        }

        .css-1dojw36 {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            width: 38px;
            height: 38px;
            margin-right: 0.75rem;
            font-size: 1rem;
            color: #FFF;
            background-color: #FF4C51;
        }

        .css-wd52k3 {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
            color: #FF4C51;
            font-weight: 600;
        }

        .css-18qgexk {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.75rem;
            line-height: 1.66;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
            color: #FF4C51;
            font-weight: 600;
            line-height: 1.5;
        }

        .css-bv8q59 {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            width: 38px;
            height: 38px;
            margin-right: 0.75rem;
            font-size: 1rem;
            color: #FFF;
            background-color: #FFB400;
        }

        .css-gmt489 {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 50%;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #F4F5FA;
            background-color: #BDBDBD;
            color: rgba(58, 53, 65, 0.68);
            background-color: #EEEEEE;
            width: 38px;
            height: 38px;
            margin-right: 0.75rem;
            font-size: 1rem;
            color: #FFF;
            background-color: #8A8D93;
        }

        .css-11d57x6 {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-11d57x6 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-11d57x6 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:1200px) {
            .css-11d57x6 {
                -webkit-flex-basis: 66.666667%;
                -ms-flex-preferred-size: 66.666667%;
                flex-basis: 66.666667%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 66.666667%;
            }
        }

        @media (min-width:1536px) {
            .css-11d57x6 {
                -webkit-flex-basis: 66.666667%;
                -ms-flex-preferred-size: 66.666667%;
                flex-basis: 66.666667%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 66.666667%;
            }
        }

        .css-1a0fmzr {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 6px;
            box-shadow: 0px 2px 1px -1px rgba(58, 53, 65, 0.2), 0px 1px 1px 0px rgba(58, 53, 65, 0.14), 0px 1px 3px 0px rgba(58, 53, 65, 0.12);
            background-image: none;
            overflow: hidden;
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-1a0fmzr .card-more-options {
            margin-top: -0.25rem;
            margin-right: -0.75rem;
        }

        @media (min-width:0px) {
            .css-1a0fmzr {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:600px) {
            .css-1a0fmzr {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width:900px) {
            .css-1a0fmzr {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }

        .css-8atqhb {
            width: 100%;
        }

        .css-14vw9l0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 16px;
            padding: 1.25rem;
            padding-top: 1.375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-14vw9l0 .MuiCardHeader-title {
            line-height: 1;
            font-weight: 500;
            font-size: 1.25rem;
            letter-spacing: 0.0125em;
        }

        .css-14vw9l0 .MuiCardHeader-subheader {
            font-size: 0.875rem;
        }

        .css-14vw9l0+.MuiCardContent-root,
        .css-14vw9l0+.MuiCollapse-root .MuiCardContent-root {
            padding-top: 0;
        }

        .css-14vw9l0 .MuiCardHeader-action {
            margin-top: 0.15rem;
        }

        .css-1a0vr06 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.125rem;
            line-height: 1.6;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            display: block;
            line-height: 1.6 !important;
            letter-spacing: 0.15px !important;
        }

        @media (min-width:600px) {
            .css-1a0vr06 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:900px) {
            .css-1a0vr06 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:1200px) {
            .css-1a0vr06 {
                font-size: 1.25rem;
            }
        }

        .css-zjgggv {
            padding: 16px;
            padding: 1.25rem;
            padding-bottom: 1.375rem !important;
        }

        .css-zjgggv:last-child {
            padding-bottom: 24px;
        }

        .css-zjgggv+.MuiCardContent-root {
            padding-top: 0;
        }

        .css-zjgggv:last-of-type {
            padding-bottom: 1.25rem;
        }

        .css-zjgggv+.MuiCardActions-root {
            padding-top: 0;
        }

        .css-psdy0a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .css-c3lqyp {
            min-width: 38px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-1ezh3vz {
            margin-left: 1rem;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-ksn7bw {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.57;
            letter-spacing: 0.1px;
            color: rgba(58, 53, 65, 0.68);
            color: #56CA00;
            font-weight: 600;
        }

        .css-18hl8n5 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0rem;
        }

        .css-1mcub4m {
            margin: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            border-width: 0;
            border-style: solid;
            border-color: rgba(58, 53, 65, 0.12);
            border-bottom-width: thin;
            -webkit-align-self: stretch;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            height: auto;
            margin: 0.5rem 0;
            margin: 1.25rem 0rem;
            border-right: 1px solid rgba(58, 53, 65, 0.12);
        }

        @media (max-width:899.95px) {
            .css-1mcub4m {
                border-right: none;
                margin: 0rem 1.25rem;
                border-bottom: 1px solid rgba(58, 53, 65, 0.12);
            }
        }

        .css-1wgqzgn {
            min-width: 36px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-50le7h {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.57;
            letter-spacing: 0.1px;
            color: rgba(58, 53, 65, 0.68);
            color: #FF4C51;
            font-weight: 600;
        }

        .css-15j76c0 {
            box-sizing: border-box;
            margin: 0;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            max-width: 100%;
        }

        @media (min-width:600px) {
            .css-15j76c0 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:900px) {
            .css-15j76c0 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:1200px) {
            .css-15j76c0 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        @media (min-width:1536px) {
            .css-15j76c0 {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                max-width: 100%;
            }
        }

        .css-939q39 {
            width: 100%;
            overflow-x: auto;
            box-shadow: none;
            border-top-color: rgba(58, 53, 65, 0.12);
        }

        .css-10y3fr9 {
            display: table;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            min-width: 800px;
        }

        .css-10y3fr9 caption {
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            padding: 0.5rem;
            text-align: left;
            caption-side: bottom;
        }

        .css-ucz4w7 {
            display: table-header-group;
            text-transform: uppercase;
        }

        .css-ucz4w7 .MuiTableCell-head {
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.13px;
        }

        .css-1a1fzdj {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
        }

        .css-1a1fzdj.MuiTableRow-hover:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        .css-1a1fzdj.Mui-selected {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-1a1fzdj.Mui-selected:hover {
            background-color: rgba(145, 85, 253, 0.12);
        }

        .css-1a1fzdj .MuiTableCell-head:first-child,
        .css-1a1fzdj .MuiTableCell-root:first-child {
            padding-left: 1.25rem;
        }

        .css-1a1fzdj .MuiTableCell-head:last-child,
        .css-1a1fzdj .MuiTableCell-root:last-child {
            padding-right: 1.25rem;
        }

        .css-18drrcl {
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.5rem;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(231, 230, 232, 1);
            text-align: left;
            padding: 16px;
            border-bottom: 1px solid rgba(58, 53, 65, 0.12);
        }

        .css-18drrcl .MuiButton-root {
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-ceeiht {
            display: table-row-group;
        }

        .css-ceeiht .MuiTableCell-body {
            letter-spacing: 0.25px;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-ceeiht .MuiTableCell-body:not(.MuiTableCell-sizeSmall):not(.MuiTableCell-paddingCheckbox):not(.MuiTableCell-paddingNone) {
            padding-top: 0.875rem;
            padding-bottom: 0.875rem;
        }

        .css-lfnorv {
            color: inherit;
            display: table-row;
            vertical-align: middle;
            outline: 0;
        }

        .css-lfnorv.MuiTableRow-hover:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        .css-lfnorv.Mui-selected {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-lfnorv.Mui-selected:hover {
            background-color: rgba(145, 85, 253, 0.12);
        }

        .css-lfnorv .MuiTableCell-head:first-child,
        .css-lfnorv .MuiTableCell-root:first-child {
            padding-left: 1.25rem;
        }

        .css-lfnorv .MuiTableCell-head:last-child,
        .css-lfnorv .MuiTableCell-root:last-child {
            padding-right: 1.25rem;
        }

        .css-lfnorv:last-of-type td,
        .css-lfnorv:last-of-type th {
            border: 0px solid;
        }

        .css-2x20pz {
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(231, 230, 232, 1);
            text-align: left;
            padding: 16px;
            border-bottom: 1px solid rgba(58, 53, 65, 0.12);
            padding-top: 0.125rem !important;
            padding-bottom: 0.125rem !important;
        }

        .css-2x20pz .MuiButton-root {
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-1muldh {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            font-weight: 500;
            font-size: 0.875rem !important;
        }

        .css-11u1jp0 {
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            display: table-cell;
            vertical-align: inherit;
            border-bottom: 1px solid rgba(231, 230, 232, 1);
            text-align: left;
            padding: 16px;
            border-bottom: 1px solid rgba(58, 53, 65, 0.12);
        }

        .css-11u1jp0 .MuiButton-root {
            text-transform: uppercase;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-lvr0df {
            max-width: 100%;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 0.8125rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 32px;
            color: #FFF;
            background-color: #9155FD;
            border-radius: 16px;
            white-space: nowrap;
            -webkit-transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            cursor: default;
            outline: 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            border: 0;
            padding: 0;
            vertical-align: middle;
            box-sizing: border-box;
            height: 24px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        .css-lvr0df.Mui-disabled {
            opacity: 0.38;
            pointer-events: none;
        }

        .css-lvr0df .MuiChip-avatar {
            margin-left: 5px;
            margin-right: -6px;
            width: 24px;
            height: 24px;
            color: #616161;
            font-size: 0.75rem;
        }

        .css-lvr0df .MuiChip-avatarColorPrimary {
            color: #FFF;
            background-color: #804BDF;
        }

        .css-lvr0df .MuiChip-avatarColorSecondary {
            color: #FFF;
            background-color: #777B82;
        }

        .css-lvr0df .MuiChip-avatarSmall {
            margin-left: 4px;
            margin-right: -4px;
            width: 18px;
            height: 18px;
            font-size: 0.625rem;
        }

        .css-lvr0df .MuiChip-icon {
            color: inherit;
            margin-left: 5px;
            margin-right: -6px;
        }

        .css-lvr0df .MuiChip-deleteIcon {
            -webkit-tap-highlight-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            font-size: 22px;
            cursor: pointer;
            margin: 0 5px 0 -6px;
        }

        .css-lvr0df .MuiChip-deleteIcon:hover {
            color: rgba(58, 53, 65, 0.4);
        }

        .css-lvr0df .MuiChip-deleteIcon:hover,
        .css-lvr0df .MuiChip-deleteIcon:active {
            color: #FFF;
        }

        .css-lvr0df .MuiChip-deleteIcon {
            width: 18px;
            height: 18px;
        }

        .css-lvr0df .MuiChip-label {
            font-weight: 500;
        }

        .css-14vsv3w {
            overflow: hidden;
            text-overflow: ellipsis;
            padding-left: 12px;
            padding-right: 12px;
            white-space: nowrap;
        }

        .css-rzoen8 {
            max-width: 100%;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 0.8125rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 32px;
            color: #FFF;
            background-color: #56CA00;
            border-radius: 16px;
            white-space: nowrap;
            -webkit-transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            cursor: default;
            outline: 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            border: 0;
            padding: 0;
            vertical-align: middle;
            box-sizing: border-box;
            height: 24px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        .css-rzoen8.Mui-disabled {
            opacity: 0.38;
            pointer-events: none;
        }

        .css-rzoen8 .MuiChip-avatar {
            margin-left: 5px;
            margin-right: -6px;
            width: 24px;
            height: 24px;
            color: #616161;
            font-size: 0.75rem;
        }

        .css-rzoen8 .MuiChip-avatarColorPrimary {
            color: #FFF;
            background-color: #804BDF;
        }

        .css-rzoen8 .MuiChip-avatarColorSecondary {
            color: #FFF;
            background-color: #777B82;
        }

        .css-rzoen8 .MuiChip-avatarSmall {
            margin-left: 4px;
            margin-right: -4px;
            width: 18px;
            height: 18px;
            font-size: 0.625rem;
        }

        .css-rzoen8 .MuiChip-icon {
            color: inherit;
            margin-left: 5px;
            margin-right: -6px;
        }

        .css-rzoen8 .MuiChip-deleteIcon {
            -webkit-tap-highlight-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            font-size: 22px;
            cursor: pointer;
            margin: 0 5px 0 -6px;
        }

        .css-rzoen8 .MuiChip-deleteIcon:hover {
            color: rgba(58, 53, 65, 0.4);
        }

        .css-rzoen8 .MuiChip-deleteIcon:hover,
        .css-rzoen8 .MuiChip-deleteIcon:active {
            color: #FFF;
        }

        .css-rzoen8 .MuiChip-deleteIcon {
            width: 18px;
            height: 18px;
        }

        .css-rzoen8 .MuiChip-label {
            font-weight: 500;
        }

        .css-ccsiwf {
            max-width: 100%;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 0.8125rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 32px;
            color: #FFF;
            background-color: #FF4C51;
            border-radius: 16px;
            white-space: nowrap;
            -webkit-transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            cursor: default;
            outline: 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            border: 0;
            padding: 0;
            vertical-align: middle;
            box-sizing: border-box;
            height: 24px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        .css-ccsiwf.Mui-disabled {
            opacity: 0.38;
            pointer-events: none;
        }

        .css-ccsiwf .MuiChip-avatar {
            margin-left: 5px;
            margin-right: -6px;
            width: 24px;
            height: 24px;
            color: #616161;
            font-size: 0.75rem;
        }

        .css-ccsiwf .MuiChip-avatarColorPrimary {
            color: #FFF;
            background-color: #804BDF;
        }

        .css-ccsiwf .MuiChip-avatarColorSecondary {
            color: #FFF;
            background-color: #777B82;
        }

        .css-ccsiwf .MuiChip-avatarSmall {
            margin-left: 4px;
            margin-right: -4px;
            width: 18px;
            height: 18px;
            font-size: 0.625rem;
        }

        .css-ccsiwf .MuiChip-icon {
            color: inherit;
            margin-left: 5px;
            margin-right: -6px;
        }

        .css-ccsiwf .MuiChip-deleteIcon {
            -webkit-tap-highlight-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            font-size: 22px;
            cursor: pointer;
            margin: 0 5px 0 -6px;
        }

        .css-ccsiwf .MuiChip-deleteIcon:hover {
            color: rgba(58, 53, 65, 0.4);
        }

        .css-ccsiwf .MuiChip-deleteIcon:hover,
        .css-ccsiwf .MuiChip-deleteIcon:active {
            color: #FFF;
        }

        .css-ccsiwf .MuiChip-deleteIcon {
            width: 18px;
            height: 18px;
        }

        .css-ccsiwf .MuiChip-label {
            font-weight: 500;
        }

        .css-k6n1sd {
            max-width: 100%;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 0.8125rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 32px;
            color: #FFF;
            background-color: #FFB400;
            border-radius: 16px;
            white-space: nowrap;
            -webkit-transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            cursor: default;
            outline: 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            border: 0;
            padding: 0;
            vertical-align: middle;
            box-sizing: border-box;
            height: 24px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        .css-k6n1sd.Mui-disabled {
            opacity: 0.38;
            pointer-events: none;
        }

        .css-k6n1sd .MuiChip-avatar {
            margin-left: 5px;
            margin-right: -6px;
            width: 24px;
            height: 24px;
            color: #616161;
            font-size: 0.75rem;
        }

        .css-k6n1sd .MuiChip-avatarColorPrimary {
            color: #FFF;
            background-color: #804BDF;
        }

        .css-k6n1sd .MuiChip-avatarColorSecondary {
            color: #FFF;
            background-color: #777B82;
        }

        .css-k6n1sd .MuiChip-avatarSmall {
            margin-left: 4px;
            margin-right: -4px;
            width: 18px;
            height: 18px;
            font-size: 0.625rem;
        }

        .css-k6n1sd .MuiChip-icon {
            color: inherit;
            margin-left: 5px;
            margin-right: -6px;
        }

        .css-k6n1sd .MuiChip-deleteIcon {
            -webkit-tap-highlight-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            font-size: 22px;
            cursor: pointer;
            margin: 0 5px 0 -6px;
        }

        .css-k6n1sd .MuiChip-deleteIcon:hover {
            color: rgba(58, 53, 65, 0.4);
        }

        .css-k6n1sd .MuiChip-deleteIcon:hover,
        .css-k6n1sd .MuiChip-deleteIcon:active {
            color: #FFF;
        }

        .css-k6n1sd .MuiChip-deleteIcon {
            width: 18px;
            height: 18px;
        }

        .css-k6n1sd .MuiChip-label {
            font-weight: 500;
        }

        .css-2z10nj {
            max-width: 100%;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 0.8125rem;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: 32px;
            color: #FFF;
            background-color: #16B1FF;
            border-radius: 16px;
            white-space: nowrap;
            -webkit-transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            cursor: default;
            outline: 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            border: 0;
            padding: 0;
            vertical-align: middle;
            box-sizing: border-box;
            height: 24px;
            font-size: 0.75rem;
            text-transform: capitalize;
        }

        .css-2z10nj.Mui-disabled {
            opacity: 0.38;
            pointer-events: none;
        }

        .css-2z10nj .MuiChip-avatar {
            margin-left: 5px;
            margin-right: -6px;
            width: 24px;
            height: 24px;
            color: #616161;
            font-size: 0.75rem;
        }

        .css-2z10nj .MuiChip-avatarColorPrimary {
            color: #FFF;
            background-color: #804BDF;
        }

        .css-2z10nj .MuiChip-avatarColorSecondary {
            color: #FFF;
            background-color: #777B82;
        }

        .css-2z10nj .MuiChip-avatarSmall {
            margin-left: 4px;
            margin-right: -4px;
            width: 18px;
            height: 18px;
            font-size: 0.625rem;
        }

        .css-2z10nj .MuiChip-icon {
            color: inherit;
            margin-left: 5px;
            margin-right: -6px;
        }

        .css-2z10nj .MuiChip-deleteIcon {
            -webkit-tap-highlight-color: transparent;
            color: rgba(255, 255, 255, 0.7);
            font-size: 22px;
            cursor: pointer;
            margin: 0 5px 0 -6px;
        }

        .css-2z10nj .MuiChip-deleteIcon:hover {
            color: rgba(58, 53, 65, 0.4);
        }

        .css-2z10nj .MuiChip-deleteIcon:hover,
        .css-2z10nj .MuiChip-deleteIcon:active {
            color: #FFF;
        }

        .css-2z10nj .MuiChip-deleteIcon {
            width: 18px;
            height: 18px;
        }

        .css-2z10nj .MuiChip-label {
            font-weight: 500;
        }

        .css-1j2q1g7 {
            right: 5rem;
            bottom: 2.5rem;
            z-index: 11;
            position: fixed;
        }

        .css-gjvgh5 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #FFF;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 6px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            background-color: #9155FD;
            box-shadow: 0px 3px 1px -2px rgba(58, 53, 65, 0.2), 0px 2px 2px 0px rgba(58, 53, 65, 0.14), 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
            font-weight: 500;
            border-radius: 5px;
            line-height: 1.71;
            letter-spacing: 0.3px;
            padding: 0.46875rem 0.75rem;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            padding: 0.46875rem 1.375rem;
            background-color: #ff3e1d;
            box-shadow: 0 1px 20px 1px #ff3e1d;
        }

        .css-gjvgh5::-moz-focus-inner {
            border-style: none;
        }

        .css-gjvgh5.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-gjvgh5 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-gjvgh5:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #804BDF;
            box-shadow: 0px 6px 18px -8px rgba(58, 53, 65, 0.56);
        }

        @media (hover: none) {
            .css-gjvgh5:hover {
                background-color: #9155FD;
            }
        }

        .css-gjvgh5:active {
            box-shadow: 0px 5px 5px -3px rgba(58, 53, 65, 0.2), 0px 8px 10px 1px rgba(58, 53, 65, 0.14), 0px 3px 14px 2px rgba(58, 53, 65, 0.12);
        }

        .css-gjvgh5.Mui-focusVisible {
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-gjvgh5.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            box-shadow: none;
            background-color: rgba(58, 53, 65, 0.18);
        }

        .css-gjvgh5:hover {
            box-shadow: none;
            background-color: #e6381a;
        }

        .css-up7irv {
            padding-bottom: 1rem;
            min-width: 400px;
        }

        .css-1sdlr0r {
            background-color: #FFF;
            color: rgba(58, 53, 65, 0.87);
            -webkit-transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 6px;
            box-shadow: 0px 5px 6px -3px rgba(58, 53, 65, 0.2), 0px 9px 12px 1px rgba(58, 53, 65, 0.14), 0px 3px 16px 2px rgba(58, 53, 65, 0.12);
            background-image: none;
            border-radius: 6px;
            overflow: hidden;
        }

        .css-19jjok8 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 1.125rem;
            line-height: 1.6;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            margin-bottom: 1rem;
        }

        @media (min-width:600px) {
            .css-19jjok8 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:900px) {
            .css-19jjok8 {
                font-size: 1.25rem;
            }
        }

        @media (min-width:1200px) {
            .css-19jjok8 {
                font-size: 1.25rem;
            }
        }

        .css-eemp71 {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 0.875rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.68);
            margin-bottom: 1rem;
        }

        .css-1ix9su3 {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #FFF;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 6px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            background-color: #9155FD;
            box-shadow: 0px 3px 1px -2px rgba(58, 53, 65, 0.2), 0px 2px 2px 0px rgba(58, 53, 65, 0.14), 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
            font-weight: 500;
            border-radius: 5px;
            line-height: 1.71;
            letter-spacing: 0.3px;
            padding: 0.46875rem 0.75rem;
            box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
            padding: 0.46875rem 1.375rem;
            margin-right: 1rem;
        }

        .css-1ix9su3::-moz-focus-inner {
            border-style: none;
        }

        .css-1ix9su3.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-1ix9su3 {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1ix9su3:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #804BDF;
            box-shadow: 0px 6px 18px -8px rgba(58, 53, 65, 0.56);
        }

        @media (hover: none) {
            .css-1ix9su3:hover {
                background-color: #9155FD;
            }
        }

        .css-1ix9su3:active {
            box-shadow: 0px 5px 5px -3px rgba(58, 53, 65, 0.2), 0px 8px 10px 1px rgba(58, 53, 65, 0.14), 0px 3px 14px 2px rgba(58, 53, 65, 0.12);
        }

        .css-1ix9su3.Mui-focusVisible {
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-1ix9su3.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            box-shadow: none;
            background-color: rgba(58, 53, 65, 0.18);
        }

        .css-1lnlq3l {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: #9155FD;
            min-width: 64px;
            padding: 5px 15px;
            border-radius: 6px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border: 1px solid rgba(145, 85, 253, 0.5);
            font-weight: 500;
            border-radius: 5px;
            line-height: 1.71;
            letter-spacing: 0.3px;
            padding: 0.46875rem 0.75rem;
            padding: 0.40625rem 1.3125rem;
        }

        .css-1lnlq3l::-moz-focus-inner {
            border-style: none;
        }

        .css-1lnlq3l.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-1lnlq3l {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-1lnlq3l:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: rgba(145, 85, 253, 0.04);
            border: 1px solid #9155FD;
        }

        @media (hover: none) {
            .css-1lnlq3l:hover {
                background-color: transparent;
            }
        }

        .css-1lnlq3l.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            border: 1px solid rgba(58, 53, 65, 0.18);
        }

        .css-1s71n78 {
            z-index: 10;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-1107r86 {
            width: 100%;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            padding: 1rem 1.5rem;
        }

        @media (min-width:1440px) {
            .css-1107r86 {
                max-width: 1440px;
            }
        }

        .css-1c8ux76 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .css-1eapbpu {
            margin: 0;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5;
            letter-spacing: 0.15px;
            color: rgba(58, 53, 65, 0.87);
            margin-right: 0.5rem;
        }

        .css-i6sm3l {
            color: #FF4C51;
        }

        .css-1mer54f {
            margin: 0;
            color: #9155FD;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-color: rgba(145, 85, 253, 0.4);
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-1mer54f:hover {
            text-decoration-color: inherit;
        }

        .css-pcgvof {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-pcgvof :not(:last-child) {
            margin-right: 1rem;
        }

        .css-jv5v1s {
            z-index: 11;
        }

        .css-jv5v1s .react-datepicker-popper {
            z-index: 5;
        }

        .css-jv5v1s .react-datepicker-wrapper {
            width: 100%;
        }

        .css-jv5v1s .react-datepicker {
            border: none;
            box-shadow: 0px 4px 5px -2px rgba(58, 53, 65, 0.2), 0px 7px 10px 1px rgba(58, 53, 65, 0.14), 0px 2px 16px 1px rgba(58, 53, 65, 0.12);
            padding: 0.5rem 0rem;
            color: rgba(58, 53, 65, 0.87);
            border-radius: 6px;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            background-color: #FFF;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header {
            padding: 0;
            border: none;
            font-weight: normal;
            background-color: #FFF;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header .react-datepicker__day-name {
            margin: 0;
        }

        .css-jv5v1s .react-datepicker .react-datepicker-year-header {
            line-height: 2.1;
            margin-bottom: 0.5rem;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__triangle {
            display: none;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation {
            top: 0.75rem;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation.react-datepicker__navigation--previous {
            border: none;
            background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' style=\'width:24px;height:24px\' viewBox=\'0 0 24 24\'%3E%3Cpath fill=\'rgba(58, 53, 65, 0.68)\' d=\'M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z\' /%3E%3C/svg%3E');
            height: 24px;
            width: 24px;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation.react-datepicker__navigation--previous .react-datepicker__navigation-icon {
            display: none;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation.react-datepicker__navigation--next {
            border: none;
            background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' style=\'width:24px;height:24px\' viewBox=\'0 0 24 24\'%3E%3Cpath fill=\'rgba(58, 53, 65, 0.68)\' d=\'M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z\' /%3E%3C/svg%3E');
            height: 24px;
            width: 24px;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation.react-datepicker__navigation--next .react-datepicker__navigation-icon {
            display: none;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation.react-datepicker__navigation--next--with-time {
            right: 122px;
        }

        .css-jv5v1s .react-datepicker>.react-datepicker__navigation:focus,
        .css-jv5v1s .react-datepicker>.react-datepicker__navigation:active {
            outline: 0;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__current-month {
            line-height: 2.1;
            font-size: 1rem;
            font-weight: normal;
            letter-spacing: 0.15px;
            margin-bottom: 0.5rem;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day-name {
            line-height: 1.5;
            width: 2.25rem;
            font-size: 0.75rem;
            letter-spacing: 0.4px;
            color: rgba(58, 53, 65, 0.68);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day {
            margin: 0;
            width: 2.25rem;
            line-height: 2.75;
            height: 2.25rem;
            border-radius: 50%;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--keyboard-selected {
            color: #FFF;
            background-color: #9155FD !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--in-range,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--in-selecting-range {
            border-radius: 0;
            color: #9155FD;
            background-color: rgba(145, 85, 253, 0.06) !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--in-range:empty,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--in-selecting-range:empty {
            background-color: transparent !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--selected.react-datepicker__day--in-selecting-range.react-datepicker__day--selecting-range-start,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--selected.react-datepicker__day--range-start.react-datepicker__day--in-range,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--range-start {
            border-top-left-radius: 50%;
            border-bottom-left-radius: 50%;
            color: #FFF;
            background-color: #9155FD !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--range-end {
            border-top-right-radius: 50%;
            border-bottom-right-radius: 50%;
            color: #FFF;
            background-color: #9155FD !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__day:active {
            outline: 0;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--outside-month {
            height: auto;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--outside-month,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--disabled:not(.react-datepicker__day--selected) {
            color: rgba(58, 53, 65, 0.38);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--outside-month:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--disabled:not(.react-datepicker__day--selected):hover {
            background-color: transparent;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--highlighted,
        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--highlighted:hover {
            color: #56CA00;
            background-color: rgba(86, 202, 0, 0.12);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day.react-datepicker__day--today {
            font-weight: normal;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-dropdown-container:not(:last-child) {
            margin-right: 2rem;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-dropdown-container,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-dropdown-container {
            margin-bottom: 1rem;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-read-view--selected-month,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-read-view--selected-year {
            font-size: 0.875rem;
            margin-right: 0.25rem;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-read-view:hover .react-datepicker__month-read-view--down-arrow,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-read-view:hover .react-datepicker__year-read-view--down-arrow {
            border-top-color: rgba(58, 53, 65, 0.68);
            border-right-color: rgba(58, 53, 65, 0.68);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-read-view--down-arrow,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-read-view--down-arrow {
            top: 4px;
            border-top-color: rgba(58, 53, 65, 0.38);
            border-right-color: rgba(58, 53, 65, 0.38);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-dropdown,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-dropdown {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            border-color: rgba(58, 53, 65, 0.12);
            border-radius: 6px;
            background-color: #FFF;
            box-shadow: 0px 5px 5px -3px rgba(58, 53, 65, 0.2), 0px 8px 10px 1px rgba(58, 53, 65, 0.14), 0px 3px 14px 2px rgba(58, 53, 65, 0.12);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-option,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option {
            padding-top: 0.125rem;
            padding-bottom: 0.125rem;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-option:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-option.react-datepicker__month-option--selected_month {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-option.react-datepicker__month-option--selected_month:hover {
            background-color: rgba(145, 85, 253, 0.12);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__month-option.react-datepicker__month-option--selected_month .react-datepicker__month-option--selected {
            display: none;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option.react-datepicker__year-option--selected_year {
            background-color: rgba(145, 85, 253, 0.08);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option.react-datepicker__year-option--selected_year:hover {
            background-color: rgba(145, 85, 253, 0.12);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option.react-datepicker__year-option--selected_year .react-datepicker__year-option--selected {
            display: none;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option .react-datepicker__navigation--years-upcoming {
            width: 9px;
            height: 9px;
            border-style: solid;
            border-width: 3px 3px 0 0;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            border-top-color: rgba(58, 53, 65, 0.38);
            border-right-color: rgba(58, 53, 65, 0.38);
            margin: 0.6875rem auto 0rem;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option:hover .react-datepicker__navigation--years-upcoming {
            border-top-color: rgba(58, 53, 65, 0.68);
            border-right-color: rgba(58, 53, 65, 0.68);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option .react-datepicker__navigation--years-previous {
            width: 9px;
            height: 9px;
            border-style: solid;
            border-width: 0 0 3px 3px;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            border-left-color: rgba(58, 53, 65, 0.38);
            border-bottom-color: rgba(58, 53, 65, 0.38);
            margin: 0rem auto 0.6875rem;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__header__dropdown .react-datepicker__year-option:hover .react-datepicker__navigation--years-previous {
            border-left-color: rgba(58, 53, 65, 0.68);
            border-bottom-color: rgba(58, 53, 65, 0.68);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month {
            margin-top: 0.75rem;
        }

        @media (max-width:599.95px) {
            .css-jv5v1s .react-datepicker .react-datepicker__month {
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 0;
            }
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month-text,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month-text,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter-text,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter-text {
            height: 2rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter-text:hover {
            border-radius: 6px;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter-text:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month-text:active,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month-text:active,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text:active,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text:active,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter-text:active,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter-text:active {
            outline: 0;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__quarter-text--keyboard-selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__quarter-text--keyboard-selected,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__month-text--keyboard-selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__month-text--keyboard-selected,
        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__year-text--keyboard-selected,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__year-text--keyboard-selected {
            color: #FFF;
            border-radius: 6px;
            background-color: #9155FD !important;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__month .react-datepicker__week-number,
        .css-jv5v1s .react-datepicker .react-datepicker__year .react-datepicker__week-number {
            font-weight: 600;
            color: rgba(58, 53, 65, 0.87);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__year-wrapper {
            max-width: 205px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__input-time-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__today-button {
            border-radius: 1rem;
            margin: 0 1rem 0.3rem;
            color: #FFF;
            background-color: #9155FD;
        }

        .css-jv5v1s .react-datepicker .react-datepicker__time-container {
            border-left-color: rgba(58, 53, 65, 0.12);
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container {
            width: 7rem;
            padding: 0.3rem 0rem;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker-time__header,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker-time__header {
            margin-bottom: 0.75rem;
            color: rgba(58, 53, 65, 0.87);
            font-size: 0.875rem;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time {
            background: #FFF;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time .react-datepicker__time-box .react-datepicker__time-list-item--disabled,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box .react-datepicker__time-list-item--disabled {
            color: rgba(58, 53, 65, 0.38);
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list-item,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list-item {
            line-height: 1.75;
            height: auto !important;
            margin-left: 0.8rem;
            margin-right: 0.3rem;
            color: rgba(58, 53, 65, 0.87);
            border-radius: 6px;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list-item:focus,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list-item:focus,
        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list-item:active,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list-item:active {
            outline: 0;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list-item:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list-item:hover {
            background-color: rgba(58, 53, 65, 0.04) !important;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list-item.react-datepicker__time-list-item--selected,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list-item.react-datepicker__time-list-item--selected {
            color: #FFF !important;
            background-color: #9155FD !important;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-box,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-box {
            width: 100%;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list::-webkit-scrollbar,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list::-webkit-scrollbar {
            width: 8px;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list::-webkit-scrollbar-track,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list::-webkit-scrollbar-track {
            background: #FFF;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list::-webkit-scrollbar-thumb,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list::-webkit-scrollbar-thumb {
            background: #aaa;
            border-radius: 10px;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-list::-webkit-scrollbar-thumb:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__time-container .react-datepicker__time-list::-webkit-scrollbar-thumb:hover {
            background: #999;
        }

        .css-jv5v1s .react-datepicker.react-datepicker--time-only .react-datepicker__time-container {
            width: calc(7rem - 2px);
        }

        .css-jv5v1s .react-datepicker .react-datepicker__day:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__month-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__quarter-text:hover,
        .css-jv5v1s .react-datepicker .react-datepicker__year-text:hover {
            background-color: rgba(58, 53, 65, 0.04);
        }

        .css-jv5v1s .react-datepicker__close-icon {
            padding-right: 1rem;
        }

        .css-jv5v1s .react-datepicker__close-icon:after {
            width: unset;
            height: unset;
            font-size: 1.5rem;
            color: rgba(58, 53, 65, 0.87);
            background-color: transparent !important;
        }

        .css-sdi5m0 {
            z-index: 11;
            position: fixed;
            right: 1.5rem;
            bottom: 2.5rem;
        }

        .css-pue6qa {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: Inter, sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            color: rgba(0, 0, 0, 0.87);
            min-height: 36px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 50%;
            padding: 0;
            min-width: 0;
            width: 40px;
            height: 40px;
            z-index: 1050;
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
            background-color: #E0E0E0;
            color: #FFF;
            background-color: #9155FD;
        }

        .css-pue6qa::-moz-focus-inner {
            border-style: none;
        }

        .css-pue6qa.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }

        @media print {
            .css-pue6qa {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }

        .css-pue6qa:active {
            box-shadow: 0px 7px 8px -4px rgba(58, 53, 65, 0.2), 0px 12px 17px 2px rgba(58, 53, 65, 0.14), 0px 5px 22px 4px rgba(58, 53, 65, 0.12);
        }

        .css-pue6qa:hover {
            background-color: #D5D5D5;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media (hover: none) {
            .css-pue6qa:hover {
                background-color: #E0E0E0;
            }
        }

        .css-pue6qa.Mui-focusVisible {
            box-shadow: 0px 2px 10px 0px rgba(58, 53, 65, 0.1);
        }

        .css-pue6qa.Mui-disabled {
            color: rgba(58, 53, 65, 0.3);
            box-shadow: none;
            background-color: rgba(58, 53, 65, 0.18);
        }

        .css-pue6qa:hover {
            background-color: #804BDF;
        }

        @media (hover: none) {
            .css-pue6qa:hover {
                background-color: #9155FD;
            }
        }
    </style>
    <style data-emotion="css" data-s=""></style>
    <style type="text/css" data-styled-components="FiaaB gTcftA caPIRE" data-styled-components-is-local="true">
        /* sc-component-id: sc-keyframes-FiaaB */
        @-webkit-keyframes FiaaB {
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes FiaaB {
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        /* sc-component-id: sc-keyframes-gTcftA */
        @-webkit-keyframes gTcftA {

            10%,
            90% {
                -webkit-transform: translate3d(-1px, 0, 0);
                -ms-transform: translate3d(-1px, 0, 0);
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                -webkit-transform: translate3d(2px, 0, 0);
                -ms-transform: translate3d(2px, 0, 0);
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-4px, 0, 0);
                -ms-transform: translate3d(-4px, 0, 0);
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                -webkit-transform: translate3d(4px, 0, 0);
                -ms-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0);
            }
        }

        @keyframes gTcftA {

            10%,
            90% {
                -webkit-transform: translate3d(-1px, 0, 0);
                -ms-transform: translate3d(-1px, 0, 0);
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                -webkit-transform: translate3d(2px, 0, 0);
                -ms-transform: translate3d(2px, 0, 0);
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                -webkit-transform: translate3d(-4px, 0, 0);
                -ms-transform: translate3d(-4px, 0, 0);
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                -webkit-transform: translate3d(4px, 0, 0);
                -ms-transform: translate3d(4px, 0, 0);
                transform: translate3d(4px, 0, 0);
            }
        }

        /* sc-component-id: sc-keyframes-caPIRE */
        @-webkit-keyframes caPIRE {
            0% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            20% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            40% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            60% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            80% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            100% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }
        }

        @keyframes caPIRE {
            0% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            20% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            40% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            60% {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            80% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }

            100% {
                -webkit-transform: scale(.75);
                -ms-transform: scale(.75);
                transform: scale(.75);
            }
        }
    </style>
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-shown {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }

        body.swal2-no-backdrop .swal2-shown>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-left,
        body.swal2-no-backdrop .swal2-shown.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end,
        body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-left,
        body.swal2-no-backdrop .swal2-shown.swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end,
        body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-popup .swal2-actions {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
            z-index: 1
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal
        }

        .swal2-popup .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            outline: initial;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }

        .swal2-popup>.swal2-checkbox,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-textarea {
            display: none
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            z-index: 1;
            word-wrap: break-word
        }

        .swal2-popup #swal2-content {
            text-align: center
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-textarea {
            margin: 1em auto
        }

        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }

        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-range input {
            width: 80%
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-popup .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-radio {
            align-items: center;
            justify-content: center
        }

        .swal2-popup .swal2-checkbox label,
        .swal2-popup .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-popup .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }

        .swal2-popup .swal2-validation-message::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }

        .swal2-icon-text {
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: initial !important
            }
        }
    </style>

    <style>
        .ejoy-sub-active {
            color: #1296ba !important;
        }

        .ejoy-sub-hovered {
            color: #1296ba !important;
        }

        .ejoy-sub-clzz {
            cursor: pointer;

            lineHeight: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ejoy-sub-clzz:hover {
            color: #1296ba !important;
        }

        .ej-trans-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999;
            cursor: move;
        }

        .ej-trans-sub>span {
            color: #3CF9ED;
            font-size: 18px;
            text-align: center;
            padding: 0 16px;
            line-height: 1.5;
            background: rgba(32, 26, 25, 0.8);
            padding: 0 8px;
            font-size: 16px;
            color: #0CB1C7;
            background: rgba(67, 65, 65, 0.7);

        }

        .ej-full-screen-video {
            position: absolute;
            width: 30px;
            height: 30px;
            top: 30px;
            right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: pointer;
        }

        .ej-main-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: move;
            padding: 0 8px;
        }

        .ej-main-sub>span {
            color: white;
            font-size: 20px;
            line-height: 1.5;
            text-align: center;
            background: rgba(32, 26, 25, 0.8);
            padding: 2px 8px;

            lineHeight: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ej-main-sub .ejoy-sub-clzz {
            background: transparent !important
        }

        .tran-subtitle>span {
            cursor: pointer;
            padding-left: 10px;
            top: 2px;
            position: relative;
        }

        .tran-subtitle>span>span {
            position: absolute;
            top: -170%;
            background: rgba(0, 0, 0, 0.5);
            font-size: 13px;
            line-height: 20px;
            padding: 2px 8px;
            color: white;
            display: none;
            border-radius: 4px;
            white-space: nowrap;
            left: -50%;
            font-weight: normal;
        }

        .view-icon-copy-main-sub:hover>span,
        .view-icon-edit-sub:hover>span,
        .view-icon-exit-full-sub:hover>span,
        .view-icon-full-sub:hover>span,
        .view-icon-copy-tran-sub:hover>span {
            display: block;
        }

        .view-icon-full-sub,
        .view-icon-exit-full-sub {
            display: flex;
        }

        .view-icon-full-sub>svg,
        .view-icon-exit-full-sub>svg {
            pointer-events: none;
        }

        .tran-subtitle>span>svg {
            width: 16px;
            height: 16px;
            pointer-events: none;
            display: inline-flex !important;
            vertical-align: baseline !important;
        }

        .view-icon-copy-main-sub>svg {
            pointer-events: none;
            color: #FFCC00
        }

        .view-icon-copy-tran-sub {
            padding-left: 0 !important;
            padding-right: 8px !important;
        }

        .view-icon-copy-tran-sub>svg {
            pointer-events: none;
            color: #0CB1C7
        }
    </style>
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-shown {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }

        body.swal2-no-backdrop .swal2-shown>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-left,
        body.swal2-no-backdrop .swal2-shown.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end,
        body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-left,
        body.swal2-no-backdrop .swal2-shown.swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end,
        body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-popup .swal2-actions {
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0;
            z-index: 1
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal
        }

        .swal2-popup .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-popup .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            outline: initial;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }

        .swal2-popup>.swal2-checkbox,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-textarea {
            display: none
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            z-index: 1;
            word-wrap: break-word
        }

        .swal2-popup #swal2-content {
            text-align: center
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-textarea {
            margin: 1em auto
        }

        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }

        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-range input {
            width: 80%
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-popup .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-radio {
            align-items: center;
            justify-content: center
        }

        .swal2-popup .swal2-checkbox label,
        .swal2-popup .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-popup .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }

        .swal2-popup .swal2-validation-message::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }

        .swal2-icon-text {
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: initial !important
            }
        }
    </style>
    <style>
        .ejoy-sub-active {
            color: #1296ba !important;
        }

        .ejoy-sub-hovered {
            color: #1296ba !important;
        }

        .ejoy-sub-clzz {
            cursor: pointer;

            lineHeight: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ejoy-sub-clzz:hover {
            color: #1296ba !important;
        }

        .ej-trans-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999;
            cursor: move;
        }

        .ej-trans-sub>span {
            color: #3CF9ED;
            font-size: 18px;
            text-align: center;
            padding: 0 16px;
            line-height: 1.5;
            background: rgba(32, 26, 25, 0.8);
            padding: 0 8px;
            font-size: 16px;
            color: #0CB1C7;
            background: rgba(67, 65, 65, 0.7);

        }

        .ej-full-screen-video {
            position: absolute;
            width: 30px;
            height: 30px;
            top: 30px;
            right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: pointer;
        }

        .ej-main-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: move;
            padding: 0 8px;
        }

        .ej-main-sub>span {
            color: white;
            font-size: 20px;
            line-height: 1.5;
            text-align: center;
            background: rgba(32, 26, 25, 0.8);
            padding: 2px 8px;

            lineHeight: 1.2;
            font-size: 28px;
            color: #FFCC00;
            background: rgba(17, 17, 17, 0.7);

        }

        .ej-main-sub .ejoy-sub-clzz {
            background: transparent !important
        }

        .tran-subtitle>span {
            cursor: pointer;
            padding-left: 10px;
            top: 2px;
            position: relative;
        }

        .tran-subtitle>span>span {
            position: absolute;
            top: -170%;
            background: rgba(0, 0, 0, 0.5);
            font-size: 13px;
            line-height: 20px;
            padding: 2px 8px;
            color: white;
            display: none;
            border-radius: 4px;
            white-space: nowrap;
            left: -50%;
            font-weight: normal;
        }

        .view-icon-copy-main-sub:hover>span,
        .view-icon-edit-sub:hover>span,
        .view-icon-exit-full-sub:hover>span,
        .view-icon-full-sub:hover>span,
        .view-icon-copy-tran-sub:hover>span {
            display: block;
        }

        .view-icon-full-sub,
        .view-icon-exit-full-sub {
            display: flex;
        }

        .view-icon-full-sub>svg,
        .view-icon-exit-full-sub>svg {
            pointer-events: none;
        }

        .tran-subtitle>span>svg {
            width: 16px;
            height: 16px;
            pointer-events: none;
            display: inline-flex !important;
            vertical-align: baseline !important;
        }

        .view-icon-copy-main-sub>svg {
            pointer-events: none;
            color: #FFCC00
        }

        .view-icon-copy-tran-sub {
            padding-left: 0 !important;
            padding-right: 8px !important;
        }

        .view-icon-copy-tran-sub>svg {
            pointer-events: none;
            color: #0CB1C7
        }
    </style>

</head>

<body style="">
    <div id="__next">
        <div class="layout-wrapper css-uinsfl">
            <div class="MuiDrawer-root MuiDrawer-docked layout-vertical-nav css-agsicw">
                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 MuiDrawer-paper MuiDrawer-paperAnchorLeft MuiDrawer-paperAnchorDockedLeft css-14dfcda" >
                    <div class="nav-header MuiBox-root css-1ae0pmy"><a href="index.html" class="css-5k1n1y">
                            <h6 class="MuiTypography-root MuiTypography-h6 css-trc3hh"><a style="text-decoration: none" href="<?php echo ROOT_URL .'user/wallet'?>">SOLO WALLET</a></h6>
                        </a></div>
                    <div class="MuiBox-root css-ku0lyd"></div>
                    <div class="MuiBox-root css-esnmos">
                        <div class="scrollbar-container ps">
                            <div class="MuiBox-root css-zf9gw9">
                                <ul class="MuiList-root MuiList-padding nav-items css-102l5x0">
                                    <li class="MuiListItem-root MuiListItem-gutters nav-link css-12ph425"><a class="MuiListItemButton-root MuiListItemButton-gutters MuiButtonBase-root active css-76jj4r" tabindex="0" href="index.html">
                                            <div class="MuiListItemIcon-root css-f4apo4"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="HomeOutlineIcon">
                                                    <path d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z">
                                                    </path>
                                                </svg></div>
                                            <div class="MuiBox-root css-v86rxk">
                                                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-noWrap css-1vq8avp">
                                                    Dashboard</p>
                                            </div><span class="MuiTouchRipple-root css-w0pj6f"></span>
                                        </a></li>
                                    <li class="MuiListItem-root MuiListItem-gutters nav-link css-12ph425"><a class="MuiListItemButton-root MuiListItemButton-gutters MuiButtonBase-root  css-76jj4r" tabindex="0" >
                                            <div class="MuiListItemIcon-root css-f4apo4"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountCogOutlineIcon">
                                                    <path d="M10 4A4 4 0 0 0 6 8A4 4 0 0 0 10 12A4 4 0 0 0 14 8A4 4 0 0 0 10 4M10 6A2 2 0 0 1 12 8A2 2 0 0 1 10 10A2 2 0 0 1 8 8A2 2 0 0 1 10 6M17 12C16.84 12 16.76 12.08 16.76 12.24L16.5 13.5C16.28 13.68 15.96 13.84 15.72 14L14.44 13.5C14.36 13.5 14.2 13.5 14.12 13.6L13.16 15.36C13.08 15.44 13.08 15.6 13.24 15.68L14.28 16.5V17.5L13.24 18.32C13.16 18.4 13.08 18.56 13.16 18.64L14.12 20.4C14.2 20.5 14.36 20.5 14.44 20.5L15.72 20C15.96 20.16 16.28 20.32 16.5 20.5L16.76 21.76C16.76 21.92 16.84 22 17 22H19C19.08 22 19.24 21.92 19.24 21.76L19.4 20.5C19.72 20.32 20.04 20.16 20.28 20L21.5 20.5C21.64 20.5 21.8 20.5 21.8 20.4L22.84 18.64C22.92 18.56 22.84 18.4 22.76 18.32L21.72 17.5V16.5L22.76 15.68C22.84 15.6 22.92 15.44 22.84 15.36L21.8 13.6C21.8 13.5 21.64 13.5 21.5 13.5L20.28 14C20.04 13.84 19.72 13.68 19.4 13.5L19.24 12.24C19.24 12.08 19.08 12 19 12H17M10 13C7.33 13 2 14.33 2 17V20H11.67C11.39 19.41 11.19 18.77 11.09 18.1H3.9V17C3.9 16.36 7.03 14.9 10 14.9C10.43 14.9 10.87 14.94 11.3 15C11.5 14.36 11.77 13.76 12.12 13.21C11.34 13.08 10.6 13 10 13M18.04 15.5C18.84 15.5 19.5 16.16 19.5 17.04C19.5 17.84 18.84 18.5 18.04 18.5C17.16 18.5 16.5 17.84 16.5 17.04C16.5 16.16 17.16 15.5 18.04 15.5Z">
                                                    </path>
                                                </svg></div>
                                            <div class="MuiBox-root css-v86rxk">
                                                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-noWrap css-1vq8avp">
                                                    Account Settings</p>
                                            </div><span class="MuiTouchRipple-root css-w0pj6f"></span>
                                        </a></li>
                                    <li class="MuiListSubheader-root MuiListSubheader-gutters MuiListSubheader-sticky nav-section-title css-1jj11xz">
                                        <div class="MuiDivider-root MuiDivider-fullWidth MuiDivider-withChildren MuiDivider-textAlignLeft css-rykvey" role="separator"><span class="MuiDivider-wrapper css-1mjhz9d">
                                                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-noWrap css-1e88jm1">
                                                    Pages</p>
                                            </span></div>
                                    </li>
                                    <li class="MuiListItem-root MuiListItem-gutters nav-link css-12ph425">
                                        <a class="MuiListItemButton-root MuiListItemButton-gutters MuiButtonBase-root  css-76jj4r" tabindex="0"  href="<?php echo ROOT_URL. 'adminstore/add'?>">
                                            <div class="MuiListItemIcon-root css-f4apo4"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hiadminstoredden="true" viewBox="0 0 24 24" data-testid="LoginIcon">
                                                    <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z">
                                                    </path>
                                                </svg></div>
                                            <div class="MuiBox-root css-v86rxk">
                                                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-noWrap css-1vq8avp">
                                                    New Doc</p>
                                            </div><span class="MuiTouchRipple-root css-w0pj6f"></span>
                                        </a></li>
                                    <li class="MuiListItem-root MuiListItem-gutters nav-link css-12ph425">
                                        <a class="MuiListItemButton-root MuiListItemButton-gutters MuiButtonBase-root  css-76jj4r" tabindex="0"  href="<?php echo ROOT_URL. 'adminstore/index'?>">
                                            <div class="MuiListItemIcon-root css-f4apo4"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountPlusOutlineIcon">
                                                    <path d="M15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4M15,5.9C16.16,5.9 17.1,6.84 17.1,8C17.1,9.16 16.16,10.1 15,10.1A2.1,2.1 0 0,1 12.9,8A2.1,2.1 0 0,1 15,5.9M4,7V10H1V12H4V15H6V12H9V10H6V7H4M15,13C12.33,13 7,14.33 7,17V20H23V17C23,14.33 17.67,13 15,13M15,14.9C17.97,14.9 21.1,16.36 21.1,17V18.1H8.9V17C8.9,16.36 12,14.9 15,14.9Z">
                                                    </path>
                                                </svg></div>
                                            <div class="MuiBox-root css-v86rxk">
                                                <p class="MuiTypography-root MuiTypography-body1 MuiTypography-noWrap css-1vq8avp">
                                                    Manange</p>
                                            </div><span class="MuiTouchRipple-root css-w0pj6f"></span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="layout-content-wrapper MuiBox-root css-34b9xr">
                <header class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 MuiAppBar-root MuiAppBar-colorDefault MuiAppBar-positionStatic layout-navbar css-1omfavb">
                    <div class="MuiToolbar-root MuiToolbar-gutters MuiToolbar-regular navbar-content-container css-6h6gtn">
                        <div class="MuiBox-root css-12d2mry">
                            <div class="actions-left MuiBox-root css-10kuq41">
                                <div class="MuiFormControl-root MuiTextField-root css-7wnaot">
                                    <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-sizeSmall MuiInputBase-adornedStart css-1jqhuxz">
                                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart MuiInputAdornment-outlined MuiInputAdornment-sizeSmall css-1a77nnv">
                                            <span class="notranslate">&ZeroWidthSpace;</span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall css-1k33q06" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MagnifyIcon">
                                                <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z">
                                                </path>
                                            </svg>
                                        </div><input type="text" aria-invalid="false" class="MuiOutlinedInput-input MuiInputBase-input MuiInputBase-inputSizeSmall MuiInputBase-inputAdornedStart css-1i2rfnm" value="" id="mui-1">
                                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                            <legend class="css-hdw1oc"><span class="notranslate">&ZeroWidthSpace;</span>
                                            </legend>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="actions-right MuiBox-root css-70qvj9"><button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-colorInherit MuiIconButton-sizeMedium css-s8crcf" tabindex="0" type="button" aria-haspopup="true"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="WeatherNightIcon">
                                        <path d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z">
                                        </path>
                                    </svg><span class="MuiTouchRipple-root css-w0pj6f"></span></button><span class="MuiBadge-root css-1w651zy">
                                    <div class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault css-1net4y0">J
                                    </div><span class="MuiBadge-anchorOriginBottomRightCircular MuiBadge-overlapCircular MuiBadge-badge MuiBadge-standard MuiBadge-anchorOriginBottomRight css-1vc7qij"><span class="css-q9emij"></span></span>
                                </span></div>
                        </div>
                    </div>
                </header>
                <?php require($view) ?>
                <footer class="layout-footer MuiBox-root css-1s71n78">

                </footer>
                <div class="MuiBox-root css-jv5v1s">
                    <div class="MuiBox-root css-0" id="react-datepicker-portal"></div>
                </div>
            </div>
        </div>

    </div>

    

</body>

</html>