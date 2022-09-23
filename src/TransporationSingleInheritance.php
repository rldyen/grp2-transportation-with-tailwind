<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Inheritance Input</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <form 
            action="TransporationSingleInheritanceOutput.php"
            method="get"
            class="flex flex-col justify-center items-center border-solid p-10 pb-[5%] rounded-lg border-2 border-gray-300 ">
        <h3 class="text-[1.9rem] font-bold mt-[3.5%] mb-[5%] text-center">
            Transportation Services (By Land)<br>
            Single Inheritance
        </h3>
            <div class="font-bold text-[1.27rem] mb-[1%]">
                Pickup Location 
            </div>
            <input 
                type="text" 
                name="pickupLocation" 
                class="rounded-md border outline-0 w-96 p-2 sm:w-80 xs:w-64 focus:ring-2 focus:ring-blue border-1 border-gray-400"
                required><br>
            <div class="font-bold text-[1.27rem] mb-[1%]">
                Drop off Location
            </div>
            <input 
                type="text" 
                name="dropoffLocation" 
                class="rounded-md border outline-0 w-96 p-2 sm:w-80 xs:w-64 focus:ring-2 focus:ring-blue border-1 border-gray-400"
                required><br>
            <div class="font-bold text-[1.27rem] mb-[1%]">
                Promo Code
            </div>
            <input 
                type="text" 
                name="promoCodeUsed" 
                class ="rounded-md border outline-0 w-96 p-2 sm:w-80 xs:w-64 focus:ring-2 focus:ring-blue border-1 border-gray-400"
                required><br>
            <input 
                type="submit"
                class="mt-[5%] rounded-md border outline-0 w-96 p-2 sm:w-80 xs:w-64 cursor-pointer font-bold bg-blue-800 text-white focus:ring-2 focus:ring-blue hover:bg-blue-500">
            </div>
 
        </form>
    </div>

</body>
</html>