<?php

namespace App\Filament\Resources\StatuskepemilikansarprasResource\Pages;

use App\Filament\Resources\StatuskepemilikansarprasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatuskepemilikansarpras extends EditRecord
{
    protected static string $resource = StatuskepemilikansarprasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
