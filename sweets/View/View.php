<?php

class View
{

  public function displayCart($array){
    $total = 0;
    $output = '';
    foreach($array as $cart){
      $total += $cart['qty'] * $cart['price'];
      $output .= '<tr>';
      $output .= '<td>' . $cart['sku'] . '</td>';
      $output .= '<td><a href="detail&id=' . $cart['product_id'] . '">';
      $output .= '<img src="images/' . $cart['link'] . '.scale_20.JPG" alt="' . $cart['title'] .'" width="60" height="60" />';
      $output .= '</a>';
      $output .= '</td>';
      $output .= '<td>' . $cart['title'] .'</td>';
      $output .= '<td> Qty: <br>';
      $output .= '<input type="text" value="' . $cart['qty'] . '" name="qty[]" class="s0" size="2" /></td>';
      $output .= '<td align="right">' . sprintf('$ %8.2f', $cart['price']) . '</td>';
      $output .= '<td align="right">' . sprintf('$ %8.2f', $cart['qty'] * $cart['price']) . '</td>';
      $output .= '<td>';
      $output .= '<table>';
      $output .= '<tr>';
      $output .= '<td>Remove</td>';
      $output .= '<td><input type="checkbox" name="remove[]" value="'. $cart['product_id'] . '" title="Remove" /></td>';
      $output .= '</tr>';
      $output .= '<tr>';
      $output .= '<td>Update</td>';
      $output .= '<td><input type="checkbox" name="update[]" value="' . $cart['product_id'] . '" title="Update" /></td>';
      $output .= '</tr>';
      $output .= '</table>';
      $output .= '</td>';
      $output .= '</tr>';
    }
    $output .= '<tr>';
    $output .= '<th colspan="5">Products Total:</th>';
    $output .= '<th colspan="2">' . sprintf('$ %10.2f', $total) . '</th>';
    $output .= '</tr>';
    return $output;
  }

  public function displayProducts($page, $linesPerPage, $maxProducts, $products)
  {
  	$offset = $page * $linesPerPage;
  	$output = '';
  	for($x = 0; $x < $linesPerPage; $x++) {
  		if ($x + $offset >= $maxProducts) {
  			break;
  		}
  		$output .= '<li>';
  		$output .= '<div class="image">';
  		$output .= '<a href="detail.php">';
  		$output .= '<img src="images/'
  				 . $products[$x + $offset]['link']
  				 . '.scale_20.JPG" alt="'
  				 . $products[$x + $offset]['title']
  				 . '" width="190" height="130"/>';
  		$output .= '</a>';
  		$output .= '</div>';
  		$output .= '<div class="detail">';
  		$output .= '<p class="name"><a href="detail.php?id='
              . $products[$x + $offset]['product_id']
              . '">'
  				    . $products[$x + $offset]['title']
  				    . '</a></p>';
  		$output .= '<p class="view"><a href="detail.php?id='
              . $products[$x + $offset]['product_id']
              . '">purchase</a> | '
              . '<a href="detail.php?id=' . $products[$x + $offset]['product_id']
              . '">view details >></a></p>';
  		$output .= '</div>';
  		$output .= '</li>';
  	}
  	return $output;
  }


  public function displayDetail($details){
    $output = '';
    $output .= '<div class="images">';
		$output .= '<a href="#">';
		$output .= '<img src="images/' . $details['link'] . '.jpg" alt="' . $details['title'] . '" width="350" />';
		$output .= '</a>';
		$output .= '</div>';
		$output .= '<div class="details">';
    $output .= '<h3>' . $details['sku'] . '</h3><br/>';
    $output .= '<h1 class="name"><b>' . $details['title'] . '</b></h1><br/>';
    $output .= '<p class="desc">' . $details['description'];
    $output .= '</p><br/>';
    $output .= '<p class="view"><b>' . $details['price'] . '</b></p><br/>';
    $output .= '<form action="'.__DIR__.'/purchase.php" method="GET">';
    $output .= '<p class="view">';
    $output .= '<label>Qty:</label> <input type="text" value="1" name="qty" class="s0" size="2" />';
    $output .= '<input type="submit" name="purchase" value="Buy this item" class="button"/>';
    $output .= '<input type="hidden" name="price" value="' . $details['price'] . '" />';
    $output .= '<input type="hidden" name="productID" value="' . $details['product_id'] . '" />';
    $output .= '</p>';
    $output .= '</form>';
    $output .= '</div>';
    return $output;
  }


  public function displayMembers($page, $linesPerPage, $maxMembers, $members)
  {
    $offset = $page * $linesPerPage;
    $output = '';
    for($x = 0; $x < $linesPerPage; $x++) {
      if ($x + $offset >= $maxMembers) {
        break;
      }
      $output .= '<tr>';
      $output .= '<td>' . $members[$x + $offset]['user_id'] . '</td>';
      $output .= '<td><img src="images/m.gif" />' . $members[$x + $offset]['name'] . '</td>';
      $output .= '<td>'  . $members[$x + $offset]['city'] .  '</td>';
      $output .= '<td><img src="images/e.gif" />'  . $members[$x + $offset]['email'] . '</td>';
      $output .= '</tr>';
    }
    return $output;
  }





}
