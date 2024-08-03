<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Crée un compte - Gestion de naissances</title>
    <?php include(__DIR__."/navigation/styles.php");?>
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <form action="CreateAccount" method="POST" enctype="multipart/form-data" class="tm-signup-form row">
              <h2 class="tm-block-title">Postes</h2>
              <p class="text-white">Vous occupez quel postes</p>
              <select class="custom-select" name="postes">
                <option value="0">Select account</option>
                <option value="Medecin">Medecin</option>
                <option value="Infirmier">Infirmier</option>
              </select>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
          <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" name="photo" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Information</h2>
             <div class="row">

             
                <div class="form-group col-lg-6">
                  <label for="nom">Nom</label>
                  <input
                    id="nom"
                    name="nom"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                  <div class="form-group col-lg-6">
                    <label for="prenom">Prenom</label>
                    <input
                      id="prenom"
                      name="prenom"
                      type="text"
                      class="form-control validate"
                    />
                    </div>
                  <div class="form-group col-lg-6">
                    <label for="sexe">sexe</label>
                    <select class="custom-select" name="sexe">
                      <option value="0">Select account</option>
                      <option value="H">Homme</option>
                      <option value="F">femme</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-6">
                  <label for="special">specialité</label>
                  <select class="custom-select" name="special">
                    <option value="0">Select account</option>
                    <option value="Ginechologue">Ginechologue</option>
                    <option value="Docteurs">Docteurs</option>
                  </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">mot de passe</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Confirmation mot de passe</label>
                  <input
                    id="password2"
                    name="password2"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">TEL</label>
                  <input
                    id="phone"
                    name="tel"
                    type="tel"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="phone">Libelle</label>
                  <textarea name="libelle"
                   id="photo" 
                   col=50 
                   row=50
                    class="form-control validate">

                  </textarea>
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Delete Your Account
                  </button>
                  <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login">
                                Deja un compte, <b>Se connecter</b>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include(__DIR__."/footers/footer.php");?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
