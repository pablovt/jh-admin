<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function aparelho(): HasMany
    {
        //dd($this->belongsToMany(Aparelho::class)->toString());
        return $this->hasMany(Aparelho::class);
    }

    public function aparelhos(): BelongsToMany
    {
        return $this->belongsToMany(Aparelho::class);
    }
}
