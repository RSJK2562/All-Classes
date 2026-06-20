<%-- 
    Document   : deleteStudent
    Created on : 07-Jun-2026, 4:28:51 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%
try {

    int id = Integer.parseInt(request.getParameter("id"));

    Class.forName("com.mysql.cj.jdbc.Driver");

    Connection con = DriverManager.getConnection(
        "jdbc:mysql://localhost:3306/jsp_curd_db",
        "root",
        ""
    );

    PreparedStatement ps = con.prepareStatement(
        "DELETE FROM students WHERE id=?"
    );

    ps.setInt(1, id);

    int result = ps.executeUpdate();

    if(result > 0){

        response.sendRedirect("index.jsp");

    }else{

        out.println("Record Not Found");

    }

    ps.close();
    con.close();

} catch(Exception e){

    out.println("Error : " + e.getMessage());

}
%>
