<?php

namespace App\Filament\Resources\LatestMoves\Pages;

use App\Filament\Resources\LatestMoves\LatestMoveResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLatestMoves extends ListRecords
{
    protected static string $resource = LatestMoveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
