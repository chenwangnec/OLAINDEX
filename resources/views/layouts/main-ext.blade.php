<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ \App\Helpers\Tool::config('name','OLAINDEX') }}</title>
    <meta name="keywords" content="OLAINDEX,OneDrive,Index,Microsoft OneDrive,Directory Index"/>
    <meta name="description" content="OLAINDEX,Another OneDrive Directory Index"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.bootcss.com/mdui/0.4.1/css/mdui.min.css" rel="stylesheet">

    <style>
        .mdui-appbar .mdui-toolbar {
            height: 56px;
            font-size: 16px;
        }

        .mdui-toolbar > * {
            padding: 0 6px;
            margin: 0 2px;
            opacity: 0.5;
        }

        .mdui-toolbar > .mdui-typo-headline {
            padding: 0 16px 0 0;
        }

        .mdui-toolbar > i {
            padding: 0;
        }

        .mdui-toolbar > a:hover, a.mdui-typo-headline, a.active {
            opacity: 1;
        }

        .mdui-container {
            max-width: 1200px;
        }

        .mdui-list-item {
            -webkit-transition: none;
            transition: none;
        }

        .mdui-list > .th {
            background-color: initial;
        }

        .mdui-list-item > a {
            width: 100%;
            line-height: 48px
        }

        .mdui-list-item {
            margin: 2px 0;
            padding: 0;
        }

        .mdui-toolbar > a:last-child {
            opacity: 1;
        }

        @media screen and (max-width: 980px) {
            .mdui-list-item .mdui-text-right {
                display: none;
            }

            .mdui-container {
                width: 100% !important;
                margin: 0;
            }

            .mdui-toolbar > *:not(.mdui-switch) {
                display: none;
            }

            .mdui-toolbar > a:last-child, .mdui-toolbar > .mdui-typo-headline, .mdui-toolbar > i:first-child {
                display: block;
            }
        }

        a {
            text-decoration: none;
            color: rgba(0, 0, 0, .87);
        }

        .thumb-view .mdui-col {
            padding: 10px;
        }

        .thumb-view .col-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .thumb-view .mdui-col:hover {
            background-color: #eaeaea;
        }

        .thumb-view .col-icon {
            width: 100%;
            height: 100px;
            text-align: center
        }

        .thumb-view .col-icon img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    @yield('css')
    <script>
        Config = {
            'routes': {
                'upload_image': '{{ route('image.upload') }}'
            },
            '_token': '{{ csrf_token() }}',
        };
    </script>
</head>

<body class="mdui-theme-accent-blue mdui-theme-primary-indigo">
<header class="mdui-appbar mdui-color-theme">
    <div class="mdui-toolbar mdui-color-theme mdui-container" style="position: relative">
        <a href="/" class="mdui-typo-headline">{{ \App\Helpers\Tool::config('name') }}</a>
        @yield('breadcrumb')
    </div>
</header>

<div class="mdui-container">

    @yield('content')

</div>
<script src="https://cdn.bootcss.com/mdui/0.4.1/js/mdui.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
@if (session()->has('alertMessage'))
    <script>
        $(function () {
            mdui.snackbar({
                message: '{{ session()->pull('alertMessage') }}',
                position: 'right-top'
            });
        });
    </script>
@endif
@yield('js')

</body>

</html>
