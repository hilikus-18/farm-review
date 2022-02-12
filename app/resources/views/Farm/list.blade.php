@extends('Layout.site_frame')

@section('main')
<div>
    <h1>Farm List</h1>
    <p>farm list</p>
    <div class="farm-search-generator">
        <form id="search-farm-form" action="/farm/search" method="get">
            <input name="utf8" type="hidden">
            <table id=search-table>
                <tbody>
                    <tr>
                        <th><label for="">地域から探す</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">収穫物から探す</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">作業種別から探す</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">居住種別から探す</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">総合評価</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">ファーム名</label></th>
                        <td><div></div></td>
                    </tr>
                    <tr>
                        <th><label for="">フリーワード</label></th>
                        <td><div></div></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <button type="submit">検索</button>
            </div>
        </form>
    </div>
    <div>
        <p>全<span></span>件中<span></span>件表示</p>
    </div>
</div>
@endsection