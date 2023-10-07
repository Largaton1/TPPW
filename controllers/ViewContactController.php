<?php
class ViewContactController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function viewContact($contactId) {
        // Récupérer le contact à afficher en utilisant son ID
     

        // Inclure la vue pour afficher les détails du contact
       
    }
}
?>

