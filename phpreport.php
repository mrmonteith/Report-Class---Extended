<?php
# phpreport.php - Using an OOP Report Class - Extended Version
# Created:   Michael Monteith
# Date:     3/10/2024
#   The purpose is to make an adaptable report that may have mixed columns
/*
    • The addColumn method accepts an optional position parameter to specify where the new column   
        should be inserted.
    • The removeColumn method removes a column by name and re-indexes the remaining columns.
*/
    include_once "classes/report.class.php";

    // Example usage:
    $myReport = new Report("Sales Report", "2024-02-12", "John Doe");
    $myReport->addColumn("Revenue", "$100,000");
    $myReport->addColumn("Expenses", "$50,000", 1);     // Add Expenses column at index 1
    $myReport->addColumn("Profit", "$50,000", 2);       // Add Profit column at index 2
    $myReport->removeColumn("Expenses");                // Remove Expenses column
    echo $myReport->generateReport();

?>