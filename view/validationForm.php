<p>Merci pour votre pour votre notation :</p>
<p><?= star().circle() ?></p>
<?php
$case = isset($_POST['case']) ? $_POST['case'] : NULL;
$q3 = isset($_POST['q3']) ? $_POST['q3'] : NULL;
if($case && $q3 == -1){ ?>
<p>Vous serez rappelé au : <?= phone() ?></p>
<?php } ?>