<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE-->
    <script id="item-template" type="text/x-handlebars-template">
    <div class= 'data-cont'>
      <h4>Parallelepipedo {{number}}</h4>
      <p class='line-1'>{{riassunto}}</p>
      <p class='line-2'>{{area}}</p>
      <p class='line-3'>{{volume}}</p>
    </div>
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <title>Parallelepipedo</title>
  </head>
  <body>
    
    <div class="container">
    <h1>Calcola area e volume di 3 parallelepipedi</h1>

    <div class="forms">
      <div class='form'>
        <h2>Inserisci dati prima figura: </h2>
        <span>Altezza: <input type="text"  id="altezza1" value=2></span>
        <span>Base: <input type="text" id='base1' value=3></span>
        <span>Profondità: <input type="text" id="prof1" value=4></span>
      </div>

      <div class='form'>
      <h2>Inserisci dati seconda figura: </h2>
      <span>Altezza: <input type="text"  id="altezza2" value=5></span>
        <span>Base: <input type="text" id='base2' value=6></span>
        <span>Profondità: <input type="text" id="prof2" value=7></span>
      </div>

      <div class='form'>
      <h2>Inserisci dati terza figura: </h2>
      <span>Altezza: <input type="text"  id="altezza3" value=8></span>
        <span>Base: <input type="text" id='base3' value=9></span>
        <span>Profondità: <input type="text" id="prof3" value=10></span>
      </div>
    </div>

      <button id='send'>INVIA</button>


      <div id='risposte'>
        <h2>RISPOSTE:</h2>

      </div>
    </div>

 
  </body>
</html>