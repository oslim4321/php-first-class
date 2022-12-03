<?php 
        /* String */
    // define('NAME', "sooto");
    // $name = 'selim';
    // $stringOne = 'i love coding';
    // $stringTwo = 'adewaleselim@gmail.com';
    // echo $stringOne . $stringTwo;
    // echo "hey i am selim and $stringOne you can contact me at $stringTwo";
    // echo "osli screames \"wow\""
    // echo $stringTwo;
    // echo strlen($stringOne);
    // echo strtoupper($stringOne);
    // echo str_replace('love', 'hate', $stringOne)

    /* NUMBER INTERGER */
    // $radius = 40;
    // $pi = 23.4;
    // echo $radius * $pi;
    // echo ceil($pi);
    /* bodmass */
    // echo 4 * (3 + 5) / 3;
    /* increment and decrement */
    // echo $radius* 20; 
    // echo $radius = $radius + 80;
    // $radius ++;
    // echo $radius;

    /* ARRAY */
    // $arr = ['selim', 'samad','semiat', 'sultan'];
    // $num = [30, 29,50, 50];
    // echo print_r($arr);
    // echo $arr[1]
    // $arr[1] = 2000;
    // print_r($arr)
    // $arr[] = 'codingIsHard';
    // print_r($arr);

    // array_push($arr, 'okCodingIsEasy');

    // print_r($arr);
    // echo count($arr)

    /* MERGE ARRAY */
    // $merge = array_merge($arr, $num);
    // print_r($merge);

    /* LOOPS */
    $arr = ['selim', 'samad','semiat', 'sultan'];
    // for ($i=0; $i < count($arr); $i++) { 
    //     echo $arr[$i] . '<br />';
    // }
    // foreach ($arr as $key => $value) {
    //    echo $key . 'is' . $value . "<br />";
    // };

    $products= [
        ['title' => 'lolipop', 'price' => 20],
        ['title' => 'sweet', 'price' => 10],
        ['title' => 'bicscults', 'price' => 60],
    ];

   $name = 'selim';
   $career = 'web deveoper';

   echo "this is mr $name he is a $career";

    function Sayhello(){
        echo "<h1>" . 'hi selim' . "</h1>";
    };
    Sayhello();
    
   function getProd($product){

    return "{$product['title']} cost $ {$product['price']} to buy";

   }
  $formated =  getProd( ['title' => 'lolipop', 'price' => 20],);



   $caree = 'samad';
//    function start(){
//     global $caree;
//     $caree = 'this is good';
//     echo $caree;
//    }
//    start();

    function Bye(&$nam){
        $nam = 'ki lode'; 
        echo "bye $nam";
    }
    Bye($caree);
    echo $caree;
?>

<html>
<body>
    <h1> <?php echo $formated ?> </h1>
    <!-- <h1>products</h1>
       <?php  foreach($products as $value) { ?>
                <p><?php echo $value['title'] ?></p>
                <p><?php echo $value['price'] ?></p>
       <?php } ?>

    <ul>
        <?php foreach($products as $key => $value){ ?>
            <?php if ($value['price'] > 10 ){ ?>
                <li><?php echo $value['title']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul> -->
</body>
</html>
