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
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Textarea::make('excerpt')
                    ->rows(3),

                Forms\Components\FileUpload::make('cover')
                    ->disk('public')
                    ->directory('news')
                    ->visibility('public')
                    ->image(),

                Forms\Components\TextInput::make('event_place')
                    ->maxLength(255),

                Forms\Components\DatePicker::make('event_date'),
                Forms\Components\TimePicker::make('event_time'),


                Forms\Components\RichEditor::make('content')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('published')
                    ->default(true),

                Forms\Components\DateTimePicker::make('published_at')->required()
                ,
            ]);
    }
}
