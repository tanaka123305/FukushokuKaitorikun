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

    <form method="POST" action="{{ route('kaitori_check') }}" oninput="arari.value=Math.floor((Number(price.value)-Number(kaitori_price.value))/Number(price.value) *100 )">
    @csrf
<!-- 商品名 -->
    <div class="form-group">
        <label for="name">商品名</label>
        <input type="text" name="name"  class="form-control" value="{{ old('name') }}">
    </div>
    @error('name')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- カテゴリー -->
    <div class="form-group">
        <label for="category">カテゴリー</label>
        <select name="category" class="form-control" >
            <option value="">選択してください</option>
            <option value="トップス" @if( old('category') === 'トップス') selected @endif>トップス</option>
            <option value="シャツ"@if( old('category') === 'シャツ') selected @endif>シャツ</option>
            <option value="ジャケット"@if( old('category') === '・ジャケット') selected @endif>ジャケット</option>
            <option value="アウター"@if( old('category') === 'アウター') selected @endif>アウター</option>
            <option value="ベスト"@if( old('category') === 'ベスト') selected @endif>ベスト</option>
            <option value="コート" @if( old('category') === 'コート') selected @endif>コート</option>
            <option value="パンツ" @if( old('category') === 'パンツ') selected @endif>パンツ</option>
            <option value="シューズ" @if( old('category') === 'シューズ') selected @endif>シューズ</option>
            <option value="アクセサリー" @if( old('category') === 'アクセサリー') selected @endif>アクセサリー</option>
            <option value="その他" @if( old('category') === 'その他') selected @endif>その他</option>
        </select>
    </div>
    @error('category')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- ブランド -->
    <div class="form-group">
        <label for="brand">ブランド</label>
        <input type="text" name="brand" class="form-control" value="{{ old('brand') }}">
    </div>
    @error('brand')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- 状態 -->
    <div class="form-group">
        <label for="condition">状態</label>
        <select name="condition" class="form-control" value="{{ old('condition') }}">
        <option value="">選択してください</option>
        <option value="新品" @if( old('condition') === '新品') selected @endif>新品</option>
        <option value="中古" @if( old('condition') === '中古') selected @endif>中古</option>
        <option value="やや傷・汚れあり" @if( old('condition') === 'やや傷・汚れあり') selected @endif>やや傷・汚れあり</option>
        <option value="傷・汚れあり" @if( old('condition') === '傷・汚れあり') selected @endif>傷・汚れあり</option>
        </select>
    </div>
    @error('condition')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- 買取価格 -->
    <div class="form-group">
        <label for="kaitori_price">買取価格</label>
        <input type="number" name="kaitori_price" class="form-control" value="{{ old('kaitori_price') }}">
    </div>
    @error('kaitori_price')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- 販売価格 -->
    <div class="form-group">
        <label for="price">販売価格</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
    </div>
    @error('price')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- 粗利率 -->
    <div class="form-group">
        <label for="arari">粗利率</label>
        <output type="text" name="arari"></output>%
    </div>

<!-- 備考 -->
    <div class="form-group">
        <label for="comment">備考</label>
        <textarea name="comment" class="form-control" value="{{ old('comment') }}"></textarea>
    </div>
    @error('comment')
        <span style="color: red">{{ $message }}</span>
    @enderror

<!-- 戻るボタン -->
    <button type="button" class="btn btn-secondary mr-2" onclick="history.back()">戻る</button>
<!-- 確認画面に遷移するボタン -->
    <button type="submit" class="btn btn-primary">確認画面へ</button>
    </form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>