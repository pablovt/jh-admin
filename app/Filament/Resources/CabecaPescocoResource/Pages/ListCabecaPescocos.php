<?php

namespace App\Filament\Resources\CabecaPescocoResource\Pages;

use App\Filament\Resources\CabecaPescocoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCabecaPescocos extends ListRecords
{
    protected static string $resource = CabecaPescocoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
