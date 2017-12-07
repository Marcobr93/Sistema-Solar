<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model {
    protected $table = 'planetas';
    protected $fillable = ['nombrePlaneta','imagen','simbolo','inclinacionOrbital','inclinacionAxial','periodoOrbitalSideral',
        'periodoOrbitalSidonico','velocidadOrbital','distanciaSol','afelio','perihelio','diametro','circunferencia',
        'superficieKm','relacionSuperficieTierra','volumen','masa','satelitesNaturales','velocidadEscape','albedo'];
}