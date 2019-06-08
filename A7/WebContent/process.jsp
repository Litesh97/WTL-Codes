<%@page import="javax.xml.ws.Response"%>
<%@page import="org.apache.coyote.Request"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"
    import="java.io.*,java.util.*,java.sql.*"
    %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<%
String veg=request.getParameter("veg");
String nveg=request.getParameter("non");
String mainc=request.getParameter("main");
int qveg=Integer.parseInt(request.getParameter("qvstarter"));
int qnon=Integer.parseInt(request.getParameter("qnstarter"));
int qmain=Integer.parseInt(request.getParameter("qmain"));

//Class.forName("com.mysql.jdbc.Driver");
  Class.forName("com.mysql.cj.jdbc.Driver");
  Connection con=DriverManager.getConnection("jdbc:mysql://localhost/test?useSSL=false","root","ac21");
Statement st=con.createStatement();
ResultSet rs1=null;
ResultSet rs2=null+
ResultSet rs3=null;


String query1 = "select prize from food where name='"+veg+"'";
String query2 = "select prize from food where name ='"+nveg+"'";
String query3= "select prize from food where name=\""+mainc+"\";";

rs1=st.executeQuery(query1);
rs1.next();
int vegprice=rs1.getInt("prize")*qveg;

rs2=st.executeQuery(query2);
rs2.next();
int nonvegprice=rs2.getInt("prize")*qnon;

rs3=st.executeQuery(query3);
rs3.next();
int mainprice=rs3.getInt("prize")*qmain;

%>

<table>
<tr>
<th>food</th>
<th>price</th>
</tr>

<tr>
<td>veg Starter</td>
<td><%=vegprice%></td>
</tr>

<tr>
<td>Non veg Starter</td>
<td><%=nonvegprice%></td>
</tr>

<tr>
<td>Main Course</td>
<td><%=mainprice%></td>
</tr>
</table>

</body>
</html>
