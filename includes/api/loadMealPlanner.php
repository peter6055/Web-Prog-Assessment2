<?php
include_once "api-header.php";

$total_calories = $_GET['calories'];
$type = $_GET['type'];
// ------------------------------------ Initialize storage --------------------------------------
//for meal that is selected (will be return back)
$array_meal = array();
$array_meal_length = 0;

// array to store calories for each diet
$diet_calories = array();

// array to store calories remain for each diet when calculating
//$diet_remaining_calories = array();

// array to store all the meal from db
$array_meal_local = array();
$array_meal_local_length = 0;

// ------------------------------------ Initialize storage --------------------------------------


// Calculate the amount of calories per diet
// 0:breakfast / 1:lunch / 2:dinner
$diet_calories[0] = $total_calories * 0.3;
$diet_calories[1] = $total_calories * 0.5;
$diet_calories[2] = $total_calories * 0.2;

// ----------------------- Get all the data from DB and store it into a local array -----------------------------
// get all the query back.
$data = $mysqli->query("SELECT * FROM `meal` WHERE `type` = '" . $type . "'");


// decode data and put the meal in local 2d array
while ($data_fetched = $data->fetch_assoc()) {
    $array_meal_local[] = array_values($data_fetched);

    // count array length
    $array_meal_local_length++;
}
// ----------------------- Get all the data from DB and store it into a local array -----------------------------


// ----------------------- Start to find suitable meal for each diet  -----------------------------
// three diet a day
for ($dietCount = 0; $dietCount < 3; $dietCount++) {


    // generate random number, this number is to create different meal every time
    // it will be reset in each diet
    $random = rand(0, $array_meal_local_length-1);


    // the next array inspect will start from a random object/
    // however, if we are not able to get the sutiable object, we will bounce back to the first one
    // thus, if it bounces back once, no second time!
    $isBouncesBack = false;

    // start inquiring the suitable meal detail
    for ($countArray = $random; $countArray < $array_meal_local_length; $countArray++) {

        // for note repeat
        $isMealRepeat = false;

        // check meal reputation if there are some things inside storage array
        if (!empty($array_meal)) {
            // find the is there any repeat meal one by one
            for ($countReaptFinder = 0; $countReaptFinder < $array_meal_length; $countReaptFinder++) {

                // matching id to see the repeat
                if ($array_meal[$countReaptFinder][0] == $array_meal_local[$countArray][0]) {

                    //note
                    $isMealRepeat = true;
                    //end loop
                    $countReaptFinder = 999999999999999999999;
                }
            }
        }

        // if the meal repeat then don't process the add to array feature
        if ($isMealRepeat == false && intval($array_meal_local[$countArray][3]) <= $diet_calories[$dietCount]) {
            // add the meal to storage
            $array_meal[$array_meal_length] = $array_meal_local[$countArray];

            // add a parameter of diet
            $array_meal[$array_meal_length][5] = $dietCount;

//            echo json_encode($array_meal[$array_meal_length]);

            // minus remain cal
            $diet_calories[$dietCount] = $diet_calories[$dietCount] - intval($array_meal[$array_meal_length][3]);

            // increase returned data length
            $array_meal_length++;


        }


        // reaching the last row data and not bounces back before
        // brings it back to first one.
        if ($isBouncesBack == false && $countArray+1 == $array_meal_local_length){
            $isBouncesBack = true;
            $countArray = 0;
        }
    }

}

echo json_encode($array_meal);


// enter array starting from the $random
// check is it repeat before
// minus remain cal


//    // put the meal in each diet to the diet array
//    while() {
//        $array_meal[] = array_values($data_fetched);
//    }
//
//    // put the meal of each diet to the meal array
//    $array_diet[] = array_values($array_meal);

//echo $array_meal_local[0][5];
//echo $array_meal_local_length;


//echo json_encode($array_meal);




// ------ Debug display -------
//        echo "<table border='1'>";
//        echo "<tr> <th>meal_id</th> <th>name</th> <th>type</th> <th>kilojoules</th> <th>image_path</th></tr>";
//        while($data_fetched1 = $data->fetch_assoc()) {
//            // Print out the contents of each row into a table
//            echo "<tr><td>";
//            echo $data_fetched1['meal_id'];
//            echo "</td><td>";
//            echo $data_fetched1['name'];
//            echo "</td><td>";
//            echo $data_fetched1['type'];
//            echo "</td><td>";
//            echo $data_fetched1['kilojoules'];
//            echo "</td><td>";
//            echo $data_fetched1['image_path'];
//            echo "</td></tr>";
//        }
// ------ Debug display -------




