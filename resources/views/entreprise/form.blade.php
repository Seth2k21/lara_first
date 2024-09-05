
    <form method="POST" action="{{route('entreprises.store')}}" >
    @csrf
    <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label for="raison" class="form-label">Raison sociale</label>
                      <input type="text" name="raison_sociale" class="form-control" id="raison">
                    </div>
                    <div class="mb-3">
                      <label for="ifu" class="form-label">IFU</label>
                      <input type="number" name="ifu" minlength="13" class="form-control" id="ifu">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </form>


