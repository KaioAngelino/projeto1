<?php
/* Smarty version 3.1.33, created on 2019-09-03 17:32:07
  from 'C:\wamp\www\projeto1\App\View\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d6ea3976275f4_62775992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4b0dbeea61eebb5d5504348f02fbcdef4857c6' => 
    array (
      0 => 'C:\\wamp\\www\\projeto1\\App\\View\\home.html',
      1 => 1567531780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6ea3976275f4_62775992 (Smarty_Internal_Template $_smarty_tpl) {
?>    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container"><a href="./" class="navbar-brand"><img src="App/assets/img/logo.svg" alt="" class="img-fluid"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                    <!-- Link-->
                    <li class="nav-item"> <a href="index.html" class="nav-link active">Home</a></li>
                    <!-- Link-->
                    <li class="nav-item"> <a href="faq.html" class="nav-link">FAQ</a></li>
                    <!-- Link-->
                    <li class="nav-item"> <a href="contact.html" class="nav-link">Contact</a></li>
                    <!-- Link-->
                    <li class="nav-item"> <a href="text.html" class="nav-link">Text Page</a></li>
                <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                  <div class="dropdown-menu"><a href="faq.html" class="dropdown-item">FAQ</a><a href="contact.html" class="dropdown-item">Contact</a><a href="text.html" class="dropdown-item">Text Page</a></div>
                </li>
              </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Login </a>
            </div>
          </div>
        </nav>
      </header>
      <!-- Login Modal-->
      <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
        <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body p-4 p-lg-5">
              <form action="#" class="login-form text-left">
                <div class="form-group mb-4">
                  <label>Email address</label>
                  <input type="email" name="email" placeholder="name@company.com" class="form-control">
                </div>
                <div class="form-group mb-4">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Section-->
      <section class="hero">
        <div class="container mb-5">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h1 class="hero-heading mb-0">O Melhor Conteúdo <br>Para você</h1>
              <div class="row">
                <div class="col-lg-10">
                  <p class="lead text-muted mt-4 mb-4">Baixe o seu Pdf agora.</p>
                </div>
              </div>
              <div>
                <div class="form-group">
                  <input type="text" name="nome" placeholder="Nome" class="form-control" id="home_nome">
                  <input type="text" name="email" placeholder="E-mail" class="form-control" id="home_email">
                  <input type="text" name="whatsapp" placeholder="Whatsapp" class="form-control" id="home_whatsapp">
                  <!-- <button type="submit" class="btn btn-primary">Get Started</button> -->
                </div>
                <button type="button" class="btn btn-primary" id="home_bt_enviar">Enviar</button>
              </div>
            </div>
            <div class="col-lg-6"><img src="App/assets/img/illustration-hero.svg" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
          </div>
        </div>
      </section>
      <!-- Intro Section-->
      <section>
        <div class="container">
          <div class="text-center">
            <h2>Track projects from start to finish </h2>
            <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p><a href="#" class="btn btn-primary">Learn More</a>
          </div>
          <div class="row">
            <div class="col-lg-7 mx-auto mt-5"><img src="App/assets/img/illustration-1.svg" alt="..." class="intro-image img-fluid"></div>
          </div>
        </div>
      </section>
      <!-- Divider Section-->
      <section class="bg-primary text-white">
        <div class="container">
          <div class="text-center">
            <h2>Do great things together</h2>
            <div class="row">
              <div class="col-lg-9 mx-auto">
                <p class="lead text-white mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. eiusmod tempor incididunt ut labore et dolore.</p>
              </div>
            </div><a href="#" class="btn btn-outline-light">Learn More</a>
          </div>
        </div>
      </section>
      <!-- Integrations Section-->
      <section>
        <div class="container">
          <div class="text-center">
            <h2>Integrations</h2>
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
          </div>
          <div class="integrations mt-5">
            <div class="row">
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/monitor.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">Web desgin</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/target.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">Print</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/chat.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">SEO and SEM</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/idea.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">Consulting</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/coffee-cup.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">Email Marketing</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box text-center">
                  <div class="icon d-flex align-items-end"><img src="App/assets/img/pen.svg" alt="..." class="img-fluid"></div>
                  <h3 class="h4">UX &amp; UI</h3>
                  <p class="text-small font-weight-light">Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CLients Section-->
      <section class="bg-gray">
        <div class="container">
          <div class="text-center">
            <h2>Trusted by teams everywhere</h2>
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt..</p>
              </div>
            </div>
          </div>
          <div class="clients mt-5">
            <div class="row">
              <div class="col-lg-2"><img src="App/assets/img/client-1.svg" alt="" class="client-image img-fluid"></div>
              <div class="col-lg-2"><img src="App/assets/img/client-2.svg" alt="" class="client-image img-fluid"></div>
              <div class="col-lg-2"><img src="App/assets/img/client-3.svg" alt="" class="client-image img-fluid"></div>
              <div class="col-lg-2"><img src="App/assets/img/client-4.svg" alt="" class="client-image img-fluid"></div>
              <div class="col-lg-2"><img src="App/assets/img/client-5.svg" alt="" class="client-image img-fluid"></div>
              <div class="col-lg-2"><img src="App/assets/img/client-6.svg" alt="" class="client-image img-fluid"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- How it works section-->
      <section>
        <div class="container">
          <div class="text-center">
            <h2>Curious how Appton works for <br>large organizations?</h2>
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <p class="lead text-muted mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. Eiusmod tempor incididunt ut labore.</p>
              </div>
            </div><a href="#" class="btn btn-primary mt-4">Get Started</a>
          </div>
        </div>
      </section>
      <!-- How it works Section-->
      <section class="bg-gray">
        <div class="container text-center text-lg-left">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <h2 class="divider-heading">Curious how Appton <br>works for large</h2>
              <div class="row">
                <div class="col-lg-10">
                  <p class="lead divider-subtitle mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing. Vitae animi mollitia cumque sunt soluta. consectetur adipisicing.</p>
                </div>
              </div><a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0"><img src="App/assets/img/illustration-2.svg" alt="" class="divider-image img-fluid"></div>
          </div>
        </div>
      </section>
      <!-- Portfolio Section-->
      <section class="pb-0">
        <div class="container">
          <div class="text-center">
            <h2>Portfolio</h2>
            <p class="lead text-muted mt-2">You can make also a portfolio or image gallery.</p>
          </div>
          <div class="portfolio mt-5">
            <div class="row">
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-1.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-1.jpg" alt="image" class="img-fluid"></a></div>
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-2.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-2.jpg" alt="image" class="img-fluid"></a></div>
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-3.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-3.jpg" alt="image" class="img-fluid"></a></div>
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-4.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-4.jpg" alt="image" class="img-fluid"></a></div>
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-5.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-5.jpg" alt="image" class="img-fluid"></a></div>
              <div class="col-lg-4 p-0"><a href="App/assets/img/portfolio-6.jpg" data-lightbox="image-1" data-title="Some footer information" class="portfolio-item"><img src="App/assets/img/portfolio-6.jpg" alt="image" class="img-fluid"></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Get Started Section-->
      <section class="get-started">
        <div class="container text-center">
          <h2>Get started today</h2>
          <div class="row">
            <div class="col-lg-8 m-auto">
              <p class="lead text-muted mt-2">If you can make a list or send an email, you can use Appton. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mx-auto">
              <form action="#" class="subscription-form mt-5">
                <div class="form-group">
                  <input type="email" name="email" placeholder="Name@company.com" class="form-control">
                  <button type="submit" class="btn btn-primary">Get Started</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 >
        $('#home_bt_enviar').click(function(){
          var acao = 'enviar_dados'
          var home_nome = $('#home_nome').val()
          var home_email = $('#home_email').val()
          var home_whatsapp = $('#home_whatsapp').val()

          $.ajax({
            url: 'App/ajax/acoes.php',
            type: 'POST',
            dataType: 'HTML',
            data: {
              acao:acao,
              home_nome:home_nome,
              home_email:home_email,
              home_whatsapp:home_whatsapp,
            },
            success: function(data)
            {
              // alert(data);
              if (data == 1) {
                window.location.href = "agradecimento"  
              }else{
                window.location.href = "desculpa"
              }
              
            },
            erro:function(data){
              

            }

          })
          
        })
      <?php echo '</script'; ?>
><?php }
}
