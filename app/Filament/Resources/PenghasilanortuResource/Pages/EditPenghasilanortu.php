<?php

namespace App\Filament\Resources\PenghasilanortuResource\Pages;

use App\Filament\Resources\PenghasilanortuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenghasilanortu extends EditRecord
{
    protected static string $resource = PenghasilanortuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
