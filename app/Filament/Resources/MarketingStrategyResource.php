<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarketingStrategyResource\Pages;
use App\Models\MarketingStrategy;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class MarketingStrategyResource extends Resource
{
    protected static ?string $model = MarketingStrategy::class;
    protected static ?string $navigationLabel = 'Marketing Strategies';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\FileUpload::make('brochure_path')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('brochures')
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(50),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMarketingStrategies::route('/'),
            'create' => Pages\CreateMarketingStrategy::route('/create'),
            'edit' => Pages\EditMarketingStrategy::route('/{record}/edit'),
        ];
    }
}
