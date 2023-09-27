<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AtividadePreviaResource\Pages;
use App\Filament\Resources\AtividadePreviaResource\RelationManagers;
use App\Models\AtividadePrevia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AtividadePreviaResource extends Resource
{
    protected static ?string $model = AtividadePrevia::class;

    protected static ?string $navigationIcon = 'iconoir-running';
    protected static ?string $navigationGroup = 'Exame Físico';
    protected static ?string $navigationLabel = 'Atividades Prévias';

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
            'index' => Pages\ListAtividadePrevias::route('/'),
            'create' => Pages\CreateAtividadePrevia::route('/create'),
            'edit' => Pages\EditAtividadePrevia::route('/{record}/edit'),
        ];
    }    
}
