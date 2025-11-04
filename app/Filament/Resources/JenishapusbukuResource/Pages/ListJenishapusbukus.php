<?php

namespace App\Filament\Resources\JenishapusbukuResource\Pages;

use App\Filament\Resources\JenishapusbukuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenishapusbukus extends ListRecords
{
    protected static string $resource = JenishapusbukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
