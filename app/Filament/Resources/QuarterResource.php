<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuarterResource\Pages;
use App\Filament\Resources\QuarterResource\RelationManagers;
use App\Filament\Resources\QuarterResource\RelationManagers\DispositionformsRelationManager;
use App\Models\Quarter;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuarterResource extends Resource
{
    protected static ?string $model = Quarter::class;
    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
            TextInput::make('name')
                ->required(),
            ])
                ->columns(2) 
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
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
            DispositionformsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuarters::route('/'),
            'create' => Pages\CreateQuarter::route('/create'),
            'edit' => Pages\EditQuarter::route('/{record}/edit'),
        ];
    }    
}
