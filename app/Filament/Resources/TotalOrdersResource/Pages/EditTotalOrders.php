<?php

namespace App\Filament\Resources\TotalOrdersResource\Pages;

use App\Filament\Resources\TotalOrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTotalOrders extends EditRecord
{
    protected static string $resource = TotalOrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
