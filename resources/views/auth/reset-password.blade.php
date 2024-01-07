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


                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="mt-4">
                        <label for="code" class="form-label">کد</label>

                        <x-input id="code" class="form-control" type="phone" name="code" required />
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

                    <div class="flex items-center justify-end mt-4">
                        <input value="تغییر رمز" type="submit" class="btn btn-success mt-4 w-100" />
                    </div>
                </form>


            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
