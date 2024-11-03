<?php

namespace App\Filament\Resources\TotalOrdersResource\Pages;

use App\Filament\Resources\TotalOrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTotalOrders extends ListRecords
{
    protected static string $resource = TotalOrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
