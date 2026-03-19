#!/bin/bash
set -e

cd /var/www/html

# パーミッション設定
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# マイグレーション実行
php artisan migrate --force

# Sendportal アセット公開
php artisan vendor:publish --provider='Sendportal\Base\SendportalBaseServiceProvider' --force --quiet

# Cashier マイグレーション公開（未公開の場合）
php artisan vendor:publish --tag=cashier-migrations --quiet 2>/dev/null || true

# キャッシュクリア
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# 初期管理ユーザー作成（存在しない場合）
php artisan tinker --execute="
if (\App\Models\User::count() === 0) {
    \$user = \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@test.com',
        'email_verified_at' => now(),
        'password' => \Illuminate\Support\Facades\Hash::make('TestAdmin123!'),
    ]);
    \$workspace = \App\Models\Workspace::create([
        'name' => 'デフォルト',
        'owner_id' => \$user->id,
    ]);
    \$user->workspaces()->attach(\$workspace->id, ['role' => \App\Models\Workspace::ROLE_OWNER]);
    \$user->current_workspace_id = \$workspace->id;
    \$user->save();
    echo 'Admin user created.' . PHP_EOL;
} else {
    echo 'Users already exist, skipping seed.' . PHP_EOL;
}
" 2>/dev/null || true

# Supervisor 起動
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
