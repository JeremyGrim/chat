<?php


    class Connexion {


        /**
         * @var Connexion
         * @access private
         * @static
         */
        private static $_instance = null;
        public $bdd;

        /**
         * Constructeur de la classe
         *
         * @param void
         * @return void
         */
        private function __construct() {
            $this->bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'admin');
        }

        /**
         * Méthode qui crée l'unique instance de la classe
         * si elle n'existe pas encore puis la retourne.
         *
         * @param void
         * @return Connexion
         */
        public static function getInstance() {

            if(is_null(self::$_instance)) {

                self::$_instance = new Connexion();

            }

            return self::$_instance;
        }



    }


?>