<?php

trait Auth {

    public function register() {

        return 'Registered.';
    }

    public function login() {

        return 'Logged In.';
    }

    public function logout() {

        return 'Logged Out';
    }
}

class NormalUser {

    use Auth;
}

class AdminUser {

    use Auth;
}

class SuperAdminUser {

    use Auth;
}

echo (new NormalUser)->register() . PHP_EOL;

echo (new AdminUser)->login() . PHP_EOL;

echo (new SuperAdminUser)->logout() . PHP_EOL;