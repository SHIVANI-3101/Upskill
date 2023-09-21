<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" href="main.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <script src="jquery-3.6.1.js"></script>
        <script>
            $(document).ready(function()
            {
            $(".back .container .video-list .vid a").click(function(e) 
            {
                e.preventDefault();
                $("#work").attr("src", $(this).attr("href"));
            })});
        </script>
        <script>
            function change_title(tit)
            {
                document.getElementById("this").innerHTML = tit;
            }
        </script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <i class='bx bx-ghost' ></i>
                    <div class="logo_name">UpSkill</div>
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="mypage.php">
                        <i class='bx bx-home-alt-2' ></i>
                        <span class="links_name">Home Page</span>
                    </a>
                    <span class="tooltip">Home Page</span>
                </li>
                <li>
                    <a href="c_.php">
                        <i class='bx bx-category-alt' ></i>
                        <span class="links_name">C Course</span>
                    </a>
                    <span class="tooltip">C Course</span>
                </li>
                <li>
                    <a href="orderhistory.html">
                        <i class='bx bx-list-ul' ></i>
                        <span class="links_name">Instructor</span>
                    </a>
                    <span class="tooltip">Instructor</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>
            </ul>
        </div>    

    <div class="back">
        <h3 class="heading">UpSkill</h3>
        <div class="container">
            <div class="main-video">
                <div class="video">
                <iframe id="work" width="100%" height="515" src="https://www.youtube.com/embed/7Dh73z3icd8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3 class="title" id="this">01. Video title goes here</h3>
            </div>
            <div class="video-list">
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/7Dh73z3icd8" onclick="change_title('1. Why Learn C ?')"><h3 class="title">01. Why Learn C ?</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/5SIBB589fAg" onclick="change_title('2. Structure of C program')"><h3 class="title">02. Structure of C program</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/PrVOM7M5nEY" onclick="change_title('3. Basic Syntax of C program')"><h3 class="title">03. Basic Syntax of C program</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/EcUGDTs4RyY" onclick="change_title('4. Variables and data types in C')"><h3 class="title">04. Variables and data types in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/V4Wwuu05_t4" onclick="change_title('5. Operators in C')"><h3 class="title">05. Operators in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/XETsCR2bXJI" onclick="change_title('6. Format Specifiers')"><h3 class="title">06. Format Specifiers</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/D0ACZ0uU_2g" onclick="change_title('7. If-else control statements')"><h3 class="title">07. If-else control statements</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/E8weUIY2-iw" onclick="change_title('8. Switch control statements')"><h3 class="title">08. Switch control statements</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/A_IgufxmIHk" onclick="change_title('9. Loops in C')"><h3 class="title">09. Loops in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/S2z0OTZoziI" onclick="change_title('0. Do while loop in C')"><h3 class="title">10. Do while loop in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/0KzWpgMLDmk" onclick="change_title('11. While loop in C ')"><h3 class="title">11. While loop in C </h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/T5_qpdDtTZ0" onclick="change_title('12. For loop in C')"><h3 class="title">12. For loop in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/yeH9DZlpbmM" onclick="change_title('13. Break and Continue statements')"><h3 class="title">13. Break and Continue statements</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/AWUxfROdzPc" onclick="change_title('14. Goto Statements')"><h3 class="title">14. Goto Statements</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/qc7FU9jWAxk" onclick="change_title('15. Typecasting in C')"><h3 class="title">15. Typecasting in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/CSJLuARmzg0" onclick="change_title('16. Functions in C')"><h3 class="title">16. Functions in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/P5TdIWxYz4I" onclick="change_title('17. Recursive function')"><h3 class="title">17. Recursive function</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/qKFBtCPwjgI" onclick="change_title('18. Arrays in C')"><h3 class="title">18. Arrays in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/IBjGjDbwxSg" onclick="change_title('19. Pointers in C')"><h3 class="title">19. Pointers in C</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/6R0jNW6j2NA" onclick="change_title('20. Call by value and reference')"><h3 class="title">20. Call by value and reference</h3></a>
                </div>
            </div>
            <div class="description">
                <h1>Lecture Notes:</h1>
                <h2><br> language Tutorial with programming approach for beginners and professionals, helps you to understand the C language tutorial easily. Our C tutorial explains each topic with programs. The C Language is developed by Dennis Ritchie for creating system applications that directly interact with the hardware devices such as drivers, kernels, etc. C programming is considered as the base for other programming languages, that is why it is known as mother language.
                    <br><br>C is the widely used language. It provides many features that are given below.<br>
                    1.	Simple<br>
                    2.	Machine Independent or Portable<br>
                    3.	Mid-level programming language<br>
                    4.	structured programming language<br>
                    5.	Rich Library<br>
                    6.	Memory Management<br>
                    7.	Fast Speed<br>
                    8.	Pointers<br>
                    9.	Recursion<br>
                    10.	Extensible<br>
                    <br><br>A variable is a name of the memory location. It is used to store data. Its value can be changed, and it can be reused many times.
                    Rules for defining variables<br>
                    &nbsp;&nbsp;&nbsp;o&nbsp;A variable can have alphabets, digits, and underscore.<br>
                    &nbsp;&nbsp;&nbsp;o&nbsp;A variable name can start with the alphabet, and underscore only. It can't start with a digit.<br>
                    &nbsp;&nbsp;&nbsp;o&nbsp;No whitespace is allowed within the variable name.<br>
                    &nbsp;&nbsp;&nbsp;o&nbsp;A variable name must not be any reserved word or keyword, e.g. int, float, etc.<br>
                    
                    <br> A variable that is declared inside the function or block is called a local variable.
                    <br><br>A variable that is declared outside the function or block is called a global variable. Any function can change the value of the global variable. It is available to all the functions.
                    
                    <br><br>A variable that is declared with the static keyword is called static variable.
                    <br><br>A data type specifies the type of data that a variable can store such as integer, floating, character, etc.
                    
                </h2>
            </div>
        </div>
    </div>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function()
        {
            sidebar.classList.toggle("active");
        }
    </script>

    </body>
</html>