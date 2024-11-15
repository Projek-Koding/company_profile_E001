<?php

namespace App\Filament\Resources\MajelisResource\Pages;

use App\Filament\Resources\MajelisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMajelis extends EditRecord
{
    protected static string $resource = MajelisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
