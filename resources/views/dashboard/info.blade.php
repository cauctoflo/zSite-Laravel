<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
         rel='stylesheet'>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      @vite(['resources/css/app.css', 'resources/js/app.js']) 
	  <link rel="stylesheet" href="/app.css">

   </head>
   <body class="bg-gray-900">
    @include('layout')


      <div class="h-16 bg-gray-900 mb-16"></div>
      
    <div
        class=" mt-32 rounded-md  xl:ml-[4rem] md:ml-[4rem] lg:ml-[4rem] xl:mr-[4rem] md:mr-[4rem] lg:mr-[4rem] bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
        
        
        <h1 class="text-4xl text-center pt-8 text-white sm:text-4xl -mb-32 font-bold title-font ">Vos Informations</h1>

        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid mt-32 sm:grid-cols-2 lg:grid-cols-3 ">


   <div class="mb-4 max-w-sm mx-auto mt-20">
      <label class="block text-gray-700 font-bold mb-2" for="email">
         Email
      </label>
         <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Email address">
   </div>

   <div class="mb-4 max-w-sm mx-auto mt-20">
      <label class="block text-gray-700 font-bold mb-2" for="email">
      Email
   </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Email address">
         </div>
   <div class="mb-4 max-w-sm mx-auto mt-20">
      <label class="block text-gray-700 font-bold mb-2" for="email">
      Email
   </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="email" type="email" placeholder="Email address">
         </div>
</body>
</html>