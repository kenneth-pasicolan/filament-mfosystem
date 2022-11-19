<?php

namespace App\Filament\Resources\ChargeabilityResource\Pages;

use App\Filament\Resources\ChargeabilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChargeabilities extends ListRecords
{
    protected static string $resource = ChargeabilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
