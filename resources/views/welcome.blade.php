<h1>問題①</h1>

<p><span>①Laravel</span>はSQLよりもPHPに近い処理でデータベースを操作することができます。</p>
<p><span>②Eloquent</span>はORMと呼ばれる機能をLaravelに実装したもので、MVCの<span>③Model</span>を定義し、これを利用してデータベースを操作するように設計されています。</p>
<p>CRUDとはシステムに必要な4つの主要機能である<span>④Create</span>、<span>⑤Read</span>、<span>⑥Update</span>、Deleteの頭文字を並べた用語です。</p>
<p>Laravelではデータベースの接続の設定を行う際に<span>⑦.env</span>というファイルを編集します。<p>
<p><span>⑧Migration</span>を行うことで⑧ファイルで定義した内容をデータベースに反映させることができます。</p>
<p>初期状態でいくつかのダミーデータを用意できる機能は<span>⑨Seeder</span>と呼ばれます。</p>

<a href="{{route('contact.index')}}">問題②はこちらです</a>


<style>
    span {
        color: red
    }

    a {
        font-size: 20px
    }
</style>
