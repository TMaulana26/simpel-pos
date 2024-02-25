<nav class="flex items-center justify-between p-4 bg-gray-900 shadow-xl">
    <div class="flex items-center">
        <a href="/" class="flex items-center text-2xl font-semibold text-purple-900">
          <img class="w-8 h-8 mr-2 rounded-full border border-gray-100 shadow-sm" src="{{ asset('img/cat.jpg') }}" alt="logo">
          Simpel Pos
        </a>
    </div>
    </div>
    <div class="flex items-center">
        <div class="container mx-auto px-4">
            <div class="flex items-center">
                <p class="text-purple-500 mr-4 text-sm">Hello <b>{{ Auth::user()->name }}</b>!!, You're Log In pal, That's Awesome</p>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-purple-500 hover:bg-purple-700 text-white py-1 px-3 rounded text-sm">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</nav>
