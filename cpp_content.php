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
                    <a href="cpp_.php">
                        <i class='bx bx-category-alt' ></i>
                        <span class="links_name">C++ Course</span>
                    </a>
                    <span class="tooltip">C++ Course</span>
                </li>
                <li>
                    <a href="#">
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
                <iframe id="work" width="100%" height="515" src="https://www.youtube.com/embed/oOmbSpOzvYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3 class="title" id="this">1. Content Overview</h3>
            </div>
            <div class="video-list">
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/oOmbSpOzvYg" onclick="change_title('1. Content overview')"><h3 class="title">01. Content overview</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/wm8avOTPbmo" onclick="change_title('2. What is object oriented programming')"><h3 class="title">02. What is OOPS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/2Dhec_2zGUk" onclick="change_title('3. OOPs Concepts in C++')"><h3 class="title">03. Opps concepts in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/Hy8yG2sSvWU" onclick="change_title('4. Features of C++')"><h3 class="title">04. Features of C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/wDX5vxyqq-8" onclick="change_title('5. Structure of C++ program')"><h3 class="title">05. Structure of C++ program</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/SNtthXQZmKo" onclick="change_title('6. Variables and Constants in C++ program')"><h3 class="title">06. Variables and constants in C++ program</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/uLNS_hwT8dk" onclick="change_title('7. Keywords and Identifiers')"><h3 class="title">07. Keywords and Identifiers</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/Nnw7Q6rdYTY" onclick="change_title('8. Datatypes in C++')"><h3 class="title">08. Datatypes in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/wHwCNdpQxzw" onclick="change_title('9. Input and Output in C++')"><h3 class="title">09. Input and Output in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/dh3v5e2g67I" onclick="change_title('10. Operators in C++')"><h3 class="title">10. Operators in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/99zs4lsRFks" onclick="change_title('11. Operator Precedence')"><h3 class="title">11. Operator Precedence</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/z04Uvf7gQ2I" onclick="change_title('12. Control structure in C++')"><h3 class="title">12. Control structure in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/qkmLkf6PoEE" onclick="change_title('13. Switch case in C++')"><h3 class="title">13. Switch Case in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/qkmLkf6PoEE" onclick="change_title('14. Loops in C++')"><h3 class="title">14. Loops in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/ZOgRTGoBD-I" onclick="change_title('15. Introduction to loops in C++')"><h3 class="title">15. Introduction to loops in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/wqZSElfTL60" onclick="change_title('16. For loops in C++')"><h3 class="title">16. For loops in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/vMFX6YugseQ" onclick="change_title('17. Properties of C++')"><h3 class="title">17. Properties of loops in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/PvCPuKy8Jog" onclick="change_title('18. Exercies in C++')"><h3 class="title">18. Exercise in C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/IBjGjDbwxSg" onclick="change_title('19. History of C++')"><h3 class="title">19. History of C++</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/KYxLEDF6kjs" onclick="change_title('20. How to install dependencies')"><h3 class="title">20. How to install dependencies</h3></a>
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