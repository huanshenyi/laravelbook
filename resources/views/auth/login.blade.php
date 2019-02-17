@extends('layout.main')

@section('page_style')
    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .column {
            max-width: 450px;
        }
    </style>

@endsection

@section('page_content')

    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <div class="content">
                    Laravel-Library
                </div>
            </h2>
            <form class="ui large form" method="POST" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail ">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="パスワード">
                        </div>
                    </div>
                    <button type="submit" class="ui fluid large teal submit button">
                        ログイン
                    </button>
                </div>
                <div class="ui error message">
                </div>
            </form>
            <div class="ui message">
                アカウント持ってない方 <a href="register.html">新規制作</a>
            </div>
        </div>
    </div>
@endsection