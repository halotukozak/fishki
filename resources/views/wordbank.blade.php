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

        body {
            font-family: 'Nunito', sans-serif;
        }

        .wrapper {
            position: relative;
            height: 297mm;
            width: 210mm;
            page-break-after: always;
        }
    </style>

</head>
<body>
<div class="wrapper" style="margin-top: 1mm">
    <div class="grid grid-cols-2 gap-x-4">
        @foreach ($all as $item)
            <div>
                <div class="flex justify-between">
                    <span>{{ $item->pol }}</span>
                    <span>{{$item->ang }}</span>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
