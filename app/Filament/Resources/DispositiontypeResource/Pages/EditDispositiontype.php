<?php

namespace App\Filament\Resources\DispositiontypeResource\Pages;

use App\Filament\Resources\DispositiontypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDispositiontype extends EditRecord
{
    protected static string $resource = DispositiontypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
