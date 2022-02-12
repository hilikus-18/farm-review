@extends('Layout.site_frame')

@section('main')
<div>
<h1>登録画面</h1>
<form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <dl>
        <dt>ニックネーム：</dt>
        <dd><input type="text" name="nickname" size="30">
            <span>{{ $errors->first('nickname') }}</span></dd>
    </dl>
    <dl>
        <dt>メールアドレス：</dt>
        <dd><input type="text" name="email" size="30">
            <span>{{ $errors->first('email') }}</span></dd>
    </dl>
    <dl>
        <dt>パスワード：</dt>
        <dd><input type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
    </dl>
    <dl>
        <dt>パスワード(確認）：</dt>
        <dd><input type="password" name="password_confirmation" size="30">
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
    </dl>
    <button type="submit" name="action" value="send">送信</button>
</form>
</div>
@endsection