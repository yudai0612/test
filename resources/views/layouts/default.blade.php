<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">

    <!-- flatpickr -->
    <!-- 導入方法 https://deep-blog.jp/engineer/12729/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
</head>

<body>

    <div class="container">

        <h1>
            <a href="{{url('/posts/create')}}" class="header-menu">検索</a>
            TODOリスト
        </h1>
        @yield('content')
    </div>


    <!-- flatpickr *head内だと動かなかったからこっちに持ってきた -->
    <script>
        flatpickr("#flatpickr", {
            "locale": "ja"
        });

    </script>
</body>
</html>
