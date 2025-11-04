<?php

namespace App\Filament\Resources\JenisptkResource\Pages;

use App\Filament\Resources\JenisptkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisptks extends ListRecords
{
    protected static string $resource = JenisptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
