<?php

namespace App\Filament\Resources\JenistinggalResource\Pages;

use App\Filament\Resources\JenistinggalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenistinggals extends ListRecords
{
    protected static string $resource = JenistinggalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
