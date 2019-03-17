<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    //
    protected $table = 'tb_kategori';
    public $timestamps = false;
    protected $primaryKey = 'kategori_id';
}