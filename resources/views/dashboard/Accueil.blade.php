<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
         rel='stylesheet'>
      <link rel="stylesheet" href="resources/css/app.css">
      @vite(['resources/css/app.css', 'resources/js/app.js']) 
      <style>
         .logo {
         filter: drop-shadow(0px 0 10px orange);
         }
      </style>
   </head>
   <body class="bg-gray-900">
      @include('layout');
      <div
         class="w-full pt-10 dark:bg-gray-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
         <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="flex flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-800 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
               <div class="p-4 md:p-5 flex gap-x-4">
                  <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                     <h1><i class=' text-5xl text-amber-500 bx bx-line-chart'></i></h1>
                  </div>
                  <div class="grow">
                     <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Arrivés</p>
                     </div>
                  </div>
                  <div class="mt-1 flex items-center gap-x-2">
                     <h3 class="text-xl sm:text-2xl font-medium text-white">
                     <div class="flex justify-end mt-2">
                        12
                     </div>
                  </div>
               </div>
            </div>
            <div class="flex flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-800 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
               <div class="p-4 md:p-5 flex gap-x-4">
                  <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                     <h1><i class=' text-5xl text-amber-500 bx bx-line-chart-down' ></i></h1>
                  </div>
                  <div class="grow">
                     <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Départs</p>
                     </div>
                  </div>
                  <div class="mt-1 flex items-center gap-x-2">
                     <h3 class="text-xl sm:text-2xl font-medium text-white">
                     <div class="flex justify-end mt-2">
                        8
                     </div>
                  </div>
               </div>
            </div>
            <div class="flex flex-col shadow-sm rounded-xl bg-gray-800 hover:bg-gray-800 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out">
               <div class="p-4 md:p-5 flex gap-x-4">
                  <div class="flex-shrink-0 flex justify-center items-center w-[48px] h-[48px] rounded-lg border-gray-800">
                     <h1><i class=' text-5xl text-amber-500 bx bx-user' ></i></h1>
                  </div>
                  <div class="grow">
                     <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">Membres total</p>
                     </div>
                  </div>
                  <div class="mt-1 flex items-center gap-x-2">
                     <h3 class="text-xl sm:text-2xl font-medium text-white">
                     <div class="flex justify-end mt-2">
                        364
                     </div>
                  </div>
               </div>
            </div>
         </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-8">
            <div class="">
               <div class="mb-4 max-w-sm mx-auto  sm:mt-0 lg:mt-10">
                  <label class="block text-gray-400 font-bold mb-2" for="number">
                  Channel
                  </label>
                  <p class="text-red-500 text-xs italic mt-2">Channel ID incorect</p>
                  <input class="shadow bg-gray-800 appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Id">
                  <p class="text-sm  text-gray-500">Rentrez l'id du channel où seront envoyés les messages</p>
               </div>
            </div>
            <div class="">
               <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-10">
                  <label class="block text-gray-400 font-bold mb-2" for="number">
                  Role
                  </label>
                  <p class="text-red-500 text-xs italic mt-2">Role ID incorect</p>
                  <input class="shadow bg-gray-800 appearance-none border  w-full py-2 px-3 text-gray-700 leading-tight rounded-lg focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Id">
                  <p class="text-sm  text-gray-500">Rentrez l'id du rôle qui sera donné à l'utilisateur</p>
               </div>
            </div>

            <div class="">
               <div class="mb-4 max-w-sm mx-auto sm:mt-0 lg:mt-16">
                <p class="opacity-0">test</p>
                
                  <button data-ripple-light="true" data-popover-target="menu-1" data-popover-nested="true"
                     class="select-none rounded-lg h-10  bg-gray-800 border border-gray-600 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     Sélectionné le type
                  </button>
                  <ul role="menu" data-popover="menu-1" data-popover-placement="bottom"
                     class="absolute z-10 min-w-[180px] overflow-auto rounded-md border border-blue-gray-50 bg-gray-800 p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
                     <li role="menuitem"
                        class="hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out  block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        Texte
                     </li>
                     <li role="menuitem"
                        class=" hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out  block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        Embed
                     </li>
                     <li role="menuitem"
                        class="hover:bg-gray-300 hover:opacity-90 duration-300 ease-in-out block w-full cursor-pointer select-none rounded-md px-3 pt-[9px] pb-2 text-start leading-tight transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                        Image
                     </li>

                  </ul>
                  
               </div>
            </div>
         </div>
        </div>



    <div class="grid sm:grid-cols-1 lg:grid-cols-1 gap-2 sm:gap-1 mt-8">
        <form>
            <div class="ml-24 w-5/12 mb-4 border border-gray-200 rounded-lg bg-gray-800 dark:bg-gray-800 dark:border-gray-600">
                <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                    <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse dark:divide-gray-600">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                                     <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                                 </svg>
                                <span class="sr-only">Attach file</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                     <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                 </svg>
                                <span class="sr-only">Embed map</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                     <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"/>
                                     <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                                 </svg>
                                <span class="sr-only">Upload image</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                     <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                     <path d="M14.067 0H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.933-2ZM6.709 13.809a1 1 0 1 1-1.418 1.409l-2-2.013a1 1 0 0 1 0-1.412l2-2a1 1 0 0 1 1.414 1.414L5.412 12.5l1.297 1.309Zm6-.6-2 2.013a1 1 0 1 1-1.418-1.409l1.3-1.307-1.295-1.295a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1-.001 1.408v.004Z"/>
                                 </svg>
                                 <span class="sr-only">Format code</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM13.5 6a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm-7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm3.5 9.5A5.5 5.5 0 0 1 4.6 11h10.81A5.5 5.5 0 0 1 10 15.5Z"/>
                                 </svg>
                                <span class="sr-only">Add emoji</span>
                            </button>
                        </div>
                        <div class="flex flex-wrap items-center space-x-1 rtl:space-x-reverse sm:ps-4">
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 18">
                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 3h9.563M9.5 9h9.563M9.5 15h9.563M1.5 13a2 2 0 1 1 3.321 1.5L1.5 17h5m-5-15 2-1v6m-2 0h4"/>
                                 </svg>
                                <span class="sr-only">Add list</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
                                 </svg>
                                <span class="sr-only">Settings</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z"/>
                                     <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z"/>
                                 </svg>
                                <span class="sr-only">Timeline</span>
                            </button>
                            <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                     <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                     <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                 </svg>
                                <span class="sr-only">Download</span>
                            </button>
                        </div>
                    </div>
                    <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ms-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 1h5m0 0v5m0-5-5 5M1.979 6V1H7m0 16.042H1.979V12M18 12v5.042h-5M13 12l5 5M2 1l5 5m0 6-5 5"/>
                         </svg>
                        <span class="sr-only">Full screen</span>
                    </button>
                    <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-800">
                        Show full screen
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <div class="px-4 py-2 bg-gray-800 rounded-b-lg dark:bg-gray-800">
                    <label for="editor" class="sr-only">Publish post</label>
                    <textarea id="editor" rows="8" class="block w-full px-0 text-sm bg-gray-800 border-0 dark:bg-gray-800 focus:ring-0 text-white dark:placeholder-gray-400" placeholder="Write an article..." required /></textarea>
                </div>
            </div>
         </form>
    </div>

      <div class="flex items-center justify-center mx-auto">
         <div class="mb-4 max-w-sm  mt-20 sm:mt-0 flex items-center justify-center">
            <button class="bg-green-800 hover:bg-green-700 hover:opacity-90 cursor-pointer transition duration-300 ease-in-out rounded-full w-48 h-8 text-white font-semibold">
               <div class="flex gap-2 justify-center items-center">
                  <span>
                  <i class=' text-xl bx bx-cog'></i>
                  </span>
                  <span class="text-sm">Sauvegarder</span>
               </div>
            </button>
         </div>
      </div>
      <script
         type="module"
         src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"
         ></script>
        <script>
            const menuItems = document.querySelectorAll('[role="menuitem"]');
            const button = document.querySelector('[data-popover-target="menu-1"]');

            menuItems.forEach(item => {
                item.addEventListener('click', () => {
                    button.textContent = item.textContent;
                });
            });
        </script>
   </body>
</html>