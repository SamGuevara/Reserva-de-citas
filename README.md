# Reserva-de-citas
Este formulario permite a los usuarios concretar una cita con anticipación. Sus datos son almacenados en MySQL por medio de PHP.

# Tecnología usada en el proyecto
## HTML:
Se usaron etiquetas <div>, <form>, <label>, <input>, <select> y <button> para dar forma a la estructura del formulario. A cada una se le asignó una clase para poder vincularlas a la hoja de estilo en CSS, además de eso a <label> e <input> se les asignó el mismo nombre en los atributos for e id  para su correcto funcionamiento. Lo principal fue la etiqueta <form> se configuró con acction y method para que los datos sean enviados de forma correcta al archivo PHP para la creación de la base de datos. La etiqueta <select> se usó para una sección en la que se requiere que el usuario seleccione una opción, por eso se usó la etiqueta <option> para asignar los valores entre los que el usuario podía elegir. También se le da la posibilidad de elegir la fecha y la hora de la cita, esto por medio de configurar dos etiquetas <div> con diferentes <input> cada uno reaccionando a un "type" distinto, en el caso de fecha se usó "type='date'" y en el caso de hora "type='time'".

## CSS:
Se aplicaron estilos básicos al formulario. Para ello se usaron selectores de tipo y de clase, a los cuales se les dieron diferentes propiedades y valores para llegar al resultado esperado, por mencionar algunas de las propiedades usadas en el proyecto son: background, background-color, text-aling, aling-item, color, margin, padding, transition, box-shadow, box-sizing.

## PHP:
Antes de empezar con la redacción del código, se utilizaron dos funciones para mostrar errores en el navegador cuando el código fue puesto a prueba. Después de esto se realizó la conexión con la base de datos local por medio del planteamiento de variables una estructura condicional para notificar si hay algún error al realizar la conexión. Seguido se realizó la obtención de datos del formulario, plantando variables que se relacionan con el método que se usó en la creación de formulario en HTML y los nombres de los campos a cubrir (input). También incluimos una validación de datos, para constatar que el usuario no dejó ningún campo sin responder, si alguno no está completo se detiene el código e informa al usuario que no completó un dato. Seguido se realiza la inserción de datos a la base de datos, plantando una variable de consulta y otra de preparación, planteando junto a estas los parámetros de ejecución, los cuales definimos con una estructura condicional.

## MySQL:
La base de datos fue creada usando "phpMyAdmin" desde el panel de Xampp. No se utilizó código SQL, sino que se realizó por medio de la interfaz gráfica de "phpMyAdmin". El motor usado es MySQL.
Para crearla se procedió creando una nueva base de datos (registro_usuarios) y dentro de esta se creó una nueva tabla (reservas). De la última se completaron los campos solicitados para cada columna, teniendo en cuenta los nombres dados en el formulario HTML para cada columna. Los datos llegan a la base de datos desde el formulario antes mencionado y su conexión con PHP.

# Descargar el archivo
- Busca el botón verde que dice <>Code
- Hace click en la fecha que tiene el botón
- Selecciona "Download ZIP"
- Descomprime el archivo ZIP

Como tiene archivos PHP y está vinculado a MySQL vamos a:
- Moverlo a la carpeta "htdocs" (se ubica en el sistema, la ruta es /opt/lampp/htdocs)

# Creando la base de datos
- Abre XAMPP, activa los servidores.
- Ve al navegador, en la barra de URL coloca "http://localhost" (te lleva a la página principal de tu servidor local)
- Busca "phpmyadmin"
- Usaremos la base de datos "registro_usuarios" creada en otro proyecto, aca creamos una nueva tabla con la que se incluye en los archivos que descargaste
- Selecciona "Importar"
- Donde dice "Examinar", busca la ruta del archivo SQL que viene en la carpeta del proyecto
- Baja hasta el final y click al botón "Importar"

# Ejecutar en el navegador
- En la barra de URL coloca "http://localhost/nombre_de_la_carpeta/index.html"
- Enter y eso abrirá el formulario

# Agradecimientos
A los profesores Gustavo Rojas y Carolina Riveros por su arduo trabajo al enseñarnos, Punto Digital San Martín Mza por la oportunidad de aprendizaje.
