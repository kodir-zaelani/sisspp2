<?php

namespace App\Filament\Resources\SertifikasiisoResource\Pages;

use App\Filament\Resources\SertifikasiisoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSertifikasiisos extends ListRecords
{
    protected static string $resource = SertifikasiisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
