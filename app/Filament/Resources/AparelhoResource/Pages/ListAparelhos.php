<?php

namespace App\Filament\Resources\AparelhoResource\Pages;

use App\Filament\Resources\AparelhoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAparelhos extends ListRecords
{
    protected static string $resource = AparelhoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
