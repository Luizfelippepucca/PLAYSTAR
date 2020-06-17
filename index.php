<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PlayStar</title>
</head>
<body>
    <header>
        
        <nav class="menu">
                        <label class="logo" ><a href="index.html"><img src="img/logo.png" alt="logo"  style="width: 150px;"></a></label>
                       
                        <label for="rd_home">Home</label>
                         
                       
                        <label for="rd_quemSomos" >Quem somos</label>
                    
                        
                        <label for="rd_agenda" >Jogos</label>
                    
                        
                        <label for="rd_Contato" >Contato</label>
         </nav>
    </header>
    <div class="scroll">
        <input type="radio" name="grupo" id="rd_home" checked class="rd_cor">
        <input type="radio" name="grupo" id="rd_quemSomos" class="rd_cor">
        <input type="radio" name="grupo" id="rd_agenda" class="rd_cor">
        <input type="radio" name="grupo" id="rd_Contato" class="rd_cor">

        <section class="sections">
         <section class="bloco" id="home">
             <div class="carrosel">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img/Assassins.jpg" alt="Assasin's Creed Valhalla">
                        <div class="carousel-caption">
                            <h1>Guerras serão travadas. Reinos cairão. Esta é a era dos Vikings.</h1>
                             <p>Lançamento Mundial</p>
                        </div>
                      </div>
                  
                      <div class="item">
                        <img src="img/banner.jpg" alt="Chicago">
                        <div class="carousel-caption" id="slogan" >
                            <h1 id="anuncio">Variedade de jogos.A Playstar desenvolve jogos pensando no entretenimento do cliente.</h1>
                             
                        </div>
                      </div>
                  
                      <div class="item">
                        <img src="img/squad.jpg" alt="New York">
                        <div class="carousel-caption" id="slogan2">
                            <h1>Se torne um membro do nosso Squad.</h1>
                             <p>Entre em Contato.</p>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

             </div>
            
        </section>
         <section class="bloco" id="quemSomos">
            <div class="principal">
                <div class="contQuemSomos">
                    <div class="painel">
                        <div class="iconePainel"><span class="glyphicon glyphicon-home"></span></div>
                        <div class="titlePainel">
                            Empresa
                        </div>
                        <div class="contPainel">
                            A PlayStar foi fundada em 2011 por Jonathan Joestar e Suzi Joestar, o jovem casal possuía o 
                            desejo de fornecer facilidades no alcance dos jogos digitais aos jogadores de todas as idades, 
                            quais são desenvolvidos com boa qualidade e preços acessíveis. 
                            O projeto teve início na cidade de São Bernardo do Campo, onde foi criado seu primeiro site 
                            no qual eram lançados betas de seus jogos. Qualquer pessoa podia testa-los gratuitamente e 
                            interagir com os desenvolvedores sobre suas experiências, este contato era utilizado em 
                            melhorias dentro do programa. 

                        </div>
                    </div>
                </div>
                <div class="imgQuemSomos"><img src="img/empresa.jpeg"></div>
                <div class="imgQuemSomos2"><img src="img/empresa2.jpg"></div>
                <div class="contQuemSomos2">
                    <div class="painel">
                        <div class="iconePainel2"><span class="glyphicon glyphicon-th-list"></span></div>
                        <div class="titlePainel2">
                            Política da Empresa
                        </div>
                        <div class="contPainel">
                            Nossos games sempre são lançados em versões betas para que o cliente apenas compre a versão final depois que finalmente tiver certeza que ele gostou do jogo,
                            caso o cliente compre e não goste ele tem 30 dias para entrar em contato e trocar o jogo por outro do mesmo valor ou pagar a diferença apenas,
                            então isto além de ser um benefício também acaba se tornando um diferencial,
                            pois nossos clientes não ficaram com aquele jogo parado na prateleira  por não ter gostado.
                        </div>
                    </div>
                </div>
            </div>          
         </section>
         <section class="bloco" id="agenda">
             <div class="catalogo">
                 <div class="titlecat">Assasins</div>
                 <div class="imgcatalogo"><img src="img/Assassins.jpg"></div>
             </div>
             <div class="catalogo">
                <div class="titlecat">Battle Squad</div>
                <div class="imgcatalogo"><img src="img/squad.jpg"></div>
            </div>
            <div class="catalogo">
                <div class="titlecat">The last of We</div>
                <div class="imgcatalogo"><img src="img/last.jpg"></div>
            </div>
            <div class="catalogo">
                <div class="titlecat">DOL</div>
                <div class="imgcatalogo"><img src="img/dota.jpg"></div>
            </div>
            <div class="catalogo">
                <div class="titlecat">Naruto Online</div>
                <div class="imgcatalogo"><img src="img/naruto.jpg"></div>
            </div>
            <div class="catalogo">
                <div class="titlecat">Backman</div>
                <div class="imgcatalogo"><img src="img/pacman.jpg"></div>
            </div>
            
                <div class="catalogopainel">
                    <div class="titlecat">Street Tekken</div>
                    <div class="imgcatalogo"><img src="img/street.jpg"></div>
                </div>
                <div class="catalogopainel">
                    <div class="titlecat">Gears of God</div>
                    <div class="imgcatalogo"><img src="img/gears.jpg"></div>
                </div>
                <div class="catalogopainel">
                    <div class="titlecat">Tenshu</div>
                    <div class="imgcatalogo"><img src="img/tenshu.jpg"></div>
                </div>
                <div class="catalogopainel">
                    <div class="titlecat">Motor Sport</div>
                    <div class="imgcatalogo"><img src="img/Motor.jpg"></div>
                </div>
                <div class="catalogopainel">
                    <div class="titlecat">The Hunt of treasure</div>
                    <div class="imgcatalogo"><img src="img/uncharted.jpg"></div>
                </div>
                <div class="catalogopainel">
                    <div class="titlecat">Soccer</div>
                    <div class="imgcatalogo"><img src="img/fifa.jfif"></div>
                </div>
         </section>
         <section class="bloco" id="contato">
         
             <form action="formulario.php" method="POST">
                 <fieldset>
                     <div class="contform">
                         <label>Nome*</label>
                         <input type="text"  name="nome" placeholder="Nome Completo" maxlength="35">
                         <label><E-mail>E-mail*</E-mail></label>
                         <input type="text" name="email" placeholder="email@email.com.br"  maxlength="30"/>
                         <label>Telefone</label>
                         <input type="phone" name ="phone" placeholder="(00)0000-0000" maxlength="14" minlength="10">
                         <label>Cidade</label>
                         <input type="text" placeholder="escreva sua cidade" maxlength="20">
                         <label>Estado</label>
                         <input type="text" placeholder="escreve seu Estado" maxlength="20">
                         <label>Mensagem</label>
                         <textarea type="text" placeholder=" Digite sua mensagem..." class="mensagem" maxlength="150" ></textarea>
                         <input type="submit" value="Enviar" class="enviar" enable="disable"></input>
                     </div>
                 </fieldset>
             </form>
         </section>

        </section>
        
    </div>
    <footer>
        <div class="rodape">
            <div class="controda"> <a href="index.html"><img src="img/logo.png" alt="logo" ></a></div>
            <div class="controda">
                <ul>
                    <li id="titulorod">Desenvolvedores</li>
                    <li>Luiz Felippe P. Rodrigues</li>
                    <li>Wellington Melo</li>
                    <li>Juliano Oliveira Paulino</li>
                    <li>FILIPE DOMINGUES SILVA SOUZA</li>
                    <li>Marina Erzsebet Szollosy</li>
                    <li>Gabriela de Paula Silva</li>
                </ul>
            </div>
            <div class="controda">
                <h2>Turma</h2>
                <h3> 2º Semestre do Curso de Ads.</h3></div>
        </div>
    </footer>
   
</body>
</html>