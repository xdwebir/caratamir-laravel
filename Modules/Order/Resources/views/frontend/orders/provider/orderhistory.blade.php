@extends('frontend.layouts.app')

@section('title')
    تاریخچه سفارشات
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">تاریخچه سفارشات</h3>
                    <p class="">
                        تمام خدماتی که انجام دادید به شرح روبرو است
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
                <div class="mb-4 shadow-lg p-4">
                    <table class="table tanle-hover">
                        <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>شهر</th>
                                <th>آدرس</th>
                                <th>وضعیت</th>
                                <th>قیمت (تومان)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->city_name}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    @endsection
