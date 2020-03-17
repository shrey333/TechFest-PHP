<?php
    if(isset($_SESSION['login'])){
        try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=hammer','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if(isset($_GET['name'])){
            if(strcmp($_GET['name'], 'registerevent')){
                $query = $dbhandler->query("insert into dbapp_event(event_name, problem_statement,event_date, people_required, fees, rules, department_id, img) values(?,?,?,?,?,?,?,?)");
                $query->execute($_POST['event-name'], $_POST['pblmstmt'], $_POST['eventdate'], $_POST['requiredppl'], $_POST['fees'], $_POST['rules'], $_POST['dept'], $_POST['img']);
                $r = $r[0];
                print_r ($r);
            }
            else{
            
            }
        }
        
        }
        catch(PDOException $e){
                echo $e->getMessage();
                die();
        }
    }
    else{
        header("Location: login.php");
    }
    


?>

