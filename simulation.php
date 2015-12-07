<?php
include ("top.php");
include ("header.php");
include ("nav.php");

//---------------------------------------------------------------------//
//                                                                     //
//                                                                     //
//                                                                     //                                                                     //
//                             Champion #1                             //
//                                                                     //
//                                                                     //
//                                                                     //
//---------------------------------------------------------------------//

print '<form class = "pure-form pure-form-aligned" id = "formChampionSelect"> ';
print '<fieldset id = "champSelectOne"> ';
print '<legend>Champion #1</legend> ';

//---------------------------------------------------------------------//
//                        Champion #1 Selection                        //
//---------------------------------------------------------------------//

$champion = "Aatrox";

$query = 'SELECT fldChampionName ';
$query .= 'FROM tblChampions ';
$query .= 'ORDER BY fldChampionName';

$champions = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstChampions">Champion Name : ';
print '<select id="lstChampions" ';
print '        name="lstChampions"';
print '        tabindex="300" >';

foreach ($champions as $row) {

    print '<option ';
    if ($champion == $row["fldChampionName"])
        print " selected='selected' ";

    print 'value="' . $row["fldChampionName"] . '">' . $row["fldChampionName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #1                       //
//---------------------------------------------------------------------//

$item = "Amplifying Tome";

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #1 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #2                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #2 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #3                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #3 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #4                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #4 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #5                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #5 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #1 :: Item #6                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #6 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';
print '</fieldset>';



//---------------------------------------------------------------------//
//                                                                     //
//                                                                     //
//                                                                     //                                                                     //
//                             Champion #2                             //
//                                                                     //
//                                                                     //
//                                                                     //
//---------------------------------------------------------------------//




print '<fieldset id = "champSelectTwo"> ';
print '<legend>Champion #2</legend> ';

//---------------------------------------------------------------------//
//                        Champion #2 Selection                        //
//---------------------------------------------------------------------//

$champion = "Aatrox";

$query = 'SELECT fldChampionName ';
$query .= 'FROM tblChampions ';
$query .= 'ORDER BY fldChampionName';

$champions = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstChampions">Champion Name : ';
print '<select id="lstChampions" ';
print '        name="lstChampions"';
print '        tabindex="300" >';

foreach ($champions as $row) {

    print '<option ';
    if ($champion == $row["fldChampionName"])
        print " selected='selected' ";

    print 'value="' . $row["fldChampionName"] . '">' . $row["fldChampionName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #1                       //
//---------------------------------------------------------------------//

$item = "Amplifying Tome";

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #1 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #2                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #2 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #3                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #3 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #4                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #4 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #5                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #5 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';

//---------------------------------------------------------------------//
//                        Champion #2 :: Item #6                       //
//---------------------------------------------------------------------//

$query = 'SELECT fldItemName ';
$query .= 'FROM tblItems ';
$query .= 'ORDER BY flditemName';

$items = $thisDatabase->select($query, "", 0, 1, 0, 0, false, false);

print '<section class = "dropListSec">';

print '<label for="lstItems">Item #6 : ';
print '<select id="lstItems" ';
print '        name="lstItems"';
print '        tabindex="300" >';

foreach ($items as $row) {

    print '<option ';
    if ($item == $row["fldItemName"])
        print " selected='selected' ";

    print 'value="' . $row["fldItemName"] . '">' . $row["fldItemName"];

    print '</option>';
}

print '</select></label>';
print '</section>';
//print '<button type="submit" class="pure-button pure-button-primary">Submit</button>';
print '</fieldset>';


print '</form>';




include ("footer.php");
?>

</body>
</html>