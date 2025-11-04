<?php

namespace App\Filament\Resources\JabatantugasptkResource\Pages;

use App\Filament\Resources\JabatantugasptkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJabatantugasptks extends ListRecords
{
    protected static string $resource = JabatantugasptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
