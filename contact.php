<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire de contact - Résultats</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<?php
// Vérifier si tous les champs ont été remplis
if (empty($_GET["name"]) || empty($_GET["lastname"]) || empty($_GET["email"]) || empty($_GET["phone"]) || empty($_GET["adress"]) || empty($_GET["codepostal"])) {
    echo "<p>Champs manquants</p>";
} else {
    // Générer le tableau si tous les champs ont été remplis
    ?>
    <h2>Informations reçues :</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo $_GET["name"]; ?></td>
            <td><?php echo $_GET["lastname"]; ?></td>
            <td><?php echo $_GET["email"]; ?></td>
            <td><?php echo $_GET["phone"]; ?></td>
            <td><?php echo $_GET["adress"]; ?></td>
            <td><?php echo $_GET["codepostal"]; ?></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>
