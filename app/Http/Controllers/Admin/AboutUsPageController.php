<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutUsPageRequest;
use App\Http\Requests\StoreAboutUsPageRequest;
use App\Http\Requests\UpdateAboutUsPageRequest;
use App\Models\AboutUsPage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutUsPageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsPages = AboutUsPage::all();

        return view('admin.aboutUsPages.index', compact('aboutUsPages'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_us_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsPages.create');
    }

    public function store(StoreAboutUsPageRequest $request)
    {
        $aboutUsPage = AboutUsPage::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutUsPage->id]);
        }

        return redirect()->route('admin.about-us-pages.index');
    }

    public function edit(AboutUsPage $aboutUsPage)
    {
        abort_if(Gate::denies('about_us_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsPages.edit', compact('aboutUsPage'));
    }

    public function update(UpdateAboutUsPageRequest $request, AboutUsPage $aboutUsPage)
    {
        $aboutUsPage->update($request->all());

        return redirect()->route('admin.about-us-pages.index');
    }

    public function show(AboutUsPage $aboutUsPage)
    {
        abort_if(Gate::denies('about_us_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsPages.show', compact('aboutUsPage'));
    }

    public function destroy(AboutUsPage $aboutUsPage)
    {
        abort_if(Gate::denies('about_us_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsPage->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutUsPageRequest $request)
    {
        AboutUsPage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('about_us_page_create') && Gate::denies('about_us_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AboutUsPage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
