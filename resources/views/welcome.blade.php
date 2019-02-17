@extends('layout.main')

@section('page_content')
    <div class="pusher">
        <div class="ui inverted vertical masthead center aligned segment index_banner_img">
            <div class="ui text container">
                <h1 class="ui inverted header">
                    Laravel-Library
                </h1>
                <h2>書籍からスキルをゲットしよう</h2>
                <div class="ui huge primary button start-reading">
                    スタート <i class="right arrow icon"></i>
                </div>
            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui container">
                <h2 class="ui center aligned icon header">
                    <i class="circular student icon"></i> 人気断片
                </h2>
                <div class="ui link four cards">
                    <div class="card">
                        <div class="image">
                            <img src="/images/article_9.jpeg">
                        </div>
                        <div class="content">
                            <div class="header">
                                <a href="#">eligendi animi iure dolorem sunt</a>
                            </div>
                            <div class="description">
                                Consequatur dolores porro accusantium nulla qui ipsa ipsam.
                            </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">498 回閲覧</span>
                            <span><i class="user icon"></i>0 個評価 </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="/images/article_3.jpeg">
                        </div>
                        <div class="content">
                            <div class="header">
                                <a href="#">voluptatum alias aperiam dolorum placeat</a>
                            </div>
                            <div class="description">
                                Quaerat recusandae aliquam veritatis amet.
                            </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">491 回閲覧</span>
                            <span><i class="user icon"></i>0 個評価 </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="/images/article_4.jpeg">
                        </div>
                        <div class="content">
                            <div class="header">
                                <a href="#">est nostrum ut aliquid totam</a>
                            </div>
                            <div class="description">
                                Autem ipsam sequi assumenda.
                            </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">491 回閲覧</span>
                            <span><i class="user icon"></i>0 個評価 </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="/images/article_9.jpeg">
                        </div>
                        <div class="content">
                            <div class="header">
                                <a href="#">quo voluptatem aut tempore ullam</a>
                            </div>
                            <div class="description">
                                Recusandae rerum molestiae fugit molestias minima autem quia.
                            </div>
                        </div>
                        <div class="extra content">
                            <span class="right floated">487 回閲覧</span>
                            <span><i class="user icon"></i>0 個評価 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <h2 class="ui center aligned icon header">
                    <i class="circular book icon"></i> 人気書籍
                </h2>
                <div class="ui grid">
                    <div class="four wide column">
                        <div class="ui special cards">
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <a href="#" class="ui primary button">
                                                    立ち読み
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/book_5.png">
                                </div>
                                <div class="content">
                                    <a class="header">aut nisi laudantium</a>
                                    <div class="meta">
                                        <span class="date">Aut expedita est tenetur ipsum molestias est.</span>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a><i class="users icon"></i> 8 人購入 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui special cards">
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer transition hidden">
                                        <div class="content">
                                            <div class="center">
                                                <a href="#" class="ui primary button">
                                                    立ち読み
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/book_2.png">
                                </div>
                                <div class="content">
                                    <a class="header">blanditiis natus quibusdam</a>
                                    <div class="meta">
                                        <span class="date">Dolores repellat voluptas atque accusantium.</span>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a><i class="users icon"></i> 6 人購入 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui special cards">
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <a href="#" class="ui primary button">
                                                    立ち読み
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/book_6.png">
                                </div>
                                <div class="content">
                                    <a class="header">beatae dolor porro</a>
                                    <div class="meta">
                                        <span class="date">Sed aperiam provident iure illum optio qui rerum.</span>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a><i class="users icon"></i> 7 人購入 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui special cards">
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui inverted dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <a href="#" class="ui primary button">
                                                    立ち読み
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/images/book_4.png">
                                </div>
                                <div class="content">
                                    <a class="header">in aliquid et</a>
                                    <div class="meta">
                                        <span class="date">Veritatis velit beatae voluptas et voluptatem rerum.</span>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a><i class="users icon"></i> 6 人購入 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <h2 class="ui header">
                    <i class="fire icon red"></i>
                    <div class="content">人気タグ</div>
                </h2>
                <div class="ui tag labels">
                    <a class="ui label green" href="tag/index.html">PHP</a>
                    <a class="ui label teal"  href="tag/index.html">Python</a>
                    <a class="ui label blue"  href="tag/index.html">Java</a>
                    <a class="ui label violet"  href="tag/index.html">Go</a>
                    <a class="ui label purple"  href="tag/index.html">javascript</a>
                    <a class="ui label pink"  href="tag/index.html">C++</a>
                </div>
            </div>
        </div>
@endsection