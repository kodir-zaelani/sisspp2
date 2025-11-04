<?php

namespace App\Filament\Resources\LembagaakreditasiResource\Pages;

use App\Filament\Resources\LembagaakreditasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLembagaakreditasis extends ListRecords
{
    protected static string $resource = LembagaakreditasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
