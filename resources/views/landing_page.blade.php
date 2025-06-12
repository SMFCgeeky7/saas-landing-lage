<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InVentas - Plataforma para Mayoristas</title>

    <!-- Cargar Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/landing_page.css') }}" rel="stylesheet"> <!-- Cargar tu propio CSS -->
</head>

<body class="bg-light">

    <!-- Encabezado (Header) -->
    <header class="text-white py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="title text-3xl font-bold">InVentas</h1>
            <nav>
                <ul class="list-unstyled d-flex mb-0">
                    <li><a href="#caracteristicas" class="text-white mx-3">Características</a></li>
                    <li><a href="#beneficios" class="text-white mx-3">Beneficios</a></li>
                    <li><a href="#testimonios" class="text-white mx-3">Testimonios</a></li>
                    <li><a href="#planes" class="text-white mx-3">Planes</a></li>
                    <li><a href="#formas_pago" class="text-white mx-3">Formas de Pago</a></li>
                    <li><a href="#contacto" class="text-white mx-3">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Sección Hero -->
    <section id="hero" class="subheader text-center text-white py-5">
        <div class="container">
            <h2 class="title text-dark text-4xl font-semibold mb-4">Transforma tu negocio</h2>
            <p class="text-dark text-lg mb-6">¡Soluciones mayoristas y minoristas especializadas en ventas!</p>
            <a href="#servicios" class="btn text-dark">Descubre Nuestros Servicios</a>
        </div>
    </section>

    <section id="caracteristicas" class="py-5">
        <div class="container text-center">
            <h3 class="text-3xl font-bold mb-8">Características de nuestro servicio</h3>

            <!-- Carrusel -->
            <div id="featuresCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Item 1 -->
                    <div class="carousel-item active">
                        <div class="text-center w-50 mx-auto"> <!-- Contenedor padre con ancho fijo -->
                            <h4>Plataforma Inteligente</h4>
                            <div class="ratio ratio-16x9 my-3">
                                <img src="/images/emprendedora_imagen.jpeg"
                                    class="img-fluid rounded placeholder-img"
                                    alt="Placeholder 16:9">
                            </div>
                            <p> <!-- El párrafo hereda el ancho del padre -->
                                Una plataforma fácil de usar que permite a los mayoristas y minoristas gestionar inventarios, ventas y pedidos desde un solo lugar.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="carousel-item">
                        <div class="text-center w-50 mx-auto"> <!-- Contenedor padre con ancho fijo -->
                            <h4>Estadisticas para tus ventas</h4>
                            <div class="ratio ratio-16x9 my-3">
                                <img src="/images/estadistica_imagen.png"
                                    class="img-fluid rounded placeholder-img"
                                    alt="Placeholder 16:9">
                            </div>
                            <p> <!-- El párrafo hereda el ancho del padre -->
                                EStadisticas en tiempo real que permiten a los usuarios tomar decisiones informadas basadas en datos precisos y actualizados.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="carousel-item">
                        <div class="text-center w-50 mx-auto"> <!-- Contenedor padre con ancho fijo -->
                            <h4>Plataforma Inteligente</h4>
                            <div class="ratio ratio-16x9 my-3">
                                <img src="/images/soporte_imagen.jpeg"
                                    class="img-fluid rounded placeholder-img"
                                    alt="Placeholder 16:9">
                            </div>
                            <p> <!-- El párrafo hereda el ancho del padre -->
                                El equipo de InVentas ofrece asesoría exclusiva para cada cliente, adaptando soluciones a medida que impulsan el crecimiento de tu negocio.
                            </p>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Beneficios -->
    <section id="beneficios" class="bg-light py-5">
        <div class="container text-center">
            <h3 class="text-3xl font-bold mb-8">Beneficios</h3>
            <ul class="list-unstyled">
                <li>Acceso a un amplio catálogo de productos de bisutería</li>
                <li>Precios competitivos y descuentos exclusivos</li>
                <li>Soporte personalizado 24/7</li>
            </ul>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="py-5">
        <div class="container text-center">
            <h3 class="text-3xl font-bold mb-8">Testimonios de Clientes</h3>
            <div class="row">
                <div class="col-md-4">
                    <p>"Gracias a InVentas, hemos mejorado nuestras ventas y distribuimos nuestros productos a un mayor número de clientes."</p>
                    <h5>- Juan Pérez, Distribuidor de Bisutería</h5>
                </div>
                <div class="col-md-4">
                    <p>"Excelente servicio, muy profesionales. ¡Altamente recomendados! Nos han ayudado a expandir nuestro mercado."</p>
                    <h5>- Marta López, Tienda de Accesorios</h5>
                </div>
                <div class="col-md-4">
                    <p>"La plataforma es fácil de usar y ha facilitado la gestión de nuestros pedidos. Definitivamente la mejor opción para mayoristas."</p>
                    <h5>- Luis García, Mayorista de Joyería</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Planes -->
    <section id="planes" class="bg-light py-5">
        <div class="container text-center">
            <h3 class="text-3xl font-bold mb-8">Planes Disponibles</h3>
            <div class="row">
                <div class="col-md-4">
                    <h4>Plan Básico</h4>
                    <p>Ideal para pequeñas tiendas minoristas. Incluye acceso al catálogo básico y un número limitado de productos.</p>
                </div>
                <div class="col-md-4">
                    <h4>Plan Avanzado</h4>
                    <p>Para empresas de tamaño medio. Incluye todos los productos, soporte prioritario y acceso a herramientas avanzadas de gestión.</p>
                </div>
                <div class="col-md-4">
                    <h4>Plan Premium</h4>
                    <p>Para grandes distribuidores. Incluye todas las ventajas del Plan Avanzado y personalización exclusiva, junto con análisis avanzados de ventas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formas de Pago -->
    <section id="formas_pago" class="bg-light py-5">
        <div class="container text-center">
            <h3 class="text-3xl font-bold mb-8">Formas de Pago</h3>
            <p>En InVentas ofrecemos diversas formas de pago seguras y convenientes para nuestros clientes. Puedes pagar con:</p>
            <ul class="list-unstyled">
                <li><strong>Tarjetas de Crédito y Débito</strong>: Aceptamos todas las principales tarjetas de crédito y débito, incluyendo Visa, MasterCard y American Express.</li>
                <li><strong>Transferencias Bancarias</strong>: Realiza pagos mediante transferencias bancarias directas a nuestras cuentas.</li>
                <li><strong>Paypal</strong>: Para una experiencia de pago rápida y segura, puedes usar PayPal.</li>
                <li><strong>Pago Contra Entrega</strong>: Si prefieres pagar al recibir tus productos, ofrecemos esta opción en ciertos países y regiones.</li>
            </ul>
        </div>
    </section>

    <!-- Formulario de contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h3 class="text-3xl font-bold mb-8">Contacto</h3>
            <form action="#" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Correo electrónico" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Mensaje" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 InVentas. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>