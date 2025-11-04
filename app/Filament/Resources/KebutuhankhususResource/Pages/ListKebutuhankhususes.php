<?php

namespace App\Filament\Resources\KebutuhankhususResource\Pages;

use App\Filament\Resources\KebutuhankhususResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKebutuhankhususes extends ListRecords
{
    protected static string $resource = KebutuhankhususResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
