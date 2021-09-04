<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'ref_pais';
    protected $primaryKey= 'cod_pais';
    protected $fillable = ['ide_pais','nom_pais','nac_pais','est_pais'];

    public $timestamps = false;
}
