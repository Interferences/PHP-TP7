<?php
class Personne {
	protected $id;
	protected $nom;
	protected $prenom;

  function __construct($id,$nom,$prenom) {
    this->id=$id;
    this->nom=$nom;
    this->prenom=$prenom;
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

$eleve = new Personne(2,'SIMONOVIC','Izy');
echo $eleve;
?>