<!doctype html>
<html class="h-[100%]">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/7d135c556b.js" crossorigin="anonymous"></script>
</head>
<body class="flex justify-center bg-img align-middle items-center h-[100%]">
  <form class="bg-transparent px-[2rem] py-[2rem] rounded-lg border-[1px] backdrop-blur-[9px] h-[30rem]" action="/register" method="post">
    @csrf
    <h1 class="text-center text-white font-bold text-[1.7em]">Daftar</h1>
    <div class="flex justify-evenly mt-[1rem] px-[3rem]">
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent cursor-pointer">

        <i class="fa-brands fa-google fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent cursor-pointer">

        <i class="fa-brands fa-linkedin-in fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent cursor-pointer">

        <i class="fa-brands fa-facebook fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent cursor-pointer">

        <i class="fa-brands fa-github fa-xl" style="color: #ffff;" ></i>
      </div>
  
    </div>
    <h2 class="text-center font-semibold text-white mt-[1rem]">Atau gunakan email untuk daftar</h2>
    <div class="flex flex-col mt-[1rem]">
      <input type="text" placeholder="Username" name="name" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] focus:border-[#02a152] focus:outline-none text-white @error('name') invalid:border-red-500 @enderror" value="{{old('name')}}" required >
      @error('name')
        
      <p class="text-red-500 ml-1 text-[13px]">{{$message}}</p>
      @enderror
      <input type="email" placeholder="Email" name="email" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] mt-[1rem] focus:border-[#02a152] focus:outline-none text-white @error('email') invalid:border-red-500 @enderror" value="{{old('email')}}" required>
      @error('email')
        
      <p class="text-red-500 ml-1 text-[13px]">{{$message}}</p>
      @enderror
      <input type="password" placeholder="Password" name="password" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] mt-[1rem] focus:border-[#02a152] focus:outline-none text-white @error('password') invalid:border-red-500 @enderror" required>
      @error('password')
        
      <p class="text-red-500 ml-1 text-[13px]">{{$message}}</p>
      @enderror
      <button type="submit" class="rounded-[3rem] px-[1rem] py-[0.5rem] border-[0.1px] w-[22rem] mt-[1rem] bg-[#02a152] text-white hover:bg-[#43b97e] ease-in-out">Daftar</button>
       
    </div>
    <p class="text-white font-normal mt-[0.5rem]">Sudah punya akun? <span class="underline"><a href="/login">Masuk</a></span></p>
  </form>
</body>
</html>