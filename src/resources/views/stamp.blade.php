<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>atte</title>
  <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
</head>
<body>
  <div class="head">
        <div class="atte">
            <header>Atte</header>
        </div>
        <ul class="navi">
                <div class="item"><a href="/">ホーム</a></div>
                <div class="item"><a href="/attendance">日付一覧</a></div>
                <div class="item"><a href="/home">ログアウト</a></div>
        </ul>
    </div>
  <div class="main">
    <div class="greeting">
        <a class="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
  {{ Auth::user()->name }}さんお疲れ様です！
</a>
    </div>
    <diV class="work_time">
        <diV class="work_start">
  <form class="come" action="/time/timein" method="post">
  @csrf
    <button class="button">勤務開始</button>
</form>
        </div>
        <div class="work_finish">
<form class="home" action="/time/timeout" method="post">
  @csrf
    <button class="button">勤務終了</button>
</form>
        </div>
    </div>
    <div class="rest_time">
        <diV class="rest_start">
<form class="tired" action="/time/breakin" method="post">
  @csrf
    <button class="button">休憩開始</button>
</form>
        </div>
        <diV class="rest_finish">
<form class="refresh" action="/time/breakout" method="post">
  @csrf
    <button class="button">休憩終了</button>
</form>
        </div>
    </div>





