<?php

namespace App\Filament\Resources\JenisdiklatResource\Pages;

use App\Filament\Resources\JenisdiklatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisdiklats extends ListRecords
{
    protected static string $resource = JenisdiklatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
