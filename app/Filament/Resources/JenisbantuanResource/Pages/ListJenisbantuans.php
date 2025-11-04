<?php

namespace App\Filament\Resources\JenisbantuanResource\Pages;

use App\Filament\Resources\JenisbantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisbantuans extends ListRecords
{
    protected static string $resource = JenisbantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
