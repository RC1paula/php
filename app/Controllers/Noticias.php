<?php

namespace App\Controllers;

class Noticias extends BaseController
{
    public function view($page = 'noticias')
    {
        if (! is_file(APPPATH . 'Views/Pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('Templates/header', $data)
            . view('Pages/' . $page)
            . view('Templates/footer');
    }
}