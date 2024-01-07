@extends('frontend.layouts.app')

@section('title') @lang("Change Password: ") {{$$module_name_singular->name}} @endsection

@section('content')

<div class="container mx-auto flex justify-center">

    @include('frontend.includes.messages')

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3 py-4">
            <div class="shadow-lg p-4">
                <h3 class="">تغییر کلمه عبور</h3>
                <p class="">
                    جهت تغییر  رمز عبور فرم زیر را تکمیل کنید
                </p>

                <div class="">
                    <a class="btn btn-primary" href='{{ route("frontend.users.profile", encode_id($$module_name_singular->id)) }}'>
                        <div class="text-center">
                            داشبرد
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-9 py-4">
            {{ html()->form('PATCH', route('frontend.users.changePasswordUpdate', encode_id($$module_name_singular->id)))->class('form-horizontal')->open() }}
            <div class="shadow-lg p-4">
                <div class="row">
                    <div class="col-sm-6">
                        <?php
                        $field_name = 'password';
                        $field_lable = 'رمز عبور';
                        $field_placeholder = $field_lable;
                        $required = "required";
                        ?>
                        {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                        {{ html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                    </div>
                    <div class="col-sm-6">
                        <?php
                        $field_name = 'password_confirmation';
                        $field_lable = 'تکرار رمز عبور';
                        $field_placeholder = $field_lable;
                        $required = "required";
                        ?>
                        {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                        {{ html()->password($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success w-100 mt-4">
                            به روزرسانی رمز عبور
                        </button>
                    </div>
                </div>
            </div>
            {{ html()->closeModelForm() }}
        </div>
    </div>

</div>

@endsection
