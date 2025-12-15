# loginGoogle-Laravel

## Introducción

En este trabajo se implementa la funcionalidad de inicio de sesión en una aplicación Laravel utilizando la autenticación de Google. Esto permite a los usuarios iniciar sesión en la aplicación utilizando sus credenciales de Google, proporcionando una experiencia de usuario más fluida y segura.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:  

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- Una cuenta de Google para configurar las credenciales de OAuth 2.0  

## Diseño del proyecto

El proyecto está estructurado de la siguiente manera:
- **Rutas**: Definidas en `routes/web.php` para manejar las solicitudes de autenticación.
- **Controladores**: `AuthController` maneja la lógica de autenticación con Google.
- **Modelos**: `User` modelo para representar a los usuarios en la base de datos.
- **Vistas**: Archivos Blade en `resources/views` para la interfaz de usuario.

## Diagrama de flujo de autenticación con Google

```plaintext
[Inicio] --> [Usuario hace clic en "Iniciar sesión con Google"]
    --> [Redirigir a Google para autenticación]
    --> [Usuario ingresa credenciales de Google]
    --> [Google redirige de vuelta a la aplicación con el token]
    --> [Controlador maneja el token y obtiene información del usuario]
    --> [Verificar si el usuario existe en la base de datos]
        --> [Si existe, iniciar sesión]
            -->[Si es admin, redirigir a dashboard de admin]
                -->[pagina de lista alumnos]
                -->[pagina de creacion de usuarios]
                -->[pagina de modificacion de datos de usuarios]
            -->[Si es usuario normal, redirigir a página de inicio de cursos]
        --> [Si no existe, crear nuevo usuario y luego iniciar sesión]
    --> [Redirigir al usuario a la página de inicio o dashboard dado el caso si es usuario o admin] ---
```     

## Configuración de Google OAuth 2.0
1. Ve a la [Consola de Desarrolladores de Google](https://console.developers.google.com/).
2. Crea un nuevo proyecto.
3. Habilita la API de Google+ para tu proyecto.
4. Configura la pantalla de consentimiento OAuth.
5. Crea credenciales de OAuth 2.0 y obtén el Client ID y Client Secret.
6. Establece la URI de redirección autorizada a `http://tu_dominio.com/auth/google/callback`.

## Uso

1. Inicia el servidor de desarrollo de Laravel:
    ```bash
    php artisan serve
    ```
2. Abre tu navegador web y navega a `http://localhost:8000`.
3. Haz clic en el botón "Iniciar sesión con Google" para autenticarte utilizando tu cuenta de Google.
4. Después de iniciar sesión, serás redirigido de vuelta a la aplicación y podrás acceder a las funcionalidades protegidas.

## Uso de APIs Alumnos

Este proyecto también incluye la integración con APIs para gestionar alumnos y cursos. A continuación se describen las funcionalidades disponibles:

### API de Alumnos

- **Obtener lista de alumnos**: Realiza una solicitud GET a `/api/alumnos` para obtener una lista de todos los alumnos registrados.
- **Agregar un nuevo alumno**: Realiza una solicitud POST a `/api/alumnos` con los datos del alumno en el cuerpo de la solicitud.
- **Actualizar un alumno existente**: Realiza una solicitud PUT a `/api/alumnos/{id}` con los datos actualizados del alumno.
- **Eliminar un alumno**: Realiza una solicitud DELETE a `/api/alumnos/{id}` para eliminar un alumno específico.

## vista de login

### Pantalla de inicio de sesión
La pantalla de inicio de sesión presenta un botón que permite a los usuarios iniciar sesión utilizando su cuenta de Google. Al hacer clic en este botón, los usuarios son redirigidos a la página de autenticación de Google.

### Pantalla de administrador
Después de iniciar sesión, si el usuario tiene privilegios de administrador, será redirigido a una pantalla de administrador donde podrá gestionar usuarios y ver la lista de alumnos.


### Pantalla de usuario normal
Si el usuario no tiene privilegios de administrador, será redirigido a una pantalla de usuario normal donde podrá ver los cursos disponibles. 

## Contribución
Si deseas contribuir a este proyecto, por favor sigue estos pasos:
1. Haz un fork del repositorio.
2. Crea una nueva rama para tu característica o corrección de errores.
3. Realiza tus cambios y haz commit de ellos. 
4. Envía un pull request describiendo tus cambios.
## Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.
