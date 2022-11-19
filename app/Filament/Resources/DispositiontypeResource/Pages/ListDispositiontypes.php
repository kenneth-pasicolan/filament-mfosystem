<?php

namespace App\Filament\Resources\DispositiontypeResource\Pages;

use App\Filament\Resources\DispositiontypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispositiontypes extends ListRecords
{
    protected static string $resource = DispositiontypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
