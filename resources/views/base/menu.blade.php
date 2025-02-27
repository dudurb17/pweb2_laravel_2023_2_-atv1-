<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
              Icon when menu is closed.

              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Icon when menu is open.

              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto"
                        src="https://logosmarcas.net/wp-content/uploads/2020/08/Coca-Cola-Emblema.png"
                        alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                            class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                            aria-current="page">Home</a>
                        <a href="{{ route('user.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            Usuarios</a>
                        <a href="{{ route('produto.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            Produtos</a>
                        <a href="{{ route('pedido.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            Pedidos</a>

                        <a href="{{ route('funcionario.listFuncionario') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            funcionarios</a>
                        <a href="{{ route('salario.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                            salario</a>
                            <a href="{{ route('loja.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Lojas</a>
                            <a href="{{ route('categoriaProduto.list') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">n-n</a>




                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button"
                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">


                    </svg>

                </button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                   @if(Auth::user() )
                   <a
                   class="text-gray-300 block px-4 py-2 text-sm"
                   href="route('logout')"
                           onclick="event.preventDefault();
                                       this.closest('form').submit();">
                       {{ __('Log Out') }}
                   </a>
                   @endif


                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->

</nav>
