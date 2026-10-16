<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Niño - ADYAR Industries</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        adyar: {
                            red: '#D9231D',
                            dark: '#0F1218',
                            gray: '#1E222B',
                            light: '#F8F9FA'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        /* Background setup to simulate the dark industrial forklift image */
        .bg-industrial {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            /* Dark gradient overlay with a subtle red hue at the bottom */
            background: linear-gradient(180deg, rgba(15, 18, 24, 0.85) 0%, rgba(15, 18, 24, 0.95) 70%, rgba(20, 5, 5, 0.98) 100%);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        /* Hide scrollbar for cleaner look but allow scrolling */
        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        .glass-effect {
            background: rgba(30, 34, 43, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="text-white">

    <!-- Background Elements -->
    <div class="bg-industrial"></div>
    <div class="bg-overlay"></div>

    <!-- Main Content Container (Mobile restricted width) -->
    <main class="relative z-10 w-full max-w-[480px] mx-auto px-5 py-10 flex flex-col min-h-screen">
        
        <!-- Header: Logo -->
        <header class="flex justify-center mb-8">
            <div class="flex items-center gap-2">
                <!-- SVG Logo Adyar -->
                <svg width="40" height="40" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.5 133C69.6878 133 82 120.688 82 105.5C82 90.3122 69.6878 78 54.5 78C39.3122 78 27 90.3122 27 105.5C27 120.688 39.3122 133 54.5 133Z" fill="#D9231D"/>
                    <path d="M145.5 133C160.688 133 173 120.688 173 105.5C173 90.3122 160.688 78 145.5 78C130.312 78 118 90.3122 118 105.5C118 120.688 130.312 133 145.5 133Z" fill="#D9231D"/>
                    <path d="M100 82C115.188 82 127.5 69.6878 127.5 54.5C127.5 39.3122 115.188 27 100 27C84.8122 27 72.5 39.3122 72.5 54.5C72.5 69.6878 84.8122 82 100 82Z" fill="#D9231D"/>
                    <path d="M82 105.5C82 95.5589 90.0589 87.5 100 87.5C109.941 87.5 118 95.5589 118 105.5" stroke="#D9231D" stroke-width="25" stroke-linecap="round"/>
                </svg>
                <div class="flex flex-col justify-center">
                    <span class="text-2xl font-bold tracking-wider leading-none">ADYAR</span>
                    <span class="text-[0.65rem] tracking-[0.3em] font-medium leading-none text-gray-300 mt-1">INDUSTRIES</span>
                </div>
            </div>
        </header>

        <!-- Profile Section -->
        <section class="flex flex-col items-center text-center mb-8">
            <!-- Avatar -->
            <div class="relative w-24 h-24 rounded-full p-1 mb-4" style="background: linear-gradient(135deg, #D9231D, #4a0000);">
                <div class="w-full h-full rounded-full bg-adyar-dark border-2 border-transparent flex items-center justify-center">
                    <span class="text-3xl font-bold text-white tracking-widest">AN</span>
                </div>
            </div>
            
            <h1 class="text-3xl font-extrabold mb-1">Adrian Niño</h1>
            <p class="text-adyar-red text-sm font-bold tracking-widest uppercase mb-3">Director</p>
            <p class="text-sm text-gray-300 px-4 leading-relaxed">
                Importación y distribución de materia prima química en Venezuela. Somos tu mejor aliado.
            </p>
        </section>

        <!-- Call to Action (Save Contact) -->
        <button onclick="downloadVCard()" class="w-full bg-adyar-red hover:bg-red-700 transition-colors duration-300 text-white font-bold py-4 rounded-2xl flex items-center justify-center gap-3 mb-8 shadow-[0_4px_14px_0_rgba(217,35,29,0.39)]">
            <i class="fa-solid fa-download text-lg"></i>
            Guardar contacto
        </button>

        <!-- Linktree Style Links -->
        <section class="flex flex-col gap-3 mb-10 w-full">
            
            <!-- WhatsApp -->
            <a href="https://wa.me/584122470882" target="_blank" rel="noopener noreferrer" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-2xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="ml-4 text-left flex-1">
                    <h3 class="text-black font-bold text-base leading-tight">WhatsApp</h3>
                    <p class="text-gray-500 text-xs mt-0.5">Escríbenos ahora</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

            <!-- Llamar -->
            <a href="tel:+584122470882" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="ml-4 text-left flex-1">
                    <h3 class="text-black font-bold text-base leading-tight">Llamar</h3>
                    <p class="text-gray-500 text-xs mt-0.5">+58 412-2470882</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

            <!-- Correo -->
            <a href="mailto:comercializacion@adyarca.com" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div class="ml-4 text-left flex-1 truncate pr-2">
                    <h3 class="text-black font-bold text-base leading-tight">Correo</h3>
                    <p class="text-gray-500 text-xs mt-0.5 truncate">comercializacion@adyarca.com</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

            <!-- Catálogos -->
            <a href="https://assets.econecta.io/uploads/adyarca.adriannino/catalogo.pdf" target="_blank" rel="noopener noreferrer" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <div class="ml-4 text-left flex-1">
                    <h3 class="text-black font-bold text-base leading-tight">Catálogos</h3>
                    <p class="text-gray-500 text-xs mt-0.5">Productos y fichas técnicas</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

            <!-- Página web -->
            <a href="https://adyarca.com" target="_blank" rel="noopener noreferrer" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="ml-4 text-left flex-1">
                    <h3 class="text-black font-bold text-base leading-tight">Página web</h3>
                    <p class="text-gray-500 text-xs mt-0.5">adyarca.com</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

            <!-- Brochure -->
            <a href="https://brochure.adyarca.com" target="_blank" rel="noopener noreferrer" class="group bg-white flex items-center p-3 rounded-2xl transition-transform transform hover:scale-[1.02] shadow-lg cursor-pointer">
                <div class="w-12 h-12 rounded-full bg-red-50 text-adyar-red flex items-center justify-center text-xl shrink-0 group-hover:bg-adyar-red group-hover:text-white transition-colors">
                    <i class="fa-solid fa-map"></i>
                </div>
                <div class="ml-4 text-left flex-1">
                    <h3 class="text-black font-bold text-base leading-tight">Brochure</h3>
                    <p class="text-gray-500 text-xs mt-0.5">brochure.adyarca.com</p>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-400 mr-2 shrink-0"></i>
            </a>

        </section>

        <!-- Social Media -->
        <section class="flex flex-col items-center mb-10 w-full">
            <h4 class="text-xs font-bold text-gray-400 tracking-[0.2em] mb-4 uppercase">Síguenos</h4>
            <div class="flex gap-4">
                <a href="#" class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center text-xl hover:bg-white hover:text-black hover:border-white transition-all">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center text-xl hover:bg-white hover:text-black hover:border-white transition-all">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center text-xl hover:bg-white hover:text-black hover:border-white transition-all">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="w-full mb-10">
            <h4 class="text-[0.7rem] font-bold text-gray-400 tracking-[0.15em] mb-4 uppercase text-left">
                Más de 14 años impulsando la industria
            </h4>
            <div class="grid grid-cols-2 gap-3">
                <div class="glass-effect rounded-2xl p-4 flex flex-col justify-center">
                    <span class="text-3xl font-extrabold text-white">16+</span>
                    <span class="text-xs text-gray-400 mt-1">años de trayectoria</span>
                </div>
                <div class="glass-effect rounded-2xl p-4 flex flex-col justify-center">
                    <span class="text-3xl font-extrabold text-white">99%</span>
                    <span class="text-xs text-gray-400 mt-1">clientes satisfechos</span>
                </div>
                <div class="glass-effect rounded-2xl p-4 flex flex-col justify-center">
                    <span class="text-3xl font-extrabold text-white">10K+</span>
                    <span class="text-xs text-gray-400 mt-1">clientes atendidos</span>
                </div>
                <div class="glass-effect rounded-2xl p-4 flex flex-col justify-center">
                    <span class="text-3xl font-extrabold text-white">1500+</span>
                    <span class="text-xs text-gray-400 mt-1">toneladas importadas al año</span>
                </div>
            </div>
        </section>

        <!-- Sectors Section -->
        <section class="w-full mb-12">
            <h4 class="text-[0.7rem] font-bold text-gray-400 tracking-[0.15em] mb-4 uppercase text-left">
                Sectores que abastecemos
            </h4>
            <div class="flex flex-wrap gap-2">
                <span class="px-4 py-1.5 rounded-full border border-gray-500 text-sm font-medium hover:bg-white hover:text-black transition-colors cursor-default text-gray-200">Petróleo</span>
                <span class="px-4 py-1.5 rounded-full border border-gray-500 text-sm font-medium hover:bg-white hover:text-black transition-colors cursor-default text-gray-200">Higiene</span>
                <span class="px-4 py-1.5 rounded-full border border-gray-500 text-sm font-medium hover:bg-white hover:text-black transition-colors cursor-default text-gray-200">Pinturas</span>
                <span class="px-4 py-1.5 rounded-full border border-gray-500 text-sm font-medium hover:bg-white hover:text-black transition-colors cursor-default text-gray-200">Tratamiento de agua</span>
            </div>
        </section>

        <!-- Divider -->
        <div class="w-full h-px bg-gradient-to-r from-transparent via-gray-600 to-transparent mb-8"></div>

        <!-- Footer -->
        <footer class="w-full flex flex-col items-center text-center mt-auto pb-4">
            <!-- Small logo for footer -->
            <svg width="30" height="30" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-4 opacity-50">
                <path d="M54.5 133C69.6878 133 82 120.688 82 105.5C82 90.3122 69.6878 78 54.5 78C39.3122 78 27 90.3122 27 105.5C27 120.688 39.3122 133 54.5 133Z" fill="#ffffff"/>
                <path d="M145.5 133C160.688 133 173 120.688 173 105.5C173 90.3122 160.688 78 145.5 78C130.312 78 118 90.3122 118 105.5C118 120.688 130.312 133 145.5 133Z" fill="#ffffff"/>
                <path d="M100 82C115.188 82 127.5 69.6878 127.5 54.5C127.5 39.3122 115.188 27 100 27C84.8122 27 72.5 39.3122 72.5 54.5C72.5 69.6878 84.8122 82 100 82Z" fill="#ffffff"/>
                <path d="M82 105.5C82 95.5589 90.0589 87.5 100 87.5C109.941 87.5 118 95.5589 118 105.5" stroke="#ffffff" stroke-width="25" stroke-linecap="round"/>
            </svg>
            <p class="text-xs text-gray-400 mb-2 max-w-[90%] leading-relaxed">
                Centro Comercial Concepto La Granja, Piso 7, Oficina 02, Av. Salvador Feo La Cruz, Naguanagua, Edo. Carabobo, Venezuela
            </p>
            <p class="text-[0.65rem] text-gray-500">
                &copy; 2026 ADYAR Industries
            </p>
        </footer>

    </main>

    <script>
        // Función para generar y descargar un archivo VCard (.vcf)
        function downloadVCard() {
            const vcardData = `BEGIN:VCARD
VERSION:3.0
FN:Adrian Niño
N:Niño;Adrian;;;
ORG:ADYAR Industries
TITLE:Director
TEL;TYPE=WORK,VOICE:+584122470882
EMAIL;TYPE=WORK:comercializacion@adyarca.com
URL:https://adyarca.com
NOTE:Importación y distribución de materia prima química en Venezuela.
END:VCARD`;

            const blob = new Blob([vcardData], { type: 'text/vcard' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = 'Adrian_Nino_Adyar.vcf';
            document.body.appendChild(a);
            a.click();
            
            // Clean up
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        }
    </script>
</body>
</html>