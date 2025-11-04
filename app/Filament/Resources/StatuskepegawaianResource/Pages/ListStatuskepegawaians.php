<?php

namespace App\Filament\Resources\StatuskepegawaianResource\Pages;

use App\Filament\Resources\StatuskepegawaianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatuskepegawaians extends ListRecords
{
    protected static string $resource = StatuskepegawaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
