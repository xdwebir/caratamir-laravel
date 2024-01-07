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
                <form method="POST" action="{{ route('backend.factors.update', ['factor'=>$$module_name_singular->id]) }}">
                    @csrf
                    @method('PUT')
                    <label for="amount" class="form-label">مبلغ</label>
                    <input name="amount" id="amount" type="text" class="form-control" value="{{$$module_name_singular->amount}}"/>
                    <input type="submit" value="ذخیره" class="form-control mt-4 btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
</div>@endsection
