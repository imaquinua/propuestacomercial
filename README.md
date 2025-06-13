Instrucciones para Desplegar el Formulario de Aceptación de Oferta
Este proyecto contiene un frontend (index.html) y un backend (server.js) para capturar y enviar los datos de un formulario por correo electrónico.

Requisitos Previos
Node.js y npm: Asegúrate de tener Node.js instalado en tu sistema. Puedes descargarlo desde nodejs.org. npm se instala automáticamente con Node.js.

Paso 1: Configurar el Backend (server.js)
Crear un directorio de proyecto:

mkdir andina-backend
cd andina-backend

Inicializar el proyecto de Node.js:

npm init -y

Instalar las dependencias necesarias:

Express: Para crear el servidor.

Nodemailer: Para enviar correos.

CORS: Para permitir la comunicación entre el frontend y el backend.

npm install express nodemailer cors

Guardar el código: Crea un archivo llamado server.js y pega el contenido del backend proporcionado.

Configurar las credenciales de correo:

Abre el archivo server.js.

Busca la sección nodemailer.createTransport.

Reemplaza 'TU_CORREO@gmail.com' con la dirección de correo electrónico que usarás para enviar las notificaciones.

Reemplaza 'TU_CONTRASEÑA_DE_APLICACION' con una contraseña de aplicación generada desde tu cuenta de Google. (No uses tu contraseña principal. Busca "Google App Passwords" para ver cómo generarla).

Paso 2: Ejecutar el Servidor Backend
En la terminal, dentro del directorio andina-backend, ejecuta el siguiente comando:

node server.js

Si todo está bien, verás el mensaje: Servidor escuchando en http://localhost:3000. ¡No cierres esta terminal!

Paso 3: Probar el Frontend (index.html)
Guardar el archivo: Guarda el contenido del frontend en un archivo llamado index.html.

Abrir en el navegador: Haz doble clic en el archivo index.html para abrirlo en tu navegador web.

Realizar la prueba:

Haz clic en el botón "Aceptar Oferta".

Llena el formulario con datos de prueba.

Haz clic en "Enviar Solicitud".

Deberías ver un mensaje de éxito. Revisa la bandeja de entrada del correo que configuraste como destinatario (ventas@andina.com) para confirmar que recibiste la notificación.
