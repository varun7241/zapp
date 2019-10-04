<html lang="en">

<head>
        <!-- 
                    Title: Zapp. Concept Webpage.
                    Author: @Smith_Gajjar
                    Date: 30 August 2019 
        -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>zzap.</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="Scripts\main.js"></script>
    <script src="Scripts\jq.js"></script>
    
</head>
<body>
    <header class="col-12 angular-header2 ">
        <!-- Navigation bar section -->
       <span class="brand greetings greetings-scrolled "> 
            <span>z</span><span>z</span><span>a</span><span>p</span>.</span><span style="color: #ea4335"></span><span  style="color: #fbbc05;"></span><span style="color: #34a853;">
            <!-- Brand name -->
            </span> <span style="font-weight:200"></span>
        </span>
    <!-- Navigate -->
     <nav class="nav-1"> 
            <a href="index.php" class="toggle" style="font-weight: bold;text-decoration: none;margin: 0px 20px">Home</a>
            <!-- <a href="#" style="text-decoration: none" class="Register">Sign Up</a> -->
        </nav>
    </header>
    <div class="Register-form">
        <div class="Register-bg">
            <div class="Register-dialog">
                    <span class="regis">Sign Up</span>
                    <!-- Registeration Form -->
                    <form class="signup-form" name="registration contactForm" action="registration.php" method="post" >
                            <input  class="rg-input" name="name" type="text"  placeholder="Name" />
                            <!-- Error message  -->
                            <div class="error" id="nameErr"></div>
                            <input class="rg-input" name="email" type="email" placeholder="Email" />
                            <div class="error" id="emailErr"></div>
                            <input class="rg-input" name="password" type="password" placeholder="Password" />
                            <div class="error" id="mobileErr"></div>
                            <input class="rg-input" name="dob" type="date" placeholder="DOB" name="DateOfBirth" >
                            <div class="error" id="countryErr"></div>
                        <textarea  class="rg-input" name="Address" maxlength="500" placeholder="Enter your Address"></textarea>
                        <div class="error" id="genderErr"></div>
                        <select name="gender" class="rg-input-select" style="width: calc(100% - 30px)" id="pickup_place" name="pickup_place">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            <div class="error" id="genderErr2"></div>   <br>
                        <button class="btn-submit" type="submit" name="btn-signup">Sign Up</button>
                    </form>
            </div>
        </div>
    </div>
    <div class="info-collapsed" onclick="expand()" >
        <img class="img" src="465293-PGDOIV-851.jpg"/>
    </div>
    <!-- Webpage Footer Section       -->
    <footer class="angular-footer" >
        <div class="info">
                Made with  <img src="love.svg" style="margin: 10px 5px;width:25px;height: 45px"> </img>by Smith  
       </div>
       <div class="social">
        <a href="https://www.linkedin.com/in/smith-gajjar-5a27716b/">
            <img class="social-block" src="linkedin.svg" style="width:30px; height:35px;" />
        </a> 
        <a href="https://www.facebook.com/smithgajjar">
            <img class="social-block" src="facebook (1).svg" style="width:30px; height:35px;" />
        </a> 
        <a href="https://twitter.com/smithgajjar3">
            <img class="social-block" src="twitter.svg" style="width:30px; height:35px;" />
        </a> 
        <a href="https://www.instagram.com/smith.gajjar09/?hl=en">
            <div class="instagram">
                <img class="insta" src="instagram.svg"  />
            </div>
        </a>
       </div>
    </footer>
            <script>
                // Defining a function to display error message
                    function printError(elemId, hintMsg) {
                        document.getElementById(elemId).innerHTML = hintMsg;
                    }

                    // Defining a function to validate form 
                    function validateForm() {
                        // Retrieving the values of form elements 
                        var name = document.contactForm.name.value;
                        var email = document.contactForm.email.value;
                        var password = document.contactForm.password.value;
                        var dob = document.contactForm.dob.value;
                        var gender = document.contactForm.gender.value;
                        var Address = document.contactForm.Address.value;

                        // Defining error variables with a default value
                        var nameErr = emailErr = mobileErr = countryErr = genderErr = genderErr2 = true;

                        // Validate name
                        if (name == "") {
                            printError("nameErr", "Please enter your name");
                        } else {
                            var regex = /^[a-zA-Z\s]+$/;
                            if (regex.test(name) === false) {
                                printError("nameErr", "Please enter a valid name");
                            } else {
                                printError("nameErr", "");
                                nameErr = false;
                            }
                        }

                        // Validate email address
                        if (email == "") {
                            printError("emailErr", "Please enter your email address");
                        } else {
                            // Regular expression for basic email validation
                            var regex = /^\S+@\S+\.\S+$/;
                            if (regex.test(email) === false) {
                                printError("emailErr", "Please enter a valid email address");
                            } else {
                                printError("emailErr", "");
                                emailErr = false;
                            }
                        }

                        // Validate password number
                        if (password == "") {
                            printError("mobileErr", "Please enter your password");
                        } else {
                            // Regular expression for password validation
                            var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
                            if (regex.test(password) === false) {
                                printError("mobileErr", "Please enter a valid password : One lowercase , One Uppercase , One numeric char , one Special char and must be 8 characters. ");
                            } else {
                                printError("mobileErr", "");
                                mobileErr = false;
                            }
                        }

                        // Validate DOB
                        if (dob == "") {
                            printError("countryErr", "Please enter your date of birth");
                        } else {
                            printError("countryErr", "");
                            countryErr = false;
                        }

                        // Validate Address
                        if (Address == "") {
                            printError("genderErr", "Please enter your address");
                        } else {
                            printError("genderErr", "");
                            genderErr = false;
                        }

                        // Validate Gender
                        if (gender == "") {
                            printError("genderErr2", "Please select your     gender");
                        } else {
                            printError("genderErr2", "");
                            genderErr2 = false;
                        }

                        // Prevent the form from being submitted if there are any errors
                        if ((nameErr || emailErr || mobileErr || countryErr || genderErr || genderErr2) == true) {
                            return false;
                        } else {
                            return true;
                            // Creating a string from 
                            // Display input data in a dialog box before submitting the form
                            // alert(dataPreview);
                        }
                    };

                //Change Navigation bar style on scroll : Add box-shadow and adjust elements
                function toggle() {

                    var body = document.querySelector("body");
                    var scrollTop = body.scrollTop;
                    if (scrollTop >= 100) {
                        var header = document.querySelector('.angular-header');
                        document.querySelector('.angular-header').classList.add('scrolled');
                        header.style.justifyContent = "left";
                        header.style.height = '65px';
                        header.style.padding = '0px';
                        document.querySelector('.greetings-scrolled').classList.remove('greetings');
                        document.querySelector('.toggle').classList.add('active');
                    } else if (scrollTop < 100) {
                        var header = document.querySelector('.angular-header');
                        document.querySelector('.angular-header').classList.remove('scrolled');
                        header.style.justifyContent = "space-between";
                        header.style.height = '95px';
                        header.style.padding = '20px';
                        document.querySelector('.greetings-scrolled').classList.add('greetings');
                        document.querySelector('.toggle').classList.remove('active');
                    }

                }    
                //Expand Customer Support button on click 
                var expanded = false;
                function expand() {
                    if (expanded) {
                        var info = document.querySelector(".info-collapsed");
                        info.classList.remove('info-expanded');
                        var span = document.querySelector(".span-1");
                            span.innerHTML = "Inline Css";
                        expanded = false;
                        return
                    }   
                    expandedTO();
                }

                function expandedTO() {
                    var info = document.querySelector(".info-collapsed");
                    var span = document.querySelector(".span-1");
                    info.classList.add('info-expanded');
                    setTimeout(() => {
                        span.innerHTML = "An inline style may be used to apply a unique style for a single element.";
                    }, 800);
                    this.expanded = true;
                }
 
            </script>
</body>

</html>