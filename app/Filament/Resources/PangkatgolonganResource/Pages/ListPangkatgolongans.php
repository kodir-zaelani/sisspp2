<?php

namespace App\Filament\Resources\PangkatgolonganResource\Pages;

use App\Filament\Resources\PangkatgolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPangkatgolongans extends ListRecords
{
    protected static string $resource = PangkatgolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
