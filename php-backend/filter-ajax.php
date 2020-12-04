<?php
// re-run the query
include "filter-populator.php";

while ($row = mysqli_fetch_assoc($font_list)) {
    // link filter-font-block to the respective font-family page here
    // grab the number of the family id, pass it into a page
    echo '<a href="font-family-page.php?varname= '.$row['family_id'] .' .  "class="filter-font-block">';

    // echo '
    // <div class="filter-font-bookmark">
    //     <p></p>
    //     <div class="filter-font-bookmark-row">
    //         <form>
    //             <input type="checkbox" id="filter-favorites" name="filter-favorites"></input>
    //         </form>
    //         <img src="../assets/img/star-filled.png" alt="star">
    //     </div>
    // </div>';
    
    // display contents of code here
    echo '
    <div class="filter-font-block-text">
        <h6 class="h7">4 STYLES</h6>
        <h1 style="font-family: ;">
        ' . $row['family_name'] . '
        </h1>
        <h6 class="h7">Designed by <span> 
        ' . $row['display_name'] . '
            </span></h6>
    </div>
    <div class="filter-font-tags-container">';

        $tags_string = $row['font_type'];

        // Assign Associative Array into a variable
        $tags_arr = (explode(",", $tags_string));

        // Get Associate Array Size for For Loop
        $tag_array_size = sizeof($tags_arr);

        // check how large the array is.
        // echo "$typeArraySize";

        // display font-tags dynamically with for loop
        for ($x = 0; $x < $tag_array_size; $x++) {
            $tag_txt = $tags_arr[$x];
            echo '<div class="filter-font-tags">
            <img src="../assets/img/tag-lines.png" alt="no tag lines">
            <h6> ' . $tag_txt . ' </h6>
        </div>';
        }
        echo'</div>';
        // reroute each of the font-family blocks to a font-family page
    }

// }
?>