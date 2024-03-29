<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard - Inventory Management System</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardContainer">
        <div class="side-bar" id="sideBar">
            <h1 class="dashboard-logo" id="dashboardLogo">IMS</h1>
            <div class="sidebar-user">
                <img src="images/user.jpg" alt="User image." id="userImage"/>
                <span>Favour</span>
            </div>
            <div class="sidebar-menus">
                <ul class="menu-list">
                    <li class="menuActive">
                        <a href="javascript:void(0);"><i class="fa fa-dashboard menuIcons"></i><span class="menuText">Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard menuIcons"></i><span class="menuText">Dashboard</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-container" id="contentContainer">
            <div class="top-nav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-power off"></i>Logout</a>
            </div>
            <div class="content">
                <div class="main-content">

                </div>
            </div>
        </div>
    </div>

    <script>

        var sideBarIsOpen = true;

        toggleBtn.addEventListener( 'click', (event) => {
            event.preventDefault();

            if(sideBarIsOpen){
                
                sidebar.style.width = '10%';
                sidebar.style.transition = '0.3s all';
                contentContainer.style.width = '90%';
                dashboardLogo.style.fontSize = '60px';
                userImage.style.width = '60px';
    
                menuIcons = document.getElementsByClassName('menuText');
                for (var i=0; i < menuIcons.length; i++){
                    menuIcons[i].style.display = 'none';
                }
    
                document.getElementsByClassName('menu-list')[0].style.textAlign = 'center';
                sideBarIsOpen=false;
            }
            else{
                sidebar.style.width = '20%';
                contentContainer.style.width = '80%';
                dashboardLogo.style.fontSize = '80px';
                userImage.style.width = '80px';
    
                menuIcons = document.getElementsByClassName('menuIcons');
                for (var i=0; i < menuIcons.length; i++){
                    menuIcons[i].style.display = 'inline-block';
                }
    
                document.getElementsByClassName('menu-list')[0].style.textAlign = 'normal';
                sideBarIsOpen=true;
            }
        });
    </script>
</body>
</html>