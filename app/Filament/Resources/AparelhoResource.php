<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AparelhoResource\Pages;
use App\Filament\Resources\AparelhoResource\RelationManagers;
use App\Filament\Resources\AparelhoResource\RelationManagers\ServicosRelationManager;
use App\Models\Aparelho;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AparelhoResource extends Resource
{
    protected static ?string $model = Aparelho::class;

    protected static ?string $navigationIcon = 'iconoir-gym';
    protected static ?string $navigationGroup = 'Configurações';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('servico_id')
                    ->relationship('servico', 'nome')
                    ->preload(),
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Select::make('status_id')
                    ->relationship('status', 'nome')
                    ->required()
                    ->preload(),
                // Select::make('status')
                //     ->options([
                //         '1' => 'Ativo',
                //         '0' => 'Inativo',
                //     ])
                //     ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('servico.nome')
                    ->label('Serviço'),
                Tables\Columns\TextColumn::make('status.nome')
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
            ServicosRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAparelhos::route('/'),
            'create' => Pages\CreateAparelho::route('/create'),
            'edit' => Pages\EditAparelho::route('/{record}/edit'),
        ];
    }    
}
