<?php

declare(strict_types=1);

namespace App\Controller;

use App\Config\Config;
use App\Model\User;
use App\View\View;

class Home
{

    public function index(): View
    {
        $users = User::all('users', ['id', 'full_name', 'email']);
        return View::make('home/index', ['users' => $users]);
    }
    public function create(): View
    {
        return View::make('home/create');
    }
    public  function store()
    {
        $amount = $_POST['amount'];
        var_dump($amount);
    }

    public function filesUpload(): string
    {
        return <<< FORM
    <form action="/home/upload" method="post" enctype="multipart/form-data" >
    <input type="file" name="image" id="">
    <button type="submit">upload</button>
     </form>
    FORM;
    }
    public function upload()
    {
        var_dump(Config::$storagePath);
        $filePath = Config::$storagePath . DIRECTORY_SEPARATOR . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
    }
    public function download()
    {
        header('Content-Type:application/png');
        header('Content-Disposition: attachment;filename="myfile.png"');
        readfile(Config::$storagePath . "mido.png");
    }
}
