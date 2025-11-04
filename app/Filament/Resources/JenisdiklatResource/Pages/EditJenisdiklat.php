<?php

namespace App\Filament\Resources\JenisdiklatResource\Pages;

use App\Filament\Resources\JenisdiklatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisdiklat extends EditRecord
{
    protected static string $resource = JenisdiklatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
