<?php

namespace App\Filament\Resources\JenisprasaranaResource\Pages;

use App\Filament\Resources\JenisprasaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisprasarana extends ViewRecord
{
    protected static string $resource = JenisprasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
