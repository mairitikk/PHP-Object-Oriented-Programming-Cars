 <?php $vehicles =
        [
            ["Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg"],
            ["Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg"],
            ["Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg"]
        ];
    class Vehicle
    {
        var $make;
        var $model;
        var $year;
        var $mileage;
        var $price;
        var $image;
    };
    $vehicle1 = new Vehicle;
    $vehicle1->make = "Astro";
    $vehicle1->model = "Estrella";
    $vehicle1->year = "2021";
    $vehicle1->mileage = 500;
    $vehicle1->price = 50000;
    $vehicle1->image = "veh-01.jpg";

    $vehicle2 = new Vehicle;
    $vehicle2->make = "Terraza";
    $vehicle2->model = "Spinneo";
    $vehicle2->year = "2020";
    $vehicle2->mileage = 30000;
    $vehicle2->price = 31000;
    $vehicle2->image = "veh-02.jpg";

    ?>