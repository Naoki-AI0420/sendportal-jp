<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>料金プラン - メルマガ管理</title>
    <meta name="description" content="メルマガ管理の料金プラン。月額¥4,980から。ビジネスの規模に合わせて選べる3つのプラン。">
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
</head>
<body class="font-sans text-gray-800 antialiased bg-gray-50">

    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('lp') }}" class="text-xl font-bold text-primary-600">メルマガ管理</a>
                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-600 hover:text-primary-600">ダッシュボード</a>
                        <a href="{{ route('billing') }}" class="text-sm text-gray-600 hover:text-primary-600">請求管理</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-primary-600">ログイン</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">料金プラン</h1>
                <p class="mt-4 text-lg text-gray-600">ビジネスの規模に合わせて選べる3つのプラン。すべて14日間無料。</p>
            </div>

            @if (request('checkout') === 'cancel')
            <div class="max-w-2xl mx-auto mb-8 bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-center text-yellow-800">
                チェックアウトがキャンセルされました。プランを選び直してください。
            </div>
            @endif

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                @foreach ($plans as $key => $plan)
                <div class="bg-white rounded-2xl shadow-sm border {{ $key === 'standard' ? 'border-primary-600 ring-2 ring-primary-600' : 'border-gray-200' }} p-8 relative flex flex-col">
                    @if ($key === 'standard')
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                        <span class="bg-primary-600 text-white text-sm font-medium px-4 py-1 rounded-full">人気</span>
                    </div>
                    @endif
                    <h2 class="text-lg font-bold text-gray-900">{{ $plan['name'] }}</h2>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-4xl font-bold text-gray-900">&yen;{{ number_format($plan['price']) }}</span>
                        <span class="ml-1 text-gray-500">/月</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        購読者 {{ number_format($plan['subscribers_limit']) }}人 / 月{{ number_format($plan['emails_limit']) }}通
                    </p>
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
                            @if (auth()->user()->subscribed('default'))
                                <a href="{{ route('billing') }}" class="block w-full py-3 px-6 rounded-xl font-medium text-center transition bg-gray-100 text-gray-900 hover:bg-gray-200">
                                    プランを変更する
                                </a>
                            @else
                                <form action="{{ route('subscribe', $key) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full py-3 px-6 rounded-xl font-medium transition {{ $key === 'standard' ? 'bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/25' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                        このプランで始める
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('register') }}" class="block w-full py-3 px-6 rounded-xl font-medium text-center transition {{ $key === 'standard' ? 'bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-600/25' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }}">
                                無料で始める
                            </a>
                        @endauth
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-16 text-center text-gray-500 text-sm">
                <p>すべてのプランに14日間の無料トライアルが含まれます。いつでも解約可能。</p>
                <p class="mt-2">決済は <a href="https://stripe.com/jp" target="_blank" rel="noopener" class="text-primary-600 hover:underline">Stripe</a> を通じて安全に処理されます。</p>
            </div>
        </div>
    </main>

    <footer class="py-8 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} メルマガ管理. All rights reserved.
        </div>
    </footer>

</body>
</html>
