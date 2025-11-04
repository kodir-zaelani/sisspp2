<?php

namespace App\Filament\Resources\JenislembagaResource\Pages;

use App\Filament\Resources\JenislembagaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenislembagas extends ListRecords
{
    protected static string $resource = JenislembagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
