@extends('frontend.layouts.app')

@section('title')
    تاریخچه پرداختی
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">تاریخچه پرداخت</h3>
                    <p class="">
                        لیست تمام پرداختی های شما به شرح روبرو است
                    </p>

                    <div class="">
                        <a class="btn btn-primary"
                            href='{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}'>
                            <div class="">
                                داشبرد
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 py-4">
                <div class="p-4 shadow-lg">
                    <h3>تاریخچه پرداخت های شما</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>تاریخ و زمان</th>
                                <th>مبلغ</th>
                                <th>کد رهگیری</th>
                                <th>وضعیت</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->date }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->tracking_code }}</td>
                                    <td>{{ $payment->status }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-4 p-4 shadow-lg">
                    مجموع پرداخت تایید شده: {{ $sum }} تومان
                </div>
            </div>


        </div>
    @endsection
