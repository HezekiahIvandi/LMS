<!doctype html>
<html class="h-[100%]">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/7d135c556b.js" crossorigin="anonymous"></script>
</head>
<body class="flex justify-center bg-img h-[100%] items-center">
  <form action='/login' method='post' class="bg-transparent px-[2rem] py-[2rem] rounded-lg border-[1px] backdrop-blur-[9px] min-h-[28rem]">
    @csrf
    @if(session()->has('success'))
    <div class="flex justify-center items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{session('success')}}</span>
      </div>
    </div>
    @endif
    <h1 class="text-center text-white font-bold text-[1.7em]">Sign in</h1>
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
    <h2 class="text-center font-semibold text-white mt-[1rem]">Or use your email and password</h2>
    <div class="flex flex-col mt-[1rem]">
      
      <input type="email" name='email' placeholder="Email" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] focus:border-[#02a152] focus:outline-none text-white first-letter:@error('email') invalid:border-red-500 @enderror" value={{ old('email') }}  required>
      @error('email')
        
      <p class="text-red-500 ml-1 text-[13px]">{{$message}}</p>
      @enderror
      <input type="password" name='password' placeholder="Password" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] mt-[1rem] focus:border-[#02a152] focus:outline-none text-white @error('password') invalid:border-red-500 @enderror"   required>
      @error('password')
        
      <p class="text-red-500 ml-1 text-[13px]">{{$message}}</p>
      @enderror
      <button class="rounded-[3rem] px-[1rem] py-[0.5rem] border-[0.1px] w-[22rem] mt-[1rem] bg-[#02a152] text-white hover:bg-[#43b97e] ease-in-out" type='submit'>Sign in</button>
      <a href="" class="text-center text-white font-normal mt-[0.5rem] underline">Forgot your password?</a>
    </div>
    <p class="text-white font-normal mt-[0.5rem]">Don't have an account? <span class="underline"><a href="">Sign up</a></span></p>
  </form>
</body>
</html>