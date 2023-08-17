<?php

namespace App\Filament\Resources\KiosqueResource\Pages;

use App\Filament\Resources\KiosqueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKiosques extends ManageRecords
{
    protected static string $resource = KiosqueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
