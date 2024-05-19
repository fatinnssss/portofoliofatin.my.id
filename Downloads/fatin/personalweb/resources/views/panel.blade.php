<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatin Backend!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#343131]">
    <div class="flex justify-center h-screen w-screen items-center">
     <form method="POST" class="w-full md:w-1/2 flex flex-col items-center " >
         @csrf
         <h1 class="text-center text-4xl font-bold text-orange-600 mb-6">FATIN BACKEND<span class="text-white">.</span></h1>
         <!-- email input -->
         <div class="w-3/4 mb-6">
             <input type="username" name="username" id="username" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-orange-600" placeholder="Username">
         </div>
         <!-- password input -->
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-orange-600 " placeholder="Password">
         </div>
         <!-- remember input -->
         <!-- button -->
         <div class="w-3/4 mt-4">
             <button type="submit" class="py-4 hover:bg-slate-400 w-full rounded hover:text-black font-bold bg-orange-600 text-white"> LOGIN</button>
         </div>
     </div>
    </div>
 </body>
</html>