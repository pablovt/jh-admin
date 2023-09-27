<?php

namespace App\Filament\Resources\VistaLateralResource\Pages;

use App\Filament\Resources\VistaLateralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVistaLateral extends EditRecord
{
    protected static string $resource = VistaLateralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
