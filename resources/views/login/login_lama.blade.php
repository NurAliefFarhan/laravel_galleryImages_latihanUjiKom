<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 mx-auto my-auto">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-14 w-auto" src="{{asset('assets/img/logo.png')}}" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign In to your account</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('auth')}}" method="POST">
                @csrf
                @if ($errors->any())
                {{-- alert kalau tidak di isi, akan muncul alert denger  --}}
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 

                
                @if(Session::get('successRegister'))
                    <div class="alert alert-success w-70">
                        {{Session::get('successRegister')}} 
                    </div>
                @endif
                @if(Session::get('failedLogin'))
                    <div class="alert alert-danger w-70">
                        {{Session::get('failedLogin')}} 
                    </div>
                @endif
                @if(Session::get('notAllowed'))
                    <div class="alert alert-danger w-70">
                        {{Session::get('notAllowed')}} 
                    </div>
                @endif

                
                <div class="flex gap-3">
                    <div class="w-full">
                        <div class="w-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                            <div class="mt-2">
                                <input id="username" name="username" type="string" autocomplete="username" required class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="w-full">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="password" required class="block w-full pl-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
                        {{-- <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div>      
                        <div>
                            <label for="nama_lengkap" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                            <div class="mt-2">
                                <input id="nama_lengkap" name="string" type="nama_lengkap" autocomplete="nama_lengkap" required class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                            </div>
                            <div class="mt-2">
                                <input id="alamat" name="alamat" type="text" autocomplete="current-password" required class="block w-64 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>
      
          <p class="mt-10 text-center text-sm text-gray-500">
            Belum memiliki akun ?
            <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
          </p>
        </div>
      </div>
</body>
</html>
