<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DispositionformResource\Pages;
use App\Filament\Resources\DispositionformResource\RelationManagers;
use App\Models\Dispositionform;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;



use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\DateTimePicker;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DispositionformResource extends Resource
{
 
    
    protected static ?string $model = Dispositionform::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {

        
        return $form
        

        ->schema([
            Card::make()->schema([

                Select::make('dispositiontype_id',)
                    ->relationship('dispositiontype', 'name')->required(),

                DatePicker::make('dated')->required(),

                Select::make('unit_id',)
                    ->relationship('unit', 'name')->required(),

                TextInput::make('subject')->required(),

                TextInput::make('particular')->required(),

                Select::make('chargeabilitytype_id',)
                    ->relationship('chargeabilitytype', 'name')->required(),

                Select::make('chargeability_id',)
                    ->relationship('chargeability', 'name')->required(),

                Select::make('quarter_id',)
                    ->relationship('quarter', 'name')->required(),

                TextInput::make('amount')->required(),


            ])
                ->columns(2) 
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('created_at')->dateTime()->timezone('Asia/Manila')->sortable(),
                TextColumn::make('dispositiontype.name')->sortable(),
                TextColumn::make('dated') ->sortable(),
                TextColumn::make('unit.name')->sortable(),
                TextColumn::make('subject')->sortable()->searchable(),
                TextColumn::make('particular')->sortable()->searchable(),
                TextColumn::make('chargeabilitytype.name')->sortable(),
                TextColumn::make('chargeability.name')->sortable(),
                TextColumn::make('amount')->money('php',2)->sortable(),
                
            ])
            ->filters([
                SelectFilter::make('unit')->relationship('unit', 'name'),
                SelectFilter::make('chargeability')->relationship('chargeability', 'name')
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDispositionforms::route('/'),
            'create' => Pages\CreateDispositionform::route('/create'),
            'edit' => Pages\EditDispositionform::route('/{record}/edit'),
        ];
    }    
}
