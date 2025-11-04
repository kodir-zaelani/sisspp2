<?php

namespace App\Filament\Resources\JeniskesejahteraanResource\Pages;

use App\Filament\Resources\JeniskesejahteraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJeniskesejahteraan extends ViewRecord
{
    protected static string $resource = JeniskesejahteraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
