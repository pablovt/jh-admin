<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EvolucaoResource\Pages;
use App\Filament\Resources\EvolucaoResource\RelationManagers;
use App\Models\Aparelho;
use App\Models\Evolucao;
use App\Models\Servico;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EvolucaoResource extends Resource
{
    protected static ?string $model = Evolucao::class;

    protected static ?string $navigationIcon = 'iconoir-graph-up';
    protected static ?string $navigationLabel = 'Evolução';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('aluno_id')
                            ->required()
                            ->relationship('aluno', 'nome')
                            ->preload(),
                        Select::make('servico_id')
                            ->label('Serviço')
                            ->required()
                            ->options(Servico::all()->pluck('nome', 'id')->toArray())
                            ->reactive()
                            ->afterStateUpdated(fn (callable $set) => $set('aparelho_id', null)),
                        Select::make('aparelho_id')
                            ->label('Aparelho')
                            ->required()
                            ->multiple()
                            ->options(function (callable $get) {
                                $servico = Servico::find($get('servico_id'));
                                if(!$servico)
                                {
                                    return Aparelho::all()->pluck('nome', 'id');
                                }
                                return $servico->aparelho->pluck('nome', 'id');
                            }),
                        Select::make('profissional_id')
                            ->required()
                            ->relationship('profissional', 'nome')
                            ->preload(),
                        Forms\Components\DatePicker::make('data')
                            //->displayFormat('d/m/Y')
                            ->required(),
                        Forms\Components\Textarea::make('observacao')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('aluno.nome')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('servico.nome')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('aparelho.nome')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('profissional.nome')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data')
                    ->date('d/m/Y')
                    //->displayFormat('d/m/Y')
                    ->sortable(),
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
            'index' => Pages\ListEvolucaos::route('/'),
            'create' => Pages\CreateEvolucao::route('/create'),
            'edit' => Pages\EditEvolucao::route('/{record}/edit'),
        ];
    }    
}
