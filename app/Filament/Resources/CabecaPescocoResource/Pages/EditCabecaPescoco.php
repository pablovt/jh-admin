<?php

namespace App\Filament\Resources\CabecaPescocoResource\Pages;

use App\Filament\Resources\CabecaPescocoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCabecaPescoco extends EditRecord
{
    protected static string $resource = CabecaPescocoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
