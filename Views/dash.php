<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url()?>/dist/output.css">
    <link rel="stylesheet" href="<?= base_url()?>/newdash.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <title>Document</title>
</head>
<body>
    <div class="wrapper relative w-full h-full flex flex-row px-2 md:px-6 bg-gray-100 overflow-x-hidden">
         <div class="aside active bg-white h-full  md:flex flex-col ">
            <div class="logo md:w-[250px] w-[200px] md:h-[150px] h-[100px] flex flex-col justify-center  items-center overflow-hidden ">
                <div class="logopic w-11 h-11"><img src="logo/TeramaFlixpic.png" alt="logo" class=""></div>
                <img src="logo/TeramaFlixnam.png"  alt="nameLogo" class="logoname w-40 h-5 ">
            </div>
            <div class="links">
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                      </svg>
                      
                      <a href="<?=base_url() ?>/dashboard"><span >Dashboard</span></a>
                </div>
                <div class="h " >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
                      </svg>
                      
                    <span>Categories</span>
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                      </svg>
                      
                    <span >Video</span>                      
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                      </svg>
                      
                    <span >Users</span>                      
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                      </svg>
                      
                    <span >Inbox</span>                      
                </div>
            </div>
            <div class="menuCloser X sm:hidden rounded-full"><span>x</span></div>
         </div>
         <div class="container w-full  h-[100%]  sm:px-6 mt-6 bg-g/ray-100 flex flex-col justify-center ">
            <div class="dashHead flex flex-row justify-between items-center px-6 w-full h-[60px] md:h-[70px] bg-white rounded-3xl">
                <div class="flex flex-row items-center  space-x-2">
                    <div class="menuCloser cursor-pointer z-50 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 md:w-10 md:h-10 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                      
                    </div>
                    <h1 class="font-bold text-[#9442FE] text-[1.2rem] md:text-[1.5rem]">Dashboard</h1>
                </div>
                <div class="profil w-9 h-9 md:w-12 md:h-12 rounded-full overflow-hidden">
                    <img src="img/logo.png" alt="" class="" >
                </div>
            </div>
            <div class="dashContainer mt-5 flex flex-col space-y-5 md:space-y-10 ">
                <div class="blokcontainer flex  justify-center md:flex md:flex-row space-x-2 space-y-2 md:space-x-4 h-[200px]  ">
                    <div class="blok w-[45%] md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 md:w-10 md:h-10 ">
                                <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>


                              
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?php echo $video ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Video</h2>
                    </div>
                    <div class="blok w-[45%]  md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                              </svg>
                              
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?= $mail_not_read ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Emails</h2>
                    </div>
                    <div class="blok w-[45%] md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                              </svg>
                              
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?= $users ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Users</h2>
                    </div>
                    <?php if(isset($Estime_video)){
                                foreach($Estime_video as $estime_video){
                             ?>
                    <div class="blok w-[45%] md:w-[25%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 ">
                                <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>
                              <span class="text-lg md:text-xl font-bold text-[#3378FF]"><?=$estime_video; ?></span>
                        </div>
                        <h2 class="text-base md:text-lg font-bold text-[#3378FF]">Video par Mois</h2>
                    </div>
                </div>
                <?php } } 

                ?>
                
                <div class="stat flex flex-col space-y-2 px-4 md:flex-row md:justify-between md:h-[350px] ">
                    <div class="nbr w-[50%] md:w-[30%] h-[100px] md:h-[250px] bg-white rounded-3xl flex justify-center items-center px-10">
                    <?php  
                if(isset($Estime_users)){
                    foreach($Estime_users as $estime_users){
                ?>         
                        <p class="font-bold text-white text-[1rem] md:text-[1.5rem]"><?=$estime_users ?> USERS FROM MONTH</p>

                        <?php }} ?>
                    </div>
                 
                    <div class="statView bg-white h-max w-max md:w-[55%] rounded-3xl">
                        <canvas id="myChart"></canvas>
                    </div>
        
                </div>
            
                <div class="emails-Users md:h-[400px] mb-24 flex flex-col md:flex-row justify-between space-y-5">
                    <div class="sectionEmails flex flex-col  md:w-[65%] h-[400px] md:h-full bg-white rounded-3xl">
                        <h1 class="font-bold text-lg md:text-xl p-4 md:p-6">Recent Emails</h1>
                        <div class=" emailsContainer w-full h-full pt-6 overflow-y-auto ">
                     
                        <?php if(isset($message)) {
                                foreach($message as $msg){
                                    ?>
                            <div class="msg1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-10 h-10 md:w-12 md:h-12 rounded-full overflow-hidden">
                                        <img src="img/logo.png" class="w-full h-full" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold"><?= $msg->Nom ?></h1>
                                        <p><?= $msg->Body?></p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span class="text-xs md:text-base"><?= $msg->Create_at ?></span>
                                </div>
            
                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                    <div class=" sectionUsers md:w-[30%] h-[300px] md:h-full flex flex-col bg-white rounded-3xl">
                        <h1 class="font-bold text-lg md:text-xl p-4 md:p-6">Recent Users</h1>
                        <div class="usersContainer w-full h-full pt-6 overflow-y-auto">
                        <?php if(isset($use)) {
                                foreach($use as $user){
                                    ?>
                            <div class="user1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-10 h-10 md:w-12 md:h-12 rounded-full overflow-hidden">
                                        <img src="img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold"><?= $user->Nom ?></h1>
                                    </div>
                                </div>

                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
                <div class="Uploads flex flex-col  w-full h-[300px] md:h-[500px] bg-white rounded-3xl">
                    <h1 class="font-bold text-lg md:text-xl p-4 md:p-6">Recent Uploads</h1>
                    <div class=" uploadsContainer w-full h-full pt-6 overflow-y-auto ">
                    <?php if(isset($video_recent)){
                          foreach($video_recent as $upload){
                            ?>
                        <div class="video1 flex flex-row  justify-between px-6 mb-6 cursor-pointer">
                            <div class="flex flex-row  bg-gray-100 space-x-1 md:space-x-5 w-[90%] md:w-[80%]">
                                <div class=" w-[120px] md:w-[210px] h-[80px] md:h-[150px] rounded-2xl   overflow-hidden">
                                    <img src="Thumbnails/<?=$upload->Image ?>" class="w-full h-full" alt="profil">
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="font-semibold text-[1rem] md:text-[1.5rem]"><?= $upload->Title ?></h1>
                                    <p class="text-sm md:text-base"><?= substr($upload->Body,0,40) ?></p>
                                </div>
                            </div>
                            <div class="date items-end">
                                <span class="text-xs"><?= $upload->Created_at ?></span>
                            </div>
                        </div>
                        
                        <?php } } ?>
                        
                    </div>
                </div>
                <div class="footer">
                    <span class="font-bold"><center>Admin Dashboard all right reserved teramaflix@2022</center> </span>
                </div>
            </div>
         </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?=base_url() ?>/dash.js"></script>

<?php if(isset($chart)){
              $i=0;
              $tab=[];
              foreach($chart as $val){
                $tab[$i]=$val->count;
                $i++;

              }
              ?>
              <script>
         var x= <?php echo json_encode($tab)  ?>;

                </script>
        
          <?php  }  ?>

          <script>

const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'line',
    data: {
 labels: [ 
     '1','2','3',
    '4','5','6',
     '7','8','9',
     '10','11','12',
    '13','14','15',
      '16','17','18',
     '19','20','21',
     '22','23','24',
     '25','26','27',
     '29','30','31'
      ],
      datasets: [{
        label: 'users Chart',
        data: x,
        borderColor: [ "#3378FF" ],
        borderWidth: 4
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>  
</body>
</html>