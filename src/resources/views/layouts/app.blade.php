<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        font-family: "Helvetica Neue",
            Arial,
              "Hiragino Kaku Gothic ProN",
              "Hiragino Sans",
            Meiryo,
            sans-serif;
    }
    </style>
    <title>受注入力システム</title>
</head>
<body>
    @if (Auth::check())
    <div class="link">
        <div class="mypage__link">
            <a class="btn btn-success" href="/mypage">マイページ</a>
        </div>
        <div class="logout__link">
            <a class="btn btn-sm btn-danger" href="/logout" method="post">ログアウト</a>
        </div>
    </div>
    @endif
    <div class="container">
        <h1 style="font-size:1.25rem;">受注入力システム</h1>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.    bundle.min.js"></script>
</body>
</html>