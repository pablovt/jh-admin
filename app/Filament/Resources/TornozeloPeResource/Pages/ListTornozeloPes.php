<?php

namespace App\Filament\Resources\TornozeloPeResource\Pages;

use App\Filament\Resources\TornozeloPeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTornozeloPes extends ListRecords
{
    protected static string $resource = TornozeloPeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
