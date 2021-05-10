<?php



require_once ("app.php");
use TechStore\classes\CArt;
$cart=new CArt;
echo $cart->Totel();
print_r($_SESSION['cart']);

$sum=0;
foreach($_SESSION['cart'] as $x) 
{
   $sum+=$x['qty']*$x['price'];
}
echo $sum;

//require_once ("classes/reqest.php");
//require_once ("classes/ss.php");
//require_once ("classes/db.php");
//require_once ("classes/MODELS/prodect.php");
//require_once ("classes/MODELS/order.php");
//require_once ("classes/validtion/validtionRule.php");
//require_once ("classes/validtion/required.php");
//require_once ("classes/validtion/Numeric.php");
//require_once ("classes/validtion/Max.php");
//require_once ("classes/validtion/Email.php");
//require_once ("classes/validtion/Str.php");
//require_once ("classes/validtion/Validitor.php");

   //$reqest=new Request;
//    $sess = new session;
 //  echo     $sess->set('name',   'omar');
 //   echo $sess->get('name');
 //    echo $sess->has('name');
  //print_r($_SESSION);
  //$sess->remove('name');
 //var_dump( $sess->has('name'));

 //print_r($_SESSION);
//echo "kkkkkkkkkkkkk";
//$prod=new product;
//$rst=      $prod->getCount();
//echo '<pre>';
//print_r($rst);
//echo '</pre>';
//$ord=new orders ;
//$rester= $ord->delet(1);
//echo '<pre>';
//var_dump($rester);
//echo '</pre>';
//$v= new Validitor;
/*$v->validate('max','',['required', 'Max']);
//$v->validate('name','',['required','max' ]);
echo '<pre>';
print_r($v->getErrors());
echo '</pre>';
*/
//echo $reqest->get('name');