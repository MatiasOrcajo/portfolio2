@extends('layouts.app')

@section('title', 'Proyecto Factibilidad | Matías Orcajo')
@section('meta_description', 'Sistema interno para gestión de factibilidad de servicios enterprise. Workflow con múltiples áreas, notificaciones y cronjobs.')

@section('content')
    {{-- Encabezado del proyecto --}}
    <header class="mb-12">
        <div class="mb-6">
            <a href="/" class="text-sm text-gray-500 hover:text-gray-700 transition-colors inline-flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
                Volver al portafolio
            </a>
        </div>
        <div class="space-y-4">
            <div class="flex items-center gap-3">
                <h1 class="text-3xl font-bold">Proyecto Factibilidad</h1>
                <span class="px-2 py-0.5 rounded text-xs font-medium text-green-700 bg-green-50">Producción</span>
            </div>
            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl">
                Sistema integral de gestión de factibilidad técnica para servicios de internet empresarial.
                Orquesta la comunicación entre áreas de ingeniería y operaciones, automatizando decisiones y
                seguimiento de implementaciones.
            </p>
        </div>
    </header>

    {{-- Imagen de cabecera (ilustrativa) --}}
    <div class="mb-12 bg-gray-100 border border-gray-200 rounded-lg overflow-hidden">
        <div class="aspect-video flex items-center justify-center text-gray-400">
            {{-- Reemplaza el src con tu captura blurreada --}}
            <img src="/images/factibilidad/dashboard.png" alt="Vista general del sistema" class="w-full h-full filter blur-sm">
        </div>
        <p class="text-xs text-gray-500 p-2 text-center">Dashboard principal de seguimiento (datos difuminados por confidencialidad)</p>
    </div>

    {{-- Descripción General --}}
    <section class="mb-12">
        <h2 class="text-xl font-bold mb-4">Visión general del sistema</h2>
        <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-4">
            <p>
                Cuando un ejecutivo comercial cierra una oportunidad de servicio dedicado, debe asegurarse
                de que la infraestructura de red pueda satisfacer los requerimientos técnicos en la ubicación
                del cliente. Para ello, carga una <strong>solicitud de factibilidad</strong> en esta plataforma
                detallando el ancho de banda, la zona geográfica y los elementos de red tentativos.
            </p>
            <p>
                La solicitud recorre un flujo de validación secuencial por los equipos de
                <strong>Backbone IP, Agregación IP y Transmisión</strong>. Cada área analiza la viabilidad
                desde su especialidad y registra su veredicto (factible, no factible, no aplica). Toda la
                interacción queda documentada en un hilo de mensajes interno por cada solicitud.
            </p>
            <p>
                Una vez que todas las áreas técnicas han dictaminado, una instancia final determina la
                <strong>factibilidad global</strong>. Si es positiva, la solicitud pasa automáticamente al
                módulo de <strong>Implementaciones</strong>, donde comienza una cuenta regresiva de 30 días
                para la instalación efectiva del servicio.
            </p>
            <p>
                El sistema ha sido tan exitoso y ha aumentado tanto la productividad que se ha exportado a <strong>Claro Paraguay</strong> y <strong>Claro Uruguay</strong>
            </p>
        </div>
    </section>

    {{-- Mi rol en el proyecto --}}
    <section class="mb-12">
        <h2 class="text-xl font-bold mb-4">Mi rol y contribuciones</h2>
        <div class="p-5 border border-gray-200 rounded bg-gray-50/50">
            <ul class="space-y-4 text-sm text-gray-700">
                <li class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-gray-500 mt-0.5 shrink-0">
                        <path d="M20 6 9 17l-5-5"/>
                    </svg>
                    <span><strong>Análisis funcional y relevamiento:</strong> Conduje reuniones con los equipos de Backbone IP, Agregación IP, Transmisión y el área Comercial para entender los procesos de validación técnica y traducirlos en requerimientos lógicos del sistema.</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-gray-500 mt-0.5 shrink-0">
                        <path d="M20 6 9 17l-5-5"/>
                    </svg>
                    <span><strong>Diseño de base de datos y flujo del sistema:</strong> Modelé el esquema de datos y la lógica de estados, dictámenes y transiciones del workflow, asegurando la integridad de la información a lo largo de todo el ciclo de vida de una factibilidad.</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-gray-500 mt-0.5 shrink-0">
                        <path d="M20 6 9 17l-5-5"/>
                    </svg>
                    <span><strong>API para el frontend:</strong> Desarrollé una API REST con Laravel que expone los datos del backend de forma segura y estructurada, permitiendo al frontend construir dashboards, formularios de carga y las vistas de seguimiento.</span>
                </li>
                <li class="flex items-start gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-gray-500 mt-0.5 shrink-0">
                        <path d="M20 6 9 17l-5-5"/>
                    </svg>
                    <span><strong>Infraestructura y automatizaciones:</strong> Configuré el entorno Linux, los cronjobs de control de plazos y los disparadores de correo electrónico para las notificaciones del sistema.</span>
                </li>
            </ul>
        </div>
    </section>

    {{-- Flujo de trabajo --}}
    <section class="mb-12">
        <h2 class="text-xl font-bold mb-6">Flujo de trabajo (workflow)</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-5 border border-gray-200 rounded">
                <div class="text-2xl font-bold text-gray-300 mb-2">1</div>
                <h3 class="font-bold mb-1">Carga de solicitud</h3>
                <p class="text-sm text-gray-600">El área comercial ingresa los parámetros técnicos, ubicación y equipamiento de red propuesto.</p>
            </div>
            <div class="p-5 border border-gray-200 rounded">
                <div class="text-2xl font-bold text-gray-300 mb-2">2</div>
                <h3 class="font-bold mb-1">Validación técnica</h3>
                <p class="text-sm text-gray-600">Los especialistas de backbone, agregación y transmisión evalúan y emiten su dictamen a través de botones de acción directa.</p>
            </div>
            <div class="p-5 border border-gray-200 rounded">
                <div class="text-2xl font-bold text-gray-300 mb-2">3</div>
                <h3 class="font-bold mb-1">Resolución e implementación</h3>
                <p class="text-sm text-gray-600">Se determina la factibilidad global. Si es positiva, se activa el contador de 30 días para la instalación, con alertas a 5 días del vencimiento.</p>
            </div>
        </div>
    </section>

    {{-- Imagen del dashboard de áreas --}}
    <div class="mb-12 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-100 border border-gray-200 rounded-lg overflow-hidden">
            <div class="aspect-[4/3] flex items-center justify-center text-gray-400">
                <img src="/images/factibilidad/email.png" alt="Dashboard de validación por área" class=" object-cover filter opacity-80">
            </div>
            <p class="text-xs text-gray-500 p-2 text-center">Vista de un sector técnico evaluando una solicitud</p>
        </div>
        <div class="bg-gray-100 border border-gray-200 rounded-lg overflow-hidden">
            <div class="aspect-[4/3] flex items-center justify-center text-gray-400">
                <img src="/images/factibilidad/graficos.png" alt="Hilo de mensajes" class="object-cover filter opacity-80">
            </div>
            <p class="text-xs text-gray-500 p-2 text-center">Vista del panel de KPIs</p>
        </div>
    </div>

    {{-- Funcionalidades clave --}}
    <section class="mb-12">
        <h2 class="text-xl font-bold mb-6">Funcionalidades principales</h2>
        <div class="space-y-5">
            <div class="p-5 border border-gray-200 rounded">
                <h3 class="font-bold flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-500"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    Notificaciones automáticas por correo
                </h3>
                <p class="text-sm text-gray-600">Disparo de emails en cada evento del flujo: nueva solicitud, dictamen de área, nuevo mensaje en hilo, y aprobación final. Mantiene a todos los involucrados sincronizados sin intervención manual.</p>
            </div>
            <div class="p-5 border border-gray-200 rounded">
                <h3 class="font-bold flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-500"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    Cronjob de control de plazos
                </h3>
                <p class="text-sm text-gray-600">Un proceso programado en el servidor evalúa diariamente las implementaciones activas. Envía alertas cuando faltan 5 días para el vencimiento y da por vencidas automáticamente aquellas que llegan a cero.</p>
            </div>
            <div class="p-5 border border-gray-200 rounded">
                <h3 class="font-bold flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-500"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
                    Panel de estadísticas y gráficos
                </h3>
                <p class="text-sm text-gray-600">Sección dedicada a visualizar KPIs del proceso: factibilidades por estado, tiempos promedio de resolución, distribución por área técnica, y evolución mensual.</p>
            </div>
        </div>
    </section>

    {{-- Tecnologías utilizadas --}}
    <section class="mb-12">
        <h2 class="text-xl font-bold mb-4">Stack tecnológico</h2>
        <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">Laravel</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">PHP</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">Oracle DB</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">Linux Server</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">Cronjobs</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">Event-Driven Emails</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">REST APIs</span>
            <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded text-sm font-mono">JavaScript (frontend)</span>
        </div>
    </section>

    {{-- Navegación --}}
    <div class="border-t border-gray-200 pt-8 mt-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
            Volver al portafolio
        </a>
    </div>
@endsection
