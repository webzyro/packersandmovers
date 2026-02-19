<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->label('Question')
                    ->required(),
                Textarea::make('answer')
                    ->label('Answer')
                    ->required(),
                Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
