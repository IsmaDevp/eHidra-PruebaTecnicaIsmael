@extends('layout')
@section('content')
    <!--TÍTULO HOME-->
    <div class="flex justify-center">
        <h1 class="text-rose-600 text-5xl mt-5 shadow-xl">Prueba Técnica Ismael eHydra</h1>
    </div>


    <!--=======PARTE DE ALPINE JS======-->
    <div class="flex mt-5 ml-1 mt-5">

        <!--COLUMNA 1-->
        <div class="w-1/2">
            <div x-data="{ open: false }">
                <!--boton sobre mi-->
                <button x-on:click="open = !open"
                    class="bg-rose-800 hover:bg-white hover:text-red-500 text-white font-bold py-5 px-5 border border-red-700 rounded mb-3 ml-5">
                    <i class='bx bx-info-circle'></i>
                    Sobre Mí
                </button>
                <!--contenido-->
                <div x-show="open" class="max-w-sm w-full lg:max-w-full lg:flex mt-5">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden shadow-xl"
                        style="background: url({{ asset('images/card.png') }}) no-repeat; background-size: cover";"
                        title="Woman holding a mug">
                    </div>
                    <div
                        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-sm text-gray-600 flex items-center">
                                <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                </svg>
                                eHydra
                            </p>
                            <div class="text-gray-900 font-bold text-xl mb-2">Ismael Díaz Revaliente
                            </div>
                            <p class="text-gray-700 text-base">Me llamo Ismael, especialista en el desarrollo web y
                                ciberseguridad. <br> <br>

                                Mi trayectoria académica con la informática empieza en el año 2018 hasta día de hoy.
                                Después de tantos años en este mundo, he confirmado mi pasión hacia él, sobre todo en el
                                diseño web y la ciberseguridad. <br>

                                Creo que sería una muy buena incorporación a empresas que ofrezcan este tipo de trabajo,
                                ya que me desenvuelvo muy bien, me encanta trabajar en grupo y soy una persona
                                autodidacta con ganas de aprender siempre :) <br> <br>

                                Me encanta desarrollar en lenguajes como JavaScript y PHP, CMS como WordPress o incluso
                                framework como Angular o Laravel</p>
                        </div>
                        <div class="flex items-center">
                            <img class="w-20 h-20 rounded-full mr-4" src="{{ asset('images/yo.png') }}"
                                alt="Avatar of Jonathan Reinink">
                            <div class="text-sm">
                                <p class="text-gray-900 leading-none">Ismael Díaz</p>
                                <p class="text-gray-600">24/06/2022</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--COLUMNA 2-->
        <div class="w-1/2 p-4 ">

            <div x-data="{ open: false }">
                <!--boton mis habilidades-->
                <button x-on:click="open = !open"
                    class="bg-rose-800 hover:bg-white hover:text-red-500 text-white font-bold py-5 px-5 border border-red-700 rounded mb-3 ml-5">
                    <i class='bx bx-happy-alt'></i>
                    Mis habilidades
                </button>
                <!--lista-->
                <div x-show="open" aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full"
                    style="background: url({{ asset('images/bgDes.jpg') }}) no-repeat; background-size: cover";">
                    <div class="lg:flex items-center justify-center w-full">

                        <!--habilidad 1-->
                        <div tabindex="0" aria-label="card 1"
                            class="focus:outline-none lg:w-5/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow-xl rounded">
                            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                                <img src="{{ asset('images/wp.png') }}" alt="coin avatar"
                                    class="w-12 h-12 rounded-full" />
                                <div class="flex items-start justify-between w-full">
                                    <div class="pl-3 w-full">
                                        <p tabindex="0"
                                            class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                            Wordpress</p>
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">
                                            Hability: 8/10</p>
                                    </div>

                                </div>
                            </div>
                            <div class="px-2">
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore qui obcaecati
                                    expedita vel molestiae. Ab nisi voluptatum cum quo nemo cumque! Aperiam doloribus
                                    repudiandae sapiente earum neque ullam dolor accusantium?</p>
                                <div tabindex="0" class="focus:outline-none flex">
                                    <div class="py-1 px-2 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #wordpress</div>
                                    <div
                                        class="py-1 px-2 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #CMS</div>
                                </div>
                            </div>
                        </div>

                        <!--habilidad 2-->
                        <div tabindex="0" aria-label="card 1"
                            class="focus:outline-none lg:w-5/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                                <img src="{{ asset('images/js.png') }}" alt="coin avatar"
                                    class="w-12 h-12 rounded-full" />
                                <div class="flex items-start justify-between w-full">
                                    <div class="pl-3 w-full">
                                        <p tabindex="0" s
                                            class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                            JavaScript</p>
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">
                                            Hability: 7/10</p>
                                    </div>

                                </div>
                            </div>
                            <div class="px-2">
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore qui obcaecati
                                    expedita vel molestiae. Ab nisi voluptatum cum quo nemo cumque! Aperiam doloribus
                                    repudiandae sapiente earum neque ullam dolor accusantium?</p>
                                <div tabindex="0" class="focus:outline-none flex">
                                    <div class="py-1 px-2 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #javascript</div>
                                    <div
                                        class="py-1 px-2 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #developer</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:flex items-center justify-center w-full mt-7">

                        <!--habilidad 3-->
                        <div tabindex="0" aria-label="card 1"
                            class="focus:outline-none lg:w-5/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                                <img src="{{ asset('images/lv.png') }}" alt="coin avatar"
                                    class="w-12 h-12 rounded-full" />
                                <div class="flex items-start justify-between w-full">
                                    <div class="pl-3 w-full">
                                        <p tabindex="0" s
                                            class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                            Laravel</p>
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">
                                            Hability: 6.5/10</p>
                                    </div>

                                </div>
                            </div>
                            <div class="px-2">
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore qui obcaecati
                                    expedita vel molestiae. Ab nisi voluptatum cum quo nemo cumque! Aperiam doloribus
                                    repudiandae sapiente earum neque ullam dolor accusantium?</p>
                                <div tabindex="0" class="focus:outline-none flex">
                                    <div class="py-1 px-2 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #laravel</div>
                                    <div
                                        class="py-1 px-2 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #php</div>
                                </div>
                            </div>
                        </div>

                        <!--habilidad 4-->
                        <div tabindex="0" aria-label="card 1"
                            class="focus:outline-none lg:w-5/12 lg:mr-7 lg:mb-0 mb-7 bg-white dark:bg-gray-800  p-6 shadow rounded">
                            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                                <img src="{{ asset('images/ciber.png') }}" alt="coin avatar"
                                    class="w-12 h-12 rounded-full" />
                                <div class="flex items-start justify-between w-full">
                                    <div class="pl-3 w-full">
                                        <p tabindex="0" s
                                            class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                            Ciberseguridad</p>
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-normal pt-2 text-gray-500 dark:text-gray-200 ">
                                            Hability: 7.5/10</p>
                                    </div>

                                </div>
                            </div>
                            <div class="px-2">
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-5 py-4 text-gray-600 dark:text-gray-200 ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore qui obcaecati
                                    expedita vel molestiae. Ab nisi voluptatum cum quo nemo cumque! Aperiam doloribus
                                    repudiandae sapiente earum neque ullam dolor accusantium?</p>
                                <div tabindex="0" class="focus:outline-none flex">
                                    <div class="py-1 px-2 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #cibersecurity</div>
                                    <div
                                        class="py-1 px-2 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                                        #etical</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>

    </div>
@endsection
