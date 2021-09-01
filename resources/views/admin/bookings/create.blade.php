@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="car_name">{{ trans('cruds.booking.fields.car_name') }}</label>
                <input class="form-control {{ $errors->has('car_name') ? 'is-invalid' : '' }}" type="text" name="car_name" id="car_name" value="{{ old('car_name', '') }}" required>
                @if($errors->has('car_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.car_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="car_type">{{ trans('cruds.booking.fields.car_type') }}</label>
                <input class="form-control {{ $errors->has('car_type') ? 'is-invalid' : '' }}" type="text" name="car_type" id="car_type" value="{{ old('car_type', '') }}" required>
                @if($errors->has('car_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.car_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="car_year">{{ trans('cruds.booking.fields.car_year') }}</label>
                <input class="form-control {{ $errors->has('car_year') ? 'is-invalid' : '' }}" type="number" name="car_year" id="car_year" value="{{ old('car_year', '') }}" step="1" required>
                @if($errors->has('car_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.car_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="car_model">{{ trans('cruds.booking.fields.car_model') }}</label>
                <input class="form-control {{ $errors->has('car_model') ? 'is-invalid' : '' }}" type="text" name="car_model" id="car_model" value="{{ old('car_model', '') }}">
                @if($errors->has('car_model'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_model') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.car_model_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type_of_service_id">{{ trans('cruds.booking.fields.type_of_service') }}</label>
                <select class="form-control select2 {{ $errors->has('type_of_service') ? 'is-invalid' : '' }}" name="type_of_service_id" id="type_of_service_id" required>
                    @foreach($type_of_services as $id => $entry)
                        <option value="{{ $id }}" {{ old('type_of_service_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type_of_service'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type_of_service') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.type_of_service_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="number_of_wheels">{{ trans('cruds.booking.fields.number_of_wheels') }}</label>
                <input class="form-control {{ $errors->has('number_of_wheels') ? 'is-invalid' : '' }}" type="number" name="number_of_wheels" id="number_of_wheels" value="{{ old('number_of_wheels', '') }}" step="1" required>
                @if($errors->has('number_of_wheels'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_wheels') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.number_of_wheels_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extra_services">{{ trans('cruds.booking.fields.extra_services') }}</label>
                <textarea class="form-control {{ $errors->has('extra_services') ? 'is-invalid' : '' }}" name="extra_services" id="extra_services">{{ old('extra_services') }}</textarea>
                @if($errors->has('extra_services'))
                    <div class="invalid-feedback">
                        {{ $errors->first('extra_services') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.extra_services_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="preffered_date_time_of_booking">{{ trans('cruds.booking.fields.preffered_date_time_of_booking') }}</label>
                <input class="form-control datetime {{ $errors->has('preffered_date_time_of_booking') ? 'is-invalid' : '' }}" type="text" name="preffered_date_time_of_booking" id="preffered_date_time_of_booking" value="{{ old('preffered_date_time_of_booking') }}" required>
                @if($errors->has('preffered_date_time_of_booking'))
                    <div class="invalid-feedback">
                        {{ $errors->first('preffered_date_time_of_booking') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.preffered_date_time_of_booking_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.booking.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.booking.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.booking.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.booking.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="message">{{ trans('cruds.booking.fields.message') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message">{!! old('message') !!}</textarea>
                @if($errors->has('message'))
                    <div class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.message_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.bookings.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $booking->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection