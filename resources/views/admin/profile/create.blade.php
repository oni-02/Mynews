<!DOCTYPE html>

@extends('layouts.profile')

@section('title'.'プロフィール')

@section('content')
{{--画面に対して中央揃えにする(container)  画面に対して横幅いっぱいに広がる(container-fluid)--}}
    <div class="container">
{{--上下のカラムを水平にしてくれる(行)--}}        
        <div class="row">
{{--col-●●-00の構成　col=(列)　●●=指定された画面幅　00=カラムの大きさ--}}          
            <div class="col-md-8 mx-auto">
                {{--※行の中に列を書く--}}
                <h1>プロフィール画面</h1>
            </div>    
        </div>
    </div>    
@endsection