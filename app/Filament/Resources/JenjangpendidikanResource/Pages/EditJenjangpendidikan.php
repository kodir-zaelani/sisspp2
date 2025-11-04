<?php

namespace App\Filament\Resources\JenjangpendidikanResource\Pages;

use App\Filament\Resources\JenjangpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenjangpendidikan extends EditRecord
{
    protected static string $resource = JenjangpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
