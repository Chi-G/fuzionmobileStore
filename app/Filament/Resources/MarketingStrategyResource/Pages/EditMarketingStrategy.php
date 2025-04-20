<?php

namespace App\Filament\Resources\MarketingStrategyResource\Pages;

use App\Filament\Resources\MarketingStrategyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarketingStrategy extends EditRecord
{
    protected static string $resource = MarketingStrategyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
