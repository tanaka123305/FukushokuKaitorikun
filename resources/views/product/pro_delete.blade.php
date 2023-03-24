<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('削除画面') }}
        </h2>
    </x-slot>

<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">

    <form method="POST" action="{{ route('pro_delete_done', ['id' => $product['id']]) }}">
        @csrf
        <table>
            <tr>
                <th>商品名</th>
                <td>{{ $product['name'] }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $product['category']  }}</td>
            </tr>
            <tr>
                <th>ブランド</th>
                <td>{{ $product['brand'] }}</td>
            </tr>
            <tr>
                <th>状態</th>
                <td>{{ $product['condition'] }}</td>
            </tr>
            <tr>
                <th>買取価格</th>
                <td>{{ number_format($product['kaitori_price']) }} 円</td>
            </tr>
            <tr>
                <th>販売価格</th>
                <td>{{ number_format($product['price']) }} 円</td>
            </tr>
            <tr>
                <th>詳細</th>
                <td>{{ $product['comment']}}</td>
            </tr>
        </table>
        <button class="btn" type="button" onclick="history.back()">戻る</button>
        <button type="submit">削除する</button>
    </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
