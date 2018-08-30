<?php

namespace App\Http\Controllers\MainControllers;

use App\Album;
use App\Helpers\RadioUtil;
use App\Multimedia;
use App\Photo;
use App\PhotoAlbum;
use App\Section;
use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $photos = Photo::all()->toArray();
        $main_banner = Section::get_banner();
        $album = Album::all();
        $current_show = RadioUtil::get_current_show();
        $multimedia_photos = array();

        foreach ($album as $al) {
            $identifier = 'album_' . $al->id;
            $photos = PhotoAlbum::where('identificador', '=', $identifier)->get();

            if($photos){
                $multimedia_photos[$al->id] = $photos->toArray();

            }
        }
//        print_r($album);die();

        $view = $request->ajax() ? 'main_views_content_fixed.photos.index' : 'main_views_fixed.photos.index';

        return view($view)->with(array('photos' => $multimedia_photos,
            'main_banner' => $main_banner, 'albums' => $album, 'current_show' => $current_show));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
