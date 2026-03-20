<?php


echo '<h2>Connexion</h2>';

echo '<form action="login.php" method="POST">';
echo 'Email:<br><input type="email" name="email" required><br><br>';
echo 'Mot de passe:<br><input type="password" name="password" required><br><br>';
echo '<button type="submit">Se connecter</button>';
echo '</form>';