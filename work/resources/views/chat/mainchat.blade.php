<!DOCTYPE html>
<html lang="en">

  @include('chat.chatHead')


  <body>
   <div class="col-lg-4 col-lg-offset-4">
           <h1 id="greeting">Hello, <span id="username">{{$username}}</span></h1>

           <div id="chat-window" class="col-lg-12">
           @foreach($post as $posts)
          <div id="{{$posts->id}}"> {{$posts->name}}</div>
           @endforeach


           </div>
           <div class="col-lg-12">
               <div id="typingStatus" class="col-lg-12" style="padding: 15px"></div>
               <input type="text" id="text" class="form-control col-lg-12" autofocus="" >
           </div>
       </div>
<button  class='btn btn-success' style="margin:40px 225px " id="send" >Send</button>
















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/chat.js') }}"></script>
  </body>
  </html>