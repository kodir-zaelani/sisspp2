<?php

namespace App\Filament\Resources\StatuskepemilikanResource\Pages;

use App\Filament\Resources\StatuskepemilikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatuskepemilikans extends ListRecords
{
    protected static string $resource = StatuskepemilikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
