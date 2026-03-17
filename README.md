# SendPortal 日本語版

オープンソースのメールマガジン管理SaaS [SendPortal](https://github.com/mettle/sendportal) の日本語対応版です。

## 機能一覧

- **キャンペーン管理** - メールキャンペーンの作成・スケジュール配信・レポート
- **購読者管理** - CSVインポート/エクスポート・タグによるセグメント分け
- **テンプレート** - 再利用可能なメールテンプレート
- **分析レポート** - 開封率・クリック率・バウンス率の追跡
- **オートメーション** - 自動メール配信ワークフロー
- **ワークスペース** - チーム・プロジェクト単位での管理
- **API** - REST APIによる外部連携

## 対応メールサービス

- Amazon SES
- Mailgun
- Mailjet
- Postmark
- SendGrid
- SMTP

## クイックスタート（Docker）

```bash
# リポジトリをクローン
git clone https://github.com/Naoki-AI0420/sendportal-jp.git
cd sendportal-jp

# 環境設定ファイルをコピー
cp .env.example .env

# Docker起動
docker compose up -d

# 初期セットアップ（初回のみ）
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
docker compose exec app php artisan storage:link
```

http://localhost:8080 にアクセスしてください。

## 手動セットアップ

```bash
composer install
cp .env.example .env
php artisan key:generate
# .env のDB設定を編集
php artisan migrate
php artisan storage:link
php artisan serve
```

## 必要要件

- PHP 8.2+
- MySQL 8.0+
- Redis（Horizon用）
- Composer 2

## ライセンス

[MIT License](LICENSE.md)

## 元プロジェクト

[mettle/sendportal](https://github.com/mettle/sendportal)
