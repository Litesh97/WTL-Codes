package com.ac;
import java.io.*;
import java.util.*;

import javax.servlet.GenericServlet;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;


public class Calculate extends GenericServlet {

	@Override
	public void service(ServletRequest request, ServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html");
		PrintWriter out= response.getWriter();
		out.println("<html><head><title>Calculate Tax</title><head>");
		out.println("<body><center><h1>Calculation Of Tax</h1></center>");
		double income=Double.parseDouble(request.getParameter("income"));
		String name=request.getParameter("name");
		double tax=0;
		if(income<=250000)
		{
			tax=0;
		}
		else if(income>250000 && income<=500000)
		{
			tax=income*0.10;
		}
		else
		{
			tax=income*0.20;
		}
		
		out.println("<h1>Name: "+name+"</h1>");
        out.println("<h1>Income: "+income+"</h1>");
        out.println("<h1>Tax: "+tax+"</h1>");
        out.println("<h1>Total: "+(tax+income)+"</h1>");
         out.println("</body>");
         out.println("</html>");
	}

}
