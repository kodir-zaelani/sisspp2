<?php

namespace App\Filament\Resources\JenissaranaResource\Pages;

use App\Filament\Resources\JenissaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenissarana extends ViewRecord
{
    protected static string $resource = JenissaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
