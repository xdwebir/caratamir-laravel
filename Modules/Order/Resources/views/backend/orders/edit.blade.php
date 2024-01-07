@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __($module_title) }}
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">

    <div class="card-body">


        <div class="row mt-4">
            <div class="col">
                <form method="POST" action="{{ route('backend.orders.update', ['order'=>$$module_name_singular->id]) }}">
                    @csrf
                    @method('PUT')
                    <label for="address" class="form-label">آدرس</label>
                    <input name="address" id="address" type="text" class="form-control" value="{{$$module_name_singular->address}}"/>

                    <label for="mobile" class="form-label">موبایل</label>
                    <input name="mobile" id="mobile" type="text" class="form-control" value="{{$$module_name_singular->mobile}}"/>

                    <label for="price" class="form-label">قیمت</label>
                    <input name="price" id="price" type="text" class="form-control" value="{{$$module_name_singular->price}}"/>

                    <input type="submit" value="ذخیره" class="form-control mt-4 btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
