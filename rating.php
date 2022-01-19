<?php
    require('./config.php');
    
    if(isset($_GET['action']) && $_GET['action'] == 'rat'){
        if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $ra = $_POST['ratt'];
        $re = $_POST['rev'];
        $id = $_GET['id'];
        
        $query = "INSERT INTO `rating`(`review_id`, `user_name`, `user_rating`, `user_review`) VALUES ($id, '$name', $ra, '$re')";
        echo $query;
        mysqli_query($con, $query);    
        //header('location: ./shopping_cart.php');  
        echo "

          				    <script>

                                  alert ('Thank you for your feedback');
                                  window.location.href='shopping_cart.php';

          				    </script>

          				";
        
        }
        
    }  
    ?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="rating_css.css">           
</head>
<body>
<form accept="rating.php" method="POST">
<div class="registration">
Name: <input type="text" name="name"/><br />
Ratings: <input type="text" name="ratt"/><br />
Review: <input type="text" name="rev"/><br />
<input type="submit" name="submit" value=" Submit "/>
</div>
</form>
<div class="search_box">
<h1 id="h"> </h1> 
</div>
<h1>List of Reviews ..</h1>
<table id="cmt">
    <tr>
        <th>Name</th>
        <th>Ratting</th>
        <th>Review</th>
    </tr>
</table>

<script>
        let i = 0;
        var sum=0,count=0;
        idk = document.getElementById('cmt')
         let v = "<?php echo $_GET['id'];?>";
         
        fetch('http://localhost/Software_lab/MedicineHouse/rating_back.php?id='+v)
            .then(response => response.json())
            .then(json => {

                while (i < json['content'].length) {
                    count++;
                    let x = idk.insertRow(i+1)
                    x.insertCell().innerHTML = json['content'][i]['user_name'];
                    x.insertCell().innerHTML = json['content'][i]['user_rating'];
                    x.insertCell().innerHTML = json['content'][i]['user_review'];
                    sum += parseFloat( json['content'][i]['user_rating']);
                    
                    
                    i++;
                    
                }
                
               
                console.log(sum);
                var s = sum/count;
                console.log(s);
                document.getElementById('h').innerHTML ="Average Rating: "+s;
                //console.log(ceil(sum/count)/5);
            })
</script>

</body>
</html>