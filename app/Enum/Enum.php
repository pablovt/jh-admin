<?php
use Filament\Support\Contracts\HasLabel;
 
enum Status: string implements HasLabel
{
    case ativo = '1';
    case inativo = '0';
    
    public function getLabel(): ?string
    {
        return match ($this) {
            self::ativo => 'Ativo',
            self::inativo => 'Zero',
        };
    }
}