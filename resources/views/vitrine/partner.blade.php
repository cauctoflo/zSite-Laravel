<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index/style.css">

    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Navbar Discord</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/app.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <style>

.custom-shape-divider-top-1715974341 {

    width: 100%;
    overflow: hidden;

    transform: rotate(180deg);
}

.custom-shape-divider-top-1715974341 svg {
    position: relative;
    display: block;
    width: calc(300% + 1.3px);
    height: 140px;
}

.custom-shape-divider-top-1715974341 .shape-fill {
    fill: #609396;
}
    </style>

</head>
<body class="bg-white">

  @include('vitrine.navbar');

  <div class="-mt-[32rem] max-w-7xl h-screen  mx-auto relative">
    <div class="relative py-16 flex justify-center px-4 sm:px-0">
        <div class="max-w-3xl text-center">

        <a href="/invite">
            <div class="pb-4">
                <span class="inline-flex items-center rounded-2xl bg-orange-100 px-4 py-1.5 text-xs sm:text-sm font-serif font-medium text-orange-700">Deviens partenaire de zPoq et boost ton serveur discord</span>
              </div>    
        </a>  
          
          <h1 style="font-family: Nunito;" class="text-4xl sm:text-5xl font-semibold text-zinc-900 xl:text-6xl font-serif !leading-tight">
            zPoq - Partenaire
          </h1>
          <p class="mt-4 text-lg sm:text-xl leading-8 text-gray-800 sm:px-16" style="white-space: pre-line;">Devenez partenaire et profitez d'avantages exclusifs, d'une visibilité accrue et de fonctionnalités exclusives.</p>
          <div class="mt-8 flex w-full space-x-8 justify-center"><a
              href="/exercises"><button class="inline-flex items-center justify-center  py-2.5 border border-transparent  font-medium   focus:outline-none ring-2 ring-offset-2 ring-transparent ring-offset-transparent disabled:bg-gray-400 appearance-none text-white bg-orange-500 hover:bg-orange-600 focus:ring-orange-600 focus:ring-offset-white !px-12 !shadow-lg !rounded-full !text-base"><p>Devenir Partenaire</p></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
     
</section>
{{-- <div class="custom-shape-divider-top-1715974341 -mt-[12rem] ">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
    </svg>
</div> --}}


<div class=" py-8 mx-auto">
    
  
    <div class="flex justify-center items-center flex-col -mt-24">
      <h2 class="text-dark-100 mx-auto max-w-xl font-bold text-[35px] leading-[42px]">Nos Partenaires</h2>
      <div class=" mt-4 -mb-4 h-2 rounded-full bg-orange-500 w-24"></div>
      <p class="text-dark-300 text-base my-8 w-full max-w-2xl mx-auto text-center">
        Découvrez les partenaires qui font confiance à zPoq pour la communication et la gestion de leurs serveurs Discord. Rejoignez les nombreux partenaires satisfaits qui bénéficient de nos services pour optimiser l'expérience utilisateur et améliorer la coordination au sein de leurs communautés.
      </p>
  </div>



  <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-16">


  
  <div class="flex flex-col justify-center items-center  min-h-screen">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
        <img src="https://media.discordapp.net/attachments/1051444163218001940/1233127524108603392/edc91c39d6cc891781f3f7fc603f46dc_1.png?ex=6648f800&is=6647a680&hm=95b903bbfe822864db5303ff85f971c0b24aba8e6f96cb53ee9070183697f5a2&=&format=webp&quality=lossless" alt="Mountain" class="w-64 h-64 object-cover mx-auto">
        <div class="p-6">
          <a href="https://discord.gg/GX3rA45QUn"><h2 class="text-2xl font-bold text-gray-800 mb-2 hover:text-blue-800 hover:cursor-pointer">Data-x Système</h2></a>
          <p class="text-gray-700 leading-tight mb-4">
              🔒 Préoccupé par la sécurité de votre serveur Discord ? Notre bot de cybersécurité est là pour veiller sur votre communauté virtuelle. De la détection des menaces aux conseils, notre équipe est là pour vous aider !
            </p>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://avatars.githubusercontent.com/u/87550087?s=400&u=bbe932b36cd5f9e25bb7f52292152aee1df5ac1f&v=4" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                    <span class="text-gray-800 font-semibold">Florentin Dev</span>
                </div>
                <span id="data-x-system" class="text-gray-600"></span>
              </div>
        </div>
    </div>
</div>   

<div class="flex flex-col justify-center items-center  min-h-screen">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
        <img src="https://media.discordapp.net/attachments/1052364734046941325/1241118109121777674/afe7caad982b289157604de62a9f247e.png?ex=664908d0&is=6647b750&hm=9f3eb4542ab80ccccb658d519996560455ad14d021f0cc9bccc1ee52f183f26c&=&format=webp&quality=lossless" alt="Mountain" class="w-64 h-64 object-cover mx-auto">
        <div class="p-6">
          <a href="https://discord.gg/a7e4HzAw8q"><h2 class="text-2xl font-bold text-gray-800 mb-2 hover:text-blue-800 hover:cursor-pointer">HiveCloud</h2></a>
          <p class="text-gray-700 leading-tight mb-4">
            🚀 Cherchez-vous un hebergeur fiable pour héberger votre site web ou votre serveur de jeux ou vps ? {bientôt} Ne cherchez pas plus loin, car Hy-Network est là pour vous offrir une expérience d'hébergement exceptionnelle!.
            </p>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://avatars.githubusercontent.com/u/87550087?s=400&u=bbe932b36cd5f9e25bb7f52292152aee1df5ac1f&v=4" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                    <span class="text-gray-800 font-semibold">Florentin Dev</span>
                </div>
                <span id="hivecloud" class="text-gray-600"></span>
              </div>
        </div>
    </div>
</div>  
 
<div class="flex flex-col justify-center items-center  min-h-screen">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
        <img src="https://images-ext-1.discordapp.net/external/q6-5TKqymNSg29RTRf9hGSDN0fKQ-O4b9cielSnUKns/%3Fsize%3D512/https/cdn.discordapp.com/icons/946378038009020446/bf0e3eccb3a8e4c4efca94c1ccca8a43.webp?format=webp&width=444&height=444" alt="Mountain" class="w-64 h-64 object-cover mx-auto">
        <div class="p-6">
          <a href="https://zpoq.fr/discord"><h2 class="text-2xl font-bold text-gray-800 mb-2 hover:text-blue-800 hover:cursor-pointer">Devenir Partenaire</h2></a>
          <p class="text-gray-700 leading-tight mb-4">
            Devenez partenaire et profitez d'avantages exclusifs, d'une visibilité accrue et de fonctionnalités exclusives.
            </p>


            <div class="flex gap-3 max-w-sm mb-4">
              <button class="py-2.5 px-6 rounded-lg text-sm font-medium bg-teal-200 text-teal-800 hover:bg-teal-600 hover:text-white hover:cursor-pointer">En savoir plus</button>
          </div>

            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://avatars.githubusercontent.com/u/87550087?s=400&u=bbe932b36cd5f9e25bb7f52292152aee1df5ac1f&v=4" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                    <span class="text-gray-800 font-semibold">Florentin Dev</span>
                </div>
                <span id="hivecloud" class="text-gray-600"></span>
              </div>
        </div>
    </div>
</div>   
</div>
</div>



@include('vitrine.footer')


<script>

function startCountdown(startDate, elementId) {
            function updateCounter() {
                const currentDate = new Date();
                const diffTime = Math.abs(currentDate - new Date(startDate));

                const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
                const diffYears = Math.floor(diffDays / 365);
                const remainingDaysAfterYears = diffDays % 365;
                const diffMonths = Math.floor(remainingDaysAfterYears / 30);
                const remainingDaysAfterMonths = remainingDaysAfterYears % 30;
                const diffHours = Math.floor((diffTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const diffMinutes = Math.floor((diffTime % (1000 * 60 * 60)) / (1000 * 60));
                const diffSeconds = Math.floor((diffTime % (1000 * 60)) / 1000);

                let displayText = '';

                if (diffYears > 0) {
                    displayText = `Il y a ${diffYears} ${diffYears > 1 ? 'années' : 'année'}`;
                } else if (diffMonths > 0) {
                    displayText = `Il y a ${diffMonths} ${diffMonths > 1 ? 'mois' : 'mois'}`;
                } else if (remainingDaysAfterMonths > 0) {
                    displayText = `Il y a ${remainingDaysAfterMonths} ${remainingDaysAfterMonths > 1 ? 'jours' : 'jour'}`;
                } else if (diffHours > 0) {
                    displayText = `Il y a ${diffHours} ${diffHours > 1 ? 'heures' : 'heure'}`;
                } else if (diffMinutes > 0) {
                    displayText = `Il y a ${diffMinutes} ${diffMinutes > 1 ? 'minutes' : 'minute'}`;
                } else {
                    displayText = `Il y a ${diffSeconds} ${diffSeconds > 1 ? 'secondes' : 'seconde'}`;
                }

                document.getElementById(elementId).innerHTML = displayText;
            }

            // Mettre à jour le compteur chaque seconde
            setInterval(updateCounter, 1000);

            // Appel initial pour afficher immédiatement le compteur
            updateCounter();
        }

      startCountdown('2024-05-17T22:00:00', 'data-x-system');
      startCountdown('2024-05-17T22:00:00', 'hivecloud');
      </script>

</body>
</html>