<?php
class ContactModel {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    
    //Rajouter le constructeur, les getters et setters

   public function __construct ($nom,$prenom,$telephone,$email){

    $this->nom =$nom ;
    $this->prenom =$prenom ;
    $this->telephone =$telephone ;
    $this->email =$email ;

   }


   ///// GETTER

   public function getNom (){

    return $this->nom;

   }
   public function getPrenom (){

    return $this->prenom;

   }
   public function getTelephone (){

    return $this->telephone;

   }
   public function getEmail (){

    return $this->email;

   }

////// SETTER 

   public function setNom ($nom){

    return $this->nom = $nom;

   }
   public function setPrenom ($prenom){

    return $this->prenom = $prenom;

   }
   public function setTelephone ($telephone){

    return $this->telephone = $telephone;

   }
   public function setEmail ($email){

    return $this->email = $email;

   }

public function creerContact($nom,$prenom,$telephone,$email){
    global $conn;
    $sql = "INSERT INTO contacts (nom, prenom, telephone, email) VALUES (?, ?,?,?)";
    $stmt = $conn -> prepare ($sql);
    return $stmt -> execute ([$nom, $prenom, $telephone, $email]);
    }
    
}

public function lireContact ($id){
    global $conn;
    $sql = "SELECT * FROM contacts WHERE id = "?"";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute ([$id]);
    return $stmt -> fetch  (PDO::FETCH_ASSOC);
}

public function updateContact($id, $nom, $prenom, $telephone, $adresse){

    
    $sql = "UPDATE FROM contacts SET nom = ?, prenom = ?, telephone=?, email = ? WHERE  id=?";
    $stmt = $conn -> prepare ($sql);
    $stmt -> execute ([$nom, $prenom, $telephone, $email, $id]);
}

public function supprimerContact ($id ){

    $sql = "DELETE FROM contacts WHERE id = ?";

    
}






    // Vous pouvez ajouter des méthodes supplémentaires ici pour manipuler les données du contact
}
?>
