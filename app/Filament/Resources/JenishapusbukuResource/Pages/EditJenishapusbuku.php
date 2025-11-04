<?php

namespace App\Filament\Resources\JenishapusbukuResource\Pages;

use App\Filament\Resources\JenishapusbukuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenishapusbuku extends EditRecord
{
    protected static string $resource = JenishapusbukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
