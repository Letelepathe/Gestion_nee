<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <?php include(__DIR__."/navigation/styles.php");?>
  </head>

  <body>
  <?php include(__DIR__."/navigation/Navbars.php");?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ajoute enfants</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      > nomComplet
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      > nomComplet
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                  <div class="row">
                    
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label
                                        for="category"
                                        >Lieu de naissances</label
                                    >
                                    <select
                                        class="custom-select tm-select-accounts"
                                        id="category"
                                    >
                                        <option selected>Select lieu de naissance</option>
                                        <option value="H">Kinsahsa</option>
                                        <option value="F">Lubumbashi</option>
                                    </select>
                                    </div>
                                <label
                                for="expire_date"
                                >Date de naissance
                                </label>
                                <input
                                id="expire_date"
                                name="date_nais"
                                type="text"
                                class="form-control validate"
                                data-large-mode="true"
                                />
                                
                                
                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label
                                        for="category"
                                        >Sexe</label
                                    >
                                    <select
                                        class="custom-select tm-select-accounts"
                                        id="category"
                                    >
                                        <option selected>Select category</option>
                                        <option value="H">Garçcons</option>
                                        <option value="F">Filles</option>
                                    </select>
                                    </div>
                                <label
                                for="expire_date"
                                >Tailles
                                </label>
                                <input
                                id="expire_date"
                                name="expire_date"
                                type="text"
                                class="form-control validate"
                                data-large-mode="true"
                                />
                                
                                
                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label
                                        for="category"
                                        >Couleurs yeux</label
                                    >
                                    <select
                                        class="custom-select tm-select-accounts"
                                        id="category"
                                    >
                                        <option selected>Select couleurs yeux</option>
                                        <option value="Noir">Noir</option>
                                        <option value="Bleu">Bleu</option>
                                        <option value="Gris">Gris</option>
                                        <option value="Marron">Marron</option>
                                        <option value="Jaune">Jaune</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label
                                            for="category"
                                            >Types naisssances</label
                                        >
                                        <select
                                            class="custom-select tm-select-accounts"
                                            id="category"
                                        >
                                            <option selected>Select Types naisssances</option>
                                            <option value="Noir">Cesarien</option>
                                            <option value="Bleu">Normal</option>
                                        </select>
                                        </div>
                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label
                                        for="category"
                                        >Groupe sanguains</label
                                    >
                                    <select
                                        class="custom-select tm-select-accounts"
                                        id="category"
                                    >
                                        <option selected>Select Groupe sangauins</option>
                                        <option value="H">O</option>
                                        <option value="F">A</option>
                                        <option value="H">O+</option>
                                        <option value="F">A+</option>
                                        <option value="H">O++</option>
                                        <option value="F">A+++</option>
                                    </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label
                                            for="category"
                                            >Accoucheuse</label
                                        >
                                        <select
                                            class="custom-select tm-select-accounts"
                                            id="category"
                                        >
                                            <option selected>Select Accoucheuse</option>
                                            <option value="Belinda">Belinda</option>
                                        </select>
                                        </div>
                                <label
                                for="expire_date"
                                >Code parent
                                </label>
                                <input
                                id="expire_date"
                                name="expire_date"
                                type="text"
                                class="form-control validate"
                                data-large-mode="true"
                                />
                            </div> 
                        </div>
                       
                        
                        
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase"><i class="fa fa-plus"></i> Ajoutez enfants </button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include(__DIR__."/footers/footer.php");?> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
