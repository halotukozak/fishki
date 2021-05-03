<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .justify-center {
            justify-content: center
        }

        .mt-8 {
            margin-top: 2rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .relative {
            position: relative
        }


        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        input {
            min-height: 50px;
            min-width: 500px;
            padding: 10px;
        }

        button {
            padding: 20px;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .wrapper {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: minmax(100px, auto);
            height: 297mm;
            width: 210mm;
            page-break-after: always;
        }

        .div {
            border: dashed black 1px;
            text-align: center;
            display: table;
            height: 100%;
        }

        span {
            display: table-cell;
            vertical-align: middle;
        }

        .column-1 {
            grid-column: 1;
        }

        .column-2 {
            grid-column: 2;
        }

        .column-0 {
            grid-column: 3;
        }

        .row-0 {
            grid-row: 1;
        }

        .row-1 {
            grid-row: 2;
        }

        .row-2 {
            grid-row: 3;
        }

        .row-3 {
            grid-row: 4;
        }

        .row-4 {
            grid-row: 5;
        }
    </style>
</head>
<body>
@foreach ($pages as $fishes)
    <div class="wrapper" style="margin-top: 1mm">
        @for ($i = 0; $i <15 ; $i++)
            <div class="div column-{{ ($i+1)%3 }} row-{{ floor($i/3) }}">
                <span>{{ $fishes[$i]->pol }}</span>
            </div>
        @endfor
    </div>
    <div class="wrapper">
        @for ($i = 0; $i <15 ; $i++)
            <div class="div column-{{ ($i+1)%3 }} row-{{ floor($i/3) }}">
                <span>{{ $fishes[$reverse[$i]]->ang }}</span>
            </div>
        @endfor
    </div>
@endforeach
</body>
</html>
