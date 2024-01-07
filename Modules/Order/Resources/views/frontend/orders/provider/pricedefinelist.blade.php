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
                <div class="p-4 shadow-lg">
                    <h3 class="">درج قیمت تمام شده سفارشات پایان یافته</h3>
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
                        <div class="">تعیین قیمت تمام شده خدمت</div>
                        @if (count($orders) != 0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>آیدی</th>
                                        <th>آدرس</th>
                                        <th>تماس مشتری</th>
                                        <th>اقدام</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr
                                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->mobile }}</td>
                                            <td>
                                            <a class="btn btn-success" href="{{ route('frontend.provider.orders.pricedefine', ['order_id'=>$order->id]) }}">
                                                درج قیمت
                                            </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="mt-4">
                                سفارشی یافت نشد
                            </div>
                    </div>
                </div>
                @endif
            </div>


        </div>
    @endsection
