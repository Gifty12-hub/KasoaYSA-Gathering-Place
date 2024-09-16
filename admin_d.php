<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YSA ADMIN DASHBOARD</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.js">
</head>

<body>
    <div>
        <?php
         include 'student_menu.php';
        ?>
    </div>  
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="clipboard-outline"></ion-icon>
                        </span>
                        <span class="title">ADMIN BOARD</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">student</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">instructors</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        </span>
                        <span class="title">Attendance</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <!--<ion-icon name="menu-outline"></ion-icon>-->
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">courses</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">842</div>
                        <div class="cardName">instructors</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ instructors Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent instructors</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Sex</td>
                                <td>Programs</td>
                                <td>Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>ABRAHAM</td>
                                <td>male</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>GLADYS</td>
                                <td>female</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>MARTHA</td>
                                <td>female</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>SOLO</td>
                                <td>male</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>JOHN</td>
                                <td>male</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>GIFTY</td>
                                <td>female</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>MATHIAS</td>
                                <td>male</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>

                            <tr>
                                <td>DANIEL</td>
                                <td>male</td>
                                <td>devloper</td>
                                <td>13-09-24</td>
                                <td><a class="status inProgress" href=""><button>view</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="Recentstudents">
                    <div class="cardHeader">
                        <h2>Recent students</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>US</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>GH</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>LIB</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>NIG</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>GH</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>ID</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>TG</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src=".jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>NG</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>