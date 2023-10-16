<?php
// This code works in PHP.
//
// Run builtin PHP web server like so:
//
// php -S localhost:8080 ./main.php
//
// Then visit this page in your browser:
//
// http://localhost:8080/?accounts[]=Rulon_User&accounts[]=Bidon_Admin
//
// The output should be:
//
// name=Rulon
// name=Bidon
//
// TODO: Make this code compile and run with KPHP with minimal
// changes while trying to keep the code as idiomatic as possible.
class AccountFactory {
    public $name = null;
    
    /** @param string $name */
    public static function newAccount($name) {
        return $name;
    }
    
    /** @param string[] $accounts */
    public static function collect_names($accounts) {
    	return array_map(function ($name) {
        	return $name;
    		}, $accounts);
    }
}

class User {
    public $name = null;
    public function construct($name) {
        $this->name = $name;
    }
}

/** @param string[] $names */
function print_names($names) {
    foreach ($names as $name) {
        echo "name=$name<br>";
    }
}
function main() {
    $raw_accounts = $_GET['accounts'];
    if (!$raw_accounts) {
        die('$_GET["accounts"] is empty');
    }
    
    /** @var string[] $accounts */
    $accounts = [];
    foreach ($raw_accounts as $raw) {
        $parts = explode('_', $raw);
        if (count($parts) !== 2) {
            continue;
        }
        $accounts[] = AccountFactory::newAccount($parts[0]);
    }
    
    /** @param string $names */
    $names = AccountFactory::collect_names($accounts);
    print_names($names);
}

main();

