<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JoelhoPosteriorResource\Pages;
use App\Filament\Resources\JoelhoPosteriorResource\RelationManagers;
use App\Models\JoelhoPosterior;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JoelhoPosteriorResource extends Resource
{
    protected static ?string $model = JoelhoPosterior::class;

    protected static ?string $navigationIcon = 'gameicon-knee-cap';
    protected static ?string $navigationGroup = 'Exame Físico';
    protected static ?string $navigationLabel = 'Joelho Posterior';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJoelhoPosteriors::route('/'),
            'create' => Pages\CreateJoelhoPosterior::route('/create'),
            'edit' => Pages\EditJoelhoPosterior::route('/{record}/edit'),
        ];
    }    
}
