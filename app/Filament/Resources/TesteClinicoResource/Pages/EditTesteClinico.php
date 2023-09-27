<?php

namespace App\Filament\Resources\TesteClinicoResource\Pages;

use App\Filament\Resources\TesteClinicoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTesteClinico extends EditRecord
{
    protected static string $resource = TesteClinicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
