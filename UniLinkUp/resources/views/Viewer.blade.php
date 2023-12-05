<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Viewer</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/Viewer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    
        <!-- header section starts -->
	@include('header')
	<!-- header section ends -->
    

     <div class="container">
        
     <div class="right-container">
            <!-- Right Container Section 1 -->
            <div class="section">
                <div class="welcome">
                 <p><h2>Good Morning!</h2></p>
                    <p>Hi, you have reached UniLinkUP.
                    <br>Glad to see you here.<br> Have a nice day.</p>
                    <img src="{{ asset('storage/images/site images/welcome-image.jpg') }}" alt="Welcome Image">   
                </div>
            </div>
      
            <!-- Right Container Section 2 -->
            <div class="section"> 
               <div class="write-post-container">
                  <div class="post-row">   
                  <div class="user-profile">
                     <img src="{{ asset('storage/images/site images/viewer profile-pic1.JFIF') }}">
                     <div>
                        <p>K.K.Vish <br>Leo Club</p><br>
                        <small>20.10.2</small>
                     </div>
                  </div>

                  <div class="dropdown">
                  <a href="<?=url('')?>"><i class="fa fa-ellipsis-v"></i></a>
                       <div class="dropdown-content">
                       <a href="<?=url('')?>"><i class="fa fa-download"></i>Download</a>
                       <a href="<?=url('')?>">View less</a>
                       <a href="<?=url('')?>">View more</a>
                       </div>
                  </div>
                </div>
               
                  <div class="post-container">
                     <p class="post-text1"><b>T Notice</b></p>
                     <p class="post-text2"><b>*Advance payment* (Rs.1000)</b> for ordering this tshirt can be given to us at your faculty premises from <b>20.11.2023</b> to <b>25.11.2023</b>
                      and for cash deposit deposit the money to the following account number and submit the receipt to us.<br> Ac.No:865734,BOC,S.T.Gunarathna </p>
                      
                     <img src="{{ asset('storage/images/site images/viewer_notice.jpg') }}" class="post-img">

                     <div class="post-row">
                         <div class="activity-icons">
                             <!-- Inside the loop where you display posts -->

    <form action="{{ route('post.unlike', ['postId' => $post->id]) }}" method="POST">
        @csrf
        <button type="submit">Unlike</button>
    </form>

    <form action="{{ route('post.like', ['postId' => $post->id]) }}" method="POST">
        @csrf
        <button type="submit">Like</button>
    </form>


                             <div><i class="fa fa-share"></i>50</div>
                        </div>
                     </div>
                   </div>
               </div>
             </div>

           <!-- Right Container Section 3 -->
         <div class="section">
         <div class="write-post-container">
                  <div class="post-row">   
                  <div class="user-profile">
                     <img src="{{ asset('storage/images/site images/viewer profile-pic2.JFIF') }}">
                     <div>
                        <p>P.G.Rishi<br>Leo Club</p><br>
                        <small>21.10.2023</small>
                     </div>
                  
                  </div>
                   <div class="dropdown">
                  <a href="<?=url('')?>"><i class="fa fa-ellipsis-v"></i></a>
                       <div class="dropdown-content">
                       <a href="<?=url('')?>"><i class="fa fa-download"></i>Download</a>
                       <a href="<?=url('')?>">View less</a>
                       <a href="<?=url('')?>">View more</a>
                       </div>
                  </div>
                  </div>
                                              
                     <div class="post-container"> 
                     <p class="post-text1"><b>Sarasavi Uyana</b></p>
                     <p class="post-text2"> Get ready for a night of pure musical magic at Sarasavi Uyana!<br>
                      Join us under the stars for an unforgettable evening filled with beautiful melodies and heartwarming moments.
                      Save the date and let the music sweep you off your feet!</p>
                       <img src="{{ asset('storage/images/site images/viewer_event.jpg') }}" class="post-img">

                     <div class="post-row">
                         <div class="activity-icons">
                             <div><button><i class="fa fa-star"></i>Interested</button></div>
                             <div><i class="fa fa-share"></i>50</div>
                             <div><i class="fa fa-upload"></i>Upload <br> Photos</div>  
                         </div>
                     </div>
                   </div>
                </div>
             </div>
        
         <!-- Right Container Section 4 -->
         <div class="section">
         <div class="write-post-container">
                  <div class="post-row">   
                  <div class="user-profile">
                    <img src="{{ asset('storage/images/site images/viewer profile-pic2.JFIF') }}">
                     <div>
                        <p>P.G.Rishi <br>Leo Club</p><br>
                        <small>21.10.2023</small>
                     </div>
                  
                  </div>
                   <div class="dropdown">
                  <a href="<?=url('')?>"><i class="fa fa-ellipsis-v"></i></a>
                       <div class="dropdown-content">
                       <a href="<?=url('')?>"><i class="fa fa-download"></i>Download</a>
                       <a href="<?=url('')?>">View less</a>
                       <a href="<?=url('')?>">View more</a>
                       </div>
                  </div>
                  </div>
               
                  <div class="post-container2">
                     <p class="post-text1"><b>Poll Title</b></p>
                     <p class="post-text2"> Small Discription of about poll</p>
                     <br>

                  <div class= "polling">
                        <h3>Polling</h3><br>
                        <div class="poll-option">
                            <label for= "option1"><b> I will participate </label>
                            <progress id="option1" value="10" max="100"></progress>
                            <span>10%</span>
                        </div>
                        <div class="poll-option">
                            <label for= "option2">Not participate</label>
                            <progress id="option2" value="30" max="100"></progress>
                            <span>30%</span>
                        </div>
                        <div class="poll-option">
                            <label for= "option3">May be participate</label>
                            <progress id="option3" value="60" max="100"></progress>
                            <span>60%</span>
                        </div>

                        <div class="post-container"> 
                        <div class="post-row">
                         <div class="activity-icons">
                             <div><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>110</div>
                             <div><i class="fa fa-thumbs-down"></i>20</div> 
                             <div><i class="fa fa-share"></i>50</div>
                         </div>
                     </div>
                    </div>
                  <div>
                </div>
            </div>
        </div>
    </div>
              
    <!-- footer section starts -->
	@include('footer')
	<!-- footer section ends -->            
               
 </body>
</html>               
               