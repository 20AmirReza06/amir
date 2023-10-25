<?php
namespace App\http\Controller;
class UserController extends Controller
{
    public function index()
    {
        echo "user controller index";
    }

    public function create()
    {
        echo "user controller create";
    }

    public function store()
    {
        echo "user controller store";
    }

    public function edit($id)
    {
        echo "user controller edit";
    }

    public function update()
    {
        echo "user controller update";
    }

    public function delete($id)
    {
        echo "user controller delete";
    }
}