<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
    
<html>
<head>
    <title>Student Data</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            font-size: 14px;
            background-color: #f4f4f4;
            margin: 20px;
            
        }
        table {
            
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;text-align : center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }

        h1 ,h2{
            text-align:center;
            color:green;
            
        }
    </style>
</head>
    <body style="font-family:Arial; font-size:12pt; background-color:#EEEEEE">
        <h1>Project Team - Unknown</h1>
        <h2>Web Scanner</h2>
        <table border="1">
            <tr>
                
                <th>Name</th>
                <th>Role</th>

            </tr>
            
            <xsl:for-each select="project/member">
                <tr>
                    <td><xsl:value-of select="Name"></xsl:value-of></td>
                    <td><xsl:value-of select="Role"></xsl:value-of></td>
                </tr>
            </xsl:for-each>


        </table>
    
    </body>


</html>

</xsl:template>
</xsl:stylesheet>
    
    
