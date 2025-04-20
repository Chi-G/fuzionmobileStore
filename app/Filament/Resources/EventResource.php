<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationLabel = 'Events';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\DateTimePicker::make('date')->required(),
                Forms\Components\TextInput::make('time')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\Select::make('type')
                    ->options(['virtual' => 'Virtual', 'physical' => 'Physical'])
                    ->required(),
                Forms\Components\FileUpload::make('banner_path')
                    ->image()
                    ->directory('banners')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('location')
                    ->requiredIf('type', 'physical'),
                Forms\Components\TextInput::make('zoom_link')
                    ->url()
                    ->requiredIf('type', 'virtual'),
                Forms\Components\TextInput::make('meeting_id')->nullable(),
                Forms\Components\TextInput::make('meeting_password')->nullable(),
                Forms\Components\TextInput::make('meeting_url')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('type'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
