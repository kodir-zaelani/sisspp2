<?php

namespace App\Filament\Resources\StatuskepegawaianResource\Pages;

use App\Filament\Resources\StatuskepegawaianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatuskepegawaian extends EditRecord
{
    protected static string $resource = StatuskepegawaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
