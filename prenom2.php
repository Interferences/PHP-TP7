<?php
class Personne {
	protected $id;
	protected $nom;
	protected $prenom;

  function __construct($id,$nom,$prenom) {
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
  }

  function setNom($nom) {
    $this->nom = $nom;
  }

  function getNom() {
   return $this->nom;
  }

  function setPrenom($prenom) {
   $this->prenom = $prenom;
  }

  function getPrenom() {
    return $this->prenom;
  }

  function __toString(){
    return "id :".$this->id. "nom :".$this->nom. "prenom : ".$this->prenom;
  }
}

  class Contact extends Personne{
    protected $mail;
    function __construct($id,$nom,$prenom,$mail) {
      parent:: __construct($id,$nom,$prenom);
      $this->mail=$mail;
    }
    
    function __toString(){
    return parent::__toString()."  ". "mail : ".$this->mail;
    }
  }
$eleve = new Contact(3,'SIMONO','Dora','dora.simon@hmail.com');
echo $eleve;
?>