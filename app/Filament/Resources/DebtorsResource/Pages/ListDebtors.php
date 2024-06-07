<?php

namespace App\Filament\Resources\DebtorsResource\Pages;

use App\Filament\Resources\DebtorsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDebtors extends ListRecords
{
    protected static string $resource = DebtorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
