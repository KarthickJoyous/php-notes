<?php

    /*  
        Polymorphism using abstract.

        Created a abstract class called Messenger.

        Created a classes FacebookMessenger, InstagramMessenger, WhatsappMessenger, TelegramMessenger.

        Each messengers are different from each other, but it shared a common abstract from Messenger.
    */
abstract class Messenger {
    abstract public function sendMessage($message);
}

class FacebookMessenger extends Messenger {

    public function sendMessage($message)
    {
        return "Sending your message ($message) in Facebook.";
    }
}

class InstagramMessenger extends Messenger {

    public function sendMessage($message)
    {
        return "Sending your message ($message) in Instagram.";
    }
}

class WhatsappMessenger extends Messenger {

    public function sendMessage($message)
    {
        return "Sending your message ($message) in Whatsapp.";
    }
}

class TelegramMessenger extends Messenger {

    public function sendMessage($message)
    {
        return "Sending your message ($message) in Telegram.";
    }
}

/*
    Each Messenger can have its own unique way of sending message, 
    but this function remains unchanged even if more than a hundred types of messengers are added.

    This is Polymorphism (usign a variety of different objects in the same way).
*/

function sendMessage(Messenger $messenger, $message) {

    echo $messenger->sendMessage($message) . PHP_EOL;
}

sendMessage(new FacebookMessenger(), "Good Morning");
sendMessage(new InstagramMessenger(), "Good Afternoon");
sendMessage(new WhatsappMessenger(), "Good Evening");
sendMessage(new TelegramMessenger(), "Good Night");
