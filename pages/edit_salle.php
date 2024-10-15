<form method="post">
              <div class="card-body">
                <p class="text-uppercase text-sm">Salle Information</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nom Salle</label>
                      <input class="form-control" type="text" value="" name="nom_salle">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Equipement</label>
                      <input class="form-control" type="text" value="" name="equipement">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Etage</label>
                      <select class="form-select" name="etage">
                        <option value="0">Rez de chaussée</option>
                        <option value="1">Etage 1</option>
                        <option value="2">Etage 2</option>
                        <option value="3">Etage 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Capacite Eleve</label>
                      <input class="form-control" type="number" value="" name="capacite" min="10" max="30">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Nombre Equipement </p>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nombre Chaise</label>
                      <input class="form-control" type="number" min="10" max="15" name="nombre_chaise">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nombre Bureau</label>
                      <input class="form-control" type="number" min="1" max="2" name="nombre_bureau">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nombre Tableau</label>
                      <input class="form-control" type="number" min="1" max="2" name="nombre_tableau">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <div class="row">
                  <input class="btn btn-primary" type="submit" value="Ajouter" name="ajouter">
                </div>
              </div>
            </form>