<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// define variables and set to empty values
$nomErr = $prenomErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
$nom = $prenom = $email = $phone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nomErr = "Nom obligatoire";
    } else {
        $nom = test_input($_POST["user_name"]);
    }

    if (empty($_POST["user_firstname"])) {
        $prenomErr = "Prénom obligatoire";
    } else {
        $prenom = test_input($_POST["user_firstname"]);
    }

    if (empty($_POST["user_email"])) {
        $emailErr = "Email obligatoire";
    } else {
        $email = test_input($_POST["user_email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["user_phone"])) {
        $phoneErr = "Téléphone obligatoire";
    } else {
        $phone = test_input($_POST["user_phone"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "Merci de choisir le sujet de votre message";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["user_message"])) {
        $messageErr = "Merci de rentrer votre message";
    } else {
        $message = test_input($_POST["user_message"]);
    }
}
?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name">
            <span class="error">* <?php echo $nomErr; ?></span>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname">
            <span class="error">* <?php echo $prenomErr; ?></span>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
            <span class="error">* <?php echo $emailErr; ?></span>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone">
            <span class="error">* <?php echo $phoneErr; ?></span>
        </div>
        <div>
            <label>Sujet :</label>
            <select name="subject" id="user_subject">
                <option value="">--Choisissez un sujet--</option>
                <option value="J'ai une question">J'ai une question</option>
                <option value="Retour d'une commande">Retour d'une commande</option>
                <option value="J'ai perdu mon mot de passe">J'ai perdu mon mot de passe</option>
            </select>
            <span class="error">* <?php echo $subjectErr; ?></span>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
            <span class="error">* <?php echo $messageErr; ?></span>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

<?php

if ($prenom != "" AND $nom != "" AND $subject != "" AND $email != "" AND $phone != "" AND $message != "") {
    echo
        '
        Merci ' . $prenom . ' ' . $nom . ' de nous avoir contacté à propos de “' . $subject . '”. <br/>
        
        Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :
        <br/>
        
        ' . $message . '
    ';
};

?>