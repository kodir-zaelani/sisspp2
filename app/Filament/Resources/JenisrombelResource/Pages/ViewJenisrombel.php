<?php

namespace App\Filament\Resources\JenisrombelResource\Pages;

use App\Filament\Resources\JenisrombelResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisrombel extends ViewRecord
{
    protected static string $resource = JenisrombelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
