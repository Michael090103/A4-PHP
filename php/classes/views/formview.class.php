<?php
namespace views;

use controllers\FormController;
use mvc\View;

class FormView extends View {

    protected $controller;

    public function __construct(FormController $formController)
    {
        $this->controller = $formController;
    }

    public function getHTML()
    {
        return '       
            <div class="grid gap-3 place-content-center">
                <form action="results" method="post" class="bg-slate-600 p-5 pt-4 mt-4 rounded-lg">
                    <label for="firstname">Voornaam</label><br/>
                    <input class="rounded" type="text" name="firstname"><br/><br/>
                    <label for="lastname">Achternaam</label><br/>
                    <input class="rounded" type="text" name="lastname"><br/><br/>
                    <label for="email">E-mail</label><br/>
                    <input class="rounded" type="text" name="email"><br/><br/>
                    <button class="bg-slate-400 hover:scale-110 hover:bg-slate-500 duration-75 px-4 py-2 rounded-md" type="submit">Verzenden</button>
                </form>
            </div>
        ';
    }
}