<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Flora;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FloraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FloraResource\RelationManagers;

class FloraResource extends Resource
{
    protected static ?string $model = Flora::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationLabel = 'Flora';
    protected static ?string $pluralLabel = 'Flora';
    protected static ?string $slug = 'flora-data';
    protected static ?string $createButtonLabel = 'Add Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make ('nama_flora')->required()->label('Nama Flora'),
                TextInput::make ('nama_latin')->required()->label('Nama Latin'),
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
                FileUpload::make ('gambar_flora')
                    ->required()
                    ->image()
                    ->directory('flora')
                    ->label('Gambar Flora')
                    ->columnSpan(2),
                RichEditor::make ('deskripsi_flora')
                    ->required()
                    ->label('Deskripsi Flora')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_flora')->label('Nama Flora')->searchable(),
                TextColumn::make('nama_latin')->label('Nama Latin')->searchable(),
                TextColumn::make('habitat'),
                TextColumn::make('status_konservasi')->label('Status'),
                TextColumn::make('admin.username')->label('Created by'),
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
                    ]),
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
            'index' => Pages\ListFloras::route('/'),
            'create' => Pages\CreateFlora::route('/create'),
            'edit' => Pages\EditFlora::route('/{record}/edit'),
        ];
    }
}
