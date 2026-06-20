<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%
String name = request.getParameter("name");
String email = request.getParameter("email");
String dob = request.getParameter("dob");
String gender = request.getParameter("gender");
String course = request.getParameter("course");
String address = request.getParameter("address");

String[] hobbiesArr = request.getParameterValues("hobbies");

String hobbies = "";

if(hobbiesArr != null){
    hobbies = String.join(", ", hobbiesArr);
}

try{

    Class.forName("com.mysql.cj.jdbc.Driver");

    Connection con =
        DriverManager.getConnection(
            "jdbc:mysql://localhost:3306/jsp_curd_db",
            "root",
            ""
        );

    String sql =
        "INSERT INTO students(name,email,dob,gender,course,hobbies,address) VALUES(?,?,?,?,?,?,?)";

    PreparedStatement ps =
        con.prepareStatement(sql);

    ps.setString(1, name);
    ps.setString(2, email);
    ps.setString(3, dob);
    ps.setString(4, gender);
    ps.setString(5, course);
    ps.setString(6, hobbies);
    ps.setString(7, address);

    int result = ps.executeUpdate();

    if(result > 0){

        response.sendRedirect("index.jsp");

    }else{

        out.println("Data Not Saved");

    }

}catch(Exception e){

    out.println(e);

}
%>