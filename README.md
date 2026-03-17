# メルマガ管理（SendPortal 日本語版）

オープンソースのメールマガジン管理SaaS [SendPortal](https://github.com/mettle/sendportal) の日本語対応・Docker化版です。

## 機能一覧

- **キャンペーン管理** - メールキャンペーンの作成・スケジュール配信・レポート
- **購読者管理** - CSVインポート/エクスポート・タグによるセグメント分け
- **テンプレート** - 再利用可能なメールテンプレート
- **分析レポート** - 開封率・クリック率・バウンス率の追跡
- **オートメーション** - 自動メール配信ワークフロー
- **ワークスペース** - チーム・プロジェクト単位での管理
- **API** - REST APIによる外部連携
- **完全日本語対応** - UI全体を日本語化済み（288キー翻訳）

## 対応メールサービス

| サービス | 説明 |
|---------|------|
| Amazon SES | AWSのメール送信サービス |
| SendGrid | クラウドベースのメール配信 |
| Mailgun | 開発者向けメールAPI |
| Postmark | トランザクションメール |
| Mailjet | メールマーケティング |
| SMTP | 汎用SMTPサーバー |

## クイックスタート（Docker一発起動）

```bash
# リポジトリをクローン
git clone https://github.com/Naoki-AI0420/sendportal-jp.git
cd sendportal-jp

# 環境設定ファイルをコピー
cp .env.example .env

# Docker起動（MySQL + Redis + アプリ）
docker compose up -d

# 初期セットアップ（初回のみ）
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
docker compose exec app php artisan storage:link
```

ブラウザで http://localhost:8080 にアクセスし、セットアップウィザードに従って管理者アカウントを作成してください。

### Docker構成

| コンテナ | イメージ | 説明 |
|---------|---------|------|
| `sendportal-app` | PHP 8.2 + Apache | アプリケーション + Horizon |
| `sendportal-mysql` | MySQL 8.0 | データベース |
| `sendportal-redis` | Redis 7 Alpine | キャッシュ・キュー・セッション |

### 環境変数

`.env.example` に日本語コメント付きで全設定項目を記載しています。主要な設定：

| 変数 | デフォルト | 説明 |
|-----|----------|------|
| `APP_PORT` | 8080 | ホスト側ポート番号 |
| `DB_DATABASE` | sendportal | データベース名 |
| `DB_USERNAME` | sendportal | DBユーザー名 |
| `DB_PASSWORD` | secret | DBパスワード |

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
- Redis（Horizon キューワーカー用）
- Composer 2

## ライセンス

[MIT License](LICENSE)

## 元プロジェクト

[mettle/sendportal](https://github.com/mettle/sendportal)
