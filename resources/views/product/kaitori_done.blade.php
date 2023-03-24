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
                <h3>商品の追加が完了しました。</h3>
                <a href="{{ route('user_menu') }}" >メニュー画面へ</a>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
