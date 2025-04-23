<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Library Books</title>
            </head>
            <body>
                <h1>Filtered Book List</h1>
                <ul>
                    <xsl:for-each select="//book[contains(title, 'Cyber') or starts-with(author, 'J')]">
                        <li>
                            <b>Title:</b> <xsl:value-of select="title" /><br />
                            <b>Author:</b> <xsl:value-of select="author" /><br />
                            <b>Published Year:</b> <xsl:value-of select="published_year" /><br />
                        </li>
                    </xsl:for-each>
                </ul>

                <h2>Available Books</h2>
                <ul>
                    <xsl:for-each select="//book[available/text()='true']">
                        <li>
                            <b>Title:</b> <xsl:value-of select="title" />
                        </li>
                    </xsl:for-each>
                </ul>
                
                <h2>Books Count</h2>
                <p>Total Books: <xsl:value-of select="count(//book)" /></p>
                
                <h2>Books Not Available</h2>
                <ul>
                    <xsl:for-each select="//book[not(available/text()='true')]"><li>
                        <b>Title:</b> <xsl:value-of select="title" />
                    </li></xsl:for-each>
                </ul>
                
                <h2>First Book in List</h2>
                <p><xsl:value-of select="//book[1]/title" /></p>
                
                <h2>Last Book in List</h2>
                <p><xsl:value-of select="//book[last()]/title" /></p>

                <h1>Borrowers</h1>
                <ul>
                <xsl:for-each select="//borrower">
                    <li>
                    <b>Borrower ID:</b> <xsl:value-of select="@id" /><br />
                    <b>Name:</b> <xsl:value-of select="name" /><br />
                    <b>Email:</b> <xsl:value-of select="email" /><br />
                    <b>Borrowed Books:</b>
                    <ul>
                        <xsl:for-each select="borrowed_books/book_id">
                        <li>
                            <xsl:value-of select="//book[@id=current()]/title" />
                        </li>
                        </xsl:for-each>
                    </ul>
                    </li>
                </xsl:for-each>
                </ul>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
