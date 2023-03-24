<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('メニュー画面') }}
        </h2>
    </x-slot>

    <div class="container">
        <div>
            <ul>
                <li>
                    <a href="{{ route('pro_list') }}">商品管理</a>
                </li>
                <li >
                    <a href="{{ route('kaitori') }}">買取査定</a>
                </li>
            </ul>
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-danger me-2" type="submit">ログアウト</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
