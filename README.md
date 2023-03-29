# 服飾買取くん
PHP自作

## 概要
洋服を買い取り商品登録や編集/削除、見積書の印刷を行えるサイトを作成しました。

管理ユーザと一般ユーザに分け、
それぞれでログインできるようにしています。


## 使い方
■管理ユーザ
* テストアカウント名：admin
* テストパスワード：admin

ユーザ情報の編集・更新・削除の機能が行えます。


■一般ユーザ
* テストアカウント：test@gmail.com
* テストパスワード：00000000

新規登録やパスワードリセット、商品登録（買い取り）、編集、削除、見積書のPDF出力などの機能を行えます。

## 環境
MAMP/MySQL/PHP


## データベース

データベース名：kaitorikun.sql

テーブル

お使いのphpMyAdminに上のデータベースを作り、入っているkaitorikun.sqlをインポートしていただければお使いいただけるようになると思います。
