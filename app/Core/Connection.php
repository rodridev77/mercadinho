<?php declare(strict_types=1);

/**
 * @author M Paulo
 *
 * <b>Connection:</b> Implementa uma conexão sob o pattern singleton.A classe retorna apenas uma instância de conexão com o banco de dados.
 */

namespace app\Core;

use \PDO;

final class Connection {

    private static string $HOST = HOST;
    private static string $DBNAME = DBNAME;
    private static string $USER = USER;
    private static string  $PASS = PASS;
    private static string $DRIVER = DRIVER;
    private static string $CHARSET = CHARSET;

    private static Connection $conn = null;

    // Construtor privado - permite que a classe seja instanciada apenas internamente.
    private function __construct() {}

    /**
     * Método estático - acessível sem instanciação.Retorna uma instância única de conexão por vez.
     *
     * @return PDO
     */
    public static function connect() : Connection {
        // Garante uma única instância.Se não existe uma conexão, uma nova será criada.
        if (self::$conn === null) {
            try {

                self::$conn = new PDO(self::$DRIVER . ":host=" . self::$HOST . ";dbname=" . self::$DBNAME . ";charset=" . self::$CHARSET, self::$USER, self::$PASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Connection Error: " . $e->getMessage());
            }
        }

        // Retorna a conexão.
        return self::$conn;
    }

    private function __clone() {}
    private function __construct() {}

}
