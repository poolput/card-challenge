<?php
namespace App\Models;

use CodeIgniter\Model;
require_once (APPPATH . 'ThirdParty/OAuth2/Autoloader.php');

class AuthenticationModel extends Model
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->config = new \Config\App();
    }

    public function getToken()
    {
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=' . $this->db->database;
        $username = $this->db->username;
        $password = $this->db->password;
        \OAuth2\Autoloader::register();

        // $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
        $storage = new \OAuth2\Storage\Pdo(array(
            'dsn' => $dsn,
            'username' => $username,
            'password' => $password
        ));

        // Pass a storage object or array of storage objects to the OAuth2 server class
        $server = new \OAuth2\Server($storage);

        // Add the "Client Credentials" grant type (it is the simplest of the grant types)
        $server->addGrantType(new \OAuth2\GrantType\ClientCredentials($storage));

        // Add the "Authorization Code" grant type (this is where the oauth magic happens)
        $server->addGrantType(new \OAuth2\GrantType\AuthorizationCode($storage));

        $server->handleTokenRequest(\OAuth2\Request::createFromGlobals())->send();
    }
}
?>