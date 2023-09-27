<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AparelhoEvolucao extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function servico(): BelongsToMany
    {
        return $this->belongsToMany(Servico::class);   
    }

    public function aparelho(): BelongsToMany
    {
        return $this->belongsToMany(Aparelho::class);
    }

    public function servicos(): BelongsToMany
    {
        return $this->belongsToMany(Servico::class);   
    }

    public function aparelhos(): BelongsToMany
    {
        return $this->belongsToMany(Aparelho::class);
    }
}
