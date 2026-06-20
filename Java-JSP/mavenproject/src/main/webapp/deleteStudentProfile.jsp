<%-- 
    Document   : deleteStudentProfile
    Created on : 12-Jun-2026, 6:18:15?pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page import="java.io.File"%>

<%
    try {

        int id = Integer.parseInt(
                request.getParameter("id")
        );

        Class.forName(
                "com.mysql.cj.jdbc.Driver"
        );

        Connection con
                = DriverManager.getConnection(
                        "jdbc:mysql://localhost:3306/jsp_curd_db",
                        "root",
                        ""
                );

        // First get image path
        PreparedStatement ps1
                = con.prepareStatement(
                        "SELECT profile FROM student_profile WHERE id=?"
                );

        ps1.setInt(1, id);

        ResultSet rs = ps1.executeQuery();

        String imagePath = "";

        if (rs.next()) {

            imagePath = rs.getString("profile");

        }

        // Delete image from folder
        if (imagePath != null && !imagePath.isEmpty()) {

            String fullPath
                    = application.getRealPath("/")
                    + imagePath.replace("/", File.separator);

            File file = new File(fullPath);

            if (file.exists()) {

                file.delete();

            }
        }

        // Delete record from database
        PreparedStatement ps2
                = con.prepareStatement(
                        "DELETE FROM student_profile WHERE id=?"
                );

        ps2.setInt(1, id);

        int result = ps2.executeUpdate();

        if (result > 0) {

            response.sendRedirect(
                    "studentProfile.jsp"
            );

        } else {

            out.println("Delete Failed");

        }

        rs.close();
        ps1.close();
        ps2.close();
        con.close();

    } catch (Exception e) {

        out.println(e.getMessage());

    }
%>
