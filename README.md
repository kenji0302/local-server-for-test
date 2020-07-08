# テスト用のローカルWebサーバー

リクエスト内容をコンソールに表示される

起動
```bash
php -S 0.0.0.0:8080
```

外部からのアクセス（[ngrok](https://ngrok.com/)利用）
```bash
ngrok http 8080
```

ファイルに書き出す場合

```bash
chmod 666 logs/request.log
```