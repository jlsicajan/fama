<?php namespace App\Http\Controllers;

use App\Article;
use App\Billboard;
use App\Helpers\RadioUtil;
use App\Http\Requests\Request;
use App\Section;
use App\Slide;
use App\SocialNetwork;
use App\News;
use App\Category;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    // 	$this->middleware('auth');
    public function index(\Illuminate\Http\Request $request)
    {
        //$next_shows = $this->get_next_shows();
        $next_shows = RadioUtil::get_next_shows();
        //$current_show = $this->get_current_show();
        $current_show = RadioUtil::get_current_show();
        $main_banner = Section::get_banner();
        $movies = Billboard::with('location')->get()->toArray();
        //$todays_shows = $this->get_shows_for_today();
        $todays_shows = RadioUtil::get_shows_for_today();
        //$week_programation = $this->get_week_programation();
        $week_programation = RadioUtil::get_week_programation();
        $news = News::where('activo', '=', 1)->orderBy('fecha', 'asc')->limit(5)->get()->toArray();

        $view = $request->ajax() ? 'main_views_content.home' : 'home_template';


        return view($view)->with(array('main_banner' => $main_banner, 'next_shows' => $next_shows, 'current_show' => $current_show,
            'news' => $news, 'main_banner' => $main_banner, 'week_programation' => $week_programation, 'news' => $news, 'movies' => $movies, 'todays_shows' => $todays_shows));
    }

    public function article_one($article_id, \Illuminate\Http\Request $request)
    {
        $article = Article::findOrFail($article_id);
        if (empty($article)) {
            print_r('Article not found');
            die();
        } else {
            $article->visitas = $article->visitas + 1;
            $article->save();
            $main_banner = Section::get_banner();
            $articles_related = Article::where('categoria_id', '=', $article->categoria_id)->where('id', '!=', $article->id)
                ->select('id', 'titulo', 'imagen', 'autor', 'fecha', 'texto_uno')->orderBy('fecha', 'DESC')->limit(3)->get()->toArray();

            $current_show = $this->get_current_show();
            $view = $request->ajax() ? 'main_views_content.article.view' : 'main_views.article.view';

            return view($view)->with(array('article' => $article,
                'main_banner' => $main_banner, 'articles_related' => $articles_related, 'current_show' => $current_show));
        }
    }

    public function new_one($new_id, \Illuminate\Http\Request $request)
    {
        //fix
        $article = News::findOrFail($new_id);
        if (empty($article)) {
            print_r('New not found');
            die();
        } else {
            $article->visita = $article->visita + 1;
            $article->save();

            $main_banner = Section::get_banner();
            $recent_news = News::where('id', '!=', $article->id)->orderBy('fecha', 'ASC')->limit(4)->get();

            $current_show = RadioUtil::get_current_show();
            $view = $request->ajax() ? 'main_views_content.article.view' : 'main_views.article.view';

            return view($view)->with(array('new' => $article,
                'main_banner' => $main_banner, 'recent_news' => $recent_news, 'current_show' => $current_show));
        }
    }

    function get_next_shows()
    {
        //Abraham's code adapted to laravel ORM, this have to be adapted correctly
        $diaActual = date("N");
        $horaActual = date("G");
        $horaActual *= 100;
        $longitudHA = strlen($horaActual);
        $concatHA = $diaActual * $longitudHA * $horaActual;
        $arregloProgramas = [];
        $limite = 6;

        $empresa_id = env('RADIO_ID');
        $proximosProgramasP1 = "SELECT PON.id AS Id FROM programacion PON INNER JOIN dia D ON PON.dia_id = D.id WHERE D.id_php = " . $diaActual . " AND PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " AND (D.id_php * length(trim(PON.inicio_formato)) * PON.inicio_formato) > " . $concatHA . " ORDER BY concat(D.id_php, length(trim(PON.inicio_formato)), PON.inicio_formato) ASC LIMIT " . $limite;
        $proximosProgramasP1 = DB::select($proximosProgramasP1);

        $resultadoPPp1 = $proximosProgramasP1;

        foreach ($resultadoPPp1 AS $datosPPp1) {
            array_push($arregloProgramas, $datosPPp1->Id);
        }

        $contadorPPp1 = count($resultadoPPp1);
        $limite -= $contadorPPp1;
        $ordenMostrar = "D.id_php ASC,";
        if ($limite) {
            if ($diaActual === 7) {
                $diaActual = 1;
                $ordenMostrar = "D.id_php DESC,";
            } else {
                $diaActual++;
                $ordenMostrar = "D.id_php ASC,";
            }

            $proximosProgramasP2 = "SELECT PON.id AS Id FROM programacion PON INNER JOIN dia D ON PON.dia_id = D.id WHERE D.id_php = " . $diaActual . " AND PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " ORDER BY concat(D.id_php, length(trim(PON.inicio_formato)), PON.inicio_formato) ASC LIMIT " . $limite;

            $resultadoPPp2 = DB::select($proximosProgramasP2);


            foreach ($resultadoPPp2 AS $datosPPp2) {
                array_push($arregloProgramas, $datosPPp2->Id);
            }
        }


        $programacionIdS = implode(",", $arregloProgramas);
        $programacionIdS = empty($programacionIdS) ? '' : $programacionIdS;
        $proximosProgramas = "SELECT PON.*, D.nombre AS Dia, PMA.titulo AS Titulo, PMA.imagen AS Imagen FROM programacion PON INNER JOIN dia D ON PON.dia_id = D.id INNER JOIN programa PMA ON PON.programa_id = PMA.id WHERE PON.id IN(" . $programacionIdS . ") ORDER BY " . $ordenMostrar . " concat(D.id_php, length(trim(PON.inicio_formato)), PON.inicio_formato) ASC";


        $proximosProgramas = empty($programacionIdS) ? [] : DB::select($proximosProgramas);


        return $proximosProgramas;
    }

    function get_current_show()
    {
        //Abrahams files header adapted
        $empresa_id = env('RADIO_ID');
        $diaActual = date("N");
        $horaActual = date("G");
        $horaActual *= 100;

        $programaAlAireMnr = "SELECT PON.*, PMA.titulo AS Titulo, PMA.imagen AS Imagen FROM programacion PON INNER JOIN dia D ON D.id = PON.dia_id INNER JOIN programa PMA ON PMA.id = PON.programa_id WHERE PON.inicio_formato <= " . $horaActual . " AND D.id_php = " . $diaActual . " AND PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " ORDER BY concat(D.id_php, length(trim(PON.inicio_formato)), PON.inicio_formato) DESC LIMIT 0,1";
        $resultadoPAAMnr = DB::select($programaAlAireMnr);

        $programaAlAireMyr = "SELECT PON.*, PMA.titulo AS Titulo, PMA.imagen AS Imagen FROM programacion PON INNER JOIN dia D ON D.id = PON.dia_id INNER JOIN programa PMA ON PMA.id = PON.programa_id WHERE PON.inicio_formato >= " . $horaActual . " AND D.id_php = " . $diaActual . " AND PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " ORDER BY concat(D.id_php, length(trim(PON.inicio_formato)), PON.inicio_formato) ASC LIMIT 0,1";
        $resultadoPAAMyr = DB::select($programaAlAireMyr);

//        print_r($resultadoPAAMyr);die();
//        print_r($resultadoPAAMyr);die();

        if (empty($resultadoPAAMyr) && empty($resultadoPAAMnr)) {
            $mensajePAAF = "Próximo programa";
            $tituloPAAF = "No hay programa";
            $imagenPAAF = "";
            $inicioPAAF = "00:00";
            $finPAAF = "00:00";
            return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
        } else {
            if (isset($resultadoPAAMnr[0]) && !empty($resultadoPAAMnr[0])) {
                $resultadoPAAMnr = $resultadoPAAMnr[0];
                $inicioMnr = $this->convertirHoraMilitar($resultadoPAAMnr->inicio);
                $finMnr = $this->convertirHoraMilitar($resultadoPAAMnr->fin);
            }

            if (isset($resultadoPAAMyr[0]) && !empty($resultadoPAAMyr[0])) {
                $resultadoPAAMyr = $resultadoPAAMyr[0];
                $inicioMyr = $this->convertirHoraMilitar($resultadoPAAMyr->inicio);
                $finMyr = $this->convertirHoraMilitar($resultadoPAAMyr->fin);
            }


            if ($resultadoPAAMnr && !$resultadoPAAMyr) {
                $mensajePAAF = "Al aire ahora";
                $tituloPAAF = $resultadoPAAMnr->Titulo;
                $imagenPAAF = $resultadoPAAMnr->Imagen;
                $inicioPAAF = $resultadoPAAMnr->inicio;
                $finPAAF = $resultadoPAAMnr->fin;
                return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
            } else if (!$resultadoPAAMnr && $resultadoPAAMyr) {
                $mensajePAAF = "Próximo programa";
                $tituloPAAF = $resultadoPAAMyr->Titulo;
                $imagenPAAF = $resultadoPAAMyr->Imagen;
                $inicioPAAF = $resultadoPAAMyr->inicio;
                $finPAAF = $resultadoPAAMyr->fin;
                return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
            } else if (!$resultadoPAAMnr && !$resultadoPAAMyr) {
                $mensajePAAF = "Próximo programa";
                $tituloPAAF = "No hay programa";
                $imagenPAAF = "";
                $inicioPAAF = "00:00";
                $finPAAF = "00:00";
                return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
            } else {
                // SI SON IGUALES
                if (($inicioMnr == $inicioMyr) && ($finMnr == $finMyr)) {
                    $mensajePAAF = "Próximo programa";
                    $tituloPAAF = $resultadoPAAMnr->Titulo;
                    $imagenPAAF = $resultadoPAAMnr->Imagen;
                    $inicioPAAF = $resultadoPAAMnr->inicio;
                    $finPAAF = $resultadoPAAMnr->fin;
                    return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
                }

                if ($finMnr > $horaActual) {
                    $mensajePAAF = "Al aire ahora";
                    $tituloPAAF = $resultadoPAAMnr->Titulo;
                    $imagenPAAF = $resultadoPAAMnr->Imagen;
                    $inicioPAAF = $resultadoPAAMnr->inicio;
                    $finPAAF = $resultadoPAAMnr->fin;
                    return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
                } else {
                    $mensajePAAF = "Próximo programa";
                    $tituloPAAF = $resultadoPAAMyr->Titulo;
                    $imagenPAAF = $resultadoPAAMyr->Imagen;
                    $inicioPAAF = $resultadoPAAMyr->inicio;
                    $finPAAF = $resultadoPAAMyr->fin;
                    return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
                }
            }
        }

        return array('PAFF_message' => $mensajePAAF, 'PAFF_titulo' => $tituloPAAF, 'PAFF_image' => $imagenPAAF, 'PAFF_start' => $inicioPAAF, 'PAFF_end' => $finPAAF);
    }

    function get_week_programation()
    {
        $empresa_id = env('RADIO_ID');
        $diasDeProgramacionS = "SELECT * FROM dia ORDER BY orden ASC";
        $resultadoDDPs = DB::select($diasDeProgramacionS);
        $result = [];
        foreach ($resultadoDDPs AS $datosDDPs) {
            $programacionPorDia = "SELECT PON.*, PMA.titulo AS Titulo, PMA.imagen AS Imagen, PMA.contenido AS Contenido FROM programacion PON INNER JOIN programa PMA ON PON.programa_id = PMA.id WHERE PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " AND PON.dia_id = " . $datosDDPs->id . " ORDER BY concat(length(trim(PON.inicio_formato)), PON.inicio_formato) ASC";
            $resultadoPPD = DB::select($programacionPorDia);

            if ($datosDDPs->id_php == date('N')) {
                array_push($result, ['active', $datosDDPs->nombre, $datosDDPs->id_php, $resultadoPPD]);
            } else {
                array_push($result, ['inactive', $datosDDPs->nombre, $datosDDPs->id_php, $resultadoPPD]);
            }
        }

        return $result;

    }

    function get_shows_for_today()
    {
        $empresa_id = env('RADIO_ID');
        $day_info = DB::table('dia')->where('id_php', '=', date('N'))->first();

        $query_for_get_todays_shows = "SELECT PON.*, PMA.titulo AS Titulo, PMA.imagen AS Imagen, PMA.contenido AS Contenido FROM programacion PON INNER JOIN programa PMA ON PON.programa_id = PMA.id WHERE PON.activo = 1 AND PON.empresa_id = " . $empresa_id . " AND PON.dia_id = " . $day_info->id . " ORDER BY concat(length(trim(PON.inicio_formato)), PON.inicio_formato) ASC";
        $shows_for_today = DB::select($query_for_get_todays_shows);
        return $shows_for_today;
    }


    function convertirHoraMilitar($hora)
    {
        if (strpos($hora, "AM") !== false) {
            if (strpos($hora, "12") !== false) {
                $hora = 0;
            } else {
                $hora = trim(str_replace("PM", "", (str_replace("AM", "", (str_replace(":", "", trim($hora)))))));
            }
        } else {
            if (strpos($hora, "12") !== false) {
                $hora = 1200;
            } else {
                $hora = trim(str_replace("PM", "", (str_replace("AM", "", (str_replace(":", "", trim($hora)))))));
                $hora += 1200;
            }
        }

        return $hora;
    }
}
