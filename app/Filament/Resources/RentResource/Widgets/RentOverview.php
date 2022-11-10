<?php

namespace App\Filament\Resources\RentResource\Widgets;

use App\Models\Rent;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class RentOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Rents', Rent::query()->count()),
        ];
    }

    protected function getWidgetsColumns(): int | array
{
    return 1;
}
}
