<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aparelho extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function servico(): BelongsToMany
    {
        return $this->belongsToMany(Servico::class);
    }

    public function servicos(): BelongsToMany
    {
        return $this->belongsToMany(Servico::class);   
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
