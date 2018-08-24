<?php

namespace App\Http\Controllers\MainControllers;

use App\Section;
use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Billboard;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies = Billboard::with('location')->get()->toArray();

        $main_banner = Section::get_banner();
        $view = $request->ajax() ? 'main_views_content_fixed.cinema.index' : 'main_views_fixed.cinema.index';


        return view($view)->with(array('movies' => $movies,
            'main_banner' => $main_banner));
    }


    public function cine_one($cine_id, \Illuminate\Http\Request $request)
    {
        //fix
        $cine = Billboard::findOrFail($cine_id);
        if (empty($cine)) {
            print_r('New not found');
            die();
        } else {
            $view = $request->ajax() ? 'main_views_content.article.view' : 'main_views_fixed.cinema.individual';

            return view($view)->with(array('cine' => $cine));
        }
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
