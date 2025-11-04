<?php

namespace App\Filament\Resources\JenisbukualatResource\Pages;

use App\Filament\Resources\JenisbukualatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisbukualats extends ListRecords
{
    protected static string $resource = JenisbukualatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
