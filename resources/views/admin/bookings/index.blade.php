@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Booking">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.car_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.car_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.car_year') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.car_model') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.type_of_service') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.number_of_wheels') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.extra_services') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.preffered_date_time_of_booking') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.address') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                        <tr data-entry-id="{{ $booking->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $booking->id ?? '' }}
                            </td>
                            <td>
                                {{ $booking->car_name ?? '' }}
                            </td>
                            <td>
                                {{ $booking->car_type ?? '' }}
                            </td>
                            <td>
                                {{ $booking->car_year ?? '' }}
                            </td>
                            <td>
                                {{ $booking->car_model ?? '' }}
                            </td>
                            <td>
                                {{ $booking->type_of_service->name ?? '' }}
                            </td>
                            <td>
                                {{ $booking->number_of_wheels ?? '' }}
                            </td>
                            <td>
                                {{ $booking->extra_services ?? '' }}
                            </td>
                            <td>
                                {{ $booking->preffered_date_time_of_booking ?? '' }}
                            </td>
                            <td>
                                {{ $booking->name ?? '' }}
                            </td>
                            <td>
                                {{ $booking->email ?? '' }}
                            </td>
                            <td>
                                {{ $booking->phone ?? '' }}
                            </td>
                            <td>
                                {{ $booking->address ?? '' }}
                            </td>
                            <td>
                                @can('booking_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection