<?php
session_start();

// Vérifier que le formulaire est bien soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifier que les champs existent
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = trim($_POST['email']);
        $password = $_POST['password'];

        try {
            // Connexion à la base de données (à adapter)
            $pdo = new PDO('mysql:host=localhost;dbname=ma_base;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Rechercher l'utilisateur
            $stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérifier l'utilisateur
            if ($user && password_verify($password, $user['password'])) {

                // Connexion réussie
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                header('Location: ../dashboard.php');
                exit;

            } else {
                // Mauvais identifiants
                $_SESSION['error'] = "Email ou mot de passe incorrect.";
                header('Location: ../login.php');
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

} else {
    // Accès direct interdit
    header('Location: ../login.php');
    exit;
}