<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interactive Computer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include 'Program.php';
    global $elements;
?>
    <div class="content-container">
        <h2>Interactive Computer Build</h2>
        <div class="info">
            <h2></h2>
            <div class="detail-info hidden">
                <h3>Role: <span></span></h3>
                <p></p>
            </div>
            <?php include_once 'hand-pointer-svgrepo-com.svg' ?>
        </div>
        <div class="computer-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600">
                <image href="pc.png"/>

                <?php
                for($i = 0; $i < count($elements); $i++) {

                    $name = $elements[$i]->getName();
                    switch ($elements[$i]->getType()) {
                        case 'rect':
                            $cords = $elements[$i]->getCords();
                            $size = $elements[$i]->getSize();
                            echo "
                                <a href='#' title='$name' class='hover'>
                                    <rect x='$cords[0]' y='$cords[1]' width='$size[0]' height='$size[1]' fill='transparent'/>
                                </a>
                            ";
                            break;
                        case 'circle':
                            $cords = $elements[$i]->getCords();
                            $size = $elements[$i]->getSize();
                            echo "
                                <a href='#' title='$name' class='hover'>
                                    <circle cx='$cords[0]' cy='$cords[1]' r='$size' fill='transparent'></circle>
                                </a>
                            ";
                            break;
                        case 'polygon':
                            $points = $elements[$i]->getPoints();
                            echo "
                                <a href='#' title='$name' class='hover'>
                                    <polygon points='$points' fill='transparent' />
                                </a>
                            ";
                            break;
                    }

                }
                ?>


            </svg>
        </div>


    </div>


    <script>
        const hoverElements = document.querySelectorAll(".hover");
        const elementsData = <?php echo json_encode($elements); ?>;

        const info = document.querySelector(".info");
        const infoName = document.querySelector(".info > h2");
        const infoDetail = document.querySelector(".detail-info");
        const infoRole = document.querySelector(".detail-info > h3 > span");
        const infoDesc = document.querySelector(".detail-info > p");


        let clickedStatus = false;

        for(let i = 0; i < hoverElements.length; i++) {
                hoverElements[i].addEventListener("mousemove", (event) => {
                    if(!clickedStatus)
                    {
                        let left = event.offsetX + 20;
                        let top = event.offsetY - 20;

                        infoName.textContent = elementsData[i].name;

                        info.classList.add("visible");
                        info.style.left = left + 'px';
                        info.style.top = top + 'px';
                    }
                })
        }

        for(let i = 0; i < hoverElements.length; i++) {
            hoverElements[i].addEventListener("click", (event) => {
                if(!clickedStatus) {
                    clickedStatus = true;

                    infoRole.textContent = elementsData[i].role;
                    infoDesc.textContent = elementsData[i].description;

                    document.querySelector(".info > svg").classList.add("hidden");
                    infoDetail.classList.remove("hidden");
                } else {
                    clickedStatus = false;
                }

            })
        }

        setInterval(() => {
            if (document.querySelector(".hover:hover") == null && !clickedStatus) {
                info.classList.remove("visible");
            }
            if (document.querySelector(".info > svg.hidden") && !clickedStatus) {
                document.querySelector(".info > svg.hidden").classList.remove("hidden");
                infoDetail.classList.add("hidden");

            }
        }, 100);

    </script>
</body>
</html>
