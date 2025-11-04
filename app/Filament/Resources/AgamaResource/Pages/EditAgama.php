<?php

namespace App\Filament\Resources\AgamaResource\Pages;

use App\Filament\Resources\AgamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgama extends EditRecord
{
    protected static string $resource = AgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}