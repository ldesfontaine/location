<?php

namespace App\Http\ViewComposers;

use App\Models\Type;
use Illuminate\View\View;


class TypeComposer
{

    public function compose(View $view)
    {
        $view->with('types', Type::all());
    }
}
