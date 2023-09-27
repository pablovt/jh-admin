<?php

namespace App\Filament\Resources\TroncoResource\Pages;

use App\Filament\Resources\TroncoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTronco extends EditRecord
{
    protected static string $resource = TroncoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
