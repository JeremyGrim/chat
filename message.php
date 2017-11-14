<?php


    include "connexion.php";

    class Message {

        private $id;
        private $pseudo;
        private $message;

        function __construct($pseudo, $message) {

            $this->pseudo = $pseudo;
            $this->message = $message;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getPseudo() {
            return $this->pseudo;
        }

        public function setPseudo($pseudo) {
            $this->pseudo = $pseudo;
        }

        public function getMessage() {
            return $this->message;
        }

        public function setMessage($message) {
            $this->message = $message;
        }


        function savePost(){
            $connexion = Connexion::getInstance();
            $req = $connexion->bdd->prepare('INSERT INTO post(pseudo, message) VALUES(:pseudo, :message)');
            $req->execute(array(
                'pseudo' => $this->pseudo,
                'message' => $this->message,
            ));

        }

        function displayPost(){
            $connexion = Connexion::getInstance();
            $reponse = $connexion->bdd->query('SELECT pseudo, message FROM post');
            $postArray = $reponse->fetch();

            return $postArray;

        }


    }

?>