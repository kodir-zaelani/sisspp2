<?php

namespace App\Filament\Resources\JeniskesejahteraanResource\Pages;

use App\Filament\Resources\JeniskesejahteraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJeniskesejahteraans extends ListRecords
{
    protected static string $resource = JeniskesejahteraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
