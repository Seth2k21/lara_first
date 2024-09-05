<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Annexe;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable =['raison_sociale','ifu'];
    public function annexe()
    {
        return $this->hasMany(Annexe::class);
    }
}
