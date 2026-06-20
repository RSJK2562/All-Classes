<%-- 
    Document   : addStudentProfile.jsp
    Created on : 10-Jun-2026, 4:41:24 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Student Profile</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">

            <div class="card shadow">

                <div class="card-header bg-success text-white">
                    <h3>Add Student Profile</h3>
                </div>

                <div class="card-body">

                    <form action="AddStudentProfileServlet" method="post" enctype="multipart/form-data">
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>

                            <select name="studentId" class="form-select" required>

                                <option value="">Select Name</option>

                                <%
                                    try {

                                        Class.forName("com.mysql.cj.jdbc.Driver");

                                        Connection con = DriverManager.getConnection(
                                                "jdbc:mysql://localhost:3306/jsp_curd_db",
                                                "root",
                                                ""
                                        );

                                        Statement st = con.createStatement();

                                        ResultSet rs = st.executeQuery(
                                                "SELECT id, name FROM students ORDER BY name"
                                        );

                                        while (rs.next()) {
                                %>

                                <option value="<%= rs.getInt("id")%>">
                                    <%= rs.getString("name")%>
                                </option>

                                <%
                                        }

                                        rs.close();
                                        st.close();
                                        con.close();

                                    } catch (Exception e) {
                                        out.println(e);
                                    }
                                %>

                            </select>
                        </div>

                        <!-- Change Photo -->
                        <div class="mb-3">
                            <label class="form-label">Change Photo</label>

                            <input name="profile"
                                   type="file"
                                   class="form-control"
                                   required></input>
                        </div>

                        <!-- Buttons -->
                        <button type="submit"
                                class="btn btn-success">
                            Save Student
                        </button>

                        <a href="index.jsp"
                           class="btn btn-secondary">
                            Back
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </body>
</html>
