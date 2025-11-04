<?php

namespace App\Filament\Resources\SumberdanaResource\Pages;

use App\Filament\Resources\SumberdanaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberdanas extends ListRecords
{
    protected static string $resource = SumberdanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
