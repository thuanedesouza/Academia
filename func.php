<?php
$con=mysqli_connect("localhost","root","","loginsystem");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            $customer_name=$_POST['customer_name'];
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type,customer_name)values('$Payment_id','$Amount','$customer_id','$payment_type','$customer_name')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            if(isset($_POST['avaliacao_submit']))
                {
                $Avaliado_id=$row['Avaliado_id'];
                $costumername=$row ['Package_name'];
                $QtdeAvaliacoes=$row['QtdeAvaliacoes'];
                $DataUltima=$row['DataUltima'];
                $IndiceIMC=$row['IMC'];
                $porcentagem=$row['PorctgGordura'];

                $query="insert into Avaliacao(Avaliado_id,Package_name,QtdeAvaliacoes,IMC,PorctgGordura)values
                ('$Avaliado_id','$costumername','$QtdeAvaliacoes','$DataUltima','$IndiceIMC', '$porcentagem')";
                $result=mysqli_query($con,$query);
                if($result)
                {
                echo "<script>alert('Avaliaçao adicionada.')</script>";
                    echo "<script>window.open('admin-panel.php','_self')</script>";
                }   
            } 
 function get_client_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row['docapp'];
      echo "<tr>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}

function get_payment(){
    global $con;

    $query="select * 
            from payment
            inner join package on package.Package_id= payment.customer_id
            ";

    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['Package_name'];
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
        <td>$customer_name</td>
            </tr>";

    }
}

function get_avaliacao_details(){
    global $con;
    $query=
    "select * 
            from Avaliacao
            inner join AvaliacaoDetalhes on 
            AvaliacaoDetalhes.Avaliado_id= Avaliacao.Avaliado_id";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
       
    $Avaliado_id=$row['Avaliado_id'];
    $costumername=$row ['Package_name'];
    $QtdeAvaliacoes=$row['QtdeAvaliacoes'];
    $DataUltima=$row['DataUltima'];
    $IndiceIMC=$row['IMC'];
    $porcentagem=$row['PorctgGordura'];

      echo "<tr>
          <td>$costumername</td>
          <td> $Avaliado_id</td>
            <td>$QtdeAvaliacoes</td>
            <td>$DataUltima</td>
          <td>$IndiceIMC</td>
          <td>$porcentagem</td>
        </tr>";
    }
}

?>



