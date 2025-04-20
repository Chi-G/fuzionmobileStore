<?php

namespace App\Filament\Resources\MarketingStrategyResource\Pages;

use App\Filament\Resources\MarketingStrategyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketingStrategies extends ListRecords
{
    protected static string $resource = MarketingStrategyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
