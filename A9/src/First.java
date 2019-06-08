

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class First
 */
@WebServlet("/First")
public class First extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public First() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		
		 out.println("<!DOCTYPE html>");
         out.println("<html>");
         out.println("<head>");
         out.println("<title>Servlet First</title>");            
         out.println("</head>");
         out.println("<body><center>");
         out.println("<h1>Product Details</h1>");
         
		
		String name=request.getParameter("pname");
		int id=Integer.parseInt(request.getParameter("productId"));
		String category=request.getParameter("category");
		String description=request.getParameter("description");
		String price=request.getParameter("price");
		String quantity=request.getParameter("quantity");
		
		out.println("<table width=\"50%\">"
                + "<tr><th>Product Id</th><td>"+id+"</td></tr>"
                + "<tr><th>Product Name</th><td>"+name+"</td></tr>"
                + "<tr><th>Product Category</th><td>"+category+"</td></tr>"
                + "<tr><th>Price/Item</th><td>"+price+"</td></tr>"
                + "<tr><th>Quantity</th><td>"+quantity+"</td></tr>"
                + "<tr><th>Description</th><td>"+description+"</td></tr>"
                + "</table>");
		
		HttpSession session=request.getSession();
		session.setAttribute("id", id);
		
		RequestDispatcher rd= request.getRequestDispatcher("Second");
		rd.include(request, response);

				
				
		
	}

}
