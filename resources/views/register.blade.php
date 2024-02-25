@extends('app')

@section('content')

  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="/" class="flex items-center mb-6 text-2xl font-semibold  text-white">
          <img class="w-8 h-8 mr-2 rounded-full border border-gray-100 shadow-sm" src="{{ asset('img/cat.jpg') }}" alt="logo">
          Simpel Pos
      </a>
      <div class="w-full  rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl text-white">
                  Register an account
              </h1>
              <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                @csrf
                  <div>
                      <label for="name" class="block mb-2 text-sm font-medium  text-white">Your Username</label>
                      <input type="text" name="name" class=" border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
                  </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium  text-white">Your email</label>
                      <input type="email" name="email" class=" border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="name@email.com" required>
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium  text-white">Password</label>
                      <input type="password" name="password" placeholder="••••••••" class=" border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" required>
                  </div>
                  <button type="submit" class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register</button>
                  <p class="text-sm font-light text-gray-500">
                      Already have an account? <a href="/" class="font-medium text-primary-600 hover:underline text-primary-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
@endsection
