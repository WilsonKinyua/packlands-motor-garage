<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyServiceOfferedByRequest;
use App\Http\Requests\StoreServiceOfferedByRequest;
use App\Http\Requests\UpdateServiceOfferedByRequest;
use App\Models\Service;
use App\Models\ServiceOfferedBy;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceOfferedByController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('service_offered_by_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceOfferedBies = ServiceOfferedBy::with(['expert', 'services'])->get();

        return view('admin.serviceOfferedBies.index', compact('serviceOfferedBies'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_offered_by_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $experts = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = Service::pluck('name', 'id');

        return view('admin.serviceOfferedBies.create', compact('experts', 'services'));
    }

    public function store(StoreServiceOfferedByRequest $request)
    {
        $serviceOfferedBy = ServiceOfferedBy::create($request->all());
        $serviceOfferedBy->services()->sync($request->input('services', []));

        return redirect()->route('admin.service-offered-bies.index');
    }

    public function edit(ServiceOfferedBy $serviceOfferedBy)
    {
        abort_if(Gate::denies('service_offered_by_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $experts = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = Service::pluck('name', 'id');

        $serviceOfferedBy->load('expert', 'services');

        return view('admin.serviceOfferedBies.edit', compact('experts', 'services', 'serviceOfferedBy'));
    }

    public function update(UpdateServiceOfferedByRequest $request, ServiceOfferedBy $serviceOfferedBy)
    {
        $serviceOfferedBy->update($request->all());
        $serviceOfferedBy->services()->sync($request->input('services', []));

        return redirect()->route('admin.service-offered-bies.index');
    }

    public function show(ServiceOfferedBy $serviceOfferedBy)
    {
        abort_if(Gate::denies('service_offered_by_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceOfferedBy->load('expert', 'services');

        return view('admin.serviceOfferedBies.show', compact('serviceOfferedBy'));
    }

    public function destroy(ServiceOfferedBy $serviceOfferedBy)
    {
        abort_if(Gate::denies('service_offered_by_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceOfferedBy->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceOfferedByRequest $request)
    {
        ServiceOfferedBy::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
