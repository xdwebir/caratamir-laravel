@extends('frontend.layouts.app')

@section('title')
    تغییر کلمه عبور
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 p-4">

                <h3>تغییر کلمه عبور</h3>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <form method="POST" action="{{ route('password.sms') }}">
                    @csrf
                    <div class="mt-4">
                        <label for="mobile" class="form-label">موبایل</label>

                        <x-input id="mobile" class="form-control" type="phone" name="mobile" :value="old('mobile')"
                            required />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <input value="تغییر رمز" type="submit" class="btn btn-success mt-4 w-100" />
                    </div>
                </form>


            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
