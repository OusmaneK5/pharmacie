<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'fournisseur_id', 'date_commande'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function fournisseur(): BelongsTo
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function commandesDetails(): HasMany
    {
        return $this->hasMany(CommandeDetail::class);
    }
}
