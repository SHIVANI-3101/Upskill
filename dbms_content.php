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
                    <a href="dbms_.php">
                        <i class='bx bx-category-alt' ></i>
                        <span class="links_name">DBMS Course</span>
                    </a>
                    <span class="tooltip">DBMS Course</span>
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
                <iframe id="work" width="100%" height="515" src="https://www.youtube.com/embed/kBdlM6hNDAE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3 class="title" id="this">1. Syllabus for DBMS</h3>
            </div>
            <div class="video-list">
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/kBdlM6hNDAE" onclick="change_title('1. Syllabus for DBMS')"><h3 class="title">01. Syllabus for DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/3EJlovevfcA" onclick="change_title('2. Introduction to DBMS')"><h3 class="title">02. Introduction to DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/ZtVw2iuFI2w" onclick="change_title('3. File System v/s DBMS')"><h3 class="title">03. File System v/s DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/pDX4NR4eY3A" onclick="change_title('4. What is schema')"><h3 class="title">04. What is schema</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/5fs1ldO6B5c" onclick="change_title('5. Three Schema Architecture')"><h3 class="title">05. Three Schema Architecture</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/upUSGUSK5k0" onclick="change_title('6. What is data independence')"><h3 class="title">06. What is data independence</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/mMxjKFiIKxs" onclick="change_title('7. Candidate Key in DBMS')"><h3 class="title">07. Candidate Key in DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/Tp37HXfekNo" onclick="change_title('8. Primary Key in DBMS')"><h3 class="title">08. Primary Key in DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/UyqpQ3D2yCw" onclick="change_title('9. Foreign key in DBMS')"><h3 class="title">09. Foreign key in DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/QQqGfScdlzA" onclick="change_title('10. Super Key in DBMS')"><h3 class="title">10. Super Key in DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/gbVev8RuZLg" onclick="change_title('11. Entity Relationship Model')"><h3 class="title">11. Entity Relationship Model</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/WEo3g6Ir-vA" onclick="change_title('12. Types of attributes')"><h3 class="title">12. Types of attributes</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/s6MH7f3SnsY" onclick="change_title('13. One to One Relation')"><h3 class="title">13. One to One Relation</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/rZxETdO_KUQ" onclick="change_title('14. One to Many Relationship')"><h3 class="title">14. One to Many Relationship</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/onR_sLhbZ4w" onclick="change_title('15. Many to Many Relationship')"><h3 class="title">15. Many to Many Relationship</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/5GDTIUVlHB8" onclick="change_title('16. Normalization in DBMS')"><h3 class="title">16. Normalization in DBMS</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/NlgZy30Dv9A" onclick="change_title('17. First normal form')"><h3 class="title">17. First normal form</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/tkbAA--wKOc" onclick="change_title('18. Second normal from')"><h3 class="title">18. Second normal from</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/IeSai2JVm78" onclick="change_title('19. Third Normal Form')"><h3 class="title">19. Third Normal Form</h3></a>
                </div>
                <div class="vid">
                    <img src="img.svg" width="23px" height="23px">
                    <a href ="https://www.youtube.com/embed/mf_PbWPo7VM" onclick="change_title('20. Boyce Codd Normal Form')"><h3 class="title">20. Boyce Codd Normal Form</h3></a>
                </div>
            </div>
            <div class="description">
                <h1>Lecture Notes:</h1>
                <h2><br> DBMS Tutorial provides basic and advanced concepts of Database. Our DBMS Tutorial is designed for beginners and professionals both.
                    Database management system is software that is used to manage the database.
                    Our DBMS Tutorial includes all topics of DBMS such as introduction, ER model, keys, relational model, join operation, SQL, functional dependency, transaction, concurrency control, etc.
                    <br><br>What is Database<br><br>
                    The database is a collection of inter-related data which is used to retrieve, insert and delete the data efficiently. It is also used to organize the data in the form of a table, schema, views, and reports, etc.
                    For example: The college Database organizes the data about the admin, staff, students and faculty etc.
                    Using the database, you can easily retrieve, insert, and delete the information.
                    <br><br>Database Management System<br><br>
                    - Database management system is a software which is used to manage the database. For example: MySQL, Oracle, etc are a very popular commercial database which is used in different applications.<br><br>
                    - DBMS provides an interface to perform various operations like database creation, storing data in it, updating data, creating a table in the database and a lot more.<br><br>
                    - It provides protection and security to the database. In the case of multiple users, it also maintains data consistency.<br><br>
                    <br><br>DBMS allows users the following tasks:<br><br>
                    - Data Definition: It is used for creation, modification, and removal of definition that defines the organization of data in the database.<br><br>
                    - Data Updation: It is used for the insertion, modification, and deletion of the actual data in the database.<br><br>
                    - Data Retrieval: It is used to retrieve the data from the database which can be used by applications for various purposes.<br><br>
                    - User Administration: It is used for registering and monitoring users, maintain data integrity, enforcing data security, dealing with concurrency control, monitoring performance and recovering information corrupted by unexpected failure.<br><br>
                    <br><br>Characteristics of DBMS<br><br>
                    - It uses a digital repository established on a server to store and manage the information.<br><br>
                    - It can provide a clear and logical view of the process that manipulates data.<br><br>
                    - DBMS contains automatic backup and recovery procedures.<br><br>
                    - It contains ACID properties which maintain data in a healthy state in case of failure.<br><br>
                    - It can reduce the complex relationship between data.<br><br>
                    - It is used to support manipulation and processing of data.<br><br>
                    - It is used to provide security of data.<br><br>
                    - It can view the database from different viewpoints according to the requirements of the user.<br><br>
                    <br><br>Advantages of DBMS<br><br>
                    - Controls database redundancy: It can control data redundancy because it stores all the data in one single database file and that recorded data is placed in the database.<br><br>
                    - Data sharing: In DBMS, the authorized users of an organization can share the data among multiple users.<br><br>
                    - Easily Maintenance: It can be easily maintainable due to the centralized nature of the database system.<br><br>
                    - Reduce time: It reduces development time and maintenance need.<br><br>
                    - Backup: It provides backup and recovery subsystems which create automatic backup of data from hardware and software failures and restores the data if required.<br><br>
                    - Multiple user interface: It provides different types of user interfaces like graphical user interfaces, application program interfaces<br><br>
                    <br><br>Disadvantages of DBMS<br><br>
                    - Cost of Hardware and Software: It requires a high speed of data processor and large memory size to run DBMS software.<br><br>
                    - Size: It occupies a large space of disks and large memory to run them efficiently.<br><br>
                    - Complexity: Database system creates additional complexity and requirements.<br><br>
                    - Higher impact of failure: Failure is highly impacted the database because in most of the organization, all the data stored in a single database and if the database is damaged due to electric failure or database corruption then the data may be lost forever.<br><br>
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