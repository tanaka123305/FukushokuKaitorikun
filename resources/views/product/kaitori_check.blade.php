<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('買取査定画面') }}
        </h2>
    </x-slot>

<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
                <div class="col-md-12">

    <form method="POST" action="{{ route('kaitori_done') }}">
        @csrf
        <table class="table table-bordered mt-4">
            <tr>
                <th>商品名</th>
                <td class="bg-white">{{ $data['name'] }}</td>
                <input type="hidden" name="name" value="{{ $data['name'] }}">
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td class="bg-white">{{ $data['category']  }}</td>
                <input type="hidden" name="category" value="{{ $data['category'] }}">
            </tr>
            <tr>
                <th>ブランド</th>
                <td class="bg-white">{{ $data['brand'] }}</td>
                <input type="hidden" name="brand" value="{{ $data['brand'] }}">
            </tr>
            <tr>
                <th>状態</th>
                <td class="bg-white">{{ $data['condition'] }}</td>
                <input type="hidden" name="condition" value="{{ $data['condition'] }}">
            </tr>
            <tr>
                <th>買取価格</th>
                <td class="bg-white">{{ $data['kaitori_price'] }}円</td>
                <input type="hidden" name="kaitori_price" value="{{ $data['kaitori_price'] }}">
            </tr>
            <tr>
                <th>販売価格</th>
                <td class="bg-white">{{ $data['price'] }}円</td>
                <input type="hidden" name="price" value="{{ $data['price'] }}">
            </tr>
            <tr>
                <th>詳細</th>
                <td class="bg-white">{{ $data['comment']}}</td>
                <input type="hidden" name="comment" value="{{ $data['comment'] }}">
            </tr>
        </table>
        
        <button type="button" onclick="history.back()" class="btn btn-secondary mr-2">戻る</button>
        <button type="submit" class="btn btn-primary mr-2 ml-2" name="action" value="kaitori_pdf" formtarget="_blank" formmethod="POST" formaction="{{ route('kaitori_pdf') }}">印刷</button>
        <button class="btn btn-success ml-2" type="submit">買取完了する</button>
    </form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
