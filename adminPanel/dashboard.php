<?php
session_start();
if(!isset($_SESSION['adminLoginId'])){
    header("location: adminLogin.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intial-scale=1,maximum-scale=1">
    <title>ADMIN PANEL</title>
    <script>
        // prevent reload post request
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
:root{
    --main-color: rgb(156, 34, 34);
    --color-dark: #1d2231;
    --text-grey: #8390a2;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
}
.sidebar {
    width: 345px;
    position:fixed;
    box-sizing: border-box;
    left:0;
    top:0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
    transition: width 300ms;
}
.sidebar-brand{
    height:90px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff
}
.sidebar-brand span{
    display: inline-block;
    padding-right: 1rem;
}
.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-menu li{
    width: 100%;
    margin-bottom: 1.7rem;
    padding-left: 2rem;
}
.sidebar-menu a{
    padding-left: 1rem;
    display:block;
    color:#fff;
    font-size: 1.1rem;
}
.sidebar-menu a.active{
    background: white;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}
.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;
}
#nav-toggle:checked + .sidebar{
    width: 70px;
}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li{
    padding-left: 1rem;
    text-align: center;
}

#nav-toggle:checked + .sidebar li a{
    padding-left: 0rem;
} 
#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child  {
    display: none;
}
#nav-toggle:checked ~ .main-content{
    margin-left: 70px;
}

#nav-toggle:checked ~ .main-content header{
    width: calc(100% - 70px);
    left: 70px;
}
.main-content{
    transition: margin-left 300ms;
    margin-left: 345px;
}
header{    
    background: #fff;
    display: flex;;
    justify-content: space-between;
    padding:1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    position: fixed;
    left:345px;
    width:calc(100% - 345px);
    top:0;
    z-index: 100; 
    transition: left 300ms;
}

#nav-toggle{
    display: none;
}

header h2{
    color:#222;
}
header label span{
    font-size: 1.7rem;
    padding-right: 1rem;
}
.search-wrapper{
    border: 1px solid #ccc;
    border-radius: 30px;
    height:50px;
    display:flex;
    align-items: center;
    overflow-x: hidden;
}
.search-wrapper span{
    display:inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}
.search-wrapper input{
    height: 100%;
    padding: .5rem;
    border: none;
    outline: none;
}
.user-wrapper{
    display: flex;
    align-items: center;
}
.user-wrapper img{
    border-radius: 50%;
    margin-right: 1rem;
}
.user-wrapper small{
    display: inline-block;
    color: var(--text-grey);
}
main{
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}
.cards{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}
.card-single{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 2px;
}
.card-single div:first-child span{
    color:var(--text-grey);
}
.card-single div:last-child span{
    font-size: 3rem;
    color:var(--main-color);
}
.card-single:last-child{
    background: white;
}
.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span{
    color: #fff;
}
.recent-grid{
    margin-top: 3.5rem;
    width: 153%;
    display: grid;
    grid-gap: 2rem;
    grid-template-columns: 65% auto;
}
.card{
    background: white;
    border-radius: 5px;
}
.card-header{
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}
.card-header button{
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
}
.card-body{
    padding:1rem;
}
table{
    border-collapse: collapse;
}

thead tr{
    border-top: 1px solid #f0f0f0;
    border-bottom: 2px solid #f0f0f0;
}
thead td{
    font-weight: 700;
}
td{
    padding: .5rem 1rem;
    font-size: .9rem;
    color:#222
}
td .status{
    display:inline-block;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin-right: 1rem;

}

tr td:last-child{
    display: flex;
    align-items: center;
}
.status.purple{
    background: rebeccapurple;
}
.status.pink{
    background: deeppink;
}
.status.orange{
    background: orangered;
}

.table-responsive{
    width: 100%;
    overflow-x: auto;
}

.customer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem .7rem;
}
.info{
    display: flex;
    align-items: center;
}
.info img{
    border-radius: 50%;
    margin-right: 1rem;
}

.info h4{
    font-size: .8rem;
    font-weight: 700;
    color: #222;
}
.info small{
    font-weight: 600;
    color: var(--text-grey);
}

.contact span{
    font-size: 1.2rem;
    display: inline-block;
    margin-left: .5rem;
    color: var(--main-color);
}

@media only screen and (max-width:1200px){
    .sidebar{
        width: 70px;
    }
    .sidebar .sidebar-brand,
    .sidebar li{
        padding-left: 1rem;
        text-align: center;
    }
    
    .sidebar li a{
        padding-left: 0rem;
    } 
    .sidebar .sidebar-brand h2 span:last-child,
    .sidebar li a span:last-child  {
        display: none;
    }
    .main-content{
        margin-left: 70px;
    }
    
    .main-content header{
        width: calc(100% - 70px);
        left: 70px;
    }
    .sidebar:hover{
        width: 345px;
        z-index: 200;
    }
    .sidebar:hover .sidebar-brand,
    .sidebar:hover li{
        padding-left: 2rem;
        text-align: left;
    }
    
    .sidebar:hover li a{
        padding-left: 1rem;
    } 
    .sidebar:hover .sidebar-brand h2 span:last-child,
    .sidebar:hover li a span:last-child  {
        display: inline;
    }
}

@media only screen and (max-width:960px){
    .cards{
        grid-template-columns: repeat(3,1fr);
    }
    .recent-grid{
        grid-template-columns: 60% 40%;
    }
}

@media only screen and (max-width:768px){
    .cards{
        grid-template-columns: repeat(2,1fr);
    }
    .recent-grid{
        grid-template-columns: 100%;
    }
    .search-wrapper{
        display: none;
    }
    .sidebar{
        left: -100% !important;
    }
    header h2{
        display: flex;
        align-items: center;
        font-size: 1.1rem;
    }
    header h2 label{
        display: inline-block;
        background: var(--main-color);
        padding-right: 0rem;
        margin-right: 1rem;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center !important;
    }
    header h2 span{
        text-align: center;
        padding-right: 0rem;
    }
    .main-content{
        width: 100%;
        margin-left: 0rem;
    }
    header{
        width: 100% !important;
        left: 0 !important;
    }

    #nav-toggle:checked + .sidebar{
        left: 0 !important;
        z-index: 100;
        width: 345px;
    }

    #nav-toggle:checked + .sidebar .sidebar-brand,
    #nav-toggle:checked + .sidebar li{
        padding-left: 2rem;
        text-align: left;
    }
    
    #nav-toggle:checked + .sidebar li a{
        padding-left: 1rem;
    } 
    #nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
    #nav-toggle:checked + .sidebar li a span:last-child  {
        display: inline;
    }
    #nav-toggle:checked ~ .main-content{
        margin-left: 0rem !important;
    }
}

@media only screen and (max-width:560px){
    .cards{
        grid-template-columns: 100%;
    }
    
}
        </style>
    <!-- <link rel="stylesheet" href="dashboard.css"> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class=""></span><span>RedLifeSaver</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span><span>DashBoard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span><span>Donors</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span><span>Registrations</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>


            <div class="user-wrapper">
                <div>
                    <form action="" method="post">
                        <button name="logout" style="border: none; font-size:medium; background-color:white;"><h4>Logout</h4></button>
                        </form>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>45</h1>
                        <span>Total Donors</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>105</h1>
                        <span>Total Registrations</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>85</h1>
                        <span>Total Blood Unit(in ml)</span>
                    </div>
                    <div>
                        <img src="favicon1.png" height="50px" width="50px" alt="">

                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>
                            <font color=black>35
                        </h1>
                        </font>
                        <span>
                            <font color=grey>Total Request
                        </span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Registrations</h3>
                            <button>See all <span class="las la-aroow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Address</td>
                                            <td>Blood Type</td>
                                            <td>Description</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("adminConnection.php");
                                        $query = "SELECT * FROM dontformdata";
                                        $query_run = mysqli_query($conn, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $row) {
                                                // echo $row['firstname'];
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['firstname']; ?></td>
                                                    <td><?php echo $row['district']; ?></td>
                                                    <td><?php echo $row['type']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>  
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td>No record found</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>



<!-- logout logic -->
<?php

if(isset($_POST['logout'])){
    session_destroy();
    header("location: adminLogin.php");
}
?>