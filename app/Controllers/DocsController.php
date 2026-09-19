<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DocsController extends BaseController
{
    public function index()
    {
        $data['title'] = lang('app.documentation');

        return view('docs/index', $data);
    }

    public function locale($locale)
    {
        // dd($locale);

        $session = session();
        $session->remove('lang');
        $session->set('lang', $locale);
        return redirect()->back();
    }
}
