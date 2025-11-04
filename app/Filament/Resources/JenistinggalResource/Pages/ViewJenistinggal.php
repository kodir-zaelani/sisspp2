<?php

namespace App\Filament\Resources\JenistinggalResource\Pages;

use App\Filament\Resources\JenistinggalResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenistinggal extends ViewRecord
{
    protected static string $resource = JenistinggalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
