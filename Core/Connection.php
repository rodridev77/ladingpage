<?php

/**
 * @author Markus P
 * Classe de conexão ao banco de dados usando PDO
 */

namespace Core;

use \PDO;

class Connection {

    private static $HOST = HOST;
    private static $DBNAME = DBNAME;
    private static $USER = USER;
    private static $PASS = PASS;
    private static $DRIVER = DRIVER;
    private static $CHARSET = CHARSET;

    /** @var PDO */
    private static $conn = null;

    // Construtor privado - permite que a classe seja instanciada apenas internamente.
    private function __construct() {

    }

    // Método estático - acessível sem instanciação.
    public static function connect() {
        // Garante uma única instância.Se não existe uma conexão, uma nova será criada.
        if (self::$conn === null) {
            try {

                self::$conn = new PDO(self::DRIVER . ":host=" . self::HOST . ";dbname=" . self::DBNAME . ";charset=" . self::CHARSET, self::USER, self::PASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection Error: " . $e->getMessage());
            }
        }

        // Retorna a conexão.
        return self::$conn;
    }

}
