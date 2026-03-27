<?php
require "../vendor/autoload.php" ;
use App\Database ;
session_start();


// Vérifier que le formulaire est bien soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifier que les champs existent
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = trim($_POST['email']);
        $password = $_POST['password'];

        try {
            // Connexion à la base de données (à adapter)
            $pdo = Database::getConnection() ;

            // Rechercher l'utilisateur
            $stmt = $pdo->prepare("SELECT email, password_hash FROM administrateurs WHERE email = :email");
            $stmt->execute(['email' => $email]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifier l'utilisateur
            if ($user && password_verify($password, $user['password_hash'])) {

                // Connexion réussie
                $_SESSION['email'] = $user['email'];

                header('Location: dashboard.php');
                exit;

            } else {
                // Mauvais identifiants
                $_SESSION['error'] = "Email ou mot de passe incorrect.";
                header('Location: login.php');
                exit;
            }

        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }



    } else {
        // Champs manquants
        $_SESSION['error'] = "Veuillez remplir tous les champs.";
        header('Location: ../login.php');
        exit;
    }

    password_verify();
    session_start(); $_SESSION['admin_id'] = $user['id'];

} else {
    // Accès direct interdit
    header('Location: ../login.php');
    exit;
}
session_start();
$_SESSION['admin_id'] = $user['id'];

;
// Vérifier que le formulaire est bien envoyé
if ($SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

else {
    // Échec
    header("Location: login.php?erreur=1");
    exit;
}