<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('app-title')</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <style>
        .tox-notification.tox-notification--in.tox-notification--warning {
            display: none;
        }
    </style>
</head>
<body>
    @include('partials/header')

    @yield('main-section')

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/tinymce-jquery.min.js')}}"></script>

    <script>
        $('textarea#description').tinymce({
          height: 250,
          menubar: false,
          plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
            'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
          ],
          toolbar: 'undo redo | blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | removeformat | help'
        });
    </script>
</body>
</html>