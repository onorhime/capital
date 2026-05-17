<?php
ob_start();
require("db.php");
session_start();
$uid = $_SESSION['uid'];
$name = $_SESSION['name'];
$balance = $_SESSION['balance'];

$sql = "SELECT * FROM users WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

$_SESSION['balance'] = $user['0']['balance'];
          
         
          


if (isset($_GET['request']) && $_GET['request'] == 'getcards') {
    $sql = "SELECT * FROM cardrequest WHERE uid = '$uid' AND status = 'approved'";
    $result = mysqli_query($conn, $sql);
    $cards = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $mycards = "";
    if (sizeof($cards) > 0){
        $mycards .= ' <div class="section-title">My Cards</div>';
        foreach ($cards as $card) {
            $mycards .= '
            <div class="card-block '.$card['bg'].' mb-2">
                    <div class="card-main">
                        <div class="card-button dropdown">
                            <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                            <img class="imaged w100" style="padding: 30px;" src="assets/img/loading-icon.png" alt="" srcset="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" id="freeze('.$card['id'].')">
                                    <ion-icon name="pencil-outline" ></ion-icon>Freeze
                                </a>
                                <a class="dropdown-item" href="#" id="delete('.$card['id'].')">
                                    <ion-icon name="close-outline"></ion-icon>Remove
                                </a>
                                <a class="dropdown-item" href="#" id="upgrade('.$card['id'].')">
                                    <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                </a>
                            </div>
                        </div>
                        <div class="balance">
                            <span class="label">BALANCE</span>
                            <h1 class="title">$ '.number_format($_SESSION['balance']).'</h1>
                        </div>
                        <div class="in">
                            <div class="card-number">
                                <span class="label">Card Number</span>
                                ' .str_replace(range(0,9), "•", substr($card['number'], 0, -4)).substr($card['number'], -4). '
                            </div>
                            <div class="bottom">
                                <div class="card-expiry">
                                    <span class="label">Expiry</span>
                                    '.$card['expmonth'].' / '.$card['expyear'].'
                                </div>
                                <div class="card-ccv">
                                    <span class="label">CCV</span>
                                    '.$card['cvv'].'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            ';
        }
    }
    $sql = "SELECT * FROM cardrequest WHERE uid = '$uid' AND status != 'approved'";
    $result = mysqli_query($conn, $sql);
    $pycards = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (sizeof($pycards) > 0){
        $mycards .= ' <div class="section-title">Card Requests</div>';
        foreach ($pycards as $pcard) {
            $mycards .= '
            <div class="card-block '.$pcard['bg'].' mb-2">
            <div class="card-main">
                <div class="balance">
                    <span class="label">Status</span>
                    <h1 class="title">'.$pcard['status'].'</h1>
                </div>
                <div class="in">
                    <div class="card-number">
                        <span class="label">Progress</span>
                        <div class="progress mb-2" style="width: 200px;">
                            <div class="progress-bar" role="progressbar" style="width: '.$pcard['progress'].'%;" aria-valuenow="'.$pcard['progress'].'"
                                aria-valuemin="0" aria-valuemax="100">'.$pcard['progress'].'%</div>
                        </div>
                    </div>
                    <div class="bottom">
                       
                        <div class="card-ccv">
                            <span class="label">address</span>
                            '.$pcard['country'].','.$pcard['city'].'
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }

    if ($mycards == "") {
       $mycards .= '
     
   <div class="card-block bg-dark mb-2">
       <div class="card-main">
           <div class="card-button dropdown">
               <button type="button" class="btn btn-link btn-icon" data-bs-toggle="modal" data-bs-target="#addPhyCardActionSheet">
                   <ion-icon name="add-circle-outline">get</ion-icon>
               </button>
               
           </div>
           <div class="balance">
               <span class="label">Card Type</span>
               <h1 class="title">Apex Capital Mastercard</h1>
           </div>
           <div class="in">
               <div class="card-number">
                   <span class="label">Daily Transaction Limit</span>
                   $10,000,000
               </div>
               
               <div class="bottom">
                   <div class="card-number">
                       <span class="label">Maximum Balance</span>
                       Unlimited
                   </div>
               </div>
           </div>
       </div>
   </div>
   ';
    }
    echo($mycards);

    exit();
}

if (isset($_POST['request']) && $_POST['request'] == 'addphycard'){
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $type = $_POST['type'];
    $zip = $_POST['zip'];
    $date = date("F j, Y, g:i a"); 

    $sql = "SELECT * FROM cardrequest WHERE uid = '$uid'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res)>0) {
        echo 'error';
        exit();
    }


    $sql = "INSERT INTO cardrequest(name, uid, country, city, home, date, bg, type, zip) VALUES('$name', '$uid', '$country','$city', '$address', '$date', '$bg', '$type', '$zip')";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO notifications(amount, type, date, uid, message) VALUES('0.00','card','$date', '$uid', ' mastercard is being processed')";
    mysqli_query($conn, $sql);

    echo 'success';

    exit();
}

$number = $_POST['number'];
$expy = $_POST['expy'];
$expm = $_POST['expm'];
$cvv = $_POST['cvv'];
$pin = $_POST['pin'];
$date = date("F j, Y, g:i a");



$sql = "INSERT INTO cards(uid, number, expyear, expmonth, cvv, pin, date) VALUES('$uid','$number', '$expy','$expm', '$cvv', '$pin', '$date')";
mysqli_query($conn, $sql);
$sql = "INSERT INTO notifications(amount, type, date, uid, message) VALUES('0.00','card','$date', '$uid', 'A new Card was added to your account')";
mysqli_query($conn, $sql);


?>