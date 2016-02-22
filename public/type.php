<?php
echo "test";
if($_POST['id'])
{
    $id=$_POST['id'];
    $types = array(
        [
            "id"=>1,
            "name"=>"test101",
            "parent"=>1
        ],
        [
            "id"=>2,
            "name"=>"test102",
            "parent"=>1
        ],
        [
            "id"=>3,
            "name"=>"test201",
            "parent"=>2
        ],
        [
            "id"=>4,
            "name"=>"test202",
            "parent"=>2
        ]
    );

    for($i=0; $i<4; $i++){
        if($types[$i]["parent"] == $id){
            echo '<option value="'.$types[$i]["id"].'">'.$types[$i]["name"].'</option>';
        }
    }
}
?>