<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amsterdam Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="height: 100vh">
    <h2 class="text-center">Interactive Amsterdam Map</h2>

    <div class="container h-75 position-relative align-items-center d-flex justify-content-center">

        <div class="map-wrap" style="transform: scale(0.65);">
            <div class="pop-up position-absolute bottom-0 top-0 end-0 start-0 bg-secondary m-4 p-5 invisible" style="cursor: pointer;">
                <h1 class="name" style="font-size: 9rem"></h1>
                <p class="description" style="font-size: 3rem"></p>
            </div>

            <img src="ezgif-2-8f97ace78f.jpg" usemap="#image-map">

            <map name="image-map">

        <?php
        include 'locations.php';
        global $locations;

            foreach ($locations as $location) {
                echo "
                    <area target='' onclick='popUp($location->id)' alt='$location->name' title='$location->name' href='#' coords='$location->cords' shape='rect'>
                ";
            }

        ?>
            </map>
        </div>
    </div>
    <script>

        const nameDiv = document.querySelector(".name");
        const descriptionDiv = document.querySelector(".description");
        const popup = document.querySelector(".pop-up");
        const locations = <?php echo json_encode($locations); ?>;

        function popUp(id) {
            console.log(id);
            let name;
            let description;

            for(let i = 0; i < locations.length; i++) {
                if(locations[i].id == id) {
                    name = locations[i].name;
                    description = locations[i].description;
                }
            }
            nameDiv.textContent = name;
            descriptionDiv.textContent = description;
            popup.classList.remove("invisible");
        }

        popup.addEventListener('click', (e) => {
            popup.classList.add("invisible");
        })

    </script>
