<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Actions;
use Filament\Tables;
class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('cover')
                    ->label('Imagen')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\IconColumn::make('published')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Fecha Publicacion')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
