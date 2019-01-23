<?php
session_start();

?>
<!doctype html>
<!-- HEAD -->
<?php include('head.php');?>
<!-- /HEAD -->
<body>
    <!-- SideBar -->
    <?php include('sidebar.php');?>
    <!-- /SideBar -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
        <!-- Top Menu -->
        <?php include('top-menu.php');?>
        <!-- /Top Menu -->

        <!-- Conteúdo -->
        <!-- FORM -->
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="paddingleft50 top50">
                    <h1>Cadastro Prospect</h1>
                    <form action="envia-cad-prosp.php" method="post" class="paddingtop50 paddingbottom50">
                        <div class="form-group-inner">
                            <label>NOME</label>
                            <input type="text" name="nomeProspect" class="form-control" placeholder="Nome" />
                        </div>
                        <div class="form-group-inner">
                            <label>Email</label>
                            <input type="email" name="emailProspect" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group-inner">
                            <label>Telefone</label>
                            <input type="text" name="telProspect" class="form-control" placeholder="Telefone" />
                        </div>
                        <div class="form-group-inner">
                            <label>Empresa</label>
                            <input type="text" name="empresaProspect" class="form-control" placeholder="Empresa" />
                        </div>
                        <div class="form-group-inner">
                            <label>Mensagem</label>
                            <textarea class="form-control" name="mensagemProspect" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="login-btn-inner">
                            <div class="inline-remember-me">
                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">CADASTRAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /FORM -->
        <!-- /Conteúdo -->

        <!-- Footer -->
        <?php include('footer.php');?>
        <!-- /Footer -->
    </div>

    <?php include('scripts.php');?>
</body>

</html>