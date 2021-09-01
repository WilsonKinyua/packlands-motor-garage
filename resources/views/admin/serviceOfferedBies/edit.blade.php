@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.serviceOfferedBy.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.service-offered-bies.update", [$serviceOfferedBy->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="expert_id">{{ trans('cruds.serviceOfferedBy.fields.expert') }}</label>
                <select class="form-control select2 {{ $errors->has('expert') ? 'is-invalid' : '' }}" name="expert_id" id="expert_id" required>
                    @foreach($experts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('expert_id') ? old('expert_id') : $serviceOfferedBy->expert->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('expert'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expert') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.serviceOfferedBy.fields.expert_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="services">{{ trans('cruds.serviceOfferedBy.fields.service') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('services') ? 'is-invalid' : '' }}" name="services[]" id="services" multiple required>
                    @foreach($services as $id => $service)
                        <option value="{{ $id }}" {{ (in_array($id, old('services', [])) || $serviceOfferedBy->services->contains($id)) ? 'selected' : '' }}>{{ $service }}</option>
                    @endforeach
                </select>
                @if($errors->has('services'))
                    <div class="invalid-feedback">
                        {{ $errors->first('services') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.serviceOfferedBy.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection