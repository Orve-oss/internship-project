<?php

namespace App\Filament\Resources\TypeTransactionResource\Pages;

use App\Filament\Resources\TypeTransactionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTypeTransactions extends ManageRecords
{
    protected static string $resource = TypeTransactionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
