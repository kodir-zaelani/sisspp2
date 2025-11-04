<?php

namespace App\Filament\Resources\CitacitaResource\Pages;

use App\Filament\Resources\CitacitaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCitacitas extends ListRecords
{
    protected static string $resource = CitacitaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
