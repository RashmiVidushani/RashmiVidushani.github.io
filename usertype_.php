<?

if(isset($_POST['continue'])=="doctor") {

header("Location:corona-free-dark-bootstrap-admin-template-1.0.0\template\pages\ddash\ddash_stat.html"); 

 }

elseif(isset($_POST['continue']) == "individual")

{
   header("Location: corona-free-dark-bootstrap-admin-template-1.0.0\template\pages\idash\idash_stat.html"); 
}

 else{
        header("Location: corona-free-dark-bootstrap-admin-template-1.0.0\template\pages\hdash\hdash_stat.html"); 
}
?>