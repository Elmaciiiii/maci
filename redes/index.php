<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <h1>Peliculas    </h1>

</header>


    <main>
         
    <div class="fila-arriba">

        <div class="image-wrapper">
            <img src="img/coco.jpg" alt="Imagen 1">
            <button class="button"  onclick="window.modal1.showModal();">Coco</button>

            <dialog id="modal1">
                <h3>Coco</h3>
                  <p>Coco es una película de Disney-Pixar que narra la historia de Miguel, un niño de doce años que sueña con ser músico como su ídolo Ernesto de la Cruz. Miguel vive en el pueblo de Santa Cecilia, donde la música está prohibida por su familia. En el Día de los Muertos, Miguel se aventura en la Tierra de los Muertos, donde conoce a sus antepasados y a un esqueleto llamado Héctor. Miguel debe superar una serie de pruebas para regresar a la vida y descubrir la verdad sobre su origen y su pasión.
                </p>
                 
                <button class="button" onclick="window.modal1.close();">Cerrar</button>
              </dialog>
        </div>


        <div class="image-wrapper">
            <img src="img/ralph.jpg" alt="Imagen 2">
            <button class="button" onclick="window.modal8.showModal();" >Ralph </button>
            <dialog id="modal8">
                <h3>Ralph</h3>
                  <p>Ralph el demoledor es una película ambientada en el mundo de un arcade lleno de videojuegos y emoción. Ralph es el villano de un videojuego llamado Repáralo, en un salón recreativo. Cansado de ser el malo de la historia, Ralph decide tomar el asunto por sus propias manos y se lanza en un viaje a través de los distintos mundos y generaciones de videojuegos para demostrarle al mundo que él también puede ser un héroe. Ralph anhela ser adorado como lo es Fix-It Felix, el perfecto niño bueno de su videojuego.
                </p>
                 
                <button class="button" onclick="window.modal8.close();">Cerrar</button>
              </dialog>

        </div>
   
       <div class="image-wrapper">
            <img src="img/peli 3.jpg" alt="Imagen 2">
            <button class="button" onclick="window.modal2.showModal();" >Zototopia</button>
            <dialog id="modal2">
                <h3>Zototopia</h3>
                  <p>Zootopia es una película de animación de Disney que narra las aventuras de dos animales que viven en una ciudad donde conviven diferentes especies. La coneja Judy Hopps es la primera policía de su especie y se enfrenta a un caso misterioso junto al zorro Nick Wilde, un estafador que se convierte en su aliado. Juntos deberán descubrir por qué algunos depredadores se están volviendo salvajes y amenazan la armonía de Zootopia.

                </p>   
                <button class="button" onclick="window.modal2.close();">Cerrar</button>
              </dialog>
        </div>

    </div>
    

    
    <div class="fila-abajo">
        <div class="image-wrapper">
            <img src="img/peli 4.jpg" alt="Imagen 1">
            <button class="button" onclick="window.modal3.showModal();" >Dragones</button>
            <dialog id="modal3">
                <h3>Dragones</h3>
                  <p>Cómo entrenar a tu dragón es una comedia de acción ambientada en el mundo de los vikingos y los dragones salvajes. La película está basada en el libro infantil de Cressida Cowell. La historia sigue a Hipo, un vikingo adolescente que no encaja en la reputación de su tribu como cazadores de dragones. Hipo intenta matar a un dragón para complacer a su padre, pero cuando está a punto de lograrlo, descubre la verdad acerca de estas bestias terribles.

                </p>  
                <button class="button" onclick="window.modal3.close();">Cerrar</button>
              </dialog>
        </div>


        <div class="image-wrapper">
            <img src="img/rio.jpg" alt="Imagen 2">
            <button class="button" onclick="window.modal4.showModal();" >Rio</button>
            <dialog id="modal4">
                <h3>Rio</h3>
                  <p>Río es una película que cuenta la historia de Blu, un guacamayo domesticado que nunca aprendió a volar y que vive en Minnesota con su propietaria y amiga Linda1. La acción transcurre en la espectacular ciudad de Río de Janeiro y en la exuberante selva tropical durante el Carnaval2. Blu debe volver a su Brasil natal para conocer a Perla, una bonita hembra, y evitar así la desaparición de su especie.

                </p>
                <button class="button" onclick="window.modal4.close();">Cerrar</button>
              </dialog>
        </div>


        <div class="image-wrapper">
            <img src="img/metegol.jpg" alt="Imagen 2">
            <button class="button"onclick="window.modal5.showModal();" >Metegol</button>
            <dialog id="modal5">
                <h3>Metegol</h3>
                  <p>
                    Metegol es una película animada que narra la historia de Amadeo, un joven de un pequeño pueblo cuya vida gira en torno a un futbolín. Amadeo debe salvar a su pueblo de la maldad del nuevo crack del fútbol Grosso, que viene a vengarse ya que nunca ha olvidado la humillación que sufrió al perder en un juego de taca-taca contra Amadeo. Con la ayuda del mágico equipo de jugadores de su amado taca-taca, Amadeo y sus amigos se embarcan en un viaje lleno de aventuras para salvar a Laura y al pueblo y en el camino convertirse en un verdadero equipo.
                    
                </p>
                 
                <button class="button" onclick="window.modal5.close();">Cerrar</button>
              </dialog>
        </div>

    </div>
</main>


<footer>
  <div  >
       
    <button class="nose"  onclick="window.modal12.showModal();">Registrarte</button>

  

  <dialog class="lolo" id="modal12">
    <section class="form-register">

      <h4>Formulario Registro</h4>
      <form action="../enviar.php" method="post">
        <input class="controls" type="text" name="DNI" id="DNI" placeholder="Ingrese su DNI" required> 
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required >
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
        <input class="controls" type="password" name="Contraseña" id="Contraseña" placeholder="Ingrese su Contraseña" required> <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" type="submit" value="Registrar">
      </form>
      <p><a href="#">¿Ya tengo Cuenta?</a></p>
      
      </section>
       
       
      <button class="tete" onclick="window.modal12.close();">Cerrar</button>
 </dialog>
 </div>
</footer>



</body>
</html>