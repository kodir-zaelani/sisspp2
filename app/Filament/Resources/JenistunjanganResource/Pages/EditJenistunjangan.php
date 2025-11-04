<?php

namespace App\Filament\Resources\JenistunjanganResource\Pages;

use App\Filament\Resources\JenistunjanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenistunjangan extends EditRecord
{
    protected static string $resource = JenistunjanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
