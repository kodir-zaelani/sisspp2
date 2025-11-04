<?php

namespace App\Filament\Resources\StatuskepemilikanResource\Pages;

use App\Filament\Resources\StatuskepemilikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatuskepemilikan extends EditRecord
{
    protected static string $resource = StatuskepemilikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
