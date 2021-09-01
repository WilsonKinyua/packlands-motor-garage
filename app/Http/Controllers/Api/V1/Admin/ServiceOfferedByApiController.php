<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceOfferedByRequest;
use App\Http\Requests\UpdateServiceOfferedByRequest;
use App\Http\Resources\Admin\ServiceOfferedByResource;
use App\Models\ServiceOfferedBy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceOfferedByApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_offered_by_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceOfferedByResource(ServiceOfferedBy::with(['expert', 'services'])->get());
    }

    public function store(StoreServiceOfferedByRequest $request)
    {
        $serviceOfferedBy = ServiceOfferedBy::create($request->all());
        $serviceOfferedBy->services()->sync($request->input('services', []));

        return (new ServiceOfferedByResource($serviceOfferedBy))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ServiceOfferedBy $serviceOfferedBy)
    {
        abort_if(Gate::denies('service_offered_by_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceOfferedByResource($serviceOfferedBy->load(['expert', 'services']));
    }

    public function update(UpdateServiceOfferedByRequest $request, ServiceOfferedBy $serviceOfferedBy)
    {
        $serviceOfferedBy->update($request->all());
        $serviceOfferedBy->services()->sync($request->input('services', []));

        return (new ServiceOfferedByResource($serviceOfferedBy))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ServiceOfferedBy $serviceOfferedBy)
    {
        abort_if(Gate::denies('service_offered_by_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceOfferedBy->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
