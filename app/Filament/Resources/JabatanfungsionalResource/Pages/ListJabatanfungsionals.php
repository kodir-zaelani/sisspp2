<?php

namespace App\Filament\Resources\JabatanfungsionalResource\Pages;

use App\Filament\Resources\JabatanfungsionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJabatanfungsionals extends ListRecords
{
    protected static string $resource = JabatanfungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
