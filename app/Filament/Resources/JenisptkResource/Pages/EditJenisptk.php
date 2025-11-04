<?php

namespace App\Filament\Resources\JenisptkResource\Pages;

use App\Filament\Resources\JenisptkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisptk extends EditRecord
{
    protected static string $resource = JenisptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
