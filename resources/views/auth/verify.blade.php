@extends('frontend.layouts.app')

@section('title')
    ثبت کد تایید
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 p-4">
                <x-slot name="title">
                    ثبت کد تایید
                </x-slot>

                <h3>ثبت کد تایید</h3>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <form method="POST" action="{{ route('verify') }}">
                    @csrf

                    <!-- First Name -->
                    <div class="mt-4">
                        <label for="code" class="form-label">کد</label>

                        <x-input id="code" class="form-control" type="text" name="code" :value="old('code')"
                            required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <input value="ثبت کد تایید" type="submit" class="btn btn-success mt-4 w-100" />
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
