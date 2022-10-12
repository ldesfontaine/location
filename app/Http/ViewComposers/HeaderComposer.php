<?php

namespace App\Http\ViewComposers;

use App\Models\Type;
use Illuminate\View\View;


class HeaderComposer
{

    public function compose(View $view)
    {
        $view->with('types', Type::where('actif',true)->get());
    }
}
