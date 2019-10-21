package myproject;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class test extends HttpServlet{


	protected void doGet(HttpServletRequest req, HttpServletResponse resp) 
			throws ServletException, IOException {
		int s1 = Integer.parseInt(req.getParameter("inp1"));
		int s2 = Integer.parseInt(req.getParameter("inp2"));
		int s= s1+s2;
		 PrintWriter out = resp.getWriter();
	        out.println(s);	}
}
