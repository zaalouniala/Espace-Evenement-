<?php
    /**
     * Created by PhpStorm.
     * User: pc
     * Date: 15/08/2018
     * Time: 16:24
     */


class ConnexionPDO
{
    private static $cnxPDO=null;
    private const connec_host = 'localhost';
    private const connec_dbname = 'gestion_evenemnt';
    private const connec_pseudo = 'root';
    private const connec_mdp = '';

    /**
     * ConnexionPDO constructor.
     * @param $cnxPDO
     * function __construct()


     */
    public function __construct()
    {
        try {
            $this::$cnxPDO = new PDO('mysql:host=' . self::connec_host . ';dbname=' . self::connec_dbname, self::connec_pseudo, self::connec_mdp);

        } catch (PDOException $e) {
            die($e->getMessage());

        }
    }
    public static function getInstance()
    {
        if(!(self::$cnxPDO))
        {
             new ConnexionPDO();
        }
        return self::$cnxPDO;
    }


}