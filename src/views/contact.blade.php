<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        .my-form{

        }
        .my-form label{
            display: block;
            margin-bottom: 10px;
            font-weight: bold;

        }
        .form-group{
            margin-bottom: 10px;
        }
        .my-form input[type="text"]{
            width: 100%;
            padding: 10px;
        }
        .my-form textarea{
            width: 100%;
            padding: 8px;
        }
        .button{
            padding: 10px 30px ;
            background-color: black;
            color: white;
            border-radius: 10px;
            border-color: black;
        }

        .button:hover{
            background-color: white;
            color: black;
            border-color: black;
        }
        body{
            margin: 20px;
        }
        .container{
            padding: 100px;
            width: 50%;
            margin: auto;
        }
    </style>
</head>
<body style="  background: #f4f4f4;">

<div class="container">
    <h1>Contact Us</h1>
    <form action="{{route('contact')}}" method="post" class="my-form">
        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name="name" >
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="text" name="email" >
        </div><div class="form-group">
            <label for="">Message:</label>
            <textarea name="message" id="" rows="10"></textarea>
        </div>
        <input type="submit" name="button" class="button" value="Submit">

    </form>
</div>
</body>
</html>