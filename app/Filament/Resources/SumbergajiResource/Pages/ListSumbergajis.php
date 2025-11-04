<?php

namespace App\Filament\Resources\SumbergajiResource\Pages;

use App\Filament\Resources\SumbergajiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumbergajis extends ListRecords
{
    protected static string $resource = SumbergajiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
