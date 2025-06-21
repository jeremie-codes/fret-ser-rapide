<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Filament\Resources\MessageResource\RelationManagers;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Forms\Components;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        $isView = $form->getOperation() === 'view';

        return $form
        ->schema([
            Section::make('')
                ->schema([
                    $isView
                        ? Components\Placeholder::make('fullname')->label('Nom')->content(fn (Message $record) => $record->fullname)
                            ->columnSpan(['lg' => 1])
                        : Components\TextInput::make('fullname')->label('Nom'),

                    $isView
                        ? Components\Placeholder::make('email')->label('Email')->content(fn (Message $record) => $record->email)
                            ->columnSpan(['lg' => 1])
                        : Components\TextInput::make('email')->label('Email'),

                    $isView
                        ? Components\Placeholder::make('sujet')->label('Sujet')->content(fn (Message $record) => $record->sujet)
                            ->columnSpan(['lg' => 1])
                        : Components\TextInput::make('sujet')->label('Sujet'),
                    $isView
                        ? Components\Placeholder::make('created_at')->label('Réçu depuis')->content(fn (Message $record): ?string => $record->created_at?->diffForHumans())
                            ->columnSpan(['lg' => 1])
                        : null,
                ])
                ->columns(2)
                ->columnSpan(['lg' => 2]),

            Section::make('')
                ->schema([
                    $isView
                        ? Components\Placeholder::make('message')->label('Message')->content(fn (Message $record) => strip_tags($record->message)
                            )->columnSpan(['lg' => 1])
                        : Components\RichEditor::make('message')->label('Message'),
                ])
                ->columnSpan(['lg' => 2]),
        ])
        ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(static::getModel()::query()->orderByDesc('created_at'))
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->sortable(),
                Tables\Columns\TextColumn::make("sujet"),
                Tables\Columns\TextColumn::make("message")->limit(40),
                Tables\Columns\TextColumn::make('created_at')->label("Date"),
            ])
            ->filters([
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')->label('Date de début'),
                        Forms\Components\DatePicker::make('created_until')->label('Date de fin'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Lire')->color('primary'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
            // 'create' => Pages\CreateMessage::route('/create'),
            'view' => Pages\ViewMessage::route('/{record}'),
            // 'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
