<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('メニュー画面') }}
        </h2>
    </x-slot>

<div class="container text-center">
    <div class="d-flex flex-column align-items-center mt-5">
        <a class="btn btn-danger btn-lg my-4"  href="{{ route('kaitori') }}">買取査定</a>
        <a class="btn btn-success btn-lg my-4" href="{{ route('pro_list') }}">商品管理</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-secondary btn-lg my-4" type="submit">ログアウト</button>
        </form>
    </div>
</div>
</x-app-layout>
