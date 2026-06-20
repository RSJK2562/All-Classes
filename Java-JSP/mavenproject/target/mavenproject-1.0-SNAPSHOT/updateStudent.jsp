<%-- 
    Document   : updateStudent
    Created on : 07-Jun-2026, 4:23:17 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%
try {

    int id = Integer.parseInt(request.getParameter("id"));

    String name = request.getParameter("name");
    String email = request.getParameter("email");
    String dob = request.getParameter("dob");
    String gender = request.getParameter("gender");
    String course = request.getParameter("course");
    String address = request.getParameter("address");

    String[] hobbiesArray = request.getParameterValues("hobbies");

    String hobbies = "";

    if(hobbiesArray != null){
        hobbies = String.join(", ", hobbiesArray);
    }

    Class.forName("com.mysql.cj.jdbc.Driver");

    Connection con = DriverManager.getConnection(
        "jdbc:mysql://localhost:3306/jsp_curd_db",
        "root",
        ""
    );

    String sql = "UPDATE students SET "
               + "name=?, email=?, dob=?, gender=?, "
               + "course=?, hobbies=?, address=? "
               + "WHERE id=?";

    PreparedStatement ps = con.prepareStatement(sql);

    ps.setString(1, name);
    ps.setString(2, email);
    ps.setString(3, dob);
    ps.setString(4, gender);
    ps.setString(5, course);
    ps.setString(6, hobbies);
    ps.setString(7, address);
    ps.setInt(8, id);

    int result = ps.executeUpdate();

    if(result > 0){

        response.sendRedirect("index.jsp");

    }else{

        out.println("Record Not Updated");

    }

    ps.close();
    con.close();

} catch(Exception e){

    out.println("Error : " + e.getMessage());

}
%>