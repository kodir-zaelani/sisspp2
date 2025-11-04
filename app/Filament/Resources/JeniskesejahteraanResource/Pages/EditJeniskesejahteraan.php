<?php

namespace App\Filament\Resources\JeniskesejahteraanResource\Pages;

use App\Filament\Resources\JeniskesejahteraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJeniskesejahteraan extends EditRecord
{
    protected static string $resource = JeniskesejahteraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
