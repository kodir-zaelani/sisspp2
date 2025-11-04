<?php

namespace App\Filament\Resources\StatuskepemilikansarprasResource\Pages;

use App\Filament\Resources\StatuskepemilikansarprasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatuskepemilikansarpras extends ListRecords
{
    protected static string $resource = StatuskepemilikansarprasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
