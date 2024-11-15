<?php

namespace App\Filament\Resources\JenisKategoriResource\Pages;

use App\Filament\Resources\JenisKategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisKategoris extends ListRecords
{
    protected static string $resource = JenisKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
