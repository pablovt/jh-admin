<?php

namespace App\Filament\Resources\PelveResource\Pages;

use App\Filament\Resources\PelveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelve extends EditRecord
{
    protected static string $resource = PelveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
