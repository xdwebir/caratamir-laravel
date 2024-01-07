@extends('frontend.layouts.app')

@section('title')
    ثبت نام
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 p-4">
                <x-slot name="title">
                    ثبت نام
                </x-slot>

                <h3>ثبت نام </h3>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- First Name -->
                    <div class="mt-4">
                        <label for="first_name" class="form-label">نام</label>

                        <x-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')"
                            required autofocus />
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <label for="last_name" class="form-label">نام خانوادگی</label>

                        <x-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')"
                            required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="mobile" class="form-label">موبایل</label>

                        <x-input id="mobile" class="form-control" type="phone" name="mobile" :value="old('mobile')"
                            required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="form-label">رمز عبور</label>

                        <x-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label">تکرار رمز عبور</label>

                        <x-input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required />
                    </div>

                    <div class="mt-4">
                        <label class="form-check-label" for="customer"></label>
                        <input type="radio" class="form-check-input" id="customer" name="user_type" value="customer" checked>مشتری
                    </div>
                    <div class="mt-4">
                        <label class="form-check-label" for="provider"></label>
                        <input type="radio" class="form-check-input" id="provider" name="user_type" value="provider" checked>خدمت رسان
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <input value="ثبت نام" type="submit" class="btn btn-success mt-4 w-100" />
                    </div>
                </form>

                <x-slot name="extra">
                    <p class="text-center text-gray-600 mt-4">
                        اکانت داری واردشو? <a href="{{ route('login') }}" class="underline hover:text-gray-900">ورود</a>.
                    </p>
                </x-slot>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
