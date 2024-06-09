<!doctype html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/7d135c556b.js" crossorigin="anonymous"></script>
</head>
<body class="flex justify-center bg-img">
  <form class="mt-[4rem] mb-[7rem] bg-transparent px-[2rem] py-[2rem] rounded-lg border-[1px] backdrop-blur-[9px]">
    <h1 class="text-center text-white font-bold text-[1.7em]">Sign in</h1>
    <div class="flex justify-evenly mt-[1rem] px-[3rem]">
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent">

        <i class="fa-brands fa-google fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent">

        <i class="fa-brands fa-linkedin-in fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent">

        <i class="fa-brands fa-facebook fa-xl" style="color: #ffff;" ></i>
      </div>
      <div class="rounded-[1rem] border-[1px] p-[0.5rem] bg-transparent">

        <i class="fa-brands fa-github fa-xl" style="color: #ffff;" ></i>
      </div>
  
    </div>
    <h2 class="text-center font-semibold text-white mt-[1rem]">Or use your email and password</h2>
    <div class="flex flex-col mt-[1rem]">
      <input type="email" placeholder="Email" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] ">
      <input type="password" placeholder="Password" class="bg-transparent rounded-[3rem] px-[1rem] py-[0.5rem] border-[1px] w-[22rem] mt-[1rem]">
      <button class="rounded-[3rem] px-[1rem] py-[0.5rem] border-[0.1px] w-[22rem] mt-[1rem] bg-[#02a152] text-white">Sign in</button>
      <a href="" class="text-center text-white font-normal mt-[0.5rem] underline">Forgot your password?</a>
    </div>
    <p class="text-white font-normal mt-[0.5rem]">Don't have an account? <span class="underline"><a href="">Sign up</a></span></p>
  </form>
</body>
</html>