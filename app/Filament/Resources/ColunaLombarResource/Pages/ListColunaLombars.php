<?php

namespace App\Filament\Resources\ColunaLombarResource\Pages;

use App\Filament\Resources\ColunaLombarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColunaLombars extends ListRecords
{
    protected static string $resource = ColunaLombarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
