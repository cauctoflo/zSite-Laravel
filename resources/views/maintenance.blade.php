<?php 






?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/app.css">
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            
            .logo {
                transition: filter 0.3s ease-in-out;
            }

            .logo:hover {
                filter: drop-shadow(0px 0 10px orange);
                animation: logo-animation 2s infinite;
            }

            @keyframes logo-animation {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.2);
                }
                100% {
                    transform: scale(1);
                }
            }
        </style>
</head>

<body class="bg-gray-900 w-full ">
    <section class="h-auto bg-gray-900 p-32  text-white" >
        <div class="flex flex-col items-center  justify-center">
            <img src="img/logo_sans.png" class="logo h-auto w-64  mb-10" alt="">
            <h1 class="text-2xl font-bold mb-6">Coming Soon</h1>
            <!-- Countdown Timer -->
            <div class="flex text-2xl mb-6">
                <div class="mr-2"> <span id="days"
                        class="font-semibold">00</span> Jours </div>
                <div class="mr-2"> <span id="hours"
                        class="font-semibold">00</span> Heures </div>
                <div class="mr-2"> <span id="minutes"
                        class="font-semibold">00</span> Minutes </div>
                <div> <span id="seconds"
                        class="font-semibold">00</span> Secondes
                </div>
            </div> <!-- Email Subscription Form -->
            <form method="POST" action="/maintenance/endpoint" class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2">
                @csrf <!-- Ajoutez cette ligne pour inclure le champ _token -->
                <input id="email" name="email" type="email" placeholder="Entrez votre email" class="rounded-full px-4 py-2 bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring focus:ring-blue-400" />
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                    Recevoir une notification
                </button> 
            </form>
            <!-- Social Media Links -->
            <div class="mt-4 space-x-4"> <a href="#"
                    class="text-gray-400 hover:text-white"> <i
                        class="fab fa-facebook-f"></i> </a> <a
                    href="#" class="text-gray-400 hover:text-white">
                    <i class="fab fa-twitter"></i> </a> <a href="#"
                    class="text-gray-400 hover:text-white"> <i
                        class="fab fa-instagram"></i> </a> </div>
        </div>
    </section>


    <div class="relative  mt-20">
            <svg viewBox="0 0 1428 174" version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none"
                    fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)"
                        fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)"
                        fill="#1f2937" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>


                            <section class="bg-gray-800">
                                <div class="container mx-auto py-10">
                                    <div class="flex items-center justify-center mb-8"> <img
                                            src="img/logo_sans.png" class="h-16 "
                                            alt="Logo">
                                        <h2 class="text-3xl font-bold text-white ml-4">
                                            Avancement du projet</h2>
                                    </div>
                                    <div class="ml-24">
                                        <ol
                                            class="relative border-s border-gray-200 dark:border-gray-700">
                                            <li class="mb-10 ms-4">
                                                <div
                                                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                                </div> <time
                                                    class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    Avril 2024 </time>
                                                <h3
                                                    class="text-lg font-semibold text-white dark:text-white">
                                                    Migration</h3>
                                                <p
                                                    class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    Nous migrons vers Laravel pour une meilleure efficacité et qualité de développement. Merci pour votre coopération.
                                                    </p> <a href="https://discord.gg/rsdcTfqNtq"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                                    En savoir plus
                                                    <svg
                                                        class=" hover:bg-orange-500 w-3 h-3 ms-2 rtl:rotate-180"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                    </svg></a>
                                            </li>
                                            <li class="mb-10 ms-4">
                                                <div
                                                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                                </div> <time
                                                    class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    Mars 2024 </time>
                                                <h3
                                                    class="text-lg font-semibold text-white dark:text-white">
                                                    Développement du Site Vitrine</h3>
                                                <p
                                                    class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                                    Le développement du site vitrine comprend
                                                    l'accès à plus de 20 pages, dont une mise
                                                    en page du tableau de bord, des
                                                    graphiques, un
                                                    calendrier et des pages de pré-commande
                                                    </p> <a href="https://discord.gg/rsdcTfqNtq"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                                    En savoir plus
                                                    <svg
                                                        class=" hover:bg-orange-500 w-3 h-3 ms-2 rtl:rotate-180"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                    </svg></a>
                                            </li>
                                            <li class="mb-10 ms-4">
                                                <div
                                                    class="hover:bg-orange-500 absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                                </div> <time
                                                    class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                                    Février 2024
                                                    </time>
                                                <h3
                                                    class="text-lg font-semibold text-white">
                                                    Lancement du projet zPoq</h3>
                                                <p
                                                    class="text-base font-normal text-gray-500 dark:text-gray-400">

                                                    Réflexion sur tous les aspects du projet, incluant le développement, la communication et les fonctionnalités de votre familier préféré zPoq.
                                                </p>
                                                </li>

                                        </ol>
                                    </div>
                                </div>


                            <footer class="px-4 py-8 bg-gray-800 text-gray-400">
                        	<div class="container flex flex-wrap items-center justify-center mx-auto space-y-4 sm:justify-between sm:space-y-0">
                        		<div class="flex flex-row pr-3 space-x-4 sm:space-x-8">
                        			<div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full dark:bg-orange-500">
                        				<img src="/assets/img/logo_sans.png" style="filter: drop-shadow(0px 0 10px orange);" alt="">
                        			</div>
                        			<ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
                        				<li>
                        					<a rel="noopener noreferrer" href="#">Nous contacter</a>
                        				</li>

                        			</ul>
                        		</div>
                        		<ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
                        			<li class="hover:text-gray-100 hover:cursor-pointer">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                        </svg>
                        			</li>
                        			<li class="hover:text-gray-100 hover:cursor-pointer">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>

                        			</li>
                        			<li class="hover:text-gray-100 hover:cursor-pointer">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                        			</li>
                        		</ul>
                        	</div>
                        </footer>
                            </section>
                            <script>
                                // Set the date we're counting down to (adjust the date and time)
                                const countDownDate = new Date("June 30, 2024 00:00:00").getTime();

                                // Update the countdown every 1 second
                                const x = setInterval(function () {
                                  // Get the current date and time
                                  const now = new Date().getTime();

                                  // Calculate the time remaining
                                  const distance = countDownDate - now;

                                  // Calculate days, hours, minutes, and seconds
                                  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                  // Display the countdown in the HTML
                                  document.getElementById("days").innerHTML = days;
                                  document.getElementById("hours").innerHTML = hours;
                                  document.getElementById("minutes").innerHTML = minutes;
                                  document.getElementById("seconds").innerHTML = seconds;

                                  // If the countdown is over, display a message
                                  if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("countdown").innerHTML = "EXPIRED";
                                  }
                                }, 1000);
                            </script>
                        </body>

                        </html>
