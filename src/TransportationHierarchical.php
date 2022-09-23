<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hierarchical Inheritance</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
    
    <?php
    class PublicUtilityJeepneys {
        // Attributes
        public $minimumFare;
        public $capacity;
        private $route_range;
        private $company;
        
        // Methods
        function set_route_range($route_range) {
            $this->route_range = $route_range;
        }
        function get_route_range() {
            return $this->route_range;
        }

        function set_company($company) {
            $this->company = $company;
        }
        function get_company() {
            return $this->company;
        }
        
        function compute_total_fare($minimumFare, $kilometer, $succeedingFare){
            $totalFare = $minimumFare + ($kilometer * $succeedingFare);
            echo "Minimum Fare: " . $minimumFare . "<br>";
            echo "Additional Kilometers Travelled: " . $kilometer . "<br>";
            echo "Succeeding Fare per km: " . $succeedingFare . "<br>";
            echo "Total Fare: " . ceil($totalFare) . "<br>";
        }

        function available_seats($capacity, $passengers){
            $seatsAvail = $capacity-$passengers;
            echo "Available seats are: " . $seatsAvail;
        }
      }

    class TraditionalPUJ extends PublicUtilityJeepneys{
        // Attributes
        private $diesel_engine; 
        private $service_type;
        private $entrance_type;

        // Methods
        function __construct($diesel_engine, $service_type,$entrance_type) {
                $this->diesel_engine = $diesel_engine;
                $this->service_type = $service_type;
                $this->entrance_type = $entrance_type;
        }

        function set_diesel_engine($diesel_engine) {
            $this->diesel_engine = $diesel_engine;
        }
        function get_diesel_engine() {
            return $this->diesel_engine;
        }

        function set_service_type($serviceType) {
            $this->serviceType = $serviceType;
        }
        function get_service_type() {
            return $this->serviceType;
        }

        function set_entrance_type($entranceType) {
            $this->entranceType = $entranceType;
        }
        function get_entrance_type() {
            return $this->entranceType;
        }

        function display_traditional_attributes() {
            echo "Dieseal Engine Used: " .  $this->diesel_engine;
            echo "<br>";
            echo "Service Type: " .   $this->service_type;
            echo "<br>";
            echo "Entrance Type: " .  $this->entrance_type;
        }
    }
    class ModernPUJ extends PublicUtilityJeepneys{
        // Attributes
        private $airconditioned;
        private $brand_model; 
        private $powered_by;

        // Methods
        function __construct($airconditioned, $brand_model,$powered_by) {
            $this->airconditioned = $airconditioned;
            $this->brand_model = $brand_model;
            $this->powered_by = $powered_by;
        }
        function set_airconditioned($airconditioned) {
            $this->airconditioned = $airconditioned;
        }
        function get_airconditioned() {
            return $this->airconditioned;
        }

        function set_brand_model($brand_model) {
            $this->brand_model = $brand_model;
        }
        function get_brand_model() {
            return $this->brand_model;
        }

        function set_powered_by($powered_by) {
            $this->powered_by = $powered_by;
        }
        function get_powered_by() {
            return $this->powered_by;
        }
    
        function display_modern_attributes() {
        echo "Ventilation: " . $this->airconditioned;
        echo "<br>";
        echo "Brand Model: " .  $this->brand_model;
        echo "<br>";
        echo "Powered By: " . $this->powered_by;
        }
    }
    ?>

    <div class="flex flex-col items-center justify-center h-screen">
        <div class="flex flex-col justify-center items-center border-solid p-10 pb-[5%] rounded-lg border-2 border-gray-300 ">

        <h3 class="text-[1.9rem] font-bold mb-[2%] text-center">
            Transportation Services (By Land)<br>
            Hierarchical Inheritance
        </h3>
    
        <h3 class="font-bold text-[1.5rem] mt-[5%] mb-[5%]">Modern Jeepney</h3>
            <div class="text-[1rem] font-bold text-center rounded-md border outline-0 border-1 border-gray-400 w-96 p-2 sm:w-80 xs:w-64 bg-gray-100 hover:bg-gray-200">
                <?php
                $modern_1 = new ModernPUJ("Aircon", "Hino XU343", "Electricity");
                echo $modern_1->available_seats(10,8);
                echo "<br>";
                echo $modern_1->display_modern_attributes();
                echo "<br>";
                echo $modern_1->compute_total_fare(13, 5, 1.80);
                ?>
            </div>

        <h3 class="font-bold text-[1.5rem] mt-[5%] mb-[5%]">Traditional Jeepney</h3>
            <div class="text-[1rem] font-bold text-center rounded-md border outline-0 border-1 border-gray-400 w-96 p-2 sm:w-80 xs:w-64 bg-gray-100 hover:bg-gray-200">
                <?php
                $traditional_1 = new TraditionalPUJ("Isuzu 4BA1", "Commuters","Open Entrance");
                echo $traditional_1->available_seats(20,8);
                echo "<br>";
                echo $traditional_1->display_traditional_attributes();
                echo "<br>";
                echo $traditional_1->compute_total_fare(11, 5, 1.50);
                ?>
            </div>
        </div>
    </div>
</body>
</html>