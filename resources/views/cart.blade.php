@extends('layouts.app')
@section('title','Корзина')
@section('content')
<div class="cart-field">
    <h1>Ваша корзина</h1>
    @foreach($cart as $item)
        <div class="cart-item">
            <p>{{ $item->title }}</p>&nbsp
            <p>{{ $item->price }}</p>&nbsp
            <p>Количество: {{ $item->count }}</p>
        </div>
    @endforeach
    <p>Всего к оплате: {{ $cartSum }}</p>
    <button>К оплате</button>
</div>
@endsection
