<div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Selecione o Campo
        </button>
        <ul class="dropdown-menu col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"
            aria-labelledby="dropdownMenuButton1">

            <li><a class="dropdown-item">Codigo</a></li>
            <li><a class="dropdown-item">Cargo</a></li>
            <li><a class="dropdown-item">Tipo</a></li>
            <li><a class="dropdown-item">Nome</a></li>
            <li><a class="dropdown-item">Nome Usual</a></li>

        </ul>
    </div>

    Tipo de Busca:

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Selecione a Busca
        </button>
        <ul class="dropdown-menu col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"
            aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item">Comeca com</a></li>
            <li><a class="dropdown-item">Igual a</a></li>
            <li><a class="dropdown-item">Termina com</a></li>
            <li><a class="dropdown-item">Contem</a></li>
            <li><a class="dropdown-item">Contem as partes</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> <button type="button"
                class="btn btn-primary col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">Buscar</button> </div>
    </div>
    </br>
    Selecione a Busca

    <form action="/test2" method="post">
        @csrf
        <select name="select_data" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</div>