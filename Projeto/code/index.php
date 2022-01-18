

<?php
    require_once 'connection/conecta_banco.php';

    $stmt = $conn->prepare("SELECT * FROM drink");
    $stmt->execute();
    $listaDrink = $stmt->fetchAll();
    // listar os dados 
    //  echo "<br><a href='incluirUsuario.php'>Incluir</a>";
    //  echo "<h2>Nomes dos Usuarios</h2>";
    // foreach($listaDrink as $k=>$v) {
    // echo "<a href='alterarUsuario.php?id=".$v['id']."'>Alterar</a> ou <a 
    // href='excluirUsuarioOK.php?id=".$v['id']."'>Excluir</a> --> " . $v['nome'] ."<br>";
    // }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>IDrinks</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../images/logo-copo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-upper case fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"> <Img class='logo' src='../images/logo.png'></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Drinks</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"  data-bs-toggle="modal" data-bs-target="#modalCarrinho"> <i class="fas fa-shopping-cart fa-fw"></i> Carrinho</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center" style='margin-bottom: -130px;'>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style='background: #000!important;'>
                <div class="carousel-item active" >
                    <img src="../images/drinkcarrossel1.jpg" class="d-block w-100 carousel-foto" alt="">
                    <div class="carousel-caption d-none d-md-block" style='margin-bottom: 60px;'>
                        <h2 class="page-section-heading text-center text-uppercase mb-0" style='font-size: 60px;'>SEUS DRINKS COM OS MELHORES PREÇOS</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/drinkcarrossel2.jpg" class="d-block w-100 carousel-foto" alt="">
                    <div class="carousel-caption d-none d-md-block" style='margin-bottom: 60px;'>
                        <h2 class="page-section-heading text-center text-uppercase mb-0" style='font-size: 60px;'>DESCONTOS IMPERDÍVEIS!</h2>
                        <h2 class="page-section-heading text-center text-uppercase mb-0" style='font-size: 60px;'>SÓ HOJE!</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
</div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio"> 
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Drinks</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Grid Items-->
                <div class="row justify-content-center">
                        <?php foreach($listaDrink as $key=>$value): ?>
                            <div class="col-md-3 mb-5">
                            <div class="portfolio-item mx-auto" id='abrirModal<?php echo $value['id'];?>' data-bs-toggle="modal" data-bs-target="#modalDrink" data-id="<?php echo $value['id'];?>" data-nome="<?php echo $value['nome'];?>">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=  $value['fotoDrink']; ?>" alt="..." />
                            </div>
                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Endereço</h4>
                        <p class="lead mb-0">
                            AV. Brigadeiro Luís Antônio, 917 
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Siga-nos nas Redes Sociais </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Sobre Nós</h4>
                        <p class="lead mb-0">
                            <a href="#">Cidades atendidas</a>
                            <br>
                            <a href="#">Política de privacidade</a>
                            <br>
                            <a href="#">Termo de uso</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
        </div>
        <!-- Modal Drink-->
        <div class="portfolio-modal modal fade" id="modalDrink" tabindex="-1" aria-labelledby="modalDrink" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id='nomeDrinkModal'></h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <img style='max-width: 65%;' id='fotoModal' class="img-fluid rounded mb-5" src="../images/drinks/drinksModal/cosmopolitan.jpg" alt="..." />
                                    <h2 class="text-secondary text-uppercase mb-0" id='valorModal'></h2>
                                    <p class="mb-4" id='descricaoModal'></p>
                                    <button class="btn btn-primary  " id='addCarrinhoBtn' href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-cart-plus fa-fw"></i>
                                        Adicionar ao Carrinho
                                    </button>
                                    <div class="centerQtd">
                                        <div class="input-group" style='background-color: #27dbb7;border-radius: 0.5rem;'>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quantidade">
                                                    <span class="fas fa-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="quantidade" id='quantidadeDrink' class="form-control input-number" value="1" min="1" max="50">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quantidade">
                                                    <span class="fas fa-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        </div>
        <!-- Modal Carrinho-->
        <div class="portfolio-modal modal fade" id="modalCarrinho" tabindex="-1" aria-labelledby="modalCarrinho" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Carrinho</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 col-xl-7">
                                            <ol id='listaCarrinho' class="list-group list-group-numbered">
                                            </ol>
                                        </div>
                                    </div>
                                    <h2 class="text-secondary text-uppercase mb-0" ></h2>
                                    <p class="mb-4"></p>
                                    <button class="btn btn-primary" id='concluirCarrinho'  data-bs-dismiss="modal">
                                        <i class="fas fa-check fa-fw"></i>
                                        Concluir Compra
                                    </button>  
                                    <button class="btn btn-danger" id='excluirCarrinho' data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cancelar Compra
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

<script type="text/javascript">



$('#concluirCarrinho').click(function()
    {
        $.ajax({
            url: "indexExcluirCarrinho.php",
            type: "post",
            data: '',
            success: function (response) {

             alert('Pedido concluído com sucesso!');

            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });
    });

$('#excluirCarrinho').click(function()
    {

        if(confirm('tem certeza que deseja cancelar a compra?'))
        {
            $.ajax({
                url: "indexExcluirCarrinho.php",
                type: "post",
                data: '',
                success: function (response) {

                    //$('#modalCarrinho').modal('toggle');
                    // location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
            });
        }

    });

$('#modalCarrinho').on('show.bs.modal', function (event) {                 
        $('#listaCarrinho').html('')
        var button = $(event.relatedTarget);
        var drinkId = button.data('id');
        window.drinkId = drinkId;

        $.ajax({
            url: "indexListarCarrinho.php",
            type: "post",
            data: '',
            success: function (response) {
                console.log(response);
                 
                var objeto = JSON.parse(response);
              
                 console.log(objeto);

                var lista = '';

                for (let i = 0; i < objeto.length; i++) 
                {
                    var item = 
                    '<li class="list-group-item d-flex justify-content-between align-items-start">'+
                    '<div class="ms-2 me-auto"><div class="fw-bold">' + objeto[i].nome +'</div>' + 'R$' + objeto[i].valor + ',00'
                    +
                    '</div><span class="badge bg-primary rounded-pill">' + objeto[i].quantidade +'</span>  </li>';
                                                  
                    $('#listaCarrinho').append(item)

                }
            },

            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });
    })

    $('#addCarrinhoBtn').click(function()
    {
        var drinkId = window.drinkId;
        var quantidade = $('#quantidadeDrink').val();
        var valor = window.valorDrink;

        $.ajax({
            url: "indexAdicionarCarrinho.php",
            type: "post",
            data: 'drinkId=' + drinkId + '&quantidade=' + quantidade + '&valor=' + valor,
            success: function (response) {
                // var objeto = JSON.parse(response);
                // console.log(objeto);
                // json = objeto[0];

                $('#quantidadeDrink').val(1);
                $('#modalDrink').modal('toggle');
            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });

            //close no modal
    });

    $('#modalDrink').on('show.bs.modal', function (event) {                 
        var button = $(event.relatedTarget);
        var drinkId = button.data('id');
        window.drinkId = drinkId;

        $.ajax({
            url: "indexController.php",
            type: "post",
            data: 'drinkId=' + drinkId,
            success: function (response) {
                var objeto = JSON.parse(response);
                // console.log(objeto[0]);
                json = objeto[0];
            
                $('#nomeDrinkModal').text(json.nome);
                $('#descricaoModal').text(json.descricao);
                $('#valorModal').text('R$'+json.valor+',00');
                $('#fotoModal').attr("src",json.fotoMateriais);
                window.valorDrink = json.valor;
            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });
    })


    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('O numero minimo foi alcançado');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('O maximo numero foi alcançado');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        //permite: backspace, delete, tab, escape, enter e .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        //verifica que seja um numero 
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>