<?php
namespace App\Controllers;
use App\Models\PostModel;
use App\Models\DashboardModel;
class Dashboard extends BaseController
{
   public $video ;
   public $users;
   public function __construct()
   {
      
       helper(['url', 'Form']);
       
       $this->video= new PostModel();
       $this->users= new DashboardModel();
       $this->session = session();
     
       
   }

public function Accueil(){
      

  $user_recent['video']= $this->users->get_countVideo();
  $user_recent['users']= $this->users->get_count();
  $user_recent['mail_not_read']=$this->users->mail_Read();
  $user_recent['Estime_video']= $this->users->Estime_video();
  $user_recent["Estime_users"]=$this->users->Estime();
  $user_recent['chart']= $this->users->chart_data();
  $messag=$this->users->messages_recent();
  $user_recent['message']=$messag->getResult();
  $use_rec=$this->users->users_recent();
  $user_recent['use']= $use_rec->getResult();
  $video_recent=$this->users->video_recent();
  $user_recent['video_recent']=$video_recent->getResult();
   
  
    return view('dash',$user_recent);  
    }

}


