<?php
# report.class.php - Using an OOP Report Class
# Created:   Michael Monteith
# Date:     3/10/2024
#   The purpose is to make an adaptable report that may have mixed columns

/*
    • Define a Report class with properties for common columns (title, date, and author) and an array for
    dynamic columns.
    • The addColumn method allows you to add custom columns to the report.
    • The generateReport method constructs the report content by combining common and dynamic columns.
    class Report
    * Here’s an extended version of the Report class with support for adding and removing columns

    To dynamically add or remove columns in the middle of a report, you can enhance the Report class. 
    1. Adding Columns:
        ◦ Create a method (e.g., addColumn) that allows you to add a new column to the report.
        ◦ Specify the position (index) where the column should be inserted.
        ◦ Shift existing columns to accommodate the new one.
    2. Removing Columns:
        ◦ Implement a method (e.g., removeColumn) to remove a column by its name.
        ◦ Adjust the remaining columns to fill the gap left by the removed column.
*/
class Report
{
    private $title;
    private $date;
    private $author;
    private $dynamicColumns = [];
    public function __construct($title, $date, $author)
    {
       $this->title = $title;
        $this->date = $date;
       $this->author = $author;
    }

    public function addColumn($columnName, $columnData, $position = null)
    {
        if ($position === null)
        {
            $this->dynamicColumns[] = [$columnName, $columnData];
        } else
        {
            array_splice($this->dynamicColumns, $position, 0, [[$columnName, $columnData]]);
        }
    }

    public function removeColumn($columnName)
    {
        foreach ($this->dynamicColumns as $index => $column)
        {
            if ($column[0] === $columnName)
            {
                unset($this->dynamicColumns[$index]);
            break;
            }
        }
        // Re-index the array to remove gaps
        $this->dynamicColumns = array_values($this->dynamicColumns);
    }

    public function generateReport()
    {
        $reportContent = "Report: {$this->title}\n";
        $reportContent .= "Date: {$this->date}\n";
        $reportContent .= "Author: {$this->author}\n";
        foreach ($this->dynamicColumns as $column)
        {
            $reportContent .= "{$column[0]}: {$column[1]}\n";
        }
        return $reportContent;
    }
}