<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Questionnaire de satisfaction Amazin</title>
</head>
<div class="container" style="font-weight:bold;color:gray;font-family:Roboto;">

<p>Merci pour votre pour votre notation :</p>
<p><?= star().circle() ?></p>
<?php
$case = isset($_POST['case']) ? $_POST['case'] : NULL;
$q3 = isset($_POST['q3']) ? $_POST['q3'] : NULL;
if($case && $q3 == -1){ ?>
<p>Vous serez rappelé au : <?= phone() ?></p>
<?php } ?>
<a href="index.php" role="button" class="btn btn-outline-secondary">Retour à la page d'accueil</a>
</div>