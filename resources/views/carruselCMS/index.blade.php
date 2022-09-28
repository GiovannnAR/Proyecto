
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/carruselCMS.css') }}" rel="stylesheet">
    
<script src="{{ asset('js/networkDiagram.js') }}" defer></script>
    <!-- Styles -->

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>


<div id="btn-move" onclick="ba()">
  <i class="fas fa-power-off"></i>
</div>

<!-- --------------------- -->
<!-- ----sistema solar------ -->
<!-- --------------------- -->

<div class="sistema-solar">
  <div class="linea-guia linea-guia-1"></div>
  <div class="linea-guia linea-guia-2"></div>
  <div class="linea-guia linea-guia-3"></div>
  <div class="linea-guia linea-guia-4"></div>
  <div class="linea-guia linea-guia-5"></div>
  <div class="linea-guia linea-guia-6"></div>
  <div class="linea-guia linea-guia-7"></div>
  <div class="linea-guia linea-guia-8"></div>
  <div class="linea-guia linea-guia-9"></div>

  <div class="sol objeto" onclick="ap(1)">
  </div>

  <div class="content-mercurio content-objeto" id="co2">
    <div class="mercurio objeto" onclick="ap(2)">
    </div>
  </div>

  <div class="content-venus  content-objeto" id="co3">
    <div class="venus objeto" onclick="ap(3)">
    </div>
  </div>

  <div class="content-tierra content-objeto" id="co4">
    <div class="tierra objeto" onclick="ap(4)">
    </div>
  </div>

  <div class="content-marte content-objeto" id="co5">
    <div class="marte objeto" onclick="ap(5)">
    </div>
  </div>

  <div class="content-jupiter content-objeto" id="co6">
    <div class="jupiter objeto" onclick="ap(6)">
    </div>
  </div>

  <div class="content-saturno content-objeto" id="co7">
    <div class="saturno objeto" onclick="ap(7)">
    </div>
  </div>

  <div class="content-urano content-objeto" id="co8">
    <div class="urano objeto" onclick="ap(8)">
    </div>
  </div>

  <div class="content-neptuno content-objeto" id="co9">
    <div class="neptuno objeto" onclick="ap(9)">
    </div>
  </div>

  <div class="content-pluton content-objeto" id="co10">
    <div class="pluton objeto" onclick="ap(10)">
    </div>
  </div>

</div>



<!-- -------------------- -->
<!-- targetas info de plantas -->
<!-- -------------------- -->

<div class="cards-container" id="ccp">

  <div class="card-sol content-card" id="cp1">
    <div class="img-planeta">
      <h2 class="title-planeta">Sol</h2>
    </div>
    <div class="info-sol info-planeta">
      <p>El Sol es una estrella de tipo-G de la secuencia principal y clase de luminosidad V que se encuentra en el
        centro del sistema solar y constituye la mayor fuente de radiación electromagnética de este sistema
        planetario.​</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Sol" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(1)">cerrar</div>
    </div>
  </div>

  <!-- ------ -->
  <div class="card-mercurio content-card" id="cp2">
    <div class="img-planeta">
      <h2 class="title-planeta">Mercurio</h2>
    </div>
    <div class="info-planeta">
      <p>Mercurio es el planeta del sistema solar más próximo al Sol y el más pequeño. Forma parte de los denominados
        planetas interiores o terrestres y carece de satélites naturales al igual que Venus.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Mercurio_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(2)">cerrar</div></a>
    </div>
  </div>

  <div class="card-venus content-card" id="cp3">
    <div class="img-planeta">
      <h2 class="title-planeta">Venus</h2>
    </div>
    <div class="info-planeta">
      <p>Venus es el segundo planeta del sistema solar en orden de distancia desde el Sol, el sexto en cuanto a
        tamaño, ordenados de mayor a menor. Al igual que Mercurio, carece de satélites naturales. </p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/8wiki/Venus_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(3)">cerrar</div>
    </div>
  </div>

  <div class="card-tierra content-card" id="cp4">
    <div class="img-planeta">
      <h2 class="title-planeta">Tierra</h2>
    </div>
    <div class="info-planeta">
      <p>La Tierra es un planeta del sistema solar que gira alrededor de su estrella —el Sol— en la tercera órbita más
        interna. Es el más denso y el quinto mayor de los ocho planetas del sistema solar. También es el mayor de los
        cuatro terrestres o rocosos.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Tierra" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(4)">Cerrar</div>
    </div>
  </div>

  <div class="card-marte content-card" id="cp5">
    <div class="img-planeta">
      <h2 class="title-planeta">Marte</h2>
    </div>
    <div class="info-planeta">
      <p>Marte es el cuarto planeta en orden de distancia al Sol y el segundo más pequeño del sistema solar, después
        de Mercurio. Tambien es conocido como el Planeta Rojo.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Marte_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(5)">Cerrar</div>
    </div>
  </div>

  <div class="card-jupiter content-card" id="cp6">
    <div class="img-planeta">
      <h2 class="title-planeta">Jupiter</h2>
    </div>
    <div class="info-planeta">
      <p>Júpiter es el quinto planeta del sistema solar. Forma parte de los denominados planetas exteriores o
        gaseosos. Recibe su nombre del dios romano Júpiter. Se trata del planeta que ofrece un mayor brillo a lo largo
        del año dependiendo de su fase.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/J%C3%BApiter_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(6)">Cerrar</div>
    </div>
  </div>

  <div class="card-saturno content-card" id="cp7">
    <div class="img-planeta">
      <h2 class="title-planeta">Saturno</h2>
    </div>
    <div class="info-planeta">
      <p>Saturno es el sexto planeta del sistema solar, el segundo en tamaño y masa después de Júpiter y el único con
        un sistema de anillos visible desde nuestro planeta. Su nombre proviene del dios romano Saturno.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Saturno_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(7)">Cerrar</div>
    </div>
  </div>

  <div class="card-urano content-card" id="cp8">
    <div class="img-planeta">
      <h2 class="title-planeta">Urano</h2>
    </div>
    <div class="info-planeta">
      <p>Urano es el séptimo planeta del sistema solar, el tercero de mayor tamaño, y el cuarto más masivo. Se llama
        así en honor de la divinidad griega del cielo Urano, el padre de Crono y el abuelo de Zeus.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Urano_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(8)">Cerrar</div>
    </div>
  </div>

  <div class="card-neptuno content-card" id="cp9">
    <div class="img-planeta">
      <h2 class="title-planeta">Neptuno</h2>
    </div>
    <div class="info-planeta">
      <p>Neptuno es el octavo planeta en distancia respecto al Sol y el más lejano del sistema solar. Forma parte de
        los denominados planetas exteriores o gigantes gaseosos, y es el primero que fue descubierto gracias a
        predicciones matemáticas.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Neptuno_(planeta)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(9)">Cerrar</div>
    </div>
  </div>

  <div class="card-pluton content-card" id="cp10">
    <div class="img-planeta">
      <h2 class="title-planeta">Pluton</h2>
    </div>
    <div class="info-planeta">
      <p>Plutón, designado 134340 Pluto, es un planeta enano del sistema solar situado a continuación de la órbita de
        Neptuno. Su nombre se debe al dios mitológico romano Plutón.</p>
    </div>
    <div class="caja-botones">
      <a href="https://es.wikipedia.org/wiki/Plut%C3%B3n_(planeta_enano)" target="_blank">Leer mas</a>
      <div class="btn-planeta" onclick="ct(10)">cerrar</div>
    </div>
  </div>

</div>


