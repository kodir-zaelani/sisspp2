<?php

namespace App\Filament\Resources\JenjangpendidikanResource\Pages;

use App\Filament\Resources\JenjangpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenjangpendidikans extends ListRecords
{
    protected static string $resource = JenjangpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
