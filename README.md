# wordpress_original_theme

## 初期設定
### 【WordPress環境】

- 言語設定

「Setting」 → 「General」 → 「Site Language」 → 「日本語」

- ツールバーの削除

「ユーザー」 → 「ユーザーの選択」 → 「ツールバーのチェックはずす」

- トップページの設定

「固定ページ」 → 「新規追加」でトップページ用の固定ページを作成 → 「テンプレートを"メインページ"に変更」 → 「設定画面に戻る」

「設定」 → 「表示設定」 → 「ホームページの表示 -> 固定ページをチェック -> ホームページをメインページを"トップページ"に変更」

- 投稿の設定

「設定」 → 「パーマリンク」 → 「何もせず、変更を保存」

### 【開発環境】

#### git cloneでテーマファイルのみ取得する
```
% git clone
% cd wordpress_original_theme
% git remote rm origin
% git remote add origin <github url>
```

#### Local Sitesを使用した開発環境
こちらのshell scriptを任意の場所にダウンロード

```

```

### functions.php

