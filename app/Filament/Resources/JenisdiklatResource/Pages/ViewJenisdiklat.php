<?php

namespace App\Filament\Resources\JenisdiklatResource\Pages;

use App\Filament\Resources\JenisdiklatResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisdiklat extends ViewRecord
{
    protected static string $resource = JenisdiklatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
