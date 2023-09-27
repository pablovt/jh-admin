<?php

namespace App\Filament\Resources\OmbroPosteriorResource\Pages;

use App\Filament\Resources\OmbroPosteriorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOmbroPosterior extends EditRecord
{
    protected static string $resource = OmbroPosteriorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
