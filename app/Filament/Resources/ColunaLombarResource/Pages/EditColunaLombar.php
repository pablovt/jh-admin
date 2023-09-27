<?php

namespace App\Filament\Resources\ColunaLombarResource\Pages;

use App\Filament\Resources\ColunaLombarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColunaLombar extends EditRecord
{
    protected static string $resource = ColunaLombarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
