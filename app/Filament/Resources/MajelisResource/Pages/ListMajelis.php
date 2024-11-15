<?php

namespace App\Filament\Resources\MajelisResource\Pages;

use App\Filament\Resources\MajelisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMajelis extends ListRecords
{
    protected static string $resource = MajelisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
