<?php

namespace App\Filament\Resources\AparelhoResource\Pages;

use App\Filament\Resources\AparelhoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAparelho extends EditRecord
{
    protected static string $resource = AparelhoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
