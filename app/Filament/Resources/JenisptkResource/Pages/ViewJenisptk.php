<?php

namespace App\Filament\Resources\JenisptkResource\Pages;

use App\Filament\Resources\JenisptkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisptk extends ViewRecord
{
    protected static string $resource = JenisptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
