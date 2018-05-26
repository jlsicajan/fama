<?php namespace App\Http\Controllers\MainControllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PinkCarpetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $main_banner = Section::get_banner();
        $articles_gthoy = Article::where('autor', '=', 'Gthoy')->select('id', 'titulo', 'imagen', 'autor')->get()->toArray();

        return view('main_views.pink_carpet.index')->with(array('main_banner' => $main_banner, 'articles_gthoy' => $articles_gthoy));
	}

	public function index_ajax(Request $request)
	{
        if (! $request->ajax()) {
            return Redirect::route('pink_carpet');
        }
        $main_banner = Section::get_banner();
        $articles_gthoy = Article::where('autor', '=', 'Gthoy')->select('id', 'titulo', 'imagen', 'autor')->get()->toArray();

        return view('main_views_content.pink_carpet.index')->with(array('main_banner' => $main_banner, 'articles_gthoy' => $articles_gthoy));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
