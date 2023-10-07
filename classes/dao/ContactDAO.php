
<?php
require_once 'ContactModel.php'
class ContactDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour insérer un nouveau contact dans la base de données
    public function createContact(ContactModel $contact) {
        $sql = "INSERT INTO contacts (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$contact->getNom(), $contact->getPrenom(), $contact->getEmail(), $contact->getTelephone()]);
        return $stmt->rowCount(); // Le nombre de lignes affectées
    }

    // Méthode pour récupérer un contact par son ID
    public function getById($id) {
        $sql = "SELECT * FROM contacts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
       
    }

    // Méthode pour récupérer la liste de tous les contacts
    public function getAll() {
        $sql = "SELECT * FROM contacts";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour mettre à jour un contact
    public function update(ContactModel $contact) {
        $sql = "UPDATE contacts SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$contact->getNom(), $contact->getPrenom(), $contact->getEmail(), $contact->getTelephone(), $contact->getId()]);
        return $stmt->rowCount();
    }

    // Méthode pour supprimer un contact par son ID
    public function deleteById($id) {
        $sql = "DELETE FROM contacts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }
}
?>
