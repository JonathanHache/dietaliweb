<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id_persona
 * @property $nombre
 * @property $apellido_p
 * @property $apellido_m
 * @property $sexo
 * @property $curp
 * @property $correo
 * @property $contrasena
 *
 * @property Especialista[] $especialistas
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    public $timestamps = false;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';

    protected $fillable = ['nombre', 'apellido_p', 'apellido_m', 'sexo', 'curp', 'correo', 'contrasena'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function especialistas()
    {
        return $this->hasMany(\App\Models\Especialista::class, 'id_persona', 'id_persona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'id_persona', 'id_persona');
    }

}
