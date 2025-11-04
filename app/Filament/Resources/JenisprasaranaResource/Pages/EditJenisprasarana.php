<?php

namespace App\Filament\Resources\JenisprasaranaResource\Pages;

use App\Filament\Resources\JenisprasaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisprasarana extends EditRecord
{
    protected static string $resource = JenisprasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
