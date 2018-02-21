<?php


?>


<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FormulairePHP</title>
<style>


h1
{
font-family: 'Helvetica', sans-serif;
font-size: 30px;
text-transform: uppercase;
color: #216182;
}



.body {
    display:block;
    margin:0 auto;
    width:576px;
    font-family: 'Helvetica', sans-serif;
    font-size: 16px;
    color: #999;
}



label 
{
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}


form 
{
    margin:0 auto;
    width:459px;
}


input, textarea, file {
    width:439px;
    height:27px;
    background-color:#efefef;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
}

    input:focus, textarea:focus {
        border:1px solid #97d6eb;
    }


textarea 
{
    height:213px;
    background-color: #efefef;
}


#submit {

    color: #216182;
    width:127px;
    height:48px;
    text-align: center;
    
    border:none;
    margin-top:20px;
    cursor:pointer;
}


#submit:hover {
    color:white;
    background-color: #216182;
    opacity:0.9;
}
.radio {
   display: inline-block;
   width:100%;
   width: 50px;
}

</style>

</head>



  


    <section class="body">
    
        <form action="core/request.php" method="post">
            
            <h1 class="title">Contact</h1>
            
           
       
       <input class="radio" type="radio" name="sex" value="M" id="monsieur" /> <label class="radio" for="monsieur">M</label>
       <input class="radio" type="radio" name="sex" value="Mm" id="madame" /> <label class="radio" for="madame">Mme</label>
       <input class="radio" type="radio" name="sex" value="Mle" id="mademoiselle" /> <label class="radio" for="mademoiselle">Mlle</label>
      

            <label></label>
            <input id="id_prenom" name="id_prenom" placeholder="First Name"></input>

            <label></label>
            <input id="id_nom" name="id_nom" placeholder="Second Name"></input>
            
            
            <label></label>
            <input id="id_email" name="id_email" placeholder="Your Email"></input>

            <label></label>
            <input id="id_sujet" name="id_sujet" placeholder="Subject"></input>
                    
            
            <label></label>
            <textarea id="id_message" name="id_message" cols="20" rows="5" placeholder="Message"></textarea>
            
                        
           
                    
            <input type="submit" id="submit" name="submit" value="Submit"></input> 
            
        </form>

    </section>

        
        




</html>
