<?php
class EditContactController {
    private $contactDAO;

    public function __construct(ContactDAO $contactDAO) {
        $this->contactDAO = $contactDAO;
    }

    public function editContact($contactId) {
        
        }

        // Inclure la vue pour afficher le formulaire de modification du contact
        include('views/edit_contact.php');
    }
}
?>

