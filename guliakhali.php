<!DOCTYPE html>
<html>
<head>
    <title>Guliakhali sea beach</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <Title>
        Make a Navigation Bar
    </Title>
    <style type=text/css>
        nav{
            position: static;

        }
        header {
            background-color: rgb(35, 33, 33);
            position: static;
            left: 0;
            right: 0;
            top: 0px;
            height: 30px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
        }
        header * {
            display: inline;

        }
        header li {
            margin: 5px;

        }
        header li a {
            color: #00ffff;
            text-decoration: none;
        }
    </style>


</head>
<body>
<header> <nav>
        <ul>
            <li>
                <a href="index.html"> <h3><font size="3px"> Home <h3></a>
            </li>
            <li>
                <a href="exp_show.php"> Experience </a>
            </li>
            <li>
                <a href="#"> </a>
            </li>
            <li> <a href="#">  </a>
            </li>
            <li>
                <a href="chittagong_land.php"> Back to the previous page </a>
            </li>
        </ul>
    </nav>
</header>

<section class="my-5">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <div class="container"><br><br><br><br><br>
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=3 and place_id=0 ";
                    $query = $mysqli -> query($sql);
                    $rowcount=mysqli_num_rows($query);


                    ?>



                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
                    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                            for($i=1;$i<=$rowcount;$i++)
                            {
                                $row=mysqli_fetch_array($query);

                                ?>

                                <?php
                                if($i==1)
                                {
                                    ?>
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="<?php echo $row["image"] ?>" alt="First slide" width="100%">
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php echo $row["image"] ?>" alt="First slide" width="100%">
                                    </div>

                                    <?php
                                }
                            }
                            ?>


                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>




                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <h1 class="display-6"> <font size= 30px>Guliakhali Sea Beach/গুলিয়াখালি সমুদ্র সৈকত</h1>
                <h3> Guliakhali Sea Beach is located in Sitakundo Upazila in the Chittagong district. The beach is also known as Muradpur Beach to the locals.
                    It is only 5 km from Sitakundo Bazar to Guliakhali Sea Beach. This beach is unique because it has seawaters on one side and a forest of trees (Keora) on the other.
                    Here is an environment like the Swamp Forest and Mangrove Forests. The vast grass of the green carpet has given a difference to Guliakhali beach.
                    The open wilderness of green grass along the sea will surely make your eyes open. This field of green grass next to the beach has naturally woken up to small curved drains.
                    These drains are filled with water during the tide. The green grass around and the water-filled scene in the small drains in the meantime will impress anyone.
                    There are fewer people on this little-known beach so that you can expect a serene atmosphere.
                    Even if there aren’t so many waves or roars of the ocean, this quiet beach will catch you differently. If you want, you can travel to the sea in a boat of fishers. In this case, you’ll have to negotiate with local fishers before. Being very close to Sitakundo, even after seeing Guliakhali beach, you will have some remaining time on hand. At this time you can visit many other places around Sitakundo if you want.

                    <br>


            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Transport:: </h1>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <h3>
                    Since this beach is in Sitakundo, you have to come to Shitakundo first. You can come to Sitakundo from Dhaka or Chittagong in various ways.
                    Sitakundo to Guliakhali
                    You can take CNG/auto from the Sitakundo bus stand and go to Guliakhali beach dam. The CNG fare is 30 taka per person to Guliakhali beach dam, but if you want to take an auto reserve, it will take 150-200 taka.
                    Don’t forget to bargain before fixing.
                    To return to Shitakundo after visiting the beach, you can take the contact number of the CNG.
                    Or you can reserve the CNG up-down. Usually, getting cng to come back in the evening is tough as there is less CNG available at that time.


                    __________________________________________<br>
                    __________________________________________
                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14734.378793062924!2d91.61738172783042!3d22.5942572627445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acccc4832584ab%3A0x476bcf2a4d53461c!2sGuliakhali%20Sea%20Beach!5e0!3m2!1sen!2sbd!4v1650642422896!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            There is no arrangement for food at Guliakhali Sea Beach. There is only a small shop on the beach, so take food from Sitakundo Market if necessary.
            If you want to stay, you can stay at Simon and Saudia Hotels in Sitakundo Bazaar.
            You will get rooms at Tk. 300 to Tk.600 in Simon, and you have to count Tk. 600 to Rs. 1600 to get rooms in Saudia. You can call 01991-787979, 01816-518119 to book.
            If you want to stay somewhere better, you have to go to Chittagong.

        </h3>

    </div>
</section>
<section class="my-5">
<div class="py-5">
    <h1 class="text-left"> Advice: </h1>
</div>
<div class="container-fluid">
    <h3>
        Seek the help of tourist police if necessary to make travel safer.<br>
        Do not litter the travel area with dirt.<br>
        Be aware of cleanliness yourself and try to make others aware.<br>
        Find out when the tide is high. It’s better not to be near the beach when it’s high tide.<br>
        When the waves of water increase, immediately leave the beach.<br>
        And during the tide, the water rises, and the drains are full. Then you may face problems crossing.<br>
        And since it is not a tourist-friendly beach, be careful about landing in the sea. Never go too far if you don’t know how to swim.<br>

    </h3>

</div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearest Police Station</h1>
    </div>

    <div class="container-fluid">
        <h3>   <?php
            $conn=mysqli_connect("localhost","root","","safari"); //database connection
            //hostname, username, password, database name
            if ($conn) {
                echo "";
            }else{
                echo "Error";
            }
            //check database connect or not
            $query="select * from sylhet";
            $connect=mysqli_query($conn,$query);
            $num=mysqli_num_rows($connect); //check in database any data have or not
            ?>

            <?php
            if ($num>0) {
                while($data=mysqli_fetch_assoc($connect)){
                    echo "  
                               <tr>  
                               <td>".$data['nearest_police_station']."</td>                        
                               </tr>  
                          ";
                }
            }
            ?>
        </h3>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Watch vlogs</h1>
    </div>
    <div class="container-fluid">
        <a href="https://www.youtube.com/watch?v=k7RZ-pVjqDk"><font size=5px><b>click here</b></a>

    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> More places....</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/sajek%20chitta.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >sajek valley</h2>
                                    <br>
                                    <a href="sajek.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/cox.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >Cox Bazaar</h2>
                                    <br>
                                    <a href="cox's%20bazar.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>




</section>


<style>

    h3{
        font-family:SansSerif;
        color: snow;
        font-size: 20px;
        font-palette: dark;
        font-style: inherit;
        font-stretch: expanded;
        letter-spacing:2px ;
        line-height: 3rem;




    }

    h1{
        font-family: "Cambria Math";
        font-size: 25px;
        font-palette: dark;
        font-style: inherit;
        text-shadow: 1px 1px 0px #0c0b0b,
        2px 2px 0px #306681;
        color: rgb(0, 255, 255);

        text-transform: capitalize;
    }
    body{
        background-color: #232121;
    }


    /* The element to apply the animation to */

    .btn btn-primary{

        height: 50em;
        width: 3em;


    }


</style>


<a href="exp_show.php"><h1>  Do you want to share your experience?</h1> </a>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


