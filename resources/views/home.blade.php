<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/audio-player.css')}}">
    
    <title>Facebook Clone</title>
</head>

<body>
    <nav>
        <div class="nav-left">
            <img src="./images/fb.png" alt="Logo">
            
             
            <input class="search" type="text" placeholder="Search Fac..">
        </div>

        <div class="nav-middle">
            <a href="#" class="active">
                <i class="fa fa-home"></i>
            </a>

            <a href="#">
                <i class="fa fa-user-friends"></i>
            </a>

            <a href="#">
                <i class="fa fa-play-circle"></i>
            </a>

            <a href="#">
                <i class="fa fa-users"></i>
            </a>
        </div>

        <div class="nav-right">
            <span class="profile" style="background-image: url({{asset('images/dp.jpg')}});"></span>

            <a href="#">
                <i class="fa fa-bell"></i>
            </a>

            <div class="hp" style="position: relative;">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
                <div class="he1" style="border-radius: 10px; background-color: #eee; position: absolute; border: 1px solid rgb(255, 255, 255); padding: 5px 10px;">
                    <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <ul style="list-style: none;">
                        <li><input type="submit" value="Logout" style="height: unset;
                            width: unset;
                            color: unset;
                            background: unset;
                            margin: unset;
                            color: #333;
                            border: unset;
                            cursor: pointer;
                            "></li>
                    </ul>
                </form>
                </div>
            </div>
        </div>
    </nav>
    @php
        $user = Auth::user();
    @endphp

    <div class="container">
        <div class="left-panel">
            <ul>
                <li>
                    <span class="profile" style="background-image: url({{asset('images/dp.jpg')}});"></span>
                    <p>{{$user->firstname.' '.$user->lastname}}</p>
                </li>
                <li>
                    <i class="fa fa-user-friends"></i>
                    <p>Friends</p>
                </li>
                <li>
                    <i class="fa fa-play-circle"></i>
                    <p>Videos</p>
                </li>
                <li>
                    <i class="fa fa-flag"></i>
                    <p>Pages</p>
                </li>
                <li>
                    <i class="fa fa-users"></i>
                    <p>Groups</p>
                </li>
                <li>
                    <i class="fa fa-bookmark"></i>
                    <p>Bookmark</p>
                </li>
                <li>
                    <i class="fab fa-facebook-messenger"></i>
                    <p>Inbox</p>
                </li>
                <li>
                    <i class="fas fa-calendar-week"></i>
                    <p>Events</p>
                </li>
                <li>
                    <i class="fa fa-bullhorn"></i>
                    <p>Ads</p>
                </li>
                <li>
                    <i class="fas fa-hands-helping"></i>
                    <p>Offers</p>
                </li>
                <li>
                    <i class="fas fa-briefcase"></i>
                    <p>Jobs</p>
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    <p>Favourites</p>
                </li>
            </ul>

            <div class="footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Advance</a>
                <a href="#">More</a>
            </div>
        </div>


        <div class="middle-panel">

            <div class="story-section">

                <div class="story create">
                    <div class="dp-image">
                        <img src="./images/dp.jpg" alt="Profile pic">
                    </div>
                    <span class="dp-container">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="name">Create Story</span>
                </div>


                <div class="story">
                    <img src="./images/model.jpg" alt="Anuska's story">
                    <div class="dp-container">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <p class="name">Anuska Sharma</p>
                </div>

                <div class="story">
                    <img src="./images/boy.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/dp.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Gaurav Gall</span>
                </div>

                <div class="story">
                    <img src="./images/mountains.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/boy.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Priyank Saksena</span>
                </div>

                <div class="story">
                    <img src="./images/shoes.jpg" alt="Story image">
                    <span class="dp-container">
                        <img src="./images/model.jpg" alt="Profile pic">
                    </span>
                    <span class="name">Pragati Adhikari</span>
                </div>
            </div>

            <div class="post create">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind, {{$user->firstname}} ?" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="fa fa-video"></i>
                        <span>Live video</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-image"></i>
                        <span>Photo/Video</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-smile"></i>
                        <span>Feeling/Activity</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/girl.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Anuska Sharma</p>
                        <span class="time">12 hrs ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Roses are red <br>
                    Violets are blue <br>
                    I'm ugly & you are too😏
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Ramesh GC</p>
                        <span class="time">2 days ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>

                <div class="post-content">
                    Mountains are so cool
                    <img src="images/mountains.jpg" />
                </div>
                
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/boy.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Priyank Saksena</p>
                        <span class="time">1 week ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="post-content">
                    Happy birthday dear
                    <img src="./images/girl_with_light.jpg" alt="Mountains">
                </div>
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-top">
                    <div class="dp">
                        <img src="./images/model.jpg" alt="">
                    </div>
                    <div class="post-info">
                        <p class="name">Pragati Adhikari</p>
                        <span class="time">5 mins ago</span>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="post-content">
                    Hey, everybody! My new shoes are here
                    <img src="./images/shoes.jpg" alt="Shoes">
                </div>
                <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
                    <div class="action">
                        <i class="fa fa-share"></i>
                        <span>Share</span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="right-panel">

            <div class="" style="margin-bottom: 10px;">
                <input onkeyup="search(this)" class="search" style="background-color: white; margin-left: unset;" type="text" placeholder="Search music..">
            </div>
            <h4>Your music player</h4>
            <div id="tracks-container"></div>


            {{-- <div class="pages-section" style="max-height: 500px;">
                <h4>Your music player</h4>
                <div id="tracks-container"></div>
            </div> --}}

            <!-- <div class="friends-section">
                <h4>Friends</h4>
                <a class='friend' href="#">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <p class="name">Henry Mosely</p>
                </a>

                <a class='friend' href="#">
                    <div class="dp">
                        <img src="./images/shoes.jpg" alt="">
                    </div>
                    <p class="name">George</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="./images/boy.jpg" alt="">
                    </div>
                    <p class="name">Aakash Malhotra</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="./images/model.jpg" alt="">
                    </div>
                    <p class="name">Ragini Khanna</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="./images/boy.jpg" alt="">
                    </div>
                    <p class="name">Justin Bieber</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="./images/dp.jpg" alt="">
                    </div>
                    <p class="name">Ramesh GC</p>
                </a>

                <a class="friend" href="#">
                    <div class="dp">
                        <img src="./images/model.jpg" alt="">
                    </div>
                    <p class="name">Sajita Gurung</p>
                </a>
                
            </div> -->
        </div>
    </div>
      
    @include('layouts.include.music')

    {{-- <div id="myPlayer4" class="n-audio-player" data-src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/Swing_Jazz_Drum.mp3" data-size="tiny" data-autoplay="true" data-loop="true"></div> --}}

        
    </body>

    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{asset('js/audio-player.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.1/handlebars.min.js"></script>

    
    <script>
        const tracksTemplateSource = document.getElementById('tracks-template').innerHTML;
        const tracksTemplate = Handlebars.compile(tracksTemplateSource);

        const $tracks = $('#tracks-container');

        // let searchVal = '';
        function search(e){
            // alert($(e).val())
            if ($(e).val() !== '') {
                searchVal = $.get(`https://api.napster.com/v2.2/search/verbose?query=${$(e).val()}&type=track&apikey=ZTk2YjY4MjMtMDAzYy00MTg4LWE2MjYtZDIzNjJmMmM0YTdm`);
    
                searchVal
                .then((response) => {
                    $tracks.html(tracksTemplate(response));
                    console.log(response)
                });
            }else{
                $tracks.html('');
            }
        }
        // const getTopTracks = $.get('https://api.napster.com/v2.2/search/verbose?query=decode&type=track&apikey=ZTk2YjY4MjMtMDAzYy00MTg4LWE2MjYtZDIzNjJmMmM0YTdm');

        
    </script>

</html>
