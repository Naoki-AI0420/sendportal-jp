<?php

return [
    'plans' => [
        'starter' => [
            'name' => 'スターター',
            'price_id' => env('STRIPE_STARTER_PRICE_ID'),
            'price' => 4980,
            'subscribers_limit' => 1000,
            'emails_limit' => 10000,
            'features' => [
                '購読者数 1,000人まで',
                '月間配信数 10,000通',
                'メールテンプレート',
                '基本分析レポート',
                'メールサポート',
            ],
        ],
        'standard' => [
            'name' => 'スタンダード',
            'price_id' => env('STRIPE_STANDARD_PRICE_ID'),
            'price' => 9800,
            'subscribers_limit' => 5000,
            'emails_limit' => 50000,
            'features' => [
                '購読者数 5,000人まで',
                '月間配信数 50,000通',
                'メールテンプレート',
                '詳細分析レポート',
                '優先メールサポート',
                'A/Bテスト',
            ],
        ],
        'pro' => [
            'name' => 'プロ',
            'price_id' => env('STRIPE_PRO_PRICE_ID'),
            'price' => 19800,
            'subscribers_limit' => 20000,
            'emails_limit' => 200000,
            'features' => [
                '購読者数 20,000人まで',
                '月間配信数 200,000通',
                'メールテンプレート',
                '詳細分析レポート',
                '優先サポート（メール＋チャット）',
                'A/Bテスト',
                'API アクセス',
                '専用IPアドレス',
            ],
        ],
    ],
];
