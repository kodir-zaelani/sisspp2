<?php

namespace App\Filament\Resources\JenisbeasiswaResource\Pages;

use App\Filament\Resources\JenisbeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisbeasiswas extends ListRecords
{
    protected static string $resource = JenisbeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
