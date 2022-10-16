<?php

namespace App\Http\ViewComposers;

use App\Models\User;
use Illuminate\View\View;


class UserComposer
{

    public function compose(View $view)
    {
        $view->with('users', User::all());
    }
}
