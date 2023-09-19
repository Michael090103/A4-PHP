<?php
namespace views;

use controllers\FormResultsController;
use mvc\View;

class FormResultsView extends View {

    protected $controller;

    public function __construct(FormResultsController $formResultsController)
    {
        $this->controller = $formResultsController;
    }

    public function getHTML()
    {
        $data = [];
        if (!empty($_POST)) {
            $data = $this->controller->validateInput([$_POST['firstname'], $_POST['lastname'], $_POST['email']]);
            return "
                <div class='h-screen flex items-center justify-center text-black'>
                    <table class='bg-white rounded-md '>
                        <thead class='bg-gray-50 border-b-2 border-gray-200'>
                            <tr>
                                <th class='p-2'>Voornaam</th>
                                <th class='p-2'>Achternaam</th>
                                <th class='p-2'>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class='p-2'>$data[0]</td>
                                <td class='p-2'>$data[1]</td>
                                <td class='p-2'>$data[2]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
             ";
        } else {
            return '';
        }
    }
}