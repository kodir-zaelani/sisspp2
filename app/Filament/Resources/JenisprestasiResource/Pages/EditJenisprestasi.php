<?php

namespace App\Filament\Resources\JenisprestasiResource\Pages;

use App\Filament\Resources\JenisprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisprestasi extends EditRecord
{
    protected static string $resource = JenisprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
