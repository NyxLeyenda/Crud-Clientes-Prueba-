<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='clientes';
    protected $primaryKey='ID';
    protected $fillable=['nombre','telefono','correo'];
    protected $guarded=[];
    public $timestamps=false;
}
