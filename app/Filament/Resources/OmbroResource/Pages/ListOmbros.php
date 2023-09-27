<?php

namespace App\Filament\Resources\OmbroResource\Pages;

use App\Filament\Resources\OmbroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOmbros extends ListRecords
{
    protected static string $resource = OmbroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
