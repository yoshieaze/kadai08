# 課題08 PHP
## Docker + Laravelを利用して、外部APIのデータ取得と検索機能をつける

## 1. 操作方法、実装内容
### 課題説明
- 3週連続で、Laravelに追加実装してます
- 今週はQiitaの外部APIを利用してデータをキーワードで取得できるようにしました

### 操作方法
#### ログインまで
- Docker上で動作を確認しました。Makefileを用意してあり、ターミナルよりmake upでDockerが立ち上がります。
- localhost:8000でSimple Notesというタイトルとトップページが表示されます
- 背景画像はUnsplashのRandom機能を利用して読み込みごとに変わるようになっています
- 画面右上にLogin, Register(ログイン後はHome)が表示されます
- 新規ユーザーはRegister機能よりユーザー登録可能です。User Termなどは用意していません
- Loginできるユーザーはtest@test.com,test1@test.comがユーザーとして動作確認可能です。PWはtesttestです

#### サイドバーメニューの説明
- ログインすると、画面左側にサイドメニューが表示されています。
- Posts（１週目の実装、簡易メモのCRUD機能）の下に、Qiitaのメニューが表示されています
- クリックするとQiitaから初期値はLaravelの最新記事が取得されます。
（少し時間がかかります）
- サイドメニューの右横にハンバーガーメニューが表示されます。クリックするとサイドバーが最小化します

#### Qiita管理画面の説明
- タイトルの下に、検索用語を入れるテキスト欄を用意しています。
- 検索したい用語を入れて、Searchを押すと、QiitaのAPIから取得します。
- 空欄の場合は、Laravelのキーワードで探すようにしています

## 2. 実装の工夫
- https://yaba-blog.com/laravel-call-api/#toc8
- こちらの記事を参考にして、Guzzleを利用してQiitaのAPIを叩いてみました
- 単純ですが、検索テキストを渡せるようにして、任意の記事検索が
  できるようにしています

## 3. 感想、疑問点
- 後期はReactなのですが、3週間Laravel触ってみて、MVCモデルの勘所が少しだけついた気がします。





