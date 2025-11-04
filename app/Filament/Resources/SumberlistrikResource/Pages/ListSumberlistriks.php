<?php

namespace App\Filament\Resources\SumberlistrikResource\Pages;

use App\Filament\Resources\SumberlistrikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberlistriks extends ListRecords
{
    protected static string $resource = SumberlistrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
