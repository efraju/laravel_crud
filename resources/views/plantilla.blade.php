<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
           <!--Import Google Icon Font-->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title></title>
    </head>
    <body class="blue-grey lighten-3">
        <nav class="blue-grey lighten-1">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Logo</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('producto.create')}}">Nuevo</a> </li>
                <li><a href="{{route('producto.index')}}">productos</a></li> 
              </ul>
            </div>
          </nav>
        
        
      
        @yield('contenido')
        
         <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}></script>
    </body>
</html>
