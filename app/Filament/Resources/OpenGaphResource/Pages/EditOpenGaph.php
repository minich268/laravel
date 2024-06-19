<?php

namespace App\Filament\Resources\OpenGaphResource\Pages;

use App\Filament\Resources\OpenGaphResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenGaph extends EditRecord
{
    protected static string $resource = OpenGaphResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
