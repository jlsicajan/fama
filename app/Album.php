<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album_mutimedia';

    public function newQuery()
    {
        return parent::newQuery()->where('empresa_id', '=', env("RADIO_ID"));
    }

}
