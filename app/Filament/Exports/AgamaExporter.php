<?php

namespace App\Filament\Exports;

use App\Models\Agama;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class AgamaExporter extends Exporter
{
    protected static ?string $model = Agama::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('sort_id')
            ->label('ID Agama'),
            ExportColumn::make('nama'),
            // ExportColumn::make('deleted_at'),
            // ExportColumn::make('created_at'),
            // ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your agama export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
