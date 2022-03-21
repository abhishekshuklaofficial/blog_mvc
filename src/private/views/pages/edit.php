<?php
if(!isset($_SESSION['log'])){
    // location(header)
    $this->view('pages/login/header');
    $this->view('pages/login/main');
    $this->view('pages/login/footer');
    die();
}
// echo  "<pre>";
// print_r($data);
// echo "</pre>";
// foreach($data as $val){
//    echo $data->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="update" method="POST">
        <h3 class="ml-5">Post Page ! .</h3>
        <label>Title</label>
        <br>

        <input type="text"  value="<?php echo $data->title; ?>" name="title" id="title">
        <br>
        <input type="hidden" name="idd" value = "<?php echo $data->post_id; ?>">
        <label>Content</label>
        <br>

        <input type="text" placeholder="Content" value="<?php echo $data->content; ?>" name="Content" id="Content">
        <button type="submit"> Post</button>
   
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>