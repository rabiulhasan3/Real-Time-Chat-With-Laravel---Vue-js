<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
    .list-group{
			overflow-y: scroll!important;
			height: 200px!important;
		}
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5" id="app">
                <div class="col-md-4 offset-md-4">
                        <li class="list-group-item active">Chat Room </li>
                       
                        <ul class="list-group">
                          <message
                          v-for="value in chat.message"
                          :key = "value.index"
                          color = 'primary'
                          >
                              @{{ value }}
                          </message>
                        </ul>
                          <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send'>
                          <br>
                         
                    </div>
        </div>
           
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>