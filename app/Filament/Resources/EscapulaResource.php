<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EscapulaResource\Pages;
use App\Filament\Resources\EscapulaResource\RelationManagers;
use App\Models\Escapula;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EscapulaResource extends Resource
{
    protected static ?string $model = Escapula::class;

    protected static ?string $navigationIcon = 'healthicons-f-boy-1015y';
    protected static ?string $navigationGroup = 'Exame Físico';
    protected static ?string $navigationLabel = 'Escápula';

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
            'index' => Pages\ListEscapulas::route('/'),
            'create' => Pages\CreateEscapula::route('/create'),
            'edit' => Pages\EditEscapula::route('/{record}/edit'),
        ];
    }    
}
