<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Delete')
                ->icon('heroicon-m-trash'),
            Actions\ForceDeleteAction::make()
                ->label('Permanent Delete')
                ->icon('heroicon-m-x-mark'),
            Actions\RestoreAction::make()
                ->label('Restore')
                ->icon('heroicon-m-arrow-uturn-left'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
