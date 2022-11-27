<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Politica de Privacidad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">   POLÍTICA DE PRIVACIDAD</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

Ezpcbuilds se preocupa por los asuntos relativos a privacidad y quiere que usted conozca cómo recopilamos, usamos y revelamos la información. La presente Política de Privacidad describe nuestras prácticas en relación con la información que nosotros o nuestros proveedores de servicios externos recopilan a través de algunos de nuestros sitios web, propiedades web (por ejemplo, widgets y aplicaciones) y aplicaciones móviles ("Apps móviles"), de nuestra propiedad o gestionados por nosotros en cada caso que enlazan a esta Política de Privacidad (cada uno de ellos, en lo sucesivo, una "Propiedad" o conjuntamente, las "Propiedades"). Al proporcionarnos Información Personal (como se define a continuación) a través de las Propiedades, usted reconoce que ha leído esta Política de Privacidad y que entiende los términos y condiciones que contiene.

1. INFORMACIÓN PERSONAL
1.1 Información personal que podremos recopilar
En relación con las Propiedades, se recopilan dos tipos de información: Información personal y Otra información. "Información personal" es información que le identifica o le hace identificable como individuo. "Otra información" es cualquier información que no revele su identidad específica. Si estamos obligados a tratar Otra información como Información personal en virtud de la legislación aplicable, la usaremos y revelaremos para los fines para los que usamos y revelamos la Información personal, como se detalla en esta Política. Otra información tiene su propio apartado más adelante, bajo el epígrafe "OTRA INFORMACIÓN".
Nosotros y nuestros proveedores de servicios externos podremos recopilar la siguiente Información personal de usted, como:
•	Nombre
•	Dirección postal (incluidas las direcciones de facturación y envío)
•	Número teléfono
•	Dirección de correo electrónico
•	Fecha de nacimiento
•	Número de tarjeta de crédito y débito
•	Detalles de compra
•	Talla, peso (si usa un asesor de talla)
1.2 Recopilación de Información personal
Nosotros y nuestros proveedores de servicios externos recopilamos Información personal a través de las Propiedades de varias maneras, incluidas:
1.2.1 A través de las Propiedades
Podremos recopilar Información personal a través de las Propiedades, por ejemplo, cuando usted se registra en newsletter u otras comunicaciones a través de las propiedades, cuando registra una cuenta de cliente, hace una compra o una solicitud.
1.2.2 Fuera de Internet
Podremos recopilar Información personal sobre usted fuera de Internet, por ejemplo, si nos proporciona información en una tienda física E.M.P. o en el recinto de un concierto.
1.2.3 De Otras fuentes
Podremos recibir su Información personal de otras fuentes, por ejemplo:
•	bases de datos de direcciones; o
•	socios de marketing cuando comparten información con nosotros en el contexto de campañas de marketing y de promoción relacionadas con nuestra actividad.
Si usa sus redes sociales u otra cuenta de terceros para participar en nuestros sorteos, concursos o promociones o a través de una pasarela para iniciar sesión en dicha cuenta en nuestras Propiedades, compartirá determinada Información personal de su cuenta de tercero con nosotros, que puede incluir, por ejemplo, su nombre, dirección de correo electrónico, fotografía, lista de contactos de redes sociales, historial de música escuchada, canciones favoritas y cualquier otra información cuyo acceso usted facilita o a la que podemos acceder de otro modo cuando usted se conecta a través de dicha cuenta de terceros.
1.2.4
No es necesario que nos proporcione ninguna Información personal en virtud de ninguna ley o contrato. Por ejemplo, cuando usted participa en varias oportunidades que se ofrecen a través de las Propiedades, recopilamos Información personal sobre usted para permitirle a usted (o a nosotros) mejorar su experiencia en las Propiedades.
1.3 Cómo usamos la Información personal
Nosotros y nuestros proveedores de servicios externos usamos Información personal para los siguientes fines empresariales, incluidos:
1.3.1
Proporcionar la operatividad de las Propiedades y llevar a cabo sus solicitudes.
•	Proporcionarle la operatividad de las Propiedades, como facilitar el acceso a su cuenta registrada y ofrecerle el servicio al cliente correspondiente.
•	Responder a sus solicitudes y atender sus peticiones, cuando se pone en contacto con nosotros a través de los formularios de contacto online o de otro modo, por ejemplo, cuando nos envía preguntas, sugerencias, felicitaciones o quejas, o cuando solicita información acerca de nuestras Propiedades.
•	Para enviarle información administrativa, incluida la información relativa a las Propiedades y cambios de nuestros términos, condiciones y políticas.
•	Para completar y realizar su compra, por ejemplo, para procesar sus pagos, enviarle su pedido, comunicarnos con usted en relación con su compra y ofrecerle el servicio al cliente correspondiente.
•	Para proporcionarle el servicio al cliente internacional de todas las empresas EMP.
Desarrollaremos estas actividades para gestionar nuestra relación contractual con usted y/o cumplir con una obligación legal.
1.3.2
Para enviarle nuestro boletín de noticias y/u otros materiales de marketing y para facilitar que se comparta a través de las redes sociales.
•	Para enviarle periódicamente newsletters con información acerca de nuestros productos, servicios y newsletter con información de nuestras filiales del Grupo Warner Music. También puede optar por dar información adicional al suscribirse al boletín de noticias. Si se ha suscrito a nuestro boletín de noticias, recibirá un correo electrónico nuestro. Para completar su suscripción a nuestro boletín de noticias, tendrá que hacer clic en el vínculo de activación desde dicho correo.
•	Para enviarle otras ofertas de marketing que creemos que le resultarán de interés si usted ha indicado que desea recibirlas (incluidas, entre otras, novedades de nuestros proveedores de servicios externos que envían correo directo y otro tipo de publicidad).
•	Para enviarle mensajes de texto SMS a su número de teléfono, por ejemplo, si ha participado en un sorteo con este número y ha indicado que desea recibirlo. Tenga en cuenta que pueden ser aplicables tarifas de mensajes y transmisión de datos. Deberá confirmar con su proveedor de servicios móviles las tarifas de transmisión de datos.
Llevaremos a cabo esta actividad con su consentimiento o porque tenemos un interés legítimo.
1.3.5
Agregar y/o mantener anónima la Información personal.
•	Podremos agregar y/o mantener anónima la Información personal de modo que ya no se considere Información personal. Lo hacemos para generar otros datos para nuestro uso, que podremos usar y revelar para cualquier fin.
Llevaremos a cabo esta actividad porque tenemos un interés legítimo.
1.3.6
Cumplimiento de nuestros objetivos empresariales.
•	Análisis de datos, por ejemplo, para mejorar la eficiencia de nuestras Propiedades;
•	Auditorías, para verificar que nuestros procesos internos funcionan como es debido y cumplen las exigencias legales, reglamentarias o contractuales;
•	Para fines de control de fraude y seguridad, por ejemplo, para detectar y prevenir ciberataques o intentos de cometer usurpación de la identidad;
•	Para desarrollar nuevos productos y servicios;
•	Para mejorar o modificar nuestros productos y servicios actuales;
•	Para identificar tendencias de uso, por ejemplo, entendiendo qué partes de nuestras Propiedades son las más interesantes para los usuarios;
•	Para determinar la efectividad de las campañas promocionales de modo que podamos adaptar nuestras campañas a las necesidades e intereses de los usuarios;
•	Para operar y expandir nuestras actividades empresariales, por ejemplo, entender qué partes de nuestras Propiedades son de mayor interés para nuestros usuarios de modo que podamos centrar nuestros esfuerzos en adaptarnos a los intereses de nuestros usuarios.
Participamos en dichas actividades para gestionar nuestra relación contractual con usted, para cumplir una obligación legal y/o porque tenemos un interés legítimo en ello.

1.5 Otros usos y exposiciones
También usamos y revelamos su Información personal si es necesario o adecuando, especialmente cuando tenemos la obligación legal de hacerlo o un interés legítimo en ello:
1.5.1
Para cumplir con la legislación aplicable.
•	Esto puede incluir leyes fuera de su país de residencia.
1.5.2
Para responder a solicitudes de autoridades públicas o gubernamentales.
•	Pueden incluir autoridades fuera de su país de residencia.
1.5.3
Para cooperar con el cumplimiento de la ley.
•	Por ejemplo, cuando respondemos a solicitudes y órdenes de ejecución de la ley.
1.5.4
Por otros motivos jurídicos.
•	Para hacer cumplir nuestros términos y condiciones
•	Para proteger nuestras operaciones o las de cualquiera de nuestros afiliados o artistas;
•	Para proteger nuestros derechos, a nuestros artistas, a usted o a otros; o
•	Para permitirnos recurrir o limitar los daños que podamos sufrir.
1.5.5
En relación a una venta o transacción comercial.
•	Tenemos un interés legítimo en revelar o transferir su información personal a un tercero en caso de cualquier reorganización, fusión, venta, empresa conjunta, cesión, transferencia u otra disposición de todo o parte de nuestro negocio, activos o existencias (incluidos los relacionados con cualquier procedimiento de quiebra o procedimiento similar). Dichos terceros pueden incluir, por ejemplo, la entidad adquiriente y sus asesores.

1.6 Período de conservación de datos
Conservaremos su Información personal el tiempo que sea necesario o durante el tiempo que esté permitido a la luz del/los fin(es) para los que se obtuvo y conforme a la legislación aplicable.
Los criterios que aplicamos para determinar nuestros periodos de conservación incluyen:
•	El transcurso de tiempo durante el cual tengamos una relación con usted y le proporcionemos las Propiedades a usted (por ejemplo, mientras tenga una cuenta con nosotros o siga usando las Propiedades);
•	Si existe una obligación legal a la que estemos sujetos (por ejemplo, ciertas leyes requieren que mantengamos registros de sus transacciones durante un determinado periodo de tiempo antes de que podamos eliminarlos); o
•	Si es aconsejable una conservación en vista de nuestra situación jurídica (como en relación con regímenes de prescripción, litigios o investigaciones reglamentarias aplicables).
1.7 Información confidencial
Le pedimos que no nos envíe ni nos revele ninguna Información personal confidencial (como números de seguridad social, información relativa a su origen racial o étnico, opiniones políticas, religión u otras creencias, salud, antecedentes penales o afiliación sindical) en o a través de las Propiedades o de otro modo.

2. OTRA INFORMACIÓN QUE PODREMOS RECOPILAR
Nosotros y nuestros proveedores de servicios externos podremos recopilar Otra información (como se ha definido anteriormente), como:
•	Navegador e información de dispositivo
•	Datos de uso de App móvil
•	Archivos de registro del servidor
•	Información recopilada a través de cookies, etiquetas de píxel y otras tecnologías. Consulte nuestra Política de Cookies para obtener información más detallada acerca de cómo usamos las cookies.
•	Información de ubicación geográfica
•	Información demográfica y otra información que no permite identificarle personalmente que usted ha proporcionado
•	Información sobre cómo usa las Propiedades
•	Información agregada
2.1 Cómo recopilamos Otra información
Nosotros y nuestros proveedores de servicios externos podremos recopilar otra información de varias maneras, incluidas:
2.1.1
A través de su navegador o su dispositivo:
La mayoría de buscadores recopilan determinada información, como su dirección de Control de acceso de medios (MAC), tipo de dispositivo (Windows o Macintosh), resolución de pantalla, versión del sistema operativo, tipo y versión del buscador de Internet y versión y tipo de la Propiedad que usted está usando. Nosotros y nuestros proveedores de servicios podremos recopilar además un identificador de dispositivo único asignado por nosotros o nuestros proveedores de servicios al dispositivo desde el que usted accede a una Propiedad y otra información de transacción del dispositivo que nosotros y nuestros proveedores de servicios podremos usar para proporcionar contenido y anuncios al dispositivo.
2.1.2
A través de su uso de las Apps móviles:
Cuando usted descarga y utiliza una App móvil, nosotros y nuestros proveedores de servicios podremos rastrear y recopilar datos de uso de la App móvil, como la fecha y la hora en la que la App móvil en su dispositivo accede a nuestros servidores y qué información y archivos se han descargado a la App móvil en base a su número de dispositivo.
2.1.3
A través de los archivos de registro del servidor:
Una dirección de Protocolo de Internet (IP) es un número que se asigna automáticamente a su dispositivo desde el que usted accede a la Propiedad a través de su Proveedor de Servicios de Internet (ISP), y se identifica y registra automáticamente en los archivos de registro de nuestro servidor siempre que visite la Propiedad junto con el tiempo de la visita y la actividad en la Propiedad. Nosotros y nuestros proveedores de servicios usamos direcciones IP para calcular los niveles de uso de la Propiedad, ayudar a diagnosticar problemas del servidor, administrar las Propiedades y determinar su ubicación geográfica aproximada.
2.1.5
Información de ubicación geográfica
Si usa cualquier producto o servicio que permite la ubicación, nos enviará información de ubicación. Cuando use un servicio que permita la ubicación, podremos recopilar y tratar información sobre su ubicación geográfica precisa, como señales de GPS enviadas por un dispositivo móvil. Nosotros y nuestros proveedores de servicios externos podremos usar la ubicación física de su dispositivo para proporcionarle servicios, contenido y publicidad basados en la ubicación. En algunos casos, se le permitirá negar tales usos de la ubicación de su dispositivo, pero si decide negar dichos usos, no podremos proporcionarle los servicios y el contenido personalizado correspondiente.
2.1.6
De usted:
Podremos recopilar información demográfica, como su código postal o su sexo, así como otra información como sus maneras preferidas para comunicarse, cuando usted nos proporcione voluntariamente esta información. Esta información no le identifica personalmente ni a usted ni a ningún otro usuario de las Propiedades, a menos que se añada más información que pueda permitir que se produzca la identificación. En tal caso, la información se tratará como Información personal.
2.1.7
Información sobre cómo interactúa con las Propiedades:
Podremos recopilar información sobre cómo interactúa con las Propiedades. Por ejemplo, algunas Propiedades pueden utilizar herramientas analíticas para ayudarnos a ofrecerle un servicio mejor con mejores productos, servicios y revisiones de las Propiedades. Esta información recopilada puede indicarnos qué servicios y características utiliza más en una Propiedad, así como el tipo de dispositivo y las características del hardware, el país y el idioma de descarga, etc.
2.1.8
Agregando información:
Podremos agregar Información personal de modo que el producto final no le identifique personalmente ni a ningún usuario de las Propiedades, por ejemplo, usando la Información personal para calcular el porcentaje de nuestros usuarios a los que les gusta un artista concreto.
2.1.9
Recopilamos datos personales cuando se registra para obtener una cuenta de cliente mediante el inicio de sesión único ("SSO"). Si ya tiene una cuenta con un proveedor de SSO, puede registrarse para obtener una cuenta de cliente sin pasar por el proceso de registro e inicio de sesión. Para hacer esto, debe confirmar el registro de SSO usando un botón de SSO y verificar su identidad con el proveedor de SSO o ya estar registrado con este proveedor. Según el proveedor de SSO respectivo, usted nos proporciona algunos de sus datos personales de su cuenta de SSO durante el proceso de registro inicial de SSO. Suele ser el nombre y la dirección de correo electrónico de la cuenta SSO. Usamos estos datos para crear su cuenta de cliente y vincularla a la cuenta SSO. Llevamos a cabo estas actividades para regular nuestra relación contractual de cuenta de cliente con usted (Artículo 6 (1) (b) GDPR).
2.1.9.1 Iniciar sesión con Apple
Este servicio SSO es proporcionado por Apple Inc, One Apple Park Way; Cupertino, CA 95014, EE. UU., y sus filiales (coloquialmente, "Apple"). Más información sobre el servicio SSO "Iniciar sesión con Apple" está disponible en Apple en https://support.apple.com/en-gb/HT210318. No tenemos control sobre los datos que Apple recopila mediante el uso del servicio "Iniciar sesión con Apple" o su procesamiento posterior. Para obtener información sobre cómo Apple procesa los datos, consulte la Política de privacidad de Apple en https://www.apple.com/legal/privacy/en-ww/.
2.1.9.2 Iniciar sesión con Google (botón SSO 'Iniciar sesión con Google')
Este servicio SSO es proporcionado por Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, EE. UU., y sus afiliados (coloquialmente, "Google"). Google proporciona más información sobre el servicio SSO "Iniciar sesión con Google" en https://support.google.com/accounts/answer/112802?hl=en. No tenemos control sobre los datos que Google recopila a través del uso del servicio "Iniciar sesión con Google" o su procesamiento posterior. Para obtener información sobre cómo Google procesa los datos, consulte la Política de privacidad de Google en https://policies.google.com/privacy?hl=en-GB.
2.1.9.3 Plugins sociales:
Nuestros complementos no están integrados en nuestro sitio web sin restricción, sino solo mediante un vínculo HTML (denominado "complemento shariff"). Este tipo de integración garantiza que no se establecerá una conexión al servicio del proveedor de redes sociales todavía por usar nuestro sitio web. Si hace clic en un botón de una red social, se abrirá una nueva ventana y un acceso a la página del proveedor de servicios. Con el fin y en el ámbito de la recogida de datos y el procesamiento y uso adicional de datos por parte de proveedores de redes sociales en sus sitios web respectivos, y para sus derechos y opciones de configuración relacionados para proteger su privacidad, consulte las políticas de privacidad de datos de los proveedores
2.2 Cómo podemos usar y revelar Otra información
Tenga en cuenta que podremos usar y revelar otra información para cualquier fin, excepto cuando la ley aplicable nos obligue a lo contrario. Si la ley nos obliga a tratar Otra información como Información personal, la usaremos como se describe en la sección "Cómo recopilamos Otra información", más arriba, así como para todos los fines para los que usamos y revelamos la Información personal. En algunos casos, combinaremos Otra información con la Información personal (como combinar su nombre y su ubicación geográfica). Si combinamos Otra información con su Información personal, la información combinada la trataremos como Información personal mientras esté combinada.
3. SEGURIDAD
Aplicaremos las medidas físicas, técnicas y administrativas razonables para proteger la Información personal que se encuentre bajo nuestro control. Si tiene motivos para creer que su interacción con nosotros ya no es segura, notifíquenoslo inmediatamente conforme a la sección "Contacto", que se incluye más adelante.
4. SUS DERECHOS
4.1 Sus elecciones en relación a nuestro uso y revelación de su Información personal
Le proporcionamos muchas elecciones sobre cómo podemos usar y revelar su Información personal para fines de marketing.
Usted podrá rechazar lo siguiente, como se establece a continuación:
4.1.1
Recibir nuestros correos electrónicos relacionados con marketing o los de nuestros afiliados:
4.1.2
Si no desea recibir nuestros correos electrónicos relacionados con marketing o los de nuestros afiliados en adelante, podrá optar por dejar de recibir dichos correos electrónicos usando el mecanismo de cancelación de suscripción que se proporciona en el correo electrónico o escribiéndonos un correo electrónico a [ ezpcbuildsservice@gmail.com]. Recibir mensajes de texto SMS nuestros y de nuestros afiliados:
Si no desea recibir nuestros mensajes de texto SMS relacionados con marketing o los de nuestros afiliados en adelante, podrá optar por dejar de recibir dichos mensajes enviándonos un mensaje de texto de respuesta con el texto "STOP" o escribiéndonos un correo electrónico a [ezpcbuildsservice@gmail.com .
4.1.3
Que compartamos su Información personal con artistas o terceros no afiliados para sus fines de marketing:
Si prefiere que no compartamos su Información personal con en adelante con artistas o partes no afiliadas para sus fines de marketing, puede optar por que dejemos de compartir dicha información enviándonos un correo electrónico a [ ezpcbuildsservice@gmail.com] Indique claramente en su correo qué es lo que rechaza. Cumpliremos su(s) solicitud(es) en cuanto sea razonablemente posible, en cualquier caso, dentro del periodo que establece la ley. Tenga en cuenta que, si opta por dejar de recibir nuestros mensajes relacionados con marketing, podremos seguir enviándole mensajes administrativos.
4.2 Cómo puede acceder, rectificar o cancelar su Información personal
Si desea acceder, revisar, corregir, actualizar, suprimir, restringir o cancelar la Información personal que usted nos ha proporcionado anteriormente, si desea oponerse a que usemos su Información personal o si quiere solicitar que le enviemos una copia electrónica de su Información personal para transmitirla a otra empresa (siempre que la ley permita que se realice dicha portabilidad de datos), puede ponerse en contacto con nosotros en: [ezpcbuildsservice@gmail.com]. Responderemos a su solicitud conforme a la ley aplicable.
También podrá presentar una queja ante la autoridad reguladora de protección de datos competente.
En su solicitud, indique claramente qué Información personal desea modificar, si le gustaría eliminar su Información personal de nuestra base de datos u otro procedimiento, indíquenos qué limitaciones le gustaría imponer a nuestro uso de su Información personal. Para su protección, solo ejecutaremos las solicitudes respecto a la Información personal asociada con la dirección de correo electrónico particular que usted usa para enviarnos su solicitud, y necesitaremos verificar su identidad antes de ejecutar su solicitud. Trataremos de dar respuesta a su solicitud tan pronto como sea posible.
Tenga en cuenta que podremos necesitar conservar determinada información para fines de conservación de registros y/o completar cualquier transacción que usted haya iniciado antes de solicitar un cambio o cancelación (por ejemplo, cuando realiza una compra o participa en una promoción, no podrá cambiar o eliminar la Información personal proporcionada hasta que finalice dicha compra o promoción).
Cuando nuestra recopilación y uso de la Información personal estén basados en su consentimiento, usted podrá retirar dicho consentimiento en cualquier momento escribiéndonos un correo electrónico a [ ezpcbuildsservice@gmail.com], y dicha retirada no afectará a la legitimidad del tratamiento basado en su consentimiento antes de su retirada.
5. TRANSFERENCIA TRANSFRONTERIZA
Las Propiedades son controladas y gestionadas desde Alemania; en consecuencia, esta Política de Privacidad y la recopilación, uso y revelación que hacemos de su Información personal, se rige por las leyes de Alemania. Su Información personal se podrá almacenar y tratar en cualquier país en el que contemos con instalaciones o en el que contratemos a proveedores de servicios y al usar las Propiedades usted entiende que su información se transferirá a países fuera de su país de residencia, incluidos los países fuera del EEE, que pueden tener leyes de protección de datos diferentes a las de su país.
Si usted está en el EEE: Algunos de los países que no pertenecen al EEE son reconocidos por la Comisión Europea por proporcionar un nivel adecuado de protección de los datos conforme a los estándares del EEE. La lista completa de dichos países está disponible aquí: https://ec.europa.eu/info/law/law-topic/data-protection_de. Para transferencias desde los países del EEE a países que la Comisión Europea no considera adecuados, hemos establecido unas medidas adecuadas, como cláusulas contractuales estándar, adaptadas por la Comisión Europea para la Información personal. Puede conseguir una copia de dichas medidas poniéndose en contacto con [https://www.aepd.es/].
6. ACTUALIZACIONES A ESTA POLÍTICA DE PRIVACIDAD
Podremos modificar esta Política de Privacidad en cualquier momento. Eche un vistazo a la leyenda "ÚLTIMA REVISIÓN" en la parte superior de esta página para ver cuando se revisó por última vez esta Política de Privacidad. Cualquier cambio en esta Política de Privacidad será efectivo cuando proporcionemos la Política de Privacidad revisada en o a través de una Propiedad.
7. CONTACTO
EzpcBuilds es la empresa responsable de recopilar, usar y revelar su Información personal en virtud de esta Política de Privacidad:
ezpcbuildsservice@gmail.com

 </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="module" src="/firebase-messaging-sw.js"></script>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js"
        import { getMessaging,onMessage,getToken } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-messaging.js"
        // Import the functions you need from the SDKs you need

        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
       const firebaseConfig = {
    apiKey: "AIzaSyDqMKCEvSxrusxvJQN22qwH-W2rmt10VSI",
    authDomain: "dbestech-food-app-commercial.firebaseapp.com",
    projectId: "dbestech-food-app-commercial",
    storageBucket: "dbestech-food-app-commercial.appspot.com",
    messagingSenderId: "542490378494",
    appId: "1:542490378494:web:beca27ddb1df27b05de5af"
  };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const messaging = getMessaging(app);

        getStartToken();
        function getStartToken(){
            getToken(messaging, { vapidKey: 'BP-wFkN56uHU1j95xPsHJiLaYp8jMYxbOsDewi4nz-qOTIwHymLlaqRXG400KsSYDOZjH-JgjEMUcgcjRiCn-ic' }).then((currentToken) => {
                if (currentToken) {
                    console.log("currentToken--->"+currentToken);
                    sendTokenToServer(currentToken);
                } else {
// Show permission request.
                    RequestPermission();
                    setTokenSentToServer(false);
                }

            }).catch((err) => {
                console.log("currentToken --err--err--->"+err);
                setTokenSentToServer(false);
            });


        }
        function RequestPermission(){
            messaging.requestPermission().then(function(permission){
                if (permission === 'granted') {
                    console.log("have Permission");//calls method again and to sent token to server
                    getStartToken();
                }
                else{
                    console.log("Permission Denied");
                }
            }).catch(function(err){
                console.log(err);
            })
        }
        function sendTokenToServer(token){
            //   if (!isTokensendTokenToServer()) {
            $.ajax({
                url: "/api/v1/send_token",
                type: 'get',
                data: {push_token:token},
                success: function (response) {
                    console.log("token_response"+response);
                    setTokenSentToServer(true);
                },
                error: function (err) {
                    setTokenSentToServer(false);
                },});
            // }
        }
        function isTokensendTokenToServer() {
            return window.localStorage.getItem('sendTokenToServer') === '1';
        }
        function setTokenSentToServer(sent) {
            window.localStorage.setItem('sendTokenToServer', sent ? '1' : '0');
        }

        // Message received
        onMessage(messaging, (payload) => {
            console.log('Message received. ', payload);
            // ...
        });



    </script>


</html>
