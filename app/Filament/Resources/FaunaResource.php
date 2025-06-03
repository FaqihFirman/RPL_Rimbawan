<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Fauna;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FaunaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FaunaResource\RelationManagers;

class FaunaResource extends Resource
{
    protected static ?string $model = Fauna::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationLabel = 'Fauna';
    protected static ?string $pluralLabel = 'Fauna';
    protected static ?string $slug = 'fauna-data';
    protected static ?string $createButtonLabel = 'Add Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make ('nama_fauna')->required()->label('Nama Fauna')->unique(ignoreRecord: true),
                TextInput::make ('nama_latin')->required()->label('Nama Latin')->unique(ignoreRecord: true),
                TextInput::make ('habitat')->required()->label('Habitat'),
                Select::make('status_konservasi')
                ->label('Status Konservasi')
                ->options([
                    'EX' => 'Punah (EX)',
                    'EW' => 'Punah di alam liar (EW)',
                    'CR' => 'Terancam kritis (CR)',
                    'EN' => 'Spesies terancam (EN)',
                    'VU' => 'Rentan (VU)',
                    'NT' => 'Hampir terancam (NT)',
                    'LC' => 'Resiko rendah (LC)',
                    'DD' => 'Kurang data (DD)',
                    'NE' => 'Tidak dievaluasi (NE)',
                ])
                ->required()
                ->searchable(),

                FileUpload::make ('gambar_fauna')
                    ->required()
                    ->image()
                    ->directory('fauna')
                    ->label('Gambar Fauna')->columnSpan(2),
                RichEditor::make ('deskripsi_fauna')->required()->label('Deskripsi Fauna')->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_fauna')->label('Nama Fauna')->searchable(),
                TextColumn::make('nama_latin')->label('Nama Latin')->searchable(),
                TextColumn::make('habitat'),
                TextColumn::make('status_konservasi')->label('Status'),
                TextColumn::make('admin.username') -> label('Created by'),
            ])
            ->filters([
                SelectFilter::make('status_konservasi')
                ->label('Status Konservasi')
                ->options([
                    'EX' => 'Punah (EX)',
                    'EW' => 'Punah di alam liar (EW)',
                    'CR' => 'Terancam kritis (CR)',
                    'EN' => 'Spesies terancam (EN)',
                    'VU' => 'Rentan (VU)',
                    'NT' => 'Hampir terancam (NT)',
                    'LC' => 'Resiko rendah (LC)',
                    'DD' => 'Kurang data (DD)',
                    'NE' => 'Tidak dievaluasi (NE)',
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make('delete')
                    ->label('Delete')
                    ->requiresConfirmation()
                    ->modalDescription('Apakah Anda yakin ingin menghapus semua data ini?')
                    ->modalSubmitActionLabel('Ya, hapus')
                    ->modalCancelActionLabel('Batal')
                    ->color('danger'),
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
            'index' => Pages\ListFaunas::route('/'),
            'create' => Pages\CreateFauna::route('/create'),
            'edit' => Pages\EditFauna::route('/{record}/edit'),
        ];
    }
}
