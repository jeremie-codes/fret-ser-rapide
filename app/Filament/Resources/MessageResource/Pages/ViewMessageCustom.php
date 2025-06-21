<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Forms;
use Filament\Resources\Pages\Page;
use Filament\Forms\Form;

class ViewMessageCustom extends Page
{
    protected static string $resource = MessageResource::class;
    protected static string $view = 'filament.resources.message-resource.pages.view-message-custom';


    public $record;

    public function mount($record)
    {
        $this->record = \App\Models\Message::findOrFail($record);
    }

    protected function getForms(): array
    {
        return [
            Forms\Components\Section::make('Message reçu')
                ->schema([
                    Forms\Components\TextInput::make('fullname')->label('Nom')->disabled(),
                    Forms\Components\TextInput::make('email')->label('Email')->disabled(),
                    Forms\Components\TextInput::make('sujet')->label('Sujet')->disabled(),
                    Forms\Components\Textarea::make('message')->label('Message')->disabled(),
                ])
                ->columns(2),
        ];
    }
}
