<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('enrolfee')
                    ->label('Quota iscrizione partner')
                    ->numeric(),
                TextInput::make('percentagefee')
                    ->label('Percentuale ricavo da partner figli')
                    ->numeric(),
                Select::make('partner_parent_id')
                    ->relationship(name: 'parent', titleAttribute: 'name')
                    ->label('Partner padre')
                    ->preload()
                    ->searchable()
                    ->loadingMessage('Caricamento partner...'),
            ]);
    }
}
