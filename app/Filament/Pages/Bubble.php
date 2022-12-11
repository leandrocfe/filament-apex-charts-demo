<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicBubbleChart;
use Filament\Pages\Page;

class Bubble extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.bubble';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicBubbleChart::class,
        ];
    }
}
