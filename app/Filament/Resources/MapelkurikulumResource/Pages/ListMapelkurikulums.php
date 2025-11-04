<?php

namespace App\Filament\Resources\MapelkurikulumResource\Pages;

use App\Filament\Resources\MapelkurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMapelkurikulums extends ListRecords
{
    protected static string $resource = MapelkurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
