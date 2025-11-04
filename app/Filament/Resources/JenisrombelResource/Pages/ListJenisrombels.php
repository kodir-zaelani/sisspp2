<?php

namespace App\Filament\Resources\JenisrombelResource\Pages;

use App\Filament\Resources\JenisrombelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisrombels extends ListRecords
{
    protected static string $resource = JenisrombelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
