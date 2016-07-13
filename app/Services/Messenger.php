<?php

namespace App\Services;

use App\Services\Service;

class Messenger extends Service
{

    public function createMessage($title, $message, $authorId, $userId)
    {
        //sprawdzic czy istnieje uzytkownik

        //sprawdzic czy uzytwkonik jest zalogowany
        //jesli tak to przeslac informacje do uzytkownika ze ma nowa wiadomosc
    }

    private function sendMessage($title, $message, $authorId, $userId)
    {
        //wyslac wiadomosc
        //dodac do bazy message
    }

    private function pingLoggedUser($userId)
    {
        //dac sygnal zalogowanemu uzytwkonikow ze ma nowa wiadomosc
    }

}
