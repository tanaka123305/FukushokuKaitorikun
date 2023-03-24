<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品編集完了') }}
        </h2>
    </x-slot>
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">

                <h2>商品の編集が完了しました。</h2>
                <a href="{{ route('pro_list') }}" >商品一覧画面へ</a>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
