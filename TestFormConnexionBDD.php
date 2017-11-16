<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    <div class="form">
        
        <ul class="tab-group">
          <li class="tab active"><a href="#signup">S'inscrire</a></li>
          <li class="tab"><a href="#login">Se connecter</a></li>
        </ul>
        
        <div class="tab-content">
          <div id="signup">   
            <h1 class=inscrire>S'inscrire</h1>
            
            <form action="/" method="post">
            
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Prenom<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" />
              </div>
          
              <div class="field-wrap">
                <label>
                  Nom<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Entrer un mot de passe<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <button type="submit" class="button button-block"/>S'inscrire</button>
            
            </form>

          </div>
          
          <div id="login">   
            <h1>Se connecter</h1>
            
            <form action="cibleTestConnect.php" method="post">
            
              <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input type="email"required name="email" autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Mot de passe<span class="req">*</span>
              </label>
              <input type="password"required name="pass" autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Mot de passe oublié ?</a></p>
            
            <button type="submit" class="button button-block"/>Se connecter</button>
            
            </form>

          </div>
          
        </div><!-- tab-content -->
        
  </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script  src="js/login.js"></script>

  </body>
</html>
