<?php
//session_start();

class Articles_Input
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error = $this->error . $key . "is empty!<br>";
            }
        }

        if ($this->error == "") {
            //no error
            $this->create_article($data);
        } else {
            return $this->error;
        }
    }

    public function create_article($data){
        //include("be_connect.php");
        $title = $data['title'];
        $content = $data['content'];
        $source = $data['source'];
        $summary = $data['summary'];
        $user = 1;
        //$user = $_SESSION['urphone_AdminID'];
        $DB = new Database();

        if (isset($_FILES['picture'])){
            $file = $_FILES['picture'];
            $data = file_get_contents($file['tmp_name']);
            move_uploaded_file($file['tmp_name'], 'C:\\xampp\\htdocs\\urphone\\assets\\img\\' . $file['name']);
            $name = $file['name'];
            $query = "INSERT INTO article(ArticleTitle, ArticlePict, ArticleContent, ArticleSource, ArticleSummary, UserID) VALUES ('$title','$name','$content','$source','$summary','$user')";
            $cek = $DB->save($query);
            // if ($cek) {
            //     header("Location: admin_article.php", true, 301);
            // } else {
            //     header("Location: admin_input_article.php", true, 301);
            // }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <?php echo $title; ?>
    <br>
    <?php echo $content; ?>
    <br>
    <?php echo $source; ?>
    <br>
    <?php if (isset($file)) {
        echo $file['name'];} ?>
    <br>
    <?php echo $summary; ?>
    <br>
    <?php 
        foreach ($_SESSION as $key => $value) {
        echo $key;
        echo $value;
        }
    ?>
</body>
</html>