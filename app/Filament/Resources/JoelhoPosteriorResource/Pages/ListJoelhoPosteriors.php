<?php

namespace App\Filament\Resources\JoelhoPosteriorResource\Pages;

use App\Filament\Resources\JoelhoPosteriorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJoelhoPosteriors extends ListRecords
{
    protected static string $resource = JoelhoPosteriorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
