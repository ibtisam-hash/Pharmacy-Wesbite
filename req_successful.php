
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>FII Pharmacy</title>
    <style>
  #logbut{
    background-color: #1612e9;
  width: 98px;
  }

#logbut:hover,  #logbut:active {transition: all 0.2s ease 0s;
  background-color: #0f0e5f;


}#btn3{
    color: white;
    background: #0d0a5a;
    padding: 2px 29px;
    font-size: 18px;
    border: 2px solid white;
    cursor: pointer;
    margin-left:135px;
    margin-top:25px;

}#btn3:hover, #btn3:active {transition: all 0.3s ease 0s;

background: #230ebf;


    }
    #contact{
      font-size:42px;
      padding-left:60px;
      padding-right:60px;
    }
    #response{
      margin-left:650px;
      margin-bottom:50px;
      
      height: 200px;
      width: 200px;
    }
</style>
</head>
<body class="url" style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% );  ">
  
  <header style="margin-top: 30px;" class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <a href="index1.html"><img  src="logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white  " style=" border: 3px solid white ;border-radius: 50%;" height="146px" width="146px;" viewBox="0 0 24 24"></a>
          
        </svg>
        <span style="font-family: 'Brush Script MT';color:white;font-size: 64px;" class="ml-2 text-xl  ">FII Pharmacy</span>
      </a>
      <nav id="navv" style="color: white;font-size: 18px;" class=" md:ml-12 flex flex-wrap items-center text-base justify-center md:pl-3 md:border-l md:border-gray-100">
        <a href="index1.php" class="mr-5 ">Home</a>
        <a href="about.php" class="mr-5 ">About</a>
        <a href="shop.php" class="mr-5 ">Shop Now</a>
        <a href="contact.php" class="mr-5 ">Contact Us</a>
        <a href="request.php" class="mr-5 ">Request Medicines</a>
     
       
      </nav>
     
      <?php
    


      session_start();

      if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
      {
          echo   "<a href='login.php'> <button id='logbut'  class='text-white  border-0 py-2 px-2 focus:outline-none  rounded text-lg'>Log in →</button></a>";
      }

else if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] ==true){
  echo   "<a href='login.php'> <button id='logbut'  class='text-white  border-0 py-2 px-2 focus:outline-none  rounded text-lg'>Logged in</button></a>";
}

?>
   
   
 
  </div>
  </header>
      <section style="margin-top: 40px;" class="text-gray-400  body-font relative ">
      <div> <a href="request.php"><button id="btn3"    class="flex  text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">← Go Back</button></a></div>
        <div class="flex flex-col text-center w-full">
            <div><img id="response" src="https://cdn4.iconfinder.com/data/icons/toolbar-soft/512/check_ok_yes_accept_confirm_tick_approved-512.png"><div>
            <h1 id="contact" class="  font-medium title-font ">Your request has been submitted successfully.</h1>
</div>
          
            
      </section>
      
      <footer style="margin-top: 200px;" class="text-gray-600 body-font">
        <hr />
        <div class="container px-5 py-20 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
         
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-5 mt-15">
            
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="logo.png" style="height: 120px; width:120px;border-radius: 50%;border: solid 2px white;" >
               
            </img>
              <h2 class="ml-4 text-xl leading-relaxed text-3xl font-medium tracking-widest">FII Pharmacy</h2>
            </a>
           
          </div>
          <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Authentic</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class=" leading-relaxed">Products that are listed on</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">FIIPharmacy.com are</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">100% genuine & sourced</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">from licensed pharmacies.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Reasonable</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class=" leading-relaxed">We work hard to bring </p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">you unimaginable discounts</p2>
                    
                </li>
                <li>
                  <p2 class=" leading-relaxed">without compromising on</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">quality and products.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Licensed</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class="leading-relaxed ">We are an official licensed</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">store by Government of</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">Pakistan & Ministry Of Health</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">with 100% secure portal.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Find Us Online</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class="leading-relaxed ">Facebook : FIIPharmacy</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed"> Instagram : FIIPharmacy</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">Whatsapp : 03008200000</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">Gmail : GPharm@gmail.com</p2>
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div id="q">
          <div class="container mx-auto py-6 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 FII Pharmacy —
              <a rel="noopener noreferrer" class=" ml-1" target="_blank">@Fahad Farrukh Ibad Absar Arsal Naveed</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
        <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
      </footer>
    
</body>
</html>