<?php

namespace App\Filament\Resources\LatestMoves\Pages;

use App\Filament\Resources\LatestMoves\LatestMoveResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLatestMove extends EditRecord
{
    protected static string $resource = LatestMoveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
