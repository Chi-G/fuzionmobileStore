<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyInfoResource\Pages;
use App\Models\CompanyInfo;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class CompanyInfoResource extends Resource
{
    protected static ?string $model = CompanyInfo::class;
    protected static ?string $navigationLabel = 'Company Info';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\Textarea::make('mission')->required(),
                Forms\Components\Textarea::make('vision')->required(),
                Forms\Components\FileUpload::make('logo_path')
                    ->image()
                    ->directory('logos')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('video_url')
                    ->url()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\ImageColumn::make('logo_path'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyInfos::route('/'),
            'create' => Pages\CreateCompanyInfo::route('/create'),
            'edit' => Pages\EditCompanyInfo::route('/{record}/edit'),
        ];
    }
}
