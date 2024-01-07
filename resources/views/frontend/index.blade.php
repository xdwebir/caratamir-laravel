@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-sm-6">
                <img class="w-100" src="{{ asset('img/default-banner.jpg') }}">
            </div>
            <div class="col-sm-6 p-4">
                <h1 class="">
                    کارا تعمیر - CaraTamir.ir
                </h1>
                <h2>
                    امداد رسانی
                </h2>
                <h2>
                    یدک کش
                </h2>
                <h2>
                    تعمیرگاه
                </h2>
                <h2>
                    سرویس خودرو
                </h2>
                @guest
                    <div class="p-4 m-4">
                        <a href="{{ route('register') }}" class="btn btn-primary p-2 mx-3">ثبت نام</a>
                    </div>
                @endguest

                @include('frontend.includes.messages')

            </div>
        </div>
    </section>
@endsection
