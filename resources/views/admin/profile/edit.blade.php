{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール画面</h2>
                {{--enctype=multipart/form-data:: ファイルを含むデータ--}}
                <form action="{{action('admin\profilecontroller@edit')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    
                    @if (count($errors) > 0)
                     <ul>
                            @foreach ($errors->all() as $e) 
                                  <li>{{$e}}</li>
                            @endforeach      
                     </ul>
                    @endif 
                    
                <div class="form-group row">
                    <label class="col-md-10">名前</label>
                    <div class="col-md-5 col-md-offset-3">
                        <input type="text" class="form-control" name="namae" placeholder="    名           前   " value="{{old('namae')}}" class="form-control input-lg">
                        <strong class="text-danger">*必須</strong>
                    </div>
                </div>
                
                <div class="from-group row">
                    <label class="col-md-10">性別</label>
                    <div class="col-md-5 col-md-offset-3">
                        <input type="radio" name="性別" value="男" required> 男
                        <input type="radio" name="性別" value="女"> 女  
                        <strong class="text-danger">*必須</strong>
                    </div>
                </div>
                <br>
                
                
                <div class="form-group row">
                    <label class="col-md-10">趣味</label>
                    <div class="col-md-6">
                　　<label class="checkbox-inline"><input type="checkbox">  スポーツ</label>
                    <label class="checkbox-inline"><input type="checkbox">  料理</label>
                    <label class="checkbox-inline"><input type="checkbox">  映画鑑賞</label>
                    <label class="checkbox-inline"><input type="checkbox">  その他</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="from-group row">
                    <label class="col-md-10">自己紹介</label>
                    <div class="col-md-10">
                    <textarea class="form-control" name="body" rows="15"></textarea>
                    <strong class="text-danger">*必須</strong>
                </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection