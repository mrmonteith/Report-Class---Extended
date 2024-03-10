#   The purpose is to make an adaptable report that may have mixed columns


    ##Define a Report class with properties for common columns (title, date, and author) and an array for
    dynamic columns.
    ##The addColumn method allows you to add custom columns to the report.
    ##The generateReport method constructs the report content by combining common and dynamic columns.
    class Report
    ##Here’s an extended version of the Report class with support for adding and removing columns

    To dynamically add or remove columns in the middle of a report, you can enhance the Report class. 
    1. Adding Columns:
        Create a method (e.g., addColumn) that allows you to add a new column to the report.
        Specify the position (index) where the column should be inserted.
        Shift existing columns to accommodate the new one.
    2. Removing Columns:
        Implement a method (e.g., removeColumn) to remove a column by its name.
        Adjust the remaining columns to fill the gap left by the removed column.