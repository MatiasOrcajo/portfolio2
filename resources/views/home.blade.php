@extends('layouts.app')

@section('title', 'Matías Orcajo| Backend Engineer')
@section('meta_description', 'Backend engineer specializing in distributed systems and scalable architecture.')

@section('content')
    {{-- Encabezado --}}
    <header class="mb-16">
        <div class="space-y-4 mb-8">
            <h1 class="text-3xl font-bold">Matías Orcajo</h1>
            <p class="text-gray-600">Backend &amp; Fullstack Developer</p>
        </div>
        <p class="text-lg text-gray-700 leading-relaxed">
            Desarrollador web con +5 años de experiencia en el diseño de implementación de sistemas backend y fullstack, con un enfoque en la integridad de datos, tolerancia a fallos y arquitecturas mantenibles.
        </p>
    </header>

    {{-- Tarjetas de especialización --}}
    <div class="mb-12 grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- Tarjeta: Database Design --}}
        <div class="p-4 border border-gray-200 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-500 mb-2">
                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                <path d="M3 12A9 3 0 0 0 21 12"></path>
            </svg>
            <h3 class="font-medium mb-1">Diseño de BB.DD.</h3>
            <p class="text-sm text-gray-600">Esquemas, indexaciones, transactions</p>
        </div>

        {{-- Tarjeta: API Architecture --}}
        <div class="p-4 border border-gray-200 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-500 mb-2">
                <rect width="20" height="8" x="2" y="2" rx="2" ry="2"></rect>
                <rect width="20" height="8" x="2" y="14" rx="2" ry="2"></rect>
                <line x1="6" x2="6.01" y1="6" y2="6"></line>
                <line x1="6" x2="6.01" y1="18" y2="18"></line>
            </svg>
            <h3 class="font-medium mb-1">Arquitectura API</h3>
            <p class="text-sm text-gray-600">REST, GraphQL, patrones event-driven</p>
        </div>

        {{-- Tarjeta: System Reliability --}}
        <div class="p-4 border border-gray-200 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-500 mb-2">
                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
            </svg>
            <h3 class="font-medium mb-1">System Reliability</h3>
            <p class="text-sm text-gray-600">Monitoreo, manejo de errores, recupero</p>
        </div>
    </div>

    {{-- Sección de Proyectos --}}
    <section class="mb-16">
        <h2 class="text-xl font-bold mb-6">Sistemas e Implementaciones</h2>
        <div class="space-y-6">

            {{-- Proyecto 1 --}}
            <a href="/projects/factibilidad" class="block p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="space-y-3">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="font-bold text-gray-900">Proyecto Factibilidad</h3>
                                <span class="px-2 py-0.5 rounded text-xs font-medium text-green-700 bg-green-50">Producción</span>
                            </div>
                            <p class="text-gray-600 text-sm">Proyecto para Claro Argentina para la gestión de todo el servicio de venta de internet a clientes masivos.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-400 mt-1">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Oracle</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Email Integration</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Cronjobs</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Event-driven</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Linux</span>
                    </div>
                </div>
            </a>

            {{-- Proyecto AreaCostanera --}}
            <a href="/projects/areacostanera" target="_blank" class="block p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="space-y-3">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="font-bold text-gray-900">AreaCostanera</h3>
                                <span class="px-2 py-0.5 rounded text-xs font-medium text-green-700 bg-green-50">Producción</span>
                            </div>
                            <p class="text-gray-600 text-sm">Sistema de gestión de fiestas de egresados: cotización, menú, invitados, control de pagos en cuotas y reportes.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-400 mt-1">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">MySQL</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">AdminLTE</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">DataTables</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Blade</span>
                    </div>
                </div>
            </a>

            {{-- Proyecto 2 --}}
            <a href="https://github.com/MatiasOrcajo/ecommerce" target="_blank" class="block p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="space-y-3">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="font-bold text-gray-900">Ecommerce</h3>
                                <span class="px-2 py-0.5 rounded text-xs font-medium text-red-700 bg-red-50">No en Producción</span>
                            </div>
                            <p class="text-gray-600 text-sm">Ecommerce completo de punta a punta para un negocio de indumentaria.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-400 mt-1">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">SQL</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">PHP</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Email Integration</span>
                    </div>
                </div>
            </a>

            {{-- Proyecto 3 --}}
            <a href="https://github.com/MatiasOrcajo/http_server" target="_blank" class="block p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="space-y-3">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="font-bold text-gray-900">Http Server</h3>
                                <span class="px-2 py-0.5 rounded text-xs font-medium text-red-700 bg-red-50">No en Producción</span>
                            </div>
                            <p class="text-gray-600 text-sm">Servidor HTTP/1.1 minimalista escrito desde cero en Rust, sin dependencias externas para el manejo HTTP.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-400 mt-1">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Rust</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">HTTP</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    {{-- Sección de Experiencia --}}
    <section class="mb-12 border-t border-gray-200 pt-8">
        <h2 class="text-xl font-bold mb-6">Experiencia Laboral</h2>
        <div class="space-y-5">

            {{-- Claro Argentina (dos roles) --}}
            <div class="p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="flex items-start justify-between mb-3">
                    <div>
                        <h3 class="font-bold text-gray-900">Claro Argentina</h3>
                        <p class="text-sm text-gray-500">Telecomunicaciones · Híbrido</p>
                    </div>
                    <span class="text-xs text-gray-400 font-mono whitespace-nowrap">jul. 2022 — actualidad</span>
                </div>
                <div class="space-y-3">
                    <div>
                        <div class="flex items-baseline justify-between">
                            <span class="font-medium text-gray-800">Lead Backend Developer</span>
                            <span class="text-xs text-gray-400 ml-2">ene. 2023 — actualidad</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Lidero la refactorización desde el backend de un sistema PHP/Laravel heredado que maneja datos de ingenierías de redes de tres países. Configuré y administré un servidor Linux dedicado. Brindo soporte técnico continuo al equipo.</p>
                    </div>
                    <div>
                        <div class="flex items-baseline justify-between">
                            <span class="font-medium text-gray-800">Backend Developer</span>
                            <span class="text-xs text-gray-400 ml-2">jul. 2022 — ene. 2023</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Desarrollo y mantenimiento de aplicación web de ingeniería de redes con Oracle SQL y Laravel.</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-1.5 mt-3">
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">PHP</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Oracle</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Linux</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">JavaScript</span>
                </div>
            </div>

            {{-- MKT Marketing Digital --}}
            <div class="p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="flex items-start justify-between mb-2">
                    <div>
                        <h3 class="font-bold text-gray-900">MKT Marketing Digital</h3>
                        <p class="text-sm text-gray-500">Full Stack Developer</p>
                    </div>
                    <span class="text-xs text-gray-400 font-mono whitespace-nowrap">mar. 2021 — jul. 2022</span>
                </div>
                <p class="text-sm text-gray-600">Desarrollé desde cero una plataforma de cursos de marketing con ~2000 usuarios. Panel admin, roles, membresías, notificaciones y pagos locales e internacionales.</p>
                <div class="flex flex-wrap gap-1.5 mt-3">
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">PHP</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">MySQL</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">JavaScript</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">CSS</span>
                </div>
            </div>

            {{-- Freelance --}}
            <div class="p-5 border border-gray-200 rounded hover:border-gray-300 hover:bg-gray-50 transition-colors">
                <div class="flex items-start justify-between mb-2">
                    <div>
                        <h3 class="font-bold text-gray-900">Freelance</h3>
                        <p class="text-sm text-gray-500">Full Stack Developer</p>
                    </div>
                    <span class="text-xs text-gray-400 font-mono whitespace-nowrap">ene. 2020 — actualidad</span>
                </div>
                <p class="text-sm text-gray-600">Aplicaciones web a medida para pequeñas empresas: e-commerce, gestión de usuarios y sistemas a medida.</p>
                <div class="flex flex-wrap gap-1.5 mt-3">
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">PHP</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">Laravel</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">JavaScript</span>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-mono">HTML/CSS</span>
                </div>
            </div>

        </div>
    </section>

    {{-- Pie de página --}}
    <footer class="pt-8 border-t border-gray-200">
        <div class="flex flex-col sm:flex-row justify-between items-start gap-6">
            <div>
                <p class="font-medium mb-2">Conectemos</p>
                <p class="text-sm text-gray-600 mb-4">Para desarrollos backend o fullstack.</p>
                <a href="mailto:matiasorcajo3@gmail.com" class="inline-flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded text-sm hover:bg-gray-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                    </svg>
                    Enviar Email
                </a>
            </div>
            <div class="flex gap-3">
                {{-- GitHub --}}
                <a href="https://github.com/MatiasOrcajo" target="_blank" rel="noopener noreferrer" class="p-2 border border-gray-300 rounded hover:border-gray-400 transition-colors" title="GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                    </svg>
                </a>
                {{-- LinkedIn --}}
                <a href="https://www.linkedin.com/in/matiasorcajo/" target="_blank" rel="noopener noreferrer" class="p-2 border border-gray-300 rounded hover:border-gray-400 transition-colors" title="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-200">
            <p class="text-xs text-gray-500">Este sitio es desarrollado y mantenido por Matías Orcajo.</p>
        </div>
    </footer>
@endsection
