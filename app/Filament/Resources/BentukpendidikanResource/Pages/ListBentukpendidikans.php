<?php

namespace App\Filament\Resources\BentukpendidikanResource\Pages;

use App\Filament\Resources\BentukpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBentukpendidikans extends ListRecords
{
    protected static string $resource = BentukpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
