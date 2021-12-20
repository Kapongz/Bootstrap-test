<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSTCar Auto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="image/icon.png" sizes="16x16" />

    <meta name="theme-color" content="#85eb3f" />
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- nav -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-md-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="image/logo1.png" class="navbar-brand " height="40px">
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar1" class="collapse navbar-collapse fw-bold ">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">ໜ້າຫຼັກ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#product" class="nav-link">ສິນຄ້າ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">ບໍລິການ</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">ກ່ຽວກັບເຮົາ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ສະໝັກ
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal">ລົງທະບຽນ</a>
                            </li>
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#regisModal">ເຂົ້າສູ່ລະບົບ</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- home -->
    <section id="slider">
        <div class="carousel slide" data-bs-ride="carousel" id="myslider">
            <ol class="carousel-indicators">
                <button data-bs-target="#myslider" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#myslider" data-bs-slide-to="1"></button>
                <button data-bs-target="#myslider" data-bs-slide-to="2"></button>
                <button data-bs-target="#myslider" data-bs-slide-to="3"></button>
                <button data-bs-target="#myslider" data-bs-slide-to="4"></button>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption ">
                            <h1 class="display-3 text-bold">Lamborghini</h1>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio et fugiat officiis tempora ducimus beatae repellendus accusantium iste quas?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2 ">
                    <div class="container">
                        <div class="carousel-caption ">
                            <h1 class="display-3 text-bold">Porsche</h1>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio et fugiat officiis tempora ducimus beatae repellendus accusantium iste quas?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3 ">
                    <div class="container">
                        <div class="carousel-caption ">
                            <h1 class="display-3 text-bold">Ferrari</h1>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio et fugiat officiis tempora ducimus beatae repellendus accusantium iste quas?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-4 ">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="display-3 text-bold">Maserati</h1>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio et fugiat officiis tempora ducimus beatae repellendus accusantium iste quas?</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-5 ">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="display-3 text-bold">Mercedes-Benz</h1>
                            <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum distinctio et fugiat officiis tempora ducimus beatae repellendus accusantium iste quas?</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#myslider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#myslider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

    </section>

    <!-- product -->
    <section id="product" class="p-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 class="heading mb-4 ">ສິນຄ້າຂອງເຮົາທັງໝົດ</h1>
                    <p class="mb-4 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum voluptatem inventore impedit, quia ad, voluptatum eum, debitis officiis repudiandae assumenda omnis consequatur! Sequi, non voluptate!</p>
                    <p class="mb-0">
                        <img src="image/logo1.png" class="img-fluid">
                    </p>
                </div>

            </div>
        </div>
        <!-- form -->
        <div class="container py-4">
            <form>
                <h4 class="fw-light text-secondary">ຄົ້ນຫາລົດໃໝ່ ແລະ ລົດມືສອງ</h4>
                <div class="col">
                    <select class="form-select">
                        <option value="" selected disabled>ຮູບແບບຂອງລົດ</option>
                        <option value="new">ລົດໃໝ່</option>
                        <option value="old">ລົດເກົ່າ</option>
                    </select>
                </div>
                <div class="row my-2">
                    <div class="col-md-6">
                        <input type="text" placeholder="ລາຄາ" class="form-control">
                    </div>
                    <div class="col-md-6 ">
                        <select class="form-select ">
                            <option value="" selected disabled>ຍີ່ຫໍ້ລົດ</option>
                            <option value="new">Lamborghini</option>
                            <option value="old">Ferrari</option>
                            <option value="new">BMW</option>
                            <option value="old">Toyota</option>
                            <option value="new">Benz</option>
                            <option value="old">Maserati</option>
                            <option value="old">Porsche</option>
                            <option value="old">Nissan</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6">
                        <input type="text" name="wheel" placeholder="ລໍ້ຂັບເຄື່ອນ" list="drivenwheel" class="form-control">
                        <datalist id="drivenwheel">
                            <option value="FWD (ລໍ້ໜ້າ)">
                            <option value="RWD (ລໍ້ຫຼັງ)">
                            <option value="4WD (ທັງ 4 ລໍ້)">
                            <option value="AWD (ທັງໝົດ)">
                        </datalist>
                    </div>
                    <div class="col-md-3 ">
                        <select class="form-select ">
                            <option value="" selected disabled>ເລືອກສີ</option>
                            <option value="red">ແດງ</option>
                            <option value="blue">ຟ້າ</option>
                            <option value="black">ດຳ</option>
                            <option value="white">ຂາວ</option>
                            <option value="yellow">ເຫຼືອງ</option>
                            <option value="green">ຂຽວ</option>
                            <option value="other">ອື່ນໆ</option>

                        </select>
                    </div>
                    <div class="col-md-3 ">
                        <button type="button" class="btn btn-primary text-white text-center">ຄົ້ນຫາ</button>
                    </div>

                </div>

            </form>
        </div>

        <div class="row ">
            <div class="col-md-6 text-start">
                <h2 class="text-secondary ">ສິນຄ້າທີ່ເເນະນຳ</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="#" class="pda">
                    <h6 class=" fw-light btn btn-outline-danger">ເບິ່ງ​ລົດ​ທັງ​ຫມົດ​ທີ່​ມີ​ຢູ່​ &nbsp;<i class="fas fa-chevron-right fs-6"></i></h6>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="major-carousel js-carousel owl-carousel owl-theme  ">
                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://cdn.pixabay.com/photo/2020/10/18/16/40/bmw-5665352__340.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0">
                                <a href="#" class="text-black text-decoration-none fw-bold">BMW M2
                                    <br><span class="price">662,865,840 LAK</span>
                                </a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://cdn.pixabay.com/photo/2021/10/21/06/52/car-6728121__340.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0">
                                <a href="#" class="text-black text-decoration-none fw-bold">Lamborghini Urus
                                    <br><span class="price">222,004 $</span></a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://cdn.pixabay.com/photo/2021/05/19/18/52/porsche-911-6266940__340.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0">
                                <a href="#" class="text-black text-decoration-none fw-bold">Porsche 911 Carrera 4
                                    <br><span class="price">122,550 $</span></a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2020-ferrari-f8-spyder-112-1593551723.jpg?crop=0.681xw:0.767xh;0.179xw,0.151xh&resize=640:*" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0">
                                <a href="#" class="text-black text-decoration-none fw-bold">Ferrari f8-tributo
                                    <br><span class="price">276,550 $</span></a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://media.istockphoto.com/photos/apanese-supercar-in-the-ukrainian-city-white-nissan-gtr-r35-picture-id1174110970?b=1&k=20&m=1174110970&s=170667a&w=0&h=y_PkBEJ1cDOJZ10yVeHCyMZ0Iq26I5JH-Fuub0y3gw8=" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0">
                                <a href="#" class="text-black text-decoration-none fw-bold">Nissan GTR R35 <br>
                                    <span class="price">113,540 $</span></a>
                            </h3>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="media media-custom d-block text-left">
                        <a href="#" class="pda">
                            <img src="https://www.cnet.com/a/img/resize/09df9d5c8ec9f8d2083c74bd8cf1a30da02f1907/hub/2021/05/18/15e5d293-dfdb-465c-8137-f9e8d3517591/2021-maserati-ghibli-trofeo-014.jpg?auto=webp&width=1092" alt="Image placeholder" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h3 class="text-black mt-0 ">
                                <a href="#" class="text-black text-decoration-none fw-bold">Maserati Ghibli Trofeo 2021 <br>
                                    <span class="price">109,890 $</span></a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <!-- old product -->

            <div class="row ">
                <div class="col-md-6 text-start">
                    <h2 class="text-secondary ">ລົດມືສອງສະພາບດີ</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="pda">
                        <h6 class=" fw-light btn btn-outline-danger">ເບິ່ງ​ລົດ​ທັງ​ໝົດ​ &nbsp;<i class="fas fa-chevron-right fs-6"></i></h6>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="major-carousel js-carousel owl-carousel owl-theme  ">
                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/odl1.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0">
                                    <a href="#" class="text-black text-decoration-none fw-bold">TOYOTA 86GT
                                        <br><span class="price">163,060,000 LAK</span>
                                    </a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/old2.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0">
                                    <a href="#" class="text-black text-decoration-none fw-bold">Lamborghini Murcielago SV 2010
                                        <br><span class="price">3,812,270,000 LAK</span></a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/old3.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0">
                                    <a href="#" class="text-black text-decoration-none fw-bold">Porsche cayman 987
                                        <br><span class="price">2,178,440,000 LAK</span></a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/old4.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0">
                                    <a href="#" class="text-black text-decoration-none fw-bold">BMW Z4
                                        <br><span class="price">143,492,800 LAK</span></a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/old5.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0">
                                    <a href="#" class="text-black text-decoration-none fw-bold">TOYOTA Supra <br>
                                        <span class="price">322,858,800 LAK</span></a>
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media media-custom d-block text-left">
                            <a href="#" class="pda">
                                <img src="image/old6.jpg" alt="Image placeholder" class="img-fluid">
                            </a>
                            <div class="media-body">
                                <h3 class="text-black mt-0 ">
                                    <a href="#" class="text-black text-decoration-none fw-bold">BENZ G350D SPORT (NG) 2015 <br>
                                        <span class="price">2,217,616,000 LAK</span></a>
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- new product -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-start ">
                        <h2 class="text-secondary ">ໃນເດືອນນີ້ລົດເຂົ້າມາໃໝ່ 466 ຄັນ</h2>
                    </div>
                    <div class="col-md-6 text-end ">
                        <a href="#" class="pda">
                            <h6 class=" fw-light btn btn-outline-danger">ເບິ່ງ​​ທັງ​ໝົດ​ &nbsp;<i class="fas fa-chevron-right fs-6"></i></h6>
                        </a>
                    </div>

                </div>

                <div class="card  bg-light">
                    <div class="row g-0">
                        <div class="col-md-2 ">
                            <img src="image/new4.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-3 border border-light border border-4 rounded-end">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Bugatti Chiron</h5>
                                </a>
                                <p class="card-text">ນີ້ມີເເຮງສົ່ງ 1176kW / 1600Nm ໄປທັງຫມົດສີ່ລໍ້ (ເພີ່ມຂຶ້ນຈາກ 736kW ໃນ Veyron ແລະ 1103kW ໃນ Chiron) ຜ່ານລະບົບເກຍອັດຕະໂນມັດສອງ clutch ເຈັດຄວາມໄວ.
                                </p>
                                <p class="card-text"><small class="text-muted">5.5 million $</small></p>
                            </div>
                        </div>

                        <div class="col-md-2 border border-light border border-4  offset-md-2 ">
                            <img src="image/new6.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-3 ">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Subaru BRZ </h5>
                                </a>
                                <p class="card-text">ປີ 2022 BRZ ນຳສະເໜີລົດສະປອດນ້ຳໜັກເບົາຂອງ Subaru ລຸ້ນທີສອງ. ບໍ່ພຽງແຕ່ coupe ນັ່ງຕ່ໍາປະມານ 0.5 ນິ້ວແລະ span ຍາວປະມານ 1 ນິ້ວ, ແຕ່ bodywork ຂອງຕົນຍັງມີຄວາມຈໍາແນກຫຼາຍກ່ວາກ່ອນ.</p>
                                <p class="card-text"><small class="text-muted">30,495 $</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-2  ">
                            <img src="image/new7.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-3 border border-light border border-4 rounded-end">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Tesla Model 3</h5>
                                </a>
                                <p class="card-text">ພວກເຮົາຕື່ນເຕັ້ນຢ່າງບໍ່ຫນ້າເຊື່ອທີ່ຈະປະກາດວ່າ Model 3 ມາດຕະຖານທີ່ມີໄລຍະຫ່າງ 220 ໄມ, ຄວາມໄວສູງສຸດ 130 mph ແລະຄວາມເລັ່ງ 0-60 mph ຂອງ 5.6 ວິນາທີໃນປັດຈຸບັນມີຢູ່ໃນ $ 35,000! ເຖິງວ່າຈະມີຄ່າໃຊ້ຈ່າຍຕ່ໍາ,</p>
                                <p class="card-text"><small class="text-muted">43,990 $</small></p>
                            </div>
                        </div>

                        <div class="col-md-2 border border-light border border-4  offset-md-2 ">
                            <img src="image/new8.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-3 ">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Aston Martin DB11</h5>
                                </a>
                                <p class="card-text">Aston Martin DB11 ປີ 2021 ເປັນນັກທ່ອງທຽວປຶ້ມແບບຮຽນ. ມັນງາມ, ມີພະລັງ ແລະຖືກແຕ່ງຕັ້ງເປັນຢ່າງດີ, ແຕ່ມັນບໍ່ໄດ້ເສຍສະລະຄວາມສະດວກສະບາຍເພື່ອຜົນປະໂຫຍດຂອງການປະຕິບັດ.</p>
                                <p class="card-text"><small class="text-muted">208,425 $</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-2  ">
                            <img src="image/new9.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-3 border border-light border border-4 rounded-end-danger">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Chevrolet Corvette AWD Supercar - Red</h5>
                                </a>
                                <p class="card-text">Chevrolet Corvette · ປະສິດທິພາບສູງຂອງລົດ Supercar, ສາມາດຂັບໄດ້ທຸກວັນ, ສະພາບແວດລ້ອມຫ້ອງໂດຍສານທີ່ຫຼູຫຼາໃນຊັ້ນເທິງ.</p>
                                <p class="card-text"><small class="text-muted">445.78 $</small></p>
                            </div>
                        </div>

                        <div class="col-md-2 border border-light border border-4  offset-md-2 ">
                            <img src="image/new10.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-3 ">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-danger ">
                                    <h5 class="card-title fw-bold">Lamborghini CENTENARIO</h5>
                                </a>
                                <p class="card-text">ເພື່ອສະເຫຼີມສະຫຼອງວັນເກີດຄົບຮອບ 100 ປີຂອງຜູ້ກໍ່ຕັ້ງບໍລິສັດ Ferruccio Lamborghini, ລົດ 20 Roadster ແລະ 20 coupe ລຸ້ນ Centenario LP 770-4 ຈະຖືກສ້າງຂຶ້ນໃນລາຄາເລີ່ມຕົ້ນ 1.92 ລ້ານໂດລາ.</p>
                                <p class="card-text"><small class="text-muted">1.92 million $</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card brand -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 text-start ">
                        <h2 class="text-secondary ">ຊອກຫາລົດໃໝ່ຕາມຍີ່ຫໍ້</h2>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b1.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Porsche</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b2.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Maserati</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b3.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Tesla</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b4.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">bmw</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid " src="image/b5.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Ferrari</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid " src="image/b7.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Toyota</h4>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="card-group">
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b8.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Chevrolet Corvett</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b9.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Nissan</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b10.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Aston Martin</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid" src="image/b11.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Mercedes-Benz</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid " src="image/b12.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Rolls-Royce</h4>
                            </a>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-custom card-img-top img-fluid " src="image/b13.png">
                        <div class="card-body my-3">
                            <a href="#" class="text-decoration-none">
                                <h4 class="h4-custom card-title text-center fw-light">Bugatti</h4>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="row  mx-0 ">
                    <div class="col-md-2 mx-0 px-0">
                        <div class="card">
                            <img src="https://www.carlogos.org/car-logos/lexus-logo.png" class="card-custom card-img-top img-fluid">
                            <div class="card-body my-3">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="h4-custom card-title text-center fw-light">Lexus</h4>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mx-0 px-0">
                        <div class="card">
                            <img src="https://www.carlogos.org/car-logos/mclaren-logo.png" class="card-custom card-img-top img-fluid">
                            <div class="card-body my-3">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="h4-custom card-title text-center fw-light">McLaren</h4>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mx-0 px-0">
                        <div class="card">
                            <img src="https://www.carlogos.org/car-logos/lamborghini-logo.png" class="card-custom card-img-top img-fluid">
                            <div class="card-body my-3">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="h4-custom card-title text-center fw-light">Lamborghini</h4>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mx-0 px-0">
                        <div class="card">
                            <img src="https://www.carlogos.org/car-logos/honda-logo.png" class="card-custom card-img-top img-fluid">
                            <div class="card-body my-3">
                                <a href="#" class="text-decoration-none">
                                    <h4 class="h4-custom card-title text-center fw-light">Honda</h4>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- type of car -->

            <!-- by body type -->
            <div class="svg-sprites" style="height: 0; width: 0; position: absolute; visibility: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0">
                    <!--  symbol sprites declaration -->


                    <symbol id="svg-4-door-icon" viewBox="0 0 70 40">
                        <path d="M56.93 21.744c-2.635 0-4.772 2.137-4.772 4.772s2.137 4.772 4.772 4.772 4.772-2.137 4.772-4.772-2.137-4.772-4.772-4.772zm-4.063-6.51c-.003.215-.177.388-.393.388l-12.104.014c-.23 0-.406-.2-.38-.426l.674-5.727a.38.38 0 0 1 .379-.337h7.206a.38.38 0 0 1 .171.04l4.272 2.15c.134.068.218.206.216.356l-.042 3.543zm-14.016.087a.38.38 0 0 1-.376.315H26.96c-.21 0-.382-.17-.382-.382V14.5a.38.38 0 0 0-.382-.382h-.457c-.393 0-.53-.52-.188-.714l7.43-4.2a.38.38 0 0 1 .188-.049h6.316c.237 0 .417.214.376.448l-1.01 5.727zm29.722 6.806c-.21 0-.382-.17-.382-.382V15.85c0-.35-.238-.656-.578-.74l-8.503-2.126a.75.75 0 0 1-.156-.058l-9.7-4.845c-.106-.053-.223-.08-.34-.08H32.867c-.12 0-.235.028-.342.08l-12.723 6.36c-.064.032-.132.055-.202.068L3.647 17.478c-.226.042-.42.183-.53.385l-2.024 3.7c-.06.112-.093.238-.093.366v3.67c0 .402.312.736.714.762l4.256.278-.007-.133c0-3.7 2.99-6.68 6.68-6.68s6.68 2.99 6.68 6.68a6.71 6.71 0 0 1-.076.954h29.87l1.193-.092c-.037-.283-.062-.57-.062-.862 0-3.7 2.99-6.68 6.68-6.68a6.68 6.68 0 0 1 6.673 6.52l4.648-.358c.398-.03.705-.362.705-.76v-2.73a.38.38 0 0 0-.382-.382zm-55.93-.382c-2.636 0-4.772 2.137-4.772 4.772s2.137 4.772 4.772 4.772 4.772-2.137 4.772-4.772-2.137-4.772-4.772-4.772z" fill="" fill-rule="evenodd"></path>
                    </symbol>

                    <symbol id="svg-mini-suv-icon" viewBox="0 0 70 40">
                        <path d="M63.866 14.172H60.62c-.05 0-.097-.02-.133-.054l-5.8-5.593c-.128-.124-.043-.345.133-.345h2.16c.044 0 .086.015.12.043l6.888 5.593c.145.117.064.357-.12.357m-8.4-.28l-1.006 1.38c-.036.05-.094.08-.155.08H39.56c-.124 0-.216-.118-.19-.242l1.46-6.774c.02-.09.098-.156.19-.156h9.43a.19.19 0 0 1 .142.064l4.86 5.393c.064.07.07.178.013.255m-17.853 1.46H27.528c-.107 0-.193-.09-.193-.2V13.56c0-.1-.086-.2-.193-.2h-2.576c-.196 0-.267-.268-.098-.37l7.842-4.782c.03-.018.064-.028.098-.028h7.03c.128 0 .22.126.186.253L37.8 15.207c-.023.086-.1.146-.186.146m30.8 5.807l-.296-.076c-.344-.09-.586-.407-.586-.772v-4.57c0-.242-.107-.47-.3-.622l-7.156-5.89c-.183-.15-.3-.38-.3-.622v-.812c0-.44-.346-.796-.774-.796H32.145c-.13 0-.26.034-.376.1l-13.63 7.792c-.08.046-.168.077-.258.09l-14.535 2.3c-.258.04-.48.213-.587.458l-1.692 3.83c-.046.104-.07.216-.07.33v5.003c0 .44.346.796.774.796h6.2l-.01-.2c0-4.067 3.204-7.365 7.156-7.365s7.156 3.297 7.156 7.365c0 .067-.008.132-.01.2H49.36c-.002-.067-.01-.132-.01-.2 0-4.067 3.204-7.365 7.156-7.365s7.156 3.297 7.156 7.365c0 .067-.008.132-.01.2h3.97c.4 0 .72-.3.768-.697l.604-4.972c.05-.4-.2-.774-.58-.87m-53.302 1.093c-2.825 0-5.115 2.358-5.115 5.266s2.3 5.266 5.115 5.266 5.115-2.358 5.115-5.266-2.3-5.266-5.115-5.266m41.364 0c-2.825 0-5.115 2.358-5.115 5.266s2.3 5.266 5.115 5.266 5.115-2.358 5.115-5.266-2.3-5.266-5.115-5.266" fill="" fill-rule="evenodd"></path>
                    </symbol>


                    <symbol id="svg-coupe-icon" viewBox="0 0 70 40">
                        <path d="M53.495 15.284l-2.72 2.646c-.072.074-.17.115-.27.115h-3.67a.39.39 0 0 1-.374-.474l.57-6.12c.037-.182.193-.312.374-.312h.325c.084 0 .165.028.232.08l5.496 3.474a.4.4 0 0 1 .038.59m-8.786 2.76H28.124c-.21 0-.382-.176-.382-.393v-1.18c0-.217-.17-.393-.382-.393h-1.82c-.06 0-.118-.014-.17-.042a.4.4 0 0 1 0-.704l9.17-4.72c.053-.027.112-.04.17-.04h10.87a.39.39 0 0 1 .374.474l-.868 6.685c-.037.182-.193.312-.374.312m23.718 5.506c-.316 0-.573-.264-.573-.6v-4.683c0-.366-.246-.684-.592-.766l-9.258-2.2a.57.57 0 0 1-.155-.063l-10.49-6.17A.56.56 0 0 0 47.073 9h-12.71a.56.56 0 0 0-.24.054L19.4 16.048a.55.55 0 0 1-.133.044L3.732 19.138c-.272.053-.494.254-.582.524l-.914 2.822c-.057.176-.19.314-.362.373l-.352.12c-.312.107-.522.408-.522.746v3.04a.8.8 0 0 0 .224.556l.33.34c.135.14.317.22.508.23l3.7.162c-.112-.5-.177-1.017-.177-1.552 0-3.8 2.993-6.882 6.685-6.882s6.685 3.08 6.685 6.882c0 .74-.116 1.448-.325 2.115l1.09.048 29.815-.001.318-.02a7.05 7.05 0 0 1-.335-2.143c0-3.8 2.993-6.882 6.685-6.882s6.685 3.08 6.685 6.882a7.11 7.11 0 0 1-.132 1.361l5.525-.335c.404-.024.72-.37.72-.785v-2.6c0-.326-.257-.6-.573-.6m-12.225-1.966c-2.637 0-4.775 2.2-4.775 4.916s2.138 4.916 4.775 4.916 4.775-2.2 4.775-4.916-2.138-4.916-4.775-4.916m-43.933 0c-2.637 0-4.775 2.2-4.775 4.916s2.138 4.916 4.775 4.916 4.775-2.2 4.775-4.916-2.138-4.916-4.775-4.916" fill="" fill-rule="evenodd"></path>
                    </symbol>
                    <symbol id="svg-convertible-icon" viewBox="0 0 70 40">
                        <path d="M68.6132061,19.9939552 L67.3498868,19.4888906 C67.0727868,19.3781165 66.8760803,19.1275584 66.8337997,18.8322519 L66.5632255,16.9378487 C66.5148577,16.5993294 66.2674255,16.3243681 65.9345545,16.245181 C65.5059352,16.1430713 64.7806932,15.9867261 63.6328642,15.7769681 C60.0178416,12.6865326 54.0907094,10.9185326 51.9001223,10.343439 C51.4397513,10.2226294 50.9722513,10.5132197 50.8741997,10.9790197 L50.1824094,14.264681 C49.7802223,14.5663487 49.1233094,14.9871261 48.2507158,15.2940584 C47.8351481,15.440039 47.4219932,15.0608294 47.528819,14.633581 L47.7153803,13.8873358 C47.7153803,13.8873358 47.2982771,13.0531294 46.8811739,13.8873358 L45.7325223,15.80181 C45.6651803,15.9137906 45.5613158,15.9989003 45.43749,16.0408519 C44.4277448,16.3826068 39.512661,17.855081 32.3459545,16.875881 C32.0715965,16.8384261 31.8655126,16.6009197 31.8655126,16.3239294 L31.8655126,14.8591874 C31.8655126,14.5529132 31.6170384,14.304439 31.3106545,14.304439 L30.7520126,14.304439 C30.4455739,14.304439 30.1970997,14.0559648 30.1970997,13.7496906 L30.1970997,13.379639 C30.1970997,13.1782165 30.3063932,12.9924229 30.4825352,12.8947003 L37.4195223,9.04058097 C37.5956642,8.94280355 37.7049577,8.75706484 37.7049577,8.55564226 C37.7049577,8.13667452 37.2585158,7.8688971 36.8889577,8.06604226 L25.6089642,13.8873358 C24.560119,13.9447519 16.1924448,14.8286971 5.49165774,16.3443294 C5.28667065,16.3732842 5.09758677,16.4779165 4.96509645,16.6371681 L2.25129323,20.5609874 C2.12637065,20.7108616 0.999983548,21.5020745 0.999983548,21.6972455 L0.999983548,25.2005616 C0.999983548,25.6407519 1.34184806,26.0050455 1.78105129,26.0331777 L7.68372548,26.4097552 C7.79011258,22.4715132 11.0088158,19.3096229 14.9728868,19.3096229 C19.00419,19.3096229 22.2721932,22.5776261 22.2721932,26.6089294 C22.2721932,26.8201681 22.2580997,27.0278971 22.2406061,27.2345842 L48.1324835,27.2345842 L48.9965223,27.1993777 C48.9808384,27.0040423 48.96669,26.8081035 48.96669,26.6089294 C48.96669,22.5776261 52.2346384,19.3096229 56.2659416,19.3096229 C60.295819,19.3096229 63.5626706,22.5751584 63.5650287,26.6046519 L67.8219932,26.4309229 C68.2477061,26.4134294 68.5919287,26.0782003 68.6203352,25.6529261 L68.9607739,20.5462906 C68.9767319,20.3063713 68.8363997,20.0833971 68.6132061,19.9939552 M14.9728868,21.3951939 C12.0934158,21.3951939 9.75915129,23.7295681 9.75915129,26.6089294 C9.75915129,29.4883455 12.0934158,31.8226648 14.9728868,31.8226648 C17.8524126,31.8226648 20.1866771,29.4883455 20.1866771,26.6089294 C20.1866771,23.7295681 17.8524126,21.3951939 14.9728868,21.3951939 M56.2659416,21.3951939 C53.3864706,21.3951939 51.0522061,23.7295681 51.0522061,26.6089294 C51.0522061,29.4883455 53.3864706,31.8226648 56.2659416,31.8226648 C59.1454126,31.8226648 61.4797319,29.4883455 61.4797319,26.6089294 C61.4797319,23.7295681 59.1454126,21.3951939 56.2659416,21.3951939" id="Fill-1" fill=""></path>
                    </symbol>
                    <symbol id="svg-van-icon" viewBox="0 0 70 40">
                        <path d="M63.187 16.188h-8.393a.39.39 0 0 1-.381-.348L53.36 7.438c-.03-.24.15-.452.38-.452h1.84a.4.4 0 0 1 .125.02c5.092 1.693 7.264 6.956 7.843 8.65.09.26-.098.53-.363.53zm-10.855 0H39.696c-.24 0-.422-.224-.38-.47l1.4-8.402a.39.39 0 0 1 .381-.332h10.52c.2 0 .368.16.385.365l.705 8.402c.02.234-.158.435-.385.435zm-14.436-.332a.39.39 0 0 1-.38.332h-15.44c-.213 0-.385-.18-.385-.4v-1.6c0-.22-.173-.4-.385-.4h-1.404c-.383 0-.532-.517-.21-.735l8.842-6c.063-.043.136-.065.21-.065h10.18c.24 0 .42.224.38.47l-1.408 8.402zM63.52 8.08l.048-.1.347-.895C64.115 6.567 63.744 6 63.2 6H28.444a.75.75 0 0 0-.392.111L16.03 13.48c-.057.035-.118.062-.18.08l-11.79 3.477c.87.362 1.486 1.24 1.486 2.266v2.262C5.543 22.914 4.48 24 3.176 24H1l.308 5.083a.78.78 0 0 0 .714.742l3.943.277c-.001-.042-.006-.084-.006-.126 0-3.832 3.01-6.938 6.72-6.938s6.72 3.106 6.72 6.938c0 .337-.03.667-.076.99h29.988c.03 0 .06-.002.1-.005l1.162-.14a7.17 7.17 0 0 1-.055-.845c0-3.832 3.01-6.938 6.72-6.938 3.458 0 6.302 2.696 6.677 6.162l4.398-.534c.376-.046.663-.366.678-.757.094-2.503.001-11.495-5.464-19.837zM4.192 21.58V19.34c0-.47-.385-.85-.86-.85h-.95L1.32 22.432h2.014c.475 0 .86-.38.86-.85zm8.62 3.48c-2.645 0-4.79 2.207-4.79 4.93s2.144 4.93 4.79 4.93 4.79-2.207 4.79-4.93-2.144-4.93-4.79-4.93zm44.376 0c-2.645 0-4.79 2.207-4.79 4.93s2.144 4.93 4.79 4.93 4.79-2.207 4.79-4.93-2.144-4.93-4.79-4.93z" fill="" fill-rule="evenodd"></path>
                    </symbol>

                    <symbol id="svg-sports car-icon" viewBox="0 0 70 40">
                        <path d="M43.337 17.224l1.12-3.084c.095-.26.413-.362.64-.2 1.77 1.255 2.32 2.612 2.49 3.332.063.265-.138.52-.41.52h-3.442c-.293 0-.497-.29-.397-.567m-17.583.144v-1.422c0-.233-.19-.422-.422-.422H24.1c-.48 0-.588-.676-.13-.824 4.138-1.335 12.8-3.66 18.694-1.965.25.07.375.348.267.583l-1.95 4.227c-.07.15-.22.245-.384.245H26.177c-.233 0-.422-.19-.422-.422m42.995 7.043l-1.205-.482c-.143-.057-.237-.196-.237-.35v-3.453a.38.38 0 0 1 .024-.133l.962-2.566c.08-.2-.038-.44-.255-.497-3.194-.832-24.49-6.317-30.95-6.317-8.22 0-25.354 5.183-35.92 12.234a.38.38 0 0 0-.08.555l3.022 3.694c.072.088.18.138.292.138h6.203c-.217-.654-.338-1.35-.338-2.078a6.61 6.61 0 1 1 13.222 0c0 .727-.122 1.424-.338 2.078h28.63c-.217-.654-.338-1.35-.338-2.078a6.61 6.61 0 1 1 13.222 0c0 .727-.122 1.424-.338 2.078h2.788c.122 0 .236-.06.307-.158l1.496-2.094c.142-.2.06-.48-.167-.57m-8.605-10.7l7.178 1.367c.202.038.397-.09.44-.292l.928-4.328a.38.38 0 0 0-.465-.445l-7.878 2.055a.38.38 0 0 0-.271.274l-.226.906c-.053.21.082.422.296.463m-2.093 6.725c-2.608 0-4.722 2.114-4.722 4.722s2.114 4.722 4.722 4.722 4.722-2.114 4.722-4.722-2.114-4.722-4.722-4.722m-41.176 0c-2.608 0-4.722 2.114-4.722 4.722s2.114 4.722 4.722 4.722 4.722-2.114 4.722-4.722-2.114-4.722-4.722-4.722" fill="" fill-rule="evenodd"></path>
                    </symbol>
                </svg>
            </div>

            <div class="container py-5 ">
                <div class="row ">
                    <div class="col-md-6 text-start ">
                        <h2 class="text-secondary ">ຊອກຫາລົດໃໝ່ຕາມປະເພດຕົວເຄື່ອງ</h2>
                    </div>
                </div>
                <div class="row row-cols-1 g-4 ">
                    <div class="col-md-2">
                        <div class="card card-svg">
                            <a href="#" class="text-decoration-none">
                                <svg class="svg-icon card-img-top" width="70" height="30">
                                    <use xlink:href="#svg-4-door-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">4 ປະຕູ</h5>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card card-svg">
                            <a href="#" class="text-decoration-none">
                                <svg class="svg-icon card-img-top" width="70" height="30">
                                    <use xlink:href="#svg-convertible-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">ລົດເປີດຫຼັງຄາ</h5>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card card-svg">
                            <a href="#" class="text-decoration-none">
                                <svg class="svg-icon card-img-top" width="70" height="30">
                                    <use xlink:href="#svg-sports car-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">ລົດສະປອດ</h5>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card card-svg">
                            <a href="#" class="text-decoration-none">
                                <svg class="svg-icon card-img-top" width="70" height="30">
                                    <use xlink:href="#svg-van-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">ລົດຕູ້</h5>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card card-svg">
                            <a href="#" class="text-decoration-none">
                                <svg class="svg-icon card-img-top" width="70" height="30">
                                    <use xlink:href="#svg-mini-suv-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">ລົດມິນິ SUV</h5>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-2  ">
                        <div class="card card-svg ">
                            <a href="#" class="text-decoration-none ">
                                <svg class="svg-icon card-img-top " width="70" height="30">
                                    <use xlink:href="#svg-coupe-icon"></use>
                                </svg>
                                <div class="card-body">
                                    <h5 class="card-title text-center">ລົດ Coupe</h5>
                                </div>

                            </a>
                        </div>
                    </div>

                </div>
    </section>


    <!-- service -->
    <section id="service" class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center">ການກວດກາ ແລະ ກວດສອບ</h1>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3 ">
                    <a href="#">
                        <i class="far fa-calendar-check fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ບໍາລຸງຮັກສາແຕ່ລະໄລຍະ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="far fa-calendar-check fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ການກວດສອບຫຼາຍຈຸດ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center">ບໍລິການອີເລັກໂທຣນິກ</h1>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fas fa-car-battery fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ກວດ​ສອບ​ຫມໍ້​ໄຟ​</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fas fa-car-battery fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ການວິນິດໄສເອເລັກໂຕຣນິກ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center">ບໍລິການເຄື່ອງປັບອາກາດ</h1>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fas fa-thermometer-three-quarters fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ບໍລິການເຄື່ອງປັບອາກາດ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center">ບໍລິການເຄື່ອງຈັກ</h1>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fab fa-searchengin fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ກວດວິນິດໄສເຄື່ອງຈັກ ແລະລົດ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fab fa-searchengin fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ການກັ່ນຕອງນ້ຳມັນ ແລະ ປ່ຽນ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center">ບໍລິການເບກ</h1>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fas fa-cash-register fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ການສ້ອມແປງເບກ</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
                <div class="sv col-md-6 mb-4 border border-2 rounded-3">
                    <a href="#">
                        <i class="fas fa-cash-register fa-3x d-flex justify-content-center mb-2 my-2"></i>
                        <h3>ຄວາມ​ປອດ​ໄພ​ຂອງ​ລົດ​</h3>
                        <p class="d-none d-sm-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem obcaecati facere aliquid facilis officiis assumenda odit fuga in laboriosam aut praesentium ullam, dolore fugit sapiente laudantium temporibus ipsam corrupti mollitia maxime, molestias dolores minima nisi sunt vel? Quas, velit saepe?</p>
                        <i class="fal fa-long-arrow-right d-flex justify-content-end"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- about -->
    <section id="about">
        <div class="container-fluid">
            <div class="dark-overlay">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="container pt-5 text-white">
                            <h1>ກ່ຽວກັບເຮົາ</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, voluptatibus?</p>
                            <div class="m-2">
                                <!-- Facebook -->
                                <a class="fb-ic m-3" href="https://web.facebook.com/ppong.sml" >
                                    <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic m-3">
                                    <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Google +-->
                                <a class="gplus-ic m-3">
                                    <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                
                                <!--Instagram-->
                                <a class="ins-ic m-3">
                                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!--Pinterest-->
                                <a class="pin-ic m-3">
                                    <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2 py-4 offset-md-2 text-end d-none d-sm-block">
                        <img src="image/pong.png" class="img-fluid " style="object-fit: cover; width:57%">
                    </div>
                    <div class="col-md-2  text-start my-3 d-none d-sm-block">
                        <h5 class="text-start fs-4 text-primary">ທ້າວ ປ໋ອງ ແກ້ວສີທອງ</h5>
                        <p class="text-start fs-6 text-primary fw-lighter">ຫ້ອງ 3CW2.</p>
                        <h5 class="text-start fw-light text-primary">ມຊ.ວິທະຍາສາດທຳມະຊາດ</h5>
                        <a href="https://web.facebook.com/ppong.sml">
                            <button class="btn btn-warning text-dark fw-light">ຕິດຕໍ່ເຮົາ</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- footer -->
    <footer class="text-center p-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright &copy; Pong Keosithong 2021</p>
                </div>
            </div>
        </div>

    </footer>


    <!-- modal for login -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title ">ເຂົ້າສູ່ລະບົບ</h5>
                    <button class="btn-close bg-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="">ອີເມວ ຫຼື ຊື່ຜູ້ໃຊ້:</label>
                            <input type="email" name="emaill" placeholder="Example@gmail.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">ລະຫັດ:</label>
                            <input type="password" name="p" placeholder="Password" class="form-control">
                        </div>
                        <div class="row my-1">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        ຈົດຈຳ
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="#" class="text-end text-danger">ລືມລະຫັດ?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="button" class="form-control btn btn-info" value="ເຂົ້າສູລະບົບ">
                </div>
            </div>
        </div>
    </div>

    <!-- modal for register -->
    <div class="modal fade" id="regisModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-tital">ລົງທະບຽນ</h5>
                    <button class="btn-close bg-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="">ຊື່ຜູ້ໃຊ້:</label>
                            <input type="text" name="namme" placeholder="NickName" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">ອີເມວ:</label>
                            <input type="email" name="mail" placeholder="Example@gmail.com" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">ເບີໂທ:</label>
                            <input type="tel" name="namme" placeholder="20xxxxxxxx" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">ລະຫັດຜ່ານ:</label>
                            <input type="password" name="namme" placeholder="Password" class="form-control" id="">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <input type="button" value="ລົງທະບຽນ" class="btn btn-success form-control">
                </div>
            </div>
        </div>

    </div>



    <!-- own carousel Image Media section -->
    <script>
        $('.js-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            stagePadding: 7,
            margin: 20,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            autoplayHoverPause: true,
            items: 3,
            navText: ["<span class='fa fa-chevron-left'></span></span>", "<span class='fa fa-chevron-right'></span></span>"],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>