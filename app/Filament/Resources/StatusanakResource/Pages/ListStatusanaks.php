<?php

namespace App\Filament\Resources\StatusanakResource\Pages;

use App\Filament\Resources\StatusanakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusanaks extends ListRecords
{
    protected static string $resource = StatusanakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
