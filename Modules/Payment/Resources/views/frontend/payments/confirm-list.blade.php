@extends('frontend.layouts.app')

@section('title')
    ثبت فیش پرداختی
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">تایید پرداخت</h3>
                    <p class="">
                        پس از بررسی دقیق فیش پرداختی کاربر مد نظر را تایید کنید
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>کاربر</th>
                                <th>تاریخ و زمان</th>
                                <th>مبلغ</th>
                                <th>اقدام</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->user_id }}</td>
                                    <td>{{ $payment->date }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td><a class="btn btn-success" href="{{ route('frontend.payments.confirm', ['id'=>$payment->id]) }}">مشاهده</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    @endsection
