<header>
    <div class="header-block">
        <div class="header-left"></div>
        <div class="header-centre">
            <figure class="header-logo">
                <a href="{{ url('/') }}">
                    <img src="" alt="">
                </a>
            </figure>
            <div class="navigation-top">
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                    <div class="menu-main-container">
                        <ul id="top-menu" class="menu">
                            <li class="menu-item">
                                <a href="{{ url('/farm/list') }}">ファーム</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/review/list') }}">レビュー</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/tip/list') }}">Tip</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/content/list') }}">コンテンツ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="header-right">
            <div class="header-user">
                @if (Auth::check())
                <p><a href="/logout">ログアウト</a></p>
                @else
                <a href="{{ url('/register') }}">
                    <div class="icon icon-off"></div>
                    <span class="sp-none">新規会員登録</span>
                </a>
                <a href="{{ url('/login') }}">
                    <div class="icon icon-off"></div>
                    <span class="sp-none">ログイン</span>
                </a>
                @endif
            </div>
        </div>
    </div>
</header>