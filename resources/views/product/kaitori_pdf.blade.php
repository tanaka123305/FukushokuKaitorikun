<!DOCTYPE html>
<html lang="ja">
<head>
    <title>見積もり書</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('fonts/ipaexg.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: ipag;
            font-style: bold;
            font-weight: bold;
            src: url('{{ storage_path('fonts/ipaexg.ttf') }}') format('truetype');
        }
        
        @media print{
        .print_pages{
        /*A4縦*/
        width: 172mm;
        height: 251mm;
        page-break-after: always;
        }
        /*最後のページは改ページを入れない*/
        .print_pages:last-child{
            page-break-after: auto;
        }
        }

        body {
            font-family: ipag !important;
            margin:0 20px;
        }

        .logo img {
            text-align: left;
            max-width: 120px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .created-at {
            text-align: right;
        }

        .my-5 {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }
        .logo img {
            text-align: center;
        }
        .kiyaku{
            text-align: left;
        }
        table{
            width: 100%;
            text-align: center;
            border: solid 1px black;
            border-collapse: collapse;

        }
        td , th{
            border: solid 1px black;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="logo">
                <img src="{{ asset ('images/logo.png') }}" alt="logo">
            </div>
            <div class="title">
                <h1 class="h2 font-weight-bold">買取見積書</h1>
            </div>
            <p class="created-at">作成日時: <?php echo now() ?></p>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            商品情報
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>カテゴリー</th>
                    <th>ブランド名</th>
                    <th>商品名</th>
                    <th>状態</th>
                    <th>お見積もり価格</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $data['category'] }}</td>
                    <td>{{ $data['brand'] }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['condition'] }}</td>
                    <td>{{ number_format($data['kaitori_price']) }}円</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="kiyaku">
        <p>上記のお見積もりに同意される場合は、以下ご利用規約をお読みの上、<br>【同意する□】のチェックマーク、【お名前・ご住所・電話番号】記入してください。
        <br>
        ■ご利用規約<br>
        1.一度買取が成立した商品は返却することができません。<br>
        2.商品は売買成立後にキャンセルはお受けする事ができません。<br>
        3.買取いただいたご本人以外への現金のお渡しはいたしかねます。<br>
        4.当店では20歳未満のお客様からの買取は行っておりません。
        </p>
        <p class="text-center">同意する□</p>
        
    </div>

    
    <div>
        <lavel>お名前：</lavel>
        <textarea cols="30" rows="10"></textarea>

        <lavel>ご住所：</lavel>
        <textarea cols="30" rows="10"></textarea>
        <lavel>電話番号：</lavel>
        <textarea cols="30" rows="10"></textarea>
        <br>
        <div class="text-center">
            <p   style="color: red">※スタッフ記入欄</p>
        </div>

        <lavel>運転免許証、保険証、マイナンバー いずれか：</lavel>
        <textarea cols="30" rows="10"></textarea>
    </div>




</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>