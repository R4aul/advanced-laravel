<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            {{-- Logo --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">
                    Sistema Escolar
                </a>
            </div>

            {{-- Desktop menu --}}
            <div class="hidden md:flex md:items-center md:space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">
                    Inicio
                </a>
                <a href="{{ route('programs') }}" class="text-gray-700 hover:text-blue-600">
                    Carreras
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">
                    Contacto
                </a>

                @guest('web')
                    @guest('student')
                        <a href="{{ route('admin.login.form') }}"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                            Docentes / Admin
                        </a>

                        <a href="{{ route('student.login.form') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Estudiantes
                        </a>
                    @endguest
                @endguest
                @auth
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <a href="{{ route('admin.logout') }}"
                            class="block bg-blue-600 text-white text-center px-4 py-2 rounded-lg"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Cerrar sesion
                        </a>
                    </form>
                @endauth
                @auth('student')
                    <form action="{{ route('student.logout') }}" method="post">
                        @csrf
                        <a href="{{ route('student.logout') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Cerrar sesion
                        </a>
                    </form>
                @endauth
            </div>

            {{-- Mobile button --}}
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2">
        <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600">
            Inicio
        </a>
        <a href="{{ route('programs') }}" class="block text-gray-700 hover:text-blue-600">
            Carreras
        </a>
        <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-blue-600">
            Contacto
        </a>

        @guest('web')
            @guest('student')

                <a href="{{ route('admin.login.form') }}"
                    class="block bg-blue-600 text-white text-center px-4 py-2 rounded-lg">
                    Docentes / Admin
                </a>

                <a href="{{ route('student.login.form') }}"
                    class="block bg-green-600 text-white text-center px-4 py-2 rounded-lg">
                    Estudiantes
                </a>
            @endguest
        @endguest

        @auth
            <form action="{{ route('admin.logout') }}" method="post">
                @csrf
                <a href="{{ route('admin.logout') }}" class="block bg-blue-600 text-white text-center px-4 py-2 rounded-lg"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Cerrar sesion
                </a>
            </form>
        @endauth
        @auth('student')
            <form action="{{ route('student.logout') }}" method="post">
                @csrf
                <a href="{{ route('student.logout') }}"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Cerrar sesion
                </a>
            </form>
        @endauth
    </div>
</nav>

{{-- JS simple para toggle --}}
<script>
    document.getElementById('mobile-menu-button')
        .addEventListener('click', () => {
            document.getElementById('mobile-menu')
                .classList.toggle('hidden');
        });
</script>
