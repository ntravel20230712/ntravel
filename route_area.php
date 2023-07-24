<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 區域景點瀏覽 route_area.php -->
    <meta charset="utf-8">
    <title>route show</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-flag me-3"></i>newTRAVEL</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">首頁</a>
                <a href="about.html" class="nav-item nav-link">關於我們</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">去哪裡玩</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="attraction_area.php" class="dropdown-item">區域景點</a>
                        <a href="attraction_address.php" class="dropdown-item">地理座標景點</a>
                        <a href="attraction_tag.php" class="dropdown-item">關鍵字景點</a>
                        <a href="attraction_random.php" class="dropdown-item">隨機推薦景點</a>
                        <a href="willattraction.php" class="dropdown-item">景點分享</a>
                        <!-- <a href="route_show.html" class="dropdown-item">所有路線</a> -->
                        <!-- <a href="attraction_board.html" class="dropdown-item">景點留言板</a> -->
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">別人怎麼玩</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="route_area.php" class="dropdown-item">區域行程</a>
                        <!-- <a href="route_tag.html" class="dropdown-item">地理座標景點瀏覽</a> -->
                        <a href="route_tag.html" class="dropdown-item">關鍵字行程</a>
                        <a href="route_random.html" class="dropdown-item">隨機推薦行程</a>
                        <a href="php/logout_res.php" class="dropdown-item">session清除</a>
                        <!-- <a href="route_custom.html" class="dropdown-item">自訂規劃路線</a> -->
                    </div>
                </div>
                
                <?php	
                    if (isset($_SESSION['mem_name'])) {
                        echo "<div class='nav-item dropdown'>";
                        echo "<a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>".$_SESSION['mem_name']."會員</a>";
                        echo " <div class='dropdown-menu fade-down m-0'>
                                    <a href='my_route.html' class='dropdown-item'>未去過行程</a>
                                    <a href='my_route_history.html' class='dropdown-item'>已去過行程</a>
                                    <a href='like_attractions.html' class='dropdown-item'>已收藏景點</a>
                                    <a href='like_route.html' class='dropdown-item'>已收藏行程</a>
                                    <a href='php/logout_res.php' class='dropdown-item'>登出</a>
                                </div>";

                    }else {
                        echo "<a href='login.html' class='nav-item nav-link'>登入/註冊</a>";
                        }
                    ?>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">會員管理</a> -->
                    <!-- <div class="dropdown-menu fade-down m-0">
                        <a href="my_route.html" class="dropdown-item">未去過行程</a>
                        <a href="my_route_history.html" class="dropdown-item">已去過行程</a>
                        <a href="like_attractions.html" class="dropdown-item">已收藏景點</a>
                        <a href="like_route.html" class="dropdown-item">已收藏行程</a>
                        <a href="404.html" class="dropdown-item">登出</a>
                    </div> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="route_custom.html"
                    class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">試試隨機行程GO&#32;&#10140;</a>
            </div>
            <!-- 未登入前 -->
            <!--<a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">加入我們<i class="fa fa-arrow-right ms-3"></i></a>-->
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">路線瀏覽</h6>
                <h1 class="mb-5">區域路線瀏覽</h1>
                <!-- Booking Start -->
                <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="bg-white shadow" style="padding: 35px;">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="row g-2">
                                        <div class="col-md-4 py-4 px-0">
                                            <select class="form-select">
                                                <option selected>選擇縣市</option>
                                                <option value="1">台中市</option>
                                                <option value="2">台北市</option>
                                                <option value="3">台南市</option><br>
                                            </select>
                                        </div>
                                        <div class="col-md-4 py-4 px-2">
                                            <select class="form-select">
                                                <option selected>選擇區域</option>
                                                <option value="1">北屯區</option>
                                                <option value="2">中區</option>
                                                <option value="3">霧峰區</option><br>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-3 py-4 px-2">
                                            <select class="form-select">
                                                <option selected>選擇類型</option>
                                                <option value="1">食</option>
                                                <option value="2">玩</option><br>
                                            </select>
                                        </div> -->
                                        <!-- <div class="col-md-6 py-0">
                                        <h6 class="mb-1 text-right">選擇標籤:</h6>
                                        <input type="checkbox" class="btn-check" id="btn-check-1-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-1-outlined">親子同樂</label>
                                        <input type="checkbox" class="btn-check" id="btn-check-2-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">活力行程</label>
                                        <input type="checkbox" class="btn-check" id="btn-check-3-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">活力行程</label>
                                        <input type="checkbox" class="btn-check" id="btn-check-3-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">活力行程</label>
                                        <input type="checkbox" class="btn-check" id="btn-check-3-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-3-outlined">悠閒行程</label>
                                        <input type="checkbox" class="btn-check" id="btn-check-4-outlined"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="btn-check-4-outlined">美食行程</label>

                                    </div> -->
                                        <div class="col-md-4 py-4">
                                            <button class="btn btn-primary w-100">搜尋</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking End -->
            <div class="row g-4">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <section class="intro">
                        <div class="bg-image h-100" style="background-color: #f5f7fa;">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container">
                                    <!-- 排列bar開始-->
                                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3 py-3 fadeInUp"
                                        data-wow-delay="0.1s">
                                        <strong class="d-block py-2">已查到32個景點 </strong>
                                        <div class="ms-auto">
                                            <select class="form-select d-inline-block w-auto border pt-1 fadeInUp"
                                                data-wow-delay="0.1s">
                                                <option value="0">最多收藏</option>
                                                <option value="1">最少收藏</option>
                                                <option value="2">最新上傳</option>
                                                <option value="3">最舊上傳</option>
                                            </select>
                                        </div>
                                    </header>
                                    <!-- 排列bar結束 -->
                                    <div class="row justify-content-center">
                                        <div class="card">
                                            <div class="card-body p-1">
                                                <div class="table-responsive table-scroll"
                                                    data-mdb-perfect-scrollbar="true"
                                                    style="position: relative; height: 500px">

                                                    <table class="table table-striped mb-0">
                                                        <thead style="background-color: #424242;">
                                                            <tr>
                                                                <th scope="col">路線名</th>
                                                                <th scope="col">縣市</th>
                                                                <th scope="col">遊玩日期</th>
                                                                <th scope="col">時間</th>
                                                                <th scope="col">標籤</th>
                                                                <th scope="col">收藏數</th>
                                                                <th scope="col">上傳日期</th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- <tr>
                                                                <td>悠遊台南行</td>
                                                                <td>台南市</td>
                                                                <td>2023/5/17</td>
                                                                <td>10:00</td>
                                                                <td>親子同樂</td>
                                                                <td>12</td>
                                                                <td>2023/4/8</td>
                                                                <td><a href="route_detail.html">查看詳細</a></td>
                                                                <td>
                                                                    <input type="checkbox" class="btn-check"
                                                                        id="btn-check-1-outlined" autocomplete="off">
                                                                    <label class="px-3 btn btn-outline-secondary"
                                                                        for="btn-check-1-outlined">加入收藏</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>文藝復興台南路線</td>
                                                                <td>台南市</td>
                                                                <td>2023/5/26</td>
                                                                <td>9:00</td>
                                                                <td>悠閒行程</td>
                                                                <td>2</td>
                                                                <td>2023/5/16</td>
                                                                <td><a href="#">查看詳細</a></td>
                                                                <td>
                                                                    <input type="checkbox" class="btn-check"
                                                                        id="btn-check-2-outlined" autocomplete="off">
                                                                    <label class="px-3 btn btn-outline-secondary"
                                                                        for="btn-check-2-outlined">加入收藏</label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>復古綠油油台南路線</td>
                                                                <td>台南市</td>
                                                                <td>2023/4/26</td>
                                                                <td>15:00</td>
                                                                <td>親子同樂、活力行程</td>
                                                                <td>24</td>
                                                                <td>2023/3/9</td>
                                                                <td><a href="#">查看詳細</a></td>
                                                                <td>
                                                                    <input type="checkbox" class="btn-check"
                                                                        id="btn-check-3-outlined" autocomplete="off">
                                                                    <label class="px-3 btn btn-outline-secondary"
                                                                        for="btn-check-3-outlined">加入收藏</label>
                                                                </td>
                                                            </tr> -->
                                                            <?php
                                                            require_once('php/functionsrouteall.php');
                                                            $routeData = getroutesData();
                                                            if (!empty($routeData)) {
                                                                // 輸出資料
                                                                foreach ($routeData as $route) {
                                                                    echo '                                                        <tr>
                                                                    <tr>
                                                                    <td>'.$route['RouteName']."</td>
                                                                    <td>台南市</td>
                                                                    <td>".$route['route_startdate']."</td>
                                                                    <td>00:00</td>
                                                                    <td>tag</td>
                                                                    <td>".$route['route_recommend']."</td>
                                                                    <td>".$route['route_update']."</td>
                                                                    <td><a href='route_detail.php?RouteID=".$route['RouteID']."&route_startdate=".$route['route_startdate']."&route_creator=".$route['route_creator']."'>查看詳細</a></td>
                                                                    <td>
                                                                        <input type='checkbox' class='btn-check'
                                                                            id='btn-check-1-outlined' autocomplete='off'>
                                                                        <label class='px-3 btn btn-outline-secondary'
                                                                            for='btn-check-1-outlined'>加入收藏</label>
                                                                    </td>
                                                                </tr>'";
                                                                }
                                                            } else {
                                                                echo "沒有資料。";
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <button id="prevButton" class="btn btn-primary">上一頁</button>
                                                </div>
                                                <div class="col-2">
                                                    <button id="nextButton" class="btn btn-primary">下一頁</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">關於我們</h4>
                    <a class="btn btn-link" href="about.html">關於我們</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">發現景點</h4>
                    <a class="btn btn-link" href="attraction_show.html">所有景點</a>
                    <a class="btn btn-link" href="404.html">個性化景點推薦</a>
                    <a class="btn btn-link" href="404.html">族群特選景點推薦</a>
                    <a class="btn btn-link" href="404.html">猜你喜歡-景點</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">發現路線</h4>
                    <a class="btn btn-link" href="route_show.html">所有路線</a>
                    <a class="btn btn-link" href="404.html">個性化路線推薦</a>
                    <a class="btn btn-link" href="404.html">族群特選路線推薦</a>
                    <a class="btn btn-link" href="404.html">猜你喜歡-路線</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">我要推薦</h4>
                    <a class="btn btn-link" href="404.html">我要推薦景點</a>
                    <a class="btn btn-link" href="myroute.html">我要推薦路線</a>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">會員管理</h4>
                    <a class="btn btn-link" href="404.html">我的景點</a>
                    <a class="btn btn-link" href="myroute.html">我的路線</a>
                    <a class="btn btn-link" href="404.html">登出</a>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>朝陽資管3C</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">newTRAVEL</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="index.html">Home</a>
                                    <a href="404.html">Cookies</a>
                                    <a href="about.html">About</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>