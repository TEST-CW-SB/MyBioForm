<?php
session_start();//estefade az session be manzor etela az etefagh oftadan ersal comment , va ersal feedback be client
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title> بیوگرافی</title>
</head>

<body>
<div class="container">
    <div id="img">
        <img src="assets/files/images.jpg" alt="Girl in a jacket">
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="accordion box2" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <b>بیوگرافی</b>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <li>متولد سال 78 در تهران ، در حال حاضر در رشته مهندسی کامپیوتر در دانشگاه سمنان، تحصیل میکنم </li>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>رزومه تحصیلی و مهارتی</b>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <b>تحصیلی:</b>
                            <ul>
                                <li>دانشجوی کارشناسی مهندسی کامپیوتر</li>
                                <li>international worldskills champion</li>
                            </ul>
                             <b> مهارتی:</b>
                            <ul>
                                <li>Web Programming (PHP Laravel framework)</li>
                                <li>Ardunio</li>
                                <li>Plc</li>
                                <li>(Winform)#C</li>
                                <li>Python</li>
                                <li>Altium Designer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b> پیوند ها</b>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="https://ece.semnan.ac.ir/ " target="_blank" > دانشکده مهندسی برق و کامپیوتر دانشگاه سمنان </a></li>
                                <li> <a href="http://sustp.ir/" target="_blank"> پارک علم و فناوری دانشگاه سمنان </a> </li>
                                <li><a href="https://medium.com/" target="_blank"> Medium </a> </li>
                                <li><a href="hhttps://worldskills.org/" target="_blank"> Worldskills </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                <!-- in account ha serfan baraye mahiat fani code neveshte shodan , real nistan!!!         -->
            <a href="http://t.me/test" target="_blank"><i class="bi bi-telegram icon-font"></i></a>
            <a href="http://instagram.com/test"target="_blank"><i class="bi bi-instagram icon-font"></i></a>
            <a href="http://twitter.com/test "target="_blank"><i class="bi bi-twitter icon-font"></i></a>
        </div>

        <div class="col-md-3"></div>
    </div>
    <hr> <!--a line between form -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['msg_comment'])) {
                        ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_SESSION['msg_comment'] ?>
                        </div>
                        <?php
                        unset($_SESSION['msg_comment']);
                    }
                    ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body box">
                    <form class="row g-3" action="save.php" method="post">

                        <div class="mb-3">
                            <label for="fname" class="form-label">نام و نام خانوادگی</label>
                            <input type="text" name="name" class="form-control" id="fname" placeholder="نام و نام خانوادگی خود را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">ایمیل </label>
                            <input type="email" name="email" class="form-control" id="Email" placeholder="ایمیل خود را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">عنوان</label>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="عنوان خود را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="des" class="form-label">توضیحات</label>
                            <textarea name="des" class="form-control" id="des" placeholder="متن توضیحات خود را وارد کنید" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>


</div>
<script src="assets/js/jquery-3.3.1.slim.min.js"</script>
<script src="assets/js/popper.min.js"</script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
