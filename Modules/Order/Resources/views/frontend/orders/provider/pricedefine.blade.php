@extends('frontend.layouts.app')

@section('title')
    ثبت قیمت تمام شده خدمات
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="shadow-lg p-4">
                    <h3 class="">درج قیمت تمام شده سفارش پایان یافته</h3>
                    <p class="">
                        قیمت تمام شده خدمت ارائه شده را با دقت و به تومان وارد نمایید
                    </p>

                    <div class="pt-4 text-center">
                        <a class="btn btn-primary" href='{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}'>
                            <div
                                class="">
                                داشبرد
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 py-4">



                <div class="p-4 shadow-lg">
                    <div class="">
                        <h3 class="">تعیین قیمت تمام شده خدمت</h3>
                        آیدی سفارش: {{$order->id}}<br>
                        تماس مشتری: {{$order->mobile}}<br>
                        آدرس: {{$order->address}}<hr>
                        <form method="POST" action="{{ route('frontend.provider.orders.setprice', ['order_id'=>$order->id]) }}">
                            @csrf
                            <label class="form-label" for="price">قیمت به تومان</label>
                            <input class="form-control" type="number" min="0" placeholder="تومان" name="price" id="price"/>
                            <input class="btn btn-success w-100 mt-4" type="submit" value="ثبت قیمت">
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
