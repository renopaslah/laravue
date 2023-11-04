<!DOCTYPE html>
<html>

<head>
    @include('includes.meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>
    <!-- CSS files -->

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>

<body>
    @inertia
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
