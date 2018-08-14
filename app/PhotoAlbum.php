<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model {


    protected $table = 'multimedia_ruta';

    public function newQuery()
    {
        return parent::newQuery()->where('tipo', '=', 'album');
    }

}
