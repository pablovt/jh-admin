<?php

namespace App\Filament\Resources\TesteClinicoResource\Pages;

use App\Filament\Resources\TesteClinicoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTesteClinicos extends ListRecords
{
    protected static string $resource = TesteClinicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
