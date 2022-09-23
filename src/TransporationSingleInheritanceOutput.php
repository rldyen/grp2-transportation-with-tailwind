<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Inheritance Output</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
    <?php
        class Angkas{
            private $riderName;
            private $vehicleModel;
            private $vehicleColor;
            private $plateNumber;

            public function setRiderName($riderName){
                $this->riderName = $riderName;
            }
            public function getRiderName(){
                return $this->riderName;
            }

            public function setVehicleModel($vehicleModel){
                $this->vehicleModel = $vehicleModel;
            }
            public function getVehicleModel(){
                return $this->vehicleModel;
            }

            public function setVehicleColor($vehicleColor){
                $this->vehicleColor = $vehicleColor;
            }
            public function getVehicleColor(){
                return $this->vehicleColor;
            }

            public function setPlateNumber($plateNumber){
                $this->plateNumber = $plateNumber;
            }
            public function getPlateNumber(){
                return $this->plateNumber;
            }

            public function randRiderName(){
                $arrRiderName = array("a"=>"Juan Dela Cruz", 
                                "b"=>"Cameron Collins Romero", 
                                "c"=>"Wilburn Hintz",   
                                "d"=>"Brant Herzog", 
                                "e"=>"Larry Deckow");
                shuffle($arrRiderName);
                return $arrRiderName[0];
            }

            public function randVehicleModel(){
                $arrVehicleModel = array("a"=>"Yamaha Nmax", 
                                    "b"=>"Yamaha Sniper 155", 
                                    "c"=>"Yamaha Mio Sporty 115", 
                                    "d"=>"Yamaha YTX 125", 
                                    "e"=>"Yamaha TFX-150");
                shuffle($arrVehicleModel);
                return $arrVehicleModel[0];
            }

            public function randVehicleColor(){
                $arrVehicleColor = array("a"=>"Black",
                                    "b"=>"White",
                                    "c"=>"Blue",
                                    "d"=>"Red",
                                    "e"=>"Green");
                shuffle($arrVehicleColor);
                return $arrVehicleColor[0];
            }

            public function randPlateNumber(){
                
                $finalPlateNumber = "";
                $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $alphaMaxLength= 3;
                $alphabet_length = strlen($alphabet);
                $numerical = "0123456789";
                $numMaxLength= 3;
                $numericalLength = strlen($numerical);

                for ($i = 0; $i < $alphaMaxLength ; $i++) {
                    $alphabetSelector = rand(0,$alphabet_length-1);
                    $finalPlateNumber .= substr($alphabet, $alphabetSelector, 1);
                }
                
                $finalPlateNumber .= " ";
                for ($i = 0; $i < $numMaxLength; $i++){
                    $numericalSelector = rand(0,$numericalLength-1);
                    $finalPlateNumber .= substr($numerical, $numericalSelector, 1);
                }

                return $finalPlateNumber;
            }
    }

        class Booking extends Angkas{
            private $pickupLocation;
            private $dropoffLocation;
            private $promoCodeUsed;

            public function setPickupLocation($pickupLocation){
                $this->pickupLocation = $pickupLocation;
            }
            public function getPickupLocation(){
                return $this->pickupLocation;
            }

            public function setDropoffLocation($dropoffLocation){
                $this->dropoffLocation= $dropoffLocation;
            }
            public function getDropoffLocation(){
                return $this->dropoffLocation;
            }

            public function setPromoCodeUsed($promoCodeUsed){
                $this->promoCodeUsed = $promoCodeUsed;
            }
            public function getPromoCodeUsed(){
                return $this->promoCodeUsed;
            }

            public function displayBookingDetails($pickupLocation, $dropOffLocation, $promoCodeUsed){
                echo "Pickup Location: " . $pickupLocation . "<br>" .
                    "Drop off Location: " . $dropOffLocation . "<br>" .
                    "Promo Code: " . $promoCodeUsed . "<br>";
            }
            public function displayRiderDetails($riderName,$vehicleModel,$vehicleColor,$plateNumber){
                echo "Rider Name: " . $riderName . "<br>" .
                    "Vehicle Model: " . $vehicleModel . "<br>" .
                    "Vehicle Color: " . $vehicleColor . "<br>" .
                    "Plate Number: " . $plateNumber . "<br>";
            }

        }
        ?>

        <?php
        if(isset($_GET['pickupLocation'])){
            $pickupLocation = $_GET['pickupLocation'];
        }

        if(isset($_GET['dropoffLocation'])){
            $dropoffLocation = $_GET['dropoffLocation'];
        }

        if(isset($_GET['promoCodeUsed'])){
            $promoCodeUsed = $_GET['promoCodeUsed'];
        }

        ?>
        <div class="flex flex-col items-center justify-center h-screen">
            <div class="flex flex-col justify-center items-center border-solid p-10 pb-[5%] rounded-lg border-2 border-gray-300 ">
                <h3 class="text-[1.9rem] font-bold mb-[2%] text-center">
                    Transportation Services (By Land)<br>
                    Single Inheritance
                </h3>
                <h3 class="font-bold text-[1.5rem] mt-[5%] mb-[5%]">Booking details</h3>

                <div class="text-[1rem] font-bold mb-[2%] text-center rounded-md border outline-0 border-1 border-gray-400 w-96 p-2 sm:w-80 xs:w-64 bg-gray-100 hover:bg-gray-200">
                    <?php
                    $booking1 = new Booking();
                    $booking1->setPickupLocation($pickupLocation);
                    $booking1->setDropoffLocation($dropoffLocation);
                    $booking1->setPromoCodeUsed($promoCodeUsed);
                    $booking1->displayBookingDetails($booking1->getPickupLocation(),
                                                        $booking1->getDropoffLocation(),
                                                        $booking1->getPromoCodeUsed());
                    ?>
                </div>

                <h3 class="font-bold text-[1.5rem] mt-[5%] mb-[5%]">Rider Details</h3>

                <div class="text-[1rem] font-bold text-center rounded-md border outline-0 border-1 border-gray-400 w-96 p-2 sm:w-80 xs:w-64 bg-gray-100 hover:bg-gray-200">
                <?php
                    $booking1 = new Booking();
                    $booking1->setRiderName($booking1->randRiderName());
                    $booking1->setVehicleModel($booking1->randVehicleModel());
                    $booking1->setVehicleColor($booking1->randVehicleColor());
                    $booking1->setPlateNumber($booking1->randPlateNumber());
                    $booking1->displayRiderDetails($booking1->getRiderName(),
                                                    $booking1->getVehicleModel(),
                                                    $booking1->getVehicleColor(),
                                                    $booking1->getPlateNumber());
                ?>
                </div>
        </div>
    </div>
</body>
</html>