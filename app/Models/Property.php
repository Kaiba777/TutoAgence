<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold'
    ];

    // Permet a un bien d'avoir plusieurs options
    public function options (): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    // Permet de generé le slug des biens a partir de leurs titres
    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
}
