<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'multimedia_pod';

    public function newQuery()
    {
        return parent::newQuery()->where('empresa_id', '=', env("RADIO_ID"))->where('activo', 1);
    }


}
