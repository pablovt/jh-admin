<?php

namespace App\Filament\Resources\OmbroResource\Pages;

use App\Filament\Resources\OmbroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOmbro extends EditRecord
{
    protected static string $resource = OmbroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
