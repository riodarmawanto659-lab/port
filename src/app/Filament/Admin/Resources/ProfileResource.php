<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Portfolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\FileUpload::make('photo')
                    ->image()
                    ->directory('profiles'),

                Forms\Components\TextInput::make('fullname')
                    ->required(),

                Forms\Components\TextInput::make('title'),

                Forms\Components\Textarea::make('bio'),

                Forms\Components\TextInput::make('email')
                    ->email(),

                Forms\Components\TextInput::make('phone'),

                Forms\Components\TextInput::make('github'),

                Forms\Components\TextInput::make('linkedin'),

                Forms\Components\TextInput::make('website'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('photo'),

                Tables\Columns\TextColumn::make('fullname')
                    ->searchable(),

                Tables\Columns\TextColumn::make('title'),

                Tables\Columns\TextColumn::make('email'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}