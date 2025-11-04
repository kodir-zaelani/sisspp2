<?php

namespace App\Filament\Resources\TingkatprestasiResource\Pages;

use App\Filament\Resources\TingkatprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTingkatprestasi extends EditRecord
{
    protected static string $resource = TingkatprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
