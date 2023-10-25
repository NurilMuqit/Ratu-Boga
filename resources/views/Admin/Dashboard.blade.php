
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Dashboard</title>
</head>
<body>
    <div class="container min-h-screen ">
  
      <div class="sidebar mt-5 bg-teal-800 w-72 h-96 rounded-lg">
  
        <div class="profile d-flex justify-content-center">
            <div class="list-item">
              <img class="adm-profile" src="assets/images/Profile.jpg" alt="">
            </div>
        </div>
  
        <div class="name ">
          <div class="list-item">           
              <x-app-layout>
            </x-app-layout>
          </div>
        </div>
  
        <div class="position m-2">
          <div class="list-item">           
              <span class="admin-position flex justify-center text-white text-base font-normal" id="admin_position" >Admin Restaurant</span>
          </div>
        </div>
          <ul class="list ">
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-bar-chart-fill"></i>Dashboard</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-cart2"></i>Poducts</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-bag"></i>Orders</a><span class="notification rounded-pill text-light py-0 px-1">02</span></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-person-lines-fill"></i>Customers</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-credit-card"></i>Finance</a></li>
            <li class=""><a href="#" class="text-decoration-none"><i class="bi bi-gear"></i>Settings</a></li>
          </ul>
      </div>
  
      <div class="main-content">
        
      </div>
    </div>
  </body>
</html>

