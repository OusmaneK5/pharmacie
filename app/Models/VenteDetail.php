<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VenteDetail extends Model
{
    use HasFactory;

    protected $fillable = ['vente_id', 'medicament_id', 'quantite'];

    public function vente(): BelongsTo
    {
        return $this->belongsTo(Vente::class);
    }

    public function medicament(): BelongsTo
    {
        return $this->belongsTo(Medicament::class);
    }
}
