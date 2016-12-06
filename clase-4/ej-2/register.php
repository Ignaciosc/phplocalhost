<?PHP
    $version = false;
    if (isset($_GET['versionCorta'])) {

    } else {
        $version = true;
    }
    $paises = [1 => 'Argentina', 2 => 'Brasil', 3 => 'Uruguay', 4 => 'Chile', 5 => 'Bolivia', 6 => 'Paraguay', 7 => 'Peru', 8 => 'Colombia', 9 => 'Venezuela', 10 => 'Ecuador'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
</head>
<body>

    <!-- Form Code Start -->
    <div id='fg_membersite'>
        <form id='register' action='' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php
                    if ($version) { ?>
                <div class='container' style='height:80px;'>
                    <label for='re-password' >Confirmar contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='re-password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php }; ?>
                <select>
                    <?php foreach ($paises as $index => $pais) {
                        echo '<option value=\''.$index.'\'>'.$pais.'</option>';
                    } ?>

                </select><br><br>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->


    </body>
</html>
