<?php
// Defina variáveis padrão para o título e a descrição da página
$pageTitle = 'Título Padrão da Página';
$pageDescription = 'Descrição padrão da página. Esta descrição será substituída se uma descrição específica da página for definida.';

// Inclua variáveis específicas da página no topo de cada página
if(isset($customTitle)) $pageTitle = $customTitle;
if(isset($customDescription)) $pageDescription = $customDescription;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="src/assets/favicon.ico" />
    <link rel="stylesheet" href="src/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ganhe R$20 depositando apenas R$5 com o promocode 5PRA20!</title>
    <meta name="description" content="Aproveite agora! Deposite apenas R$5 usando o promocode 5PRA20 e ganhe R$20 para jogar. Não perca essa chance incrível de multiplicar seu dinheiro!">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W7KMQMF');</script>
  <!-- End Google Tag Manager -->

<!-- Hotjar Tracking Code for my site -->
<script>
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:3867935,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

  </head>
  <body>
    <div id="root"></div>
    <script>



let showButton = false;

document.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const botao = document.getElementById('meuBotao');

    if (scrollPosition >= 300) {
        if (!showButton) {
            botao.style.display = 'flex';
            showButton = true;
        }
    } else {
        if (showButton) {
            botao.style.display = 'none';
            showButton = false;
        }
    }
});









const copiarCodigoUp = () => {
    // Copia o código para a área de transferência
    navigator.clipboard.writeText("5PRA20").then(() => {
      console.log("Código copiado com sucesso!");
      // Redireciona para o link externo após a cópia
      window.location.href = 'https://upbet.com/ptb/authentication/signup?affid=0216102';
    }).catch(err => {
      console.error('Falha ao copiar o código:', err);
    });
};


    

</script>
      <div class='div-principal-lp'>
        <!-- <div class='menu-principal'><img src="src/assets/logo-principal-upbet.png" alt="" />
        
        <button onClick="copiarCodigoUp()" class="botao-cadastrar-menu">CADASTRE-SE</button>
      
      
      </div> -->
        <div class='banner-imagem-texto'>
              <div class='conteudo-banner'>
                  <div class='conteudo-topo'>
                  
                  <!-- <h1><b>GANHE R$ 20,00</b> depositando APENAS R$ 5,00!!!</h1> -->
                 
                  </div>
                  <div class='config-botao-banner'>
                    
                      <button onClick="copiarCodigoUp()" class='botao-cadastrar-banner'>RESGATAR BÔNUS</button>
                      
                     <!-- <p>Use o código "UPC24" no depósito!</p> -->
                     
                  </div>
              </div>
              <div class='imagem-banner-direita'>
                  <img src="../src/assets/ganhe-20-com-jogos-na-up-bet.png" alt="Ganhe 20 reais com jogos selecionados na UPBET" />
              </div>
        </div>


        <div class='div-segunda-dobra'>
                <div class='texto-final'>
                    <h2>Como Receber</h2>
                    <h3>1 - Faça seu cadastro na UP</h3>
                    <p>Tudo é muito rápido e fácil, não leva nem 1 minuto!</p>

                    <h3>2 - Utilize o PROMOCODE</h3>
                    <p>Na página de depósito, utilize o promocode: 5PRA20</p>    

                    <h3>3 - Complete seu depósito</h3>
                    <p>Complete seu primeiro depósito na UP com o valor de 5 reais e ganhe na hora mais de 20 reais para você jogar!</p>  

                    <h3>4 - Aproveite seus Bônus</h3>
                    <p>Tudo pronto! Agora é a hora de você aproveitar seu novo saldo para se divertir e lucrar ainda mais!</p>  
                </div>

                <!-- Render the button only if showButton is true -->

                <button onClick="copiarCodigoUp()" id="meuBotao" class="botao-fixo-segunda-dobra" style="display: none;">RESGATAR BÔNUS</button>


        </div>

            
        </div>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7KMQMF"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  </body>
</html>
