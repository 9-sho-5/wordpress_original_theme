# wordpress_original_theme

## 初期設定

### 【WordPress 環境】

- 言語設定

```
「Setting」 → 「General」 → 「Site Language」 → 「日本語」
```

- ツールバーの削除

```
「ユーザー」 → 「ユーザーの選択」 → 「ツールバーのチェックはずす」
```

- トップページの設定

```
「固定ページ」 → 「新規追加」でトップページ用の固定ページを作成 → 「テンプレートを"メインページ"に変更」 → 「設定画面に戻る」

「設定」 → 「表示設定」 → 「ホームページの表示 -> 固定ページをチェック -> ホームページをメインページを"トップページ"に変更」
```

- 投稿の設定

```
「設定」 → 「パーマリンク」 → 「何もせず、変更を保存」
```

### 【開発環境】

#### git clone でテーマファイルのみ取得する

```
% git clone
% cd wordpress_original_theme
% git remote rm origin
% git remote add origin <github url>
```

#### Local Sites を使用した開発環境

こちらの shell script を任意の場所にダウンロード

[コマンドで１つで WordPress 環境構築する](https://github.com/9-sho-5/set_up_wordpress_env)

### functions.php
