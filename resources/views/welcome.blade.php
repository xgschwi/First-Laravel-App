<!DOCTYPE html>
 @extends('layouts.app')
<?php $test = [1,2,3];?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/css/playfair.css')
    </head>
    <body class="antialiased">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="w-full h-[10vh] bg-white fixed z-10 flex">
                <div class="md:flex bg-white">
                    <div class="my-auto ml-14 group">
                        <a
                            href="/"
                            class="group-hover:cursor-pointer group-hover:bg-clip-text group-hover:text-shadow-nav text-[#57BC90] no-underline text-2xl font-extrabold"
                        >
                            Xavier
                        </a>
                    </div>
    
                    <div class="my-auto ml-14 group">
                        <a
                            href="#about"
                            class="group-hover:cursor-pointer group-hover:bg-clip-text group-hover:text-shadow-nav"
                        >
                            About
                        </a>
                    </div>
                    <div class="my-auto ml-14 group">
                        <a
                            href="#work-experience"
                            class="group-hover:cursor-pointer group-hover:bg-clip-text group-hover:text-shadow-nav"
                        >
                            Work Experience
                        </a>
                    </div>
                    <div class="my-auto ml-14 group">
                        <a
                            href="#projects"
                            class="group-hover:cursor-pointer group-hover:bg-clip-text group-hover:text-shadow-nav"
                        >
                            Projects
                        </a>
                    </div>
                </div>
    
            </div>
            <div class="heroContainer">     <div style="--img: url('{{ asset('/img/swings.jpg') }}')" class="heroBackground">
				<div
					style="padding-right: 50px; margin: auto;"
					class="heroColorText"
				>
					<div>Howdy! I am Xavier Gschwind</div>
					<div>An Application Developer at Art Unlimited</div>
				</div>
			</div>
            </div>
            @section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center pt-5">
                            <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                            <p>This awesome blog has many articles, click the button below to see them</p>
                            <br>
                            <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
                        </div>
                    </div>
                </div>
            @endsection
            {{-- @foreach($test as $t)
                <p>{{$t}}</p>
            @endforeach --}}
            <div class="max-w-7xl mx-auto w-3/4 p-5 container pl-5 rounded-2xl my-8 bg-[#E8EFE1]">
                <h2 class="text-[var(--marine)] no-underline text-2xl font-extrabold py-5 mx-auto w-fit">
                    About Me
                </h2>
                <div class="flex flex-col md:flex-row gap-10 mx-auto justify-center indent-5 items-center">
                    <div class="max-w-[90vw] bg-[white] rounded-2xl px-4 flex-1 my-4 py-4">
                        <p class="mb-3">
                            Hello and welcome to my site! I am Xavier Gschwind, a
                            Software/Application Developer at Art Unlimited. I am a graduate from
                            Bowling Green State University with a Bachelors of Science in Computer
                            Science as well as a minor in Marketing. With a spirited aspiration, I
                            have taken to learning many different languages in the world of web
                            development and full stack development.
                        </p>
                        <p class="indent-5">Such languages include:</p>
                        <ul class="list-[disclosure-closed] pt-1 marker:text-[var(--marine)] pl-10 indent-2 pb-3">
                            <li>React.js and Node.js</li>
                            <li>Django</li>
                            <li>MySQL, MSSQL, GraphQL</li>
                            <li>Visual Basic and .NET</li>
                            <li>PHP in a Wordpress Environment</li>
                        </ul>
                        <span>And that is just to name a few 😉</span>
                    </div>
                    <div class="bg-[white] rounded-2xl px-4 flex-1 my-4 py-4">
                        <p>
                            As a lifelong learner, I look to continuously grow in my skills by
                            learning modern tech stacks and applying it in personal projects. One
                            project I have worked with recently is{' '}
                            <a
                                class="underline text-[var(--marine)]"
                                href="https://fullstackopen.com/en/"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Full Stack Open
                            </a>
                            . Feel free to check it out on my{' '}
                            <a
                                class="underline text-[var(--marine)]"
                                href="https://github.com/xgschwi"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Github
                            </a>
                            ! In my spare time I am happy to pick up new hobbies, whether it be
                            with technology, cooking, and so on. I often am enjoying the
                            occasional video game, playing with my cats June and Gracie, or
                            exploring on walks.
                        </p>
                        <img
                            src={headshot}
                            alt="About Me"
                            class="rounded-lg w-56 mx-auto mt-6"
                        />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
