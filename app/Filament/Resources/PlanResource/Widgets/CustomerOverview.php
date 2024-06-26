<?php

namespace App\Filament\Resources\PlanResource\Widgets;

use Filament\Widgets\Widget;

class CustomerOverview extends Widget
{

    public ?Model $record = null;
    protected int | string | array $columpSpan = 'full';
    
    protected static string $view = 'filament.resources.plan-resource.widgets.customer-overview';

  

}
