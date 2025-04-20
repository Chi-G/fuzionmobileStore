<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebinarResource\Pages;
use App\Models\Webinar;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class WebinarResource extends Resource
{
    protected static ?string $model = Webinar::class;
    protected static ?string $navigationLabel = 'Webinars';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\DateTimePicker::make('date')->required(),
                Forms\Components\TextInput::make('time')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\Select::make('platform')
                    ->options(['Zoom' => 'Zoom', 'Other' => 'Other'])
                    ->required(),
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
                Tables\Columns\TextColumn::make('platform'),
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
            'index' => Pages\ListWebinars::route('/'),
            'create' => Pages\CreateWebinar::route('/create'),
            'edit' => Pages\EditWebinar::route('/{record}/edit'),
        ];
    }

    // Handle Zoom meeting creation
    public static function created(Webinar $webinar)
    {
        if ($webinar->platform === 'Zoom') {
            $client = new Client();
            $response = $client->post('https://api.zoom.us/v2/users/me/meetings', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('ZOOM_JWT_TOKEN'),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'topic' => $webinar->title,
                    'start_time' => $webinar->date . 'T' . $webinar->time,
                    'password' => Str::random(10),
                    'settings' => ['host_video' => true, 'participant_video' => true],
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            $webinar->update([
                'meeting_id' => $data['id'],
                'meeting_password' => $data['password'],
                'meeting_url' => $data['join_url'],
            ]);
        }
    }
}
