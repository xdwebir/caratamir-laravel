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
                    <h3 class="">ثبت فیش پرداختی</h3>
                    <p class="">
                        رسید فیش پرداختی خود را وارد نمایید
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
                    <form method="POST" action="{{ route('frontend.payments.store') }}">
                        @csrf

                            <label for="date" class="form-label">تاریخ و ساعت</label>
                            <input class="form-control" id="date" name="date" />

                            <label for="amount" class="form-label">مبلغ به تومان</label>
                            <input class="form-control" id="amount" name="amount" type="number" />

                            <label for="tracking_code" class="form-label">کد رهگیری</label>
                            <input class="form-control" id="tracking_code" name="tracking_code" type="number" />

                            <input class="btn btn-success w-100 mt-4" type="submit"
                            value="ثبت فیش" />
                    </form>
                </div>
            </div>


        </div>

        <link type="text/css" rel="stylesheet" href="/css/persian-datepicker.min.css" />
        <script type="text/javascript" src="/js/persian-date.min.js"></script>
        <script type="text/javascript" src="/js/persian-datepicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#date").pDatepicker({
                    timePicker: {
                        enabled: true,
                        meridiem: {
                            enabled: true
                        }
                    }
                });
            });
        </script>
    @endsection
