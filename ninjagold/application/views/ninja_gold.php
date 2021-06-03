<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ninja Gold Game</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
            .text-score{
                position: absolute;
                top: 0;
            }
            .your-score{
                margin: 27px 170px 0px;
                height: 31px;
                width: 125px;
                border: 2px solid black;
            }
            section{
                margin: 15px 15px;
                padding: 15px;
                height: 605px;
            }
                .container-cont{
                    margin: 15px auto 0;
                    width: 1200px;
                    text-align: center;
                }
                    .container{
                        height: 235px;
                        width: 250px;
                        border: 2px solid black;
                        margin: 23px;
                        display: inline-block;
                        text-align: center;
                    }
                        h2, h3, input{
                            margin:30px; 
                        }
                        .button{
                            cursor: pointer;
                            border: 2px solid black;
                            padding: 5px;
                            box-shadow: black 3px 3px;
                        }
                    h5{
                        margin-bottom: 5px;
                        display: flex;
                    }
                    .activity-area{
                        width: 100%;
                        height: 250px;
                        border: 2px solid black;
                        overflow: auto;
                    }
                    .p1{
                        color: green;
                    }
                    .p2{
                        color: red;
                    }
                    
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    </head>
    <body>
        <h2 class="text-score">Your Gold:</h2>
        <h2 class="your-score">
        <?php
            if($this->session->userdata('score')){
                echo $this->session->userdata('score');
            }
        ?> 
        </h2>
    
        <section>
            <div class="container-cont">
                <div class="container">
                    <h2>Farm</h2>
                    <h3>(earns 10-20 golds)</h3>
                    <form action="ninja/process_money" method="post">
                        <input type="hidden" name="farm_gold" value="farm" />
                        <input class="button" type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="container">
                    <h2>Cave</h2>
                    <h3>(earns 5-10 golds)</h3>
                    <form action="ninja/process_money" method="post">
                        <input type="hidden" name="cave_gold" value="cave" />
                        <input class="button" type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="container">
                    <h2>House</h2>
                    <h3>(earns 2-5 golds)</h3>
                    <form action="ninja/process_money" method="post">
                        <input type="hidden" name="house_gold" value="house" />
                        <input class="button" type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <div class="container">
                    <h2>Casino!</h2>
                    <h3>(earns 0-50 golds)</h3>
                    <form action="ninja/process_money" method="post">
                        <input type="hidden" name="casino_gold" value="casino" />
                        <input class="button" type="submit" value="Find Gold!"/>
                    </form>
                </div>
                <h5>Activities:</h5>
                <div class="activity-area">
                    <?php
                    if($this->session->userdata('logs')){
                        foreach($this->session->userdata('logs') as $log){
                            echo $log. '<br>';
                        }
                    }
                    ?>
                </div>   
            </div>
            <form action="ninja/reset" method="post">
            <input class="button" type="submit" value="Reset"/>
        </form>
        </section>


        <script>
        $(document).ready(function(){
            $(".activity-area").animate({scrollTop: $('.activity-area').prop("scrollHeight")}, 1);
        })
        </script>            
    </body>
</html>