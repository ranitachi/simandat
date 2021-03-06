<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KegiatanFisik extends Model
{
    use SoftDeletes;
    protected $table='kegiatan_fisik';
    protected $fillable = ['id_iku','tanggal','kegiatan','jumlah','keterangan','status','created_at','updated_at','deleted_at'];
     function iku()
    {
        return $this->belongsTo('App\Models\IKU','id_iku');
    }
}
