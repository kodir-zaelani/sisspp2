<?php

namespace App\Filament\Resources\GelarakademikResource\Pages;

use App\Filament\Resources\GelarakademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGelarakademiks extends ListRecords
{
    protected static string $resource = GelarakademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
