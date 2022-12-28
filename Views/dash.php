<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url()?>/dist/output.css">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url()?>/dash.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper w-full h-full flex flex-row px-6 bg-gray-100">
         <div class="aside hide w-[20%] h-full  fixed bg-white flex flex-col ">
            <div class="logo w-[250px] h-[150px] flex flex-col justify-center  items-center overflow-hidden ">
                <div class="w-11 h-11"><img src="<?= base_url()?>/logo/TeramaFlixpic.png" alt="logo" class=""></div>
                <img src="<?= base_url()?>/logo/TeramaFlixnam.png" alt="nameLogo" class="w-40 h-5 ">
            </div>
            <div class="links">
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                      </svg>
                      
                      <span >Dashboard</span>
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" clip-rule="evenodd" />
                      </svg>
                      
                    <span>Categories</span>
                </div>
                <div class="h">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                      </svg>
                      
                    <span ">Video</span>                      
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
         </div>
         <div class="container w-[80%] h-[100%] ml-[350px] px-6 mt-6 bg-gray-100 flex flex-col justify-center ">
            <div class="dashHead flex flex-row justify-between items-center px-6 w-full h-[90px] bg-white rounded-3xl">
                <div class="flex flex-row items-center  space-x-1">
                    <div class="menuCloser  ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                      
                    </div>
                    <h1 class="font-bold text-[#9442FE] text-[2rem]">Dashboard</h1>
                </div>
                <div class="profil w-12 h-12 rounded-full overflow-hidden">
                    <img src="<?= base_url()?>/img/logo.png" alt="" class="" >
                </div>
            </div>
            <div class="dashContainer mt-5 flex flex-col space-y-10 ">
                <div class="flex flex-row justify-between h-[200px]  ">
                    <div class="w-[20%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 ">
                                <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>
                              <span class="text-xl font-bold">200</span>
                        </div>
                        <h2 class="text-xl font-bold">Total Video</h2>
                    </div>
                    <div class="w-[20%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                              </svg>
                              
                              <span class="text-xl font-bold">200</span>
                        </div>
                        <h2 class="text-xl font-bold">Total Emails</h2>
                    </div>
                    <div class="w-[20%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                              </svg>
                              
                              <span class="text-xl font-bold">200</span>
                        </div>
                        <h2 class="text-xl font-bold">Total Users</h2>
                    </div>
                    <div class="w-[20%] flex flex-col justify-center items-center rounded-3xl bg-white">
                        <div class="flex flex-row space-x-2  items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 ">
                                <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>
                              <span class="text-xl font-bold">200</span>
                        </div>
                        <h2 class="text-xl font-bold">Total Video</h2>
                    </div>
                </div>
                <div class="stat flex flex-row justify-between h-[300px] ">
                    <div class="nbr w-[30%] bg-white rounded-3xl flex justify-center items-center px-10">
                        <p class="font-bold text-white text-[2rem]">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="statView bg-white w-[60%] rounded-3xl">

                    </div>
                </div>
                <div class="emails-Users h-[400px] mb-24 flex flex-row justify-between">
                    <div class="sectionEmails flex flex-col  w-[65%] h-full bg-white rounded-3xl">
                        <h1 class="font-bold text-xl p-6">Recent Emails</h1>
                        <div class=" emailsContainer w-full h-full pt-6 overflow-y-auto ">
                            <div class="msg1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            <div class="msg2 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer ">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            <div class="msg3 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            <div class="msg4 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            <div class="msg5 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            <div class="msg6 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-2">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <div class="date items-end">
                                    <span>Le 12-12-2022</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class=" sectionUsers w-[30%] h-full flex flex-col bg-white rounded-3xl">
                        <h1 class="font-bold text-xl p-6">Recent Users</h1>
                        <div class="usersContainer w-full h-full pt-6 overflow-y-auto">
                            <div class="user1 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="user2 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="user3 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="user4 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="user5 flex flex-row justify-between items-center px-6 mb-6 cursor-pointer">
                                <div class="flex flex-row space-x-3">
                                    <div class=" w-12 h-12 rounded-full overflow-hidden">
                                        <img src="<?= base_url()?>/img/logo.png" class="" alt="profil">
                                    </div>
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold">username</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Uploads flex flex-col  w-full h-[500px] bg-white rounded-3xl">
                    <h1 class="font-bold text-xl p-6">Recent Uploads</h1>
                    <div class=" uploadsContainer w-full h-full pt-6 overflow-y-auto ">
                        <div class="video1 flex flex-row  justify-between px-6 mb-6 cursor-pointer">
                            <div class="flex flex-row  bg-gray-100 space-x-5 w-[80%]">
                                <div class=" w-[25%] h-[150px] rounded-2xl   overflow-hidden">
                                    <img src="<?= base_url()?>/img/2.jpg" class="w-full h-full" alt="profil">
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="font-semibold text-[1.5rem]">Title</h1>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="date items-end">
                                <span>Le 12-12-2022</span>
                            </div>
                        </div>
                        <div class="video1 flex flex-row  justify-between px-6 mb-6 cursor-pointer">
                            <div class="flex flex-row  bg-gray-100 space-x-5 w-[80%]">
                                <div class=" w-[25%] h-[150px] rounded-2xl   overflow-hidden">
                                    <img src="<?= base_url()?>/img/2.jpg" class="w-full h-full" alt="profil">
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="font-semibold text-[1.5rem]">Title</h1>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="date items-end">
                                <span>Le 12-12-2022</span>
                            </div>
                        </div>
                        <div class="video1 flex flex-row  justify-between px-6 mb-6 cursor-pointer">
                            <div class="flex flex-row  bg-gray-100 space-x-5 w-[80%]">
                                <div class=" w-[25%] h-[150px] rounded-2xl   overflow-hidden">
                                    <img src="<?= base_url()?>/img/2.jpg" class="w-full h-full" alt="profil">
                                </div>
                                <div class="flex flex-col">
                                    <h1 class="font-semibold text-[1.5rem]">Title</h1>
                                    <p>Description</p>
                                </div>
                            </div>
                            <div class="date items-end">
                                <span>Le 12-12-2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <span class="font-bold"><center>Admin Dashboard all right reserved teramaflix@2022</center> </span>
                </div>
            </div>
         </div>
    </div>
</body>
</html>