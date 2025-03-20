<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicament extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'quantite', 'fournisseur_id'];

    public function ventesDetails(): HasMany
    {
        return $this->hasMany(VenteDetail::class);
    }

    public function commandesDetails(): HasMany
    {
        return $this->hasMany(CommandeDetail::class);
    }
}
