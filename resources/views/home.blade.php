<a href="{{route('home')}}">Home</a>
<a href="{{route('home',['page'=>'about'])}}">About</a>
<a href="{{route('home',['page'=>'contact'])}}">Contact</a>
<a href="{{route('home',['page'=>'profile'])}}">Profile</a><br>
Welcome to {{$page}} page

<!-- comments in laravels {{-- --}} -->
{{-- <a href="{{route('home',['page'=>'profile'])}}">Profile</a><br> --}}
