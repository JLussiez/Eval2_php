<?php
    // Ex1    
    //Opérations de la calculatrice

    /**
     * sum
     *
     * @param  mixed $number1
     * @param  mixed $number2
     * @return void
     */

    function sum($number1,$number2){
        $result = $number1 + $number2;
    }

    /**
     * multiply
     *
     * @param  mixed $number1
     * @param  mixed $number2
     * @return void
     */

    function multiply($number1,$number2){
        $result = $number1 * $number2;
    }

    /**
     * divide
     *
     * @param  mixed $number1
     * @param  mixed $number2
     * @return void
     */

    function divide($number1,$number2){
        $result = $number1 / $number2;
    }

    /**
     * substract
     *
     * @param  mixed $number1
     * @param  mixed $number2
     * @return void
     */

    function substract($number1,$number2){
        $result = $number1 - $number2;
    }

    // Ex2
    //Regex pour vérifier le contenu des inputs

    $regex = '/([0-9]+[,])?[0-9]+g/';

    // Ex3
    //Sanitize le contenu des inputs

    /**
     * validate_number
     *
     * @return void
     */

    function validate_number(){
        $number1_sanitize = filter_var($_POST('first_number'), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $number2_sanitize = filter_var($_POST('second_number'), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        return $number1_sanitize;
        return $number2_sanitize;
    }

    // Ex3
    //Utilisation du regex pour vérifier le contenu des inputs

    /**
     * replace
     *
     * @param  mixed $regex
     * @param  mixed $number1_sanitize
     * @param  mixed $number2_sanitize
     * @param  mixed $replace
     * @return void
     */

    function replace($regex,$number1_sanitize,$number2_sanitize,$replace){
        if (preg_match($regex,$number1_sanitize)){
            $replace = preg_replace("$regex",'<p>.</p>',$replace);
            } elseif (preg_match($regex,$number2_sanitize)) {
            $replace = preg_replace("$regex",'<p>.</p>',$replace);
            }
    }

    // Ex4
    //Erreur si les inputs sont vides  

    /**
     * error
     *
     * @param  mixed $errormsg
     * @param  mixed $number1
     * @param  mixed $number2
     * @return void
     */

    function error($errormsg,$number1,$number2){
        $errormsg = "« Veuillez renseigner deux nombres et choisir un opérateur avant de valider";
        if (empty($number1) || empty($number2)){
            ?><p><?php echo($errormsg);?></p> <?php
        }
    }

    // Ex5
    //Récupération des inputs et de l'opération pour effectuer le calcul  

    /**
     * calculate
     *
     * @param  mixed $number1
     * @param  mixed $number2
     * @param  mixed $operator
     * @return void
     */

    function calculate($number1,$number2,$operator){
        if ($operator = '+'){
            sum($number1,$number2);
        }
    }

    //Ex6
    //Mise en mémoire (dans un cookie) du résultat afin de pouvoir le ré-afficher 

    /**
     * memory
     *
     * @return void
     */
    
    function memory($number1,$number2){
        setcookie($number1,$number2,'', strtotime('1week'));
    }
    
    //Ex7
    //Reset des inputs

    /**
     * resetinput
     *
     * @return void
     */

    function resetinput(){
    }
?>
