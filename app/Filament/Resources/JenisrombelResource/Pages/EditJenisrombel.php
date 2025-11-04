<?php

namespace App\Filament\Resources\JenisrombelResource\Pages;

use App\Filament\Resources\JenisrombelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisrombel extends EditRecord
{
    protected static string $resource = JenisrombelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
