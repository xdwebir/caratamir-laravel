@extends('frontend.layouts.app')

@section('title')
    ویرایش {{ $$module_name_singular->name }} پروفایل
@endsection

@section('content')
    <div class="container mx-auto flex justify-center">

        @include('frontend.includes.messages')

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">ویرایش پروفایل</h3>
                    <p class="">
                        اطلاعات روبرو را با دقت تکمیل کنید
                    </p>

                    <div class="pt-4 text-center">
                        <a class="btn btn-primary"
                            href='{{ route('frontend.users.profile', encode_id($$module_name_singular->id)) }}'>
                            <div class="">
                                داشبرد
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 py-4">
                {{ html()->modelForm($userprofile, 'PATCH', route('frontend.users.profileUpdate', encode_id($$module_name_singular->id)))->acceptsFiles()->open() }}
                <div class="p-4 shadow-lg">
                    <div class="row">

                        <div class="col-sm-6">
                            <?php
                            $field_name = 'first_name';
                            $field_lable = 'نام';
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>

                        <div class="col-sm-6">
                            <?php
                            $field_name = 'last_name';
                            $field_lable = 'نام خانوادگی';
                            $field_placeholder = $field_lable;
                            $required = 'required';
                            ?>
                            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 py-4">
                <div class="p-4 shadow-lg">
                    <h3 class="">اطلاعات شخصی</h3>
                    <p class="">
                        شماره تماس و ایمیل شما مخفی خواهد ماند.
                    </p>
                </div>
            </div>
            <div class="col-sm-9 py-4">
                <div class="p-4 shadow-lg">
                    <div class="row">

                        <div class="col-sm-6">

                            <label for="mobile" class="form-label">موبایل</label>
                            <input value="{{$$module_name_singular->mobile}}" type="tel" name="mobile" id="mobile" class="form-control" disabled />
                        </div>

                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success mt-4 w-100">
                            ذخیره
                        </button>
                    </div>
                </div>
                {{ html()->closeModelForm() }}
            </div>
        </div>

    </div>
@endsection
