<div class="ui large top fixed menu">
    <div class="ui container">
        <a class="item active" href="/">ホームページ</a>
        <a class="item" href="book/index.html">本棚</a>
        <a class="item" href="article/index.html">断片</a>
        <div class="right menu">
            <div class="item">
                <div class="ui action input">
                    <input type="text" name="keyword" placeholder="キーワードを入力...">
                    <div class="ui compact selection dropdown" tabindex="0"><select name="type">
                            <option selected="" value="1">本棚</option>
                            <option value="2">断片</option>
                        </select><i class="dropdown icon"></i><div class="text">書籍</div><div class="menu" tabindex="-1"><div class="item active selected" data-value="1">本棚</div><div class="item" data-value="2">断片</div></div></div>
                    <button type="submit" class="ui button">検索</button>
                </div>
            </div>
            <div class="item">
                <a class="ui button" href="{{route('login')}}">ログイン</a>
            </div>
            <div class="item">
                <a class="ui primary button" href="{{route('register')}}">新規ユーザー</a>
            </div>
        </div>
    </div>
</div>