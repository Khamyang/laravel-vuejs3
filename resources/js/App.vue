<template>
    <div id="mySidenav" class="sidenav">
        <div class="m-0 p-2 logo">
            <span
                onclick="closeNav()"
                style="
                    font-size: 40px;
                    cursor: pointer;
                    position: absolute;
                    top: -12px;
                    right: 5px;
                "
                >&times;</span
            >
            <div class="pt-2">
                <div class="d-flex justify-content-center">
                    <img src="img/moto.png" class="brand_logo" alt="Logo" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <h5>Anh Tuấn dịch vụ thuê xe</h5>
            </div>
        </div>
        <div class="menu mt-4">
            <a href="?page=home">Trang chủ</a>
            <a href="?page=car-rental">quản lý thuê xe</a>
            <a href="?page=type-car">quản lý xe</a>
            <a href="?page=report">Thống kê</a>
        </div>

        <!-- <a href="?logout" class="btn btn-danger btn-sm text-white">Logout</a> -->
    </div>
    <div id="main">
        <header class="btn p-1 w-100 text-start sticky-md-top header">
            <span style="font-size: 30px; cursor: pointer" onclick="openNav()"
                >&#9776;
            </span>
            <li class="nav-item list-unstyled" id="language">
                <span
                    class="float-end bg-primary d-flex flex-column justify-content-center align-items-center rounded-circle"
                    style="
                        height: 30px;
                        width: 30px;
                        margin-top: 5px;
                        margin-right: 5px;
                    "
                    ><i class="fa fa-user"></i
                ></span>
                <span
                    class="float-end bg-light d-flex flex-column justify-content-center align-items-center rounded"
                    style="
                        height: 30px;
                        width: 30px;
                        margin-top: 5px;
                        margin-right: 25px;
                    "
                    ><i class="fa fa-message text-success"></i></span>
                <ul class="popup_language" id="popup_language">
                    <li>
                        <a href="#" id="lg_change1"
                            ><img
                                src="images/icons/vietnam.png"
                                width="20"
                                alt=""
                            />Vietname</a
                        >
                    </li>
                    <li>
                        <a href="#" id="lg_change2"
                            ><img
                                src="images/icons/laos.png"
                                width="20"
                                alt=""
                            />
                            Lao</a
                        >
                    </li>
                    <li>
                        <a href="#" id="lg_change3"
                            ><img
                                src="images/icons/english.png"
                                width="20"
                                alt=""
                            />English</a
                        >
                    </li>
                    <li>
                        <a href="#" id="lg_change4"
                            ><img
                                src="images/icons/china.png"
                                width="20"
                                alt=""
                            />China</a
                        >
                    </li>
                </ul>
            </li>
        </header>
        <div class="container-fluid pt-2">
            <div class="content">
                fsfsdf
            </div>
        </div>
    </div>
</template>
<script>
export default {};
</script>

<style>
body {
    font-family: "Times New Roman", Times, serif;
    background-color: #eeee;
}

.header {
    background: #c7ddff;
    display: flex;
    justify-content: center;
    justify-items: center;
    justify-content: space-between;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #ffff;
    overflow-x: hidden;
    transition: 0.5s;
    /* padding-top: 10px; */
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
    border-radius: 2px solid #c0392b;
    background-color: #c0392b;
}

.sidenav .closebtn {
    /* position: absolute; */
    top: 0;
    right: 25px;
    font-size: 26px;
    margin-left: 50px;
}
.logo {
    background-color: #c7ddff;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(100, 100, 100, 0.2);
}

.brand_logo_container {
    /* position: absolute; */
    height: 150px;
    width: 150px;
    border-radius: 50%;
    background: #275528;
    padding: 30px;
    text-align: center;
    /* border: 1px solid #c0392b; */
}

.brand_logo {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    border: 2px solid rgb(202, 108, 108);
}

#main {
    transition: margin-left 0.5s;
    padding: 16px;
}
#language {
    position: relative;
}
.popup_language {
    box-shadow: 0 0 1px rgb(255, 255, 255);
    padding: 5px;
    margin-top: 10px;
    position: absolute;
    right: 0;
    width: 150px;
    background-color: #dbd2d0;
    border-radius: 2px;
    display: none;
}
#popup_language li {
    list-style: none;
    color: #e9eaeb;
}
#popup_language li a {
    text-decoration: none;
    color: #000000;
}
@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}
</style>
