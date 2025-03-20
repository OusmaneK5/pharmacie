<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ordonnance extends Model
{
    use HasFactory;

    protected $fillable = ['vente_id'];

    public function vente(): BelongsTo
    {
        return $this->belongsTo(Vente::class);
    }

    public function ordonnanceDetails(): HasMany
    {
        return $this->hasMany(OrdonnanceDetail::class);
    }
}
