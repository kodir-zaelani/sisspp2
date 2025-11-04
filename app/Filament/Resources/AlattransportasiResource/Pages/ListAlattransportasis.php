<?php

namespace App\Filament\Resources\AlattransportasiResource\Pages;

use App\Filament\Resources\AlattransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlattransportasis extends ListRecords
{
    protected static string $resource = AlattransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
