<?php
abstract class MobilePhone {
    abstract public function call();
    abstract public function sendSMS();

    public function boot()
    {
        echo 'hello world';
    }
}

class Nokia3310 extends MobilePhone {

    public function call()
    {
        // TODO: Implement call() method.
    }

    public function sendSMS()
    {
        // TODO: Implement sendSMS() method.
    }

    public function boot()
    {
        echo 'shaking hands';
    }
}

$myPhone = new Nokia3310();
$myPhone->sendSMS();
$myPhone->call();
$myPhone->boot();


class NokiaAsha201 extends MobilePhone {
    public function startFMRadio(){

    }
    public function MP3(){

    }
    public function launchCamera(){

    }

    public function call()
    {
        // TODO: Implement call() method.
    }

    public function sendSMS()
    {
        // TODO: Implement sendSMS() method.
    }
}
class BlackBerry extends MobilePhone {
    public function startFMRadio()
    {

    }

    public function MP3()
    {

    }

    public function launchCamera()
    {

    }
    public function record()
    {

    }

    public function readEmails()
    {

    }

    public function call()
    {
        // TODO: Implement call() method.
    }

    public function sendSMS()
    {
        // TODO: Implement sendSMS() method.
    }
}

