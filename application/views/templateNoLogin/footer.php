<!-- Modal psara contacto -->
<div class="modal fade" id="modalContactos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-xs-12">
                            <h4 class="modal-title"> ¿Tienes dudas o quieres comunicarte con nosotros?</h4>
                            <p>Elige el medio que más te convenga, te sugerimos Email</p><br>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="card-body contactos">
                                <img src="<?= base_url('assets/img/gmail.png'); ?>" alt="" class="img-fluid imagenServicios"><br>
                                <small class="text-muted">Email</small><br>
                                <a href="mailto:amvprosoft@gmail.com"><small class="text-muted textoContactos">amvprosoft@gmail.com</small></a>                                           
                            </div>            
                        </div>
                        <div class="col-md-4 ">
                            <div class="card-body contactos">
                                <img src="<?= base_url('assets/img/whatsapp.png'); ?>" alt="" class="img-fluid imagenServicios"><br>
                                <small class="text-muted">WhatsApp</small><br>
                                <a href=""><small class="text-muted textoContactos">Escribennos</small></a>                          
                            </div>            
                        </div>
                        <div class="col-md-4 ">
                            <div class="card-body contactos">
                                <img src="<?= base_url('assets/img/facebook.png'); ?>" alt="" class="img-fluid imagenServicios"><br>
                                <small class="text-muted">Facebook</small><br>
                                <a href=""><small class="text-muted textoContactos">Contactanos</small></a>                                                  
                            </div>            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cantactos text-center">
                <h4 class="titulo">Contactanos</h4>
                <img src="<?= base_url('assets/img/facebook.png');?>" alt="Facebook" class="imgIconosUno">
                <img src="<?= base_url('assets/img/twitter.png');?>" alt="Twitter" class="imgIconos">
                <img src="<?= base_url('assets/img/youtube1.png');?>" alt="YouTube" class="imgIconos">
            </div>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/servicios.js');?>"></script>
    <script src="<?= base_url('assets/js/cursos.js');?>"></script>
</body>
</html>