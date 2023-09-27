<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CabecaPescocoResource\Pages;
use App\Filament\Resources\CabecaPescocoResource\RelationManagers;
use App\Models\CabecaPescoco;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CabecaPescocoResource extends Resource
{
    protected static ?string $model = CabecaPescoco::class;

    protected static ?string $navigationIcon = 'uni-head-side-thin';
    protected static ?string $navigationGroup = 'Exame Físico';
    protected static ?string $navigationLabel = 'Cabeça e Pescoço';

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
            'index' => Pages\ListCabecaPescocos::route('/'),
            'create' => Pages\CreateCabecaPescoco::route('/create'),
            'edit' => Pages\EditCabecaPescoco::route('/{record}/edit'),
        ];
    }    
}
