<?php

namespace App\Models\Finanzas;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $table = 'cuota';
    protected $primary_key = 'id_cuota';
    public $timestamps = false;
}
