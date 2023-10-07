<?php
class HomeController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function index() {
        // Récupérer la liste de tous les contacts depuis le modèle
       

        // Inclure la vue pour afficher la liste des contacts
       
    }
}
?>
