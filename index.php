<!DOCTYPE html>
<html lang='en'>
   <head>
      <title>Autocar Cancún</title>
      <meta charset='utf-8' />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBvlABHR4tTszQAvThw3ImtnKqnzNGnN4o" type="text/javascript"></script>
      
      <link rel="shortcut icon" href="map.pnga" type="image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
         a:hover{
         cursor: pointer;
         text-decoration: unset;
         }

         .heading_anchor{
            background: #3c8dbc !important; 
            color: #fff !important;
         }

         .define_height{
             height: 450px;
         }
      </style>
   </head>
   <body>
      <div class='navbar navbar-default navbar-static-top heading_anchor'>
         <div class='container-fluid'>
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class='navbar-brand heading_anchor' href='#'>Buscar en el Mapa</a>
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class='active'>
                     <a href=""  class="heading_anchor">Busque la ruta entre dos ubicaciones</a>
                  </li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </div>
      <div class='container-fluid'>
         <div class='row'>
            <div class='col-md-4'>
               <p>Panel de busqueda de ruta en el Mapa</p>
               <div class='well define_height'>
                  <form id="distance_form">
                     <div class="form-group">
                        <label>Ingresa el origen</label>
                        <input class="form-control" id="from_places" placeholder="Origen"/>
                        <input id="origin" name="origin" required="" type="hidden"/>
                        <a onclick="getCurrentPosition()">Establecer ubicación actual</a>
                     </div>
                     <div class="form-group">
                        <label>Ingresa el destino</label>
                        <input class="form-control" id="to_places" placeholder="Destino"/>
                        <input id="destination" name="destination" required="" type="hidden"/>
                     </div>
                     <div class="form-group">
                        <label>Modo de viaje</label>
                        <select class="form-control" id="travel_mode" name="travel_mode">
                           <option value="DRIVING">Carro</option>
                           <option value="WALKING">Pie</option>
                           <option value="BICYCLING">Bicicleta</option>
                           <option value="TRANSIT">Transporte</option>
                        </select>
                     </div>
                     <input class="btn btn-primary" type="submit" value="Establecer ruta" style="background: #367fa9; width: 100%; border: 0px;" />
                  </form>
                  <div class="row" style="padding-top: 20px;">
                     <div class="container">
                        <p id="in_mile"></p>
                        <p id="in_kilo"></p>
                        <p id="duration_text"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class='col-md-8'>
               <noscript>
                  <div class='alert alert-info'>
                     <h4>Your JavaScript is disabled</h4>
                     <p>Please enable JavaScript to view the map.</p>
                  </div>
               </noscript>
               <div id="map" style="height: 500px; width: 100%" ></div>
            </div>
         </div>
      </div>
      <script src="map.js"></script>
      <footer class="main-footer">
         <div class="pull-right hidden-xs">
            <br>
            <br>
            <br>
            <b>Autocar</b> SA de CV
         </div>
         <br>
         <br>
         <br>
         <strong>Portal Administrativo<a href="https://autocarcancun.com/"> Autocar Cancún</a>.</strong> Todos los derechos
         reservados.
      </footer>
   </body>
</html>