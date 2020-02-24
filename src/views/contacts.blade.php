<!DOCTYPE html>
<html lang="#" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> this is my contact page test</title>
  </head>
  <body>
       this is my nice and test contact page

      <br>

      <form class="" action="{{route('contact')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="your name hear">
        <input type="email" name="email" placeholder="your email hear"> <br>
        <textarea name="content" rows="8" cols="80"></textarea>
        <button type="submit" name="button">send message</button>

      </form>
  </body>
</html>
