<?php

namespace App\Filament\Resources\DebtorsResource\Pages;

use App\Filament\Resources\DebtorsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDebtors extends EditRecord
{
    protected static string $resource = DebtorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
