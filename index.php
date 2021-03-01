<!DOCTYPE html>
<html lang="fr">
<head>
	<title>TP1</title>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

	<script>

	function VerifyPasswords() 
	{
	    var password = document.getElementById("password").value;
	    var confirmation = document.getElementById("confirmation").value;

	    if(password != confirmation) 
	    {   
	        alert("Attention, les mots de passe entrés sont différents !"); 
	    }
	}

	</script>

<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">TP 1 - Jolivel Corentin</p>
</header>

<div class="container" style="text-align: center; margin: auto; margin-left: auto;margin-right: auto;  display: flex; justify-content: center;">
<div class="col-md-6 col-lg-6" style="margin-top: 4%">
        <h4 class="mb-3">Formulaire</h4>
        <form class="needs-validation" method="post" onsubmit="VerifyPasswords()">
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom"  value="" >	
            </div>

            <div class="col-sm-6">
              <label  class="form-label">Prénom</label>
              <input type="text" class="form-control" id="prenom" value="">
            </div>

              <div class="col-sm-6">
              <label  class="form-label">Adresse</label>
              <input type="text" class="form-control" id="Adresse" placeholder="" value="" required>
            </div>

                        <div class="col-sm-6">
              <label class="form-label">CP</label>
              <input type="text" class="form-control" id="CP" placeholder="" value="" required>

            </div>
                        <div class="col-12">
              <label class="form-label">Ville</label>
              <input type="text" class="form-control" id="Ville" placeholder="" value="" required>
            </div>

                        <div class="col-sm-6">
              <label  class="form-label">Tel</label>
              <input type="text" class="form-control" id="Tel" placeholder="" value="" required>

            </div>

                        <div class="col-sm-6">
              <label  class="form-label">Email</label>
              <input type="text" class="form-control" id="Email" placeholder="" value="" required>

            </div>

            <div class="col-sm-6">
              <label  class="form-label">Civilité</label>
              <select class="form-select" id="civ" required>
                <option value="">Choose...</option>
                <option>Homme</option>
                <option>Femme</option>
              </select>
 
            </div>

            <div class="col-sm-6">
              <label  class="form-label">Login</label>
              <input type="text" class="form-control" id="Login" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

                                    <div class="col-sm-6">
              <label  class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="" value=""  minlength="5" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

                                    <div class="col-sm-6">
              <label  class="form-label">Confimer le mot de passe</label>
              <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="" value="" minlength="5" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

        </div>
        <div style="margin-top: 4%">
          <input class="btn-lg btn-primary" type="submit">
		</div>	
         </form>
     </div>
 </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>