<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 17/10/14
 * Time: 11:03 PM
 */

namespace FindSite\Service;

require_once(ABSPATH . 'Vendor/NotORM.php');

class BaseService {
    protected $db;
    protected $pdo;

    function __construct() {
        $dsn = "mysql:dbname=" .DB_NAME . ";host=" . DB_HOST .";charset=utf8";

        $this->pdo = new \PDO($dsn, DB_USER, DB_PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_STRINGIFY_FETCHES, false);
        $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        $this->pdo->setAttribute(\PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
        $this->db = new \NotORM($this->pdo);
        if(ENVIRONMENT =='live'){
            $this->db->debug = false;
        }else{
            $this->db->debug = true;
        }
    }
} 