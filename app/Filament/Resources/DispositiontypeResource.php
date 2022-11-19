<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DispositiontypeResource\Pages;
use App\Filament\Resources\DispositiontypeResource\RelationManagers;
use App\Filament\Resources\DispositiontypeResource\RelationManagers\DispositionformsRelationManager;
use App\Models\Dispositiontype;
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

class DispositiontypeResource extends Resource
{
    protected static ?string $model = Dispositiontype::class;
    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

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
            'index' => Pages\ListDispositiontypes::route('/'),
            'create' => Pages\CreateDispositiontype::route('/create'),
            'edit' => Pages\EditDispositiontype::route('/{record}/edit'),
        ];
    }    
}
