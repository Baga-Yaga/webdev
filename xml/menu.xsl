<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head>
    <title>Breakfast Menu</title>
</head>
<body style="font-family:Arial; font-size:12pt; background-color:#EEEEEE">

    <h2>Breakfast Menu</h2>

    <xsl:for-each select="breakfast_menu/food">
        <div style="background-color: teal; color: white; padding: 4px; margin-bottom: 5px; font-weight: bold;">
            <xsl:value-of select="name"/> - <xsl:value-of select="price"/>
        </div>
        <div style="margin-left: 20px; font-size: 12px;">
            <xsl:value-of select="description"/>
            <span style="font-style: italic;"> (<xsl:value-of select="calories"/> calories per serving)</span>
        </div>
    </xsl:for-each>

</body>
</html>

</xsl:template>
</xsl:stylesheet>
