<?php

namespace App\Filament\Resources\LatestMoves\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LatestMoveForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                FileUpload::make('image')
                    ->label("Image")
                    ->disk('uploads')
                    ->directory('latestMove')
                    ->image()
                    ->required(),
                Textarea::make('description')
                    ->label('Samll Description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
