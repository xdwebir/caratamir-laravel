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
                    <h3 class="">تایید سفارش {{ $order->id }}</h3>
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

                <div class="mb-4 shadow-lg">
                    <div class="p-4">
                        <div class="font-bold text-xl mb-2">مشخصات سفارش</div>
                        <p class="text-gray-700 text-base">
                            نام: {{ $order->first_name." ".$order->last_name }}
                            <hr>
                            شهر: {{ $order->city_name }}
                            <hr>
                            استان: {{ $order->state_name }}
                            <hr>
                            نوع خدمت: {{ $order->servicename }}
                            <hr>
                            آدرس: {{ $order->address }}
                            <hr>
                            تماس: {{ $order->mobile }}

                        </p>
                    </div>
                </div>

                <div class="shadow-lg">
                    <div class="p-4">
                        <h3 class="">اختصاص خدمت‌رسان به سفارش</h3>
                        @if (count($providers) != 0)
                            <table class="table table hover">
                                <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>تماس</th>
                                        <th>استان</th>
                                        <th>شهر</th>
                                        <th>خدمت</th>
                                        <th>شروع کاری</th>
                                        <th>پایان کاری</th>
                                        <th>اقدام</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($providers as $provider)
                                        <tr
                                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                            <td>{{ $provider->first_name." ".$provider->last_name }}</td>
                                            <td>{{ $provider->mobile }}</td>
                                            <td>{{ $provider->state_name }}</td>
                                            <td>{{ $provider->city_name }}</td>
                                            <td>{{ $provider->servicename }}</td>
                                            <td>{{ $provider->start_time }}</td>
                                            <td>{{ $provider->end_time }}</td>
                                            <td>
                                                <form action="{{ route('frontend.operator.orders.addprovider', ['order_id' => $order->id, 'provider_id' => $provider->id]) }}" method="POST">
                                                    @csrf
                                                    <input onclick="return confirm('آیا خدمت رسان انتخابی به سفارش مورد نظر اختصاص پیدا کند؟');" class="btn btn-success" type="submit" value="اختصاص"/>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="mt-4">
                                خدمت رسانی یافت نشد
                            </div>
                    </div>
                </div>
                @endif
            </div>


        </div>
    @endsection
