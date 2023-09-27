<?php

namespace App\Filament\Resources\JoelhoResource\Pages;

use App\Filament\Resources\JoelhoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJoelhos extends ListRecords
{
    protected static string $resource = JoelhoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
