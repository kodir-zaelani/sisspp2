<?php

namespace App\Filament\Resources\TingkatprestasiResource\Pages;

use App\Filament\Resources\TingkatprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkatprestasis extends ListRecords
{
    protected static string $resource = TingkatprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
