<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <script src="https://cdn.tailwindcss.com"></script>

  </head>
  <body>
    @auth

    <form action="/logout" method="POST" >
        @csrf
        <button class="middle none center mr-4 rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold  text-white shadow-md  transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            Log out
           
            </button>
    </form>

    <div class="heading text-center font-bold text-2xl m-5 text-gray-800">New Post</div>

  
    <form action="/create_post" method="post" class=" h-screen">
        @csrf
  <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
   
    <input  name="title" class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text">
    <textarea name="body" class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Describe everything about this post here"></textarea>
    
    <!-- icons -->
    <div class="icons flex text-gray-500 m-2">
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
      <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
    </div>
    <!-- buttons -->
    <div class="buttons flex">
      <button type="submit" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</button>
      <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Post</button>
    </div>

  </div>
  </form>
  <div class="">
    <div class=" md:px-6 2xl:px-0 2xl:mx-auto 2xl:container flex justify-center items-center"> 
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
      
        <div class="flex justify-between items-center w-full">
          <div class="flex flex-col justify-start items-start">
            <p class="text-sm leading-none ">home - Posts</p>
            <div class="mt-2 flex flex-row justify-end items-center space-x-3">
              <p class="text-2xl font-semibold leading-normal  ">All Posts </p>
              
            </div>
          </div>
      
          <button class="   py-3.5 px-3 rounded-sm flex flex-row justify-center items-center space-x-3  ">
            <svg class="" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 14.6452V9.33875" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M4 6.30645V1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 14.6452V7.82263" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 4.79032V1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M20 14.6452V10.8549" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M20 7.82258V1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M1 9.33875H7" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M9 4.79028H15" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M17 10.8549H23" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
      
            <p class="hidden md:block text-sm leading-none ">Filters</p>
          </button>
        </div>
      </div>
    @foreach ($posts as $post)
       <div class='flex items-center justify-center mt-5 mb-5'>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
    <div class="flex w-full items-center justify-between border-b pb-3">
      <div class="flex items-center space-x-3">
        
        <div class="text-lg font-bold text-slate-700">{{$post["title"]}}</div>
        <div class="text-xs text-neutral-500">{{$post["date"]}}</div>
      </div>
      
    </div>

    <div class="mt-4 mb-6">
      <div class="text-sm text-neutral-600">{{$post["body"]}}</div>
  
    </div>
    <a href="/edit/{{$post->id}}"><button
        class="middle none center rounded-lg bg-orange-500 py-3 px-6 font-sans text-xs font-bold  text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
      >
        Edit
      </button></a>
  <!-- On post list or single post view -->
<form action="/delete/{{$post->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete Post</button>
</form>



    
        </div> 
            </div>
            </div> 

        </div>
    @endforeach
</div> 
  </div>
    @else 
    <form action="/register" method="POST" id="singup">
        @csrf
    <div
      class="min-h-screen flex flex-col items-center justify-center bg-gray-100"
    >
      <div
        class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        "
      >
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
          Join us Now
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
          Enter your credentials to get access account
        </div>

        <div class="mt-10">
          
            <div class="flex flex-col mb-5">
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >Name:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-user text-blue-500"></i>
                </div>

                <input
                  id="name"
                  type="text"
                  name="name"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your name"
                />
              </div>
            </div>
            <div class="flex flex-col mb-5">
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >E-Mail Address:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-at text-blue-500"></i>
                </div>

                <input
                  id="email"
                  type="email"
                  name="email"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your email"
                />
              </div>
            </div>
            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Password:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-lock text-blue-500"></i>
                  </span>
                </div>

                <input
                  id="password"
                  type="password"
                  name="password"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your password"
                />
              </div>
            </div>

            <div class="flex w-full">
              <button
                type="submit"
                class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
              >
                <span class="mr-2 uppercase">Sign Up</span>
                <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
              </button>
            </div>
          
        </div>
      </div>
      <div class="flex justify-center items-center mt-6">
        <a
          href="#"
          target="_blank"
          class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          "
        >
          <span class="ml-2"
            >You have an account?
            <a
              href="#login"
              class="text-xs ml-2 text-blue-500 font-semibold"
              >Login here</a
            ></span
          >
        </a>
      </div>
    </div>
</form>
<form action="/login" method="POST" id="login">
    <div class="bg-gray-100 flex justify-center items-center h-screen">
      <!-- Left: Image -->
  {{-- <div class="w-1/2 h-screen hidden lg:block">
    <img src="https://placehold.co/800x/667fff/ffffff.png?text=Your+Image&font=Montserrat" alt="Placeholder Image" class="object-cover w-full h-full">
  </div> --}}
  <!-- Right: Login Form -->
  <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    <h1 class="text-2xl font-semibold mb-4">Login</h1>
    
        @csrf
      <!-- Username Input -->
      <div class="mb-4">
        <label for="username" class="block text-gray-600">Username</label>
        <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
      </div>
      <!-- Password Input -->
      <div class="mb-4">
        <label for="password" class="block text-gray-600">Password</label>
        <input type="password" id="password" name="userpassword" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
      </div>
      <!-- Remember Me Checkbox -->
      <div class="mb-4 flex items-center">
        <input type="checkbox" id="remember" name="remember" class="text-blue-500">
        <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
      </div>
      <!-- Forgot Password Link -->
      <div class="mb-6 text-blue-500">
        <a href="#" class="hover:underline">Forgot Password?</a>
      </div>
      <!-- Login Button -->
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
    </form>
    <!-- Sign up  Link -->
    <div class="mt-6 text-blue-500 text-center">
      <a href="#singup" class="hover:underline">Sign up Here</a>
    </div>
  </div>
  </div>
  </form>
    @endauth



    
  </body>
</html>