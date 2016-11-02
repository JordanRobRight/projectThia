<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>



  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Siam Thai</title>
  <meta http-equiv="Content-Language" content="en-us" />
  
  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="MSSmartTagsPreventParsing" content="true" />
  
  <meta name="description" content="Siam Thai" />
  <meta name="keywords" content="thai, lao, restaurant, milwaukee, authentic" /><meta name="description" content="Description" />
  
  <meta name="Lumiere Imagery" content="CONTENT" />
  <link href="themes/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <style type="text/css" media="all">
  @import "master.css";
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
<script type="text/javascript">         
    $(document).ready(function(){               
                
        $('#slider-code').tinycarousel({ pager: true });
        
    });
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
              
    
</head>

<body>
<div class="top" id="hboard_home">
<img src="images/header01.png" width="1362" height="195" alt=""/> </div>
<div id="main-nav">
  <?php
$myFile = "topnav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
</div>
<div id="menu-nav">
<?php
$myFile = "menunav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
</div>

<div id="page-container">
<div id="specials" class="container">
  <a id="apps"><h1>Appetizers</h1></a>
  
  <h2>1. Egg roll (3) $3.95</h2>
  <p>Rolled-up rice paper wrap stuffed with cabbage, carrots, and vermicelli noodles, and then deep fried to a crispy golden-brown. Served with sweet and sour sauce.</p>
  
  <h2>2. Pot Stickers/Dumplings (5) $4.95</h2>
  <p>A crescent-shaped dumpling filled with finely chopped vegetable and ground chicken, and then can be served deep fried or steamed. Served with spicy ginger dipping sauce.</p>

  <h2>3. Crab Rangoon (5) $4.95</h2>
  <p>Deep-fried to a crispy golden brown, thin wonton skin wrapper stuffed with minced crab meat, cream cheese, scallion and onion. Served with sweet and sour sauce. </p>

  
  <h2>4. Fried Tofu (5) $4.95</h2>
  <p>Deep-fried vegetarian bean curd served with sweet and sour sauce.</p>

  <h2>5. Spring Roll (2) $4.95</h2>
  <p>Freshly made cold Thai crepe filled with bean sprouts, cucumber, lettuce, tofu, rolled up in rice sheet wrapper. Served with homemade sauce topped with crushed peanuts.</p>

  <h2>6. Satay Chicken (5) $5.95</h2>
  <p>Skewered and grilled chicken breast, marinated in curry powder and coconut milk, served with a side of creamy peanut sauce and refreshing cucumber relish.</p>

  <h2>7. Thai Chicken Wings (5) $5.95</h2>
  <p>Crispy deep fried chicken wings marinated with spices together with finely chopped or shredded lemongrass. Served with a sweet chili sauce.</p>

  <h2>*8. Thai Beef Jerky $6.95</h2>
  <p>Briefly dehydrated in the sun, often called sun-dried beef.</p>

  <h2>9. Crispy Squid $6.95</h2>
  <p>Crispy calamari squid lightly battered and deep fried until golden-brown. Served with sweet and sour sauce.</p>

  <h2>10. Thai Sausage $6.95</h2>
  <p>A grilled sausage of ground pork mixed with spices and Thai herbs.</p>

  <h2>11. Fried Quail $9.95</h2>
  <p>Fried whole quail garnished with ginger and garlic sauces.</p>
 
  <a id="noodles"><h1>Noodles Soup</h1></a>
  
  <h2>12. Pho $8.95</h2>
  <p>A soup of Vietnamese origin, consisting of rice noodles, onions, seasonings, and thinly sliced rare beef or chicken in a bone marrow broth.</p>

  <h2>13. Bahmee Noodle Soup $8.95</h2>
  <p>Yellow egg noodle soup with bean sprouts, garlic. peanuts, and romaine.</p>

  <h2>14. Khao Poon $8.95</h2>
  <p>Rice vermicelli noodles in a creamy homemade coconut soup broth, steam chicken breast. Served with cabbage, bean sprouts, and carrots.</p>

  <h2>15. Khao Piek $8.95</h2>
  <p>Homemade rice noodles similar to Udon noodles, in a chicken soup broth.</p>

  

  <h1><a id="soups">Soups</a></h1>

  <h2>16. Tom Yum Soup (S) $3.95 (L) $7.95</h2>
  <p>Thailand's famous distinctive hot and sour flavored broth, with chicken, mushroom, lemon grass, galangal, cilantro, and scallions.</p>

  <h2>17. Tom Kha (S) $ 3.95 (L) $7.95</h2>
  <p>Traditional Thai style seasoned chicken in a soft creamy soup flavored with coconut milk, lemon grass, galangal, lime juice, mushrooms, cilantro, and scallions.</p>

  <h2>*18. Chicken Corn Soup (S) $3.95 (L) $7.95</h2>
  <p>A thickened sweet and salty flavored chicken broth, shredded chicken meat and sweet corn.</p>

  <h2>19. Vegetable Soup (S) $3.95 (L) $7.95</h2>
  <p>Clear soup with assorted mixed vegetables</p>
  
  <h2>20. Tofu Soup (S)$3.95 (L)$7.95</h2>
  <p>A clear soup with soft tofu, carrots, white onion, and cilantro.</p>
  
  <h2>21. Wonton Soup (S) $5.95 (L) $8.95 </h2>
  <p>Minced chicken filled wonton dumplings in a clear soup broth, with shredded chicken, onion, green onion, carrots, and cilantro.</p>
  
  <h2>22. Seafood Soup $12.95</h2>
  <p>Originated from China, a thickened soup broth with shredded crab meat, and shrimp. </p>

  <a id="salads"><h1>Salads</h1></a>

  <h2>23. Som Tum (papaya salad) $5.95</h2>
  <p>Shredded green papaya mixed with garlic, tomatoes, fresh chili and spicy or mild homemade sauce. Served with a side of fresh cabbage.</p>
  
  <h2>24. Tum Maktang (cucumber salad) $5.95</h2>
  <p>Shredded cucumber mixed with garlic, tomatoes, fresh chili, and spicy or mild homemade sauce</p>

  <h2>25. Beef Salad $7.95 </h2>
  <p>Slice of beef mixed with onions, cucumbers, green onions, and homemade sauce.</p>
  
  <h2>26. Laab $7.95</h2>
  <p>A spicy and sour salad of minced meat (mainly beef, pork, or chicken), shallots or onions, lime juice, fish sauce, chilies, and mint, Served with lettuce.</p>

  <h2>27. Yumwoonsen $8.95</h2>
  <p>A spicy salad with a mixture of clear noodles with shrimp and chicken lime juice and green onion. </p>
  
  <h2>28. Seafood Salad $11.95</h2>
  <p>Combination of mixed seafood, pickle garlic, carrot, red & green bell peppers, tomatoes, cucumber, white onion, cilantro, scallions, and homemade sauce. </p>

  

  <a id="curries"><h1>Curry</h1></a>

  <h2>29. Yellow Curry $8.95</h2>
  <p>Kaeng Kari a rich and creamy curry that is sautéed with onion, potatoes, meat, and creamy coconut milk to tone down the overall spiciness of the dish.</p>
  
  <h2>30. Red Curry $8.95</h2>
  <p>Keang Phet a spicy curry soup made with dried chilies, coconut milk, bamboo shoots, bell peppers, fresh holy basil.</p>

  <h2>31. Green Curry $8.95</h2>
  <p>Kaeng Khiao wan a coconut curry made with fresh green chilies, bamboo shoots, green beans, and flavored with Thai basil.</p>
  
  <h2>32. Massamun Curry $8.95</h2>
  <p>A thick, Indian style curry with roasted dried spices, coconut milk, onion, potatoes, and peanuts.</p>

  <a id="stirfrynoodles"><h1>Stir-Fried Noodles</h1></a>

  <h2>33. Pad Thai $9.95</h2>
  <p>Thin rice noodles sautéed with your choice of meat, egg, bean sprout, green onion, and tamarind sauce topped with crushed peanut and lime.</p>
  
  <h2>34. Pad See Ewe $9.95</h2>
  <p>Stir fried fresh wide rice noodles with your choice of meat, egg, broccoli, fried garlic and house sauce.</p>

  <h2>35. Pad Woon Sen $9.95</h2>
  <p>Stir fried crystal vermicelli noodles with mixed vegetables, eggs, carrots, white and green onion, bell peppers, and bean sprouts.</p>
  
  <h2>36.Pad Kee Mao $9.95</h2>
  <p>Literally means "Drunken Noodles" stir fried rice noodle with bell peppers, chili pepper, onion, holy basil, bean sprouts, and broccoli.</p>

  <h2>37. Pad Spaghetti Kee Mao $9.95</h2>
  <p>Stir fried spaghetti noodle with bell pepper, chili pepper, onion, holy basil, bean sprouts, and broccoli.</p>
  
  <h2>38. Lad Nar $9.95</h2>
  <p>Sautéed wide rice noodles or crispy egg noodles with broccoli, eggs, garlic and well-seasoned gravy sauce.</p>

  <a id="entree"><h1>Entree</h1></a>

  <h2>39. Volcano Chicken $11.95</h2>
  <p>A deep fried lightly battered chicken to a crispy golden brown outer surface and juicy tender white chicken strip core, served on an iron plate bed of sautéed vegetables, and glazed over with special erupting volcano sauce.</p>
  
  <h2>40. Siam Connection $11.95</h2>
  <p>A delicate marriage of pork, chicken, and beef, sautéed with fresh vegetables with a touch of pepper sauce.</p>

  <h2>41. Fried Shrimp and Squid 13.95</h2>
  <p>Fried lightly battered calamari squid and shrimp, served with bell peppers, white onion, dry garlic, and a slight sprinkle of black pepper.</p>
  
  <h2>42. Siam Supreme $9.95</h2>
  <p>Stir-fried choice of meat, with combination of mixed vegetable, and homemade hot sauce.</p>
  
  <h2>43. Pad Kra Pow $9.95</h2>
  <p>Literally translates to "Fried Holy Basil" a stir-fried choice of meat sautéed with basil leaves, hot pepper, garlic, mushroom, and onion.</p>


  <h2>44. Cashew Chicken $9.95</h2>
  <p>Stir-fried choice of meat with cashew nuts, garlic, green onions, bell peppers, carrots, and pineapple with homemade sauce.</p>
  
  <h2>45. Pad Prik Kang $8.95</h2>
  <p>Stir-fried choice of meat with red curry paste, coconut milk, bell peppers, carrots, mushrooms, and holy basil.</p>

  <h2>46. Pad Prik Sod $8.95</h2>
  <p>Sautéed choice of meat with basil leaves, onion, bell peppers, blended in a pepper sauce.</p>

  <h2>47. Beef Pepper Steak $8.95</h2>
  <p>Stir-fried beef with mushrooms, white and green onion, garlic, black peppers, and gravy sauce.</p>
  
  <h2>48. Stir-fried Broccoli $8.95</h2>
  <p>Stir-fried choice of meat with fresh broccoli, garlic, black peppers, and tasty brown sauce.</p>
  
  <h2>49. Garlic stir-fried $8.95</h2>
  <p>Stir-fried choice of meat with fresh crushed garlic, broccoli, mushrooms, and carrots</p>


  <h2>50. Ginger Stir-Fried $8.95</h2>
  <p>Stir-fried choice of meat with fresh ginger, white and green onions, bell pepper, carrots, mushrooms in gravy sauce.</p>
  
  <h2>51. Stir-fried Mix Vegetables $7.95</h2>
  <p>Stir-fried mixed vegetables with garlic and oyster sauce.</p>
  
  <p>((Choice of Meat: Chicken Beef, Pork or Shrimp (+$2.00); Vegetarian: Vegetables, Tofu))</p>

  <a id="friedrice"><h1>Fried Rice</h1></a>

  <h2>52. Siam Fried Rice $8.95</h2>
  <p>Stir-fried choice of meat fried rice with carrots, eggs, white and green onion, tomatoes, and fresh slice of lime.</p>

  <h2>53. Basil Fried Rice $8.95</h2>
  <p>Stir-fried choice of meat fried rice with white onion, mushrooms, and spicy basil leaf.</p>
  
  <h2>54. Curry Fried Rice $8.95</h2>
  <p>Stir-fried choice of meat fried rice with curry powder, eggs, carrots, white onion, tomatoes, and fresh slice of lime. </p>
  
  <h2>55. Vegetable Fried Rice $8.95</h2>
  <p>Stir-fried mixed with vegetable fried rice.</p>


  <h2>56. Pineapple Fried Rice $9.95</h2>
  <p>Stir-fried shrimp and chicken fried rice with light brown cashew nuts, eggs, white and green onions, carrots, sweet and sour pineapple, and fresh slice of lime. </p>
  
  <a id="beverages"><h1>Beverages</h1></a>

  <h2>Bubble Tea Smoothies $3.50</h2>
  <p>Flavors: Mango, Strawberry, Banana, Pineapple, Avocado, Taro, Coconut, Lychee, Watermelon, Green Tea, Thai Tea, and Thai Coffee.</p>
  
  <h2>Thai Iced Tea $3.00</h2>
  
  <h2>Thai Iced Coffee $3.00</h2>

  <h2>Thai Lemonade $3.00</h2>
 
 <p> <h2>Coconut Juice $3.00</h2>
  
  <h2>Canned Soda $1.50</h2>
  
  <h2>Bottled Water $1.25</h2></p>
  
  <a id="desserts"><h1>Desserts</h1></a>


  <h2>Sweet Mango Sticky Rice $4.50</h2>
  
  <h2>Num Wan $4.50</h2>
  
  <h2>Mango Ice Cream $3.50</h2>
  
  <h2>Coconut Ice Cream $3.50</h2>
 
  <h2>Fried Banana $3.00</h2>

  <h2>Lychee $3.00</h2>
</div>
  
  <div id="footer">
  <?php
$myFile = "footernav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
  </div>
</div>

</body>
</html>