<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('商品管理画面') }}
        </h2>
    </x-slot>

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                    <!-- ボタン後で作成予定 -->
                    <div class="container mt-5">
                        <div class="col-sm-2" style="padding-left: 0;">
                            <a href="{{ route('pro_add') }}" class="btn" style="background-color: #f0ad4e; color: white; ">新規登録</a>
                        </div>
                    </div>

                    <!--テーブル-->
                    <div class="table-responsive">
                        <table class="table" style="width: 1000px; max-width: 0 auto;">
                            <tr class="table-info">
                                <th scope="col" width="5%">ID</th>
                                <th scope="col" width="15%">ブランド</th>
                                <th scope="col" width="15%">商品名</th>
                                <th scope="col" width="15%">カテゴリー</th>
                                <th scope="col" width="15%">販売価格</th>
                            </tr>
                            <!-- productの中身を表示 -->
                            @foreach ($products as $product)
                            <tr>
                                <!-- チェックボックス -->
                                <!-- <td><input type="checkbox" name="product_id[]" value="{{ $product->id }}"></td> -->
                                <td scope="row">{{ $product->id }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ number_format($product->price) }}円</td>

                                <td><a href="{{ route('pro_disp', ['id' => $product->id]) }}"class="btn btn-success">詳細</a></td>
                                <td><a href="{{ route('pro_edit', ['id' => $product->id]) }}" class="btn btn-primary">編集</a></td>
                                <td><a href="{{ route('pro_delete', ['id' => $product->id]) }}" class="btn btn-danger">削除</a></td>
                            </tr>
                            @endforeach


                        </table>
                    </div>
                    <!--/テーブル-->
                    <!-- ページネーション -->
                    {!! $products->render() !!}

                    <a class="link" href="{{ route('user_menu') }}">
                        メニュー画面へ
                    </a> 

                </div><!-- /container -->
            </div>
        </div>
    </div>
</div>
<!-- / Page Content -->
</x-app-layout>
