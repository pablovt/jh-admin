<?php

namespace App\Filament\Resources\ColunaToracicaResource\Pages;

use App\Filament\Resources\ColunaToracicaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColunaToracica extends EditRecord
{
    protected static string $resource = ColunaToracicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
