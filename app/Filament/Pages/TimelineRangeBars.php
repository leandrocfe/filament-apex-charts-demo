<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BasicTimelineRangeBarsChart;
use Filament\Pages\Page;

class TimelineRangeBars extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-hashtag';

    protected static ?string $navigationGroup = 'Examples';

    protected static string $view = 'filament.pages.timeline-range-bars';

    protected function getHeaderWidgets(): array
    {
        return [
            BasicTimelineRangeBarsChart::class,
        ];
    }
}
