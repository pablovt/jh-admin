<?php

namespace App\Filament\Resources\JoelhoPosteriorResource\Pages;

use App\Filament\Resources\JoelhoPosteriorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJoelhoPosterior extends EditRecord
{
    protected static string $resource = JoelhoPosteriorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
