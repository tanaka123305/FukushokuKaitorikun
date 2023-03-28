<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品詳細画面') }}
        </h2>
    </x-slot>

<div id="page-content">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">

        <table class="table table-bordered mt-4">
            <tr>
                <th>商品名</th>
                <td class="bg-white">{{ $product['name'] }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td class="bg-white">{{ $product['category']  }}</td>
            </tr>
            <tr>
                <th>ブランド</th>
                <td class="bg-white">{{ $product['brand'] }}</td>
            </tr>
            <tr>
                <th>状態</th>
                <td class="bg-white">{{ $product['condition'] }}</td>
            </tr>
            <tr>
                <th>買取価格</th>
                <td class="bg-white">{{ number_format($product['kaitori_price']) }}円</td>
            </tr>
            <tr>
                <th>販売価格</th>
                <td class="bg-white">{{ number_format($product['price']) }}円</td>
            </tr>
            <tr>
                <th>詳細</th>
                <td class="bg-white">{{ $product['comment']}}</td>
            </tr>
            <tr>
                <th>作成日時</th>
                <td class="bg-white">{{ $product['created_at']}}</td>
            </tr>
        </table>
        <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
