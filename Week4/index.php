<?php

require_once( __DIR__ . '/models/ABA.php');
require_once( __DIR__ . '/models/Wing.php');
require_once( __DIR__ . '/models/PiPay.php');

echo '<h1> Payment Type </h1>';

    $Payment = [
        new ABA(5, 1, "ABA"),
        new ABA(4, 1, "ABA"),
        new ABA(5, 1, "ABA"),
        new ABA(10, 1, "ABA"),

        new Wing(3, 2, "Wing"),
        new Wing(15, 1, "Wing"),
        new Wing(2, 1, "Wing"),

        new PiPay(6, 1, "PiPay")
    ];

    function renderDisplayByType($Payment, $Method) 
    {
        $itemQty = 1;   
        $str = '<table border="1"><tr><th> Item  </th><th> Price </th><th> Quantity </th><th> Method </th><th> Total </th></tr>';

        foreach ($Payment as $aba) {
            $str .= $aba->getPaymentType() === $Method ? 
            // if Method match
            '<tr><td> Item '. $itemQty++ .'</td><td>' . $aba->getPrice() . '</td><td>' . $aba->getQty() . '</td><td>'. $aba->getPaymentType() .'</td><td>'. $aba->getTotal() .'</td></tr>'
            : 
            // if fales
            ' ';
        }

        $str .= '</table>';
        return $str;
    }

    function renderDisplayAll($Payment) 
    {
        $itemQty = 1;   
        $str = '<table border="1"><tr><th> Item  </th><th> Price </th><th> Quantity </th><th> Method </th><th> Total </th></tr>';

        foreach ($Payment as $type) {
            $str .= '<tr><td> Item '. $itemQty++ .'</td><td>' . $type->getPrice() . '</td><td>' . $type->getQty() . '</td><td>'. $type->getPaymentType() .'</td><td>'. $type->getTotal() .'</td></tr>';
        }

        $str .= '</table>';
        return $str;
    }

    function TotalSales($Payment, $Method) {
        $TotalSales = 0;
        foreach ($Payment as $type) {
            $TotalSales += $type->getPaymentType() === $Method ? $type->getTotal() : 0;
        }
        return $TotalSales;
    }

    // Question 1 Number of sales by ABA method
    echo '<h2> 1. Number of sales by ABA method </h2>';
    echo renderDisplayByType($Payment, "ABA");
    echo '<h4> Number of sales by ABA method = ' . TotalSales($Payment, "ABA") . '</h4>';

    // Question 2 Number of sales by PiPay and Wing method
    echo '<h2> 2. Number of sales by PiPay and Wing method </h2>';
    echo renderDisplayByType($Payment, "Wing"), '<br>', renderDisplayByType($Payment, "PiPay");
    $PiPay_WingTotal = TotalSales($Payment, "PiPay") + TotalSales($Payment, "Wing");
    echo '<h4> Number of sales by Wing and PiPay method = '. $PiPay_WingTotal . '</h4>';

    // Question 3 Display all sales ordering by biggest total amount
    echo '<h2> 3. Display all sales ordering by biggest total amount </h2>';
    usort($Payment, fn ($m1, $m2) => $m2->getTotal() <=> $m1->getTotal());
    echo renderDisplayAll($Payment);
?>