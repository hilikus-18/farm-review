@extends('Layout.site_frame')

@section('main')
<div>
@isset($errors)
    <p style="color:red">{{ $errors->first('message') }}</p>
@endisset
<form name="login" action="/login" method="post">
    {{ csrf_field() }}
<dl>
    <dt>メールアドレス：</dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
    <dt>パスワード：</dt><dd><input type="password" name="password" size="30"></dd>
</dl>
<button type="submit" name="action" value="send">ログイン</button>
</form>
</div>
@endsection
