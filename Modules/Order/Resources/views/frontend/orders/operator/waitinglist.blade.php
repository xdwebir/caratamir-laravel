@extends('frontend.layouts.app')

@section('title')
    تایید سفارشات
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">تایید سفارشات</h3>
                    <p class="">
                        خدمت رسان هر سفارش را با زدن دکمه تایید مشخص کنید
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
                <h2>
                    لیست سفارشات در انتظار خدمت رسان

                </h2>
                <table class="table table-hover">
                    <thead class="">
                        <tr>
                            <th>موبایل</th>
                            <th>استان</th>
                            <th>شهر</th>
                            <th>اقدام</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="">
                                <td class="">{{ $order->mobile }}</td>
                                <td class="">{{ $order->state_name }}</td>
                                <td class="">{{ $order->city_name }}</td>
                                <td class="">
                                    <a class="btn btn-success" href="{{ route('frontend.operator.orders.confirmorder', ['id'=>$order->id]) }}">
                                    مشاهده
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            </div>
        </div>


    </div>
@endsection
