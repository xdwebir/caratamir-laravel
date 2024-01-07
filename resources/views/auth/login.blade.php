@extends('frontend.layouts.app')

@section('title')
    ورود
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 p-4">
                <x-slot name="title">
                    ورود
                </x-slot>

                <h3>ورود</h3>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <form method="POST" action="{{ route('login.store') }}">
                    @csrf

                    <!-- First Name -->
                    <div class="mt-4">
                        <label for="mobile" class="form-label">موبایل</label>
                        <x-input id="mobile" class="form-control" type="text" name="mobile"
                            required autofocus />
                    </div>
                    <div class="mt-4">
                        <label for="password" class="form-label">رمز عبور</label>
                        <x-input id="password" class="form-control" type="password" name="password"
                            required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <input value="ورود" type="submit" class="btn btn-success mt-4 w-100" />
                    </div>
                </form>
                <div class="mt-4">
                    <a class="text-decoration-none" href="{{ route('password.request') }}">
                        رمز عبور را فراموش کردم
                    </a>

                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
