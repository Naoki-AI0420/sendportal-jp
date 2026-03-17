<div class="logo text-center">
    {{-- ロゴ画像を差し替える場合は public/img/logo.png に配置してください --}}
    @if(file_exists(public_path('img/logo.png')))
        <img src="{{ asset('/img/logo.png') }}" alt="メルマガ管理" width="225px" class="my-5">
    @else
        <h1 class="my-5" style="color: #6c757d; font-weight: 300;">{{ config('app.name') }}</h1>
    @endif
</div>
