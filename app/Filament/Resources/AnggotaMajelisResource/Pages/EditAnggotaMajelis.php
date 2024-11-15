<?php

namespace App\Filament\Resources\AnggotaMajelisResource\Pages;

use App\Filament\Resources\AnggotaMajelisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggotaMajelis extends EditRecord
{
    protected static string $resource = AnggotaMajelisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
