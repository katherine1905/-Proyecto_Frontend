<!DOCTYPE html>
<html lang="en">
<head>
    <meta
    name="description"           
    content="SuperTickets'It is a page that has the function that users can 
    enter and participate and buy tickets for the events that the page offers.">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">

</head>
<body class="registro">

<nav id="menu"> 
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>

    </label>
    <ul> 
      <li> <a  href="#">Registro</a></li>
      
      <li> <a href="http://supertickets.test/"> Principal</a></li>
      
      <li> <a href="#">Ingresar</a></li>
      
      <li> <a href="#">Contacto</a></li>

    </ul>
    
    </nav>

        <nav class="navbar navbar-light ">
          <form class="form-inline">
           <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" >
            <button class="btn-Registro btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
    
       
                 <h1 class="ticket">Compra de Tickets</h1>
                 <p class="nombre-e">Nombre del Evento:  </p>
                 <p class="nombre-f">Fecha: </p>
                 <p class="nombre-l">Lugar: </p>
                 <p class="nombre-h">Hora: </p>
                <div class="form-Registro">
                    <form class="input-group">
                        <div class=" search-dos">
                        
                       
                        <input type="" class="input-field" placeholder="   Cantidad Personas" required aria-label="Cantidad de personas">
                      
                            <input type="" class="input-field" placeholder="   Cantidad Adultos" required aria-label="Cantidad de adultos">
                          
                            
                            <input type="" class="input-field" placeholder="    Cantidad Niños" required aria-label="Cantidad de niños"> 
                              
                            
                                 <input type="" class="input-field" placeholder="    Costo Persona" aria-label="Costo persona" > 
                                
                                 
                                     <input type="" class="input-field" placeholder="    Cantidad Adultos" aria-label="Costo por adulto"> 
                                   
                                     
                                         <input type="" class="input-field" placeholder="    Cantidad Niños" aria-label="Costo por niños"> 
                                        
                                         
                                              <input  type="" class="input-field-dos" placeholder="    Costo Total" aria-label="Costo total"> 
                                               
                       <a href="Confirmar.php" class="btn-Registro2 btn-Registro2- dafault" aria-label="aceptar"> Aceptar</a>
                      
                       
                            </div>
                           
                       
                        </form>
                
                </div>
            
</body>
</html>