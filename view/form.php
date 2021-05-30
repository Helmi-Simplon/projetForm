<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <title>Questionnaire de satisfaction Amazin</title>

</head>

<body>

    <div class="container" style="font-weight:bold;color:gray;font-family:Roboto;">
        <header style="height: 150px;padding-top:15px;">
            <h1 style="font-weight:bold;background:black;color:whitesmoke;width:fit-content;box-shadow:8px 8px 0px gray;">AMAZIN</h1>
            <h2 style="background:white;color:gray;width:fit-content;box-shadow:8px 8px 0px gray;">Questionnaire de satisfaction</h2>
        </header>
        <form method="POST" action="index.php">
        
            <div class="mb-3">
                <label for="name" class="form-label shadow-lg success">Nom</label><span class="text-danger">* <?php echo $nameErr;?></span>
                <input type="text" name="name" class="form-control" id="name"  style="width:fit-content;" value="<?php echo $_POST['name'];?>">
                
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom</label><span class="text-danger">* <?php echo $firstnameErr;?></span>
                <input type="text" name="firstname" class="form-control" id="surname"  style="width:fit-content;" value="<?php echo $_POST['firstname'];?>">
                
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label ">Téléphone</label><span class="text-danger">* <?php echo $phoneErr;?></span>
                <input type="phone" name="phone" class="form-control" id="phone"  style="width:fit-content;" value="<?php echo $_POST['phone'];?>">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date de l'achat</label><span class="text-danger">* <?php echo $dateErr;?></span>
                <input type="date" name="date" class="form-control" id="date"  style="width:fit-content;" value="<?php echo $_POST['date'];?>">
            </div>
            <div class="row">
                <div class="col shadow-sm p-3 mb-5 bg-body rounded">
                <label class="form-check-label" for="q1">L'agent a-t-il été agréable ?</label><br><br>

                <input class="form-check-input" name="q1" type="radio" value="2" checked>OUI<!-- rapporte 2 point -->
                <input class="form-check-input" name="q1" type="radio" value="0">NON<!-- rapporte 0 point -->
                <input class="form-check-input" name="q1" type="radio" value="1">SANS AVIS <!-- rapporte 1 point -->

                </div>

                <div class="col shadow-sm p-3 mb-5 bg-body rounded">
                <label class="form-check-label" for="q2">L'agent a-t-il compris votre problème ?</label><br><br>
                <input class="form-check-input" name="q2" type="radio" value="2" checked>OUI</a> <!-- rapporte 2 point -->
                <input class="form-check-input" name="q2" type="radio" value="0">NON</a> <!-- rapporte 0 point -->
                <input class="form-check-input" name="q2" type="radio" value="1">SANS AVIS</a> <!-- rapporte 1 point -->
                </div>


                <div class="col shadow-sm p-3 mb-5 bg-body rounded">
                <label class="form-check-label" for="q3">L'agent a-t-il résolu votre problème ?</label><br><br>
                <input class="form-check-input" name="q3" type="radio" value="1" checked>OUI <!-- rapporte 1 point -->
                <input class="form-check-input" name="q3" type="radio" value="-1">NON<!-- rapporte -1 point -->
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="comment" class="form-label shadow-lg success">Dites-nous en plus :</label>
                    <textarea class="form-control" name="comment" id="comment" rows="5" cols="50" ><?php echo $_POST['comment'];?></textarea>
                </div>

                <div class="mb-3">
                Acceptez vous d'être rappelé?
                <input type="checkbox" name="case" value="true">
                
            </div>
            </div>
            <div style="margin-top:20px;">
                <button type="submit" class="btn btn-secondary">ENVOYER</button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>