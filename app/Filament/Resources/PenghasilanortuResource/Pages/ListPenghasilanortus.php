<?php

namespace App\Filament\Resources\PenghasilanortuResource\Pages;

use App\Filament\Resources\PenghasilanortuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenghasilanortus extends ListRecords
{
    protected static string $resource = PenghasilanortuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
