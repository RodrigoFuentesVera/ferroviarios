<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $primary_key = 'id';
    protected $table = 'perfil';
    public $timestamp = false;
}
