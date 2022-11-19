<?php

namespace App\Filament\Resources\ChargeabilityResource\Pages;

use App\Filament\Resources\ChargeabilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChargeability extends EditRecord
{
    protected static string $resource = ChargeabilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
