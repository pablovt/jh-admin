<?php

namespace App\Filament\Resources\ColunaToracicaResource\Pages;

use App\Filament\Resources\ColunaToracicaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColunaToracicas extends ListRecords
{
    protected static string $resource = ColunaToracicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
