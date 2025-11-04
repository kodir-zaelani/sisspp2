<?php

namespace App\Filament\Resources\JenisprestasiResource\Pages;

use App\Filament\Resources\JenisprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisprestasis extends ListRecords
{
    protected static string $resource = JenisprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
