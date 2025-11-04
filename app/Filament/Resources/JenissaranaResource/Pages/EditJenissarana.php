<?php

namespace App\Filament\Resources\JenissaranaResource\Pages;

use App\Filament\Resources\JenissaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenissarana extends EditRecord
{
    protected static string $resource = JenissaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
