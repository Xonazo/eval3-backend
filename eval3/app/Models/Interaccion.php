<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    protected $table = "interacciones";
    protected $fillable = ["Perro_interesado_id", "Perro_candidato_id", "preferencia"];
    public $timestamps = true;


    public function perroInteresado()
    {
        return $this->belongsTo(Perro::class, 'Perro_interesado_id');
    }

    public function perroCandidato()
    {
        return $this->belongsTo(Perro::class, 'Perro_candidato_id');
    }

}
