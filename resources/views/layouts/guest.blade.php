<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AgroDetect') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

          <style>
              .agro-bg {
                background: linear-gradient(to bottom right, #f5fff5, #e0f0e8);
                min-height: 100vh;
            }
            
            .agro-card {
                background: white;
                border-radius: 12px;
                box-shadow: 0 10px 25px rgba(50, 120, 70, 0.1);
                border: 1px solid rgba(80, 160, 100, 0.1);
                width: 100%;
                max-width: 420px;
                padding: 2.5rem;
            }
            
            .agro-card h1 {
                color: #2a5936;
                font-weight: 600;
                margin-bottom: 1.75rem;
                text-align: center;
                font-size: 1.75rem;
            }
            
            .agro-input {
                border: 1px solid #d0e0d0;
                border-radius: 8px;
                padding: 0.75rem 1rem;
                width: 100%;
                margin-bottom: 1.25rem;
                background: white;
                transition: all 0.2s;
            }
            
            .agro-input:focus {
                border-color: #42b883;
                box-shadow: 0 0 0 3px rgba(66, 184, 131, 0.2);
                outline: none;
            }
            
            .agro-btn {
                background-color: #42b883;
                color: white;
                border: none;
                border-radius: 8px;
                padding: 0.75rem;
                width: 100%;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.2s;
            }
            
            .agro-btn:hover {
                background-color: #369b6e;
            }
            
            .agro-link {
                color: #42b883;
                text-decoration: none;
                transition: color 0.2s;
            }
            
            .agro-link:hover {
                color: #2a5936;
                text-decoration: underline;
            }
        </style>

    </head>
    <body class="font-sans  antialiased">
        <div class="agro-bg flex flex-col sm:justify-center items-center p-6 sm:p-0">
            <!-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <div class="agro-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
