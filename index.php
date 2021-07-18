<!DOCTYPE html>
<html lang="fr">
<?php
require_once("head.html");
require_once("titre.php");
?>

<head>
    <title>Contact Form Tutorial by Bootstrapious.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='contact-form/custom.css' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
require_once("menu.html");
?>
</br>

<div class="about-heading-content">
    <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">    
                <p class="technos"><em>Passionnée de code, j'ai réalisé ce site afin de vous présenter mon parcours, mes compétences, ainsi que quelques réalisations. J'ai utilisé BOOTSTRAP, HTML, SCSS, et PHP pour le développer.</em></p>
                <p class="mb-0"></em></p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl"  href="img/cvLucileChristmann.pdf" download="cv">CV Pdf</a>
                </div>
            </div>
        </div>
    </div>
</br>

<div class="about-heading-content">
   <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5"> 

                <form id="contact-form" method="post" action="contact-form/contact.php" role="form">

                    <div class="messages"></div>

                    <div class="controls">
                    <p class="technos"><em>N'hésitez pas à me contacter !</em></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="technos" for="form_name">Prénom</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Veuillez entrer votre prénom *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="technos" for="form_lastname">Nom</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Veuillez entrer votre nom *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="technos" for="form_email">Email</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Veuillez entrer votre email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        <!--<div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Please specify your need *</label>
                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value=""></option>
                                        <option value="Request quotation">Request quotation</option>
                                        <option value="Request order status">Request order status</option>
                                        <option value="Request copy of an invoice">Request copy of an invoice</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="technos" for="form_message">Message</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Veuillez écrire votre message * " rows="12" required="required" data-error="Please, leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-secondary btn-send" value="Envoyer">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> Champs requis
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->
    </div>
</div>

    

<!--

<a href="https://www.linkedin.com/in/lucile-christmann-962042170/" title="lien" target="_blank">
	  <img 	alt="ln" src="img/ln.png"	
  </a>

  <a href="https://github.com/CHRISTMANNlucile/" title="lien" target="_blank">
	<img class=git	alt="git" src="img/git.png"	
  </a>
-->
 
  </div>
  </div>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    <script src="contact-form/contact.js"></script>
    </br>
    <?php
require_once("footer.html");
?>
</body>
</html>