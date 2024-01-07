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
                        پس از بررسی دقیق فیش پرداختی و مطابقت با تاریخچه اقدام به حذف یا تایید پرداخت کنید
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
                    <h3>تاریخچه پرداخت های کاربر {{ $pay->user_id }}</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>تاریخ و زمان</th>
                                <th>مبلغ</th>
                                <th>کد رهگیری</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->date }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ $payment->tracking_code }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-4 p-4 shadow-lg">
                    <div class="row">
                        <div class="col-sm-6">
                            آیدی:‌{{ $pay->id }}
                            <hr>
                            تاریخ و زمان: {{ $pay->date }}
                        </div>
                        <div class="col-sm-6">
                            مبلغ به تومان: {{ $pay->amount }}
                            <hr>
                            کدرهگیری: {{ $pay->tracking_code }}
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <form method="POST" action="{{ route('frontend.payments.confirmed', ['id'=>$pay->id]) }}">
                        @csrf
                        <input type="submit" class="btn btn-success w-100" value="تایید"/>
                    </form>

                    <form class="mt-4" method="POST" action="{{ route('frontend.payments.deleted', ['id'=>$pay->id]) }}">
                        @csrf
                        <input onclick="return confirm('آیا اطمینان به حذف دارید؟');" type="submit" class="btn btn-danger w-100" value="حذف"/>
                    </form>
                </div>
            </div>


        </div>
    @endsection
