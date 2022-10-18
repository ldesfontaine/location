<?php

namespace App\Http\ViewComposers;

use App\Models\Contact;
use Illuminate\View\View;


class contactComposer
{
    public function compose(View $view)
    {
        $view->with('contacts', Contact::all());
    }

}
