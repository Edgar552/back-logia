<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->label('URL(Corta y separada por guiones)')
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Textarea::make('excerpt')
                    ->label('Resumen')
                    ->rows(3),

                Forms\Components\FileUpload::make('cover')
                    ->label('Imagen Noticia | Evento')
                    ->disk('public')
                    ->directory('news')
                    ->visibility('public')
                    ->image(),

                Forms\Components\TextInput::make('event_place')
                    ->label('Lugar del Evento (Opcional)')
                    ->maxLength(255),

                Forms\Components\DatePicker::make('event_date')->label('Fecha Evento (Opcional)'),
                Forms\Components\TimePicker::make('event_time')->label('Hora Evento (Opcional)'),


                Forms\Components\RichEditor::make('content')
                    ->label('Contenido')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('published')
                    ->label('¿Publicar de Inmediato?')
                    ->default(true),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Programar Publicacion')
                    ->required(),
            ]);
    }
}
