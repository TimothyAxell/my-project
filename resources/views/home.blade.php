<!doctype html  data-theme="cupcake">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @vite('resources/css/app.css')
  <style>
    
  </style>
</head>
<body class="bg-white">
    
    {{-- header section --}}
    <div id="header" class="flex justify-between w-full mt-8 pl-5 pr-5 mb-8">
        <i class="fa fa-bars fa-3x"></i>
        <div class="font-light text-5xl">Products</div>
        <i class="fa fa-search fa-3x"></i>
    </div>
    

    {{-- banner section --}}
    <div class="card w-full h-1/4 image-full">
        <figure><img src="https://wallpaperaccess.com/full/2621913.jpg" alt="Shoes" class="object-cover w-full mb-4 h-60 sm:h-52 dark:bg-gray-500 shadow-lg rounded-md" /></figure>
        <div class="card-body self-center">
          <h2 class="card-title text-5xl place-content-center">Totally Sale!</h2>
          <p class="self-center">It was some time before he obtained any answer, and the reply, when made, was superficial</p>
        </div>
    </div>

    {{-- show all products in card view --}}
    <form class="flex w-full justify-center" method="post" action="/home/item">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 p-10 flex justify-between w-full ">
        
        
            <div class="card card-compact max-w-sm p-6 space-y-6 bg-base-100 shadow-xl">
                <figure><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&w=1000&q=80" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">45$</button>
                </div>
                </div>
            </div>

            <div class="card card-compact max-w-sm p-6 space-y-6 bg-base-100 shadow-xl">
                <figure><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&w=1000&q=80" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">45$</button>
                </div>
                </div>
            </div>

            <div class="card card-compact max-w-sm p-6 space-y-6 bg-base-100 shadow-xl">
                <figure><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&w=1000&q=80" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">45$</button>
                </div>
                </div>
            </div>

            <div class="card card-compact max-w-sm p-6 space-y-6 bg-base-100 shadow-xl">
                <figure><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&w=1000&q=80" alt="Shoes" /></figure>
                <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">45$</button>
                </div>
                </div>
            </div>
        
    </div>
    </form>
    


</body>
</html>

<script type="text/javascript">
    fetch("https://fakestoreapi.com/products")
  .then((res) => res.json())
  .then((json) => var data = json);
</script>
