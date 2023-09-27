<?php

namespace App\Filament\Resources\TornozeloPeResource\Pages;

use App\Filament\Resources\TornozeloPeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTornozeloPe extends EditRecord
{
    protected static string $resource = TornozeloPeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
