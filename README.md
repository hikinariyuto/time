アプリケーション名　Atte
社員の会員情報を使用し、勤怠管理ができるアプリ

作成した目的
初級模擬案件に合格するため

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
