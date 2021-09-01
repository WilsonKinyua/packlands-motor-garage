<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAboutUsPageRequest;
use App\Http\Requests\UpdateAboutUsPageRequest;
use App\Http\Resources\Admin\AboutUsPageResource;
use App\Models\AboutUsPage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutUsPageApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsPageResource(AboutUsPage::all());
    }

    public function store(StoreAboutUsPageRequest $request)
    {
        $aboutUsPage = AboutUsPage::create($request->all());

        return (new AboutUsPageResource($aboutUsPage))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AboutUsPage $aboutUsPage)
    {
        abort_if(Gate::denies('about_us_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsPageResource($aboutUsPage);
    }

    public function update(UpdateAboutUsPageRequest $request, AboutUsPage $aboutUsPage)
    {
        $aboutUsPage->update($request->all());

        return (new AboutUsPageResource($aboutUsPage))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AboutUsPage $aboutUsPage)
    {
        abort_if(Gate::denies('about_us_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsPage->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
