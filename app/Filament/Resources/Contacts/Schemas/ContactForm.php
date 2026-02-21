<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('from')
                    ->default(null),
                TextInput::make('to')
                    ->default(null),
                TextInput::make('when')
                    ->default(null),
                TextInput::make('distance')
                    ->default(null),
                TextInput::make('move_type')
                    ->default(null),
                TextInput::make('service_type')
                    ->default(null),
            ]);
    }
}
