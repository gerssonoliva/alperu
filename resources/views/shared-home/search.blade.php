<div class="container-fluid p-0 px-md-3">
  <div class="col-12 col-md-10 mx-auto p-0">
    <div class="position-relative text-white d-flex align-items-center">
      <div class="wrap-search-content mx-auto">
        <div class="wrap-search py-4">
          <form class="form-search" method="POST" action="{{ route('buscar-paquetes') }}">
            @csrf
            <div class="input-group">
              <input type="text" name="search_text" class="form-control" placeholder="¿A donde quieres ir?"
                aria-label="¿A donde quieres ir?">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary f-montserrat fw-700 px-4">
                  <i class="fa fa-search"></i>
                  Buscar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>