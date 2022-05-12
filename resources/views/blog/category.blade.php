@extends('blog.layouts.master')

@section('title',  $category->name )

@section('content')

    <div class="starter-template">
        <h1>
            {{ $category->name }}
        </h1>
        <p>
            {{ $category->description }}
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="koOVa8yo2Ta7WVeKPwmRTkmSzHrZ6963rJzUb7UJ">            </form>
                        </p>
                    </div>
                </div>
            </div>
            @include('blog.card')
    </div>
@endsection
