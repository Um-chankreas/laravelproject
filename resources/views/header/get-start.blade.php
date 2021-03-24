<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="
    {{URL::to('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css')}}">
    <script src="{{('/assets/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/get_start.css')}}">
    <title>Register</title>
</head>
<style>
    body{
        background-size: cover;
    }
</style>
<body  style="background-image: url('image/aboutpic.jfif')">
<form action="/start" method="post" class="getstart" >
    <h1 id="h1">Register</h1>
    <br>
    <div class="row">
        <div class="col-lg-6">
            @csrf
            <label for="fname" class="label1">First Name:</label>
            <input type="text" class="form-control" id="fname" name="first_name" placeholder="First Name" required>
            @error('first_name')
            <div id="firstname" >
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="lname" class="label2">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="last_name" placeholder="Last Name" required>
            @error('last_name')
            <div id="lasts_name">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">

            <label for="date" class="label1">Date of birth:</label>
            <input type="date" class="form-control" id="date" name="Date_of_Birth" placeholder="Date of birth" required>
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="gender" class="label1">Gender:</label>
            <select class="form-control" id="sel1" name="sellist1">
                <option>Female</option>
                <option>Male</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="email" class="label1">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
            @error('email')
            <div id="emails">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="phone" class="label2">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Phone Number" required>
            @error('phone_number')
            <div id="phone_numbers">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="password" class="label2">Password:</label>
            <input type="password" class="form-control" name="Password" placeholder="Password" id="password"  required>
            @error('Password')
            <div id="Passwords">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="password" class="label2">Comfirm Password:</label>
            <input type="password" class="form-control" name="Re-password" placeholder="Comfirm Password" id="compassword" required>
            @error('Re-password')
            <div id="Re-passwords">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
            <div class="form-group">
                <input type="checkbox" name="Remember"  />
                <label for="remember-me">Remember me?</label>
            </div>
        </div>
    </div>
        <div><button type="submit" class="btn btn-success" data-content="modal" value="login" >Register</button></div>
</form>
</body>
</html>