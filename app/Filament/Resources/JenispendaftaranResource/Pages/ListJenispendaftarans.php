<?php

namespace App\Filament\Resources\JenispendaftaranResource\Pages;

use App\Filament\Resources\JenispendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenispendaftarans extends ListRecords
{
    protected static string $resource = JenispendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
