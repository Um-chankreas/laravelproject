 @include('header.link')
<style>
    .label2{
        margin-left: 20px;
    }
    .bo{
        margin-left: 480px;

    }
    .bo1{
        margin-left: 562px;
        margin-top: -37px;

    }
    .label_con{
        color: darkblue;
        margin-left: 20px;
    }
    #subject{
        width: 92%;
        height: 30px;
        margin-left: 330px;
        padding: 12px;
        border: 1px solid dodgerblue;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        background-color: ghostwhite;
        color: darkblue;
    }
    .contact{
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
        background-color: transparent;
        color:darkblue;
    }
    #form_contact{
        border: 1px solid greenyellow;
        width: 500px;
        height: 600px;
        background-color: silver;
        margin-left: 380px;
        padding-left: 10px
    }
    .btn-success{
        margin-left: 370px;
        width: 550px;
    }
    .btn-success:hover{
       color: #00004d;
    }
    .modal-title{
        margin-left: 500px;
        color: darkblue;
        padding-top: 50px;
    }
    #label{
        margin-left: 330px;
    }
</style>
@include('header.navba')
<body style="background-image: url('image/aboutpic.jfif')" >
<form action="/create" method="post" class="getstart" >
    <h1 class="modal-title">Contact Us</h1>
    {{ csrf_field() }}
    <br>
    <div class="row">

        <div class="col-lg-6">
            <label for="fname" class="label_con">First Name:</label>
            <input type="text" class="form-control" id="fname" name="firsts_name" placeholder="First Name" required>
            @error('firsts_name')
            <div id="firstnames">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="lname" class="label2">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="lasts_name" placeholder="Last Name" required>
            @error('lasts_name')
            <div id="lasttnames">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="phone" class="label2">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phones_number" placeholder="Phone Number" required>
            @error('phones_number')
            <div id="phone_numbers">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>
        <div class="col-lg-6">
            <label for="email" class="label1">Email Address:</label>
            <input type="email" class="form-control" id="email" name="emailss" placeholder="Email Address" required>
            @error('emailss')
            <div id="emailse">
                {{$message}}
            </div>
            @enderror
            <div class="valid-feedback"></div>
        </div>

        </div>
    <div class="col-6">
        <label id="label" for="subject">Massage</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:150px" required></textarea>
    </div>
    </div>

    <div><button type="submit" class="btn btn-success" data-content="modal" value="login" >Login</button></div>
</form>
<br>
@include('header.footer')

