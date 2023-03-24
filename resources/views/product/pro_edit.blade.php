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

    <form method="POST" action="{{ route('pro_edit_check', ['id' => $product->id]) }}">
    @csrf
<!-- 商品名 -->
    <div class="form-group">
        <label for="name">商品名</label>
        <input type="text" name="name"  class="form-control" value="{{$product->name}}">
    </div>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- カテゴリー -->
<!-- @if( $product->category === '〇〇') selected @endif>で前選択されていたものをselected属性を与える。 -->
<div class="form-group">
        <label for="category">カテゴリー</label>
        <select name="category" class="form-control" >
            <option value="">選択してください</option>
            <option value="トップス" @if( $product->category === 'トップス') selected @endif>トップス</option>
            <option value="シャツ" @if( $product->category === 'シャツ') selected @endif>シャツ</option>
            <option value="ジャケット" @if( $product->category === 'ジャケット') selected @endif>ジャケット</option>
            <option value="アウター" @if( $product->category === 'アウター') selected @endif>アウター</option>
            <option value="ベスト" @if( $product->category === 'ベスト') selected @endif>ベスト</option>
            <option value="コート" @if( $product->category === 'コート') selected @endif>コート</option>
            <option value="パンツ" @if( $product->category === 'パンツ') selected @endif>パンツ</option>
            <option value="シューズ" @if( $product->category === 'シューズ') selected @endif>シューズ</option>
            <option value="アクセサリー" @if( $product->category === 'アクセサリー') selected @endif>アクセサリー</option>
            <option value="その他" @if( $product->category === 'その他') selected @endif>その他</option>
        </select>
    </div>
    @error('category')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- ブランド -->
    <div class="form-group">
        <label for="brand">ブランド</label>
        <input type="text" name="brand" class="form-control" value="{{$product->brand}}">
    </div>
    @error('brand')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- 状態 -->
    <div class="form-group">
        <label for="condition">状態</label>
        <select name="condition" class="form-control" >
        <option value="">選択してください</option>
        <option value="新品" @if( $product->condition === '新品') selected @endif >新品</option>
        <option value="中古" @if( $product->condition === '中古') selected @endif}>中古</option>
        <option value="やや傷・汚れあり" @if( $product->condition === 'やや傷・汚れあり') selected @endif>やや傷・汚れあり</option>
        <option value="傷・汚れあり" @if( $product->condition === '傷・汚れあり') selected @endif>傷・汚れあり</option>
        </select>
    </div>
    @error('condition')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- 買取価格 -->
    <div class="form-group">
        <label for="kaitori_price">買取価格</label>
        <input type="number" name="kaitori_price" class="form-control" value="{{$product->kaitori_price}}">
    </div>
    @error('kaitori_price')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- 販売価格 -->
    <div class="form-group">
        <label for="price">販売価格</label>
        <input type="number" name="price" class="form-control" value="{{$product->price}}">
    </div>
    @error('price')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- 備考 -->
    <div class="form-group">
        <label for="comment">備考</label>
        <textarea name="comment" class="form-control" >{{$product->comment}}</textarea>
    </div>
    @error('comment')
        <span class="text-danger">{{ $message }}</span>
    @enderror

<!-- 戻るボタン -->
    <button type="button" onclick="history.back()">戻る</button>
<!-- 確認画面に遷移するボタン -->
    <button type="submit" class="btn btn-primary">確認画面へ</button>
    </form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>



