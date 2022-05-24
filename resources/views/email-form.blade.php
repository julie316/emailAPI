<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Email - Form</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">Bienvenue sur notre plateforme d'envoi des mails</span>
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container mt-3">
        
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Nom du destinataire:</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Entrer le nom...">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email du destinataire:</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Entrer l'adresse mail...">
                </div>
            </div>
            <div class="form-group">
                <label for="">Message:</label>
                <textarea name="message" id="" cols="15" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Lien vers un site web 1:</label>
                    <input type="text" name="url1" id="" class="form-control" placeholder="Entrer un lien...">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Lien vers un site web 2:</label>
                    <input type="text" name="url2" id="" class="form-control" placeholder="Entrer un lien...">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Lien vers un site web 3:</label>
                    <input type="text" name="url3" id="" class="form-control" placeholder="Entrer un lien...">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Image:</label>
                    <input type="text" name="image" id="" class="form-control" placeholder="Entrer un lien de l'image...">
                </div>
            </div>
           
            <input type="submit" value="Envoyer" class="btn btn-primary">
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>