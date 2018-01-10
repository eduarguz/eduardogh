@extends('_layouts.master')

@section('body')
    <div class="container m-auto max-w-lg p-4">
        <div class="font-display pt-28 mb-8">
            <h1 class="font-semibold">Eduardo Guzmán</h1>
            <h2 class="font-thin">Ingeniero Electrónico & Desarrollador Web</h2>
        </div>
        <div class="flex">
            <div class="w-1/2 pr-8">
                <p class="my-4 leading-loose">
                    Me motiva explorar y conocer nuevas tecnologias, transformar ese conocimiento en productos y servicios que generan impacto sobre la gente, las comunidades y los negocios.
                </p>
                <p class="my-4 leading-loose">
                    Durante mi formación como Ingeniero Electrónico he adquirido conocimientos, habilidades y destrezas que me motivan a participar en cualquier entorno profesional, social y cultural.
                </p>
                <p class="my-4 leading-loose">
                    Considerado una persona con gran capacidad para la creación de ideas y la iniciativa para resolver problemas. Mi trabajo se ha centrado en la construcción de plataformas para grupos emprendedores, productos y servicios que pretenden impactar y generar alternativas para sus usuarios.
                </p>
            </div>
            <div class="w-1/2 pl-8">
                <h3 class="text-blue-darker uppercase text-sm mt-4 leading-loose tracking-wide font-semibold">Breve historia</h3>

                <ul class="list-reset mt-5">
                    <li class="mb-5">
                        <p class="text-grey-dark">Enero 2018 -</p>

                        <p class="my-1 font-semibold">Ingeniero de Desarrollo</p>

                        <p>
                            <a class="hover:text-blue-darker" href="https://www.placetopay.com/" target="_blank">PlaceToPay</a>
                        </p>
                    </li>

                    <li class="mb-5">
                        <p class="text-grey-dark">Julio 2016 - Diciembre 2017</p>

                        <p class="my-1 font-semibold">Desarrollador Web Full Stack</p>

                        <p>
                            <a class="hover:text-blue-darker" href="http://uqmobile.co/" target="_blank">UQ Mobile</a>
                        </p>
                    </li>

                    <li class="mb-5">
                        <p class="text-grey-dark">2011 - 2016</p>

                        <p class="my-1 font-semibold">Pregrado, Ingeniería Electrónica</p>

                        <p><a class="hover:text-blue-darker" href="http://www.udea.edu.co" target="_blank">Universidad de Antioquia</a>
                        </p>
                    </li>
                </ul>

                <h3 class="text-blue-darker uppercase text-sm mt-16 leading-loose tracking-wide font-semibold">Habilidades</h3>

                <ul class="list-reset mt-5">
                    <li class="mb-5">
                        <p class="my-1 font-semibold">PHP - Laravel Framework</p>
                    </li>
                    <li class="mb-5">
                        <p class="my-1 font-semibold">Responsive Design</p>
                    </li>
                    <li class="mb-5">
                        <p class="my-1 font-semibold">Javascript - Vue.js Framework</p>
                    </li>
                    <li class="mb-5">
                        <p class="my-1 font-semibold">Css/Sass/Less</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @include('svg.sunset', ['class' => 'w-full'])

    <div class="container m-auto max-w-lg p-4 relative">
        <h3 class="text-blue-darker uppercase text-sm mt-8 leading-loose tracking-wide font-semibold">Trabajo</h3>
        <div class="flex mt-5">
            <div class="w-1/2 pr-8">
                <a class="hover:text-blue-dark" href="https://www.4buyhub.com/" target="_blank">
                    <h4 class="text-3xl font-display">4BuyHub</h4>
                </a>
                <p class="my-4 leading-loose">
                    Desarrollé de extremo a extremo, el minimo producto viable de un emprendimiento web.
                    <br>Inicialmente participando en el diseño del producto y modelando la lógica del negocio. Posteriormente, construyendo la solución e implementando los features requeridos. Y finalmente, realizando el despliegue y mantenimiendo del producto.
                </p>
            </div>
        </div>
        @include('svg.sitting', ['class' => 'w-64 absolute pin-r pin-b'])
    </div>

    <div class="container m-auto max-w-lg p-4 my-16 relative">
        <h3 class="text-3xl font-display">Interesado en contactarme?</h3>
        <div class="flex mt-4">
            <a href="https://www.linkedin.com/in/eduarguz/" target="_blank" class="hover:text-grey-dark mr-4">
                @include('svg.linkedin', ['class' => 'h-6 w-6 '])
            </a>

            <a href="https://twitter.com/eduarguzher" target="_blank" class="hover:text-grey-dark mr-4">
                @include('svg.twitter', ['class' => 'h-6 w-6 '])
            </a>

            <a href="mailto:eduarguzher@gmail.com" target="_blank" class="hover:text-grey-dark mr-4">
                @include('svg.envelope', ['class' => 'h-6 w-6 '])
            </a>
        </div>
    </div>

@endsection
