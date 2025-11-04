<?php

namespace App\Filament\Resources\AksesinternetResource\Pages;

use App\Filament\Resources\AksesinternetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAksesinternets extends ListRecords
{
    protected static string $resource = AksesinternetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
