<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<table>
<tr>
	<th>Name</th>	
	<th>Address</th>
	<th>Gender</th>
	<th>Language</th>
	<th>City</th>
</tr>
<xsl:for-each select="Customer">
<tr>
	<td><xsl:value-of select="name"/></td>
	<td><xsl:value-of select="address"/></td>
	<td><xsl:value-of select="gender"/></td>
	<td><xsl:value-of select="language"/></td>
	<td><xsl:value-of select="city"/></td>
</tr>
</xsl:for-each> 
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

