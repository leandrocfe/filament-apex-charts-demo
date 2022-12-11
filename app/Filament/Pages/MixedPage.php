<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\LineColumnChart;
use Filament\Pages\Page;

class MixedPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.mixed';

    protected static ?string $title = 'Mixed';

    protected static ?string $navigationLabel = 'Mixed';

    protected static ?string $slug = 'mixed';

    protected function getHeaderWidgets(): array
    {
        return [
            LineColumnChart::class,
        ];
    }
}
