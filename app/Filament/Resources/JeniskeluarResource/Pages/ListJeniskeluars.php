<?php

namespace App\Filament\Resources\JeniskeluarResource\Pages;

use App\Filament\Resources\JeniskeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJeniskeluars extends ListRecords
{
    protected static string $resource = JeniskeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
