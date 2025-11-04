<?php

namespace App\Filament\Resources\JenissaranaResource\Pages;

use App\Filament\Resources\JenissaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenissaranas extends ListRecords
{
    protected static string $resource = JenissaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
