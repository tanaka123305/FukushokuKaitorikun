<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品編集画面') }}
        </h2>
    </x-slot>

<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">

    <form method="POST" action="{{ route('pro_edit_done', ['id' => $data['id']]) }}">
        @csrf
        <table>
            <tr>
                <th>商品名</th>
                <td>{{ $data['name'] }}</td>
                <input type="hidden" name="name" value="{{ $data['name'] }}">
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $data['category']  }}</td>
                <input type="hidden" name="category" value="{{ $data['category'] }}">
            </tr>
            <tr>
                <th>ブランド</th>
                <td>{{ $data['brand'] }}</td>
                <input type="hidden" name="brand" value="{{ $data['brand'] }}">
            </tr>
            <tr>
                <th>状態</th>
                <td>{{ $data['condition'] }}</td>
                <input type="hidden" name="condition" value="{{ $data['condition'] }}">
            </tr>
            <tr>
                <th>買取価格</th>
                <td>{{ $data['kaitori_price'] }}円</td>
                <input type="hidden" name="kaitori_price" value="{{ $data['kaitori_price'] }}">
            </tr>
            <tr>
                <th>販売価格</th>
                <td>{{ $data['price'] }}円</td>
                <input type="hidden" name="price" value="{{ $data['price'] }}">
            </tr>
            <tr>
                <th>詳細</th>
                <td>{{ $data['comment']}}</td>
                <input type="hidden" name="comment" value="{{ $data['comment'] }}">
            </tr>
        </table>
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>
    </form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
