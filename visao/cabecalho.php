 <body>
  
  <style type="text/css">
#backtopo {
    display: scroll;
    position: fixed;
    top: 30px;
    right: 10px;
}
</style>


<script>
$(document).ready(function(){
    
    // hide #back-top first
    $('#backtopo').hide();
       
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#backtopo').fadeIn();
            } else {
                $('#backtopo').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#backtopo').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
</script>
  
<div id="tudo" style="background-color: #A97FBD">

       
<div class="m">
  <div class="row">
  <div class="columns">
    <ul class="dropdown menu" style="border-color:#A97FBD" data-dropdown-menu>
      <li>
        <a href="#Item-2"><i class="fi-list" style="color:black;font-size:20px;padding:1%;"></i></a>
        <ul class="menu">
          <li>
            
<div class="row">
  <div class="columns">
    <ul class="dropdown menu" data-dropdown-menu>
       <li>
        <a href="#Item-2">Infantil</a>
         <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Tênis</a></li>
          <li><a href="#Item-2B">Sandálias</a></li>
          <li><a href="#Item-2A">Sapatos</a></li>
          <li><a href="#Item-2B">Sapatilhas</a></li>
          <li><a href="#Item-2A">Chinelos</a></li>
          <li><a href="#Item-2B">Botas</a></li>
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Conjuntos</a></li>
          <li><a href="#Item-2B">Blusas e Camisetas</a></li>
           <li><a href="#Item-2A">Vestidos</a></li>
          <li><a href="#Item-2B">Pijamas e Camisolas</a></li>
           <li><a href="#Item-2A">Fantasias</a></li>
          <li><a href="#Item-2B">Calças</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bonés e Chapéus</a></li>
          <li><a href="#Item-2B">Óculos de sol</a></li>
           <li><a href="#Item-2A">Cintos</a></li>
          <li><a href="#Item-2B">Mochilas</a></li>
        </ul>
      </li>
    </ul>
      </li>
      <li>
        <a href="#Item-2">Masculino</a>
        <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Chinelos</a></li>
          <li><a href="#Item-2B">Sapatênis</a></li>
          <li><a href="#Item-2A">Tênis</a></li>
          <li><a href="#Item-2B">Sapato Social</a></li>
          
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bermudas</a></li>
          <li><a href="#Item-2B">Camisetas</a></li>
          <li><a href="#Item-2A">Moletom</a></li>
          <li><a href="#Item-2B">Polos</a></li>
            <li><a href="#Item-2B">Calças</a></li>
            <li><a href="#Item-2B">Camisas</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Óculos de Sol</a></li>
          <li><a href="#Item-2B">Relógios</a></li>
           <li><a href="#Item-2A">Bonés</a></li>
          <li><a href="#Item-2B">Cintos</a></li>
        </ul>
      </li>
    </ul>
  </li>
      <li>
        <a href="#Item-2">Feminino</a>
        <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Rasteirinhas</a></li>
          <li><a href="#Item-2B">Tênis</a></li>
           <li><a href="#Item-2A">Sapatos</a></li>
          <li><a href="#Item-2B">Chinelos</a></li>
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Vestidos</a></li>
          <li><a href="#Item-2B">Calças</a></li>
           <li><a href="#Item-2A">Blusas</a></li>
          <li><a href="#Item-2B">Saias</a></li>
           <li><a href="#Item-2A">Bodys</a></li>
          <li><a href="#Item-2B">Macacões e Macaquinhos</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bolsas</a></li>
          <li><a href="#Item-2B">Relógios</a></li>
           <li><a href="#Item-2A">Bijuterias</a></li>
          <li><a href="#Item-2B">Lenços</a></li>
        </ul>
      </li>
    </ul>
      </li>
    </ul>
  </div>
</div>
            </li>
        </ul>
      </li>
    </ul>
  </div>
</div>


</div>
<div class="" style="padding:3%;width:28%;">
  <input id="barra_pesquisa" type="text" placeholder = " Pesquisa..." style="margin:0px;" >
</div>
<div class="e">
  <p style="text-align:center;"><a href="#"><img src="publico/img/logo.png"></a></p>
</div>
<div class="e">
  <a href="login.html"><p id= "icon_Minha_conta" style="color:black;font-size:25px;text-align:center;padding:1%;"><i class="fi-torso" style="margin-right:10px;"></i>Minha Conta</p></a>
</div>
    
<div class="m">
  <a href="carrinho.html"><p id= "icon_carrinho" style="color: black" ><i style="font-size:40px" class="fi-shopping-cart"></i></p></a>
</div>
</div> 
          </div>

          <div id="subtopo_inicial">
            
          </div>
      
      
<br>

