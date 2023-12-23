アプリケーション名　Atte
社員の会員情報を使用し、勤怠管理ができるアプリ

作成した目的
人事の評価のため

アプリケーションＵＲＬ
/ 勤怠管理ページ
/login ログインページ

/register 会員登録ページ
/attendance 勤怠管理ページ
/home ログイン後遷移ページ

機能一覧
ログインログアウト機能
出退勤休憩時間の打刻機能
勤務時間休憩時間の表示機能

使用技術
Laravel
MySQL
docker
nginx
php
html
css

テーブル設計
usersテーブル
id,name,email,password,created_at,updated_at

timesテーブル
id,user_id,punchin,punchout,breakin,breakout,worktime,resttime,created_at,updated_at,year,month,day,user_name

テーブル仕様書
![table](https://github.com/hikinariyuto/time/assets/142466334/a8b469bb-0ba4-4368-bec7-67401ebe4656)


ER図
![index drawio](https://github.com/hikinariyuto/time/assets/142466334/1e5a2b47-10ba-4c99-a9ab-aacc775c85ae)

