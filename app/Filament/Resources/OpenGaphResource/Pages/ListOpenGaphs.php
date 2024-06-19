<?php

namespace App\Filament\Resources\OpenGaphResource\Pages;

use App\Filament\Resources\OpenGaphResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenGaphs extends ListRecords
{
    protected static string $resource = OpenGaphResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
