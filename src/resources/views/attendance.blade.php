<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <title>atte</title>
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
    <diV class="date">
        <h1 class="getdate">
        @foreach ($dates as $date)
        {{$date->getdate()}}
        @endforeach
        </h1>
        {{ $dates->links() }}
    </diV>
        <div class="top">
            <td class="name"><b>名前</b></td>
            <td class="start"><b>勤務開始</b></td>
            <td class="finish"><b>勤務終了</b></td>
            <td class="rest"><b>休憩時間</b></td>
            <td class="total"><b>勤務時間</b></td>
            
        </div>
        @foreach ($items as $item)
        <div class="content">
            
            <div class="name">{{$item->user_id}}</div>
            <div class="start">{{$item->punchIn}}</div>
            <div class="finish">{{$item->punchOut}}</div>
            <div class="rest">{{$item->restTime}}分</div>
            <div class="toal">{{$item->workTime}}分</div>
            
        </div>
        @endforeach
        {{ $items->links() }}
    </div>
</body>
</html>