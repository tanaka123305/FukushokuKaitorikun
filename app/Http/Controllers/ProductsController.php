<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * 商品一覧画面の処理
     */
    public function index()
    {
        $query = \App\Models\Product::query();
        // 全件取得 +ページネーション
        $products = $query->orderBy('id','desc')->paginate(10);
        return view('product.pro_list', compact('products'));
    }
    /**
     * ******商品追加******
     */
    // 商品登録画面を表示する
    public function add()
    {
        return view('product.pro_add');
    }

    // 商品確認画面を表示する
    public function addCheck(ProductRequest $request)
{
    // ログインユーザーのIDを取得
    $user_id = Auth::id();

    // リクエストから商品情報を取得
    $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);
    $data['user_id'] = $user_id;

    // 商品確認画面に渡す
    return view('product.pro_add_check', compact('data'));
}

    // 商品を登録処理
    public function addDone(Request $request)
    {
    // ログインユーザーのIDを取得
    $user_id = Auth::id();

    // リクエストから商品情報を取得
    $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);
    $data['user_id'] = $user_id;

    // Productモデルを使ってデータベースに登録する
    $product = new Product();
    $product->fill($data);
    $product->save();

    // 登録完了ページに遷移し、登録完了メッセージを表示する
    return view('product.pro_add_done');
    }

    /**
     * ******買取******
     */
    // 買取査定画面を表示する
    public function kaitori()
    {
        return view('product.kaitori');
    }

    // 買取確認画面を表示する
    public function kaitoriCheck(ProductRequest $request)
{
    // ログインユーザーのIDを取得
    $user_id = Auth::id();

    // リクエストから商品情報を取得
    $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);
    $data['user_id'] = $user_id;

    // 買取確認画面に渡す
    return view('product.kaitori_check', compact('data'));
}

    // 買取（商品登録）処理
    public function kaitoriDone(Request $request)
    {
    // ログインユーザーのIDを取得
    $user_id = Auth::id();

    // リクエストから商品情報を取得
    $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);
    $data['user_id'] = $user_id;

    // Productモデルを使ってデータベースに登録する
    $product = new Product();
    $product->fill($data);
    $product->save();

    // 登録完了ページに遷移し、登録完了メッセージを表示する
    return view('product.kaitori_done');
    }

    /**
     * ******商品編集******
     */
    // 商品編集画面を表示する

    public function edit($id)
    {
    $product = \App\Models\Product::findOrFail($id);
    return view('product.pro_edit', compact('product'));
    }

    // 商品編集確認画面を表示する
    public function editCheck(ProductRequest $request,$id)
    {
    // 商品情報を取得
    $product = \App\Models\Product::findOrFail($id);

    // リクエストから商品情報を取得
    $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);

    // 商品IDとログインユーザーのIDを取得して、$data変数に追加
    $data['id'] = $id;
    // $data['user_id'] = auth()->id();

    // 商品確認画面に渡す
    return view('product.pro_edit_check', compact('data'));
    }    

    // 商品を編集登録処理
    public function editDone(Request $request, $id)
    {
    //レコードを検索
    $product = \App\Models\Product::findOrFail($id);

    // ログインユーザーのIDを取得して、$productインスタンスにuser_idを設定
    // $product->user_id = auth()->id();
    //値を代入
    $product->name = $request->name;
    $product->category = $request->category;
    $product->brand = $request->brand;
    $product->condition = $request->condition;
    $product->kaitori_price = $request->kaitori_price;
    $product->price = $request->price;
    $product->comment = $request->comment;
    
    //保存（更新）
    $product->save();

    // 編集完了ページに遷移し、編集完了メッセージを表示する
    return view('product.pro_edit_done');
    }

    /**
     * ******商品削除******
     */
    public function destroy($id)
    {
        //レコードを検索
        $product = \App\Models\Product::findOrFail($id);
        // 削除確認画面に渡す
        return view('product.pro_delete', compact('product'));
    }

    public function destroyDone($id)
    {
    //レコードを検索
    $product = \App\Models\Product::findOrFail($id);
    $product->delete();

    
    return view('product.pro_delete_done');
    }

    /**
     * ******商品詳細******
     */
    public function show($id)
    {
        //レコードを検索
        $product = \App\Models\Product::findOrFail($id);
        // 削除確認画面に渡す
        return view('product.pro_disp', compact('product'));
    }


}

