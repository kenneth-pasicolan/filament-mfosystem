<?php

namespace App\Filament\Resources\DispositionformResource\Pages;

use App\Filament\Resources\DispositionformResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispositionforms extends ListRecords
{
    protected static string $resource = DispositionformResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
