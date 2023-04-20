<div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form  action="" method="POST">
                        <div class="control-group">
                            <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Votre Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="sujet" class="form-control" id="subject" placeholder="Sujet"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="messages" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Envoyer un message</button>
                        </div>
                    </form>
                </div>
 </div>

 <?php
include("fonction.php");

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['messages']))
{
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $sujet=$_POST['sujet'];
  $messages=$_POST['messages'];
  
 $sql = "INSERT INTO contact (nom, email ,sujet,messages) VALUES (:nom, :email ,:sujet,:messages)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':sujet', $sujet, PDO::PARAM_STR);
    $stmt->bindParam(':messages', $messages, PDO::PARAM_STR);
    $stmt->execute();
    echo"Votre message a été envoyé";

}

?>