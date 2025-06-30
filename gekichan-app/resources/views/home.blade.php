<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>劇ちゃん - ホーム</title>
</head>
<body>

    <div class="top text-end bg-dark">
        <h1 class="text-white text-center fs-3">ようこそ,劇ちゃんへ!!</h1>
        <ul>
            <li class="list-inline-item text-light">ホーム</li>
            <li class="list-inline-item text-light">スレッド作成</li>
            <li class="list-inline-item text-light">ログイン</li>
            <li class="list-inline-item text-light">ヘルプ</li>

        </ul>
    </div>

    <div class="title text-center mb-4 bg-light-subtle">



        <p class="fs-5">~劇伴好きが集まる掲示板サイト~</p>
        <form class="d-flex justify-content-center" action="{{ url('/search') }}">
            <input class="form-control form-control-lg border-success w-50 me-2" type="search" name="query" placeholder="掲示板/作曲家/作品名を検索">
            <button type="submit" class="btn btn-outline-success text-gray">検索</button>
        </form>



    </div>
    
    <div class="body text-center w-50 mx-auto text-center ">

        <h3 class="bg-success ">こんな感じでスレッドを立ててみてください</h3>
        <ul class="list-unstyled">
            <li>劇伴について語る</li>
            <li>おすすめの作品</li>
            <li>今月のライブ情報</li>
            <li>あの作品のこのシーンで流れてた曲は何？</li>
        </ul>

    <a href="{{ url('/threads') }}">人気のスレッド一覧表</a>
    <table class="table table-hover table-bordered border-success w-75 mx-auto">
        <thead class="table-success">
            <tr>
                <th scope="col">作曲家</th>
                <th scope="col">作品</th>
                <th scope="col">ライブ情報</th>
                <th scope="col">サブスク解禁情報</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td><a href="{{ url('/threads/composer/澤野弘之') }}}">澤野弘之</a></td>
                <td>鬼滅の刃</td>
                <td>京伴祭</td>
                <td>6月解禁情報</td>
            </tr>
            <tr>
                <td><a href="{{ url('/threads/composer/林ゆうき') }}">林ゆうき</a></td>
                <td>進撃の巨人</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><a href="{{ url('/threads/composer/梶浦由紀') }}">梶浦由紀</a></td>
                <td>葬送のフリーレン</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><a href="{{ url('/threads/composer/Evan Call') }}">Evan Call</a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><a href="{{ url('/threads/composer/久石譲') }}">久石譲</a></td>
                <td>もののけ姫</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    </div>


</body>
</html>