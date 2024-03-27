<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
        href="resources/css/app.css">
    @vite(['resources/css/app.css',
    'resources/js/app.js'])
    <style>
            .logo {
      filter: drop-shadow(0px 0 10px orange);
    }
    </style>
</head>

<body class="bg-gray-900">
    <header class="    sm:flex-nowrap z-50 w-full border-b text-sm py-2.5 sm:py-4 bg-gray-900 border-gray-700 ">
        <nav class="max-w-7xl flex items-center justify-center mx-auto px-4 sm:px-6 lg:px-8" aria-label="Global">
            <img src="{{ asset('img/logo_sans.png') }}" class="h-10 logo mr-2" alt="Logo">
            <a class="text-xl font-semibold text-white focus:outline-none focus:ring-1 focus:ring-gray-600" href="https://discord.gg/AxSEmVSGnd" aria-label="zPoq">
                zPoq
                <span class="text-xs font-semibold rounded-full py-1 px-2 bg-gray-700 text-gray-400">v0.0.1</span>
            </a>
        </nav>
    </header>

                
    <nav class="-top-px h-12 text-sm font-medium text-black ring-1 ring-gray-900 ring-opacity-5 shadow-sm pt-6 md:pb-6 mt-4 bg-gray-900  shadow-slate-700/[.7]"
        aria-label="Jump links">
        <div
            class="-mt-6  align-center justify-center max-w-7xl snap-x w-full flex items-center overflow-x-auto px-4 sm:px-6 lg:px-8 pb-4 md:pb-0 mx-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 [&amp;::-webkit-scrollbar-track]:bg-gray-900 [&amp;::-webkit-scrollbar-thumb]:bg-slate-500 bg-gray-900">
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/dashboard"
                    class=" text-amber-600 0 hover:text-amber-800 inline-flex items-center gap-x-2 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-speedometer2 flex-shrink-0"
                        style="font-size: 16px;"></i>
                    Tableau de bord </a>
            </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/customers"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-people flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zAccueil </a> </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/services"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-box2 flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zBump </a> </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/invoices"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-receipt-cutoff flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zCaptcha </a> </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/settings"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-gear flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zModération </a>
            </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/history"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-archive flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zTicket </a>
            </div>
            <div
                class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                <a href="https://test-v2-1.clientxcms.com/admin/emails"
                    class=" inline-flex items-center gap-x-2 hover:text-gray-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    <i class="bi bi-envelope flex-shrink-0"
                        style="font-size: 16px;"></i>
                    zLevels </a> </div>
        </div>
    </nav>



    <div class="w-full pt-10 bg-gray-900 border-gray-700 shadow-slate-700/[.7]">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-1">
                    <div class="w-full flex flex-col">
                        <a href=""
                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium  border   -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg bg-gray-800 border-gray-700  text-primary text-white ">
                            <i class="bi bi-file-earmark"></i> services-renewals.log
                        </a>
                        <a href=""
                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium  border   -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg bg-gray-800 border-gray-700   text-white ">
                            <i class="bi bi-file-earmark"></i> services-expire.log
                        </a>
                        <a href=""
                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium  border   -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg bg-gray-800 border-gray-700   text-white ">
                            <i class="bi bi-file-earmark"></i> services-delivery.log
                        </a>
                        <a href=""
                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium  border   -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg bg-gray-800 border-gray-700   text-white ">
                            <i class="bi bi-file-earmark"></i> proxmox-delete-vps.log
                        </a>
                        <a href=""
                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium  border   -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg bg-gray-800 border-gray-700   text-white ">
                            <i class="bi bi-file-earmark"></i> laravel.log
                        </a>
                    </div>
                </div>
                <div class="col-span-5">
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>