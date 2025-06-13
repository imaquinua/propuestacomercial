# propuestacomercial

Este repositorio contiene un ejemplo sencillo de un formulario HTML que envía un correo de confirmación a través de PHP.

## Archivos

 - `index.html`: formulario donde el usuario ingresa su nombre, correo y selecciona un plan. Al enviarlo muestra un mensaje emergente de agradecimiento.
- `sendmail.php`: script que procesa el formulario y envía un correo con los datos del usuario a `chumbi@imaquinua.com` utilizando la función `mail` de PHP.

## Uso

1. Coloca los archivos en un servidor con PHP habilitado.
2. Ajusta en `sendmail.php` la dirección de correo remitente (`no-reply@miempresa.com`) si es necesario.
3. Abre `index.html` en tu navegador y completa el formulario.
4. Al enviar, se mandará un correo con los datos ingresados a `chumbi@imaquinua.com`.
5. Tras el envío aparecerá un mensaje emergente de agradecimiento.

Ten en cuenta que la función `mail` requiere que el servidor esté configurado para enviar correos.
