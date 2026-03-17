<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>メルマガ管理 - 低価格で高機能なメール配信ツール</title>
    <meta name="description" content="メルマガ管理は、完全日本語対応の低価格メール配信ツールです。Mailchimpの半額以下で高機能なメルマガ配信を実現。データは国内保管で安心。">
    <meta property="og:title" content="メルマガ管理 - 低価格で高機能なメール配信ツール">
    <meta property="og:description" content="完全日本語対応の低価格メール配信ツール。Mailchimpの半額以下で高機能なメルマガ配信を実現。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/lp') }}">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="メルマガ管理 - 低価格で高機能なメール配信ツール">
    <meta name="twitter:description" content="完全日本語対応の低価格メール配信ツール。Mailchimpの半額以下で高機能なメルマガ配信を実現。">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Noto Sans JP"', 'sans-serif'] },
                    colors: { primary: { 50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 300: '#93c5fd', 400: '#60a5fa', 500: '#3b82f6', 600: '#2563EB', 700: '#1d4ed8', 800: '#1e40af', 900: '#1e3a8a' } }
                }
            }
        }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "メルマガ管理",
        "url": "{{ url('/') }}",
        "description": "低価格で高機能なメール配信ツール"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "メルマガ管理",
        "description": "完全日本語対応の低価格メール配信ツール",
        "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "JPY",
            "lowPrice": "4980",
            "highPrice": "19800",
            "offerCount": "3"
        }
    }
    </script>
</head>
<body class="font-sans text-gray-800 antialiased">

    {{-- ナビゲーション --}}
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-sm border-b border-gray-100 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('lp') }}" class="text-xl font-bold text-primary-600">メルマガ管理</a>
                <div class="flex items-center gap-4">
                    <a href="#pricing" class="text-sm text-gray-600 hover:text-primary-600 hidden sm:inline">料金</a>
                    <a href="#features" class="text-sm text-gray-600 hover:text-primary-600 hidden sm:inline">特徴</a>
                    <a href="#faq" class="text-sm text-gray-600 hover:text-primary-600 hidden sm:inline">FAQ</a>
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">ダッシュボード</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-primary-600">ログイン</a>
                        <a href="{{ route('pricing') }}" class="text-sm bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">無料で始める</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    {{-- ヒーローセクション --}}
    <section class="pt-32 pb-20 bg-gradient-to-br from-primary-50 via-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                メルマガ配信、<br class="sm:hidden">もっとシンプルに。
            </h1>
            <p class="mt-6 text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">
                完全日本語対応のメール配信ツール。<br>
                高機能なのに低価格。今すぐメルマガ運用を始めましょう。
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('pricing') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 transition shadow-lg shadow-primary-600/25">
                    無料トライアルを始める
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="#features" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-primary-600 bg-white rounded-xl hover:bg-gray-50 transition border border-gray-200">
                    詳しく見る
                </a>
            </div>
        </div>
    </section>

    {{-- 特徴セクション --}}
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">選ばれる3つの理由</h2>
                <p class="mt-4 text-lg text-gray-600">他社ツールにはない、メルマガ管理だけの強み</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- 特徴1 --}}
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">完全日本語対応</h3>
                    <p class="text-gray-600">管理画面からメールテンプレートまで、すべて日本語。英語が苦手でも安心して使えます。</p>
                </div>
                {{-- 特徴2 --}}
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mailchimpの半額以下</h3>
                    <p class="text-gray-600">月額¥4,980から。海外ツールと同等の機能を、圧倒的な低価格で提供します。</p>
                </div>
                {{-- 特徴3 --}}
                <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">データ国内保管</h3>
                    <p class="text-gray-600">顧客データは日本国内のサーバーで管理。個人情報保護法にも安心して対応できます。</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 料金セクション --}}
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">シンプルな料金プラン</h2>
                <p class="mt-4 text-lg text-gray-600">ビジネスの規模に合わせて選べる3つのプラン</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @foreach ($plans as $key => $plan)
                <div class="bg-white rounded-2xl shadow-sm border {{ $key === 'standard' ? 'border-primary-600 ring-2 ring-primary-600' : 'border-gray-200' }} p-8 relative flex flex-col">
                    @if ($key === 'standard')
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                        <span class="bg-primary-600 text-white text-sm font-medium px-4 py-1 rounded-full">人気</span>
                    </div>
                    @endif
                    <h3 class="text-lg font-bold text-gray-900">{{ $plan['name'] }}</h3>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-4xl font-bold text-gray-900">&yen;{{ number_format($plan['price']) }}</span>
                        <span class="ml-1 text-gray-500">/月</span>
                    </div>
                    <ul class="mt-8 space-y-3 flex-1">
                        @foreach ($plan['features'] as $feature)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-gray-600">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-8">
                        @auth
                            <form action="{{ route('subscribe', $key) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full py-3 px-6 rounded-xl font-medium transition {{ $key === 'standard' ? 'bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/25' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                    このプランを選ぶ
                                </button>
                            </form>
                        @else
                            <a href="{{ route('register') }}" class="block w-full py-3 px-6 rounded-xl font-medium text-center transition {{ $key === 'standard' ? 'bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/25' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                無料で始める
                            </a>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">よくある質問</h2>
            </div>
            <div class="space-y-6">
                <details class="group border border-gray-200 rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer list-none font-medium text-gray-900">
                        無料トライアルはありますか？
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">はい、すべてのプランで14日間の無料トライアルをご利用いただけます。クレジットカードの登録が必要ですが、トライアル期間中に解約すれば料金は一切かかりません。</p>
                </details>
                <details class="group border border-gray-200 rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer list-none font-medium text-gray-900">
                        プランの変更はできますか？
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">はい、いつでもプランのアップグレード・ダウングレードが可能です。変更は即座に反映され、差額は日割り計算されます。</p>
                </details>
                <details class="group border border-gray-200 rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer list-none font-medium text-gray-900">
                        解約はいつでもできますか？
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">はい、契約期間の縛りはありません。いつでも管理画面から解約できます。解約後も請求期間の終わりまではサービスをご利用いただけます。</p>
                </details>
                <details class="group border border-gray-200 rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer list-none font-medium text-gray-900">
                        どのような決済方法に対応していますか？
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">Visa、Mastercard、American Express、JCBなど主要なクレジットカードに対応しています。決済はStripeを通じて安全に処理されます。</p>
                </details>
                <details class="group border border-gray-200 rounded-xl p-6">
                    <summary class="flex justify-between items-center cursor-pointer list-none font-medium text-gray-900">
                        データのセキュリティは大丈夫ですか？
                        <svg class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <p class="mt-4 text-gray-600">すべてのデータは日本国内のサーバーで暗号化して保管しています。SSL/TLS暗号化通信を採用し、個人情報保護法に準拠した運用を行っています。</p>
                </details>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-primary-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white">今すぐメルマガ配信を始めましょう</h2>
            <p class="mt-4 text-lg text-primary-100">14日間の無料トライアル。クレジットカード登録で即日開始。</p>
            <div class="mt-10">
                <a href="{{ route('pricing') }}" class="inline-flex items-center px-8 py-4 text-lg font-medium text-primary-600 bg-white rounded-xl hover:bg-gray-50 transition shadow-lg">
                    無料トライアルを始める
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- フッター --}}
    <footer class="py-12 bg-gray-900 text-gray-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <span class="text-lg font-bold text-white">メルマガ管理</span>
                <div class="flex gap-6 text-sm">
                    <a href="{{ route('pricing') }}" class="hover:text-white transition">料金</a>
                    <a href="{{ route('login') }}" class="hover:text-white transition">ログイン</a>
                </div>
                <p class="text-sm">&copy; {{ date('Y') }} メルマガ管理. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
