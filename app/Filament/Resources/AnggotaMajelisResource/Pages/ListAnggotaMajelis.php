<?php

namespace App\Filament\Resources\AnggotaMajelisResource\Pages;

use App\Filament\Resources\AnggotaMajelisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotaMajelis extends ListRecords
{
    protected static string $resource = AnggotaMajelisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
