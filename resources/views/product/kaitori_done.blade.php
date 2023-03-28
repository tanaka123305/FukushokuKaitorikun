<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('買取完了') }}
        </h2>
    </x-slot>
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <p class="mt-4">商品の追加が完了しました。</p>
                <a class="btn btn-secondary mt-4" href="{{ route('user_menu') }}" >メニュー画面へ</a>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
