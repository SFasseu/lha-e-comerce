<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    /**
 * Get the user's orders.
 */
public function produits(): HasMany
{
    return $this->hasMany(Produit::class);
}
}
