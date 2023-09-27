<?php

namespace App\Filament\Resources\EscapulaResource\Pages;

use App\Filament\Resources\EscapulaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEscapula extends EditRecord
{
    protected static string $resource = EscapulaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
