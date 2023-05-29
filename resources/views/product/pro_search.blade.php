<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品検索画面') }}
        </h2>
    </x-slot>


<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
        
            <style>
                .search-form {
                    margin-top: 20px;
                }
            </style>

            <form action="{{ route('pro_search') }}" method="GET" class="search-form">
                <input type="text" name="query" value="{{ $query }}" placeholder="検索キーワード">
                <button class="btn btn-light" type="submit">検索</button>
            </form>



        <div class="table-responsive">
        <table class="table table-striped mt-4" style="width: 1000px; max-width: 0 auto;">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>商品名</th>
                    <th>カテゴリー</th>
                    <th>ブランド</th>
                    <th>販売価格</th>
                    <th>詳細</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ number_format($product->price) }}円</td>
                        <td><a href="{{ route('pro_disp', ['id' => $product->id]) }}" class="btn btn-success">詳細</a></td>
                        <td><a href="{{ route('pro_edit', ['id' => $product->id]) }}" class="btn btn-primary">編集</a></td>
                        <td><a href="{{ route('pro_delete', ['id' => $product->id]) }}" class="btn btn-danger">削除</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    

            </div>
        </div>
    </div>
</div>

</x-app-layout>
