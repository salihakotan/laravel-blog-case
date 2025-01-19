<header class="bg-pink-400 text-white py-4 px-10">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-2xl font-bold" href="/">Laravel Blog Case</a>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-pink-600">Home</a></li>
                <li><a href="/categories" class="hover:text-pink-600">Categories</a></li>
                <li><a href="/posts" class="hover:text-pink-600">Posts</a></li>
                <li><a  href="{{route('auth.login')}}"  class="hover:text-pink-600">Login</a></li>
                <li><a href="{{route('auth.register')}}" class="hover:text-pink-600">Sign Up</a></li>
            </ul>
        </nav>
    </div>
</header>
