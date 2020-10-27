<div class="container p-4">
    <div class="title-viewmore">
        <h2 class="anime">Conheça mais casas a venda</h2>
        <p>Condomínio Terras de São José em Itu a 50 min. de São Paulo.</p>
    </div>
</div>

<div class="view-more-gallery">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa1.png" alt="CASA - AMPLO TERRENO E ÓTIMA LOCALIZAÇÃO">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa2.png" alt="CASA - MINIMALISTA">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa3.png" alt="CASA - RÚSTICA VILA ITALIANA">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa4.png" alt="CASA - CLASSE COM ARES DE FAZENDA">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa5.png" alt="CASA - LINDA VISTA E AMPLO ESPAÇO">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 p-0">
                <div class="houses">
                    <img class="img-fluid img-house" src="assets/images/casa6.png" alt="CASA - COLONIAL QUE SURPREENDE">
                    <div class="overlay">
                        <a class="wpp-link" href="#" data-toggle="modal" data-target="#modalContact"> CONHEÇA A CASA <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>IDENTIFIQUE-SE E FALE COM O COTRIM</h4>
                <p>Preencha o formulário abaixo e entraremos em contato</p>
                <form action="api/savebd.php" method="POST">
                    <div class="form-group">
                        <label for="inputNomeModal">Nome</label>
                        <input type="text" name="inputNameModal" class="form-control" id="inputNome">
                    </div>
                    <div class="form-group">
                        <label for="inputTelModal">Telefone/WhatsApp</label>
                        <input type="text" name="inputPhoneModal" class="form-control" id="inputTel">
                    </div>
                    <div class="btn-area">
                        <button type="submit" class="btn btn-primary">Abrir o WhatsApp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>