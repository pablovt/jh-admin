<?php

namespace App\Filament\Resources\VistaLateralResource\Pages;

use App\Filament\Resources\VistaLateralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVistaLaterals extends ListRecords
{
    protected static string $resource = VistaLateralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
