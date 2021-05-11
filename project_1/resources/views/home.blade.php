@extends('layouts.app')

@section('title-block')Главная Страница@endsection

@section('content')
    <h1>Главная Страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam iure delectus sint rem, eligendi labore a? Rerum magnam quos inventore ab, sed provident eius aut neque sequi natus, atque consequatur?</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
