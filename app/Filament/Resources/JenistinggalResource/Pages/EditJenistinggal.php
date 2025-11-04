<?php

namespace App\Filament\Resources\JenistinggalResource\Pages;

use App\Filament\Resources\JenistinggalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenistinggal extends EditRecord
{
    protected static string $resource = JenistinggalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
