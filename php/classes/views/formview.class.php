<?php
namespace views;

use mvc\View;

class FormView extends View {

    public function getHTML()
    {
        return '
            <div class="grid gap-3 place-content-center">
                <form method="post" class="bg-slate-500 p-5 rounded-lg">
                    <label for="firstname">Voornaam</label><br/>
                    <input class="rounded" type="text" name="firstname"><br/><br/>
                    <label for="lastname">Achternaam</label><br/>
                    <input class="rounded" type="text" name="lastname"><br/><br/>
                    <label for="email">E-mail</label><br/>
                    <input class="rounded" type="text" name="email"><br/><br/>
                    <button class="bg-slate-400 px-4 py-2 rounded-md" type="submit">Verzenden</button>
                </form>
            </div>
        ';
    }
}