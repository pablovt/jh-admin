<?php

namespace App\Filament\Resources\AtividadePreviaResource\Pages;

use App\Filament\Resources\AtividadePreviaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAtividadePrevias extends ListRecords
{
    protected static string $resource = AtividadePreviaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
