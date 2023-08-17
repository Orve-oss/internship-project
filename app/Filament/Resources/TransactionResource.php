<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use App\Models\TypeTransaction;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //Forms\Components\TextInput::make('type_transaction_id')
                Forms\Components\Select::make('type_transaction_id')->options(TypeTransaction::all()->pluck('id'))
                    ->required(),
                Forms\Components\TextInput::make('expediteur_id')
                    ->required(),
                Forms\Components\TextInput::make('destinataire_id')
                    ->required(),
                Forms\Components\TextInput::make('montant')
                    ->required(),
                Forms\Components\TextInput::make('numero_destinataire')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_transaction_id'),
                Tables\Columns\TextColumn::make('expediteur_id'),
                Tables\Columns\TextColumn::make('destinataire_id'),
                Tables\Columns\TextColumn::make('montant'),
                Tables\Columns\TextColumn::make('numero_destinataire'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ManageTransactions::route('/'),
        ];
    }
}
