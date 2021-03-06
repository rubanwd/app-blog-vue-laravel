<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel')}}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
        <style>
            .container {
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Vue.js CRUD with Laravel app</h3>
            <section id="app"></section>
        </div>
        <script>
            window.Laravel = `<php echo json_encode([
                'csrfToken'-> csrf_token(),
                ]); ?>`
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
