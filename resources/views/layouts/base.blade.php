<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="base-container">
    <div class="base-header container mx-auto">
      <h1>Laravel</h1>
      <div class="relative inline-block text-left">


        <div>
          <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button">
            @yield('menu-title')
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>

        <div id="drop-menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
          @yield('menu')
        </div>

      </div>
    </div>
  </header>
  <div class="content max-w-lg mx-auto">
    @yield('content')
  </div>


  <script>
    const dropBtn = document.getElementById('menu-button'),
    menu = document.getElementById('drop-menu');
    menu.style.display = 'none';

    let show = false;
    dropBtn.addEventListener('click', (e) => {
      if(show) {
        menu.style.display = 'none';
        show = !show;
      } else {
        menu.style.display = 'block';
        show = !show;
      }
    });
  </script>
</body>
</html>
