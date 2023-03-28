<?php
include 'Classes/Circle.php';
include 'Classes/Polygon.php';
include 'Classes/Rect.php';

$elements = [];

$rect = new Rect("Case", "Protection", "The computer case will keep the computer together and protect it from any damage.", [245, 14], [623, 564]);
array_push($elements, $rect);
$rect = new Rect("Motherboard", "The Heart", "The motherboard ties all the computer's components together to make it run as a system.", [310, 128], [276, 342]);
array_push($elements, $rect);
$circle = new Circle("AIO Cooler", "Temperature Control", "This liquid cooler is placed on top of the cpu and will keep your cpu temperatures as low as possible.", [444, 224], 47);
array_push($elements, $circle);
$polygon = new Polygon("GPU", "Graphics Rendering", "The gpu will render all the visual things on your computer.", "610,332 604,324 308,324 292,332 291,378 605,378 611,375");
array_push($elements, $polygon);
$rect = new Rect("RAM", "Memory Storage", "Ram is where your all concurrent memory is stored and managed.", [502, 145], [42, 166]);
array_push($elements, $rect);
$polygon = new Polygon("Cooling Liquid Pump", "Temperature Control", "This tube constantly pumps cooling liquid so that the AIO Cooler can do it's job of cooling the cpu.", "765,50,765,57,758,67,761,72,762,87,760,106,755,133,749,155,739,178,723,201,708,218,688,235,663,254,638,267,613,276,583,283,538,286,484,287,455,285,446,285,441,288,431,288,427,281,431,273,445,274,475,274,527,275,575,270,620,257,658,242,693,215,715,189,731,158,738,134,740,108,741,96,743,81,746,67,748,51");
array_push($elements, $polygon);
$polygon = new Polygon("PSU", "Power Supply", "The psu brings power to your system and makes sure your computers stays turned on.", "611,474 616,499 615,577 274,576 274,485 284,479 289,479 296,475");
array_push($elements, $polygon);
$polygon = new Polygon("Air Coolers", "Temperature Control", "The air coolers will keep your entire computer's temperature controlled.", "291,61 291,91 303,98 316,108 325,113 331,107 380,111 424,109 444,112 463,113 476,109 525,111 567,109 583,113 590,109 598,112 614,109 658,111 705,109 721,113 730,110 741,101 741,62");
array_push($elements, $polygon);

