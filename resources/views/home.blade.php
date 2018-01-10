<!DOCTYPE html>
<html>
    <head>
        <title>Find frineds</title>



        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            

            .title {
                font-size: 96px;
            }
        </style>
        <script type="text/javascript" src="{{asset('friends.js')}}"></script>
        <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
               @yield('content')
            </div>
        </div>
    </body>
</html>
