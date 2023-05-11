<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif&family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background: linear-gradient(315deg, #8d5185 0%, #a1bafe 74%);
    font-family: 'Roboto', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    width: 400px;
    max-width: 100%;
}

.header {
    background-color: #f7f7f7;
    color: #ba4fab;
    border-radius: 1px solid #f0f0f0;
    padding: 20px 40px;
}

.form {
    padding: 30px 40px;
}

.form-control {
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label {
    display: inline-block;
    margin-bottom: 5px;
}

.form-control input {
    border: transparent;
    outline: 2px dotted #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;
    font-family: inherit;
    transition: all 0.3s ease-in;
}

input:focus {
    border: transparent;
    outline: 2px dotted #ba4fab;
}

.form-control.success input {
    border-color: #2ecc71;
}

.form-control.error input {
    border-color: #e74c3c;
}

.form-control i {
    position: absolute;
    top: 37px;
    right: 10px;
    visibility: hidden;
}

.form-control.success i.fa-check-circle {
    visibility: visible;
    color: #2ecc71;
}

.form-control.error i.fa-exclamation-circle {
    visibility: visible;
    color: #e74c3c;
}

.form-control small {
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small {
    visibility: visible;
    color: #e74c3c;
}

.form button {
    background-color: #8d5185;
    border: none;
    color: #fff;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-family: inherit;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.4s linear;
}

.form button:hover {
    background-color: #b2239f;
}

.message {
    padding: 30px;
    font-size: 2rem;
    color: #b2239f;
    text-align: center;
    animation-name: fade-in;
    -webkit-animation-name: fade-in;
    animation-duration: 1.5s;
    -webkit-animation-duration: 1.5s;
    animation-timing-function: ease-in-out;
    -webkit-animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
    -webkit-animation-fill-mode: forwards;
    animation-direction: alternate;
    -webkit-animation-direction: alternate;
}

.hidden {
    display: none;
}

@keyframes fade-in {
    from {
        transform: rotate(0deg) scale(0) skew(0deg) translateY(30px);
    }
    to {
        transform: rotate(0deg) scale(1) skew(0deg) translateY(0);
    }
}

@-webkit-keyframes fade-in {
    from {
        -webkit-transform: rotate(0deg) scale(0) skew(0deg) translateY(30px);
    }
    to {
        -webkit-transform: rotate(0deg) scale(1) skew(0deg) translateY(0);
    }
}
    </style>  
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="header">
        <h2>Registration Form</h2>
    </div>
    <form class="form" id="form" action="insert.php" method="POST">
        <div class="form-control">
            <label for="">First Name</label>
            <input type="text" placeholder="first name" id="fname" name="f_name">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Last  Name</label>
            <input type="text" placeholder="last name" id="lname" name="l_name" >
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Email</label>
            <input type="email" placeholder="abc@email.com" id="email " name="user_email"  >
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Phone Number</label>
            <input type="text" placeholder="Number" id="Number" name="user_number">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Address</label>
            <input type="text" placeholder="address" id="address" name= "user_address">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Age</label>
            <input type="text" placeholder="age" id="age"  name="user_age">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="">Maritial status</label>
            <input type="text" placeholder="Status" id="status"  name="user_status">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
       
        <button type="submit" name="save">Submit</button>
    </form>
    <div class="message hidden">
        <p>Submitted! 🎉</p>
    </div>
  </div>
</body>
</html>