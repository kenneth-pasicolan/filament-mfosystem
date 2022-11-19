<?php

namespace App\Filament\Resources\ChargeabilitytypeResource\Pages;

use App\Filament\Resources\ChargeabilitytypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChargeabilitytypes extends ListRecords
{
    protected static string $resource = ChargeabilitytypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
