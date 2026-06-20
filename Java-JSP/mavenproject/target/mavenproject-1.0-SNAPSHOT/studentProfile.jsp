<%-- 
    Document   : studentProfile
    Created on : 07-Jun-2026, 4:49:32 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Profile</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Student Profiles</h3>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">
                        <h5>Student List</h5>

                        <a href="index.jsp" class="btn btn-secondary">
                            Student List
                        </a>

                        <a href="addStudentProfile.jsp" class="btn btn-success">
                            Add Student Profile
                        </a>
                    </div>

                    <table class="table table-bordered table-hover table-striped">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Profile</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>

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
                                            "SELECT * FROM student_profile"
                                    );

                                    int i = 1;

                                    while (rs.next()) {

                                        int profileId = rs.getInt("id");
                                        int studentId = rs.getInt("student_id");

                                        PreparedStatement ps = con.prepareStatement(
                                                "SELECT name FROM students WHERE id=?"
                                        );

                                        ps.setInt(1, studentId);

                                        ResultSet studentRs = ps.executeQuery();

                                        String studentName = "";

                                        if (studentRs.next()) {
                                            studentName = studentRs.getString("name");
                                        }

                                        String profile = rs.getString("profile");
                            %>

                            <tr>

                                <td><%= i++%></td>

                                <td><%= studentName%></td>

                                <td>

                                    <%
                                        if (profile != null && !profile.isEmpty()) {
                                    %>

                                    <img src="<%= profile%>"
                                         width="60"
                                         height="60"
                                         class="rounded-circle border">

                                    <%
                                    } else {
                                    %>

                                    No Image

                                    <%
                                        }
                                    %>

                                </td>

                                <td>

                                    <a href="editStudentProfile.jsp?id=<%= profileId%>"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a href="deleteStudentProfile.jsp?id=<%= profileId%>"
                                       class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this profile?')">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                            <%
                                        studentRs.close();
                                        ps.close();
                                    }

                                    rs.close();
                                    st.close();
                                    con.close();

                                } catch (Exception e) {

                                    out.println(e.getMessage());

                                }
                            %>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </body>
</html>
